<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder95a1d = null;
    private $initializer5f04b = null;
    private static $publicProperties582a9 = [
        
    ];
    public function getConnection()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getConnection', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getMetadataFactory', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getExpressionBuilder', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'beginTransaction', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getCache', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'transactional', array('func' => $func), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'commit', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->commit();
    }
    public function rollback()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'rollback', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getClassMetadata', array('className' => $className), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'createQuery', array('dql' => $dql), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'createNamedQuery', array('name' => $name), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'createQueryBuilder', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'flush', array('entity' => $entity), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'clear', array('entityName' => $entityName), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->clear($entityName);
    }
    public function close()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'close', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->close();
    }
    public function persist($entity)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'persist', array('entity' => $entity), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'remove', array('entity' => $entity), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'refresh', array('entity' => $entity), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'detach', array('entity' => $entity), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'merge', array('entity' => $entity), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'contains', array('entity' => $entity), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getEventManager', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getConfiguration', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'isOpen', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getUnitOfWork', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getProxyFactory', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'initializeObject', array('obj' => $obj), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getFilters', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'isFiltersStateClean', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'hasFilters', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return $this->valueHolder95a1d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5f04b = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder95a1d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder95a1d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder95a1d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, '__get', ['name' => $name], $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        if (isset(self::$publicProperties582a9[$name])) {
            return $this->valueHolder95a1d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95a1d;
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
        $targetObject = $this->valueHolder95a1d;
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
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95a1d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder95a1d;
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
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, '__isset', array('name' => $name), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95a1d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder95a1d;
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
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, '__unset', array('name' => $name), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95a1d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder95a1d;
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
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, '__clone', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        $this->valueHolder95a1d = clone $this->valueHolder95a1d;
    }
    public function __sleep()
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, '__sleep', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
        return array('valueHolder95a1d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5f04b = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5f04b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'initializeProxy', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder95a1d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder95a1d;
    }
}
