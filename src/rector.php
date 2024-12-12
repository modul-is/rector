<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\ClassConstFetch\RenameClassConstFetchRector;
use Rector\Renaming\ValueObject\RenameClassConstFetch;
use Rector\Set\ValueObject\SetList;
use Rector\CodeQuality\Rector\Identical\FlipTypeControlToUseExclusiveTypeRector;


return RectorConfig::configure()
	->withPaths([
		__DIR__ . DIRECTORY_SEPARATOR . 'app'
	])
	->withPhpSets(php83: true)
	->withIndent('	')
	->withSkip([
		FlipTypeControlToUseExclusiveTypeRector::class
	])
	->withSets([
		SetList::CODE_QUALITY
	])
	->withConfiguredRule(RenameClassConstFetchRector::class, [
		new RenameClassConstFetch('Nette\Application\UI\Form', 'FILLED', 'Filled'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'VALID', 'Valid'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'EQUAL', 'Equal'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'NOT_EQUAL', 'NotEqual'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'LENGTH', 'Length'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'MAX_LENGTH', 'MaxLength'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'MIN_LENGTH', 'MinLength'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'EMAIL', 'Email'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'URL', 'Url'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'INTEGER', 'Integer'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'FLOAT', 'Float'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'RANGE', 'Range'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'PATTERN', 'Pattern'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'PATTERN_ICASE', 'PatternInsensitive'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'NUMERIC', 'Numeric'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'MAX_FILE_SIZE', 'MaxFileSize'),
		new RenameClassConstFetch('Nette\Application\UI\Form', 'MAX_POST_SIZE', 'MaxPostSize'),
		new RenameClassConstFetch('Nette\Application\UI\Presenter', 'ACTION_KEY', 'ActionKey'),
		new RenameClassConstFetch('Nette\Application\UI\Presenter', 'DEFAULT_ACTION', 'DefaultAction'),
		new RenameClassConstFetch('Nette\Application\UI\Presenter', 'FLASH_KEY', 'FlashKey'),
		new RenameClassConstFetch('Nette\Application\UI\Presenter', 'INVALID_LINK_EXCEPTION', 'InvalidLinkException'),
		new RenameClassConstFetch('Nette\Application\UI\Presenter', 'INVALID_LINK_SILENT', 'InvalidLinkSilent'),
		new RenameClassConstFetch('Nette\Application\UI\Presenter', 'INVALID_LINK_TEXTUAL', 'InvalidLinkTextual'),
		new RenameClassConstFetch('Nette\Application\UI\Presenter', 'INVALID_LINK_WARNING', 'InvalidLinkWarning'),
		new RenameClassConstFetch('Nette\Application\UI\Presenter', 'PRESENTER_KEY', 'PresenterKey'),
		new RenameClassConstFetch('Nette\Application\UI\Presenter', 'SIGNAL_KEY', 'SignalKey'),
		new RenameClassConstFetch('Nette\Bootstrap\Configurator', 'COOKIE_SECRET', 'CookieSecret'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'ALL', 'All'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'CALLBACKS', 'Callbacks'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'CONSTS', 'Constants'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'EXPIRATION', 'Expire'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'EXPIRE', 'Expire'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'FILES', 'Files'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'ITEMS', 'Items'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'NAMESPACE_SEPARATOR', 'NamespaceSeparator'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'NAMESPACES', 'Namespaces'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'PRIORITY', 'Priority'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'SLIDING', 'Sliding'),
		new RenameClassConstFetch('Nette\Caching\Cache', 'TAGS', 'Tags'),
		new RenameClassConstFetch('Nette\CommandLine\Parser', 'ARGUMENT', 'Argument'),
		new RenameClassConstFetch('Nette\CommandLine\Parser', 'ENUM', 'Enum'),
		new RenameClassConstFetch('Nette\CommandLine\Parser', 'OPTIONAL', 'Optional'),
		new RenameClassConstFetch('Nette\CommandLine\Parser', 'REALPATH', 'RealPath'),
		new RenameClassConstFetch('Nette\CommandLine\Parser', 'REPEATABLE', 'Repeatable'),
		new RenameClassConstFetch('Nette\CommandLine\Parser', 'VALUE', 'Default'),
		new RenameClassConstFetch('Nette\ComponentModel\IComponent', 'NAME_SEPARATOR', 'NameSeparator'),
		new RenameClassConstFetch('Nette\DI\ContainerBuilder', 'THIS_CONTAINER', 'ThisContainer'),
		new RenameClassConstFetch('Nette\DI\ContainerBuilder', 'THIS_SERVICE', 'ThisService'),
		new RenameClassConstFetch('Nette\DI\Definitions\Reference', 'SELF', 'Self'),
		new RenameClassConstFetch('Nette\DI\Extensions\InjectExtension', 'TAG_INJECT', 'TagInject'),
		new RenameClassConstFetch('Nette\Forms\Controls\CsrfProtection', 'PROTECTION', 'Protection'),
		new RenameClassConstFetch('Nette\Forms\Controls\SelectBox', 'VALID', 'Valid'),
		new RenameClassConstFetch('Nette\Forms\Controls\UploadControl', 'VALID', 'Valid'),
		new RenameClassConstFetch('Nette\Forms\Form', 'BLANK', 'Blank'),
		new RenameClassConstFetch('Nette\Forms\Form', 'COUNT', 'Count'),
		new RenameClassConstFetch('Nette\Forms\Form', 'DATA_FILE', 'DataFile'),
		new RenameClassConstFetch('Nette\Forms\Form', 'DATA_KEYS', 'DataKeys'),
		new RenameClassConstFetch('Nette\Forms\Form', 'DATA_LINE', 'DataLine'),
		new RenameClassConstFetch('Nette\Forms\Form', 'DATA_TEXT', 'DataText'),
		new RenameClassConstFetch('Nette\Forms\Form', 'GET', 'Get'),
		new RenameClassConstFetch('Nette\Forms\Form', 'IMAGE', 'Image'),
		new RenameClassConstFetch('Nette\Forms\Form', 'IS_IN', 'IsIn'),
		new RenameClassConstFetch('Nette\Forms\Form', 'IS_NOT_IN', 'IsNotIn'),
		new RenameClassConstFetch('Nette\Forms\Form', 'MAX', 'Max'),
		new RenameClassConstFetch('Nette\Forms\Form', 'MIME_TYPE', 'MimeType'),
		new RenameClassConstFetch('Nette\Forms\Form', 'MIN', 'Min'),
		new RenameClassConstFetch('Nette\Forms\Form', 'NOT_EQUAL', 'NotEqual'),
		new RenameClassConstFetch('Nette\Forms\Form', 'NUMERIC', 'Numeric'),
		new RenameClassConstFetch('Nette\Forms\Form', 'PATTERN', 'Pattern'),
		new RenameClassConstFetch('Nette\Forms\Form', 'PATTERN_ICASE', 'PatternInsensitive'),
		new RenameClassConstFetch('Nette\Forms\Form', 'POST', 'Post'),
		new RenameClassConstFetch('Nette\Forms\Form', 'PROTECTOR_ID', 'ProtectorId'),
		new RenameClassConstFetch('Nette\Forms\Form', 'RANGE', 'Range'),
		new RenameClassConstFetch('Nette\Forms\Form', 'REQUIRED', 'Required'),
		new RenameClassConstFetch('Nette\Forms\Form', 'SUBMITTED', 'Submitted'),
		new RenameClassConstFetch('Nette\Forms\Form', 'TRACKER_ID', 'TrackerId'),
		new RenameClassConstFetch('Nette\Forms\Form', 'VALID', 'Valid'),
		new RenameClassConstFetch('Nette\Http\IRequest', 'DELETE', 'Delete'),
		new RenameClassConstFetch('Nette\Http\IRequest', 'GET', 'Get'),
		new RenameClassConstFetch('Nette\Http\IRequest', 'HEAD', 'Head'),
		new RenameClassConstFetch('Nette\Http\IRequest', 'OPTIONS', 'Options'),
		new RenameClassConstFetch('Nette\Http\IRequest', 'PATCH', 'Patch'),
		new RenameClassConstFetch('Nette\Http\IRequest', 'POST', 'Post'),
		new RenameClassConstFetch('Nette\Http\IRequest', 'PUT', 'Put'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'REASON_PHRASES', 'ReasonPhrases'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S100_CONTINUE', 'S100_Continue'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S101_SWITCHING_PROTOCOLS', 'S101_SwitchingProtocols'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S102_PROCESSING', 'S102_Processing'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S201_CREATED', 'S201_Created'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S202_ACCEPTED', 'S202_Accepted'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S203_NON_AUTHORITATIVE_INFORMATION', 'S203_NonAuthoritativeInformation'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S204_NO_CONTENT', 'S204_NoContent'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S205_RESET_CONTENT', 'S205_ResetContent'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S206_PARTIAL_CONTENT', 'S206_PartialContent'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S207_MULTI_STATUS', 'S207_MultiStatus'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S208_ALREADY_REPORTED', 'S208_AlreadyReported'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S226_IM_USED', 'S226_ImUsed'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S300_MULTIPLE_CHOICES', 'S300_MultipleChoices'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S301_MOVED_PERMANENTLY', 'S301_MovedPermanently'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S302_FOUND', 'S302_Found'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S303_POST_GET', 'S303_PostGet'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S303_SEE_OTHER', 'S303_PostGet'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S304_NOT_MODIFIED', 'S304_NotModified'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S305_USE_PROXY', 'S305_UseProxy'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S307_TEMPORARY_REDIRECT', 'S307_TemporaryRedirect'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S308_PERMANENT_REDIRECT', 'S308_PermanentRedirect'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S400_BAD_REQUEST', 'S400_BadRequest'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S401_UNAUTHORIZED', 'S401_Unauthorized'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S402_PAYMENT_REQUIRED', 'S402_PaymentRequired'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S403_FORBIDDEN', 'S403_Forbidden'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S404_NOT_FOUND', 'S404_NotFound'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S405_METHOD_NOT_ALLOWED', 'S405_MethodNotAllowed'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S406_NOT_ACCEPTABLE', 'S406_NotAcceptable'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S407_PROXY_AUTHENTICATION_REQUIRED', 'S407_ProxyAuthenticationRequired'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S408_REQUEST_TIMEOUT', 'S408_RequestTimeout'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S409_CONFLICT', 'S409_Conflict'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S410_GONE', 'S410_Gone'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S411_LENGTH_REQUIRED', 'S411_LengthRequired'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S412_PRECONDITION_FAILED', 'S412_PreconditionFailed'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S413_REQUEST_ENTITY_TOO_LARGE', 'S413_RequestEntityTooLarge'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S414_REQUEST_URI_TOO_LONG', 'S414_RequestUriTooLong'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S415_UNSUPPORTED_MEDIA_TYPE', 'S415_UnsupportedMediaType'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S416_REQUESTED_RANGE_NOT_SATISFIABLE', 'S416_RequestedRangeNotSatisfiable'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S417_EXPECTATION_FAILED', 'S417_ExpectationFailed'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S421_MISDIRECTED_REQUEST', 'S421_MisdirectedRequest'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S422_UNPROCESSABLE_ENTITY', 'S422_UnprocessableEntity'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S423_LOCKED', 'S423_Locked'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S424_FAILED_DEPENDENCY', 'S424_FailedDependency'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S426_UPGRADE_REQUIRED', 'S426_UpgradeRequired'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S428_PRECONDITION_REQUIRED', 'S428_PreconditionRequired'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S429_TOO_MANY_REQUESTS', 'S429_TooManyRequests'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S431_REQUEST_HEADER_FIELDS_TOO_LARGE', 'S431_RequestHeaderFieldsTooLarge'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S451_UNAVAILABLE_FOR_LEGAL_REASONS', 'S451_UnavailableForLegalReasons'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S500_INTERNAL_SERVER_ERROR', 'S500_InternalServerError'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S501_NOT_IMPLEMENTED', 'S501_NotImplemented'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S502_BAD_GATEWAY', 'S502_BadGateway'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S503_SERVICE_UNAVAILABLE', 'S503_ServiceUnavailable'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S504_GATEWAY_TIMEOUT', 'S504_GatewayTimeout'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S505_HTTP_VERSION_NOT_SUPPORTED', 'S505_HttpVersionNotSupported'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S506_VARIANT_ALSO_NEGOTIATES', 'S506_VariantAlsoNegotiates'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S507_INSUFFICIENT_STORAGE', 'S507_InsufficientStorage'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S508_LOOP_DETECTED', 'S508_LoopDetected'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S510_NOT_EXTENDED', 'S510_NotExtended'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'S511_NETWORK_AUTHENTICATION_REQUIRED', 'S511_NetworkAuthenticationRequired'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'SAME_SITE_LAX', 'SameSiteLax'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'SAME_SITE_NONE', 'SameSiteNone'),
		new RenameClassConstFetch('Nette\Http\IResponse', 'SAME_SITE_STRICT', 'SameSiteStrict'),
		new RenameClassConstFetch('Nette\Mail\Message', 'HIGH', 'High'),
		new RenameClassConstFetch('Nette\Mail\Message', 'LOW', 'Low'),
		new RenameClassConstFetch('Nette\Mail\Message', 'NORMAL', 'Normal'),
		new RenameClassConstFetch('Nette\Neon\Neon', 'CHAIN', 'Chain'),
		new RenameClassConstFetch('Nette\PhpGenerator\ClassType', 'VISIBILITY_PRIVATE', 'VisibilityPrivate'),
		new RenameClassConstFetch('Nette\PhpGenerator\ClassType', 'VISIBILITY_PROTECTED', 'VisibilityProtected'),
		new RenameClassConstFetch('Nette\PhpGenerator\ClassType', 'VISIBILITY_PUBLIC', 'VisibilityPublic'),
		new RenameClassConstFetch('Nette\PhpGenerator\PhpNamespace', 'NAME_CONSTANT', 'NameConstant'),
		new RenameClassConstFetch('Nette\PhpGenerator\PhpNamespace', 'NAME_FUNCTION', 'NameFunction'),
		new RenameClassConstFetch('Nette\PhpGenerator\PhpNamespace', 'NAME_NORMAL', 'NameNormal'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'ARRAY', 'Array'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'BOOL', 'Bool'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'CALLABLE', 'Callable'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'FALSE', 'False'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'FLOAT', 'Float'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'INT', 'Int'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'ITERABLE', 'Iterable'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'MIXED', 'Mixed'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'NEVER', 'Never'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'NULL', 'Null'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'OBJECT', 'Object'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'PARENT', 'Parent'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'SELF', 'Self'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'STATIC', 'Static'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'STRING', 'String'),
		new RenameClassConstFetch('Nette\PhpGenerator\Type', 'VOID', 'Void'),
		new RenameClassConstFetch('Nette\Routing\Route', 'FILTER_IN', 'FilterIn'),
		new RenameClassConstFetch('Nette\Routing\Route', 'FILTER_OUT', 'FilterOut'),
		new RenameClassConstFetch('Nette\Routing\Route', 'FILTER_STRICT', 'FilterStrict'),
		new RenameClassConstFetch('Nette\Routing\Route', 'FILTER_TABLE', 'FilterTable'),
		new RenameClassConstFetch('Nette\Routing\Route', 'PATTERN', 'Pattern'),
		new RenameClassConstFetch('Nette\Routing\Route', 'VALUE', 'Value'),
		new RenameClassConstFetch('Nette\Security\Authenticator', 'FAILURE', 'Failure'),
		new RenameClassConstFetch('Nette\Security\Authenticator', 'IDENTITY_NOT_FOUND', 'IdentityNotFound'),
		new RenameClassConstFetch('Nette\Security\Authenticator', 'INVALID_CREDENTIAL', 'InvalidCredential'),
		new RenameClassConstFetch('Nette\Security\Authenticator', 'NOT_APPROVED', 'NotApproved'),
		new RenameClassConstFetch('Nette\Security\Authorizator', 'ALL', 'All'),
		new RenameClassConstFetch('Nette\Security\Authorizator', 'ALLOW', 'Allow'),
		new RenameClassConstFetch('Nette\Security\Authorizator', 'DENY', 'Deny'),
		new RenameClassConstFetch('Nette\Security\User', 'INACTIVITY', 'LogoutInactivity'),
		new RenameClassConstFetch('Nette\Security\User', 'LOGOUT_INACTIVITY', 'LogoutInactivity'),
		new RenameClassConstFetch('Nette\Security\User', 'LOGOUT_MANUAL', 'LogoutManual'),
		new RenameClassConstFetch('Nette\Security\User', 'MANUAL', 'LogoutManual'),
		new RenameClassConstFetch('Nette\Schema\Message', 'DEPRECATED', 'Deprecated'),
		new RenameClassConstFetch('Nette\Schema\Message', 'FAILED_ASSERTION', 'FailedAssertion'),
		new RenameClassConstFetch('Nette\Schema\Message', 'LENGTH_OUT_OF_RANGE', 'LengthOutOfRange'),
		new RenameClassConstFetch('Nette\Schema\Message', 'MISSING_ITEM', 'MissingItem'),
		new RenameClassConstFetch('Nette\Schema\Message', 'PATTERN_MISMATCH', 'PatternMismatch'),
		new RenameClassConstFetch('Nette\Schema\Message', 'TYPE_MISMATCH', 'TypeMismatch'),
		new RenameClassConstFetch('Nette\Schema\Message', 'UNEXPECTED_ITEM', 'UnexpectedItem'),
		new RenameClassConstFetch('Nette\Schema\Message', 'VALUE_OUT_OF_RANGE', 'ValueOutOfRange'),
		new RenameClassConstFetch('Nette\Utils\Image', 'EMPTY_GIF', 'EmptyGIF'),
		new RenameClassConstFetch('Nette\Utils\Image', oldConstant: 'EXACT', newConstant: 'Cover'),
		new RenameClassConstFetch(oldClass: 'Nette\Utils\Image', oldConstant: 'FILL', newConstant: 'OrBigger'),
		new RenameClassConstFetch(oldClass: 'Nette\Utils\Image', oldConstant: 'FIT', newConstant: 'OrSmaller'),
		new RenameClassConstFetch(oldClass: 'Nette\Utils\Image', oldConstant: 'SHRINK_ONLY', newConstant: 'ShrinkOnly'),
		new RenameClassConstFetch(oldClass: 'Nette\Utils\Image', oldConstant: 'STRETCH', newConstant: 'Stretch'),
		new RenameClassConstFetch(oldClass: 'Tester\Environment', oldConstant: 'COLORS', newConstant: 'VariableColors'),
		new RenameClassConstFetch(oldClass: 'Tester\Environment', oldConstant: 'COVERAGE', newConstant: 'VariableCoverage'),
		new RenameClassConstFetch(oldClass: 'Tester\Environment', oldConstant: 'COVERAGE_ENGINE', newConstant: 'VariableCoverageEngine'),
		new RenameClassConstFetch(oldClass: 'Tester\Environment', oldConstant: 'RUNNER', newConstant: 'VariableRunner'),
		new RenameClassConstFetch(oldClass: 'Tester\Environment', oldConstant: 'THREAD', newConstant: 'VariableThread'),
		new RenameClassConstFetch(oldClass: 'Tracy\Debugger', oldConstant: 'COOKIE_SECRET', newConstant: 'CookieSecret'),
		new RenameClassConstFetch(oldClass: 'Tracy\Debugger', oldConstant: 'DETECT', newConstant: 'Detect'),
		new RenameClassConstFetch(oldClass: 'Tracy\Debugger', oldConstant: 'DEVELOPMENT', newConstant: 'Development'),
		new RenameClassConstFetch(oldClass: 'Tracy\Debugger', oldConstant: 'PRODUCTION', newConstant: 'Production'),
		new RenameClassConstFetch(oldClass: 'Tracy\Debugger', oldConstant: 'VERSION', newConstant: 'Version'),
		new RenameClassConstFetch(oldClass: 'Latte\Engine', oldConstant: 'CONTENT_CSS', newConstant: 'Css'),
		new RenameClassConstFetch(oldClass: 'Latte\Engine', oldConstant: 'CONTENT_HTML', newConstant: 'Html'),
		new RenameClassConstFetch(oldClass: 'Latte\Engine', oldConstant: 'CONTENT_ICAL', newConstant: 'ICal'),
		new RenameClassConstFetch(oldClass: 'Latte\Engine', oldConstant: 'CONTENT_JS', newConstant: 'JavaScript'),
		new RenameClassConstFetch(oldClass: 'Latte\Engine', oldConstant: 'CONTENT_TEXT', newConstant: 'Text'),
		new RenameClassConstFetch(oldClass: 'Latte\Engine', oldConstant: 'CONTENT_XML', newConstant: 'Xml'),
		new RenameClassConstFetch(oldClass: 'Nette\Security\UserStorage', oldConstant: 'LOGOUT_INACTIVITY', newConstant: 'LogoutInactivity'),
		new RenameClassConstFetch(oldClass: 'Nette\Security\UserStorage', oldConstant: 'LOGOUT_MANUAL', newConstant: 'LogoutManual'),
		new RenameClassConstFetch(oldClass: 'Nette\Utils\Image', oldConstant: 'AVIF', newConstant: 'AVIF'),
		new RenameClassConstFetch(oldClass: 'Nette\Utils\Image', oldConstant: 'BMP', newConstant: 'BMP'),
		new RenameClassConstFetch(oldClass: 'Nette\Utils\Image', oldConstant: 'GIF', newConstant: 'GIF'),
		new RenameClassConstFetch(oldClass: 'Nette\Utils\Image', oldConstant: 'JPEG', newConstant: 'JPEG'),
		new RenameClassConstFetch(oldClass: 'Nette\Utils\Image', oldConstant: 'PNG', newConstant: 'PNG'),
		new RenameClassConstFetch(oldClass: 'Nette\Utils\Image', oldConstant: 'WEBP', newConstant: 'WEBP')
	]);
