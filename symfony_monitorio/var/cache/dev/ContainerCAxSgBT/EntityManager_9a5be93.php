<?php

namespace ContainerCAxSgBT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder79bbb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerceb90 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8eaea = [
        
    ];

    public function getConnection()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getConnection', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getMetadataFactory', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getExpressionBuilder', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'beginTransaction', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getCache', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getCache();
    }

    public function transactional($func)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'transactional', array('func' => $func), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'wrapInTransaction', array('func' => $func), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'commit', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->commit();
    }

    public function rollback()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'rollback', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getClassMetadata', array('className' => $className), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'createQuery', array('dql' => $dql), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'createNamedQuery', array('name' => $name), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'createQueryBuilder', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'flush', array('entity' => $entity), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'clear', array('entityName' => $entityName), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->clear($entityName);
    }

    public function close()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'close', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->close();
    }

    public function persist($entity)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'persist', array('entity' => $entity), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'remove', array('entity' => $entity), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'refresh', array('entity' => $entity), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'detach', array('entity' => $entity), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'merge', array('entity' => $entity), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getRepository', array('entityName' => $entityName), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'contains', array('entity' => $entity), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getEventManager', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getConfiguration', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'isOpen', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getUnitOfWork', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getProxyFactory', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'initializeObject', array('obj' => $obj), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'getFilters', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'isFiltersStateClean', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'hasFilters', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return $this->valueHolder79bbb->hasFilters();
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

        $instance->initializerceb90 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder79bbb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder79bbb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder79bbb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, '__get', ['name' => $name], $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        if (isset(self::$publicProperties8eaea[$name])) {
            return $this->valueHolder79bbb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79bbb;

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

        $targetObject = $this->valueHolder79bbb;
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
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79bbb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder79bbb;
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
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, '__isset', array('name' => $name), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79bbb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder79bbb;
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
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, '__unset', array('name' => $name), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79bbb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder79bbb;
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
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, '__clone', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        $this->valueHolder79bbb = clone $this->valueHolder79bbb;
    }

    public function __sleep()
    {
        $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, '__sleep', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;

        return array('valueHolder79bbb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerceb90 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerceb90;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerceb90 && ($this->initializerceb90->__invoke($valueHolder79bbb, $this, 'initializeProxy', array(), $this->initializerceb90) || 1) && $this->valueHolder79bbb = $valueHolder79bbb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder79bbb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder79bbb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
