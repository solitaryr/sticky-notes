<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AdminController' => $baseDir . '/app/controllers/AdminController.php',
    'AjaxController' => $baseDir . '/app/controllers/AjaxController.php',
    'ApiController' => $baseDir . '/app/controllers/ApiController.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'Comment' => $baseDir . '/app/models/Comment.php',
    'ConfigReader' => $baseDir . '/app/commands/ConfigReader.php',
    'ConfigWriter' => $baseDir . '/app/commands/ConfigWriter.php',
    'CreateController' => $baseDir . '/app/controllers/CreateController.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'FeedController' => $baseDir . '/app/controllers/FeedController.php',
    'IPBan' => $baseDir . '/app/models/IPBan.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'ListController' => $baseDir . '/app/controllers/ListController.php',
    'Normalizer' => $vendorDir . '/patchwork/utf8/src/Normalizer.php',
    'Paste' => $baseDir . '/app/models/Paste.php',
    'Revision' => $baseDir . '/app/models/Revision.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Resources/stubs/SessionHandlerInterface.php',
    'SetupController' => $baseDir . '/app/controllers/SetupController.php',
    'ShowController' => $baseDir . '/app/controllers/ShowController.php',
    'Site' => $baseDir . '/app/models/Site.php',
    'Statistics' => $baseDir . '/app/models/Statistics.php',
    'StickyNotesTestCase' => $baseDir . '/app/tests/StickyNotesTestCase.php',
    'StickyNotes\\API' => $baseDir . '/app/lib/API.php',
    'StickyNotes\\Antispam' => $baseDir . '/app/lib/Antispam.php',
    'StickyNotes\\Auth' => $baseDir . '/app/lib/Auth.php',
    'StickyNotes\\Auth\\StickyNotesDBUserProvider' => $baseDir . '/app/lib/auth/StickyNotesDBUserProvider.php',
    'StickyNotes\\Auth\\StickyNotesLDAPUserProvider' => $baseDir . '/app/lib/auth/StickyNotesLDAPUserProvider.php',
    'StickyNotes\\Auth\\StickyNotesOAuthUserProvider' => $baseDir . '/app/lib/auth/StickyNotesOAuthUserProvider.php',
    'StickyNotes\\Cache' => $baseDir . '/app/lib/Cache.php',
    'StickyNotes\\Config' => $baseDir . '/app/lib/Config.php',
    'StickyNotes\\Cookie' => $baseDir . '/app/lib/Cookie.php',
    'StickyNotes\\Cron' => $baseDir . '/app/lib/Cron.php',
    'StickyNotes\\Feed' => $baseDir . '/app/lib/Feed.php',
    'StickyNotes\\Hashing\\HashServiceProvider' => $baseDir . '/app/lib/hashing/HashServiceProvider.php',
    'StickyNotes\\Hashing\\PHPassHasher' => $baseDir . '/app/lib/hashing/PHPassHasher.php',
    'StickyNotes\\Highlighter' => $baseDir . '/app/lib/Highlighter.php',
    'StickyNotes\\Mail' => $baseDir . '/app/lib/Mail.php',
    'StickyNotes\\PHPDiff' => $baseDir . '/app/lib/PHPDiff.php',
    'StickyNotes\\PHPass' => $baseDir . '/app/lib/PHPass.php',
    'StickyNotes\\Redirect' => $baseDir . '/app/lib/Redirect.php',
    'StickyNotes\\Response' => $baseDir . '/app/lib/Response.php',
    'StickyNotes\\Service' => $baseDir . '/app/lib/Service.php',
    'StickyNotes\\Session' => $baseDir . '/app/lib/Session.php',
    'StickyNotes\\Setup' => $baseDir . '/app/lib/Setup.php',
    'StickyNotes\\System' => $baseDir . '/app/lib/System.php',
    'StickyNotes\\View' => $baseDir . '/app/lib/View.php',
    'UnitedPrototype\\GoogleAnalytics\\Campaign' => $vendorDir . '/googleanalytics/GoogleAnalytics/Campaign.php',
    'UnitedPrototype\\GoogleAnalytics\\Config' => $vendorDir . '/googleanalytics/GoogleAnalytics/Config.php',
    'UnitedPrototype\\GoogleAnalytics\\CustomVariable' => $vendorDir . '/googleanalytics/GoogleAnalytics/CustomVariable.php',
    'UnitedPrototype\\GoogleAnalytics\\Event' => $vendorDir . '/googleanalytics/GoogleAnalytics/Event.php',
    'UnitedPrototype\\GoogleAnalytics\\Exception' => $vendorDir . '/googleanalytics/GoogleAnalytics/Exception.php',
    'UnitedPrototype\\GoogleAnalytics\\Internals\\ParameterHolder' => $vendorDir . '/googleanalytics/GoogleAnalytics/Internals/ParameterHolder.php',
    'UnitedPrototype\\GoogleAnalytics\\Internals\\Request\\EventRequest' => $vendorDir . '/googleanalytics/GoogleAnalytics/Internals/Request/EventRequest.php',
    'UnitedPrototype\\GoogleAnalytics\\Internals\\Request\\HttpRequest' => $vendorDir . '/googleanalytics/GoogleAnalytics/Internals/Request/HttpRequest.php',
    'UnitedPrototype\\GoogleAnalytics\\Internals\\Request\\ItemRequest' => $vendorDir . '/googleanalytics/GoogleAnalytics/Internals/Request/ItemRequest.php',
    'UnitedPrototype\\GoogleAnalytics\\Internals\\Request\\PageviewRequest' => $vendorDir . '/googleanalytics/GoogleAnalytics/Internals/Request/PageviewRequest.php',
    'UnitedPrototype\\GoogleAnalytics\\Internals\\Request\\Request' => $vendorDir . '/googleanalytics/GoogleAnalytics/Internals/Request/Request.php',
    'UnitedPrototype\\GoogleAnalytics\\Internals\\Request\\SocialinteractionRequest' => $vendorDir . '/googleanalytics/GoogleAnalytics/Internals/Request/SocialInteractionRequest.php',
    'UnitedPrototype\\GoogleAnalytics\\Internals\\Request\\TransactionRequest' => $vendorDir . '/googleanalytics/GoogleAnalytics/Internals/Request/TransactionRequest.php',
    'UnitedPrototype\\GoogleAnalytics\\Internals\\Util' => $vendorDir . '/googleanalytics/GoogleAnalytics/Internals/Util.php',
    'UnitedPrototype\\GoogleAnalytics\\Internals\\X10' => $vendorDir . '/googleanalytics/GoogleAnalytics/Internals/X10.php',
    'UnitedPrototype\\GoogleAnalytics\\Item' => $vendorDir . '/googleanalytics/GoogleAnalytics/Item.php',
    'UnitedPrototype\\GoogleAnalytics\\Page' => $vendorDir . '/googleanalytics/GoogleAnalytics/Page.php',
    'UnitedPrototype\\GoogleAnalytics\\Session' => $vendorDir . '/googleanalytics/GoogleAnalytics/Session.php',
    'UnitedPrototype\\GoogleAnalytics\\SocialInteraction' => $vendorDir . '/googleanalytics/GoogleAnalytics/SocialInteraction.php',
    'UnitedPrototype\\GoogleAnalytics\\Tracker' => $vendorDir . '/googleanalytics/GoogleAnalytics/Tracker.php',
    'UnitedPrototype\\GoogleAnalytics\\Transaction' => $vendorDir . '/googleanalytics/GoogleAnalytics/Transaction.php',
    'UnitedPrototype\\GoogleAnalytics\\Visitor' => $vendorDir . '/googleanalytics/GoogleAnalytics/Visitor.php',
    'User' => $baseDir . '/app/models/User.php',
    'UserController' => $baseDir . '/app/controllers/UserController.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
);
