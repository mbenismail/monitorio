<?php

namespace ContainerXcJhtQv;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere4232 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerad41c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa14b0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getConnection', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getMetadataFactory', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getExpressionBuilder', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'beginTransaction', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getCache', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getCache();
    }

    public function transactional($func)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'transactional', array('func' => $func), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'wrapInTransaction', array('func' => $func), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'commit', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->commit();
    }

    public function rollback()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'rollback', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getClassMetadata', array('className' => $className), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'createQuery', array('dql' => $dql), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'createNamedQuery', array('name' => $name), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'createQueryBuilder', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'flush', array('entity' => $entity), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'clear', array('entityName' => $entityName), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->clear($entityName);
    }

    public function close()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'close', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->close();
    }

    public function persist($entity)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'persist', array('entity' => $entity), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'remove', array('entity' => $entity), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'refresh', array('entity' => $entity), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'detach', array('entity' => $entity), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'merge', array('entity' => $entity), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getRepository', array('entityName' => $entityName), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'contains', array('entity' => $entity), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getEventManager', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getConfiguration', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'isOpen', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getUnitOfWork', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getProxyFactory', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'initializeObject', array('obj' => $obj), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'getFilters', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'isFiltersStateClean', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'hasFilters', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return $this->valueHoldere4232->hasFilters();
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

        $instance->initializerad41c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere4232) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere4232 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere4232->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, '__get', ['name' => $name], $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        if (isset(self::$publicPropertiesa14b0[$name])) {
            return $this->valueHoldere4232->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4232;

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

        $targetObject = $this->valueHoldere4232;
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
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4232;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere4232;
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
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, '__isset', array('name' => $name), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4232;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere4232;
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
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, '__unset', array('name' => $name), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4232;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere4232;
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
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, '__clone', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        $this->valueHoldere4232 = clone $this->valueHoldere4232;
    }

    public function __sleep()
    {
        $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, '__sleep', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;

        return array('valueHoldere4232');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerad41c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerad41c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerad41c && ($this->initializerad41c->__invoke($valueHoldere4232, $this, 'initializeProxy', array(), $this->initializerad41c) || 1) && $this->valueHoldere4232 = $valueHoldere4232;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere4232;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere4232;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
