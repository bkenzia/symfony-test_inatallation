<?php

namespace ContainerYRdI68J;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb7a6b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd334a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56d43 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getConnection', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getMetadataFactory', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getExpressionBuilder', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'beginTransaction', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getCache', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'transactional', array('func' => $func), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'commit', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->commit();
    }

    public function rollback()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'rollback', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getClassMetadata', array('className' => $className), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'createQuery', array('dql' => $dql), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'createNamedQuery', array('name' => $name), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'createQueryBuilder', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'flush', array('entity' => $entity), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'clear', array('entityName' => $entityName), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->clear($entityName);
    }

    public function close()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'close', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->close();
    }

    public function persist($entity)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'persist', array('entity' => $entity), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'remove', array('entity' => $entity), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'refresh', array('entity' => $entity), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'detach', array('entity' => $entity), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'merge', array('entity' => $entity), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'contains', array('entity' => $entity), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getEventManager', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getConfiguration', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'isOpen', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getUnitOfWork', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getProxyFactory', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'initializeObject', array('obj' => $obj), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'getFilters', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'isFiltersStateClean', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'hasFilters', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return $this->valueHolderb7a6b->hasFilters();
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

        $instance->initializerd334a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb7a6b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb7a6b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb7a6b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, '__get', ['name' => $name], $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        if (isset(self::$publicProperties56d43[$name])) {
            return $this->valueHolderb7a6b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7a6b;

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

        $targetObject = $this->valueHolderb7a6b;
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
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7a6b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb7a6b;
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
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, '__isset', array('name' => $name), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7a6b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb7a6b;
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
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, '__unset', array('name' => $name), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7a6b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb7a6b;
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
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, '__clone', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        $this->valueHolderb7a6b = clone $this->valueHolderb7a6b;
    }

    public function __sleep()
    {
        $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, '__sleep', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;

        return array('valueHolderb7a6b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd334a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd334a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd334a && ($this->initializerd334a->__invoke($valueHolderb7a6b, $this, 'initializeProxy', array(), $this->initializerd334a) || 1) && $this->valueHolderb7a6b = $valueHolderb7a6b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb7a6b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb7a6b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
