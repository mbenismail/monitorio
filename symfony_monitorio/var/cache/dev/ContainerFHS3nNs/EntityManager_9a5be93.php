<?php

namespace ContainerFHS3nNs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder41813 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf56f2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7f2bd = [
        
    ];

    public function getConnection()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getConnection', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getMetadataFactory', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getExpressionBuilder', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'beginTransaction', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getCache', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'transactional', array('func' => $func), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'commit', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->commit();
    }

    public function rollback()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'rollback', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getClassMetadata', array('className' => $className), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'createQuery', array('dql' => $dql), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'createNamedQuery', array('name' => $name), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'createQueryBuilder', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'flush', array('entity' => $entity), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'clear', array('entityName' => $entityName), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->clear($entityName);
    }

    public function close()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'close', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->close();
    }

    public function persist($entity)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'persist', array('entity' => $entity), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'remove', array('entity' => $entity), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'refresh', array('entity' => $entity), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'detach', array('entity' => $entity), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'merge', array('entity' => $entity), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'contains', array('entity' => $entity), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getEventManager', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getConfiguration', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'isOpen', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getUnitOfWork', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getProxyFactory', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'initializeObject', array('obj' => $obj), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'getFilters', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'isFiltersStateClean', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'hasFilters', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return $this->valueHolder41813->hasFilters();
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

        $instance->initializerf56f2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder41813) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder41813 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder41813->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, '__get', ['name' => $name], $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        if (isset(self::$publicProperties7f2bd[$name])) {
            return $this->valueHolder41813->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41813;

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

        $targetObject = $this->valueHolder41813;
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
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41813;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder41813;
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
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, '__isset', array('name' => $name), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41813;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder41813;
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
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, '__unset', array('name' => $name), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41813;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder41813;
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
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, '__clone', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        $this->valueHolder41813 = clone $this->valueHolder41813;
    }

    public function __sleep()
    {
        $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, '__sleep', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;

        return array('valueHolder41813');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf56f2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf56f2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf56f2 && ($this->initializerf56f2->__invoke($valueHolder41813, $this, 'initializeProxy', array(), $this->initializerf56f2) || 1) && $this->valueHolder41813 = $valueHolder41813;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder41813;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder41813;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
