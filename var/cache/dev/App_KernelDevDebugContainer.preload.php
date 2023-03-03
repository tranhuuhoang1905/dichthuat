<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerMlllSLE\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerMlllSLE/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerMlllSLE/getValidator_ExpressionService.php';
require __DIR__.'/ContainerMlllSLE/getValidator_EmailService.php';
require __DIR__.'/ContainerMlllSLE/getValidator_BuilderService.php';
require __DIR__.'/ContainerMlllSLE/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerMlllSLE/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerMlllSLE/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerMlllSLE/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerMlllSLE/getTranslatorService.php';
require __DIR__.'/ContainerMlllSLE/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerMlllSLE/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerMlllSLE/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerMlllSLE/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerMlllSLE/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerMlllSLE/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerMlllSLE/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerMlllSLE/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerMlllSLE/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerMlllSLE/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerMlllSLE/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerMlllSLE/getSession_FactoryService.php';
require __DIR__.'/ContainerMlllSLE/getServicesResetterService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_HelperService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_Authenticator_FormLogin_MainService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerMlllSLE/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerMlllSLE/getSecrets_VaultService.php';
require __DIR__.'/ContainerMlllSLE/getRouting_LoaderService.php';
require __DIR__.'/ContainerMlllSLE/getPropertyAccessorService.php';
require __DIR__.'/ContainerMlllSLE/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerMlllSLE/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerMlllSLE/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerMlllSLE/getForm_TypeExtension_Upload_ValidatorService.php';
require __DIR__.'/ContainerMlllSLE/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerMlllSLE/getForm_TypeExtension_Form_TransformationFailureHandlingService.php';
require __DIR__.'/ContainerMlllSLE/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerMlllSLE/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerMlllSLE/getForm_Type_FormService.php';
require __DIR__.'/ContainerMlllSLE/getForm_Type_EntityService.php';
require __DIR__.'/ContainerMlllSLE/getForm_Type_ColorService.php';
require __DIR__.'/ContainerMlllSLE/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerMlllSLE/getForm_ServerParamsService.php';
require __DIR__.'/ContainerMlllSLE/getForm_RegistryService.php';
require __DIR__.'/ContainerMlllSLE/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerMlllSLE/getErrorControllerService.php';
require __DIR__.'/ContainerMlllSLE/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerMlllSLE/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerMlllSLE/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerMlllSLE/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerMlllSLE/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerMlllSLE/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerMlllSLE/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerMlllSLE/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerMlllSLE/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerMlllSLE/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerMlllSLE/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerMlllSLE/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerMlllSLE/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerMlllSLE/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerMlllSLE/getCache_SystemClearerService.php';
require __DIR__.'/ContainerMlllSLE/getCache_SystemService.php';
require __DIR__.'/ContainerMlllSLE/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerMlllSLE/getCache_AppClearerService.php';
require __DIR__.'/ContainerMlllSLE/getCache_AppService.php';
require __DIR__.'/ContainerMlllSLE/getTemplateControllerService.php';
require __DIR__.'/ContainerMlllSLE/getRedirectControllerService.php';
require __DIR__.'/ContainerMlllSLE/getWordsRepositoryService.php';
require __DIR__.'/ContainerMlllSLE/getUserRepositoryService.php';
require __DIR__.'/ContainerMlllSLE/getTranslationWorkRepositoryService.php';
require __DIR__.'/ContainerMlllSLE/getPostRepositoryService.php';
require __DIR__.'/ContainerMlllSLE/getLanguagesRepositoryService.php';
require __DIR__.'/ContainerMlllSLE/getUserTypeService.php';
require __DIR__.'/ContainerMlllSLE/getUserRolesTypeService.php';
require __DIR__.'/ContainerMlllSLE/getRegistrationFormTypeService.php';
require __DIR__.'/ContainerMlllSLE/getUserControllerService.php';
require __DIR__.'/ContainerMlllSLE/getRegistrationControllerService.php';
require __DIR__.'/ContainerMlllSLE/getLoginControllerService.php';
require __DIR__.'/ContainerMlllSLE/getHoangTestControllerService.php';
require __DIR__.'/ContainerMlllSLE/getApiControllerService.php';
require __DIR__.'/ContainerMlllSLE/getAdminControllerService.php';
require __DIR__.'/ContainerMlllSLE/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerMlllSLE/get_ServiceLocator_WZHTTuQService.php';
require __DIR__.'/ContainerMlllSLE/get_ServiceLocator_EYJavx9Service.php';
require __DIR__.'/ContainerMlllSLE/get_ServiceLocator_Ch4JgvlService.php';
require __DIR__.'/ContainerMlllSLE/get_ServiceLocator_UDgw6OlService.php';
require __DIR__.'/ContainerMlllSLE/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerMlllSLE/get_ServiceLocator_GNc8e5BService.php';
require __DIR__.'/ContainerMlllSLE/get_ServiceLocator_FKYJyvXService.php';
require __DIR__.'/ContainerMlllSLE/get_ServiceLocator_7SHqXyWService.php';
require __DIR__.'/ContainerMlllSLE/get_ServiceLocator_4MF6DUvService.php';
require __DIR__.'/ContainerMlllSLE/get_ServiceLocator__Ae5NXwService.php';
require __DIR__.'/ContainerMlllSLE/get_Container_Private_ValidatorService.php';
require __DIR__.'/ContainerMlllSLE/get_Container_Private_TwigService.php';
require __DIR__.'/ContainerMlllSLE/get_Container_Private_SessionService.php';
require __DIR__.'/ContainerMlllSLE/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerMlllSLE/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerMlllSLE/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerMlllSLE/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerMlllSLE/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\AdminController';
$classes[] = 'App\Controller\ApiController';
$classes[] = 'App\Controller\HoangTestController';
$classes[] = 'App\Controller\LoginController';
$classes[] = 'App\Controller\RegistrationController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Form\RegistrationFormType';
$classes[] = 'App\Form\UserRolesType';
$classes[] = 'App\Form\UserType';
$classes[] = 'App\Repository\LanguagesRepository';
$classes[] = 'App\Repository\PostRepository';
$classes[] = 'App\Repository\TranslationWorkRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Repository\WordsRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Core\Security';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/twig/f5/f5fdfaf20f3f7a9f25e0c4ef8fc74de9266def8c73fffbadb61ed4aa0969605a.php';
require_once __DIR__.'/twig/ad/ad88c7b4902120e2f2fe3a69981658b90b4b0f568180e89eb09764355855def4.php';
require_once __DIR__.'/twig/f4/f4fa46680d701e87749c9a2c1870c7775c68edcb2b047a771ea9dd034f95994e.php';
require_once __DIR__.'/twig/5b/5b6bcb05e5cc7ca36eb51ea72226a792d1a76b858887910b778d09b39c792cc9.php';
require_once __DIR__.'/twig/97/97d0663aca30b3e028fca106de07286e532456ce9cc5b1aeaf7c890cbc1408ab.php';
require_once __DIR__.'/twig/c7/c7a7b5c2bf3b1a55266f81c8fce515ed7bc666fedd051e355219ab9d81df3d6c.php';
require_once __DIR__.'/twig/a7/a75edef0a07bbe70662effc965ae50765f0d70eca2257a044d5192609d56013b.php';
require_once __DIR__.'/twig/7f/7fde90f801a84ca15fe9c36e2d8d87da7df47f89d6e6191cea8219f4c4f8d78e.php';
require_once __DIR__.'/twig/b3/b3dce681e6be29314bb33b9f582997e4c15daf33cf4fb16126db3f741a5bd88b.php';
require_once __DIR__.'/twig/77/7736a1e60b80ed08895641f3d99b394ce0292344bf8d953c859a6a14808ce5e1.php';
require_once __DIR__.'/twig/8d/8d34ea9ff6f1a15423a6c13070db81618936be98d009946c5b6694d34a68f82f.php';
require_once __DIR__.'/twig/7b/7bc7c22dd452d65bedd19bb66b1e30931893a835a778df58710a58167edfa2f3.php';
require_once __DIR__.'/twig/fe/feddff725b4cb28c31b084b23723e5d739498c958ee9aef8d3e3628561b55ef6.php';
require_once __DIR__.'/twig/b9/b9cfdce8f94a6b74e423270a5720263ecbc942b39342bdcda82b932aec3ca806.php';
require_once __DIR__.'/twig/aa/aa62ca705195c35ae3014900376b7c990bbaa722bb3f2f13e1bef306512a2559.php';
require_once __DIR__.'/twig/0f/0f47502e817ff0863ef0b73e37c6b24f96f9971ea0c61ef6d99aede3bd220001.php';
require_once __DIR__.'/twig/f9/f970797f457a213969e13d364b73e43b23f53ba1c6eb26494c3ba327e7329f53.php';
require_once __DIR__.'/twig/89/89ca7ee1df5fc10219aa71023b4bfe058dab9aaf729ec236f9acf349bd1906cf.php';
require_once __DIR__.'/twig/89/89d44f8cb1ab5eec63217473f55c3cb40d9a767a64b4151304457efc6833847c.php';
require_once __DIR__.'/twig/a4/a48d69e0e12dc14e92cca00654d96433deb5dc696c545f78f2b227b9048e67c7.php';
require_once __DIR__.'/twig/6a/6a94f669edfa31672c1448c348df1ce7b208839f5a821f60a2766b000121f728.php';
require_once __DIR__.'/twig/dd/ddce7f937202d87770d79e0d9fbbbcda813671fc4dec04780d609da2d21efc8e.php';
require_once __DIR__.'/twig/9f/9f66acd44b2af73180ce7ce02b0f7381744e976a33005e67db882416435fef4a.php';
require_once __DIR__.'/twig/1d/1dca67e63aad3f1512fbac49b820cf44491e73826b62869f53ba2a42d209acae.php';
require_once __DIR__.'/twig/f6/f6b44ec1c68346014c4da52e5f8c31f98050bfaf0370a4f04d3dfb0d5e33f7d6.php';
require_once __DIR__.'/twig/e2/e2958749d721843f83be1a245254f3e873e4aac1c9f87fe9f4a3e32360d453ed.php';
require_once __DIR__.'/twig/6a/6a64d06a770e9a2407eeb2153ef0554500a285cd90bef3dea81efb2482a655fd.php';
require_once __DIR__.'/twig/5e/5eb711bf1dbf981f32c4ebf51c4b59906c91310b42071d28738630dd9819c875.php';
require_once __DIR__.'/twig/61/61ec7cfe405df39a9e418280043acca0fdb2203b49b8cfc595061e40eb6c7f4c.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Symfony\\Component\\Routing\\Annotation\\Route';
$classes[] = 'Symfony\\Component\\Validator\\Mapping\\ClassMetadata';
$classes[] = 'Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form';
$preloaded = Preloader::preload($classes, $preloaded);
