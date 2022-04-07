<?php

namespace ContainerFu10tuP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Controller_SwaggerYamlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'nelmio_api_doc.controller.swagger_yaml' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Controller\YamlDocumentationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Controller/YamlDocumentationController.php';

        return $container->services['nelmio_api_doc.controller.swagger_yaml'] = new \Nelmio\ApiDocBundle\Controller\YamlDocumentationController(($container->services['nelmio_api_doc.render_docs'] ?? $container->load('getNelmioApiDoc_RenderDocsService')));
    }
}
