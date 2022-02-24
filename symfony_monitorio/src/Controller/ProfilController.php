<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Form\ProfilType;
use App\Repository\ProfilRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api", name= "profils")
 */
class ProfilController extends AbstractController
{
    /**
     * @Route("/profils", name="profil_index", methods={"GET"})
     */
    public function index(ProfilRepository $profilRepository): Response
    {
        // return $this->render('profil/index.html.twig', [
        //     'profils' => $profilRepository->findAll(),
        // ]);

        $data = $profilRepository->findAll();
        return $this->response($data);
    }

    /**
     * @Route("/profil/new", name="profil_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
       
        try{
            $request = $this->transformJsonBody($request);
            if (!$request || !$request->get('NomProfil') ||!$request->request->get('ProfilDesc') ||!$request->request->get('ProfilSys')){
             throw new \Exception();
            } 
            $profil = new Profil();
            $profil->setNomProfil($request->get('NomProfil'));
            $profil->setProfilDesc($request->get('ProfilDesc'));
            $profil->setProfilSys($request->get('ProfilSys'));
            $entityManager->persist($profil);
            $entityManager->flush();
            
            $data = [
             'status' => 200,
             'success' => "Profile added successfully",
            ];
            return $this->response($data);
        
           }catch (\Exception $e){
            $data = [
             'status' => 422,
             'errors' => $e,
            ];
            return $this->response($data, 422);
           }
          }
       
    


    /**
     * @Route("/profils/{id}", name="profil_show", methods={"GET"})
     */
    public function show(ProfilRepository $profilRepository, $id)
    {
        $profil = $profilRepository->find($id);
 
    if (!$profil){
     $data = [
      'status' => 404,
      'errors' => "Profile not found",
     ];
     return $this->response($data, 404);
    }
    return $this->response($profil);
   }
    

    /**
     * @Route("/profils/{id}/edit", name="profil_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, EntityManagerInterface $entityManager, ProfilRepository $profilRepository, $id)
    {
        try{
            $profil = $profilRepository->find($id);
        
            if (!$profil){
             $data = [
              'status' => 404,
              'errors' => "Profile not found",
             ];
             return $this->response($data, 404);
            }
        
            $request = $this->transformJsonBody($request);
        
            if (!$request || !$request->get('NomProfil') || !$request->request->get('ProfilDesc') || !$request->request->get('ProfilSys')){
             throw new \Exception();
            }
        
            $profil->setNomProfil($request->get('NomProfil'));
            $profil->setProfilDesc($request->get('ProfilDesc'));
            $profil->setProfilSys($request->get('ProfilSys'));

            $entityManager->flush();
        
            $data = [
             'status' => 200,
             'errors' => "Profile updated successfully",
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
     * @Route("/profils/{id}", name="profil_delete", methods={"POST"})
     */
    public function delete(EntityManagerInterface $entityManager, ProfilRepository $profilRepository, $id)
       { 
    $profil = $profilRepository->find($id);
    if (!$profil){
     $data = [
      'status' => 404,
      'errors' => "Profile not found",
     ];
     return $this->response($data, 404);
    }
 
    $entityManager->remove($profil);
    $entityManager->flush();
    $data = [
     'status' => 200,
     'errors' => "Profile deleted successfully",
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