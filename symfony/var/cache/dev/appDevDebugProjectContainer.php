<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'appbundle\\controller\\admin\\articlecontroller' => 'AppBundle\\Controller\\Admin\\ArticleController',
            'appbundle\\controller\\admin\\usercontroller' => 'AppBundle\\Controller\\Admin\\UserController',
            'appbundle\\controller\\blog\\articlecontroller' => 'AppBundle\\Controller\\Blog\\ArticleController',
            'appbundle\\controller\\contactcontroller' => 'AppBundle\\Controller\\ContactController',
            'appbundle\\controller\\defaultcontroller' => 'AppBundle\\Controller\\DefaultController',
            'appbundle\\form\\articletype' => 'AppBundle\\Form\\ArticleType',
            'appbundle\\form\\commenttype' => 'AppBundle\\Form\\CommentType',
            'appbundle\\form\\contacttype' => 'AppBundle\\Form\\ContactType',
            'autowired.appbundle\\entity\\article' => 'autowired.AppBundle\\Entity\\Article',
            'autowired.appbundle\\entity\\user' => 'autowired.AppBundle\\Entity\\User',
        );
        $this->methodMap = array(
            '1_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0' => 'get14615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0Service',
            '2_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0' => 'get24615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0Service',
            'AppBundle\\Controller\\Admin\\ArticleController' => 'getAppBundle_Controller_Admin_ArticleControllerService',
            'AppBundle\\Controller\\Admin\\UserController' => 'getAppBundle_Controller_Admin_UserControllerService',
            'AppBundle\\Controller\\Blog\\ArticleController' => 'getAppBundle_Controller_Blog_ArticleControllerService',
            'AppBundle\\Controller\\ContactController' => 'getAppBundle_Controller_ContactControllerService',
            'AppBundle\\Controller\\DefaultController' => 'getAppBundle_Controller_DefaultControllerService',
            'AppBundle\\Form\\ArticleType' => 'getAppBundle_Form_ArticleTypeService',
            'AppBundle\\Form\\CommentType' => 'getAppBundle_Form_CommentTypeService',
            'AppBundle\\Form\\ContactType' => 'getAppBundle_Form_ContactTypeService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'appbundle.anti_spam' => 'getAppbundle_AntiSpamService',
            'appbundle.application_mailer' => 'getAppbundle_ApplicationMailerService',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService',
            'argument_resolver.request' => 'getArgumentResolver_RequestService',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService',
            'argument_resolver.session' => 'getArgumentResolver_SessionService',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'autowired.AppBundle\\Entity\\Article' => 'getAutowired_AppBundle_Entity_ArticleService',
            'autowired.AppBundle\\Entity\\User' => 'getAutowired_AppBundle_Entity_UserService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'cocur_slugify' => 'getCocurSlugifyService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerruncommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstartcommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstatuscommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstopcommandService',
            'console.error_listener' => 'getConsole_ErrorListenerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'easyadmin.autocomplete' => 'getEasyadmin_AutocompleteService',
            'easyadmin.cache.manager' => 'getEasyadmin_Cache_ManagerService',
            'easyadmin.config.manager' => 'getEasyadmin_Config_ManagerService',
            'easyadmin.form.type' => 'getEasyadmin_Form_TypeService',
            'easyadmin.form.type.autocomplete' => 'getEasyadmin_Form_Type_AutocompleteService',
            'easyadmin.form.type.divider' => 'getEasyadmin_Form_Type_DividerService',
            'easyadmin.form.type.extension' => 'getEasyadmin_Form_Type_ExtensionService',
            'easyadmin.form.type.group' => 'getEasyadmin_Form_Type_GroupService',
            'easyadmin.form.type.section' => 'getEasyadmin_Form_Type_SectionService',
            'easyadmin.listener.controller' => 'getEasyadmin_Listener_ControllerService',
            'easyadmin.listener.request_post_initialize' => 'getEasyadmin_Listener_RequestPostInitializeService',
            'easyadmin.paginator' => 'getEasyadmin_PaginatorService',
            'easyadmin.query_builder' => 'getEasyadmin_QueryBuilderService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.extension' => 'getForm_ExtensionService',
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
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
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
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'ivory_ck_editor.config_manager' => 'getIvoryCkEditor_ConfigManagerService',
            'ivory_ck_editor.form.type' => 'getIvoryCkEditor_Form_TypeService',
            'ivory_ck_editor.plugin_manager' => 'getIvoryCkEditor_PluginManagerService',
            'ivory_ck_editor.renderer' => 'getIvoryCkEditor_RendererService',
            'ivory_ck_editor.renderer.json_builder' => 'getIvoryCkEditor_Renderer_JsonBuilderService',
            'ivory_ck_editor.styles_set_manager' => 'getIvoryCkEditor_StylesSetManagerService',
            'ivory_ck_editor.template_manager' => 'getIvoryCkEditor_TemplateManagerService',
            'ivory_ck_editor.toolbar_manager' => 'getIvoryCkEditor_ToolbarManagerService',
            'ivory_ck_editor.twig_extension' => 'getIvoryCkEditor_TwigExtensionService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService',
            'security.access.role_hierarchy_voter' => 'getSecurity_Access_RoleHierarchyVoterService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.provider.anonymous.main' => 'getSecurity_Authentication_Provider_Anonymous_MainService',
            'security.authentication.provider.dao.main' => 'getSecurity_Authentication_Provider_Dao_MainService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => 'getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService',
            'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db' => 'getSecurity_RequestMatcher_A64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60dbService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_locator.40ab8eb65fa46813665f8d3ddd462e65' => 'getServiceLocator_40ab8eb65fa46813665f8d3ddd462e65Service',
            'service_locator.76de279f0b43d5be7d66f4ddfbf0e7df' => 'getServiceLocator_76de279f0b43d5be7d66f4ddfbf0e7dfService',
            'service_locator.b5ba0537461d59f5f994c8c74bb8ff35' => 'getServiceLocator_B5ba0537461d59f5f994c8c74bb8ff35Service',
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => 'getServiceLocator_E64d23c3bf770e2cf44b71643280668dService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.block.stats' => 'getSonata_Admin_Block_StatsService',
            'sonata.admin.breadcrumbs_builder' => 'getSonata_Admin_BreadcrumbsBuilderService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.builder.orm_datagrid' => 'getSonata_Admin_Builder_OrmDatagridService',
            'sonata.admin.builder.orm_form' => 'getSonata_Admin_Builder_OrmFormService',
            'sonata.admin.builder.orm_list' => 'getSonata_Admin_Builder_OrmListService',
            'sonata.admin.builder.orm_show' => 'getSonata_Admin_Builder_OrmShowService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.doctrine_orm.form.type.choice_field_mask' => 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.form.extension.choice' => 'getSonata_Admin_Form_Extension_ChoiceService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.guesser.orm_datagrid' => 'getSonata_Admin_Guesser_OrmDatagridService',
            'sonata.admin.guesser.orm_datagrid_chain' => 'getSonata_Admin_Guesser_OrmDatagridChainService',
            'sonata.admin.guesser.orm_list' => 'getSonata_Admin_Guesser_OrmListService',
            'sonata.admin.guesser.orm_list_chain' => 'getSonata_Admin_Guesser_OrmListChainService',
            'sonata.admin.guesser.orm_show' => 'getSonata_Admin_Guesser_OrmShowService',
            'sonata.admin.guesser.orm_show_chain' => 'getSonata_Admin_Guesser_OrmShowChainService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService',
            'sonata.admin.menu.matcher.voter.active' => 'getSonata_Admin_Menu_Matcher_Voter_ActiveService',
            'sonata.admin.menu.matcher.voter.admin' => 'getSonata_Admin_Menu_Matcher_Voter_AdminService',
            'sonata.admin.menu.matcher.voter.children' => 'getSonata_Admin_Menu_Matcher_Voter_ChildrenService',
            'sonata.admin.menu_builder' => 'getSonata_Admin_MenuBuilderService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.model_autocomplete' => 'getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService',
            'sonata.admin.sidebar_menu' => 'getSonata_Admin_SidebarMenuService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.global' => 'getSonata_Admin_Twig_GlobalService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService',
            'sonata.block.form.type.container_template' => 'getSonata_Block_Form_Type_ContainerTemplateService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.core.date.moment_format_converter' => 'getSonata_Core_Date_MomentFormatConverterService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService',
            'sonata.core.form.type.color_selector' => 'getSonata_Core_Form_Type_ColorSelectorService',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService',
            'sonata.core.form.type.date_range_picker' => 'getSonata_Core_Form_Type_DateRangePickerService',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService',
            'sonata.core.form.type.datetime_range_picker' => 'getSonata_Core_Form_Type_DatetimeRangePickerService',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService',
            'sonata.core.twig.extension.text' => 'getSonata_Core_Twig_Extension_TextService',
            'sonata.core.twig.extension.wrapping' => 'getSonata_Core_Twig_Extension_WrappingService',
            'sonata.core.twig.status_extension' => 'getSonata_Core_Twig_StatusExtensionService',
            'sonata.core.twig.template_extension' => 'getSonata_Core_Twig_TemplateExtensionService',
            'sonata.core.validator.inline' => 'getSonata_Core_Validator_InlineService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
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
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'vich_uploader.directory_namer_subdir' => 'getVichUploader_DirectoryNamerSubdirService',
            'vich_uploader.download_handler' => 'getVichUploader_DownloadHandlerService',
            'vich_uploader.form.type.file' => 'getVichUploader_Form_Type_FileService',
            'vich_uploader.form.type.image' => 'getVichUploader_Form_Type_ImageService',
            'vich_uploader.metadata_reader' => 'getVichUploader_MetadataReaderService',
            'vich_uploader.namer_hash' => 'getVichUploader_NamerHashService',
            'vich_uploader.namer_origname' => 'getVichUploader_NamerOrignameService',
            'vich_uploader.namer_property' => 'getVichUploader_NamerPropertyService',
            'vich_uploader.namer_uniqid' => 'getVichUploader_NamerUniqidService',
            'vich_uploader.property_mapping_factory' => 'getVichUploader_PropertyMappingFactoryService',
            'vich_uploader.storage' => 'getVichUploader_StorageService',
            'vich_uploader.templating.helper.uploader_helper' => 'getVichUploader_Templating_Helper_UploaderHelperService',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
        );
        $this->privates = array(
            '1_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0' => true,
            '2_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0' => true,
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assetic.asset_factory' => true,
            'autowired.AppBundle\\Entity\\Article' => true,
            'autowired.AppBundle\\Entity\\User' => true,
            'cache.annotations' => true,
            'cache.validator' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.file_link_formatter' => true,
            'debug.security.access.decision_manager' => true,
            'form.server_params' => true,
            'fos_user.user_provider.username' => true,
            'fos_user.util.canonical_fields_updater' => true,
            'fos_user.util.password_updater' => true,
            'resolve_controller_name_subscriber' => true,
            'router.request_context' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.provider.dao.main' => true,
            'security.authentication.session_strategy' => true,
            'security.authentication.trust_resolver' => true,
            'security.logout_url_generator' => true,
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => true,
            'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db' => true,
            'security.role_hierarchy' => true,
            'security.user_checker' => true,
            'security.user_value_resolver' => true,
            'service_locator.40ab8eb65fa46813665f8d3ddd462e65' => true,
            'service_locator.76de279f0b43d5be7d66f4ddfbf0e7df' => true,
            'service_locator.b5ba0537461d59f5f994c8c74bb8ff35' => true,
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => true,
            'session.storage.metadata_bag' => true,
            'sonata.block.manager' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.locator' => true,
            'validator.validator_factory' => true,
            'vich_uploader.metadata_reader' => true,
            'vich_uploader.property_mapping_factory' => true,
        );
        $this->aliases = array(
            'cache.app_clearer' => 'cache.default_clearer',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'slugify' => 'cocur_slugify',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    /**
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'AppBundle\Controller\Admin\ArticleController' shared autowired service.
     *
     * @return \AppBundle\Controller\Admin\ArticleController
     */
    protected function getAppBundle_Controller_Admin_ArticleControllerService()
    {
        return $this->services['AppBundle\Controller\Admin\ArticleController'] = new \AppBundle\Controller\Admin\ArticleController();
    }

    /**
     * Gets the public 'AppBundle\Controller\Admin\UserController' shared autowired service.
     *
     * @return \AppBundle\Controller\Admin\UserController
     */
    protected function getAppBundle_Controller_Admin_UserControllerService()
    {
        return $this->services['AppBundle\Controller\Admin\UserController'] = new \AppBundle\Controller\Admin\UserController();
    }

    /**
     * Gets the public 'AppBundle\Controller\Blog\ArticleController' shared autowired service.
     *
     * @return \AppBundle\Controller\Blog\ArticleController
     */
    protected function getAppBundle_Controller_Blog_ArticleControllerService()
    {
        return $this->services['AppBundle\Controller\Blog\ArticleController'] = new \AppBundle\Controller\Blog\ArticleController();
    }

    /**
     * Gets the public 'AppBundle\Controller\ContactController' shared autowired service.
     *
     * @return \AppBundle\Controller\ContactController
     */
    protected function getAppBundle_Controller_ContactControllerService()
    {
        return $this->services['AppBundle\Controller\ContactController'] = new \AppBundle\Controller\ContactController();
    }

    /**
     * Gets the public 'AppBundle\Controller\DefaultController' shared autowired service.
     *
     * @return \AppBundle\Controller\DefaultController
     */
    protected function getAppBundle_Controller_DefaultControllerService()
    {
        return $this->services['AppBundle\Controller\DefaultController'] = new \AppBundle\Controller\DefaultController();
    }

    /**
     * Gets the public 'AppBundle\Form\ArticleType' shared autowired service.
     *
     * @return \AppBundle\Form\ArticleType
     */
    protected function getAppBundle_Form_ArticleTypeService()
    {
        return $this->services['AppBundle\Form\ArticleType'] = new \AppBundle\Form\ArticleType();
    }

    /**
     * Gets the public 'AppBundle\Form\CommentType' shared autowired service.
     *
     * @return \AppBundle\Form\CommentType
     */
    protected function getAppBundle_Form_CommentTypeService()
    {
        return $this->services['AppBundle\Form\CommentType'] = new \AppBundle\Form\CommentType();
    }

    /**
     * Gets the public 'AppBundle\Form\ContactType' shared autowired service.
     *
     * @return \AppBundle\Form\ContactType
     */
    protected function getAppBundle_Form_ContactTypeService()
    {
        return $this->services['AppBundle\Form\ContactType'] = new \AppBundle\Form\ContactType();
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), true);
    }

    /**
     * Gets the public 'appbundle.anti_spam' shared autowired service.
     *
     * @return \AppBundle\Services\AntiSpam
     */
    protected function getAppbundle_AntiSpamService()
    {
        return $this->services['appbundle.anti_spam'] = new \AppBundle\Services\AntiSpam(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the public 'appbundle.application_mailer' shared autowired service.
     *
     * @return \AppBundle\Services\ApplicationMailer
     */
    protected function getAppbundle_ApplicationMailerService()
    {
        return $this->services['appbundle.application_mailer'] = new \AppBundle\Services\ApplicationMailer(${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->get('swiftmailer.mailer.default')) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'});
    }

    /**
     * Gets the public 'assetic.asset_manager' shared service.
     *
     * @return \Assetic\Factory\LazyAssetManager
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = ${($_ = isset($this->services['templating.loader']) ? $this->services['templating.loader'] : $this->get('templating.loader')) && false ?: '_'};

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.assetic']) ? $this->services['monolog.logger.assetic'] : $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[3].'/app/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[3].'/app/Resources/SecurityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[3].'/app/Resources/TwigBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[3].'/app/Resources/MonologBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[3].'/vendor/symfony/monolog-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[3].'/app/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[3].'/app/Resources/DoctrineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/app/Resources/SensioFrameworkExtraBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', ($this->targetDirs[3].'/app/Resources/AppBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', ($this->targetDirs[3].'/src/AppBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[3].'/app/Resources/AsseticBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[3].'/vendor/symfony/assetic-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataCoreBundle', ($this->targetDirs[3].'/app/Resources/SonataCoreBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataCoreBundle', ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataBlockBundle', ($this->targetDirs[3].'/app/Resources/SonataBlockBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataBlockBundle', ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', ($this->targetDirs[3].'/app/Resources/KnpMenuBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataDoctrineORMAdminBundle', ($this->targetDirs[3].'/app/Resources/SonataDoctrineORMAdminBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataDoctrineORMAdminBundle', ($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataAdminBundle', ($this->targetDirs[3].'/app/Resources/SonataAdminBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataAdminBundle', ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EasyAdminBundle', ($this->targetDirs[3].'/app/Resources/EasyAdminBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EasyAdminBundle', ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IvoryCKEditorBundle', ($this->targetDirs[3].'/app/Resources/IvoryCKEditorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IvoryCKEditorBundle', ($this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', ($this->targetDirs[3].'/app/Resources/FOSUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CocurSlugifyBundle', ($this->targetDirs[3].'/app/Resources/CocurSlugifyBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CocurSlugifyBundle', ($this->targetDirs[3].'/vendor/cocur/slugify/src/Bridge/Symfony/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VichUploaderBundle', ($this->targetDirs[3].'/app/Resources/VichUploaderBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VichUploaderBundle', ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DebugBundle', ($this->targetDirs[3].'/app/Resources/DebugBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DebugBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', ($this->targetDirs[3].'/app/Resources/WebProfilerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioDistributionBundle', ($this->targetDirs[3].'/app/Resources/SensioDistributionBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioDistributionBundle', ($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', ($this->targetDirs[3].'/app/Resources/SensioGeneratorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', ($this->targetDirs[3].'/vendor/sensio/generator-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebServerBundle', ($this->targetDirs[3].'/app/Resources/WebServerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebServerBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebServerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineFixturesBundle', ($this->targetDirs[3].'/app/Resources/DoctrineFixturesBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineFixturesBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[3].'/app/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the public 'assetic.controller' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Controller\AsseticController
     */
    protected function getAssetic_ControllerService()
    {
        return $this->services['assetic.controller'] = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController(${($_ = isset($this->services['assetic.asset_manager']) ? $this->services['assetic.asset_manager'] : $this->get('assetic.asset_manager')) && false ?: '_'}, new \Assetic\Cache\FilesystemCache((__DIR__.'/assetic/assets')), false, NULL);
    }

    /**
     * Gets the public 'assetic.filter.cssrewrite' shared service.
     *
     * @return \Assetic\Filter\CssRewriteFilter
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the public 'assetic.filter_manager' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /**
     * Gets the public 'assetic.request_listener' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\EventListener\RequestListener
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the public 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->get('assets.context')) && false ?: '_'}), array());
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('zbtiheCSN9', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }

        return $instance;
    }

    /**
     * Gets the public 'cache.default_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_DefaultClearerService()
    {
        return $this->services['cache.default_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('3oBqVUykVF', 0, 'aVuXo-pYTJ8-fvl80Bg7l+', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => ${($_ = isset($this->services['cache.default_clearer']) ? $this->services['cache.default_clearer'] : $this->get('cache.default_clearer')) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        $a = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};
        $b = ${($_ = isset($this->services['templating.filename_parser']) ? $this->services['templating.filename_parser'] : $this->get('templating.filename_parser')) && false ?: '_'};

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'/app/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}, (__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'}), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}), 5 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 6 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function () {
            $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
        })), $c, array()), 7 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'/app'), array())), 8 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}), 9 => ${($_ = isset($this->services['sonata.admin.route.cache_warmup']) ? $this->services['sonata.admin.route.cache_warmup'] : $this->get('sonata.admin.route.cache_warmup')) && false ?: '_'}, 10 => new \JavierEguiluz\Bundle\EasyAdminBundle\Cache\ConfigWarmer(${($_ = isset($this->services['easyadmin.config.manager']) ? $this->services['easyadmin.config.manager'] : $this->get('easyadmin.config.manager')) && false ?: '_'})));
    }

    /**
     * Gets the public 'cocur_slugify' shared service.
     *
     * @return \Cocur\Slugify\Slugify
     */
    protected function getCocurSlugifyService()
    {
        return $this->services['cocur_slugify'] = new \Cocur\Slugify\Slugify(array('lowercase' => true, 'separator' => '-', 'rulesets' => array()));
    }

    /**
     * Gets the public 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['1_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0']) ? $this->services['1_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0'] : $this->get14615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0Service()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['2_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0']) ? $this->services['2_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0'] : $this->get24615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0Service()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the public 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService()
    {
        return $this->services['console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand'] = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, array(0 => 'FOS\\UserBundle\\Model\\UserInterface'));
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverruncommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerruncommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverruncommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand(($this->targetDirs[3].'/public'), 'dev');
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstartcommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstartcommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand(($this->targetDirs[3].'/public'), 'dev');
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstatuscommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstatuscommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand();
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstopcommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstopcommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand();
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', NULL, NULL);
    }

    /**
     * Gets the public 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->getArgumentResolver_RequestAttributeService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->getArgumentResolver_RequestService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->getArgumentResolver_SessionService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->getSecurity_UserValueResolverService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->getArgumentResolver_ServiceService()) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->getArgumentResolver_DefaultService()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->getArgumentResolver_VariadicService()) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, ${($_ = isset($this->services['var_dumper.cli_dumper']) ? $this->services['var_dumper.cli_dumper'] : $this->get('var_dumper.cli_dumper')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['assetic.request_listener']) ? $this->services['assetic.request_listener'] : $this->get('assetic.request_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sonata.block.cache.handler.default']) ? $this->services['sonata.block.cache.handler.default'] : $this->get('sonata.block.cache.handler.default')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['knp_menu.listener.voters']) ? $this->services['knp_menu.listener.voters'] : $this->get('knp_menu.listener.voters')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['easyadmin.listener.controller']) ? $this->services['easyadmin.listener.controller'] : $this->get('easyadmin.listener.controller')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('easy_admin.post_initialize', array(0 => function () {
            return ${($_ = isset($this->services['easyadmin.listener.request_post_initialize']) ? $this->services['easyadmin.listener.request_post_initialize'] : $this->get('easyadmin.listener.request_post_initialize')) && false ?: '_'};
        }, 1 => 'initializeRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->get('response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->get('streamed_response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->get('validate_request_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->get('session_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->get('session.save_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->get('fragment.listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->get('translator_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->get('translator_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->get('security.rememberme.response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->get('twig.exception_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->get('sensio_framework_extra.controller.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->get('sensio_framework_extra.converter.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->get('sensio_framework_extra.security.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('fos_user.security.implicit_login', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.security.interactive_login_listener']) ? $this->services['fos_user.security.interactive_login_listener'] : $this->get('fos_user.security.interactive_login_listener')) && false ?: '_'};
        }, 1 => 'onImplicitLogin'), 0);
        $instance->addListener('security.interactive_login', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.security.interactive_login_listener']) ? $this->services['fos_user.security.interactive_login_listener'] : $this->get('fos_user.security.interactive_login_listener')) && false ?: '_'};
        }, 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListener('fos_user.registration.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->get('fos_user.listener.authentication')) && false ?: '_'};
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.registration.confirmed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->get('fos_user.listener.authentication')) && false ?: '_'};
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.resetting.reset.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->get('fos_user.listener.authentication')) && false ?: '_'};
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.change_password.edit.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->get('fos_user.listener.flash')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.create.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->get('fos_user.listener.flash')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.delete.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->get('fos_user.listener.flash')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.edit.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->get('fos_user.listener.flash')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.profile.edit.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->get('fos_user.listener.flash')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.registration.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->get('fos_user.listener.flash')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.resetting.reset.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->get('fos_user.listener.flash')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.resetting.reset.initialize', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->get('fos_user.listener.resetting')) && false ?: '_'};
        }, 1 => 'onResettingResetInitialize'), 0);
        $instance->addListener('fos_user.resetting.reset.success', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->get('fos_user.listener.resetting')) && false ?: '_'};
        }, 1 => 'onResettingResetSuccess'), 0);
        $instance->addListener('fos_user.resetting.reset.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->get('fos_user.listener.resetting')) && false ?: '_'};
        }, 1 => 'onResettingResetRequest'), 0);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->get('debug.dump_listener')) && false ?: '_'};
        }, 1 => 'configure'), 1024);

        return $instance;
    }

    /**
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the public 'deprecated.form.registry' shared service.
     *
     * @return \stdClass
     *
     * @deprecated The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_RegistryService()
    {
        @trigger_error('The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->get('form.type_guesser.validator')) && false ?: '_'}, 1 => ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->get('form.type.choice')) && false ?: '_'}, 2 => ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->get('form.type.form')) && false ?: '_'}, 3 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->get('form.type_extension.form.http_foundation')) && false ?: '_'}, 4 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->get('form.type_extension.form.validator')) && false ?: '_'}, 5 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->get('form.type_extension.repeated.validator')) && false ?: '_'}, 6 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->get('form.type_extension.submit.validator')) && false ?: '_'}, 7 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->get('form.type_extension.upload.validator')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'deprecated.form.registry.csrf' shared service.
     *
     * @return \stdClass
     *
     * @deprecated The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_Registry_CsrfService()
    {
        @trigger_error('The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry.csrf'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->get('form.type_extension.csrf')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = ${($_ = isset($this->services['vich_uploader.metadata_reader']) ? $this->services['vich_uploader.metadata_reader'] : $this->getVichUploader_MetadataReaderService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['vich_uploader.upload_handler']) ? $this->services['vich_uploader.upload_handler'] : $this->get('vich_uploader.upload_handler')) && false ?: '_'};

        $c = new \Doctrine\DBAL\Logging\LoggerChain();
        $c->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $c->addLogger(new \Doctrine\DBAL\Logging\DebugStack());

        $d = new \Doctrine\DBAL\Configuration();
        $d->setSQLLogger($c);

        $e = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();

        $f = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('article_thumbnail', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('article_thumbnail', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('article_thumbnail', $e, $a, $b));
        $f->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->getFosUser_Util_PasswordUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}));
        $f->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : $this->get('doctrine.orm.default_listeners.attach_entity_listeners')) && false ?: '_'});

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->get('doctrine.dbal.connection_factory')) && false ?: '_'}->createConnection(array('driver' => 'pdo_sqlite', 'path' => ($this->targetDirs[2].'/data/data.sqlite'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => array(), 'defaultTableOptions' => array()), $d, $f, array());
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}, array(0 => ($this->targetDirs[3].'/src/AppBundle/Entity'))), 'AppBundle\\Entity');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $b = new \Doctrine\ORM\Configuration();
        $b->setEntityNamespaces(array('AppBundle' => 'AppBundle\\Entity'));
        $b->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache')) && false ?: '_'});
        $b->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_query_cache')) && false ?: '_'});
        $b->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_result_cache')) && false ?: '_'});
        $b->setMetadataDriverImpl($a);
        $b->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $b->setProxyNamespace('Proxies');
        $b->setAutoGenerateProxyClasses(true);
        $b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $b->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $b->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $b->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->get('doctrine.orm.default_entity_listener_resolver')) && false ?: '_'});
        $b->addCustomDatetimeFunction('year', 'DoctrineExtensions\\Query\\Mysql\\Year');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->get('doctrine.dbal.default_connection')) && false ?: '_'}, $b);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->get('doctrine.orm.default_manager_configurator')) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the public 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the public 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the public 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_5bec519a9d7797163d235d4aba19a92f8c2f80fbe6111365e26af6fa05606dca');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_5bec519a9d7797163d235d4aba19a92f8c2f80fbe6111365e26af6fa05606dca');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_5bec519a9d7797163d235d4aba19a92f8c2f80fbe6111365e26af6fa05606dca');

        return $instance;
    }

    /**
     * Gets the public 'easyadmin.autocomplete' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Search\Autocomplete
     */
    protected function getEasyadmin_AutocompleteService()
    {
        return $this->services['easyadmin.autocomplete'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Search\Autocomplete(${($_ = isset($this->services['easyadmin.config.manager']) ? $this->services['easyadmin.config.manager'] : $this->get('easyadmin.config.manager')) && false ?: '_'}, new \JavierEguiluz\Bundle\EasyAdminBundle\Search\Finder(${($_ = isset($this->services['easyadmin.query_builder']) ? $this->services['easyadmin.query_builder'] : $this->get('easyadmin.query_builder')) && false ?: '_'}, ${($_ = isset($this->services['easyadmin.paginator']) ? $this->services['easyadmin.paginator'] : $this->get('easyadmin.paginator')) && false ?: '_'}), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /**
     * Gets the public 'easyadmin.cache.manager' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Cache\CacheManager
     */
    protected function getEasyadmin_Cache_ManagerService()
    {
        return $this->services['easyadmin.cache.manager'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Cache\CacheManager((__DIR__.'/easy_admin'));
    }

    /**
     * Gets the public 'easyadmin.config.manager' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Configuration\ConfigManager
     */
    protected function getEasyadmin_Config_ManagerService()
    {
        return $this->services['easyadmin.config.manager'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Configuration\ConfigManager($this);
    }

    /**
     * Gets the public 'easyadmin.form.type' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminFormType
     */
    protected function getEasyadmin_Form_TypeService()
    {
        $a = ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->get('form.type_guesser.validator')) && false ?: '_'};
        $b = ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->get('form.type_guesser.doctrine')) && false ?: '_'};

        $c = new \Symfony\Component\Form\FormTypeGuesserChain(array(0 => $a, 1 => $b));

        return $this->services['easyadmin.form.type'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminFormType(${($_ = isset($this->services['easyadmin.config.manager']) ? $this->services['easyadmin.config.manager'] : $this->get('easyadmin.config.manager')) && false ?: '_'}, array(4 => new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\Configurator\AutocompleteTypeConfigurator(), 3 => new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\Configurator\CollectionTypeConfigurator(), 2 => new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\Configurator\CheckboxTypeConfigurator(), 1 => new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\Configurator\RequiredOptionConfigurator($c), 0 => new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\Configurator\EntityTypeConfigurator($c)));
    }

    /**
     * Gets the public 'easyadmin.form.type.autocomplete' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminAutocompleteType
     */
    protected function getEasyadmin_Form_Type_AutocompleteService()
    {
        return $this->services['easyadmin.form.type.autocomplete'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminAutocompleteType(${($_ = isset($this->services['easyadmin.config.manager']) ? $this->services['easyadmin.config.manager'] : $this->get('easyadmin.config.manager')) && false ?: '_'});
    }

    /**
     * Gets the public 'easyadmin.form.type.divider' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminDividerType
     */
    protected function getEasyadmin_Form_Type_DividerService()
    {
        return $this->services['easyadmin.form.type.divider'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminDividerType();
    }

    /**
     * Gets the public 'easyadmin.form.type.extension' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Form\Extension\EasyAdminExtension
     */
    protected function getEasyadmin_Form_Type_ExtensionService()
    {
        return $this->services['easyadmin.form.type.extension'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Extension\EasyAdminExtension(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'easyadmin.form.type.group' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminGroupType
     */
    protected function getEasyadmin_Form_Type_GroupService()
    {
        return $this->services['easyadmin.form.type.group'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminGroupType();
    }

    /**
     * Gets the public 'easyadmin.form.type.section' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminSectionType
     */
    protected function getEasyadmin_Form_Type_SectionService()
    {
        return $this->services['easyadmin.form.type.section'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminSectionType();
    }

    /**
     * Gets the public 'easyadmin.listener.controller' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\EventListener\ControllerListener
     */
    protected function getEasyadmin_Listener_ControllerService()
    {
        return $this->services['easyadmin.listener.controller'] = new \JavierEguiluz\Bundle\EasyAdminBundle\EventListener\ControllerListener(${($_ = isset($this->services['easyadmin.config.manager']) ? $this->services['easyadmin.config.manager'] : $this->get('easyadmin.config.manager')) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->get('debug.controller_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'easyadmin.listener.request_post_initialize' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\EventListener\RequestPostInitializeListener
     */
    protected function getEasyadmin_Listener_RequestPostInitializeService()
    {
        return $this->services['easyadmin.listener.request_post_initialize'] = new \JavierEguiluz\Bundle\EasyAdminBundle\EventListener\RequestPostInitializeListener(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'easyadmin.paginator' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Search\Paginator
     */
    protected function getEasyadmin_PaginatorService()
    {
        return $this->services['easyadmin.paginator'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Search\Paginator();
    }

    /**
     * Gets the public 'easyadmin.query_builder' shared service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Search\QueryBuilder
     */
    protected function getEasyadmin_QueryBuilderService()
    {
        return $this->services['easyadmin.query_builder'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Search\QueryBuilder(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')));
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.extension' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension
     */
    protected function getForm_ExtensionService()
    {
        return $this->services['form.extension'] = new \Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension($this, array('AppBundle\\Form\\ArticleType' => 'AppBundle\\Form\\ArticleType', 'AppBundle\\Form\\CommentType' => 'AppBundle\\Form\\CommentType', 'AppBundle\\Form\\ContactType' => 'AppBundle\\Form\\ContactType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType' => 'sonata.core.form.type.array', 'Sonata\\CoreBundle\\Form\\Type\\BooleanType' => 'sonata.core.form.type.boolean', 'Sonata\\CoreBundle\\Form\\Type\\CollectionType' => 'sonata.core.form.type.collection', 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType' => 'sonata.core.form.type.translatable_choice', 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType' => 'sonata.core.form.type.date_range', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType' => 'sonata.core.form.type.datetime_range', 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType' => 'sonata.core.form.type.date_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType' => 'sonata.core.form.type.datetime_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType' => 'sonata.core.form.type.date_range_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType' => 'sonata.core.form.type.datetime_range_picker', 'Sonata\\CoreBundle\\Form\\Type\\EqualType' => 'sonata.core.form.type.equal', 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType' => 'sonata.core.form.type.color_selector', 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => 'sonata.block.form.type.block', 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => 'sonata.block.form.type.container_template', 'Sonata\\AdminBundle\\Form\\Type\\AdminType' => 'sonata.admin.form.type.admin', 'Sonata\\AdminBundle\\Form\\Type\\ModelType' => 'sonata.admin.form.type.model_choice', 'Sonata\\AdminBundle\\Form\\Type\\ModelListType' => 'sonata.admin.form.type.model_list', 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => 'sonata.admin.form.type.model_reference', 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => 'sonata.admin.form.type.model_hidden', 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => 'sonata.admin.form.type.model_autocomplete', 'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => 'sonata.admin.form.type.collection', 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => 'sonata.admin.doctrine_orm.form.type.choice_field_mask', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => 'sonata.admin.form.filter.type.number', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => 'sonata.admin.form.filter.type.choice', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => 'sonata.admin.form.filter.type.default', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => 'sonata.admin.form.filter.type.date', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => 'sonata.admin.form.filter.type.daterange', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => 'sonata.admin.form.filter.type.datetime', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => 'sonata.admin.form.filter.type.datetime_range', 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFormType' => 'easyadmin.form.type', 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminAutocompleteType' => 'easyadmin.form.type.autocomplete', 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminDividerType' => 'easyadmin.form.type.divider', 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminSectionType' => 'easyadmin.form.type.section', 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminGroupType' => 'easyadmin.form.type.group', 'Ivory\\CKEditorBundle\\Form\\Type\\CKEditorType' => 'ivory_ck_editor.form.type', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => 'vich_uploader.form.type.file', 'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => 'vich_uploader.form.type.image'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf', 4 => 'sonata.admin.form.extension.field', 5 => 'sonata.admin.form.extension.field.mopa', 6 => 'easyadmin.form.type.extension'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => array(0 => 'sonata.admin.form.extension.choice')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'), array('form' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'birthday' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType', 'checkbox' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType', 'choice' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 'collection' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType', 'country' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType', 'date' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType', 'datetime' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType', 'email' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType', 'file' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 'hidden' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType', 'integer' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType', 'language' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType', 'locale' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType', 'money' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType', 'number' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType', 'password' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType', 'percent' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType', 'radio' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType', 'repeated' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType', 'search' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType', 'textarea' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType', 'text' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', 'time' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType', 'timezone' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType', 'url' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType', 'button' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType', 'submit' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType', 'reset' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType', 'currency' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType', 'entity' => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 'sonata_type_immutable_array' => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 'sonata_type_boolean' => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 'sonata_type_collection' => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 'sonata_type_translatable_choice' => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 'sonata_type_date_range' => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 'sonata_type_datetime_range' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 'sonata_type_date_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 'sonata_type_datetime_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 'sonata_type_date_range_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 'sonata_type_datetime_range_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 'sonata_type_equal' => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 'sonata_type_color_selector' => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 'sonata_block_service_choice' => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 'sonata_type_container_template_choice' => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 'sonata_type_admin' => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 'sonata_type_model' => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 'sonata_type_model_list' => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 'sonata_type_model_reference' => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 'sonata_type_model_hidden' => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 'sonata_type_model_autocomplete' => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 'sonata_type_native_collection' => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 'sonata_type_choice_field_mask' => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 'sonata_type_filter_number' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 'sonata_type_filter_choice' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 'sonata_type_filter_default' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 'sonata_type_filter_date' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 'sonata_type_filter_date_range' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 'sonata_type_filter_datetime' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 'sonata_type_filter_datetime_range' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType', 'tab' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Type\\TabType'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector', 4 => 'sonata.admin.form.extension.field', 5 => 'mopa_bootstrap.form.type_extension.help', 6 => 'mopa_bootstrap.form.type_extension.legend', 7 => 'mopa_bootstrap.form.type_extension.error', 8 => 'mopa_bootstrap.form.type_extension.widget', 9 => 'mopa_bootstrap.form.type_extension.horizontal', 10 => 'mopa_bootstrap.form.type_extension.widget_collection', 11 => 'mopa_bootstrap.form.type_extension.tabbed'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator'), 'choice' => array(0 => 'sonata.admin.form.extension.choice'), 'button' => array(0 => 'mopa_bootstrap.form.type_extension.button'), 'date' => array(0 => 'mopa_bootstrap.form.type_extension.date')), array());
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->get('form.registry')) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => ${($_ = isset($this->services['form.extension']) ? $this->services['form.extension'] : $this->get('form.extension')) && false ?: '_'}), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /**
     * Gets the public 'form.type.birthday' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the public 'form.type.button' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the public 'form.type.checkbox' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the public 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'})));
    }

    /**
     * Gets the public 'form.type.collection' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the public 'form.type.country' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the public 'form.type.currency' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the public 'form.type.date' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the public 'form.type.datetime' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the public 'form.type.email' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the public 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the public 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type.hidden' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the public 'form.type.integer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the public 'form.type.language' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the public 'form.type.locale' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the public 'form.type.money' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the public 'form.type.number' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the public 'form.type.password' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the public 'form.type.percent' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the public 'form.type.radio' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the public 'form.type.range' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the public 'form.type.repeated' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the public 'form.type.reset' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the public 'form.type.search' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the public 'form.type.submit' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the public 'form.type.text' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the public 'form.type.textarea' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the public 'form.type.time' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the public 'form.type.timezone' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the public 'form.type.url' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the public 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager')) && false ?: '_'}, true, '_token', ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the public 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the public 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, 'validators');
    }

    /**
     * Gets the public 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_user.change_password.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'}, 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /**
     * Gets the public 'fos_user.change_password.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.listener.authentication' shared service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener(${($_ = isset($this->services['fos_user.security.login_manager']) ? $this->services['fos_user.security.login_manager'] : $this->get('fos_user.security.login_manager')) && false ?: '_'}, 'main');
    }

    /**
     * Gets the public 'fos_user.listener.flash' shared service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_user.listener.resetting' shared service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, 86400);
    }

    /**
     * Gets the public 'fos_user.mailer' shared service.
     *
     * @return \FOS\UserBundle\Mailer\Mailer
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer(${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->get('swiftmailer.mailer.default')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'}, array('confirmation.template' => '@FOSUser/Registration/email.txt.twig', 'resetting.template' => '@FOSUser/Resetting/email.txt.twig', 'from_email' => array('confirmation' => array('apikey' => 'apikey'), 'resetting' => array('apikey' => 'apikey'))));
    }

    /**
     * Gets the public 'fos_user.profile.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'}, 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', array(0 => 'Profile', 1 => 'Default'));
    }

    /**
     * Gets the public 'fos_user.profile.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.registration.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'}, 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', array(0 => 'Registration', 1 => 'Default'));
    }

    /**
     * Gets the public 'fos_user.registration.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.resetting.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'}, 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', array(0 => 'ResetPassword', 1 => 'Default'));
    }

    /**
     * Gets the public 'fos_user.resetting.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.security.interactive_login_listener' shared service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener(${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->get('fos_user.user_manager')) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_user.security.login_manager' shared service.
     *
     * @return \FOS\UserBundle\Security\LoginManager
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.session_strategy']) ? $this->services['security.authentication.session_strategy'] : $this->getSecurity_Authentication_SessionStrategyService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'fos_user.user_manager' shared service.
     *
     * @return \FOS\UserBundle\Doctrine\UserManager
     */
    protected function getFosUser_UserManagerService()
    {
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->getFosUser_Util_PasswordUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}->getManager(NULL), 'AppBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.username_form_type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer(${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->get('fos_user.user_manager')) && false ?: '_'}));
    }

    /**
     * Gets the public 'fos_user.util.email_canonicalizer' shared service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the public 'fos_user.util.token_generator' shared service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator();
    }

    /**
     * Gets the public 'fos_user.util.user_manipulator' shared service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator(${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->get('fos_user.user_manager')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        return $this->services['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(${($_ = isset($this->services['service_locator.e64d23c3bf770e2cf44b71643280668d']) ? $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] : $this->getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the public 'fragment.renderer.esi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.ssi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->get('debug.controller_resolver')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory_ck_editor.config_manager' shared service.
     *
     * @return \Ivory\CKEditorBundle\Model\ConfigManager
     */
    protected function getIvoryCkEditor_ConfigManagerService()
    {
        $this->services['ivory_ck_editor.config_manager'] = $instance = new \Ivory\CKEditorBundle\Model\ConfigManager();

        $instance->setConfigs(array('default_config' => array('toolbar' => 'standard', 'uiColor' => '#FCFCFC', 'contentsCss' => array(0 => 'bundles/app/css/style.css'))));
        $instance->setDefaultConfig('default_config');

        return $instance;
    }

    /**
     * Gets the public 'ivory_ck_editor.form.type' shared service.
     *
     * @return \Ivory\CKEditorBundle\Form\Type\CKEditorType
     */
    protected function getIvoryCkEditor_Form_TypeService()
    {
        return $this->services['ivory_ck_editor.form.type'] = new \Ivory\CKEditorBundle\Form\Type\CKEditorType(${($_ = isset($this->services['ivory_ck_editor.config_manager']) ? $this->services['ivory_ck_editor.config_manager'] : $this->get('ivory_ck_editor.config_manager')) && false ?: '_'}, ${($_ = isset($this->services['ivory_ck_editor.plugin_manager']) ? $this->services['ivory_ck_editor.plugin_manager'] : $this->get('ivory_ck_editor.plugin_manager')) && false ?: '_'}, ${($_ = isset($this->services['ivory_ck_editor.styles_set_manager']) ? $this->services['ivory_ck_editor.styles_set_manager'] : $this->get('ivory_ck_editor.styles_set_manager')) && false ?: '_'}, ${($_ = isset($this->services['ivory_ck_editor.template_manager']) ? $this->services['ivory_ck_editor.template_manager'] : $this->get('ivory_ck_editor.template_manager')) && false ?: '_'}, ${($_ = isset($this->services['ivory_ck_editor.toolbar_manager']) ? $this->services['ivory_ck_editor.toolbar_manager'] : $this->get('ivory_ck_editor.toolbar_manager')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory_ck_editor.plugin_manager' shared service.
     *
     * @return \Ivory\CKEditorBundle\Model\PluginManager
     */
    protected function getIvoryCkEditor_PluginManagerService()
    {
        return $this->services['ivory_ck_editor.plugin_manager'] = new \Ivory\CKEditorBundle\Model\PluginManager();
    }

    /**
     * Gets the public 'ivory_ck_editor.renderer' shared service.
     *
     * @return \Ivory\CKEditorBundle\Renderer\CKEditorRenderer
     */
    protected function getIvoryCkEditor_RendererService()
    {
        return $this->services['ivory_ck_editor.renderer'] = new \Ivory\CKEditorBundle\Renderer\CKEditorRenderer($this);
    }

    /**
     * Gets the public 'ivory_ck_editor.renderer.json_builder' shared service.
     *
     * @return \Ivory\JsonBuilder\JsonBuilder
     */
    protected function getIvoryCkEditor_Renderer_JsonBuilderService()
    {
        return $this->services['ivory_ck_editor.renderer.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory_ck_editor.styles_set_manager' shared service.
     *
     * @return \Ivory\CKEditorBundle\Model\StylesSetManager
     */
    protected function getIvoryCkEditor_StylesSetManagerService()
    {
        return $this->services['ivory_ck_editor.styles_set_manager'] = new \Ivory\CKEditorBundle\Model\StylesSetManager();
    }

    /**
     * Gets the public 'ivory_ck_editor.template_manager' shared service.
     *
     * @return \Ivory\CKEditorBundle\Model\TemplateManager
     */
    protected function getIvoryCkEditor_TemplateManagerService()
    {
        return $this->services['ivory_ck_editor.template_manager'] = new \Ivory\CKEditorBundle\Model\TemplateManager();
    }

    /**
     * Gets the public 'ivory_ck_editor.toolbar_manager' shared service.
     *
     * @return \Ivory\CKEditorBundle\Model\ToolbarManager
     */
    protected function getIvoryCkEditor_ToolbarManagerService()
    {
        return $this->services['ivory_ck_editor.toolbar_manager'] = new \Ivory\CKEditorBundle\Model\ToolbarManager();
    }

    /**
     * Gets the public 'ivory_ck_editor.twig_extension' shared service.
     *
     * @return \Ivory\CKEditorBundle\Twig\CKEditorExtension
     */
    protected function getIvoryCkEditor_TwigExtensionService()
    {
        return $this->services['ivory_ck_editor.twig_extension'] = new \Ivory\CKEditorBundle\Twig\CKEditorExtension(${($_ = isset($this->services['ivory_ck_editor.renderer']) ? $this->services['ivory_ck_editor.renderer'] : $this->get('ivory_ck_editor.renderer')) && false ?: '_'});
    }

    /**
     * Gets the public 'kernel.class_cache.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer
     *
     * @deprecated The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        @trigger_error('The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel'));
    }

    /**
     * Gets the public 'knp_menu.factory' shared service.
     *
     * @return \Knp\Menu\MenuFactory
     */
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}), 0);

        return $instance;
    }

    /**
     * Gets the public 'knp_menu.listener.voters' shared service.
     *
     * @return \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener
     */
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();

        $instance->addVoter(${($_ = isset($this->services['knp_menu.voter.router']) ? $this->services['knp_menu.voter.router'] : $this->get('knp_menu.voter.router')) && false ?: '_'});
        $instance->addVoter(${($_ = isset($this->services['sonata.admin.menu.matcher.voter.admin']) ? $this->services['sonata.admin.menu.matcher.voter.admin'] : $this->get('sonata.admin.menu.matcher.voter.admin')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();

        $instance->addVoter(${($_ = isset($this->services['knp_menu.voter.router']) ? $this->services['knp_menu.voter.router'] : $this->get('knp_menu.voter.router')) && false ?: '_'});
        $instance->addVoter(${($_ = isset($this->services['sonata.admin.menu.matcher.voter.admin']) ? $this->services['sonata.admin.menu.matcher.voter.admin'] : $this->get('sonata.admin.menu.matcher.voter.admin')) && false ?: '_'});
        $instance->addVoter(${($_ = isset($this->services['sonata.admin.menu.matcher.voter.children']) ? $this->services['sonata.admin.menu.matcher.voter.children'] : $this->get('sonata.admin.menu.matcher.voter.children')) && false ?: '_'});
        $instance->addVoter(${($_ = isset($this->services['sonata.admin.menu.matcher.voter.active']) ? $this->services['sonata.admin.menu.matcher.voter.active'] : $this->get('sonata.admin.menu.matcher.voter.active')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'knp_menu.menu_provider' shared service.
     *
     * @return \Knp\Menu\Provider\ChainProvider
     */
    protected function getKnpMenu_MenuProviderService()
    {
        $a = ${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->get('knp_menu.factory')) && false ?: '_'};

        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array('sonata_admin_sidebar' => 'sonata.admin.sidebar_menu')), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderServiceProvider($this, array()), 2 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, $this, $a), 3 => new \Sonata\AdminBundle\Menu\Provider\GroupMenuProvider($a, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker')) && false ?: '_'})));
    }

    /**
     * Gets the public 'knp_menu.renderer.list' shared service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->get('knp_menu.matcher')) && false ?: '_'}, array(), 'UTF-8');
    }

    /**
     * Gets the public 'knp_menu.renderer.twig' shared service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, 'KnpMenuBundle::menu.html.twig', ${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->get('knp_menu.matcher')) && false ?: '_'}, array());
    }

    /**
     * Gets the public 'knp_menu.renderer_provider' shared service.
     *
     * @return \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the public 'knp_menu.voter.router' shared service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter();
    }

    /**
     * Gets the public 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.activation_strategy.not_found' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /**
     * Gets the public 'monolog.handler.fingers_crossed.error_level_activation_strategy' shared service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /**
     * Gets the public 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the public 'monolog.logger.assetic' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ConsoleService()
    {
        $this->services['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.templating' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->get('monolog.handler.null_internal')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, (__DIR__.'/assetic/routing.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => NULL, 'resource_type' => 'yaml'), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.router']) ? $this->services['monolog.logger.router'] : $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'};
        $b = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'};

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Config\Loader\GlobFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader(${($_ = isset($this->services['assetic.asset_manager']) ? $this->services['assetic.asset_manager'] : $this->get('assetic.asset_manager')) && false ?: '_'}, array()));
        $d->addLoader(${($_ = isset($this->services['sonata.admin.route_loader']) ? $this->services['sonata.admin.route_loader'] : $this->get('sonata.admin.route_loader')) && false ?: '_'});

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $d);
    }

    /**
     * Gets the public 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session')) && false ?: '_'}));
    }

    /**
     * Gets the public 'security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }

    /**
     * Gets the public 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->get('security.firewall.map.context.dev')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->get('security.firewall.map.context.main')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d']) ? $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] : $this->getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()) && false ?: '_'};
            yield 'security.firewall.map.context.main' => ${($_ = isset($this->services['security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db']) ? $this->services['security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db'] : $this->getSecurity_RequestMatcher_A64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60dbService()) && false ?: '_'};
        }, 2)), ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d', false, '', '', '', '', '', '', array()));
    }

    /**
     * Gets the public 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $c = ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $d = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $e = ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $f = ${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'};
        $g = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};

        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/login$');

        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/register');

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/resetting');

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/');

        $l = new \Symfony\Component\Security\Http\AccessMap();
        $l->add($h, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $l->add($i, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $l->add($j, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $l->add($k, array(0 => 'ROLE_ADMIN'), NULL);

        $m = new \Symfony\Component\Security\Http\HttpUtils($e, $e);

        $n = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $m, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($m, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/user/logout'));
        $n->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $o = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($m, array());
        $o->setOptions(array('login_path' => 'fos_user_security_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $o->setProviderKey('main');

        $p = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $m, array(), $a);
        $p->setOptions(array('login_path' => 'fos_user_security_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($l, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => ${($_ = isset($this->services['fos_user.user_provider.username']) ? $this->services['fos_user.user_provider.username'] : $this->getFosUser_UserProvider_UsernameService()) && false ?: '_'}), 'main', $a, $c, $d), 2 => $n, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $g, ${($_ = isset($this->services['security.authentication.session_strategy']) ? $this->services['security.authentication.session_strategy'] : $this->getSecurity_Authentication_SessionStrategyService()) && false ?: '_'}, $m, 'main', $o, $p, array('check_path' => 'fos_user_security_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $c, NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '59ad006d3b5be3.92558083', $a, $g), 5 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, $l, $g)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $d, $m, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $m, 'fos_user_security_login', false), NULL, NULL, $a, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', 'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db', true, false, 'fos_user.user_provider.username', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, array(0 => 'logout', 1 => 'form_login', 2 => 'anonymous')));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_distribution.security_checker' shared service.
     *
     * @return \SensioLabs\Security\SecurityChecker
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the public 'sensio_distribution.security_checker.command' shared service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand(${($_ = isset($this->services['sensio_distribution.security_checker']) ? $this->services['sensio_distribution.security_checker'] : $this->get('sensio_distribution.security_checker')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the public 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->get('sensio_framework_extra.converter.manager')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->get('sensio_framework_extra.converter.doctrine.orm')) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : $this->get('sensio_framework_extra.converter.datetime')) && false ?: '_'}, 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the public 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->get('session.storage.native')) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'session.handler' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[2].'/sessions/dev'));
    }

    /**
     * Gets the public 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the public 'session.storage.filesystem' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), ${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session.storage.php_bridge' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        })));
    }

    /**
     * Gets the public 'sonata.admin.audit.manager' shared service.
     *
     * @return \Sonata\AdminBundle\Model\AuditManager
     */
    protected function getSonata_Admin_Audit_ManagerService()
    {
        return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
    }

    /**
     * Gets the public 'sonata.admin.block.admin_list' shared service.
     *
     * @return \Sonata\AdminBundle\Block\AdminListBlockService
     */
    protected function getSonata_Admin_Block_AdminListService()
    {
        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService('sonata.admin.block.admin_list', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.block.search_result' shared service.
     *
     * @return \Sonata\AdminBundle\Block\AdminSearchBlockService
     */
    protected function getSonata_Admin_Block_SearchResultService()
    {
        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService('sonata.admin.block.search_result', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.search.handler']) ? $this->services['sonata.admin.search.handler'] : $this->get('sonata.admin.search.handler')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.block.stats' shared service.
     *
     * @return \Sonata\AdminBundle\Block\AdminStatsBlockService
     */
    protected function getSonata_Admin_Block_StatsService()
    {
        return $this->services['sonata.admin.block.stats'] = new \Sonata\AdminBundle\Block\AdminStatsBlockService('sonata.admin.block.stats', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.breadcrumbs_builder' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\BreadcrumbsBuilder
     */
    protected function getSonata_Admin_BreadcrumbsBuilderService()
    {
        return $this->services['sonata.admin.breadcrumbs_builder'] = new \Sonata\AdminBundle\Admin\BreadcrumbsBuilder(array('child_admin_route' => 'edit'));
    }

    /**
     * Gets the public 'sonata.admin.builder.filter.factory' shared service.
     *
     * @return \Sonata\AdminBundle\Filter\FilterFactory
     */
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, array('Sonata\\DoctrineORMAdminBundle\\Filter\\BooleanFilter' => 'sonata.admin.orm.filter.type.boolean', 'doctrine_orm_boolean' => 'sonata.admin.orm.filter.type.boolean', 'Sonata\\DoctrineORMAdminBundle\\Filter\\CallbackFilter' => 'sonata.admin.orm.filter.type.callback', 'doctrine_orm_callback' => 'sonata.admin.orm.filter.type.callback', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ChoiceFilter' => 'sonata.admin.orm.filter.type.choice', 'doctrine_orm_choice' => 'sonata.admin.orm.filter.type.choice', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelFilter' => 'sonata.admin.orm.filter.type.model', 'doctrine_orm_model' => 'sonata.admin.orm.filter.type.model', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelAutocompleteFilter' => 'sonata.admin.orm.filter.type.model_autocomplete', 'doctrine_orm_model_autocomplete' => 'sonata.admin.orm.filter.type.model_autocomplete', 'Sonata\\DoctrineORMAdminBundle\\Filter\\StringFilter' => 'sonata.admin.orm.filter.type.string', 'doctrine_orm_string' => 'sonata.admin.orm.filter.type.string', 'Sonata\\DoctrineORMAdminBundle\\Filter\\NumberFilter' => 'sonata.admin.orm.filter.type.number', 'doctrine_orm_number' => 'sonata.admin.orm.filter.type.number', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateFilter' => 'sonata.admin.orm.filter.type.date', 'doctrine_orm_date' => 'sonata.admin.orm.filter.type.date', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateRangeFilter' => 'sonata.admin.orm.filter.type.date_range', 'doctrine_orm_date_range' => 'sonata.admin.orm.filter.type.date_range', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeFilter' => 'sonata.admin.orm.filter.type.datetime', 'doctrine_orm_datetime' => 'sonata.admin.orm.filter.type.datetime', 'Sonata\\DoctrineORMAdminBundle\\Filter\\TimeFilter' => 'sonata.admin.orm.filter.type.time', 'doctrine_orm_time' => 'sonata.admin.orm.filter.type.time', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeRangeFilter' => 'sonata.admin.orm.filter.type.datetime_range', 'doctrine_orm_datetime_range' => 'sonata.admin.orm.filter.type.datetime_range', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ClassFilter' => 'sonata.admin.orm.filter.type.class', 'doctrine_orm_class' => 'sonata.admin.orm.filter.type.class'));
    }

    /**
     * Gets the public 'sonata.admin.builder.orm_datagrid' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder
     */
    protected function getSonata_Admin_Builder_OrmDatagridService()
    {
        return $this->services['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.builder.filter.factory']) ? $this->services['sonata.admin.builder.filter.factory'] : $this->get('sonata.admin.builder.filter.factory')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.guesser.orm_datagrid_chain']) ? $this->services['sonata.admin.guesser.orm_datagrid_chain'] : $this->get('sonata.admin.guesser.orm_datagrid_chain')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'sonata.admin.builder.orm_form' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\FormContractor
     */
    protected function getSonata_Admin_Builder_OrmFormService()
    {
        return $this->services['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.builder.orm_list' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder
     */
    protected function getSonata_Admin_Builder_OrmListService()
    {
        return $this->services['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder(${($_ = isset($this->services['sonata.admin.guesser.orm_list_chain']) ? $this->services['sonata.admin.guesser.orm_list_chain'] : $this->get('sonata.admin.guesser.orm_list_chain')) && false ?: '_'}, array('array' => 'SonataAdminBundle:CRUD:list_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:list_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:list_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'email' => 'SonataAdminBundle:CRUD:list_email.html.twig', 'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:list_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:list_html.html.twig'));
    }

    /**
     * Gets the public 'sonata.admin.builder.orm_show' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder
     */
    protected function getSonata_Admin_Builder_OrmShowService()
    {
        return $this->services['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder(${($_ = isset($this->services['sonata.admin.guesser.orm_show_chain']) ? $this->services['sonata.admin.guesser.orm_show_chain'] : $this->get('sonata.admin.guesser.orm_show_chain')) && false ?: '_'}, array('array' => 'SonataAdminBundle:CRUD:show_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:show_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:show_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'email' => 'SonataAdminBundle:CRUD:show_email.html.twig', 'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'currency' => 'SonataAdminBundle:CRUD:show_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:show_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:show_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:show_html.html.twig'));
    }

    /**
     * Gets the public 'sonata.admin.controller.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Controller\HelperController
     */
    protected function getSonata_Admin_Controller_AdminService()
    {
        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.helper']) ? $this->services['sonata.admin.helper'] : $this->get('sonata.admin.helper')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.doctrine_orm.form.type.choice_field_mask' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType
     */
    protected function getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService()
    {
        return $this->services['sonata.admin.doctrine_orm.form.type.choice_field_mask'] = new \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType();
    }

    /**
     * Gets the public 'sonata.admin.event.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Event\AdminEventExtension
     */
    protected function getSonata_Admin_Event_ExtensionService()
    {
        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.exporter' shared service.
     *
     * @return \Sonata\AdminBundle\Export\Exporter
     *
     * @deprecated The "sonata.admin.exporter" service is deprecated. You should stop using it, as it will soon be removed.
     */
    protected function getSonata_Admin_ExporterService()
    {
        @trigger_error('The "sonata.admin.exporter" service is deprecated. You should stop using it, as it will soon be removed.', E_USER_DEPRECATED);

        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }

    /**
     * Gets the public 'sonata.admin.form.extension.choice' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension
     */
    protected function getSonata_Admin_Form_Extension_ChoiceService()
    {
        return $this->services['sonata.admin.form.extension.choice'] = new \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension();
    }

    /**
     * Gets the public 'sonata.admin.form.extension.field' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension
     */
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(array('email' => '', 'textarea' => '', 'text' => '', 'choice' => '', 'integer' => '', 'datetime' => 'sonata-medium-date', 'date' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => ''), array('html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'javascripts' => array(0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 4 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js'), 'stylesheets' => array(0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css')));
    }

    /**
     * Gets the public 'sonata.admin.form.extension.field.mopa' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension
     */
    protected function getSonata_Admin_Form_Extension_Field_MopaService()
    {
        return $this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension();
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.choice' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\ChoiceType
     */
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.date' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateType
     */
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.daterange' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateRangeType
     */
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.datetime' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeType
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.datetime_range' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.default' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DefaultType
     */
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.number' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\NumberType
     */
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.form.type.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\AdminType
     */
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.collection' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\CollectionType
     */
    protected function getSonata_Admin_Form_Type_CollectionService()
    {
        return $this->services['sonata.admin.form.type.collection'] = new \Sonata\AdminBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_autocomplete' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelAutocompleteType
     */
    protected function getSonata_Admin_Form_Type_ModelAutocompleteService()
    {
        return $this->services['sonata.admin.form.type.model_autocomplete'] = new \Sonata\AdminBundle\Form\Type\ModelAutocompleteType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_choice' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelType
     */
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_hidden' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelHiddenType
     */
    protected function getSonata_Admin_Form_Type_ModelHiddenService()
    {
        return $this->services['sonata.admin.form.type.model_hidden'] = new \Sonata\AdminBundle\Form\Type\ModelHiddenType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_list' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelListType
     */
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelListType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_reference' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelReferenceType
     */
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }

    /**
     * Gets the public 'sonata.admin.guesser.orm_datagrid' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser
     */
    protected function getSonata_Admin_Guesser_OrmDatagridService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser();
    }

    /**
     * Gets the public 'sonata.admin.guesser.orm_datagrid_chain' shared service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain
     */
    protected function getSonata_Admin_Guesser_OrmDatagridChainService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => ${($_ = isset($this->services['sonata.admin.guesser.orm_datagrid']) ? $this->services['sonata.admin.guesser.orm_datagrid'] : $this->get('sonata.admin.guesser.orm_datagrid')) && false ?: '_'}));
    }

    /**
     * Gets the public 'sonata.admin.guesser.orm_list' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser
     */
    protected function getSonata_Admin_Guesser_OrmListService()
    {
        return $this->services['sonata.admin.guesser.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the public 'sonata.admin.guesser.orm_list_chain' shared service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain
     */
    protected function getSonata_Admin_Guesser_OrmListChainService()
    {
        return $this->services['sonata.admin.guesser.orm_list_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => ${($_ = isset($this->services['sonata.admin.guesser.orm_list']) ? $this->services['sonata.admin.guesser.orm_list'] : $this->get('sonata.admin.guesser.orm_list')) && false ?: '_'}));
    }

    /**
     * Gets the public 'sonata.admin.guesser.orm_show' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser
     */
    protected function getSonata_Admin_Guesser_OrmShowService()
    {
        return $this->services['sonata.admin.guesser.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the public 'sonata.admin.guesser.orm_show_chain' shared service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain
     */
    protected function getSonata_Admin_Guesser_OrmShowChainService()
    {
        return $this->services['sonata.admin.guesser.orm_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => ${($_ = isset($this->services['sonata.admin.guesser.orm_show']) ? $this->services['sonata.admin.guesser.orm_show'] : $this->get('sonata.admin.guesser.orm_show')) && false ?: '_'}));
    }

    /**
     * Gets the public 'sonata.admin.helper' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\AdminHelper
     */
    protected function getSonata_Admin_HelperService()
    {
        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.bc' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.form_component' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.native' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.noop' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.underscore' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.manager.orm' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Model\ModelManager
     */
    protected function getSonata_Admin_Manager_OrmService()
    {
        return $this->services['sonata.admin.manager.orm'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.manipulator.acl.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Util\AdminAclManipulator
     */
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the public 'sonata.admin.manipulator.acl.object.orm' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator
     */
    protected function getSonata_Admin_Manipulator_Acl_Object_OrmService()
    {
        return $this->services['sonata.admin.manipulator.acl.object.orm'] = new \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator();
    }

    /**
     * Gets the public 'sonata.admin.menu.matcher.voter.active' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_ActiveService()
    {
        return $this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter();
    }

    /**
     * Gets the public 'sonata.admin.menu.matcher.voter.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_AdminService()
    {
        return $this->services['sonata.admin.menu.matcher.voter.admin'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter();
    }

    /**
     * Gets the public 'sonata.admin.menu.matcher.voter.children' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_ChildrenService()
    {
        return $this->services['sonata.admin.menu.matcher.voter.children'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter(${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->get('knp_menu.matcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.menu_builder' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\MenuBuilder
     */
    protected function getSonata_Admin_MenuBuilderService()
    {
        return $this->services['sonata.admin.menu_builder'] = new \Sonata\AdminBundle\Menu\MenuBuilder(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->get('knp_menu.factory')) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.menu_provider']) ? $this->services['knp_menu.menu_provider'] : $this->get('knp_menu.menu_provider')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.object.manipulator.acl.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Util\AdminObjectAclManipulator
     */
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'}, 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.boolean' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.callback' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.choice' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.class' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.date' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.date_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.datetime' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.datetime_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.model' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.model_autocomplete' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.number' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.string' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\StringFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.time' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }

    /**
     * Gets the public 'sonata.admin.pool' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'Sonata Admin', 'bundles/sonataadmin/logo_title.png', array('html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'javascripts' => array(0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 4 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js'), 'stylesheets' => array(0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css')), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});

        $instance->setTemplates(array('user_block' => 'SonataAdminBundle:Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'SonataAdminBundle:CRUD:list_outer_rows_tree.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setAdminServiceIds(array());
        $instance->setAdminGroups(array());
        $instance->setAdminClasses(array());

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.route.cache' shared service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCache
     */
    protected function getSonata_Admin_Route_CacheService()
    {
        return $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache((__DIR__.'/sonata/admin'), true);
    }

    /**
     * Gets the public 'sonata.admin.route.cache_warmup' shared service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCacheWarmUp
     */
    protected function getSonata_Admin_Route_CacheWarmupService()
    {
        return $this->services['sonata.admin.route.cache_warmup'] = new \Sonata\AdminBundle\Route\RoutesCacheWarmUp(${($_ = isset($this->services['sonata.admin.route.cache']) ? $this->services['sonata.admin.route.cache'] : $this->get('sonata.admin.route.cache')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.route.default_generator' shared service.
     *
     * @return \Sonata\AdminBundle\Route\DefaultRouteGenerator
     */
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.route.cache']) ? $this->services['sonata.admin.route.cache'] : $this->get('sonata.admin.route.cache')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.route.path_info' shared service.
     *
     * @return \Sonata\AdminBundle\Route\PathInfoBuilder
     */
    protected function getSonata_Admin_Route_PathInfoService()
    {
        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder(${($_ = isset($this->services['sonata.admin.audit.manager']) ? $this->services['sonata.admin.audit.manager'] : $this->get('sonata.admin.audit.manager')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.route.query_string' shared service.
     *
     * @return \Sonata\AdminBundle\Route\QueryStringBuilder
     */
    protected function getSonata_Admin_Route_QueryStringService()
    {
        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder(${($_ = isset($this->services['sonata.admin.audit.manager']) ? $this->services['sonata.admin.audit.manager'] : $this->get('sonata.admin.audit.manager')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.route_loader' shared service.
     *
     * @return \Sonata\AdminBundle\Route\AdminPoolLoader
     */
    protected function getSonata_Admin_RouteLoaderService()
    {
        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'}, array(), $this);
    }

    /**
     * Gets the public 'sonata.admin.search.handler' shared service.
     *
     * @return \Sonata\AdminBundle\Search\SearchHandler
     */
    protected function getSonata_Admin_Search_HandlerService()
    {
        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.security.handler' shared service.
     *
     * @return \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler
     */
    protected function getSonata_Admin_Security_HandlerService()
    {
        return $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler();
    }

    /**
     * Gets the public 'sonata.admin.sidebar_menu' shared service.
     *
     * @return \Knp\Menu\MenuItem
     */
    protected function getSonata_Admin_SidebarMenuService()
    {
        return $this->services['sonata.admin.sidebar_menu'] = ${($_ = isset($this->services['sonata.admin.menu_builder']) ? $this->services['sonata.admin.menu_builder'] : $this->get('sonata.admin.menu_builder')) && false ?: '_'}->createSidebarMenu();
    }

    /**
     * Gets the public 'sonata.admin.twig.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        $this->services['sonata.admin.twig.extension'] = $instance = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});

        $instance->setXEditableTypeMapping(array('choice' => 'select', 'boolean' => 'select', 'text' => 'text', 'textarea' => 'textarea', 'html' => 'textarea', 'email' => 'email', 'string' => 'text', 'smallint' => 'text', 'bigint' => 'text', 'integer' => 'number', 'decimal' => 'number', 'currency' => 'number', 'percent' => 'number', 'url' => 'url', 'date' => 'date'));

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.twig.global' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\GlobalVariables
     */
    protected function getSonata_Admin_Twig_GlobalService()
    {
        return $this->services['sonata.admin.twig.global'] = new \Sonata\AdminBundle\Twig\GlobalVariables(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->get('sonata.admin.pool')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.admin.validator.inline' shared service.
     *
     * @return \Sonata\CoreBundle\Validator\InlineValidator
     */
    protected function getSonata_Admin_Validator_InlineService()
    {
        return $this->services['sonata.admin.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, ${($_ = isset($this->services['validator.validator_factory']) ? $this->services['validator.validator_factory'] : $this->getValidator_ValidatorFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.block.cache.handler.default' shared service.
     *
     * @return \Sonata\BlockBundle\Cache\HttpCacheHandler
     */
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }

    /**
     * Gets the public 'sonata.block.cache.handler.noop' shared service.
     *
     * @return \Sonata\BlockBundle\Cache\NoopHttpCacheHandler
     */
    protected function getSonata_Block_Cache_Handler_NoopService()
    {
        return $this->services['sonata.block.cache.handler.noop'] = new \Sonata\BlockBundle\Cache\NoopHttpCacheHandler();
    }

    /**
     * Gets the public 'sonata.block.context_manager.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager(${($_ = isset($this->services['sonata.block.loader.chain']) ? $this->services['sonata.block.loader.chain'] : $this->get('sonata.block.loader.chain')) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop')), ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.block.exception.filter.debug_only' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter
     */
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(true);
    }

    /**
     * Gets the public 'sonata.block.exception.filter.ignore_block_exception' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter
     */
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }

    /**
     * Gets the public 'sonata.block.exception.filter.keep_all' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepAllFilter
     */
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }

    /**
     * Gets the public 'sonata.block.exception.filter.keep_none' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter
     */
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }

    /**
     * Gets the public 'sonata.block.exception.renderer.inline' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineRenderer
     */
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'}, 'SonataBlockBundle:Block:block_exception.html.twig');
    }

    /**
     * Gets the public 'sonata.block.exception.renderer.inline_debug' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer
     */
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'}, 'SonataBlockBundle:Block:block_exception_debug.html.twig', true, true);
    }

    /**
     * Gets the public 'sonata.block.exception.renderer.throw' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer
     */
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }

    /**
     * Gets the public 'sonata.block.exception.strategy.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Strategy\StrategyManager
     */
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());

        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');

        return $instance;
    }

    /**
     * Gets the public 'sonata.block.form.type.block' shared service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ServiceListType
     */
    protected function getSonata_Block_Form_Type_BlockService()
    {
        return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.block.form.type.container_template' shared service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ContainerTemplateType
     */
    protected function getSonata_Block_Form_Type_ContainerTemplateService()
    {
        return $this->services['sonata.block.form.type.container_template'] = new \Sonata\BlockBundle\Form\Type\ContainerTemplateType(array('SonataBlockBundle:Block:block_container.html.twig' => 'SonataBlockBundle default template'));
    }

    /**
     * Gets the public 'sonata.block.loader.chain' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockLoaderChain
     */
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => ${($_ = isset($this->services['sonata.block.loader.service']) ? $this->services['sonata.block.loader.service'] : $this->get('sonata.block.loader.service')) && false ?: '_'}));
    }

    /**
     * Gets the public 'sonata.block.loader.service' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Loader\ServiceLoader
     */
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list'));
    }

    /**
     * Gets the public 'sonata.block.menu.registry' shared service.
     *
     * @return \Sonata\BlockBundle\Menu\MenuRegistry
     */
    protected function getSonata_Block_Menu_RegistryService()
    {
        return $this->services['sonata.block.menu.registry'] = new \Sonata\BlockBundle\Menu\MenuRegistry(array());
    }

    /**
     * Gets the public 'sonata.block.renderer.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.exception.strategy.manager']) ? $this->services['sonata.block.exception.strategy.manager'] : $this->get('sonata.block.exception.strategy.manager')) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'sonata.block.service.container' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\ContainerBlockService
     */
    protected function getSonata_Block_Service_ContainerService()
    {
        return $this->services['sonata.block.service.container'] = new \Sonata\BlockBundle\Block\Service\ContainerBlockService('sonata.block.container', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.block.service.empty' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\EmptyBlockService
     */
    protected function getSonata_Block_Service_EmptyService()
    {
        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.block.service.menu' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\MenuBlockService
     */
    protected function getSonata_Block_Service_MenuService()
    {
        return $this->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService('sonata.block.menu', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.menu_provider']) ? $this->services['knp_menu.menu_provider'] : $this->get('knp_menu.menu_provider')) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.menu.registry']) ? $this->services['sonata.block.menu.registry'] : $this->get('sonata.block.menu.registry')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.block.service.rss' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\RssBlockService
     */
    protected function getSonata_Block_Service_RssService()
    {
        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.block.service.template' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TemplateBlockService
     */
    protected function getSonata_Block_Service_TemplateService()
    {
        return $this->services['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService('sonata.block.template', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.block.service.text' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TextBlockService
     */
    protected function getSonata_Block_Service_TextService()
    {
        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.block.templating.helper' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop')), ${($_ = isset($this->services['sonata.block.renderer.default']) ? $this->services['sonata.block.renderer.default'] : $this->get('sonata.block.renderer.default')) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.context_manager.default']) ? $this->services['sonata.block.context_manager.default'] : $this->get('sonata.block.context_manager.default')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, NULL, ${($_ = isset($this->services['sonata.block.cache.handler.default']) ? $this->services['sonata.block.cache.handler.default'] : $this->get('sonata.block.cache.handler.default', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.block.twig.global' shared service.
     *
     * @return \Sonata\BlockBundle\Twig\GlobalVariables
     */
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig', 'block_container' => 'SonataBlockBundle:Block:block_container.html.twig'));
    }

    /**
     * Gets the public 'sonata.core.date.moment_format_converter' shared service.
     *
     * @return \Sonata\CoreBundle\Date\MomentFormatConverter
     */
    protected function getSonata_Core_Date_MomentFormatConverterService()
    {
        return $this->services['sonata.core.date.moment_format_converter'] = new \Sonata\CoreBundle\Date\MomentFormatConverter();
    }

    /**
     * Gets the public 'sonata.core.flashmessage.manager' shared service.
     *
     * @return \Sonata\CoreBundle\FlashMessage\FlashManager
     */
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\CoreBundle\FlashMessage\FlashManager(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, array('success' => array('success' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_success' => array('domain' => 'SonataAdminBundle'), 'sonata_user_success' => array('domain' => 'SonataUserBundle'), 'fos_user_success' => array('domain' => 'FOSUserBundle')), 'warning' => array('warning' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_info' => array('domain' => 'SonataAdminBundle')), 'danger' => array('error' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_error' => array('domain' => 'SonataAdminBundle'), 'sonata_user_error' => array('domain' => 'SonataUserBundle'))), array('success' => 'success', 'warning' => 'warning', 'danger' => 'danger'));
    }

    /**
     * Gets the public 'sonata.core.flashmessage.twig.extension' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension(${($_ = isset($this->services['sonata.core.flashmessage.manager']) ? $this->services['sonata.core.flashmessage.manager'] : $this->get('sonata.core.flashmessage.manager')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.form.type.array' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ImmutableArrayType
     */
    protected function getSonata_Core_Form_Type_ArrayService()
    {
        return $this->services['sonata.core.form.type.array'] = new \Sonata\CoreBundle\Form\Type\ImmutableArrayType();
    }

    /**
     * Gets the public 'sonata.core.form.type.boolean' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\BooleanType
     */
    protected function getSonata_Core_Form_Type_BooleanService()
    {
        return $this->services['sonata.core.form.type.boolean'] = new \Sonata\CoreBundle\Form\Type\BooleanType();
    }

    /**
     * Gets the public 'sonata.core.form.type.collection' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\CollectionType
     */
    protected function getSonata_Core_Form_Type_CollectionService()
    {
        return $this->services['sonata.core.form.type.collection'] = new \Sonata\CoreBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the public 'sonata.core.form.type.color_selector' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ColorSelectorType
     */
    protected function getSonata_Core_Form_Type_ColorSelectorService()
    {
        return $this->services['sonata.core.form.type.color_selector'] = new \Sonata\CoreBundle\Form\Type\ColorSelectorType();
    }

    /**
     * Gets the public 'sonata.core.form.type.date_picker' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DatePickerType
     */
    protected function getSonata_Core_Form_Type_DatePickerService()
    {
        return $this->services['sonata.core.form.type.date_picker'] = new \Sonata\CoreBundle\Form\Type\DatePickerType(${($_ = isset($this->services['sonata.core.date.moment_format_converter']) ? $this->services['sonata.core.date.moment_format_converter'] : $this->get('sonata.core.date.moment_format_converter')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.form.type.date_range' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangeType
     */
    protected function getSonata_Core_Form_Type_DateRangeService()
    {
        return $this->services['sonata.core.form.type.date_range'] = new \Sonata\CoreBundle\Form\Type\DateRangeType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.form.type.date_range_picker' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangePickerType
     */
    protected function getSonata_Core_Form_Type_DateRangePickerService()
    {
        return $this->services['sonata.core.form.type.date_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateRangePickerType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_picker' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimePickerType
     */
    protected function getSonata_Core_Form_Type_DatetimePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType(${($_ = isset($this->services['sonata.core.date.moment_format_converter']) ? $this->services['sonata.core.date.moment_format_converter'] : $this->get('sonata.core.date.moment_format_converter')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_range' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangeType
     */
    protected function getSonata_Core_Form_Type_DatetimeRangeService()
    {
        return $this->services['sonata.core.form.type.datetime_range'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangeType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_range_picker' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType
     */
    protected function getSonata_Core_Form_Type_DatetimeRangePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.form.type.equal' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\EqualType
     */
    protected function getSonata_Core_Form_Type_EqualService()
    {
        return $this->services['sonata.core.form.type.equal'] = new \Sonata\CoreBundle\Form\Type\EqualType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.form.type.translatable_choice' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\TranslatableChoiceType
     */
    protected function getSonata_Core_Form_Type_TranslatableChoiceService()
    {
        return $this->services['sonata.core.form.type.translatable_choice'] = new \Sonata\CoreBundle\Form\Type\TranslatableChoiceType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.model.adapter.chain' shared service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\AdapterChain
     */
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));

        return $instance;
    }

    /**
     * Gets the public 'sonata.core.slugify.cocur' shared service.
     *
     * @return \Cocur\Slugify\Slugify
     *
     * @deprecated The "sonata.core.slugify.cocur" service is deprecated. You should stop using it, as it will soon be removed.
     */
    protected function getSonata_Core_Slugify_CocurService()
    {
        @trigger_error('The "sonata.core.slugify.cocur" service is deprecated. You should stop using it, as it will soon be removed.', E_USER_DEPRECATED);

        return $this->services['sonata.core.slugify.cocur'] = new \Cocur\Slugify\Slugify();
    }

    /**
     * Gets the public 'sonata.core.slugify.native' shared service.
     *
     * @return \Sonata\CoreBundle\Component\NativeSlugify
     *
     * @deprecated The "sonata.core.slugify.native" service is deprecated. You should stop using it, as it will soon be removed.
     */
    protected function getSonata_Core_Slugify_NativeService()
    {
        @trigger_error('The "sonata.core.slugify.native" service is deprecated. You should stop using it, as it will soon be removed.', E_USER_DEPRECATED);

        return $this->services['sonata.core.slugify.native'] = new \Sonata\CoreBundle\Component\NativeSlugify();
    }

    /**
     * Gets the public 'sonata.core.twig.extension.text' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension
     */
    protected function getSonata_Core_Twig_Extension_TextService()
    {
        return $this->services['sonata.core.twig.extension.text'] = new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension();
    }

    /**
     * Gets the public 'sonata.core.twig.extension.wrapping' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FormTypeExtension
     */
    protected function getSonata_Core_Twig_Extension_WrappingService()
    {
        return $this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\CoreBundle\Twig\Extension\FormTypeExtension('standard');
    }

    /**
     * Gets the public 'sonata.core.twig.status_extension' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\StatusExtension
     */
    protected function getSonata_Core_Twig_StatusExtensionService()
    {
        $this->services['sonata.core.twig.status_extension'] = $instance = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();

        $instance->addStatusService(${($_ = isset($this->services['sonata.core.flashmessage.manager']) ? $this->services['sonata.core.flashmessage.manager'] : $this->get('sonata.core.flashmessage.manager')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'sonata.core.twig.template_extension' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\TemplateExtension
     */
    protected function getSonata_Core_Twig_TemplateExtensionService()
    {
        return $this->services['sonata.core.twig.template_extension'] = new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(true, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, ${($_ = isset($this->services['sonata.core.model.adapter.chain']) ? $this->services['sonata.core.model.adapter.chain'] : $this->get('sonata.core.model.adapter.chain')) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.validator.inline' shared service.
     *
     * @return \Sonata\CoreBundle\Validator\InlineValidator
     */
    protected function getSonata_Core_Validator_InlineService()
    {
        return $this->services['sonata.core.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, ${($_ = isset($this->services['validator.validator_factory']) ? $this->services['validator.validator_factory'] : $this->getValidator_ValidatorFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the public 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(${($_ = isset($this->services['swiftmailer.mailer.default.transport']) ? $this->services['swiftmailer.mailer.default.transport'] : $this->get('swiftmailer.mailer.default.transport')) && false ?: '_'});
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.spool' shared service.
     *
     * @return \Swift_MemorySpool
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['swiftmailer.mailer.default.spool']) ? $this->services['swiftmailer.mailer.default.spool'] : $this->get('swiftmailer.mailer.default.spool')) && false ?: '_'});

        $instance->registerPlugin(${($_ = isset($this->services['swiftmailer.mailer.default.plugin.messagelogger']) ? $this->services['swiftmailer.mailer.default.plugin.messagelogger'] : $this->get('swiftmailer.mailer.default.plugin.messagelogger')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_EsmtpTransport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername('apikey');
        $a->setPassword('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');
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'});

        $instance->setHost('smtp.sendgrid.net');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.filename_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the public 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'translation.dumper.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.json' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the public 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', ${($_ = isset($this->services['translation.extractor.php']) ? $this->services['translation.extractor.php'] : $this->get('translation.extractor.php')) && false ?: '_'});
        $instance->addExtractor('twig', ${($_ = isset($this->services['twig.translation.extractor']) ? $this->services['twig.translation.extractor'] : $this->get('twig.translation.extractor')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the public 'translation.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader
     */
    protected function getTranslation_LoaderService()
    {
        $a = ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->get('translation.loader.xliff')) && false ?: '_'};

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->get('translation.loader.php')) && false ?: '_'});
        $instance->addLoader('yml', ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->get('translation.loader.yml')) && false ?: '_'});
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->get('translation.loader.po')) && false ?: '_'});
        $instance->addLoader('mo', ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->get('translation.loader.mo')) && false ?: '_'});
        $instance->addLoader('ts', ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->get('translation.loader.qt')) && false ?: '_'});
        $instance->addLoader('csv', ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->get('translation.loader.csv')) && false ?: '_'});
        $instance->addLoader('res', ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->get('translation.loader.res')) && false ?: '_'});
        $instance->addLoader('dat', ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->get('translation.loader.dat')) && false ?: '_'});
        $instance->addLoader('ini', ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->get('translation.loader.ini')) && false ?: '_'});
        $instance->addLoader('json', ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->get('translation.loader.json')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the public 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the public 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the public 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the public 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the public 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the public 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the public 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the public 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the public 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', ${($_ = isset($this->services['translation.dumper.php']) ? $this->services['translation.dumper.php'] : $this->get('translation.dumper.php')) && false ?: '_'});
        $instance->addDumper('xlf', ${($_ = isset($this->services['translation.dumper.xliff']) ? $this->services['translation.dumper.xliff'] : $this->get('translation.dumper.xliff')) && false ?: '_'});
        $instance->addDumper('po', ${($_ = isset($this->services['translation.dumper.po']) ? $this->services['translation.dumper.po'] : $this->get('translation.dumper.po')) && false ?: '_'});
        $instance->addDumper('mo', ${($_ = isset($this->services['translation.dumper.mo']) ? $this->services['translation.dumper.mo'] : $this->get('translation.dumper.mo')) && false ?: '_'});
        $instance->addDumper('yml', ${($_ = isset($this->services['translation.dumper.yml']) ? $this->services['translation.dumper.yml'] : $this->get('translation.dumper.yml')) && false ?: '_'});
        $instance->addDumper('ts', ${($_ = isset($this->services['translation.dumper.qt']) ? $this->services['translation.dumper.qt'] : $this->get('translation.dumper.qt')) && false ?: '_'});
        $instance->addDumper('csv', ${($_ = isset($this->services['translation.dumper.csv']) ? $this->services['translation.dumper.csv'] : $this->get('translation.dumper.csv')) && false ?: '_'});
        $instance->addDumper('ini', ${($_ = isset($this->services['translation.dumper.ini']) ? $this->services['translation.dumper.ini'] : $this->get('translation.dumper.ini')) && false ?: '_'});
        $instance->addDumper('json', ${($_ = isset($this->services['translation.dumper.json']) ? $this->services['translation.dumper.json'] : $this->get('translation.dumper.json')) && false ?: '_'});
        $instance->addDumper('res', ${($_ = isset($this->services['translation.dumper.res']) ? $this->services['translation.dumper.res'] : $this->get('translation.dumper.res')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\LoggingTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\LoggingTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.translation']) ? $this->services['monolog.logger.translation'] : $this->get('monolog.logger.translation')) && false ?: '_'});
    }

    /**
     * Gets the public 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->get('translation.loader.csv')) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->get('translation.loader.dat')) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->get('translation.loader.ini')) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->get('translation.loader.json')) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->get('translation.loader.mo')) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->get('translation.loader.php')) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->get('translation.loader.po')) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->get('translation.loader.qt')) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->get('translation.loader.res')) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->get('translation.loader.xliff')) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->get('translation.loader.yml')) && false ?: '_'};
        })), new \Symfony\Component\Translation\MessageSelector(), 'en', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sl.xliff'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.sl.xlf'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.sl.xlf'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 9 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.sl.yml')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ja.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ja.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.zh_CN.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.zh_CN.xliff'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.zh_CN.xlf'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.zh_CN.xlf'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.de.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.de.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.de.xliff'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.de.xlf'), 7 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.de.xlf'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 10 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.de.yml')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt_BR.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt_BR.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt.xliff'), 4 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.pt.xlf'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.pt.xlf'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml'), 8 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pt.yml')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ar.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ar.xliff'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.ar.xlf'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.ar.xlf'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 9 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ar.yml')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pl.xliff'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.pl.xlf'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.pl.xlf'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 9 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pl.yml')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fr.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.fr.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fr.xliff'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.fr.xlf'), 7 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.fr.xlf'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 10 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.fr.yml')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.sv.xlf'), 4 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.sv.xlf'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ru.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ru.xliff'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.ru.xlf'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.ru.xlf'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 9 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ru.yml')), 'af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.nl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.nl.xliff'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.nl.xlf'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.nl.xlf'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.tr.xlf'), 3 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.tr.xlf'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml'), 6 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.tr.yml')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lt.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lt.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fa.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fa.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.cs.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.cs.xliff'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.cs.xlf'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.cs.xlf'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.bg.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.bg.xliff'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.bg.xlf'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.bg.xlf'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ro.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ro.xliff'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.ro.xlf'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.ro.xlf'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hr.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hr.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.eu.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.eu.xliff'), 4 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.eu.xlf'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.eu.xlf'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lb.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lb.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.es.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.es.xliff'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.es.xlf'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.es.xlf'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 9 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.es.yml')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.it.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.it.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.it.xliff'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.it.xlf'), 7 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.it.xlf'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 10 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.it.yml')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.uk.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.uk.xliff'), 4 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.uk.xlf'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.uk.xlf'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 8 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.uk.yml')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sk.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sk.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ca.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ca.xliff'), 5 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.ca.xlf'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.ca.xlf'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.no.xliff')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.en.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.en.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.en.xliff'), 6 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.en.xlf'), 7 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.en.xlf'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 10 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.en.yml')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fi.xliff'), 3 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/EasyAdminBundle.fi.xlf'), 4 => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/translations/messages.fi.xlf'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hu.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.hu.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hu.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 8 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.hu.yml')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'sv_SE' => array(0 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sv_SE.xliff')), 'eo' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml')), 'ky' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml')))));

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the public 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $c = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $d = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'};
        $e = ${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->get('knp_menu.matcher')) && false ?: '_'};

        $f = new \Knp\Menu\Util\MenuManipulator();

        $g = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $g->setDisplayOptions(array('fileLinkFormat' => $c));

        $h = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $h->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $c));

        $i = new \Symfony\Bridge\Twig\AppVariable();
        $i->setEnvironment('dev');
        $i->setDebug(true);
        if ($this->has('security.token_storage')) {
            $i->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $i->setRequestStack($d);
        }

        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->get('twig.loader')) && false ?: '_'}, array('debug' => true, 'strict_variables' => true, 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'bootstrap_3_layout.html.twig'), 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->get('twig.profile')) && false ?: '_'}, $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->get('assets.packages')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($c, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($d, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($d));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, true, array(), array(0 => 'FrameworkBundle', 1 => 'SecurityBundle', 2 => 'TwigBundle', 3 => 'MonologBundle', 4 => 'SwiftmailerBundle', 5 => 'DoctrineBundle', 6 => 'SensioFrameworkExtraBundle', 7 => 'AppBundle', 8 => 'AsseticBundle', 9 => 'SonataCoreBundle', 10 => 'SonataBlockBundle', 11 => 'KnpMenuBundle', 12 => 'SonataDoctrineORMAdminBundle', 13 => 'SonataAdminBundle', 14 => 'EasyAdminBundle', 15 => 'IvoryCKEditorBundle', 16 => 'FOSUserBundle', 17 => 'CocurSlugifyBundle', 18 => 'VichUploaderBundle', 19 => 'DebugBundle', 20 => 'WebProfilerBundle', 21 => 'SensioDistributionBundle', 22 => 'SensioGeneratorBundle', 23 => 'WebServerBundle', 24 => 'DoctrineFixturesBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(${($_ = isset($this->services['sonata.core.flashmessage.twig.extension']) ? $this->services['sonata.core.flashmessage.twig.extension'] : $this->get('sonata.core.flashmessage.twig.extension')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.extension.wrapping']) ? $this->services['sonata.core.twig.extension.wrapping'] : $this->get('sonata.core.twig.extension.wrapping')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.extension.text']) ? $this->services['sonata.core.twig.extension.text'] : $this->get('sonata.core.twig.extension.text')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.status_extension']) ? $this->services['sonata.core.twig.status_extension'] : $this->get('sonata.core.twig.status_extension')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.template_extension']) ? $this->services['sonata.core.twig.template_extension'] : $this->get('sonata.core.twig.template_extension')) && false ?: '_'});
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension(${($_ = isset($this->services['sonata.block.templating.helper']) ? $this->services['sonata.block.templating.helper'] : $this->get('sonata.block.templating.helper')) && false ?: '_'}));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(${($_ = isset($this->services['knp_menu.renderer_provider']) ? $this->services['knp_menu.renderer_provider'] : $this->get('knp_menu.renderer_provider')) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.menu_provider']) ? $this->services['knp_menu.menu_provider'] : $this->get('knp_menu.menu_provider')) && false ?: '_'}, $f, $e), $e, $f));
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.twig.extension']) ? $this->services['sonata.admin.twig.extension'] : $this->get('sonata.admin.twig.extension')) && false ?: '_'});
        $instance->addExtension(new \JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension(${($_ = isset($this->services['easyadmin.config.manager']) ? $this->services['easyadmin.config.manager'] : $this->get('easyadmin.config.manager')) && false ?: '_'}, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'}, true, $a));
        $instance->addExtension(${($_ = isset($this->services['ivory_ck_editor.twig_extension']) ? $this->services['ivory_ck_editor.twig_extension'] : $this->get('ivory_ck_editor.twig_extension')) && false ?: '_'});
        $instance->addExtension(new \Cocur\Slugify\Bridge\Twig\SlugifyExtension(${($_ = isset($this->services['cocur_slugify']) ? $this->services['cocur_slugify'] : $this->get('cocur_slugify')) && false ?: '_'}));
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension(${($_ = isset($this->services['vich_uploader.templating.helper.uploader_helper']) ? $this->services['vich_uploader.templating.helper.uploader_helper'] : $this->get('vich_uploader.templating.helper.uploader_helper')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, $g));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($h));
        $instance->addGlobal('app', $i);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->get('twig.runtime.httpkernel')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->get('twig.form.renderer')) && false ?: '_'};
        }))));
        $instance->addGlobal('sonata_block', ${($_ = isset($this->services['sonata.block.twig.global']) ? $this->services['sonata.block.twig.global'] : $this->get('sonata.block.twig.global')) && false ?: '_'});
        $instance->addGlobal('sonata_admin', ${($_ = isset($this->services['sonata.admin.twig.global']) ? $this->services['sonata.admin.twig.global'] : $this->get('sonata.admin.twig.global')) && false ?: '_'});
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, 'twig.controller.exception:showAction');
    }

    /**
     * Gets the public 'twig.exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig', 1 => 'form_div_layout.html.twig', 2 => 'bootstrap_3_layout.html.twig'), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}), ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/views'), 'SonataCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/views'), 'SonataBlock');
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/Resources/views'), 'KnpMenu');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views'), 'SonataDoctrineORMAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/views'), 'SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/Resources/views'), 'EasyAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Resources/views'), 'IvoryCKEditor');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/FOSUserBundle/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/views'), 'VichUploader');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));

        return $instance;
    }

    /**
     * Gets the public 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the public 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(${($_ = isset($this->services['fragment.handler']) ? $this->services['fragment.handler'] : $this->get('fragment.handler')) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
    }

    /**
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('a0fd7edcc632d620f50bd3db5dddd6f1f6005e62');
    }

    /**
     * Gets the public 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}->getValidator();
    }

    /**
     * Gets the public 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(${($_ = isset($this->services['validator.validator_factory']) ? $this->services['validator.validator_factory'] : $this->getValidator_ValidatorFactoryService()) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->get('doctrine.orm.validator_initializer')) && false ?: '_'}, 1 => new \FOS\UserBundle\Validator\Initializer(${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'})));
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the public 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the public 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the public 'var_dumper.cli_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the public 'vich_uploader.directory_namer_subdir' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\SubdirDirectoryNamer
     */
    protected function getVichUploader_DirectoryNamerSubdirService()
    {
        return $this->services['vich_uploader.directory_namer_subdir'] = new \Vich\UploaderBundle\Naming\SubdirDirectoryNamer();
    }

    /**
     * Gets the public 'vich_uploader.download_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\DownloadHandler
     */
    protected function getVichUploader_DownloadHandlerService()
    {
        return $this->services['vich_uploader.download_handler'] = new \Vich\UploaderBundle\Handler\DownloadHandler(${($_ = isset($this->services['vich_uploader.property_mapping_factory']) ? $this->services['vich_uploader.property_mapping_factory'] : $this->getVichUploader_PropertyMappingFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->get('vich_uploader.storage')) && false ?: '_'});
    }

    /**
     * Gets the public 'vich_uploader.form.type.file' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichFileType
     */
    protected function getVichUploader_Form_Type_FileService()
    {
        return $this->services['vich_uploader.form.type.file'] = new \Vich\UploaderBundle\Form\Type\VichFileType(${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->get('vich_uploader.storage')) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.upload_handler']) ? $this->services['vich_uploader.upload_handler'] : $this->get('vich_uploader.upload_handler')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'vich_uploader.form.type.image' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichImageType
     */
    protected function getVichUploader_Form_Type_ImageService()
    {
        return $this->services['vich_uploader.form.type.image'] = new \Vich\UploaderBundle\Form\Type\VichImageType(${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->get('vich_uploader.storage')) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.upload_handler']) ? $this->services['vich_uploader.upload_handler'] : $this->get('vich_uploader.upload_handler')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'vich_uploader.namer_hash' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\HashNamer
     */
    protected function getVichUploader_NamerHashService()
    {
        return $this->services['vich_uploader.namer_hash'] = new \Vich\UploaderBundle\Naming\HashNamer();
    }

    /**
     * Gets the public 'vich_uploader.namer_origname' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\OrignameNamer
     */
    protected function getVichUploader_NamerOrignameService()
    {
        return $this->services['vich_uploader.namer_origname'] = new \Vich\UploaderBundle\Naming\OrignameNamer();
    }

    /**
     * Gets the public 'vich_uploader.namer_property' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\PropertyNamer
     */
    protected function getVichUploader_NamerPropertyService()
    {
        return $this->services['vich_uploader.namer_property'] = new \Vich\UploaderBundle\Naming\PropertyNamer();
    }

    /**
     * Gets the public 'vich_uploader.namer_uniqid' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    protected function getVichUploader_NamerUniqidService()
    {
        return $this->services['vich_uploader.namer_uniqid'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }

    /**
     * Gets the public 'vich_uploader.storage' shared service.
     *
     * @return \Vich\UploaderBundle\Storage\FileSystemStorage
     */
    protected function getVichUploader_StorageService()
    {
        return $this->services['vich_uploader.storage'] = new \Vich\UploaderBundle\Storage\FileSystemStorage(${($_ = isset($this->services['vich_uploader.property_mapping_factory']) ? $this->services['vich_uploader.property_mapping_factory'] : $this->getVichUploader_PropertyMappingFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'vich_uploader.templating.helper.uploader_helper' shared service.
     *
     * @return \Vich\UploaderBundle\Templating\Helper\UploaderHelper
     */
    protected function getVichUploader_Templating_Helper_UploaderHelperService()
    {
        return $this->services['vich_uploader.templating.helper.uploader_helper'] = new \Vich\UploaderBundle\Templating\Helper\UploaderHelper(${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->get('vich_uploader.storage')) && false ?: '_'});
    }

    /**
     * Gets the public 'vich_uploader.upload_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler
     */
    protected function getVichUploader_UploadHandlerService()
    {
        $a = ${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->get('vich_uploader.storage')) && false ?: '_'};

        return $this->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(${($_ = isset($this->services['vich_uploader.property_mapping_factory']) ? $this->services['vich_uploader.property_mapping_factory'] : $this->getVichUploader_PropertyMappingFactoryService()) && false ?: '_'}, $a, new \Vich\UploaderBundle\Injector\FileInjector($a), ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(NULL, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, NULL, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, array(), 'bottom', new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator()), $this->targetDirs[3]);
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(NULL, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private '1_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    protected function get14615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0Service()
    {
        return $this->services['1_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);
    }

    /**
     * Gets the private '2_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0' shared service.
     *
     * @return \Symfony\Component\Config\Resource\SelfCheckingResourceChecker
     */
    protected function get24615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0Service()
    {
        return $this->services['2_4615d9f7bcc7e55db2257d37ae48b69f9a9b406e32ac7a1411cb754cde6b68f0'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getArgumentResolver_DefaultService()
    {
        return $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getArgumentResolver_RequestService()
    {
        return $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getArgumentResolver_RequestAttributeService()
    {
        return $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('AppBundle\\Controller\\Admin\\UserController:prePersistUsersEntity' => function () {
            return ${($_ = isset($this->services['service_locator.40ab8eb65fa46813665f8d3ddd462e65']) ? $this->services['service_locator.40ab8eb65fa46813665f8d3ddd462e65'] : $this->getServiceLocator_40ab8eb65fa46813665f8d3ddd462e65Service()) && false ?: '_'};
        }, 'AppBundle\\Controller\\Admin\\UserController:preUpdateUsersEntity' => function () {
            return ${($_ = isset($this->services['service_locator.40ab8eb65fa46813665f8d3ddd462e65']) ? $this->services['service_locator.40ab8eb65fa46813665f8d3ddd462e65'] : $this->getServiceLocator_40ab8eb65fa46813665f8d3ddd462e65Service()) && false ?: '_'};
        }, 'AppBundle\\Controller\\Blog\\ArticleController:showAction' => function () {
            return ${($_ = isset($this->services['service_locator.76de279f0b43d5be7d66f4ddfbf0e7df']) ? $this->services['service_locator.76de279f0b43d5be7d66f4ddfbf0e7df'] : $this->getServiceLocator_76de279f0b43d5be7d66f4ddfbf0e7dfService()) && false ?: '_'};
        }, 'AppBundle\\Controller\\ContactController:newAction' => function () {
            return ${($_ = isset($this->services['service_locator.b5ba0537461d59f5f994c8c74bb8ff35']) ? $this->services['service_locator.b5ba0537461d59f5f994c8c74bb8ff35'] : $this->getServiceLocator_B5ba0537461d59f5f994c8c74bb8ff35Service()) && false ?: '_'};
        }, 'AppBundle\\Controller\\Admin\\UserController::prePersistUsersEntity' => function () {
            return ${($_ = isset($this->services['service_locator.40ab8eb65fa46813665f8d3ddd462e65']) ? $this->services['service_locator.40ab8eb65fa46813665f8d3ddd462e65'] : $this->getServiceLocator_40ab8eb65fa46813665f8d3ddd462e65Service()) && false ?: '_'};
        }, 'AppBundle\\Controller\\Admin\\UserController::preUpdateUsersEntity' => function () {
            return ${($_ = isset($this->services['service_locator.40ab8eb65fa46813665f8d3ddd462e65']) ? $this->services['service_locator.40ab8eb65fa46813665f8d3ddd462e65'] : $this->getServiceLocator_40ab8eb65fa46813665f8d3ddd462e65Service()) && false ?: '_'};
        }, 'AppBundle\\Controller\\Blog\\ArticleController::showAction' => function () {
            return ${($_ = isset($this->services['service_locator.76de279f0b43d5be7d66f4ddfbf0e7df']) ? $this->services['service_locator.76de279f0b43d5be7d66f4ddfbf0e7df'] : $this->getServiceLocator_76de279f0b43d5be7d66f4ddfbf0e7dfService()) && false ?: '_'};
        }, 'AppBundle\\Controller\\ContactController::newAction' => function () {
            return ${($_ = isset($this->services['service_locator.b5ba0537461d59f5f994c8c74bb8ff35']) ? $this->services['service_locator.b5ba0537461d59f5f994c8c74bb8ff35'] : $this->getServiceLocator_B5ba0537461d59f5f994c8c74bb8ff35Service()) && false ?: '_'};
        })));
    }

    /**
     * Gets the private 'argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getArgumentResolver_SessionService()
    {
        return $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getArgumentResolver_VariadicService()
    {
        return $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /**
     * Gets the private 'assetic.asset_factory' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, $this, $this->getParameterBag(), ($this->targetDirs[3].'/app/../web'), true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the private 'autowired.AppBundle\Entity\Article' shared autowired service.
     *
     * @return \AppBundle\Entity\Article
     */
    protected function getAutowired_AppBundle_Entity_ArticleService()
    {
        return $this->services['autowired.AppBundle\Entity\Article'] = new \AppBundle\Entity\Article();
    }

    /**
     * Gets the private 'autowired.AppBundle\Entity\User' shared autowired service.
     *
     * @return \AppBundle\Entity\User
     */
    protected function getAutowired_AppBundle_Entity_UserService()
    {
        return $this->services['autowired.AppBundle\Entity\User'] = new \AppBundle\Entity\User();
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService($lazyLoad = true)
    {
        return $this->services['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('A5leulq5Ok', 0, 'aVuXo-pYTJ8-fvl80Bg7l+', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_ValidatorService($lazyLoad = true)
    {
        return $this->services['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('8xAE0qlAkk', 0, 'aVuXo-pYTJ8-fvl80Bg7l+', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        return $this->services['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(${($_ = isset($this->services['monolog.logger.console']) ? $this->services['monolog.logger.console'] : $this->get('monolog.logger.console', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, $this->targetDirs[3], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->getSecurity_Access_AuthenticatedVoterService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->getSecurity_Access_RoleHierarchyVoterService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->getSecurity_Access_ExpressionVoterService()) && false ?: '_'};
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_user.user_provider.username' shared service.
     *
     * @return \FOS\UserBundle\Security\UserProvider
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider(${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->get('fos_user.user_manager')) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = ${($_ = isset($this->services['fos_user.util.email_canonicalizer']) ? $this->services['fos_user.util.email_canonicalizer'] : $this->get('fos_user.util.email_canonicalizer')) && false ?: '_'};

        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the private 'fos_user.util.password_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->services['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->services['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        return $this->services['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access.role_hierarchy_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter
     */
    protected function getSecurity_Access_RoleHierarchyVoterService()
    {
        return $this->services['security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.main']) ? $this->services['security.authentication.provider.dao.main'] : $this->getSecurity_Authentication_Provider_Dao_MainService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : $this->getSecurity_Authentication_Provider_Anonymous_MainService()) && false ?: '_'};
        }, 2), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_MainService()
    {
        return $this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('59ad006d3b5be3.92558083');
    }

    /**
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_MainService()
    {
        return $this->services['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['fos_user.user_provider.username']) ? $this->services['fos_user.user_provider.username'] : $this->getFosUser_UserProvider_UsernameService()) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, 'main', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'security.authentication.session_strategy' shared service.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->registerListener('main', '/user/logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()
    {
        return $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/');
    }

    /**
     * Gets the private 'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_A64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60dbService()
    {
        return $this->services['security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/');
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }

    /**
     * Gets the private 'security.user_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->services['security.user_value_resolver'] = new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'});
    }

    /**
     * Gets the private 'service_locator.40ab8eb65fa46813665f8d3ddd462e65' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_40ab8eb65fa46813665f8d3ddd462e65Service()
    {
        return $this->services['service_locator.40ab8eb65fa46813665f8d3ddd462e65'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('user' => function () {
            $f = function (\AppBundle\Entity\User $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.AppBundle\Entity\User']) ? $this->services['autowired.AppBundle\Entity\User'] : $this->getAutowired_AppBundle_Entity_UserService()) && false ?: '_'});
        }));
    }

    /**
     * Gets the private 'service_locator.76de279f0b43d5be7d66f4ddfbf0e7df' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_76de279f0b43d5be7d66f4ddfbf0e7dfService()
    {
        return $this->services['service_locator.76de279f0b43d5be7d66f4ddfbf0e7df'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('article' => function () {
            $f = function (\AppBundle\Entity\Article $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.AppBundle\Entity\Article']) ? $this->services['autowired.AppBundle\Entity\Article'] : $this->getAutowired_AppBundle_Entity_ArticleService()) && false ?: '_'});
        }, 'mailer' => function () {
            return ${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->get('swiftmailer.mailer.default', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        }));
    }

    /**
     * Gets the private 'service_locator.b5ba0537461d59f5f994c8c74bb8ff35' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_B5ba0537461d59f5f994c8c74bb8ff35Service()
    {
        return $this->services['service_locator.b5ba0537461d59f5f994c8c74bb8ff35'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('mailer' => function () {
            return ${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->get('swiftmailer.mailer.default', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        }));
    }

    /**
     * Gets the private 'service_locator.e64d23c3bf770e2cf44b71643280668d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()
    {
        return $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('esi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.esi']) ? $this->services['fragment.renderer.esi'] : $this->get('fragment.renderer.esi')) && false ?: '_'};
        }, 'hinclude' => function () {
            return ${($_ = isset($this->services['fragment.renderer.hinclude']) ? $this->services['fragment.renderer.hinclude'] : $this->get('fragment.renderer.hinclude')) && false ?: '_'};
        }, 'inline' => function () {
            return ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'};
        }, 'ssi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.ssi']) ? $this->services['fragment.renderer.ssi'] : $this->get('fragment.renderer.ssi')) && false ?: '_'};
        }));
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'sonata.block.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->add('sonata.block.service.container', 'sonata.block.service.container', array());
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', array());
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', array());
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', array());
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', array());
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', array());
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', array(0 => 'admin'));
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', array());
        $instance->add('sonata.admin.block.stats', 'sonata.admin.block.stats', array());

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.
     *
     * @return \Swift_Events_SimpleEventDispatcher
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'}, __DIR__);
    }

    /**
     * Gets the private 'validator.validator_factory' shared service.
     *
     * @return \Symfony\Component\Validator\ContainerConstraintValidatorFactory
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Sonata\\CoreBundle\\Validator\\InlineValidator' => function () {
            return ${($_ = isset($this->services['sonata.admin.validator.inline']) ? $this->services['sonata.admin.validator.inline'] : $this->get('sonata.admin.validator.inline')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->get('validator.email')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'sonata.admin.validator.inline' => function () {
            return ${($_ = isset($this->services['sonata.admin.validator.inline']) ? $this->services['sonata.admin.validator.inline'] : $this->get('sonata.admin.validator.inline')) && false ?: '_'};
        }, 'sonata.core.validator.inline' => function () {
            return ${($_ = isset($this->services['sonata.core.validator.inline']) ? $this->services['sonata.core.validator.inline'] : $this->get('sonata.core.validator.inline')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        })));
    }

    /**
     * Gets the private 'vich_uploader.metadata_reader' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\MetadataReader
     */
    protected function getVichUploader_MetadataReaderService()
    {
        $a = new \Vich\UploaderBundle\Metadata\Driver\FileLocator(array());

        $b = new \Metadata\MetadataFactory(new \Vich\UploaderBundle\Metadata\Driver\ChainDriver(array(0 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}), 1 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a), 2 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a))), 'Metadata\\ClassHierarchyMetadata', true);
        $b->setCache(new \Metadata\Cache\FileCache((__DIR__.'/vich_uploader')));

        return $this->services['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }

    /**
     * Gets the private 'vich_uploader.property_mapping_factory' shared service.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingFactory
     */
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        return $this->services['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, ${($_ = isset($this->services['vich_uploader.metadata_reader']) ? $this->services['vich_uploader.metadata_reader'] : $this->getVichUploader_MetadataReaderService()) && false ?: '_'}, array('article_thumbnail' => array('uri_prefix' => '/uploads/thumbnails', 'upload_destination' => ($this->targetDirs[3].'/app/../web/uploads/thumbnails'), 'namer' => array('service' => NULL, 'options' => NULL), 'directory_namer' => array('service' => NULL, 'options' => NULL), 'delete_on_remove' => true, 'delete_on_update' => true, 'inject_on_load' => false, 'db_driver' => 'orm')), '_name');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'database_path' => false,
        'session.save_path' => false,
        'assetic.read_from' => false,
        'assetic.write_to' => false,
        'vich_uploader.mappings' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
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
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ),
                'AsseticBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/assetic-bundle'),
                    'namespace' => 'Symfony\\Bundle\\AsseticBundle',
                ),
                'SonataCoreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle'),
                    'namespace' => 'Sonata\\CoreBundle',
                ),
                'SonataBlockBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle'),
                    'namespace' => 'Sonata\\BlockBundle',
                ),
                'KnpMenuBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ),
                'SonataDoctrineORMAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle'),
                    'namespace' => 'Sonata\\DoctrineORMAdminBundle',
                ),
                'SonataAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle'),
                    'namespace' => 'Sonata\\AdminBundle',
                ),
                'EasyAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle'),
                    'namespace' => 'JavierEguiluz\\Bundle\\EasyAdminBundle',
                ),
                'IvoryCKEditorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle'),
                    'namespace' => 'Ivory\\CKEditorBundle',
                ),
                'FOSUserBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ),
                'CocurSlugifyBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/cocur/slugify/src/Bridge/Symfony'),
                    'namespace' => 'Cocur\\Slugify\\Bridge\\Symfony',
                ),
                'VichUploaderBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/vich/uploader-bundle'),
                    'namespace' => 'Vich\\UploaderBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
                'WebServerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebServerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
            ); break;
            case 'database_path': $value = ($this->targetDirs[2].'/data/data.sqlite'); break;
            case 'session.save_path': $value = ($this->targetDirs[2].'/sessions/dev'); break;
            case 'assetic.read_from': $value = ($this->targetDirs[3].'/app/../web'); break;
            case 'assetic.write_to': $value = ($this->targetDirs[3].'/app/../web'); break;
            case 'vich_uploader.mappings': $value = array(
                'article_thumbnail' => array(
                    'uri_prefix' => '/uploads/thumbnails',
                    'upload_destination' => ($this->targetDirs[3].'/app/../web/uploads/thumbnails'),
                    'namer' => array(
                        'service' => NULL,
                        'options' => NULL,
                    ),
                    'directory_namer' => array(
                        'service' => NULL,
                        'options' => NULL,
                    ),
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'EasyAdminBundle' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\EasyAdminBundle',
                'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'CocurSlugifyBundle' => 'Cocur\\Slugify\\Bridge\\Symfony\\CocurSlugifyBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'symfony',
            'database_user' => 'symfony',
            'database_password' => 'symfony',
            'mailer_transport' => 'smtp',
            'mailer_host' => 'smtp.sendgrid.net',
            'mailer_user' => 'apikey',
            'mailer_password' => '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',
            'secret' => 'a0fd7edcc632d620f50bd3db5dddd6f1f6005e62',
            'locale' => 'en',
            'app.path.article_thumbnail' => '/uploads/thumbnails',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'a0fd7edcc632d620f50bd3db5dddd6f1f6005e62',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => -1,
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => (__DIR__.'/assetic/routing.yml'),
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => 'bootstrap_3_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(

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
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'smtp.sendgrid.net',
            'swiftmailer.mailer.default.transport.smtp.username' => 'apikey',
            'swiftmailer.mailer.default.transport.smtp.password' => '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',
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
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
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
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
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'MonologBundle',
                4 => 'SwiftmailerBundle',
                5 => 'DoctrineBundle',
                6 => 'SensioFrameworkExtraBundle',
                7 => 'AppBundle',
                8 => 'AsseticBundle',
                9 => 'SonataCoreBundle',
                10 => 'SonataBlockBundle',
                11 => 'KnpMenuBundle',
                12 => 'SonataDoctrineORMAdminBundle',
                13 => 'SonataAdminBundle',
                14 => 'EasyAdminBundle',
                15 => 'IvoryCKEditorBundle',
                16 => 'FOSUserBundle',
                17 => 'CocurSlugifyBundle',
                18 => 'VichUploaderBundle',
                19 => 'DebugBundle',
                20 => 'WebProfilerBundle',
                21 => 'SensioDistributionBundle',
                22 => 'SensioGeneratorBundle',
                23 => 'WebServerBundle',
                24 => 'DoctrineFixturesBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.core.form.mapping.type' => array(

            ),
            'sonata.core.form.mapping.extension' => array(

            ),
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => array(
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ),
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'templates' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(

            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                ),
            ),
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'KnpMenuBundle::menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'array' => 'SonataAdminBundle:CRUD:list_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:list_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:list_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:list_email.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:list_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:list_html.html.twig',
                    ),
                    'show' => array(
                        'array' => 'SonataAdminBundle:CRUD:show_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:show_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:show_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:show_email.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:show_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:show_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:show_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:show_html.html.twig',
                    ),
                ),
                'form' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig',
                ),
                'filter' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig',
                ),
            ),
            'sonata.admin.twig.extension.x_editable_type_mapping' => array(
                'choice' => 'select',
                'boolean' => 'select',
                'text' => 'text',
                'textarea' => 'textarea',
                'html' => 'textarea',
                'email' => 'email',
                'string' => 'text',
                'smallint' => 'text',
                'bigint' => 'text',
                'integer' => 'number',
                'decimal' => 'number',
                'currency' => 'number',
                'percent' => 'number',
                'url' => 'url',
                'date' => 'date',
            ),
            'sonata.admin.configuration.global_search.empty_boxes' => 'show',
            'sonata.admin.configuration.templates' => array(
                'user_block' => 'SonataAdminBundle:Core:user_block.html.twig',
                'add_block' => 'SonataAdminBundle:Core:add_block.html.twig',
                'layout' => 'SonataAdminBundle::standard_layout.html.twig',
                'ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
                'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig',
                'search' => 'SonataAdminBundle:Core:search.html.twig',
                'list' => 'SonataAdminBundle:CRUD:list.html.twig',
                'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig',
                'show' => 'SonataAdminBundle:CRUD:show.html.twig',
                'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig',
                'edit' => 'SonataAdminBundle:CRUD:edit.html.twig',
                'preview' => 'SonataAdminBundle:CRUD:preview.html.twig',
                'history' => 'SonataAdminBundle:CRUD:history.html.twig',
                'acl' => 'SonataAdminBundle:CRUD:acl.html.twig',
                'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig',
                'action' => 'SonataAdminBundle:CRUD:action.html.twig',
                'select' => 'SonataAdminBundle:CRUD:list__select.html.twig',
                'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig',
                'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig',
                'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig',
                'delete' => 'SonataAdminBundle:CRUD:delete.html.twig',
                'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig',
                'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig',
                'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig',
                'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig',
                'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig',
                'outer_list_rows_tree' => 'SonataAdminBundle:CRUD:list_outer_rows_tree.html.twig',
                'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                'pager_links' => 'SonataAdminBundle:Pager:links.html.twig',
                'pager_results' => 'SonataAdminBundle:Pager:results.html.twig',
                'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig',
                'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig',
                'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig',
                'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig',
                'button_create' => 'SonataAdminBundle:Button:create_button.html.twig',
                'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig',
                'button_history' => 'SonataAdminBundle:Button:history_button.html.twig',
                'button_list' => 'SonataAdminBundle:Button:list_button.html.twig',
                'button_show' => 'SonataAdminBundle:Button:show_button.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(

            ),
            'sonata.admin.configuration.dashboard_groups' => array(

            ),
            'sonata.admin.configuration.dashboard_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'settings' => array(

                    ),
                    'type' => 'sonata.admin.block.admin_list',
                    'roles' => array(

                    ),
                ),
            ),
            'sonata.admin.configuration.sort_admins' => false,
            'sonata.admin.configuration.breadcrumbs' => array(
                'child_admin_route' => 'edit',
            ),
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.information' => array(

            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(

                ),
                'excludes' => array(

                ),
                'implements' => array(

                ),
                'extends' => array(

                ),
                'instanceof' => array(

                ),
                'uses' => array(

                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.configuration.show.mosaic.button' => true,
            'sonata.admin.configuration.translate_group_label' => false,
            'easyadmin.config' => array(
                'entities' => array(
                    'Article' => array(
                        'controller' => 'AppBundle\\Controller\\Admin\\ArticleController',
                        'class' => 'AppBundle\\Entity\\Article',
                        'list' => array(
                            'fields' => array(
                                0 => 'id',
                                1 => 'title',
                                2 => 'slug',
                                3 => 'user',
                                4 => 'date',
                                5 => array(
                                    'property' => 'image',
                                    'type' => 'image',
                                    'base_path' => '/uploads/thumbnails',
                                ),
                            ),
                        ),
                        'form' => array(
                            'fields' => array(
                                0 => 'title',
                                1 => 'category',
                                2 => array(
                                    'property' => 'imageFile',
                                    'type' => 'file',
                                ),
                                3 => array(
                                    'property' => 'content',
                                    'type' => 'ckeditor',
                                ),
                            ),
                        ),
                        'name' => 'Article',
                    ),
                    'Contact' => array(
                        'class' => 'AppBundle\\Entity\\Contact',
                        'form' => array(
                            'fields' => array(
                                0 => 'name',
                                1 => 'email',
                                2 => array(
                                    'property' => 'message',
                                    'type' => 'ckeditor',
                                ),
                            ),
                        ),
                        'name' => 'Contact',
                    ),
                    'Category' => array(
                        'class' => 'AppBundle\\Entity\\Category',
                        'form' => array(
                            'fields' => array(
                                0 => 'name',
                            ),
                        ),
                        'name' => 'Category',
                    ),
                    'User' => array(
                        'controller' => 'AppBundle\\Controller\\Admin\\UserController',
                        'class' => 'AppBundle\\Entity\\User',
                        'name' => 'User',
                    ),
                    'Comment' => array(
                        'class' => 'AppBundle\\Entity\\Comment',
                        'form' => array(
                            'fields' => array(
                                0 => 'email',
                                1 => 'ip',
                                2 => 'title',
                            ),
                        ),
                        'name' => 'Comment',
                    ),
                ),
                'design' => array(
                    'assets' => array(
                        'css' => array(

                        ),
                        'js' => array(

                        ),
                        'favicon' => array(
                            'path' => 'favicon.ico',
                            'mime_type' => 'image/x-icon',
                        ),
                    ),
                    'theme' => 'default',
                    'color_scheme' => 'dark',
                    'brand_color' => '#205081',
                    'form_theme' => array(
                        0 => '@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig',
                    ),
                    'menu' => array(

                    ),
                ),
                'site_name' => 'EasyAdmin',
                'formats' => array(
                    'date' => 'Y-m-d',
                    'time' => 'H:i:s',
                    'datetime' => 'F j, Y H:i',
                ),
                'disabled_actions' => array(

                ),
                'translation_domain' => 'messages',
                'list' => array(
                    'actions' => array(

                    ),
                    'max_results' => 15,
                ),
                'edit' => array(
                    'actions' => array(

                    ),
                ),
                'new' => array(
                    'actions' => array(

                    ),
                ),
                'show' => array(
                    'actions' => array(

                    ),
                    'max_results' => 10,
                ),
            ),
            'easyadmin.cache.dir' => (__DIR__.'/easy_admin'),
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'AppBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'apikey' => 'apikey',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'apikey' => 'apikey',
            ),
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'vich_uploader.default_filename_attribute_suffix' => '_name',
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'console.command.ids' => array(
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'console.command.symfony_bundle_webserverbundle_command_serverruncommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstartcommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstopcommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand',
            ),
            'sonata.core.form.types' => array(
                0 => 'AppBundle\\Form\\ArticleType',
                1 => 'AppBundle\\Form\\CommentType',
                2 => 'AppBundle\\Form\\ContactType',
                3 => 'form.type.form',
                4 => 'form.type.choice',
                5 => 'form.type.entity',
                6 => 'sonata.core.form.type.array',
                7 => 'sonata.core.form.type.boolean',
                8 => 'sonata.core.form.type.collection',
                9 => 'sonata.core.form.type.translatable_choice',
                10 => 'sonata.core.form.type.date_range',
                11 => 'sonata.core.form.type.datetime_range',
                12 => 'sonata.core.form.type.date_picker',
                13 => 'sonata.core.form.type.datetime_picker',
                14 => 'sonata.core.form.type.date_range_picker',
                15 => 'sonata.core.form.type.datetime_range_picker',
                16 => 'sonata.core.form.type.equal',
                17 => 'sonata.core.form.type.color_selector',
                18 => 'sonata.block.form.type.block',
                19 => 'sonata.block.form.type.container_template',
                20 => 'sonata.admin.form.type.admin',
                21 => 'sonata.admin.form.type.model_choice',
                22 => 'sonata.admin.form.type.model_list',
                23 => 'sonata.admin.form.type.model_reference',
                24 => 'sonata.admin.form.type.model_hidden',
                25 => 'sonata.admin.form.type.model_autocomplete',
                26 => 'sonata.admin.form.type.collection',
                27 => 'sonata.admin.doctrine_orm.form.type.choice_field_mask',
                28 => 'sonata.admin.form.filter.type.number',
                29 => 'sonata.admin.form.filter.type.choice',
                30 => 'sonata.admin.form.filter.type.default',
                31 => 'sonata.admin.form.filter.type.date',
                32 => 'sonata.admin.form.filter.type.daterange',
                33 => 'sonata.admin.form.filter.type.datetime',
                34 => 'sonata.admin.form.filter.type.datetime_range',
                35 => 'easyadmin.form.type',
                36 => 'easyadmin.form.type.autocomplete',
                37 => 'easyadmin.form.type.divider',
                38 => 'easyadmin.form.type.section',
                39 => 'easyadmin.form.type.group',
                40 => 'ivory_ck_editor.form.type',
                41 => 'fos_user.username_form_type',
                42 => 'fos_user.profile.form.type',
                43 => 'fos_user.registration.form.type',
                44 => 'fos_user.change_password.form.type',
                45 => 'fos_user.resetting.form.type',
                46 => 'vich_uploader.form.type.file',
                47 => 'vich_uploader.form.type.image',
            ),
            'sonata.core.form.type_extensions' => array(
                0 => 'form.type_extension.form.http_foundation',
                1 => 'form.type_extension.form.validator',
                2 => 'form.type_extension.repeated.validator',
                3 => 'form.type_extension.submit.validator',
                4 => 'form.type_extension.upload.validator',
                5 => 'form.type_extension.csrf',
                6 => 'sonata.admin.form.extension.field',
                7 => 'sonata.admin.form.extension.field.mopa',
                8 => 'sonata.admin.form.extension.choice',
                9 => 'easyadmin.form.type.extension',
            ),
        );
    }
}
