<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * Ps_metricsAdminContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class Ps_metricsAdminContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'ps_accounts.facade' => 'getPsAccounts_FacadeService',
            'ps_accounts.installer' => 'getPsAccounts_InstallerService',
            'ps_metrics.adapter.link' => 'getPsMetrics_Adapter_LinkService',
            'ps_metrics.api.analytics' => 'getPsMetrics_Api_AnalyticsService',
            'ps_metrics.api.client.analytics' => 'getPsMetrics_Api_Client_AnalyticsService',
            'ps_metrics.api.client.factory' => 'getPsMetrics_Api_Client_FactoryService',
            'ps_metrics.api.client.http' => 'getPsMetrics_Api_Client_HttpService',
            'ps_metrics.api.http' => 'getPsMetrics_Api_HttpService',
            'ps_metrics.api.manager' => 'getPsMetrics_Api_ManagerService',
            'ps_metrics.cache.data' => 'getPsMetrics_Cache_DataService',
            'ps_metrics.cache.specificdirectory' => 'getPsMetrics_Cache_SpecificdirectoryService',
            'ps_metrics.context.prestashop' => 'getPsMetrics_Context_PrestashopService',
            'ps_metrics.data.tipscards' => 'getPsMetrics_Data_TipscardsService',
            'ps_metrics.env.analytics' => 'getPsMetrics_Env_AnalyticsService',
            'ps_metrics.env.cache' => 'getPsMetrics_Env_CacheService',
            'ps_metrics.env.segment' => 'getPsMetrics_Env_SegmentService',
            'ps_metrics.graphql.dataloaders' => 'getPsMetrics_Graphql_DataloadersService',
            'ps_metrics.graphql.dataloaders.avgsessions' => 'getPsMetrics_Graphql_Dataloaders_AvgsessionsService',
            'ps_metrics.graphql.dataloaders.bouncerate' => 'getPsMetrics_Graphql_Dataloaders_BouncerateService',
            'ps_metrics.graphql.dataloaders.cartabandonedaverage' => 'getPsMetrics_Graphql_Dataloaders_CartabandonedaverageService',
            'ps_metrics.graphql.dataloaders.conversionrate' => 'getPsMetrics_Graphql_Dataloaders_ConversionrateService',
            'ps_metrics.graphql.dataloaders.factory' => 'getPsMetrics_Graphql_Dataloaders_FactoryService',
            'ps_metrics.graphql.dataloaders.orderaverage' => 'getPsMetrics_Graphql_Dataloaders_OrderaverageService',
            'ps_metrics.graphql.dataloaders.orderaveragegroupbydate' => 'getPsMetrics_Graphql_Dataloaders_OrderaveragegroupbydateService',
            'ps_metrics.graphql.dataloaders.ordergroupbycustomer' => 'getPsMetrics_Graphql_Dataloaders_OrdergroupbycustomerService',
            'ps_metrics.graphql.dataloaders.ordersum' => 'getPsMetrics_Graphql_Dataloaders_OrdersumService',
            'ps_metrics.graphql.dataloaders.ordersumgroupbydate' => 'getPsMetrics_Graphql_Dataloaders_OrdersumgroupbydateService',
            'ps_metrics.graphql.dataloaders.ordersumgroupbysource' => 'getPsMetrics_Graphql_Dataloaders_OrdersumgroupbysourceService',
            'ps_metrics.graphql.dataloaders.producttopseller' => 'getPsMetrics_Graphql_Dataloaders_ProducttopsellerService',
            'ps_metrics.graphql.dataloaders.revenuegross' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossService',
            'ps_metrics.graphql.dataloaders.revenuegrossgroupbycategories' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbycategoriesService',
            'ps_metrics.graphql.dataloaders.revenuegrossgroupbydate' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydateService',
            'ps_metrics.graphql.dataloaders.revenuegrossgroupbydistribution' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydistributionService',
            'ps_metrics.graphql.dataloaders.sessions' => 'getPsMetrics_Graphql_Dataloaders_SessionsService',
            'ps_metrics.graphql.dataloaders.sessionsgroupbycategory' => 'getPsMetrics_Graphql_Dataloaders_SessionsgroupbycategoryService',
            'ps_metrics.graphql.dataloaders.sessionsgroupbydate' => 'getPsMetrics_Graphql_Dataloaders_SessionsgroupbydateService',
            'ps_metrics.graphql.dataloaders.sessionsgroupbyhour' => 'getPsMetrics_Graphql_Dataloaders_SessionsgroupbyhourService',
            'ps_metrics.graphql.dataloaders.setproducttouradvanceddone' => 'getPsMetrics_Graphql_Dataloaders_SetproducttouradvanceddoneService',
            'ps_metrics.graphql.dataloaders.setproducttourfreedone' => 'getPsMetrics_Graphql_Dataloaders_SetproducttourfreedoneService',
            'ps_metrics.graphql.dataloaders.tipscards' => 'getPsMetrics_Graphql_Dataloaders_TipscardsService',
            'ps_metrics.graphql.dataloaders.uniqueusers' => 'getPsMetrics_Graphql_Dataloaders_UniqueusersService',
            'ps_metrics.handler.guzzleapi' => 'getPsMetrics_Handler_GuzzleapiService',
            'ps_metrics.helper.api' => 'getPsMetrics_Helper_ApiService',
            'ps_metrics.helper.data' => 'getPsMetrics_Helper_DataService',
            'ps_metrics.helper.db' => 'getPsMetrics_Helper_DbService',
            'ps_metrics.helper.json' => 'getPsMetrics_Helper_JsonService',
            'ps_metrics.helper.logger' => 'getPsMetrics_Helper_LoggerService',
            'ps_metrics.helper.module' => 'getPsMetrics_Helper_ModuleService',
            'ps_metrics.helper.number' => 'getPsMetrics_Helper_NumberService',
            'ps_metrics.helper.segment' => 'getPsMetrics_Helper_SegmentService',
            'ps_metrics.helper.shop' => 'getPsMetrics_Helper_ShopService',
            'ps_metrics.helper.tools' => 'getPsMetrics_Helper_ToolsService',
            'ps_metrics.kpi.configuration' => 'getPsMetrics_Kpi_ConfigurationService',
            'ps_metrics.kpi.conversion' => 'getPsMetrics_Kpi_ConversionService',
            'ps_metrics.kpi.kpi' => 'getPsMetrics_Kpi_KpiService',
            'ps_metrics.kpi.manager' => 'getPsMetrics_Kpi_ManagerService',
            'ps_metrics.kpi.orders' => 'getPsMetrics_Kpi_OrdersService',
            'ps_metrics.kpi.revenues' => 'getPsMetrics_Kpi_RevenuesService',
            'ps_metrics.kpi.strategyinterface' => 'getPsMetrics_Kpi_StrategyinterfaceService',
            'ps_metrics.kpi.total' => 'getPsMetrics_Kpi_TotalService',
            'ps_metrics.kpi.visits' => 'getPsMetrics_Kpi_VisitsService',
            'ps_metrics.middleware' => 'getPsMetrics_MiddlewareService',
            'ps_metrics.middleware.log' => 'getPsMetrics_Middleware_LogService',
            'ps_metrics.middleware.response' => 'getPsMetrics_Middleware_ResponseService',
            'ps_metrics.middleware.response.default' => 'getPsMetrics_Middleware_Response_DefaultService',
            'ps_metrics.middleware.sentry' => 'getPsMetrics_Middleware_SentryService',
            'ps_metrics.module' => 'getPsMetrics_ModuleService',
            'ps_metrics.module.dashboard.modules' => 'getPsMetrics_Module_Dashboard_ModulesService',
            'ps_metrics.module.gainstaller' => 'getPsMetrics_Module_GainstallerService',
            'ps_metrics.module.install' => 'getPsMetrics_Module_InstallService',
            'ps_metrics.module.uninstall' => 'getPsMetrics_Module_UninstallService',
            'ps_metrics.presenter.store.context' => 'getPsMetrics_Presenter_Store_ContextService',
            'ps_metrics.presenter.store.dashboard' => 'getPsMetrics_Presenter_Store_DashboardService',
            'ps_metrics.presenter.store.settings' => 'getPsMetrics_Presenter_Store_SettingsService',
            'ps_metrics.presenter.store.store' => 'getPsMetrics_Presenter_Store_StoreService',
            'ps_metrics.provider.analyticsaccountslist' => 'getPsMetrics_Provider_AnalyticsaccountslistService',
            'ps_metrics.provider.googletag' => 'getPsMetrics_Provider_GoogletagService',
            'ps_metrics.provider.shops' => 'getPsMetrics_Provider_ShopsService',
            'ps_metrics.repository.configuration' => 'getPsMetrics_Repository_ConfigurationService',
            'ps_metrics.repository.hookmodule' => 'getPsMetrics_Repository_HookmoduleService',
            'ps_metrics.repository.orders' => 'getPsMetrics_Repository_OrdersService',
            'ps_metrics.repository.payment' => 'getPsMetrics_Repository_PaymentService',
            'ps_metrics.tracker.segment' => 'getPsMetrics_Tracker_SegmentService',
            'ps_metrics.translation.dashboard' => 'getPsMetrics_Translation_DashboardService',
            'ps_metrics.translation.settings' => 'getPsMetrics_Translation_SettingsService',
            'ps_metrics.validation.processselectaccountanalytics' => 'getPsMetrics_Validation_ProcessselectaccountanalyticsService',
            'ps_metrics.validation.retrievedata' => 'getPsMetrics_Validation_RetrievedataService',
        );

        $this->aliases = array();
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the 'ps_accounts.facade' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts A PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts instance
     */
    protected function getPsAccounts_FacadeService()
    {
        return $this->services['ps_accounts.facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts($this->get('ps_accounts.installer'));
    }

    /**
     * Gets the 'ps_accounts.installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer A PrestaShop\PsAccountsInstaller\Installer\Installer instance
     */
    protected function getPsAccounts_InstallerService()
    {
        return $this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0');
    }

    /**
     * Gets the 'ps_metrics.adapter.link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Adapter\LinkAdapter A PrestaShop\Module\Ps_metrics\Adapter\LinkAdapter instance
     */
    protected function getPsMetrics_Adapter_LinkService()
    {
        return $this->services['ps_metrics.adapter.link'] = new \PrestaShop\Module\Ps_metrics\Adapter\LinkAdapter($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.helper.tools'));
    }

    /**
     * Gets the 'ps_metrics.api.analytics' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\AnalyticsApi A PrestaShop\Module\Ps_metrics\Api\AnalyticsApi instance
     */
    protected function getPsMetrics_Api_AnalyticsService()
    {
        return $this->services['ps_metrics.api.analytics'] = new \PrestaShop\Module\Ps_metrics\Api\AnalyticsApi($this->get('ps_metrics.api.client.analytics'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.env.analytics'), $this->get('ps_metrics.helper.json'));
    }

    /**
     * Gets the 'ps_metrics.api.client.analytics' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\AnalyticsClient A PrestaShop\Module\Ps_metrics\Api\Client\AnalyticsClient instance
     */
    protected function getPsMetrics_Api_Client_AnalyticsService()
    {
        return $this->services['ps_metrics.api.client.analytics'] = new \PrestaShop\Module\Ps_metrics\Api\Client\AnalyticsClient($this->get('ps_accounts.facade'), $this->get('ps_metrics.middleware.response.default'), $this->get('ps_metrics.middleware.log'), $this->get('ps_metrics.middleware.sentry'), $this->get('ps_metrics.middleware.response'), $this->get('ps_metrics.handler.guzzleapi'));
    }

    /**
     * Gets the 'ps_metrics.api.client.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\ClientManager A PrestaShop\Module\Ps_metrics\Api\Client\ClientManager instance
     */
    protected function getPsMetrics_Api_Client_FactoryService()
    {
        return $this->services['ps_metrics.api.client.factory'] = new \PrestaShop\Module\Ps_metrics\Api\Client\ClientManager($this->get('ps_metrics.middleware.response.default'), $this->get('ps_metrics.middleware.log'), $this->get('ps_metrics.middleware.sentry'), $this->get('ps_metrics.middleware.response'), $this->get('ps_metrics.handler.guzzleapi'));
    }

    /**
     * Gets the 'ps_metrics.api.client.http' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\HttpClient A PrestaShop\Module\Ps_metrics\Api\Client\HttpClient instance
     */
    protected function getPsMetrics_Api_Client_HttpService()
    {
        return $this->services['ps_metrics.api.client.http'] = new \PrestaShop\Module\Ps_metrics\Api\Client\HttpClient($this->get('ps_metrics.middleware.response.default'), $this->get('ps_metrics.middleware.log'), $this->get('ps_metrics.middleware.sentry'), $this->get('ps_metrics.middleware.response'), $this->get('ps_metrics.handler.guzzleapi'));
    }

    /**
     * Gets the 'ps_metrics.api.http' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\HttpApi A PrestaShop\Module\Ps_metrics\Api\HttpApi instance
     */
    protected function getPsMetrics_Api_HttpService()
    {
        return $this->services['ps_metrics.api.http'] = new \PrestaShop\Module\Ps_metrics\Api\HttpApi($this->get('ps_metrics.api.client.http'));
    }

    /**
     * Gets the 'ps_metrics.api.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\ApiManager A PrestaShop\Module\Ps_metrics\Api\ApiManager instance
     */
    protected function getPsMetrics_Api_ManagerService()
    {
        return $this->services['ps_metrics.api.manager'] = new \PrestaShop\Module\Ps_metrics\Api\ApiManager();
    }

    /**
     * Gets the 'ps_metrics.cache.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Cache\DataCache A PrestaShop\Module\Ps_metrics\Cache\DataCache instance
     */
    protected function getPsMetrics_Cache_DataService()
    {
        return $this->services['ps_metrics.cache.data'] = new \PrestaShop\Module\Ps_metrics\Cache\DataCache($this->get('ps_metrics.cache.specificdirectory'), $this->get('ps_metrics.env.cache'), $this->get('ps_metrics.helper.json'), $this->get('ps_metrics.helper.logger'));
    }

    /**
     * Gets the 'ps_metrics.cache.specificdirectory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Cache\DirectoryCache A PrestaShop\Module\Ps_metrics\Cache\DirectoryCache instance
     */
    protected function getPsMetrics_Cache_SpecificdirectoryService()
    {
        return $this->services['ps_metrics.cache.specificdirectory'] = new \PrestaShop\Module\Ps_metrics\Cache\DirectoryCache();
    }

    /**
     * Gets the 'ps_metrics.context.prestashop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext A PrestaShop\Module\Ps_metrics\Context\PrestaShopContext instance
     */
    protected function getPsMetrics_Context_PrestashopService()
    {
        return $this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext();
    }

    /**
     * Gets the 'ps_metrics.data.tipscards' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Data\TipsCardsData A PrestaShop\Module\Ps_metrics\Data\TipsCardsData instance
     */
    protected function getPsMetrics_Data_TipscardsService()
    {
        return $this->services['ps_metrics.data.tipscards'] = new \PrestaShop\Module\Ps_metrics\Data\TipsCardsData($this->get('ps_metrics.api.analytics'));
    }

    /**
     * Gets the 'ps_metrics.env.analytics' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Environment\AnalyticsEnv A PrestaShop\Module\Ps_metrics\Environment\AnalyticsEnv instance
     */
    protected function getPsMetrics_Env_AnalyticsService()
    {
        return $this->services['ps_metrics.env.analytics'] = new \PrestaShop\Module\Ps_metrics\Environment\AnalyticsEnv();
    }

    /**
     * Gets the 'ps_metrics.env.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Environment\CacheEnv A PrestaShop\Module\Ps_metrics\Environment\CacheEnv instance
     */
    protected function getPsMetrics_Env_CacheService()
    {
        return $this->services['ps_metrics.env.cache'] = new \PrestaShop\Module\Ps_metrics\Environment\CacheEnv();
    }

    /**
     * Gets the 'ps_metrics.env.segment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Environment\SegmentEnv A PrestaShop\Module\Ps_metrics\Environment\SegmentEnv instance
     */
    protected function getPsMetrics_Env_SegmentService()
    {
        return $this->services['ps_metrics.env.segment'] = new \PrestaShop\Module\Ps_metrics\Environment\SegmentEnv();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaders instance
     */
    protected function getPsMetrics_Graphql_DataloadersService()
    {
        return $this->services['ps_metrics.graphql.dataloaders'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaders($this->get('ps_metrics.cache.data'), $this->get('ps_metrics.helper.json'));
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.avgsessions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\AvgSessionsDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\AvgSessionsDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_AvgsessionsService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.avgsessions'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\AvgSessionsDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.bouncerate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\BounceRateDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\BounceRateDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_BouncerateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.bouncerate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\BounceRateDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.cartabandonedaverage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\CartAbandonedAverageDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\CartAbandonedAverageDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_CartabandonedaverageService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.cartabandonedaverage'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\CartAbandonedAverageDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.conversionrate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ConversionRateDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ConversionRateDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_ConversionrateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.conversionrate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ConversionRateDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaderFactory A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaderFactory instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_FactoryService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.factory'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaderFactory();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.orderaverage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrderaverageService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.orderaverage'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.orderaveragegroupbydate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageGroupByDateDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageGroupByDateDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrderaveragegroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.orderaveragegroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageGroupByDateDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.ordergroupbycustomer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderGroupByCustomerDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderGroupByCustomerDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdergroupbycustomerService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordergroupbycustomer'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderGroupByCustomerDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.ordersum' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdersumService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordersum'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.ordersumgroupbydate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupByDateDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupByDateDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdersumgroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordersumgroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupByDateDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.ordersumgroupbysource' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupBySourceDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupBySourceDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdersumgroupbysourceService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordersumgroupbysource'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupBySourceDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.producttopseller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ProductTopSellerDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ProductTopSellerDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_ProducttopsellerService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.producttopseller'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ProductTopSellerDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.revenuegross' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegross'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.revenuegrossgroupbycategories' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByCategoriesDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByCategoriesDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbycategoriesService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegrossgroupbycategories'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByCategoriesDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.revenuegrossgroupbydate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByDateDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByDateDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegrossgroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByDateDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.revenuegrossgroupbydistribution' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\revenueGrossGroupByDistributionDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\revenueGrossGroupByDistributionDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydistributionService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegrossgroupbydistribution'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\revenueGrossGroupByDistributionDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.sessions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessions'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.sessionsgroupbycategory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByCategoryDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByCategoryDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsgroupbycategoryService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessionsgroupbycategory'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByCategoryDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.sessionsgroupbydate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByDateDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByDateDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsgroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessionsgroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByDateDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.sessionsgroupbyhour' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByHourDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByHourDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsgroupbyhourService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessionsgroupbyhour'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByHourDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.setproducttouradvanceddone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourAdvancedDoneDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourAdvancedDoneDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_SetproducttouradvanceddoneService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.setproducttouradvanceddone'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourAdvancedDoneDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.setproducttourfreedone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourFreeDoneDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourFreeDoneDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_SetproducttourfreedoneService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.setproducttourfreedone'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourFreeDoneDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.tipscards' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\TipsCardsDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\TipsCardsDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_TipscardsService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.tipscards'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\TipsCardsDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.graphql.dataloaders.uniqueusers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\UniqueUsersDataLoaders A PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\UniqueUsersDataLoaders instance
     */
    protected function getPsMetrics_Graphql_Dataloaders_UniqueusersService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.uniqueusers'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\UniqueUsersDataLoaders();
    }

    /**
     * Gets the 'ps_metrics.handler.guzzleapi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler A PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler instance
     */
    protected function getPsMetrics_Handler_GuzzleapiService()
    {
        return $this->services['ps_metrics.handler.guzzleapi'] = new \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler();
    }

    /**
     * Gets the 'ps_metrics.helper.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ApiHelper A PrestaShop\Module\Ps_metrics\Helper\ApiHelper instance
     */
    protected function getPsMetrics_Helper_ApiService()
    {
        return $this->services['ps_metrics.helper.api'] = new \PrestaShop\Module\Ps_metrics\Helper\ApiHelper();
    }

    /**
     * Gets the 'ps_metrics.helper.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\DataHelper A PrestaShop\Module\Ps_metrics\Helper\DataHelper instance
     */
    protected function getPsMetrics_Helper_DataService()
    {
        return $this->services['ps_metrics.helper.data'] = new \PrestaShop\Module\Ps_metrics\Helper\DataHelper();
    }

    /**
     * Gets the 'ps_metrics.helper.db' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\DbHelper A PrestaShop\Module\Ps_metrics\Helper\DbHelper instance
     */
    protected function getPsMetrics_Helper_DbService()
    {
        return $this->services['ps_metrics.helper.db'] = new \PrestaShop\Module\Ps_metrics\Helper\DbHelper($this->get('ps_metrics.cache.data'));
    }

    /**
     * Gets the 'ps_metrics.helper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\JsonHelper A PrestaShop\Module\Ps_metrics\Helper\JsonHelper instance
     */
    protected function getPsMetrics_Helper_JsonService()
    {
        return $this->services['ps_metrics.helper.json'] = new \PrestaShop\Module\Ps_metrics\Helper\JsonHelper($this->get('ps_metrics.helper.logger'));
    }

    /**
     * Gets the 'ps_metrics.helper.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\LoggerHelper A PrestaShop\Module\Ps_metrics\Helper\LoggerHelper instance
     */
    protected function getPsMetrics_Helper_LoggerService()
    {
        return $this->services['ps_metrics.helper.logger'] = new \PrestaShop\Module\Ps_metrics\Helper\LoggerHelper();
    }

    /**
     * Gets the 'ps_metrics.helper.module' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ModuleHelper A PrestaShop\Module\Ps_metrics\Helper\ModuleHelper instance
     */
    protected function getPsMetrics_Helper_ModuleService()
    {
        return $this->services['ps_metrics.helper.module'] = new \PrestaShop\Module\Ps_metrics\Helper\ModuleHelper();
    }

    /**
     * Gets the 'ps_metrics.helper.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\NumberHelper A PrestaShop\Module\Ps_metrics\Helper\NumberHelper instance
     */
    protected function getPsMetrics_Helper_NumberService()
    {
        return $this->services['ps_metrics.helper.number'] = new \PrestaShop\Module\Ps_metrics\Helper\NumberHelper();
    }

    /**
     * Gets the 'ps_metrics.helper.segment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\SegmentHelper A PrestaShop\Module\Ps_metrics\Helper\SegmentHelper instance
     */
    protected function getPsMetrics_Helper_SegmentService()
    {
        return $this->services['ps_metrics.helper.segment'] = new \PrestaShop\Module\Ps_metrics\Helper\SegmentHelper($this->get('ps_metrics.env.segment'));
    }

    /**
     * Gets the 'ps_metrics.helper.shop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ShopHelper A PrestaShop\Module\Ps_metrics\Helper\ShopHelper instance
     */
    protected function getPsMetrics_Helper_ShopService()
    {
        return $this->services['ps_metrics.helper.shop'] = new \PrestaShop\Module\Ps_metrics\Helper\ShopHelper();
    }

    /**
     * Gets the 'ps_metrics.helper.tools' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper A PrestaShop\Module\Ps_metrics\Helper\ToolsHelper instance
     */
    protected function getPsMetrics_Helper_ToolsService()
    {
        return $this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper();
    }

    /**
     * Gets the 'ps_metrics.kpi.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration A PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration instance
     */
    protected function getPsMetrics_Kpi_ConfigurationService()
    {
        return $this->services['ps_metrics.kpi.configuration'] = new \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration();
    }

    /**
     * Gets the 'ps_metrics.kpi.conversion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\ConversionKpi A PrestaShop\Module\Ps_metrics\Kpi\ConversionKpi instance
     */
    protected function getPsMetrics_Kpi_ConversionService()
    {
        return $this->services['ps_metrics.kpi.conversion'] = new \PrestaShop\Module\Ps_metrics\Kpi\ConversionKpi($this->get('ps_metrics.kpi.configuration'), $this->get('ps_metrics.helper.number'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.kpi.visits'), $this->get('ps_metrics.kpi.orders'), $this->get('ps_metrics.kpi.revenues'));
    }

    /**
     * Gets the 'ps_metrics.kpi.kpi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\Kpi A PrestaShop\Module\Ps_metrics\Kpi\Kpi instance
     */
    protected function getPsMetrics_Kpi_KpiService()
    {
        return $this->services['ps_metrics.kpi.kpi'] = new \PrestaShop\Module\Ps_metrics\Kpi\Kpi($this->get('ps_metrics.kpi.configuration'));
    }

    /**
     * Gets the 'ps_metrics.kpi.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\KpiManager A PrestaShop\Module\Ps_metrics\Kpi\KpiManager instance
     */
    protected function getPsMetrics_Kpi_ManagerService()
    {
        return $this->services['ps_metrics.kpi.manager'] = new \PrestaShop\Module\Ps_metrics\Kpi\KpiManager($this->get('ps_metrics.kpi.configuration'));
    }

    /**
     * Gets the 'ps_metrics.kpi.orders' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\OrdersKpi A PrestaShop\Module\Ps_metrics\Kpi\OrdersKpi instance
     */
    protected function getPsMetrics_Kpi_OrdersService()
    {
        return $this->services['ps_metrics.kpi.orders'] = new \PrestaShop\Module\Ps_metrics\Kpi\OrdersKpi($this->get('ps_metrics.kpi.configuration'), $this->get('ps_metrics.helper.data'), $this->get('ps_metrics.repository.orders'), $this->get('ps_metrics.helper.number'), $this->get('ps_metrics.kpi.revenues'), $this->get('ps_metrics.repository.payment'));
    }

    /**
     * Gets the 'ps_metrics.kpi.revenues' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\RevenuesKpi A PrestaShop\Module\Ps_metrics\Kpi\RevenuesKpi instance
     */
    protected function getPsMetrics_Kpi_RevenuesService()
    {
        return $this->services['ps_metrics.kpi.revenues'] = new \PrestaShop\Module\Ps_metrics\Kpi\RevenuesKpi($this->get('ps_metrics.kpi.configuration'), $this->get('ps_metrics.helper.data'), $this->get('ps_metrics.repository.orders'));
    }

    /**
     * Gets the 'ps_metrics.kpi.strategyinterface' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\KpiStrategyInterface A PrestaShop\Module\Ps_metrics\Kpi\KpiStrategyInterface instance
     */
    protected function getPsMetrics_Kpi_StrategyinterfaceService()
    {
        return $this->services['ps_metrics.kpi.strategyinterface'] = new \PrestaShop\Module\Ps_metrics\Kpi\KpiStrategyInterface();
    }

    /**
     * Gets the 'ps_metrics.kpi.total' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\TotalKpi A PrestaShop\Module\Ps_metrics\Kpi\TotalKpi instance
     */
    protected function getPsMetrics_Kpi_TotalService()
    {
        return $this->services['ps_metrics.kpi.total'] = new \PrestaShop\Module\Ps_metrics\Kpi\TotalKpi($this->get('ps_metrics.kpi.configuration'), $this->get('ps_metrics.kpi.visits'), $this->get('ps_metrics.kpi.orders'), $this->get('ps_metrics.kpi.revenues'));
    }

    /**
     * Gets the 'ps_metrics.kpi.visits' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\VisitsKpi A PrestaShop\Module\Ps_metrics\Kpi\VisitsKpi instance
     */
    protected function getPsMetrics_Kpi_VisitsService()
    {
        return $this->services['ps_metrics.kpi.visits'] = new \PrestaShop\Module\Ps_metrics\Kpi\VisitsKpi($this->get('ps_metrics.kpi.configuration'), $this->get('ps_metrics.helper.data'), $this->get('ps_metrics.cache.data'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.api.analytics'));
    }

    /**
     * Gets the 'ps_metrics.middleware' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\Middleware A PrestaShop\Module\Ps_metrics\Middleware\Middleware instance
     */
    protected function getPsMetrics_MiddlewareService()
    {
        return $this->services['ps_metrics.middleware'] = new \PrestaShop\Module\Ps_metrics\Middleware\Middleware();
    }

    /**
     * Gets the 'ps_metrics.middleware.log' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\LogMiddleware A PrestaShop\Module\Ps_metrics\Middleware\LogMiddleware instance
     */
    protected function getPsMetrics_Middleware_LogService()
    {
        return $this->services['ps_metrics.middleware.log'] = new \PrestaShop\Module\Ps_metrics\Middleware\LogMiddleware($this->get('ps_metrics.helper.logger'));
    }

    /**
     * Gets the 'ps_metrics.middleware.response' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware A PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware instance
     */
    protected function getPsMetrics_Middleware_ResponseService()
    {
        return $this->services['ps_metrics.middleware.response'] = new \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware();
    }

    /**
     * Gets the 'ps_metrics.middleware.response.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\CheckResponseMiddleware A PrestaShop\Module\Ps_metrics\Middleware\CheckResponseMiddleware instance
     */
    protected function getPsMetrics_Middleware_Response_DefaultService()
    {
        return $this->services['ps_metrics.middleware.response.default'] = new \PrestaShop\Module\Ps_metrics\Middleware\CheckResponseMiddleware($this->get('ps_metrics.helper.json'));
    }

    /**
     * Gets the 'ps_metrics.middleware.sentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware A PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware instance
     */
    protected function getPsMetrics_Middleware_SentryService()
    {
        return $this->services['ps_metrics.middleware.sentry'] = new \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware();
    }

    /**
     * Gets the 'ps_metrics.module' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ps_metrics A Ps_metrics instance
     */
    protected function getPsMetrics_ModuleService()
    {
        return $this->services['ps_metrics.module'] = \Module::getInstanceByName('ps_metrics');
    }

    /**
     * Gets the 'ps_metrics.module.dashboard.modules' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\DashboardModules A PrestaShop\Module\Ps_metrics\Module\DashboardModules instance
     */
    protected function getPsMetrics_Module_Dashboard_ModulesService()
    {
        return $this->services['ps_metrics.module.dashboard.modules'] = new \PrestaShop\Module\Ps_metrics\Module\DashboardModules($this->get('ps_metrics.module'), $this->get('ps_metrics.repository.configuration'));
    }

    /**
     * Gets the 'ps_metrics.module.gainstaller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\GAInstaller A PrestaShop\Module\Ps_metrics\Module\GAInstaller instance
     */
    protected function getPsMetrics_Module_GainstallerService()
    {
        return $this->services['ps_metrics.module.gainstaller'] = new \PrestaShop\Module\Ps_metrics\Module\GAInstaller($this->get('ps_metrics.adapter.link'), $this->get('ps_metrics.helper.module'), $this->get('ps_metrics.helper.tools'));
    }

    /**
     * Gets the 'ps_metrics.module.install' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\Install A PrestaShop\Module\Ps_metrics\Module\Install instance
     */
    protected function getPsMetrics_Module_InstallService()
    {
        return $this->services['ps_metrics.module.install'] = new \PrestaShop\Module\Ps_metrics\Module\Install($this->get('ps_metrics.module'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.repository.hookmodule'));
    }

    /**
     * Gets the 'ps_metrics.module.uninstall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\Uninstall A PrestaShop\Module\Ps_metrics\Module\Uninstall instance
     */
    protected function getPsMetrics_Module_UninstallService()
    {
        return $this->services['ps_metrics.module.uninstall'] = new \PrestaShop\Module\Ps_metrics\Module\Uninstall($this->get('ps_metrics.module'), $this->get('ps_accounts.facade'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.api.analytics'));
    }

    /**
     * Gets the 'ps_metrics.presenter.store.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\Context\ContextPresenter A PrestaShop\Module\Ps_metrics\Presenter\Store\Context\ContextPresenter instance
     */
    protected function getPsMetrics_Presenter_Store_ContextService()
    {
        return $this->services['ps_metrics.presenter.store.context'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\Context\ContextPresenter($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_accounts.facade'), $this->get('ps_metrics.adapter.link'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.provider.shops'), $this->get('ps_metrics.module.dashboard.modules'), $this->get('ps_metrics.provider.analyticsaccountslist'), $this->get('ps_metrics.api.http'), $this->get('ps_metrics.helper.tools'), $this->get('ps_metrics.helper.db'));
    }

    /**
     * Gets the 'ps_metrics.presenter.store.dashboard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\Dashboard\DashboardPresenter A PrestaShop\Module\Ps_metrics\Presenter\Store\Dashboard\DashboardPresenter instance
     */
    protected function getPsMetrics_Presenter_Store_DashboardService()
    {
        return $this->services['ps_metrics.presenter.store.dashboard'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\Dashboard\DashboardPresenter($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.translation.dashboard'), $this->get('ps_metrics.adapter.link'));
    }

    /**
     * Gets the 'ps_metrics.presenter.store.settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\Settings\SettingsPresenter A PrestaShop\Module\Ps_metrics\Presenter\Store\Settings\SettingsPresenter instance
     */
    protected function getPsMetrics_Presenter_Store_SettingsService()
    {
        return $this->services['ps_metrics.presenter.store.settings'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\Settings\SettingsPresenter($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.translation.settings'), $this->get('ps_metrics.adapter.link'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.provider.shops'), $this->get('ps_metrics.provider.analyticsaccountslist'), $this->get('ps_metrics.provider.googletag'), $this->get('ps_metrics.module.gainstaller'), $this->get('ps_metrics.api.http'));
    }

    /**
     * Gets the 'ps_metrics.presenter.store.store' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\StorePresenter A PrestaShop\Module\Ps_metrics\Presenter\Store\StorePresenter instance
     */
    protected function getPsMetrics_Presenter_Store_StoreService()
    {
        return $this->services['ps_metrics.presenter.store.store'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\StorePresenter($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.presenter.store.context'), $this->get('ps_metrics.presenter.store.dashboard'), $this->get('ps_metrics.presenter.store.settings'));
    }

    /**
     * Gets the 'ps_metrics.provider.analyticsaccountslist' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Provider\AnalyticsAccountsListProvider A PrestaShop\Module\Ps_metrics\Provider\AnalyticsAccountsListProvider instance
     */
    protected function getPsMetrics_Provider_AnalyticsaccountslistService()
    {
        return $this->services['ps_metrics.provider.analyticsaccountslist'] = new \PrestaShop\Module\Ps_metrics\Provider\AnalyticsAccountsListProvider($this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.helper.json'), $this->get('ps_metrics.api.analytics'));
    }

    /**
     * Gets the 'ps_metrics.provider.googletag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Provider\GoogleTagProvider A PrestaShop\Module\Ps_metrics\Provider\GoogleTagProvider instance
     */
    protected function getPsMetrics_Provider_GoogletagService()
    {
        return $this->services['ps_metrics.provider.googletag'] = new \PrestaShop\Module\Ps_metrics\Provider\GoogleTagProvider($this->get('ps_metrics.api.http'));
    }

    /**
     * Gets the 'ps_metrics.provider.shops' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Provider\ShopsProvider A PrestaShop\Module\Ps_metrics\Provider\ShopsProvider instance
     */
    protected function getPsMetrics_Provider_ShopsService()
    {
        return $this->services['ps_metrics.provider.shops'] = new \PrestaShop\Module\Ps_metrics\Provider\ShopsProvider($this->get('ps_metrics.helper.tools'), $this->get('ps_metrics.helper.shop'));
    }

    /**
     * Gets the 'ps_metrics.repository.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\ConfigurationRepository A PrestaShop\Module\Ps_metrics\Repository\ConfigurationRepository instance
     */
    protected function getPsMetrics_Repository_ConfigurationService()
    {
        return $this->services['ps_metrics.repository.configuration'] = new \PrestaShop\Module\Ps_metrics\Repository\ConfigurationRepository($this->get('ps_metrics.context.prestashop'));
    }

    /**
     * Gets the 'ps_metrics.repository.hookmodule' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\HookModuleRepository A PrestaShop\Module\Ps_metrics\Repository\HookModuleRepository instance
     */
    protected function getPsMetrics_Repository_HookmoduleService()
    {
        return $this->services['ps_metrics.repository.hookmodule'] = new \PrestaShop\Module\Ps_metrics\Repository\HookModuleRepository();
    }

    /**
     * Gets the 'ps_metrics.repository.orders' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\OrdersRepository A PrestaShop\Module\Ps_metrics\Repository\OrdersRepository instance
     */
    protected function getPsMetrics_Repository_OrdersService()
    {
        return $this->services['ps_metrics.repository.orders'] = new \PrestaShop\Module\Ps_metrics\Repository\OrdersRepository($this->get('ps_metrics.helper.db'), $this->get('ps_metrics.helper.shop'), $this->get('ps_metrics.context.prestashop'), NULL);
    }

    /**
     * Gets the 'ps_metrics.repository.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\PaymentRepository A PrestaShop\Module\Ps_metrics\Repository\PaymentRepository instance
     */
    protected function getPsMetrics_Repository_PaymentService()
    {
        return $this->services['ps_metrics.repository.payment'] = new \PrestaShop\Module\Ps_metrics\Repository\PaymentRepository();
    }

    /**
     * Gets the 'ps_metrics.tracker.segment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Tracker\Segment A PrestaShop\Module\Ps_metrics\Tracker\Segment instance
     */
    protected function getPsMetrics_Tracker_SegmentService()
    {
        return $this->services['ps_metrics.tracker.segment'] = new \PrestaShop\Module\Ps_metrics\Tracker\Segment($this->get('ps_metrics.env.segment'), $this->get('ps_metrics.helper.segment'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.helper.shop'));
    }

    /**
     * Gets the 'ps_metrics.translation.dashboard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Translation\DashboardTranslation A PrestaShop\Module\Ps_metrics\Translation\DashboardTranslation instance
     */
    protected function getPsMetrics_Translation_DashboardService()
    {
        return $this->services['ps_metrics.translation.dashboard'] = new \PrestaShop\Module\Ps_metrics\Translation\DashboardTranslation($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'));
    }

    /**
     * Gets the 'ps_metrics.translation.settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Translation\SettingsTranslation A PrestaShop\Module\Ps_metrics\Translation\SettingsTranslation instance
     */
    protected function getPsMetrics_Translation_SettingsService()
    {
        return $this->services['ps_metrics.translation.settings'] = new \PrestaShop\Module\Ps_metrics\Translation\SettingsTranslation($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'));
    }

    /**
     * Gets the 'ps_metrics.validation.processselectaccountanalytics' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Validation\SelectAccountAnalytics A PrestaShop\Module\Ps_metrics\Validation\SelectAccountAnalytics instance
     */
    protected function getPsMetrics_Validation_ProcessselectaccountanalyticsService()
    {
        return $this->services['ps_metrics.validation.processselectaccountanalytics'] = new \PrestaShop\Module\Ps_metrics\Validation\SelectAccountAnalytics();
    }

    /**
     * Gets the 'ps_metrics.validation.retrievedata' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Validation\RetrieveData A PrestaShop\Module\Ps_metrics\Validation\RetrieveData instance
     */
    protected function getPsMetrics_Validation_RetrievedataService()
    {
        return $this->services['ps_metrics.validation.retrievedata'] = new \PrestaShop\Module\Ps_metrics\Validation\RetrieveData();
    }
}
