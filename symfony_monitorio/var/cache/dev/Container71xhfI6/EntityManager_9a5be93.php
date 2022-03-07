<?php

namespace Container71xhfI6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6866a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer20238 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbf148 = [
        
    ];

    public function getConnection()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getConnection', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getMetadataFactory', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getExpressionBuilder', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'beginTransaction', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getCache', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'transactional', array('func' => $func), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'commit', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->commit();
    }

    public function rollback()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'rollback', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getClassMetadata', array('className' => $className), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'createQuery', array('dql' => $dql), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'createNamedQuery', array('name' => $name), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'createQueryBuilder', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'flush', array('entity' => $entity), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'clear', array('entityName' => $entityName), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->clear($entityName);
    }

    public function close()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'close', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->close();
    }

    public function persist($entity)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'persist', array('entity' => $entity), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'remove', array('entity' => $entity), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'refresh', array('entity' => $entity), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'detach', array('entity' => $entity), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'merge', array('entity' => $entity), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'contains', array('entity' => $entity), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getEventManager', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getConfiguration', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'isOpen', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getUnitOfWork', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getProxyFactory', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'initializeObject', array('obj' => $obj), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'getFilters', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'isFiltersStateClean', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'hasFilters', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return $this->valueHolder6866a->hasFilters();
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

        $instance->initializer20238 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6866a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6866a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6866a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, '__get', ['name' => $name], $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        if (isset(self::$publicPropertiesbf148[$name])) {
            return $this->valueHolder6866a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6866a;

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

        $targetObject = $this->valueHolder6866a;
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
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6866a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6866a;
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
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, '__isset', array('name' => $name), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6866a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6866a;
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
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, '__unset', array('name' => $name), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6866a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6866a;
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
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, '__clone', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        $this->valueHolder6866a = clone $this->valueHolder6866a;
    }

    public function __sleep()
    {
        $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, '__sleep', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;

        return array('valueHolder6866a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer20238 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer20238;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer20238 && ($this->initializer20238->__invoke($valueHolder6866a, $this, 'initializeProxy', array(), $this->initializer20238) || 1) && $this->valueHolder6866a = $valueHolder6866a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6866a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6866a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
