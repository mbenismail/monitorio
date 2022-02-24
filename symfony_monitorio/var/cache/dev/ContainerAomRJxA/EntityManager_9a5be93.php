<?php

namespace ContainerAomRJxA;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder99207 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc8e3b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties935e1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getConnection', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getMetadataFactory', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getExpressionBuilder', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'beginTransaction', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getCache', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'transactional', array('func' => $func), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'commit', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->commit();
    }

    public function rollback()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'rollback', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getClassMetadata', array('className' => $className), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'createQuery', array('dql' => $dql), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'createNamedQuery', array('name' => $name), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'createQueryBuilder', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'flush', array('entity' => $entity), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'clear', array('entityName' => $entityName), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->clear($entityName);
    }

    public function close()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'close', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->close();
    }

    public function persist($entity)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'persist', array('entity' => $entity), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'remove', array('entity' => $entity), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'refresh', array('entity' => $entity), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'detach', array('entity' => $entity), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'merge', array('entity' => $entity), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'contains', array('entity' => $entity), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getEventManager', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getConfiguration', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'isOpen', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getUnitOfWork', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getProxyFactory', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'initializeObject', array('obj' => $obj), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'getFilters', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'isFiltersStateClean', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'hasFilters', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return $this->valueHolder99207->hasFilters();
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

        $instance->initializerc8e3b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder99207) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder99207 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder99207->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, '__get', ['name' => $name], $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        if (isset(self::$publicProperties935e1[$name])) {
            return $this->valueHolder99207->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99207;

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

        $targetObject = $this->valueHolder99207;
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
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99207;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder99207;
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
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, '__isset', array('name' => $name), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99207;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder99207;
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
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, '__unset', array('name' => $name), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99207;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder99207;
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
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, '__clone', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        $this->valueHolder99207 = clone $this->valueHolder99207;
    }

    public function __sleep()
    {
        $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, '__sleep', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;

        return array('valueHolder99207');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc8e3b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc8e3b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc8e3b && ($this->initializerc8e3b->__invoke($valueHolder99207, $this, 'initializeProxy', array(), $this->initializerc8e3b) || 1) && $this->valueHolder99207 = $valueHolder99207;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder99207;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder99207;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
