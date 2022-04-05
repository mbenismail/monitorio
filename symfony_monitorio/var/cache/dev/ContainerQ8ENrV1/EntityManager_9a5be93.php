<?php

namespace ContainerQ8ENrV1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere543d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer76411 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5e3e4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getConnection', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getMetadataFactory', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getExpressionBuilder', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'beginTransaction', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getCache', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'transactional', array('func' => $func), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'commit', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->commit();
    }

    public function rollback()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'rollback', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getClassMetadata', array('className' => $className), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'createQuery', array('dql' => $dql), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'createNamedQuery', array('name' => $name), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'createQueryBuilder', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'flush', array('entity' => $entity), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'clear', array('entityName' => $entityName), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->clear($entityName);
    }

    public function close()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'close', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->close();
    }

    public function persist($entity)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'persist', array('entity' => $entity), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'remove', array('entity' => $entity), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'refresh', array('entity' => $entity), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'detach', array('entity' => $entity), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'merge', array('entity' => $entity), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'contains', array('entity' => $entity), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getEventManager', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getConfiguration', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'isOpen', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getUnitOfWork', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getProxyFactory', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'initializeObject', array('obj' => $obj), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'getFilters', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'isFiltersStateClean', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'hasFilters', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return $this->valueHoldere543d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer76411 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere543d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere543d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere543d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, '__get', ['name' => $name], $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        if (isset(self::$publicProperties5e3e4[$name])) {
            return $this->valueHoldere543d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere543d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere543d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere543d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere543d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, '__isset', array('name' => $name), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere543d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere543d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, '__unset', array('name' => $name), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere543d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere543d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, '__clone', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        $this->valueHoldere543d = clone $this->valueHoldere543d;
    }

    public function __sleep()
    {
        $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, '__sleep', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;

        return array('valueHoldere543d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer76411 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer76411;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer76411 && ($this->initializer76411->__invoke($valueHoldere543d, $this, 'initializeProxy', array(), $this->initializer76411) || 1) && $this->valueHoldere543d = $valueHoldere543d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere543d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere543d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
