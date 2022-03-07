<?php

namespace ContainerFHS3nNs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_ObjectModel_PropertyDescribers_CompoundService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.object_model.property_describers.compound' shared service.
     *
     * @return \Nelmio\ApiDocBundle\PropertyDescriber\CompoundPropertyDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/PropertyDescriber/PropertyDescriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Describer/ModelRegistryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Describer/ModelRegistryAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/PropertyDescriber/CompoundPropertyDescriber.php';

        return $container->privates['nelmio_api_doc.object_model.property_describers.compound'] = new \Nelmio\ApiDocBundle\PropertyDescriber\CompoundPropertyDescriber(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['nelmio_api_doc.object_model.property_describers.array'] ?? $container->load('getNelmioApiDoc_ObjectModel_PropertyDescribers_ArrayService'));
            yield 1 => ($container->privates['nelmio_api_doc.object_model.property_describers.boolean'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.boolean'] = new \Nelmio\ApiDocBundle\PropertyDescriber\BooleanPropertyDescriber()));
            yield 2 => ($container->privates['nelmio_api_doc.object_model.property_describers.float'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.float'] = new \Nelmio\ApiDocBundle\PropertyDescriber\FloatPropertyDescriber()));
            yield 3 => ($container->privates['nelmio_api_doc.object_model.property_describers.integer'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.integer'] = new \Nelmio\ApiDocBundle\PropertyDescriber\IntegerPropertyDescriber()));
            yield 4 => ($container->privates['nelmio_api_doc.object_model.property_describers.string'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.string'] = new \Nelmio\ApiDocBundle\PropertyDescriber\StringPropertyDescriber()));
            yield 5 => ($container->privates['nelmio_api_doc.object_model.property_describers.date_time'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.date_time'] = new \Nelmio\ApiDocBundle\PropertyDescriber\DateTimePropertyDescriber()));
            yield 6 => ($container->privates['nelmio_api_doc.object_model.property_describers.object'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.object'] = new \Nelmio\ApiDocBundle\PropertyDescriber\ObjectPropertyDescriber()));
            yield 7 => ($container->privates['nelmio_api_doc.object_model.property_describers.compound'] ?? $container->load('getNelmioApiDoc_ObjectModel_PropertyDescribers_CompoundService'));
        }, 8));
    }
}
