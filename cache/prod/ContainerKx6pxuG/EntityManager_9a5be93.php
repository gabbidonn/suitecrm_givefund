<?php

namespace ContainerKx6pxuG;

include_once \dirname(__DIR__, 3).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 3).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 3).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdedbe = null;
    private $initializerc9180 = null;
    private static $publicProperties1e6f9 = [
        
    ];
    public function getConnection()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getConnection', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getMetadataFactory', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getExpressionBuilder', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'beginTransaction', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getCache', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'transactional', array('func' => $func), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'commit', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->commit();
    }
    public function rollback()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'rollback', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getClassMetadata', array('className' => $className), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'createQuery', array('dql' => $dql), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'createNamedQuery', array('name' => $name), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'createQueryBuilder', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'flush', array('entity' => $entity), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'clear', array('entityName' => $entityName), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->clear($entityName);
    }
    public function close()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'close', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->close();
    }
    public function persist($entity)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'persist', array('entity' => $entity), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'remove', array('entity' => $entity), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'refresh', array('entity' => $entity), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'detach', array('entity' => $entity), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'merge', array('entity' => $entity), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'contains', array('entity' => $entity), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getEventManager', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getConfiguration', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'isOpen', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getUnitOfWork', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getProxyFactory', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'initializeObject', array('obj' => $obj), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'getFilters', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'isFiltersStateClean', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'hasFilters', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return $this->valueHolderdedbe->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc9180 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderdedbe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdedbe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderdedbe->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, '__get', ['name' => $name], $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        if (isset(self::$publicProperties1e6f9[$name])) {
            return $this->valueHolderdedbe->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdedbe;
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
        $targetObject = $this->valueHolderdedbe;
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
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdedbe;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdedbe;
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
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, '__isset', array('name' => $name), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdedbe;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdedbe;
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
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, '__unset', array('name' => $name), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdedbe;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdedbe;
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
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, '__clone', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        $this->valueHolderdedbe = clone $this->valueHolderdedbe;
    }
    public function __sleep()
    {
        $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, '__sleep', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
        return array('valueHolderdedbe');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc9180 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc9180;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc9180 && ($this->initializerc9180->__invoke($valueHolderdedbe, $this, 'initializeProxy', array(), $this->initializerc9180) || 1) && $this->valueHolderdedbe = $valueHolderdedbe;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdedbe;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdedbe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
