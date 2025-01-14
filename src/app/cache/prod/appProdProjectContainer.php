<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * appProdProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appProdProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /*
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assets._version__default' => 'getAssets_VersionDefaultService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'csa_guzzle.cache.adapter.doctrine' => 'getCsaGuzzle_Cache_Adapter_DoctrineService',
            'csa_guzzle.client.addons_api' => 'getCsaGuzzle_Client_AddonsApiService',
            'csa_guzzle.client_factory' => 'getCsaGuzzle_ClientFactoryService',
            'csa_guzzle.description_factory' => 'getCsaGuzzle_DescriptionFactoryService',
            'csa_guzzle.description_loader' => 'getCsaGuzzle_DescriptionLoaderService',
            'csa_guzzle.description_loader.resolver' => 'getCsaGuzzle_DescriptionLoader_ResolverService',
            'csa_guzzle.subscriber.cache' => 'getCsaGuzzle_Subscriber_CacheService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache.provider' => 'getDoctrine_Cache_ProviderService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'finder' => 'getFinderService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.date_picker' => 'getForm_Type_DatePickerService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.extension.money' => 'getForm_Type_Extension_MoneyService',
            'form.type.extension.text' => 'getForm_Type_Extension_TextService',
            'form.type.extension.textarea' => 'getForm_Type_Extension_TextareaService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.product.attachment' => 'getForm_Type_Product_AttachmentService',
            'form.type.product.combination' => 'getForm_Type_Product_CombinationService',
            'form.type.product.combination_bulk' => 'getForm_Type_Product_CombinationBulkService',
            'form.type.product.custom_field' => 'getForm_Type_Product_CustomFieldService',
            'form.type.product.feature' => 'getForm_Type_Product_FeatureService',
            'form.type.product.information' => 'getForm_Type_Product_InformationService',
            'form.type.product.options' => 'getForm_Type_Product_OptionsService',
            'form.type.product.price' => 'getForm_Type_Product_PriceService',
            'form.type.product.quantity' => 'getForm_Type_Product_QuantityService',
            'form.type.product.seo' => 'getForm_Type_Product_SeoService',
            'form.type.product.shipping' => 'getForm_Type_Product_ShippingService',
            'form.type.product.simple_category' => 'getForm_Type_Product_SimpleCategoryService',
            'form.type.product.specific_price' => 'getForm_Type_Product_SpecificPriceService',
            'form.type.product.supplier_combination' => 'getForm_Type_Product_SupplierCombinationService',
            'form.type.product.virtual' => 'getForm_Type_Product_VirtualService',
            'form.type.product.warehouse_combination' => 'getForm_Type_Product_WarehouseCombinationService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.typeahead.customer' => 'getForm_Type_Typeahead_CustomerService',
            'form.type.typeahead.product' => 'getForm_Type_Typeahead_ProductService',
            'form.type.typeahead.product_pack' => 'getForm_Type_Typeahead_ProductPackService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'guzzle.cache' => 'getGuzzle_CacheService',
            'http_kernel' => 'getHttpKernelService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'main.warmer.cache_warmer' => 'getMain_Warmer_CacheWarmerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'prestashop.adapter.admin.controller.attribute_generator' => 'getPrestashop_Adapter_Admin_Controller_AttributeGeneratorService',
            'prestashop.adapter.admin.controller.category' => 'getPrestashop_Adapter_Admin_Controller_CategoryService',
            'prestashop.adapter.admin.wrapper.product' => 'getPrestashop_Adapter_Admin_Wrapper_ProductService',
            'prestashop.adapter.data_provider.attachment' => 'getPrestashop_Adapter_DataProvider_AttachmentService',
            'prestashop.adapter.data_provider.attribute' => 'getPrestashop_Adapter_DataProvider_AttributeService',
            'prestashop.adapter.data_provider.carrier' => 'getPrestashop_Adapter_DataProvider_CarrierService',
            'prestashop.adapter.data_provider.category' => 'getPrestashop_Adapter_DataProvider_CategoryService',
            'prestashop.adapter.data_provider.combination' => 'getPrestashop_Adapter_DataProvider_CombinationService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.data_provider.currency' => 'getPrestashop_Adapter_DataProvider_CurrencyService',
            'prestashop.adapter.data_provider.customer' => 'getPrestashop_Adapter_DataProvider_CustomerService',
            'prestashop.adapter.data_provider.feature' => 'getPrestashop_Adapter_DataProvider_FeatureService',
            'prestashop.adapter.data_provider.group' => 'getPrestashop_Adapter_DataProvider_GroupService',
            'prestashop.adapter.data_provider.manufacturer' => 'getPrestashop_Adapter_DataProvider_ManufacturerService',
            'prestashop.adapter.data_provider.module' => 'getPrestashop_Adapter_DataProvider_ModuleService',
            'prestashop.adapter.data_provider.pack' => 'getPrestashop_Adapter_DataProvider_PackService',
            'prestashop.adapter.data_provider.product' => 'getPrestashop_Adapter_DataProvider_ProductService',
            'prestashop.adapter.data_provider.supplier' => 'getPrestashop_Adapter_DataProvider_SupplierService',
            'prestashop.adapter.data_provider.tax' => 'getPrestashop_Adapter_DataProvider_TaxService',
            'prestashop.adapter.data_provider.warehouse' => 'getPrestashop_Adapter_DataProvider_WarehouseService',
            'prestashop.adapter.formatter.price' => 'getPrestashop_Adapter_Formatter_PriceService',
            'prestashop.adapter.image_manager' => 'getPrestashop_Adapter_ImageManagerService',
            'prestashop.adapter.legacy.block.helper.subscriber' => 'getPrestashop_Adapter_Legacy_Block_Helper_SubscriberService',
            'prestashop.adapter.legacy.configuration' => 'getPrestashop_Adapter_Legacy_ConfigurationService',
            'prestashop.adapter.legacy.context' => 'getPrestashop_Adapter_Legacy_ContextService',
            'prestashop.adapter.legacy.hook.subscriber' => 'getPrestashop_Adapter_Legacy_Hook_SubscriberService',
            'prestashop.adapter.legacy.logger' => 'getPrestashop_Adapter_Legacy_LoggerService',
            'prestashop.adapter.middleware.ssl' => 'getPrestashop_Adapter_Middleware_SslService',
            'prestashop.adapter.module.tab.eventsubscriber' => 'getPrestashop_Adapter_Module_Tab_EventsubscriberService',
            'prestashop.adapter.module.tab.register' => 'getPrestashop_Adapter_Module_Tab_RegisterService',
            'prestashop.adapter.module.tab.unregister' => 'getPrestashop_Adapter_Module_Tab_UnregisterService',
            'prestashop.adapter.presenter.module' => 'getPrestashop_Adapter_Presenter_ModuleService',
            'prestashop.adapter.security.admin' => 'getPrestashop_Adapter_Security_AdminService',
            'prestashop.adapter.shop.context' => 'getPrestashop_Adapter_Shop_ContextService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
            'prestashop.addons.client_api' => 'getPrestashop_Addons_ClientApiService',
            'prestashop.cache.refresh' => 'getPrestashop_Cache_RefreshService',
            'prestashop.categories_provider' => 'getPrestashop_CategoriesProviderService',
            'prestashop.compiler.smarty.template' => 'getPrestashop_Compiler_Smarty_TemplateService',
            'prestashop.core.addon.theme.exporter' => 'getPrestashop_Core_Addon_Theme_ExporterService',
            'prestashop.core.addon.theme.repository' => 'getPrestashop_Core_Addon_Theme_RepositoryService',
            'prestashop.core.admin.data_provider.addons_interface' => 'getPrestashop_Core_Admin_DataProvider_AddonsInterfaceService',
            'prestashop.core.admin.data_provider.module_interface' => 'getPrestashop_Core_Admin_DataProvider_ModuleInterfaceService',
            'prestashop.core.admin.data_provider.product_interface' => 'getPrestashop_Core_Admin_DataProvider_ProductInterfaceService',
            'prestashop.core.admin.data_updater.product_interface' => 'getPrestashop_Core_Admin_DataUpdater_ProductInterfaceService',
            'prestashop.core.admin.lang.repository' => 'getPrestashop_Core_Admin_Lang_RepositoryService',
            'prestashop.core.admin.module.repository' => 'getPrestashop_Core_Admin_Module_RepositoryService',
            'prestashop.core.admin.page_preference_interface' => 'getPrestashop_Core_Admin_PagePreferenceInterfaceService',
            'prestashop.core.admin.tab.repository' => 'getPrestashop_Core_Admin_Tab_RepositoryService',
            'prestashop.core.admin.translation.repository' => 'getPrestashop_Core_Admin_Translation_RepositoryService',
            'prestashop.core.admin.url_generator' => 'getPrestashop_Core_Admin_UrlGeneratorService',
            'prestashop.core.admin.url_generator_factory' => 'getPrestashop_Core_Admin_UrlGeneratorFactoryService',
            'prestashop.core.admin.url_generator_legacy' => 'getPrestashop_Core_Admin_UrlGeneratorLegacyService',
            'prestashop.core.data_provider.stock_interface' => 'getPrestashop_Core_DataProvider_StockInterfaceService',
            'prestashop.core.module.updater' => 'getPrestashop_Core_Module_UpdaterService',
            'prestashop.csv' => 'getPrestashop_CsvService',
            'prestashop.data_provider.modules.recommended' => 'getPrestashop_DataProvider_Modules_RecommendedService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.dumper.xliff' => 'getPrestashop_Dumper_XliffService',
            'prestashop.handler.log' => 'getPrestashop_Handler_LogService',
            'prestashop.hook.dispatcher' => 'getPrestashop_Hook_DispatcherService',
            'prestashop.hook.finder' => 'getPrestashop_Hook_FinderService',
            'prestashop.module.manager' => 'getPrestashop_Module_ManagerService',
            'prestashop.module.zip.manager' => 'getPrestashop_Module_Zip_ManagerService',
            'prestashop.router' => 'getPrestashop_RouterService',
            'prestashop.security.admin.provider' => 'getPrestashop_Security_Admin_ProviderService',
            'prestashop.security.role.dynamic_role_hierarchy' => 'getPrestashop_Security_Role_DynamicRoleHierarchyService',
            'prestashop.service.product' => 'getPrestashop_Service_ProductService',
            'prestashop.smarty' => 'getPrestashop_SmartyService',
            'prestashop.tokenized_url_listener' => 'getPrestashop_TokenizedUrlListenerService',
            'prestashop.translation.backoffice_provider' => 'getPrestashop_Translation_BackofficeProviderService',
            'prestashop.translation.chainextractor' => 'getPrestashop_Translation_ChainextractorService',
            'prestashop.translation.database_loader' => 'getPrestashop_Translation_DatabaseLoaderService',
            'prestashop.translation.dumper.xliff' => 'getPrestashop_Translation_Dumper_XliffService',
            'prestashop.translation.extractor.crowdin.php' => 'getPrestashop_Translation_Extractor_Crowdin_PhpService',
            'prestashop.translation.extractor.php' => 'getPrestashop_Translation_Extractor_PhpService',
            'prestashop.translation.extractor.smarty' => 'getPrestashop_Translation_Extractor_SmartyService',
            'prestashop.translation.extractor.twig' => 'getPrestashop_Translation_Extractor_TwigService',
            'prestashop.translation.frontoffice_provider' => 'getPrestashop_Translation_FrontofficeProviderService',
            'prestashop.translation.mails' => 'getPrestashop_Translation_MailsService',
            'prestashop.translation.manager.original_string_manager' => 'getPrestashop_Translation_Manager_OriginalStringManagerService',
            'prestashop.translation.manager.translation_manager' => 'getPrestashop_Translation_Manager_TranslationManagerService',
            'prestashop.translation.modules_provider' => 'getPrestashop_Translation_ModulesProviderService',
            'prestashop.translation.others_provider' => 'getPrestashop_Translation_OthersProviderService',
            'prestashop.translation.parser.crowdin_php_parser' => 'getPrestashop_Translation_Parser_CrowdinPhpParserService',
            'prestashop.translation.theme.exporter' => 'getPrestashop_Translation_Theme_ExporterService',
            'prestashop.translation.theme_extractor' => 'getPrestashop_Translation_ThemeExtractorService',
            'prestashop.translation.theme_provider' => 'getPrestashop_Translation_ThemeProviderService',
            'prestashop.translation.theme_translations_factory' => 'getPrestashop_Translation_ThemeTranslationsFactoryService',
            'prestashop.translation.translations_factory' => 'getPrestashop_Translation_TranslationsFactoryService',
            'prestashop.twig.extension.admin' => 'getPrestashop_Twig_Extension_AdminService',
            'prestashop.twig.extension.dataformatter' => 'getPrestashop_Twig_Extension_DataformatterService',
            'prestashop.twig.extension.hook' => 'getPrestashop_Twig_Extension_HookService',
            'prestashop.twig.extension.layout' => 'getPrestashop_Twig_Extension_LayoutService',
            'prestashop.twig.extension.stringloader' => 'getPrestashop_Twig_Extension_StringloaderService',
            'prestashop.twig.extension.translation' => 'getPrestashop_Twig_Extension_TranslationService',
            'prestashop.user_locale.listener' => 'getPrestashop_UserLocale_ListenerService',
            'prestashop.user_provider' => 'getPrestashop_UserProviderService',
            'prestashop.utils.zip_manager' => 'getPrestashop_Utils_ZipManagerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker.main' => 'getSecurity_UserChecker_MainService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translation_tools.translation.node_visitor' => 'getTranslationTools_Translation_NodeVisitorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
        );
        $this->aliases = array(
            'csa_guzzle.default_cache_adapter' => 'guzzle.cache',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
            'monolog.handler.legacy' => 'prestashop.handler.log',
            'ps.theme_translations_factory' => 'prestashop.translation.theme_translations_factory',
            'ps.translations_factory' => 'prestashop.translation.translations_factory',
            'router' => 'prestashop.router',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'translator.default',
        );
    }

    /*
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /*
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /*
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), false);
    }

    /*
     * Gets the 'assets._version__default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy A Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy instance
     */
    protected function getAssets_VersionDefaultService()
    {
        return $this->services['assets._version__default'] = new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('1.7.0', '%s?%s');
    }

    /*
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /*
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', $this->get('assets._version__default'), $this->get('assets.context')), array());
    }

    /*
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /*
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => $this->get('kernel.class_cache.cache_warmer'), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('prestashop.router')), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[2], array())), 6 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 7 => $this->get('main.warmer.cache_warmer'), 8 => new \Csa\Bundle\GuzzleBundle\Description\CacheWarmer\DescriptionCacheWarmer($this->get('csa_guzzle.description_factory'))));
    }

    /*
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array());
    }

    /*
     * Gets the 'csa_guzzle.cache.adapter.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter A Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter instance
     */
    protected function getCsaGuzzle_Cache_Adapter_DoctrineService()
    {
        return $this->services['csa_guzzle.cache.adapter.doctrine'] = new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter();
    }

    /*
     * Gets the 'csa_guzzle.client.addons_api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \GuzzleHttp\Client A GuzzleHttp\Client instance
     */
    protected function getCsaGuzzle_Client_AddonsApiService()
    {
        $this->services['csa_guzzle.client.addons_api'] = $instance = new \GuzzleHttp\Client(array('base_url' => 'https://api-addons.prestashop.com', 'defaults' => array('timeout' => '5.0'), 'headers' => array('Accept' => 'application/json')));

        call_user_func(array(new \Csa\Bundle\GuzzleBundle\DependencyInjection\Configurator\ClientConfigurator(array(0 => $this->get('csa_guzzle.subscriber.cache')), NULL), 'configure'), $instance);

        return $instance;
    }

    /*
     * Gets the 'csa_guzzle.client_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Csa\Bundle\GuzzleBundle\Factory\ClientFactory A Csa\Bundle\GuzzleBundle\Factory\ClientFactory instance
     */
    protected function getCsaGuzzle_ClientFactoryService()
    {
        $this->services['csa_guzzle.client_factory'] = $instance = new \Csa\Bundle\GuzzleBundle\Factory\ClientFactory('GuzzleHttp\\Client', array());

        $instance->registerSubscriber('cache', $this->get('csa_guzzle.subscriber.cache'));

        return $instance;
    }

    /*
     * Gets the 'csa_guzzle.description_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Csa\Bundle\GuzzleBundle\Factory\DescriptionFactory A Csa\Bundle\GuzzleBundle\Factory\DescriptionFactory instance
     */
    protected function getCsaGuzzle_DescriptionFactoryService()
    {
        return $this->services['csa_guzzle.description_factory'] = new \Csa\Bundle\GuzzleBundle\Factory\DescriptionFactory($this->get('csa_guzzle.description_loader'), __DIR__, false);
    }

    /*
     * Gets the 'csa_guzzle.description_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\Loader\DelegatingLoader A Symfony\Component\Config\Loader\DelegatingLoader instance
     */
    protected function getCsaGuzzle_DescriptionLoaderService()
    {
        return $this->services['csa_guzzle.description_loader'] = new \Symfony\Component\Config\Loader\DelegatingLoader($this->get('csa_guzzle.description_loader.resolver'));
    }

    /*
     * Gets the 'csa_guzzle.description_loader.resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver A Symfony\Component\Config\Loader\LoaderResolver instance
     */
    protected function getCsaGuzzle_DescriptionLoader_ResolverService()
    {
        return $this->services['csa_guzzle.description_loader.resolver'] = new \Symfony\Component\Config\Loader\LoaderResolver(array(0 => new \Csa\Bundle\GuzzleBundle\Description\Loader\JsonLoader()));
    }

    /*
     * Gets the 'csa_guzzle.subscriber.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\CacheSubscriber A Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\CacheSubscriber instance
     */
    protected function getCsaGuzzle_Subscriber_CacheService()
    {
        return $this->services['csa_guzzle.subscriber.cache'] = new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\CacheSubscriber(new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter($this->get('doctrine.cache.provider'), 7200));
    }

    /*
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, NULL, NULL, NULL, true, NULL);
    }

    /*
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /*
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /*
     * Gets the 'doctrine.cache.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache A Doctrine\Common\Cache\FilesystemCache instance
     */
    protected function getDoctrine_Cache_ProviderService()
    {
        return $this->services['doctrine.cache.provider'] = new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/doctrine'));
    }

    /*
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /*
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $a->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => 'ps1_db', 'port' => '', 'dbname' => 'ps', 'user' => 'ps', 'password' => 'ps', 'charset' => 'UTF8', 'driverOptions' => array(), 'serverVersion' => 5.0999999999999996), new \Doctrine\DBAL\Configuration(), $a, array('enum' => 'string'));
    }

    /*
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultEntityListenerResolver A Doctrine\ORM\Mapping\DefaultEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();
    }

    /*
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => ($this->targetDirs[3].'/src/PrestaShopBundle/Entity'))), 'PrestaShopBundle\\Entity');

        $b = new \Doctrine\ORM\Configuration();
        $b->setEntityNamespaces(array('PrestaShopBundle' => 'PrestaShopBundle\\Entity'));
        $b->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $b->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $b->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $b->setMetadataDriverImpl($a);
        $b->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $b->setProxyNamespace('Proxies');
        $b->setAutoGenerateProxyClasses(false);
        $b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $b->setNamingStrategy($this->get('prestashop.database.naming_strategy'));
        $b->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $b->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $b->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $b);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /*
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /*
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_8bf1da162ef326421c99a13a9a5830680c7abfd955a06a3c69aa2f56d644e2eb');

        return $instance;
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_8bf1da162ef326421c99a13a9a5830680c7abfd955a06a3c69aa2f56d644e2eb');

        return $instance;
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_8bf1da162ef326421c99a13a9a5830680c7abfd955a06a3c69aa2f56d644e2eb');

        return $instance;
    }

    /*
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListenerService('kernel.request', array(0 => 'prestashop.adapter.security.admin', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'prestashop.user_locale.listener', 1 => 'onKernelRequest'), 15);
        $instance->addListenerService('kernel.request', array(0 => 'prestashop.adapter.middleware.ssl', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'prestashop.tokenized_url_listener', 1 => 'onKernelRequest'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('prestashop.adapter.module.tab.eventsubscriber', 'PrestaShop\\PrestaShop\\Adapter\\Module\\Tab\\ModuleTabManagementSubscriber');

        return $instance;
    }

    /*
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /*
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the 'finder' service.
     *
     * @return \Symfony\Component\Finder\Finder A Symfony\Component\Finder\Finder instance
     */
    protected function getFinderService()
    {
        return new \Symfony\Component\Finder\Finder();
    }

    /*
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance
     *
     * @deprecated The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.
     */
    protected function getForm_CsrfProviderService()
    {
        @trigger_error('The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.', E_USER_DEPRECATED);

        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /*
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'birthday' => 'form.type.birthday', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'collection' => 'form.type.collection', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => 'form.type.collection', 'country' => 'form.type.country', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType' => 'form.type.country', 'date' => 'form.type.date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'form.type.date', 'datetime' => 'form.type.datetime', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'form.type.datetime', 'email' => 'form.type.email', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => 'form.type.email', 'file' => 'form.type.file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'hidden' => 'form.type.hidden', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => 'form.type.hidden', 'integer' => 'form.type.integer', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => 'form.type.integer', 'language' => 'form.type.language', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType' => 'form.type.language', 'locale' => 'form.type.locale', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType' => 'form.type.locale', 'money' => 'form.type.money', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => 'form.type.money', 'number' => 'form.type.number', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType' => 'form.type.number', 'password' => 'form.type.password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => 'form.type.password', 'percent' => 'form.type.percent', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType' => 'form.type.percent', 'radio' => 'form.type.radio', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType' => 'form.type.radio', 'range' => 'form.type.range', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RangeType' => 'form.type.range', 'repeated' => 'form.type.repeated', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => 'form.type.repeated', 'search' => 'form.type.search', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType' => 'form.type.search', 'textarea' => 'form.type.textarea', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => 'form.type.textarea', 'text' => 'form.type.text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => 'form.type.text', 'time' => 'form.type.time', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => 'form.type.time', 'timezone' => 'form.type.timezone', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType' => 'form.type.timezone', 'url' => 'form.type.url', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType' => 'form.type.url', 'button' => 'form.type.button', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => 'form.type.button', 'submit' => 'form.type.submit', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => 'form.type.submit', 'reset' => 'form.type.reset', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType' => 'form.type.reset', 'currency' => 'form.type.currency', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType' => 'form.type.currency', 'entity' => 'form.type.entity', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'form.type.date_picker' => 'form.type.date_picker', 'PrestaShopBundle\\Form\\Admin\\Type\\DatePickerType' => 'form.type.date_picker', 'form.type.product.simple_category' => 'form.type.product.simple_category', 'PrestaShopBundle\\Form\\Admin\\Category\\SimpleCategory' => 'form.type.product.simple_category', 'form.type.product.feature' => 'form.type.product.feature', 'PrestaShopBundle\\Form\\Admin\\Feature\\ProductFeature' => 'form.type.product.feature', 'form.type.product.attachment' => 'form.type.product.attachment', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductAttachement' => 'form.type.product.attachment', 'form.type.product.combination' => 'form.type.product.combination', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCombination' => 'form.type.product.combination', 'form.type.product.custom_field' => 'form.type.product.custom_field', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCustomField' => 'form.type.product.custom_field', 'form.type.product.information' => 'form.type.product.information', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductInformation' => 'form.type.product.information', 'form.type.product.options' => 'form.type.product.options', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductOptions' => 'form.type.product.options', 'form.type.product.price' => 'form.type.product.price', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductPrice' => 'form.type.product.price', 'form.type.product.quantity' => 'form.type.product.quantity', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductQuantity' => 'form.type.product.quantity', 'form.type.product.seo' => 'form.type.product.seo', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSeo' => 'form.type.product.seo', 'form.type.product.shipping' => 'form.type.product.shipping', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductShipping' => 'form.type.product.shipping', 'form.type.product.specific_price' => 'form.type.product.specific_price', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSpecificPrice' => 'form.type.product.specific_price', 'form.type.product.supplier_combination' => 'form.type.product.supplier_combination', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSupplierCombination' => 'form.type.product.supplier_combination', 'form.type.product.virtual' => 'form.type.product.virtual', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductVirtual' => 'form.type.product.virtual', 'form.type.product.warehouse_combination' => 'form.type.product.warehouse_combination', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductWarehouseCombination' => 'form.type.product.warehouse_combination', 'form.type.typeahead.product' => 'form.type.typeahead.product', 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadProductCollectionType' => 'form.type.typeahead.product', 'form.type.typeahead.product_pack' => 'form.type.typeahead.product_pack', 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadProductPackCollectionType' => 'form.type.typeahead.product_pack', 'form.type.typeahead.customer' => 'form.type.typeahead.customer', 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadCustomerCollectionType' => 'form.type.typeahead.customer', 'form.type.product.combination_bulk' => 'form.type.product.combination_bulk', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCombinationBulk' => 'form.type.product.combination_bulk'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => array(0 => 'form.type.extension.textarea'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => array(0 => 'form.type.extension.text'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => array(0 => 'form.type.extension.money')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory A Symfony\Component\Form\ResolvedFormTypeFactory instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /*
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /*
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /*
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /*
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /*
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /*
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /*
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /*
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /*
     * Gets the 'form.type.date_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\DatePickerType A PrestaShopBundle\Form\Admin\Type\DatePickerType instance
     */
    protected function getForm_Type_DatePickerService()
    {
        return $this->services['form.type.date_picker'] = new \PrestaShopBundle\Form\Admin\Type\DatePickerType();
    }

    /*
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /*
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /*
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /*
     * Gets the 'form.type.extension.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\CustomMoneyType A PrestaShopBundle\Form\Admin\Type\CustomMoneyType instance
     */
    protected function getForm_Type_Extension_MoneyService()
    {
        return $this->services['form.type.extension.money'] = new \PrestaShopBundle\Form\Admin\Type\CustomMoneyType();
    }

    /*
     * Gets the 'form.type.extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\TextEmptyType A PrestaShopBundle\Form\Admin\Type\TextEmptyType instance
     */
    protected function getForm_Type_Extension_TextService()
    {
        return $this->services['form.type.extension.text'] = new \PrestaShopBundle\Form\Admin\Type\TextEmptyType();
    }

    /*
     * Gets the 'form.type.extension.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\TextareaEmptyType A PrestaShopBundle\Form\Admin\Type\TextareaEmptyType instance
     */
    protected function getForm_Type_Extension_TextareaService()
    {
        return $this->services['form.type.extension.textarea'] = new \PrestaShopBundle\Form\Admin\Type\TextareaEmptyType();
    }

    /*
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /*
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /*
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /*
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /*
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /*
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /*
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /*
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /*
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /*
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /*
     * Gets the 'form.type.product.attachment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductAttachement A PrestaShopBundle\Form\Admin\Product\ProductAttachement instance
     */
    protected function getForm_Type_Product_AttachmentService()
    {
        return $this->services['form.type.product.attachment'] = new \PrestaShopBundle\Form\Admin\Product\ProductAttachement($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'form.type.product.combination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductCombination A PrestaShopBundle\Form\Admin\Product\ProductCombination instance
     */
    protected function getForm_Type_Product_CombinationService()
    {
        return $this->services['form.type.product.combination'] = new \PrestaShopBundle\Form\Admin\Product\ProductCombination($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'form.type.product.combination_bulk' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductCombinationBulk A PrestaShopBundle\Form\Admin\Product\ProductCombinationBulk instance
     */
    protected function getForm_Type_Product_CombinationBulkService()
    {
        return $this->services['form.type.product.combination_bulk'] = new \PrestaShopBundle\Form\Admin\Product\ProductCombinationBulk($this->get('translator.default'), $this->get('prestashop.adapter.legacy.configuration'));
    }

    /*
     * Gets the 'form.type.product.custom_field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductCustomField A PrestaShopBundle\Form\Admin\Product\ProductCustomField instance
     */
    protected function getForm_Type_Product_CustomFieldService()
    {
        return $this->services['form.type.product.custom_field'] = new \PrestaShopBundle\Form\Admin\Product\ProductCustomField($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'form.type.product.feature' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Feature\ProductFeature A PrestaShopBundle\Form\Admin\Feature\ProductFeature instance
     */
    protected function getForm_Type_Product_FeatureService()
    {
        return $this->services['form.type.product.feature'] = new \PrestaShopBundle\Form\Admin\Feature\ProductFeature($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.router'), $this->get('prestashop.adapter.data_provider.feature'));
    }

    /*
     * Gets the 'form.type.product.information' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductInformation A PrestaShopBundle\Form\Admin\Product\ProductInformation instance
     */
    protected function getForm_Type_Product_InformationService()
    {
        return $this->services['form.type.product.information'] = new \PrestaShopBundle\Form\Admin\Product\ProductInformation($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.router'), $this->get('prestashop.adapter.data_provider.category'), $this->get('prestashop.adapter.data_provider.product'), $this->get('prestashop.adapter.data_provider.feature'), $this->get('prestashop.adapter.data_provider.manufacturer'));
    }

    /*
     * Gets the 'form.type.product.options' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductOptions A PrestaShopBundle\Form\Admin\Product\ProductOptions instance
     */
    protected function getForm_Type_Product_OptionsService()
    {
        return $this->services['form.type.product.options'] = new \PrestaShopBundle\Form\Admin\Product\ProductOptions($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.data_provider.product'), $this->get('prestashop.adapter.data_provider.supplier'), $this->get('prestashop.adapter.data_provider.currency'), $this->get('prestashop.adapter.data_provider.attachment'), $this->get('prestashop.router'));
    }

    /*
     * Gets the 'form.type.product.price' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductPrice A PrestaShopBundle\Form\Admin\Product\ProductPrice instance
     */
    protected function getForm_Type_Product_PriceService()
    {
        return $this->services['form.type.product.price'] = new \PrestaShopBundle\Form\Admin\Product\ProductPrice($this->get('translator.default'), $this->get('prestashop.adapter.data_provider.tax'), $this->get('prestashop.router'), $this->get('prestashop.adapter.shop.context'), $this->get('prestashop.adapter.data_provider.country'), $this->get('prestashop.adapter.data_provider.currency'), $this->get('prestashop.adapter.data_provider.group'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.data_provider.customer'));
    }

    /*
     * Gets the 'form.type.product.quantity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductQuantity A PrestaShopBundle\Form\Admin\Product\ProductQuantity instance
     */
    protected function getForm_Type_Product_QuantityService()
    {
        return $this->services['form.type.product.quantity'] = new \PrestaShopBundle\Form\Admin\Product\ProductQuantity($this->get('translator.default'), $this->get('prestashop.router'), $this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'form.type.product.seo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductSeo A PrestaShopBundle\Form\Admin\Product\ProductSeo instance
     */
    protected function getForm_Type_Product_SeoService()
    {
        return $this->services['form.type.product.seo'] = new \PrestaShopBundle\Form\Admin\Product\ProductSeo($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.router'));
    }

    /*
     * Gets the 'form.type.product.shipping' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductShipping A PrestaShopBundle\Form\Admin\Product\ProductShipping instance
     */
    protected function getForm_Type_Product_ShippingService()
    {
        return $this->services['form.type.product.shipping'] = new \PrestaShopBundle\Form\Admin\Product\ProductShipping($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.data_provider.warehouse'), $this->get('prestashop.adapter.data_provider.carrier'));
    }

    /*
     * Gets the 'form.type.product.simple_category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Category\SimpleCategory A PrestaShopBundle\Form\Admin\Category\SimpleCategory instance
     */
    protected function getForm_Type_Product_SimpleCategoryService()
    {
        return $this->services['form.type.product.simple_category'] = new \PrestaShopBundle\Form\Admin\Category\SimpleCategory($this->get('translator.default'), $this->get('prestashop.adapter.data_provider.category'));
    }

    /*
     * Gets the 'form.type.product.specific_price' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductSpecificPrice A PrestaShopBundle\Form\Admin\Product\ProductSpecificPrice instance
     */
    protected function getForm_Type_Product_SpecificPriceService()
    {
        return $this->services['form.type.product.specific_price'] = new \PrestaShopBundle\Form\Admin\Product\ProductSpecificPrice($this->get('prestashop.router'), $this->get('translator.default'), $this->get('prestashop.adapter.shop.context'), $this->get('prestashop.adapter.data_provider.country'), $this->get('prestashop.adapter.data_provider.currency'), $this->get('prestashop.adapter.data_provider.group'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.data_provider.customer'));
    }

    /*
     * Gets the 'form.type.product.supplier_combination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductSupplierCombination A PrestaShopBundle\Form\Admin\Product\ProductSupplierCombination instance
     */
    protected function getForm_Type_Product_SupplierCombinationService()
    {
        return $this->services['form.type.product.supplier_combination'] = new \PrestaShopBundle\Form\Admin\Product\ProductSupplierCombination($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.data_provider.currency'));
    }

    /*
     * Gets the 'form.type.product.virtual' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductVirtual A PrestaShopBundle\Form\Admin\Product\ProductVirtual instance
     */
    protected function getForm_Type_Product_VirtualService()
    {
        return $this->services['form.type.product.virtual'] = new \PrestaShopBundle\Form\Admin\Product\ProductVirtual($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'form.type.product.warehouse_combination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductWarehouseCombination A PrestaShopBundle\Form\Admin\Product\ProductWarehouseCombination instance
     */
    protected function getForm_Type_Product_WarehouseCombinationService()
    {
        return $this->services['form.type.product.warehouse_combination'] = new \PrestaShopBundle\Form\Admin\Product\ProductWarehouseCombination($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /*
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     */
    protected function getForm_Type_RangeService()
    {
        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /*
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /*
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /*
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /*
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /*
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /*
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /*
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /*
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /*
     * Gets the 'form.type.typeahead.customer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\TypeaheadCustomerCollectionType A PrestaShopBundle\Form\Admin\Type\TypeaheadCustomerCollectionType instance
     */
    protected function getForm_Type_Typeahead_CustomerService()
    {
        return $this->services['form.type.typeahead.customer'] = new \PrestaShopBundle\Form\Admin\Type\TypeaheadCustomerCollectionType($this->get('prestashop.adapter.data_provider.customer'));
    }

    /*
     * Gets the 'form.type.typeahead.product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\TypeaheadProductCollectionType A PrestaShopBundle\Form\Admin\Type\TypeaheadProductCollectionType instance
     */
    protected function getForm_Type_Typeahead_ProductService()
    {
        return $this->services['form.type.typeahead.product'] = new \PrestaShopBundle\Form\Admin\Type\TypeaheadProductCollectionType($this->get('prestashop.adapter.data_provider.product'), $this->get('prestashop.adapter.data_provider.category'));
    }

    /*
     * Gets the 'form.type.typeahead.product_pack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\TypeaheadProductPackCollectionType A PrestaShopBundle\Form\Admin\Type\TypeaheadProductPackCollectionType instance
     */
    protected function getForm_Type_Typeahead_ProductPackService()
    {
        return $this->services['form.type.typeahead.product_pack'] = new \PrestaShopBundle\Form\Admin\Type\TypeaheadProductPackCollectionType($this->get('prestashop.adapter.data_provider.product'));
    }

    /*
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /*
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', $this->get('form.server_params'));
    }

    /*
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler($this->get('form.server_params')));
    }

    /*
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /*
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator.default'), 'validators');
    }

    /*
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /*
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /*
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), false);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /*
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /*
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'guzzle.cache' service.
     *
     * @return \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter A Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter instance
     */
    protected function getGuzzle_CacheService()
    {
        return new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter($this->get('doctrine.cache.provider'), 7200);
    }

    /*
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('request_stack'), false);
    }

    /*
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /*
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'pl-PL', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('prestashop.handler.log'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'main.warmer.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Cache\CacheWarmer A PrestaShopBundle\Cache\CacheWarmer instance
     */
    protected function getMain_Warmer_CacheWarmerService()
    {
        return $this->services['main.warmer.cache_warmer'] = new \PrestaShopBundle\Cache\CacheWarmer($this->get('filesystem'));
    }

    /*
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /*
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler A Monolog\Handler\FingersCrossedHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true, NULL);
    }

    /*
     * Gets the 'monolog.handler.nested' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/prod.log'), 100, true, NULL);
    }

    /*
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'prestashop.adapter.admin.controller.attribute_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Attribute\AdminAttributeGeneratorControllerWrapper A PrestaShop\PrestaShop\Adapter\Attribute\AdminAttributeGeneratorControllerWrapper instance
     */
    protected function getPrestashop_Adapter_Admin_Controller_AttributeGeneratorService()
    {
        return $this->services['prestashop.adapter.admin.controller.attribute_generator'] = new \PrestaShop\PrestaShop\Adapter\Attribute\AdminAttributeGeneratorControllerWrapper();
    }

    /*
     * Gets the 'prestashop.adapter.admin.controller.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Category\AdminCategoryControllerWrapper A PrestaShop\PrestaShop\Adapter\Category\AdminCategoryControllerWrapper instance
     */
    protected function getPrestashop_Adapter_Admin_Controller_CategoryService()
    {
        return $this->services['prestashop.adapter.admin.controller.category'] = new \PrestaShop\PrestaShop\Adapter\Category\AdminCategoryControllerWrapper();
    }

    /*
     * Gets the 'prestashop.adapter.admin.wrapper.product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\AdminProductWrapper A PrestaShop\PrestaShop\Adapter\Product\AdminProductWrapper instance
     */
    protected function getPrestashop_Adapter_Admin_Wrapper_ProductService()
    {
        return $this->services['prestashop.adapter.admin.wrapper.product'] = new \PrestaShop\PrestaShop\Adapter\Product\AdminProductWrapper($this->get('translator.default'), $this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.attachment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\AttachmentDataProvider A PrestaShop\PrestaShop\Adapter\Product\AttachmentDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_AttachmentService()
    {
        return $this->services['prestashop.adapter.data_provider.attachment'] = new \PrestaShop\PrestaShop\Adapter\Product\AttachmentDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.attribute' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Attribute\AttributeDataProvider A PrestaShop\PrestaShop\Adapter\Attribute\AttributeDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_AttributeService()
    {
        return $this->services['prestashop.adapter.data_provider.attribute'] = new \PrestaShop\PrestaShop\Adapter\Attribute\AttributeDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.carrier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Carrier\CarrierDataProvider A PrestaShop\PrestaShop\Adapter\Carrier\CarrierDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_CarrierService()
    {
        return $this->services['prestashop.adapter.data_provider.carrier'] = new \PrestaShop\PrestaShop\Adapter\Carrier\CarrierDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Category\CategoryDataProvider A PrestaShop\PrestaShop\Adapter\Category\CategoryDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_CategoryService()
    {
        return $this->services['prestashop.adapter.data_provider.category'] = new \PrestaShop\PrestaShop\Adapter\Category\CategoryDataProvider($this->get("prestashop.adapter.legacy.context"));
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.combination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\CombinationDataProvider A PrestaShop\PrestaShop\Adapter\CombinationDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_CombinationService()
    {
        return $this->services['prestashop.adapter.data_provider.combination'] = new \PrestaShop\PrestaShop\Adapter\CombinationDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider A PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider A PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_CurrencyService()
    {
        return $this->services['prestashop.adapter.data_provider.currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.customer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider A PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_CustomerService()
    {
        return $this->services['prestashop.adapter.data_provider.customer'] = new \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.feature' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider A PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_FeatureService()
    {
        return $this->services['prestashop.adapter.data_provider.feature'] = new \PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.group' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider A PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_GroupService()
    {
        return $this->services['prestashop.adapter.data_provider.group'] = new \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.manufacturer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Manufacturer\ManufacturerDataProvider A PrestaShop\PrestaShop\Adapter\Manufacturer\ManufacturerDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_ManufacturerService()
    {
        return $this->services['prestashop.adapter.data_provider.manufacturer'] = new \PrestaShop\PrestaShop\Adapter\Manufacturer\ManufacturerDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.module' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider A PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_ModuleService()
    {
        return $this->services['prestashop.adapter.data_provider.module'] = new \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider($this->get('prestashop.adapter.legacy.logger'), $this->get('translator.default'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.pack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Pack\PackDataProvider A PrestaShop\PrestaShop\Adapter\Pack\PackDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_PackService()
    {
        return $this->services['prestashop.adapter.data_provider.pack'] = new \PrestaShop\PrestaShop\Adapter\Pack\PackDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider A PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_ProductService()
    {
        return $this->services['prestashop.adapter.data_provider.product'] = new \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.supplier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Supplier\SupplierDataProvider A PrestaShop\PrestaShop\Adapter\Supplier\SupplierDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_SupplierService()
    {
        return $this->services['prestashop.adapter.data_provider.supplier'] = new \PrestaShop\PrestaShop\Adapter\Supplier\SupplierDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.tax' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tax\TaxRuleDataProvider A PrestaShop\PrestaShop\Adapter\Tax\TaxRuleDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_TaxService()
    {
        return $this->services['prestashop.adapter.data_provider.tax'] = new \PrestaShop\PrestaShop\Adapter\Tax\TaxRuleDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.data_provider.warehouse' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Warehouse\WarehouseDataProvider A PrestaShop\PrestaShop\Adapter\Warehouse\WarehouseDataProvider instance
     */
    protected function getPrestashop_Adapter_DataProvider_WarehouseService()
    {
        return $this->services['prestashop.adapter.data_provider.warehouse'] = new \PrestaShop\PrestaShop\Adapter\Warehouse\WarehouseDataProvider();
    }

    /*
     * Gets the 'prestashop.adapter.formatter.price' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter A PrestaShop\PrestaShop\Adapter\Product\PriceFormatter instance
     */
    protected function getPrestashop_Adapter_Formatter_PriceService()
    {
        return $this->services['prestashop.adapter.formatter.price'] = new \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter();
    }

    /*
     * Gets the 'prestashop.adapter.image_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ImageManager A PrestaShop\PrestaShop\Adapter\ImageManager instance
     */
    protected function getPrestashop_Adapter_ImageManagerService()
    {
        return $this->services['prestashop.adapter.image_manager'] = new \PrestaShop\PrestaShop\Adapter\ImageManager($this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'prestashop.adapter.legacy.block.helper.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber A PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber instance
     */
    protected function getPrestashop_Adapter_Legacy_Block_Helper_SubscriberService()
    {
        return $this->services['prestashop.adapter.legacy.block.helper.subscriber'] = new \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber();
    }

    /*
     * Gets the 'prestashop.adapter.legacy.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration A PrestaShop\PrestaShop\Adapter\Configuration instance
     */
    protected function getPrestashop_Adapter_Legacy_ConfigurationService()
    {
        return $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /*
     * Gets the 'prestashop.adapter.legacy.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext A PrestaShop\PrestaShop\Adapter\LegacyContext instance
     */
    protected function getPrestashop_Adapter_Legacy_ContextService()
    {
        return $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext();
    }

    /*
     * Gets the 'prestashop.adapter.legacy.hook.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyHookSubscriber A PrestaShop\PrestaShop\Adapter\LegacyHookSubscriber instance
     */
    protected function getPrestashop_Adapter_Legacy_Hook_SubscriberService()
    {
        return $this->services['prestashop.adapter.legacy.hook.subscriber'] = new \PrestaShop\PrestaShop\Adapter\LegacyHookSubscriber();
    }

    /*
     * Gets the 'prestashop.adapter.legacy.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyLogger A PrestaShop\PrestaShop\Adapter\LegacyLogger instance
     */
    protected function getPrestashop_Adapter_Legacy_LoggerService()
    {
        return $this->services['prestashop.adapter.legacy.logger'] = new \PrestaShop\PrestaShop\Adapter\LegacyLogger();
    }

    /*
     * Gets the 'prestashop.adapter.middleware.ssl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Security\SslMiddleware A PrestaShop\PrestaShop\Adapter\Security\SslMiddleware instance
     */
    protected function getPrestashop_Adapter_Middleware_SslService()
    {
        return $this->services['prestashop.adapter.middleware.ssl'] = new \PrestaShop\PrestaShop\Adapter\Security\SslMiddleware();
    }

    /*
     * Gets the 'prestashop.adapter.module.tab.eventsubscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabManagementSubscriber A PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabManagementSubscriber instance
     */
    protected function getPrestashop_Adapter_Module_Tab_EventsubscriberService()
    {
        return $this->services['prestashop.adapter.module.tab.eventsubscriber'] = new \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabManagementSubscriber($this->get('prestashop.adapter.module.tab.register'), $this->get('prestashop.adapter.module.tab.unregister'));
    }

    /*
     * Gets the 'prestashop.adapter.module.tab.register' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabRegister A PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabRegister instance
     */
    protected function getPrestashop_Adapter_Module_Tab_RegisterService()
    {
        return $this->services['prestashop.adapter.module.tab.register'] = new \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabRegister($this->get('prestashop.core.admin.tab.repository'), $this->get('prestashop.core.admin.lang.repository'), $this->get('logger'), $this->get('translator.default'), new \Symfony\Component\Finder\Finder(), $this->get('filesystem'), $this->get("prestashop.adapter.legacy.context")->getLanguages());
    }

    /*
     * Gets the 'prestashop.adapter.module.tab.unregister' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabUnregister A PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabUnregister instance
     */
    protected function getPrestashop_Adapter_Module_Tab_UnregisterService()
    {
        return $this->services['prestashop.adapter.module.tab.unregister'] = new \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabUnregister($this->get('prestashop.core.admin.tab.repository'), $this->get('prestashop.core.admin.lang.repository'), $this->get('logger'), $this->get('translator.default'));
    }

    /*
     * Gets the 'prestashop.adapter.presenter.module' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\ModulePresenter A PrestaShop\PrestaShop\Adapter\Module\ModulePresenter instance
     */
    protected function getPrestashop_Adapter_Presenter_ModuleService()
    {
        return $this->services['prestashop.adapter.presenter.module'] = new \PrestaShop\PrestaShop\Adapter\Module\ModulePresenter($this->get("prestashop.adapter.legacy.context")->getContext()->currency, $this->get('prestashop.adapter.formatter.price'));
    }

    /*
     * Gets the 'prestashop.adapter.security.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Security\Admin A PrestaShop\PrestaShop\Adapter\Security\Admin instance
     */
    protected function getPrestashop_Adapter_Security_AdminService()
    {
        return $this->services['prestashop.adapter.security.admin'] = new \PrestaShop\PrestaShop\Adapter\Security\Admin($this->get('prestashop.adapter.legacy.context'), $this->get('security.token_storage'), $this->get('prestashop.security.admin.provider'));
    }

    /*
     * Gets the 'prestashop.adapter.shop.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Shop\Context A PrestaShop\PrestaShop\Adapter\Shop\Context instance
     */
    protected function getPrestashop_Adapter_Shop_ContextService()
    {
        return $this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context();
    }

    /*
     * Gets the 'prestashop.adapter.tools' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools A PrestaShop\PrestaShop\Adapter\Tools instance
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        return $this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /*
     * Gets the 'prestashop.addons.client_api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\DataProvider\Marketplace\ApiClient A PrestaShopBundle\Service\DataProvider\Marketplace\ApiClient instance
     */
    protected function getPrestashop_Addons_ClientApiService()
    {
        $this->services['prestashop.addons.client_api'] = $instance = new \PrestaShopBundle\Service\DataProvider\Marketplace\ApiClient($this->get('csa_guzzle.client.addons_api'), $this->get("prestashop.adapter.legacy.context")->getContext()->language->iso_code, $this->get("prestashop.adapter.data_provider.country")->getIsoCodebyId(), $this->get('prestashop.adapter.tools'));

        $instance->setSslVerification((__DIR__.'/cacert.pem'));

        return $instance;
    }

    /*
     * Gets the 'prestashop.cache.refresh' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\Cache\Refresh A PrestaShopBundle\Service\Cache\Refresh instance
     */
    protected function getPrestashop_Cache_RefreshService()
    {
        $this->services['prestashop.cache.refresh'] = $instance = new \PrestaShopBundle\Service\Cache\Refresh('prod');

        $instance->addCacheClear();

        return $instance;
    }

    /*
     * Gets the 'prestashop.categories_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\DataProvider\Admin\CategoriesProvider A PrestaShopBundle\Service\DataProvider\Admin\CategoriesProvider instance
     */
    protected function getPrestashop_CategoriesProviderService()
    {
        return $this->services['prestashop.categories_provider'] = new \PrestaShopBundle\Service\DataProvider\Admin\CategoriesProvider($this->get('prestashop.addons.client_api'));
    }

    /*
     * Gets the 'prestashop.compiler.smarty.template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Compiler\Smarty\TranslationTemplateCompiler A PrestaShop\TranslationToolsBundle\Translation\Compiler\Smarty\TranslationTemplateCompiler instance
     */
    protected function getPrestashop_Compiler_Smarty_TemplateService()
    {
        return $this->services['prestashop.compiler.smarty.template'] = new \PrestaShop\TranslationToolsBundle\Translation\Compiler\Smarty\TranslationTemplateCompiler('Smarty_Internal_Templatelexer', 'Smarty_Internal_Templateparser', $this->get('prestashop.smarty'));
    }

    /*
     * Gets the 'prestashop.core.addon.theme.exporter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeExporter A PrestaShop\PrestaShop\Core\Addon\Theme\ThemeExporter instance
     */
    protected function getPrestashop_Core_Addon_Theme_ExporterService()
    {
        return $this->services['prestashop.core.addon.theme.exporter'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeExporter($this->get('prestashop.adapter.legacy.configuration'), $this->get('filesystem'), new \Symfony\Component\Finder\Finder(), $this->get('prestashop.core.admin.lang.repository'), $this->get('prestashop.translation.theme.exporter'));
    }

    /*
     * Gets the 'prestashop.core.addon.theme.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository A PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository instance
     */
    protected function getPrestashop_Core_Addon_Theme_RepositoryService()
    {
        return $this->services['prestashop.core.addon.theme.repository'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository($this->get('prestashop.adapter.legacy.configuration'), $this->get('filesystem'), $this->get("prestashop.adapter.legacy.context")->getContext()->shop);
    }

    /*
     * Gets the 'prestashop.core.admin.data_provider.addons_interface' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Addons\AddonsDataProvider A PrestaShop\PrestaShop\Adapter\Addons\AddonsDataProvider instance
     */
    protected function getPrestashop_Core_Admin_DataProvider_AddonsInterfaceService()
    {
        $this->services['prestashop.core.admin.data_provider.addons_interface'] = $instance = new \PrestaShop\PrestaShop\Adapter\Addons\AddonsDataProvider($this->get('prestashop.addons.client_api'), $this->get('prestashop.module.zip.manager'));

        $instance->cacheDir = __DIR__;

        return $instance;
    }

    /*
     * Gets the 'prestashop.core.admin.data_provider.module_interface' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider A PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider instance
     */
    protected function getPrestashop_Core_Admin_DataProvider_ModuleInterfaceService()
    {
        return $this->services['prestashop.core.admin.data_provider.module_interface'] = new \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider($this->get("prestashop.adapter.legacy.context")->getEmployeeLanguageIso(), $this->get('prestashop.router'), $this->get('prestashop.core.admin.data_provider.addons_interface'), $this->get('prestashop.categories_provider'), $this->get('doctrine.cache.provider'));
    }

    /*
     * Gets the 'prestashop.core.admin.data_provider.product_interface' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\AdminProductDataProvider A PrestaShop\PrestaShop\Adapter\Product\AdminProductDataProvider instance
     */
    protected function getPrestashop_Core_Admin_DataProvider_ProductInterfaceService()
    {
        return $this->services['prestashop.core.admin.data_provider.product_interface'] = new \PrestaShop\PrestaShop\Adapter\Product\AdminProductDataProvider($this->get('doctrine.orm.default_entity_manager'), $this->get('prestashop.adapter.image_manager'));
    }

    /*
     * Gets the 'prestashop.core.admin.data_updater.product_interface' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\AdminProductDataUpdater A PrestaShop\PrestaShop\Adapter\Product\AdminProductDataUpdater instance
     */
    protected function getPrestashop_Core_Admin_DataUpdater_ProductInterfaceService()
    {
        return $this->services['prestashop.core.admin.data_updater.product_interface'] = new \PrestaShop\PrestaShop\Adapter\Product\AdminProductDataUpdater($this->get('prestashop.hook.dispatcher'));
    }

    /*
     * Gets the 'prestashop.core.admin.lang.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Entity\Repository\LangRepository A PrestaShopBundle\Entity\Repository\LangRepository instance
     */
    protected function getPrestashop_Core_Admin_Lang_RepositoryService()
    {
        return $this->services['prestashop.core.admin.lang.repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('PrestaShopBundle\\Entity\\Lang');
    }

    /*
     * Gets the 'prestashop.core.admin.module.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Module\ModuleRepository A PrestaShop\PrestaShop\Core\Addon\Module\ModuleRepository instance
     */
    protected function getPrestashop_Core_Admin_Module_RepositoryService()
    {
        return $this->services['prestashop.core.admin.module.repository'] = new \PrestaShop\PrestaShop\Core\Addon\Module\ModuleRepository($this->get('prestashop.core.admin.data_provider.module_interface'), $this->get('prestashop.adapter.data_provider.module'), $this->get('prestashop.core.module.updater'), $this->get('prestashop.adapter.legacy.logger'), $this->get('translator.default'), $this->get("prestashop.adapter.legacy.context")->getContext()->language->iso_code, $this->get('doctrine.cache.provider'));
    }

    /*
     * Gets the 'prestashop.core.admin.page_preference_interface' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Admin\PagePreference A PrestaShop\PrestaShop\Adapter\Admin\PagePreference instance
     */
    protected function getPrestashop_Core_Admin_PagePreferenceInterfaceService()
    {
        return $this->services['prestashop.core.admin.page_preference_interface'] = new \PrestaShop\PrestaShop\Adapter\Admin\PagePreference($this->get('session'));
    }

    /*
     * Gets the 'prestashop.core.admin.tab.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Entity\Repository\TabRepository A PrestaShopBundle\Entity\Repository\TabRepository instance
     */
    protected function getPrestashop_Core_Admin_Tab_RepositoryService()
    {
        return $this->services['prestashop.core.admin.tab.repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('PrestaShopBundle\\Entity\\Tab');
    }

    /*
     * Gets the 'prestashop.core.admin.translation.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Entity\Repository\TranslationRepository A PrestaShopBundle\Entity\Repository\TranslationRepository instance
     */
    protected function getPrestashop_Core_Admin_Translation_RepositoryService()
    {
        return $this->services['prestashop.core.admin.translation.repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('PrestaShopBundle\\Entity\\Translation');
    }

    /*
     * Gets the 'prestashop.core.admin.url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Routing\Generator\UrlGeneratorInterface A Symfony\Component\Routing\Generator\UrlGeneratorInterface instance
     */
    protected function getPrestashop_Core_Admin_UrlGeneratorService()
    {
        return $this->services['prestashop.core.admin.url_generator'] = $this->get('prestashop.core.admin.url_generator_factory')->forSymfony();
    }

    /*
     * Gets the 'prestashop.core.admin.url_generator_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\TransitionalBehavior\AdminUrlGeneratorFactory A PrestaShopBundle\Service\TransitionalBehavior\AdminUrlGeneratorFactory instance
     */
    protected function getPrestashop_Core_Admin_UrlGeneratorFactoryService()
    {
        return $this->services['prestashop.core.admin.url_generator_factory'] = new \PrestaShopBundle\Service\TransitionalBehavior\AdminUrlGeneratorFactory($this->get('prestashop.router'));
    }

    /*
     * Gets the 'prestashop.core.admin.url_generator_legacy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Routing\Generator\UrlGeneratorInterface A Symfony\Component\Routing\Generator\UrlGeneratorInterface instance
     */
    protected function getPrestashop_Core_Admin_UrlGeneratorLegacyService()
    {
        return $this->services['prestashop.core.admin.url_generator_legacy'] = $this->get('prestashop.core.admin.url_generator_factory')->forLegacy($this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'prestashop.core.data_provider.stock_interface' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\StockManager A PrestaShop\PrestaShop\Adapter\StockManager instance
     */
    protected function getPrestashop_Core_DataProvider_StockInterfaceService()
    {
        return $this->services['prestashop.core.data_provider.stock_interface'] = new \PrestaShop\PrestaShop\Adapter\StockManager();
    }

    /*
     * Gets the 'prestashop.core.module.updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\ModuleDataUpdater A PrestaShop\PrestaShop\Adapter\Module\ModuleDataUpdater instance
     */
    protected function getPrestashop_Core_Module_UpdaterService()
    {
        return $this->services['prestashop.core.module.updater'] = new \PrestaShop\PrestaShop\Adapter\Module\ModuleDataUpdater($this->get('prestashop.core.admin.data_provider.addons_interface'), $this->get('prestashop.core.admin.data_provider.module_interface'));
    }

    /*
     * Gets the 'prestashop.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\Csv A PrestaShopBundle\Service\Csv instance
     */
    protected function getPrestashop_CsvService()
    {
        return $this->services['prestashop.csv'] = new \PrestaShopBundle\Service\Csv();
    }

    /*
     * Gets the 'prestashop.data_provider.modules.recommended' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\DataProvider\Admin\RecommendedModules A PrestaShopBundle\Service\DataProvider\Admin\RecommendedModules instance
     */
    protected function getPrestashop_DataProvider_Modules_RecommendedService()
    {
        return $this->services['prestashop.data_provider.modules.recommended'] = new \PrestaShopBundle\Service\DataProvider\Admin\RecommendedModules($this->get('prestashop.router'));
    }

    /*
     * Gets the 'prestashop.database.naming_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy A PrestaShopBundle\Service\Database\DoctrineNamingStrategy instance
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /*
     * Gets the 'prestashop.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper A PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper instance
     */
    protected function getPrestashop_Dumper_XliffService()
    {
        return $this->services['prestashop.dumper.xliff'] = new \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper();
    }

    /*
     * Gets the 'prestashop.handler.log' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\Log\LogHandler A PrestaShopBundle\Service\Log\LogHandler instance
     */
    protected function getPrestashop_Handler_LogService()
    {
        return $this->services['prestashop.handler.log'] = new \PrestaShopBundle\Service\Log\LogHandler($this);
    }

    /*
     * Gets the 'prestashop.hook.dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\Hook\HookDispatcher A PrestaShopBundle\Service\Hook\HookDispatcher instance
     */
    protected function getPrestashop_Hook_DispatcherService()
    {
        $this->services['prestashop.hook.dispatcher'] = $instance = new \PrestaShopBundle\Service\Hook\HookDispatcher();

        $instance->addSubscriber($this->get('prestashop.adapter.legacy.hook.subscriber'));
        $instance->addSubscriber($this->get('prestashop.adapter.legacy.block.helper.subscriber'));

        return $instance;
    }

    /*
     * Gets the 'prestashop.hook.finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\Hook\HookFinder A PrestaShopBundle\Service\Hook\HookFinder instance
     */
    protected function getPrestashop_Hook_FinderService()
    {
        return $this->services['prestashop.hook.finder'] = new \PrestaShopBundle\Service\Hook\HookFinder();
    }

    /*
     * Gets the 'prestashop.module.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Module\ModuleManager A PrestaShop\PrestaShop\Core\Addon\Module\ModuleManager instance
     */
    protected function getPrestashop_Module_ManagerService()
    {
        return $this->services['prestashop.module.manager'] = new \PrestaShop\PrestaShop\Core\Addon\Module\ModuleManager($this->get('prestashop.core.admin.data_provider.module_interface'), $this->get('prestashop.adapter.data_provider.module'), $this->get('prestashop.core.module.updater'), $this->get('prestashop.core.admin.module.repository'), $this->get('prestashop.module.zip.manager'), $this->get('translator.default'), $this->get('event_dispatcher'), $this->get("prestashop.adapter.legacy.context")->getContext()->employee);
    }

    /*
     * Gets the 'prestashop.module.zip.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\ModuleZipManager A PrestaShop\PrestaShop\Adapter\Module\ModuleZipManager instance
     */
    protected function getPrestashop_Module_Zip_ManagerService()
    {
        return $this->services['prestashop.module.zip.manager'] = new \PrestaShop\PrestaShop\Adapter\Module\ModuleZipManager($this->get('filesystem'), new \Symfony\Component\Finder\Finder(), $this->get('translator.default'));
    }

    /*
     * Gets the 'prestashop.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\Routing\Router A PrestaShopBundle\Service\Routing\Router instance
     */
    protected function getPrestashop_RouterService()
    {
        $this->services['prestashop.router'] = $instance = new \PrestaShopBundle\Service\Routing\Router($this, ($this->targetDirs[2].'/config/routing.yml'), array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdProjectContainerUrlMatcher', 'strict_requirements' => NULL), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setTokenManager($this->get('security.csrf.token_manager'));
        $instance->setUserProvider($this->get("prestashop.user_provider"));

        return $instance;
    }

    /*
     * Gets the 'prestashop.security.admin.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Security\Admin\EmployeeProvider A PrestaShopBundle\Security\Admin\EmployeeProvider instance
     */
    protected function getPrestashop_Security_Admin_ProviderService()
    {
        return $this->services['prestashop.security.admin.provider'] = new \PrestaShopBundle\Security\Admin\EmployeeProvider($this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'prestashop.security.role.dynamic_role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Security\Role\DynamicRoleHierarchy A PrestaShopBundle\Security\Role\DynamicRoleHierarchy instance
     */
    protected function getPrestashop_Security_Role_DynamicRoleHierarchyService()
    {
        return $this->services['prestashop.security.role.dynamic_role_hierarchy'] = new \PrestaShopBundle\Security\Role\DynamicRoleHierarchy();
    }

    /*
     * Gets the 'prestashop.service.product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\ProductService A PrestaShopBundle\Service\ProductService instance
     */
    protected function getPrestashop_Service_ProductService()
    {
        return $this->services['prestashop.service.product'] = new \PrestaShopBundle\Service\ProductService($this->get('prestashop.adapter.data_provider.product'));
    }

    /*
     * Gets the 'prestashop.smarty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Smarty A PrestaShop\TranslationToolsBundle\Smarty instance
     */
    protected function getPrestashop_SmartyService()
    {
        $this->services['prestashop.smarty'] = $instance = new \PrestaShop\TranslationToolsBundle\Smarty();

        $instance->setCompileDir((__DIR__.'/smarty'));
        $instance->forceCompile(true);

        return $instance;
    }

    /*
     * Gets the 'prestashop.tokenized_url_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\EventListener\TokenizedUrlsListener A PrestaShopBundle\EventListener\TokenizedUrlsListener instance
     */
    protected function getPrestashop_TokenizedUrlListenerService()
    {
        return $this->services['prestashop.tokenized_url_listener'] = new \PrestaShopBundle\EventListener\TokenizedUrlsListener($this->get('security.csrf.token_manager'), $this->get('prestashop.router'), $this->get("prestashop.user_provider")->getUsername(), $this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'prestashop.translation.backoffice_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Provider\BackOfficeProvider A PrestaShopBundle\Translation\Provider\BackOfficeProvider instance
     */
    protected function getPrestashop_Translation_BackofficeProviderService()
    {
        return $this->services['prestashop.translation.backoffice_provider'] = new \PrestaShopBundle\Translation\Provider\BackOfficeProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /*
     * Gets the 'prestashop.translation.chainextractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\ChainExtractor A PrestaShop\TranslationToolsBundle\Translation\Extractor\ChainExtractor instance
     */
    protected function getPrestashop_Translation_ChainextractorService()
    {
        $this->services['prestashop.translation.chainextractor'] = $instance = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('prestashop.translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('prestashop.translation.extractor.twig'));
        $instance->addExtractor('smarty', $this->get('prestashop.translation.extractor.smarty'));

        return $instance;
    }

    /*
     * Gets the 'prestashop.translation.database_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Loader\DatabaseTranslationLoader A PrestaShopBundle\Translation\Loader\DatabaseTranslationLoader instance
     */
    protected function getPrestashop_Translation_DatabaseLoaderService()
    {
        return $this->services['prestashop.translation.database_loader'] = new \PrestaShopBundle\Translation\Loader\DatabaseTranslationLoader($this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'prestashop.translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper A PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper instance
     */
    protected function getPrestashop_Translation_Dumper_XliffService()
    {
        return $this->services['prestashop.translation.dumper.xliff'] = new \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper();
    }

    /*
     * Gets the 'prestashop.translation.extractor.crowdin.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\CrowdinPhpExtractor A PrestaShop\TranslationToolsBundle\Translation\Extractor\CrowdinPhpExtractor instance
     */
    protected function getPrestashop_Translation_Extractor_Crowdin_PhpService()
    {
        return $this->services['prestashop.translation.extractor.crowdin.php'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\CrowdinPhpExtractor($this->get('prestashop.translation.parser.crowdin_php_parser'), $this->get('prestashop.translation.manager.original_string_manager'));
    }

    /*
     * Gets the 'prestashop.translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\PhpExtractor A PrestaShop\TranslationToolsBundle\Translation\Extractor\PhpExtractor instance
     */
    protected function getPrestashop_Translation_Extractor_PhpService()
    {
        return $this->services['prestashop.translation.extractor.php'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\PhpExtractor();
    }

    /*
     * Gets the 'prestashop.translation.extractor.smarty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\SmartyExtractor A PrestaShop\TranslationToolsBundle\Translation\Extractor\SmartyExtractor instance
     */
    protected function getPrestashop_Translation_Extractor_SmartyService()
    {
        return $this->services['prestashop.translation.extractor.smarty'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\SmartyExtractor($this->get('prestashop.compiler.smarty.template'));
    }

    /*
     * Gets the 'prestashop.translation.extractor.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\TwigExtractor A PrestaShop\TranslationToolsBundle\Translation\Extractor\TwigExtractor instance
     */
    protected function getPrestashop_Translation_Extractor_TwigService()
    {
        return $this->services['prestashop.translation.extractor.twig'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\TwigExtractor($this->get('twig'));
    }

    /*
     * Gets the 'prestashop.translation.frontoffice_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Provider\FrontOfficeProvider A PrestaShopBundle\Translation\Provider\FrontOfficeProvider instance
     */
    protected function getPrestashop_Translation_FrontofficeProviderService()
    {
        return $this->services['prestashop.translation.frontoffice_provider'] = new \PrestaShopBundle\Translation\Provider\FrontOfficeProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /*
     * Gets the 'prestashop.translation.mails' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Provider\MailsProvider A PrestaShopBundle\Translation\Provider\MailsProvider instance
     */
    protected function getPrestashop_Translation_MailsService()
    {
        return $this->services['prestashop.translation.mails'] = new \PrestaShopBundle\Translation\Provider\MailsProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /*
     * Gets the 'prestashop.translation.manager.original_string_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Manager\OriginalStringManager A PrestaShop\TranslationToolsBundle\Translation\Manager\OriginalStringManager instance
     */
    protected function getPrestashop_Translation_Manager_OriginalStringManagerService()
    {
        return $this->services['prestashop.translation.manager.original_string_manager'] = new \PrestaShop\TranslationToolsBundle\Translation\Manager\OriginalStringManager($this->get('prestashop.translation.parser.crowdin_php_parser'));
    }

    /*
     * Gets the 'prestashop.translation.manager.translation_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Manager\TranslationManager A PrestaShop\TranslationToolsBundle\Translation\Manager\TranslationManager instance
     */
    protected function getPrestashop_Translation_Manager_TranslationManagerService()
    {
        return $this->services['prestashop.translation.manager.translation_manager'] = new \PrestaShop\TranslationToolsBundle\Translation\Manager\TranslationManager($this->get('prestashop.translation.parser.crowdin_php_parser'));
    }

    /*
     * Gets the 'prestashop.translation.modules_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Provider\ModulesProvider A PrestaShopBundle\Translation\Provider\ModulesProvider instance
     */
    protected function getPrestashop_Translation_ModulesProviderService()
    {
        return $this->services['prestashop.translation.modules_provider'] = new \PrestaShopBundle\Translation\Provider\ModulesProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /*
     * Gets the 'prestashop.translation.others_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Provider\OthersProvider A PrestaShopBundle\Translation\Provider\OthersProvider instance
     */
    protected function getPrestashop_Translation_OthersProviderService()
    {
        return $this->services['prestashop.translation.others_provider'] = new \PrestaShopBundle\Translation\Provider\OthersProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /*
     * Gets the 'prestashop.translation.parser.crowdin_php_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Parser\CrowdinPhpParser A PrestaShop\TranslationToolsBundle\Translation\Parser\CrowdinPhpParser instance
     */
    protected function getPrestashop_Translation_Parser_CrowdinPhpParserService()
    {
        return $this->services['prestashop.translation.parser.crowdin_php_parser'] = new \PrestaShop\TranslationToolsBundle\Translation\Parser\CrowdinPhpParser();
    }

    /*
     * Gets the 'prestashop.translation.theme.exporter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Exporter\ThemeExporter A PrestaShopBundle\Translation\Exporter\ThemeExporter instance
     */
    protected function getPrestashop_Translation_Theme_ExporterService()
    {
        $this->services['prestashop.translation.theme.exporter'] = $instance = new \PrestaShopBundle\Translation\Exporter\ThemeExporter($this->get('prestashop.translation.theme_extractor'), $this->get('prestashop.translation.theme_provider'), $this->get('prestashop.core.addon.theme.repository'), $this->get('prestashop.translation.dumper.xliff'), $this->get('prestashop.utils.zip_manager'), $this->get('filesystem'));

        $instance->cacheDir = __DIR__;
        $instance->exportDir = (__DIR__.'/export');

        return $instance;
    }

    /*
     * Gets the 'prestashop.translation.theme_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Extractor\ThemeExtractor A PrestaShopBundle\Translation\Extractor\ThemeExtractor instance
     */
    protected function getPrestashop_Translation_ThemeExtractorService()
    {
        return $this->services['prestashop.translation.theme_extractor'] = new \PrestaShopBundle\Translation\Extractor\ThemeExtractor($this->get('prestashop.translation.extractor.smarty'));
    }

    /*
     * Gets the 'prestashop.translation.theme_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Provider\ThemeProvider A PrestaShopBundle\Translation\Provider\ThemeProvider instance
     */
    protected function getPrestashop_Translation_ThemeProviderService()
    {
        $this->services['prestashop.translation.theme_provider'] = $instance = new \PrestaShopBundle\Translation\Provider\ThemeProvider($this->get('prestashop.translation.database_loader'), (__DIR__.'/themes'));

        $instance->themeResourcesDirectory = ($this->targetDirs[2].'/../themes');
        $instance->filesystem = $this->get('filesystem');
        $instance->themeRepository = $this->get('prestashop.core.addon.theme.repository');
        $instance->themeExtractor = $this->get('prestashop.translation.theme_extractor');

        return $instance;
    }

    /*
     * Gets the 'prestashop.translation.theme_translations_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Factory\ThemeTranslationsFactory A PrestaShopBundle\Translation\Factory\ThemeTranslationsFactory instance
     */
    protected function getPrestashop_Translation_ThemeTranslationsFactoryService()
    {
        $this->services['prestashop.translation.theme_translations_factory'] = $instance = new \PrestaShopBundle\Translation\Factory\ThemeTranslationsFactory($this->get('prestashop.translation.theme_provider'));

        $instance->addProvider($this->get('prestashop.translation.frontoffice_provider'));

        return $instance;
    }

    /*
     * Gets the 'prestashop.translation.translations_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Factory\TranslationsFactory A PrestaShopBundle\Translation\Factory\TranslationsFactory instance
     */
    protected function getPrestashop_Translation_TranslationsFactoryService()
    {
        $this->services['prestashop.translation.translations_factory'] = $instance = new \PrestaShopBundle\Translation\Factory\TranslationsFactory();

        $instance->addProvider($this->get('prestashop.translation.backoffice_provider'));
        $instance->addProvider($this->get('prestashop.translation.frontoffice_provider'));
        $instance->addProvider($this->get('prestashop.translation.mails'));
        $instance->addProvider($this->get('prestashop.translation.others_provider'));
        $instance->addProvider($this->get('prestashop.translation.modules_provider'));

        return $instance;
    }

    /*
     * Gets the 'prestashop.twig.extension.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Twig\AdminExtension A PrestaShopBundle\Twig\AdminExtension instance
     */
    protected function getPrestashop_Twig_Extension_AdminService()
    {
        return $this->services['prestashop.twig.extension.admin'] = new \PrestaShopBundle\Twig\AdminExtension($this->get('request_stack'), $this);
    }

    /*
     * Gets the 'prestashop.twig.extension.dataformatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Twig\DataFormatterExtension A PrestaShopBundle\Twig\DataFormatterExtension instance
     */
    protected function getPrestashop_Twig_Extension_DataformatterService()
    {
        return $this->services['prestashop.twig.extension.dataformatter'] = new \PrestaShopBundle\Twig\DataFormatterExtension();
    }

    /*
     * Gets the 'prestashop.twig.extension.hook' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Twig\HookExtension A PrestaShopBundle\Twig\HookExtension instance
     */
    protected function getPrestashop_Twig_Extension_HookService()
    {
        return $this->services['prestashop.twig.extension.hook'] = new \PrestaShopBundle\Twig\HookExtension($this->get('prestashop.hook.dispatcher'), $this->get('prestashop.adapter.data_provider.module'), (($this->get("prestashop.adapter.legacy.context")->getContext()->employee) ? ($this->get("prestashop.core.admin.module.repository")) : (null)));
    }

    /*
     * Gets the 'prestashop.twig.extension.layout' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Twig\LayoutExtension A PrestaShopBundle\Twig\LayoutExtension instance
     */
    protected function getPrestashop_Twig_Extension_LayoutService()
    {
        return $this->services['prestashop.twig.extension.layout'] = new \PrestaShopBundle\Twig\LayoutExtension($this->get('prestashop.adapter.legacy.context'), 'prod');
    }

    /*
     * Gets the 'prestashop.twig.extension.stringloader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extension_StringLoader A Twig_Extension_StringLoader instance
     */
    protected function getPrestashop_Twig_Extension_StringloaderService()
    {
        return $this->services['prestashop.twig.extension.stringloader'] = new \Twig_Extension_StringLoader();
    }

    /*
     * Gets the 'prestashop.twig.extension.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Twig\TranslationsExtension A PrestaShopBundle\Twig\TranslationsExtension instance
     */
    protected function getPrestashop_Twig_Extension_TranslationService()
    {
        $this->services['prestashop.twig.extension.translation'] = $instance = new \PrestaShopBundle\Twig\TranslationsExtension($this, $this->get('prestashop.router'));

        $instance->logger = $this->get('logger');
        $instance->translator = $this->get('translator.default');

        return $instance;
    }

    /*
     * Gets the 'prestashop.user_locale.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\EventListener\UserLocaleListener A PrestaShopBundle\EventListener\UserLocaleListener instance
     */
    protected function getPrestashop_UserLocale_ListenerService()
    {
        return $this->services['prestashop.user_locale.listener'] = new \PrestaShopBundle\EventListener\UserLocaleListener($this->get('prestashop.adapter.legacy.context'));
    }

    /*
     * Gets the 'prestashop.user_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Service\DataProvider\UserProvider A PrestaShopBundle\Service\DataProvider\UserProvider instance
     */
    protected function getPrestashop_UserProviderService()
    {
        return $this->services['prestashop.user_provider'] = new \PrestaShopBundle\Service\DataProvider\UserProvider($this->get('security.token_storage'));
    }

    /*
     * Gets the 'prestashop.utils.zip_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Utils\ZipManager A PrestaShopBundle\Utils\ZipManager instance
     */
    protected function getPrestashop_Utils_ZipManagerService()
    {
        return $this->services['prestashop.utils.zip_manager'] = new \PrestaShopBundle\Utils\ZipManager();
    }

    /*
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /*
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     * @deprecated The "request" service is deprecated since Symfony 2.7 and will be removed in 3.0. Use the "request_stack" service instead.
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('prestashop.router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $d);
    }

    /*
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /*
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /*
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance
     *
     * @deprecated The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.
     */
    protected function getSecurity_ContextService()
    {
        @trigger_error('The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.', E_USER_DEPRECATED);

        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /*
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /*
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array());
    }

    /*
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.main' => NULL)), $this->get('event_dispatcher'));
    }

    /*
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /*
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = $this->get('security.authentication.manager');
        $d = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $e = new \Symfony\Component\Security\Http\AccessMap();

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($e, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => new \Symfony\Component\Security\Core\User\InMemoryUserProvider(), 1 => $this->get('prestashop.security.admin.provider')), 'main', $a, $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '617c5b48dc1190.62230448', $a, $c), 3 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $e, $c)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), new \Symfony\Component\Security\Http\HttpUtils($d, $d), 'main', NULL, NULL, NULL, $a, false));
    }

    /*
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /*
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance
     *
     * @deprecated The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.
     */
    protected function getSecurity_SecureRandomService()
    {
        @trigger_error('The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.', E_USER_DEPRECATED);

        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom();
    }

    /*
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the 'security.user_checker.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance
     */
    protected function getSecurity_UserChecker_MainService()
    {
        return $this->services['security.user_checker.main'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /*
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /*
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /*
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /*
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /*
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /*
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /*
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /*
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /*
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /*
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /*
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /*
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /*
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        return $this->services['swiftmailer.mailer.default.transport'] = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /*
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /*
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /*
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper instance
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /*
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /*
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('prestashop.router'));
    }

    /*
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /*
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /*
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /*
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /*
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /*
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /*
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /*
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /*
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /*
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /*
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /*
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /*
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));
        $instance->addLoader('db', $this->get('prestashop.translation.database_loader'));

        return $instance;
    }

    /*
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /*
     * Gets the 'translation_tools.translation.node_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Twig\NodeVisitor\TranslationNodeVisitor A PrestaShop\TranslationToolsBundle\Twig\NodeVisitor\TranslationNodeVisitor instance
     */
    protected function getTranslationTools_Translation_NodeVisitorService()
    {
        return $this->services['translation_tools.translation.node_visitor'] = new \PrestaShop\TranslationToolsBundle\Twig\NodeVisitor\TranslationNodeVisitor();
    }

    /*
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShopBundle\Translation\Translator A PrestaShopBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \PrestaShopBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json'), 'prestashop.translation.database_loader' => array(0 => 'db')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false, 'resource_files' => array('sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf')), 'af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'pl-PL' => array(0 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCategoryproductsAdmin.pl-PL.xlf'), 1 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCarriercomparisonAdmin.pl-PL.xlf'), 2 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopFormsErrors.pl-PL.xlf'), 3 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesFeaturedproductsShop.pl-PL.xlf'), 4 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsbestcategoriesAdmin.pl-PL.xlf'), 5 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminNavigationHeader.pl-PL.xlf'), 6 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminPaymentNotification.pl-PL.xlf'), 7 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesBannerAdmin.pl-PL.xlf'), 8 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopPdf.pl-PL.xlf'), 9 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesSearchbarShop.pl-PL.xlf'), 10 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminActions.pl-PL.xlf'), 11 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminNavigationFooter.pl-PL.xlf'), 12 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesSocialfollowShop.pl-PL.xlf'), 13 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsproductAdmin.pl-PL.xlf'), 14 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopNotificationsInfo.pl-PL.xlf'), 15 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCategoryproductsShop.pl-PL.xlf'), 16 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesContactinfoShop.pl-PL.xlf'), 17 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCashondeliveryShop.pl-PL.xlf'), 18 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesViewedproductAdmin.pl-PL.xlf'), 19 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminNavigationNotification.pl-PL.xlf'), 20 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsnewsletterAdmin.pl-PL.xlf'), 21 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesLinklistAdmin.pl-PL.xlf'), 22 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminCatalogNotification.pl-PL.xlf'), 23 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopThemeCustomeraccount.pl-PL.xlf'), 24 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminPaymentFeature.pl-PL.xlf'), 25 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesNewsletterAdmin.pl-PL.xlf'), 26 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminShippingNotification.pl-PL.xlf'), 27 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesProductinfoShop.pl-PL.xlf'), 28 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopNotificationsError.pl-PL.xlf'), 29 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatssalesAdmin.pl-PL.xlf'), 30 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminShopparametersNotification.pl-PL.xlf'), 31 => ($this->targetDirs[2].'/Resources/translations/pl-PL/EmailsSubject.pl-PL.xlf'), 32 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminOrderscustomersFeature.pl-PL.xlf'), 33 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopThemeCheckout.pl-PL.xlf'), 34 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsvisitsAdmin.pl-PL.xlf'), 35 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminLoginNotification.pl-PL.xlf'), 36 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCustomeraccountlinksAdmin.pl-PL.xlf'), 37 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesMailalertsAdmin.pl-PL.xlf'), 38 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatscarrierAdmin.pl-PL.xlf'), 39 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopThemeActions.pl-PL.xlf'), 40 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopNotificationsSuccess.pl-PL.xlf'), 41 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsbestsuppliersAdmin.pl-PL.xlf'), 42 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesContactformShop.pl-PL.xlf'), 43 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsbestmanufacturersAdmin.pl-PL.xlf'), 44 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesDashactivityAdmin.pl-PL.xlf'), 45 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesDashproductsAdmin.pl-PL.xlf'), 46 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesLanguageselectorAdmin.pl-PL.xlf'), 47 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesDateofdeliveryAdmin.pl-PL.xlf'), 48 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesMainmenuAdmin.pl-PL.xlf'), 49 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesLegalcomplianceAdmin.pl-PL.xlf'), 50 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesWirepaymentAdmin.pl-PL.xlf'), 51 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesWirepaymentShop.pl-PL.xlf'), 52 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCashondeliveryAdmin.pl-PL.xlf'), 53 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatspersonalinfosAdmin.pl-PL.xlf'), 54 => ($this->targetDirs[2].'/Resources/translations/pl-PL/messages.pl-PL.xlf'), 55 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesSpecialsShop.pl-PL.xlf'), 56 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesGraphnvd3Admin.pl-PL.xlf'), 57 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminAdvparametersHelp.pl-PL.xlf'), 58 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesEmailsubscriptionShop.pl-PL.xlf'), 59 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsoriginAdmin.pl-PL.xlf'), 60 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopTheme.pl-PL.xlf'), 61 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCustomersigninAdmin.pl-PL.xlf'), 62 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCrosssellingAdmin.pl-PL.xlf'), 63 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesSpecialsAdmin.pl-PL.xlf'), 64 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesImagesliderAdmin.pl-PL.xlf'), 65 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesNewproductsShop.pl-PL.xlf'), 66 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminInternationalHelp.pl-PL.xlf'), 67 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCurrencyselectorAdmin.pl-PL.xlf'), 68 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesDataprivacyShop.pl-PL.xlf'), 69 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatscatalogAdmin.pl-PL.xlf'), 70 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminDesignHelp.pl-PL.xlf'), 71 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesBlockreassuranceAdmin.pl-PL.xlf'), 72 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminModulesFeature.pl-PL.xlf'), 73 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopNavigation.pl-PL.xlf'), 74 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesSekeywordsAdmin.pl-PL.xlf'), 75 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesLivetranslationShop.pl-PL.xlf'), 76 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminOrderscustomersHelp.pl-PL.xlf'), 77 => ($this->targetDirs[2].'/Resources/translations/pl-PL/Install.pl-PL.xlf'), 78 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesShoppingcartAdmin.pl-PL.xlf'), 79 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsequipmentAdmin.pl-PL.xlf'), 80 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminAdvparametersNotification.pl-PL.xlf'), 81 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesSocialfollowAdmin.pl-PL.xlf'), 82 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminModulesHelp.pl-PL.xlf'), 83 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsregistrationsAdmin.pl-PL.xlf'), 84 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsliveAdmin.pl-PL.xlf'), 85 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesBrandlistAdmin.pl-PL.xlf'), 86 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesContactinfoAdmin.pl-PL.xlf'), 87 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCarriercomparisonShop.pl-PL.xlf'), 88 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesBestsellersAdmin.pl-PL.xlf'), 89 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopThemeError.pl-PL.xlf'), 90 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesViewedproductShop.pl-PL.xlf'), 91 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesNewproductsAdmin.pl-PL.xlf'), 92 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminStatsFeature.pl-PL.xlf'), 93 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesWelcomeAdmin.pl-PL.xlf'), 94 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminShopparametersFeature.pl-PL.xlf'), 95 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsforecastAdmin.pl-PL.xlf'), 96 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminDashboardNotification.pl-PL.xlf'), 97 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsbestvouchersAdmin.pl-PL.xlf'), 98 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminShopparametersHelp.pl-PL.xlf'), 99 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminNavigationMenu.pl-PL.xlf'), 100 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminStatsNotification.pl-PL.xlf'), 101 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesGridhtmlAdmin.pl-PL.xlf'), 102 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesPscleanerAdmin.pl-PL.xlf'), 103 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesDashgoalsAdmin.pl-PL.xlf'), 104 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatscheckupAdmin.pl-PL.xlf'), 105 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesBrandlistShop.pl-PL.xlf'), 106 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesLivetranslationAdmin.pl-PL.xlf'), 107 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesMailalertsShop.pl-PL.xlf'), 108 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsbestcustomersAdmin.pl-PL.xlf'), 109 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesAutoupgradeAdmin.pl-PL.xlf'), 110 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesSearchbarAdmin.pl-PL.xlf'), 111 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminDesignNotification.pl-PL.xlf'), 112 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesTrackingfrontAdmin.pl-PL.xlf'), 113 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminCatalogHelp.pl-PL.xlf'), 114 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminModulesNotification.pl-PL.xlf'), 115 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminCatalogModules.pl-PL.xlf'), 116 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesProductinfoAdmin.pl-PL.xlf'), 117 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminInternationalFeature.pl-PL.xlf'), 118 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsbestproductsAdmin.pl-PL.xlf'), 119 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesSharebuttonsAdmin.pl-PL.xlf'), 120 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesLegalcomplianceShop.pl-PL.xlf'), 121 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopDemoCatalog.pl-PL.xlf'), 122 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesContactformAdmin.pl-PL.xlf'), 123 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesRssfeedShop.pl-PL.xlf'), 124 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsdataAdmin.pl-PL.xlf'), 125 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopThemeCatalog.pl-PL.xlf'), 126 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesSupplierlistAdmin.pl-PL.xlf'), 127 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminGlobal.pl-PL.xlf'), 128 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminDesignFeature.pl-PL.xlf'), 129 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCrosssellingShop.pl-PL.xlf'), 130 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatsstockAdmin.pl-PL.xlf'), 131 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopFormsLabels.pl-PL.xlf'), 132 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesLinklistShop.pl-PL.xlf'), 133 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCustomtextAdmin.pl-PL.xlf'), 134 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminNotificationsError.pl-PL.xlf'), 135 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopFormsHelp.pl-PL.xlf'), 136 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesFacetedsearchAdmin.pl-PL.xlf'), 137 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesBlockreassuranceShop.pl-PL.xlf'), 138 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminCatalogFeature.pl-PL.xlf'), 139 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCheckpaymentAdmin.pl-PL.xlf'), 140 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesReminderAdmin.pl-PL.xlf'), 141 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminShippingFeature.pl-PL.xlf'), 142 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesDateofdeliveryShop.pl-PL.xlf'), 143 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesBannerShop.pl-PL.xlf'), 144 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesBestsellersShop.pl-PL.xlf'), 145 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesDashtrendsAdmin.pl-PL.xlf'), 146 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesFeaturedproductsAdmin.pl-PL.xlf'), 147 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesFeederAdmin.pl-PL.xlf'), 148 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCheckpaymentShop.pl-PL.xlf'), 149 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminPaymentHelp.pl-PL.xlf'), 150 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ShopNotificationsWarning.pl-PL.xlf'), 151 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesFacetedsearchShop.pl-PL.xlf'), 152 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesDataprivacyAdmin.pl-PL.xlf'), 153 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesSharebuttonsShop.pl-PL.xlf'), 154 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminDashboardHelp.pl-PL.xlf'), 155 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesPagesnotfoundAdmin.pl-PL.xlf'), 156 => ($this->targetDirs[2].'/Resources/translations/pl-PL/EmailsBody.pl-PL.xlf'), 157 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminStatsHelp.pl-PL.xlf'), 158 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminAdvparametersFeature.pl-PL.xlf'), 159 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminNotificationsWarning.pl-PL.xlf'), 160 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesTrackingfrontShop.pl-PL.xlf'), 161 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminInternationalNotification.pl-PL.xlf'), 162 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminOrderscustomersNotification.pl-PL.xlf'), 163 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminNotificationsInfo.pl-PL.xlf'), 164 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminNotificationsSuccess.pl-PL.xlf'), 165 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesEmailsubscriptionAdmin.pl-PL.xlf'), 166 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesSupplierlistShop.pl-PL.xlf'), 167 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminDashboardFeature.pl-PL.xlf'), 168 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesRssfeedAdmin.pl-PL.xlf'), 169 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesStatssearchAdmin.pl-PL.xlf'), 170 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesAdvertisingAdmin.pl-PL.xlf'), 171 => ($this->targetDirs[2].'/Resources/translations/pl-PL/ModulesCategorytreeAdmin.pl-PL.xlf'), 172 => ($this->targetDirs[2].'/Resources/translations/pl-PL/AdminShippingHelp.pl-PL.xlf')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'default'));

        return $instance;
    }

    /*
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator.default'), $this->get('request_stack'));
    }

    /*
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getTwigService()
    {
        $a = $this->get('request_stack');
        $b = $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = $this->get('fragment.handler');

        $d = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a, $b);

        $e = new \Symfony\Bridge\Twig\AppVariable();
        $e->setEnvironment('prod');
        $e->setDebug(false);
        if ($this->has('security.token_storage')) {
            $e->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $e->setRequestStack($a);
        }
        $e->setContainer($this);

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('autoescape' => 'name', 'debug' => false, 'strict_variables' => false, 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_horizontal_layout.html.twig'), 'exception_controller' => 'twig.controller.exception:showAction', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default'), $this->get('translation_tools.translation.node_visitor')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $d));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('prestashop.router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($c));
        $instance->addExtension($d);
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_horizontal_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('prestashop.twig.extension.stringloader'));
        $instance->addExtension($this->get('prestashop.twig.extension.layout'));
        $instance->addExtension($this->get('prestashop.twig.extension.translation'));
        $instance->addExtension($this->get('prestashop.twig.extension.dataformatter'));
        $instance->addExtension($this->get('prestashop.twig.extension.admin'));
        $instance->addExtension($this->get('prestashop.twig.extension.hook'));
        $instance->addGlobal('app', $e);
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /*
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }

    /*
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /*
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/src/PrestaShopBundle/Resources/views'), 'PrestaShop');
        $instance->addPath(($this->targetDirs[3].'/vendor/csa/guzzle-bundle/src/Resources/views'), 'CsaGuzzle');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /*
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /*
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /*
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('krBXSTXqzH4OVnQgm2W2ILgUAY2sy0yvIQ38aWSfIRkOdPyUFZLkZVtj');
    }

    /*
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /*
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /*
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));

        return $instance;
    }

    /*
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /*
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /*
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /*
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /*
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.authentication.trust_resolver');

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter(), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 3 => new \PrestaShopBundle\Security\Voter\PageVoter()));

        return $instance;
    }

    /*
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('617c5b48dc1190.62230448')), true);

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /*
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /*
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->services['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /*
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /*
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /*
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /*
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /*
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /*
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'PrestaShopBundle' => 'PrestaShopBundle\\PrestaShopBundle',
                'TranslationToolsBundle' => 'PrestaShop\\TranslationToolsBundle\\TranslationToolsBundle',
                'CsaGuzzleBundle' => 'Csa\\Bundle\\GuzzleBundle\\CsaGuzzleBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'PrestaShopBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/PrestaShopBundle'),
                    'namespace' => 'PrestaShopBundle',
                ),
                'TranslationToolsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/prestashop/translationtools-bundle'),
                    'namespace' => 'PrestaShop\\TranslationToolsBundle',
                ),
                'CsaGuzzleBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/csa/guzzle-bundle/src'),
                    'namespace' => 'Csa\\Bundle\\GuzzleBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'cache.driver' => 'array',
            'database_host' => 'ps1_db',
            'database_port' => '',
            'database_name' => 'ps',
            'database_user' => 'ps',
            'database_password' => 'ps',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'krBXSTXqzH4OVnQgm2W2ILgUAY2sy0yvIQ38aWSfIRkOdPyUFZLkZVtj',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2021-10-29',
            'locale' => 'pl-PL',
            'cookie_key' => 'N3ZGpAi2Dc4Fu5iG04h5E7kEBpVpEQGzyV9oUYdLvi5AS6hGzR4etjPJ',
            'cookie_iv' => 'ogp6Otjv',
            'new_cookie_key' => 'def0000028863efe1d31f4a7f32d81274840c607d4c99f9393da170201e66fc454fa7b099a8a431975b5c399add8df75abccce20f8443285fe923c0ad8c24426791208e4',
            'adaptersecurityadminclass' => 'PrestaShop\\PrestaShop\\Adapter\\Security\\Admin',
            'translator.class' => 'PrestaShopBundle\\Translation\\Translator',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'krBXSTXqzH4OVnQgm2W2ILgUAY2sy0yvIQ38aWSfIRkOdPyUFZLkZVtj',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'pl-PL',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appProdProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appProdProjectContainerUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[2].'/config/routing.yml'),
            'router.cache_class_prefix' => 'appProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => 0,
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.role_hierarchy.roles' => array(

            ),
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_horizontal_layout.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.legacy' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'app',
                    ),
                ),
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'translations_dir' => ($this->targetDirs[2].'/Resources/translations'),
            'themes_translations_dir' => (__DIR__.'/themes'),
            'themes_dir' => ($this->targetDirs[2].'/../themes'),
            'prestashop.security.voter.product.class' => 'PrestaShopBundle\\Security\\Voter\\PageVoter',
            'prestashop.addons.api_client.verify_ssl' => (__DIR__.'/cacert.pem'),
            'prestashop.addons.api_client.ttl' => 7200,
            'console.command.ids' => array(

            ),
        );
    }
}
