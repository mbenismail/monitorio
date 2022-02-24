<?php

namespace ContainerFc4wITs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd5e88 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0aa3c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese6091 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getConnection', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getMetadataFactory', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getExpressionBuilder', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'beginTransaction', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getCache', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'transactional', array('func' => $func), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'commit', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->commit();
    }

    public function rollback()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'rollback', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getClassMetadata', array('className' => $className), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'createQuery', array('dql' => $dql), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'createNamedQuery', array('name' => $name), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'createQueryBuilder', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'flush', array('entity' => $entity), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'clear', array('entityName' => $entityName), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->clear($entityName);
    }

    public function close()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'close', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->close();
    }

    public function persist($entity)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'persist', array('entity' => $entity), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'remove', array('entity' => $entity), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'refresh', array('entity' => $entity), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'detach', array('entity' => $entity), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'merge', array('entity' => $entity), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'contains', array('entity' => $entity), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getEventManager', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getConfiguration', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'isOpen', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getUnitOfWork', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getProxyFactory', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'initializeObject', array('obj' => $obj), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'getFilters', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'isFiltersStateClean', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'hasFilters', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return $this->valueHolderd5e88->hasFilters();
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

        $instance->initializer0aa3c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd5e88) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd5e88 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd5e88->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, '__get', ['name' => $name], $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        if (isset(self::$publicPropertiese6091[$name])) {
            return $this->valueHolderd5e88->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5e88;

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

        $targetObject = $this->valueHolderd5e88;
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
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5e88;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd5e88;
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
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, '__isset', array('name' => $name), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5e88;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd5e88;
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
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, '__unset', array('name' => $name), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5e88;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd5e88;
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
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, '__clone', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        $this->valueHolderd5e88 = clone $this->valueHolderd5e88;
    }

    public function __sleep()
    {
        $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, '__sleep', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;

        return array('valueHolderd5e88');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0aa3c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0aa3c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0aa3c && ($this->initializer0aa3c->__invoke($valueHolderd5e88, $this, 'initializeProxy', array(), $this->initializer0aa3c) || 1) && $this->valueHolderd5e88 = $valueHolderd5e88;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd5e88;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd5e88;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
