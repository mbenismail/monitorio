<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/api")
 */
class UserController extends AbstractController
{
    

    /**
     * @Route("/Users", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {

        $data = $userRepository->findAll();
        return $this->response($data);
    }

    /**
     * @Route("/Users/new", name="User_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
       
        try{
            $request = $this->transformJsonBody($request);
            if (!$request || !$request->get('Login') ||!$request->request->get('Nom') ||!$request->request->get('Prenom')){
             throw new \Exception();
            } 
            $user = new User();
            $user->setLogin($request->get('Login'));
            $user->setNom($request->get('Nom'));
            $user->setPrenom($request->get('Prenom'));
            $entityManager->persist($user);
            $entityManager->flush();
            $data = [
             'status' => 200,
             'success' => "User added successfully",
            ];
            return $this->response($data);
        
           }catch (\Exception $e){
            $data = [
             'status' => 422,
             'errors' => "Data no valid",
            ];
            return $this->response($data, 422);
           }
          }
       
    


    /**
     * @Route("/Users/{id}", name="User_show", methods={"GET"})
     */
    public function show(UserRepository $UserRepository, $id)
    {
        $user = $UserRepository->find($id);
 
    if (!$user){
     $data = [
      'status' => 404,
      'errors' => "User not found",
     ];
     return $this->response($data, 404);
    }
    return $this->response($user);
   }
    

    /**
     * @Route("/Users/{id}/edit", name="user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, EntityManagerInterface $entityManager, UserRepository $UserRepository, $id)
    {
        try{
            $user = $UserRepository->find($id);
        
            if (!$user){
             $data = [
              'status' => 404,
              'errors' => "User not found",
             ];
             return $this->response($data, 404);
            }
        
            $request = $this->transformJsonBody($request);
        
            if (!$request || !$request->get('Login') || !$request->request->get('Nom') || !$request->request->get('Prenom')){
             throw new \Exception();
            }
        
            $user->setLogin($request->get('Login'));
            $user->setNom($request->get('Nom'));
            $user->setPrenom($request->get('Prenom'));

            $entityManager->flush();
        
            $data = [
             'status' => 200,
             'errors' => "User updated successfully",
            ];
            return $this->response($data);
        
           }catch (\Exception $e){
            $data = [
             'status' => 422,
             'errors' => "Data no valid",
            ];
            return $this->response($data, 422);
           }
        
    }

    /**
     * @Route("/Users/{id}", name="users_delete", methods={"POST"})
     */
    public function delete(EntityManagerInterface $entityManager, UserRepository $UserRepository, $id)
       { 
    $user = $UserRepository->find($id);
    if (!$user){
     $data = [
      'status' => 404,
      'errors' => "User not found",
     ];
     return $this->response($data, 404);
    }
 
    $entityManager->remove($user);
    $entityManager->flush();
    $data = [
     'status' => 200,
     'errors' => "User deleted successfully",
    ];
    return $this->response($data);
   }
 
public function response($data, $status = 200, $headers = [])
{
 return new JsonResponse($data, $status, $headers);
}

protected function transformJsonBody(\Symfony\Component\HttpFoundation\Request $request)
{
 $data = json_decode($request->getContent(), true);

 if ($data === null) {
  return $request;
 }

 $request->request->replace($data);

 return $request;
}
}
