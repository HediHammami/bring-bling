<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder95a1d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5f04b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties582a9 = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getList', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;

        return $this->valueHolder95a1d->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getInstalledModules', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;

        return $this->valueHolder95a1d->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getMustBeConfiguredModules', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;

        return $this->valueHolder95a1d->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getUpgradableModules', array(), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;

        return $this->valueHolder95a1d->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;

        return $this->valueHolder95a1d->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;

        return $this->valueHolder95a1d->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'setActionUrls', array('collection' => $collection), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;

        return $this->valueHolder95a1d->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;

        return $this->valueHolder95a1d->clearCache($moduleName, $allShops);
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

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer5f04b = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder95a1d) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder95a1d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder95a1d->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer5f04b && ($this->initializer5f04b->__invoke($valueHolder95a1d, $this, '__get', ['name' => $name], $this->initializer5f04b) || 1) && $this->valueHolder95a1d = $valueHolder95a1d;

        if (isset(self::$publicProperties582a9[$name])) {
            return $this->valueHolder95a1d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
