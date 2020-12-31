<?php

use Lightroom\Adapter\{Configuration\ConfigurationSocketHandler,
    ClassManager,
    Configuration\Interfaces\ConfigurationSocketInterface};
use function Lightroom\Functions\GlobalVariables\var_set;


// @var ConfigurationSocketHandler $socket
$socket = var_set('socket', ClassManager::singleton(ConfigurationSocketHandler::class));

/**
 * @method ConfigurationSocketInterface configurationSocket
 * 
 * Build configuration socket setting
 * We are linking this method via ConfigurationSocketHandler
 * They read a class, and class a method that in turn pushes the return value the Lightroom\Adapter\Configuration\Environment class.
 * You can access this configurations via env(string name, mixed value);
 */
/** @var mixed $config */
$config->configurationSocket([
	'bootstrap'  	 => $socket->setClass(Lightroom\Packager\Moorexa\BootloaderConfiguration::class)->setMethod('loadBootstrap'),
	'finder'	     => $socket->setClass(Lightroom\Packager\Moorexa\BootloaderConfiguration::class)->setMethod('loadFinder'),
]);


// ============== 
// Actual configuration starts here
// ==============

// Configure app
$config->bootstrap ([

	/*
	 ***************************
	 * 
	 * @config.app.url (default = '') 
	 * info: sets the default all url
	*/ 
	"app.url" => '',

	/*
	 ***************************
	 * 
	 * @config.coming-soon (default = false) 
	 * info: generates a coming soon template
	*/ 
	"coming-soon" => false,

	/*
	 ***************************
	 * 
	 * @config.default.env
	 * info: path to the default environment yaml file
	*/ 
	"default.env" => get_path(SOURCE_BASE_PATH, '/environment.yaml'),

	/*
	 ***************************
	 * 
	 * @config.maintenance-mode (default = false)
	 * info: generates a maintenance mode template
	*/
	"maintenance-mode" => false,


	/*
	 ***************************
	 * 
	 * @config.timezone (default = false) 
	 * info: set default timezone for application
	*/
	"timezone" => 'GMT',


	/*
	 ***************************
	 * 
	 * @config.enable.db.caching (default = true) 
	 * info: enable caching for db update, insert, delete queries
	 * This cached sql queries would be ran during migration 
	*/
	"enable.db.caching" => true,

	
	/*
	 ***************************
	 * 
	 * @config.force.https (default = false) 
	 * info: force https for all route requests.
	 * You could also include paths and separate them with a comma (,)
	 * (*) wildcard also supported.
	 * eg . app/*, *
	*/
	"force.https" => false,


	/*
	 ***************************
	 * 
	 * @config.assist_token 
	 * info: Assist CLI Token for production transactions. like DB migration etc.
	 * You should apply token to this request header 'assist-cli-token'
	*/
	'assist_token' => '070951c70502c79315460e379599161947fda465',

	/*
	 ***************************
	 * 
	 * @config.controller base path (default = PATH_TO_WEB_PLATFORM)
	 * 
	*/
	'controller.base.path' => func()->const('web_platform'),

	/*
	 ***************************
	 * 
	 * @config.controller namespace_prefix (default = '') 
	 * 
	*/
	'controller.namespace_prefix' => '',

	/*
	 ***************************
	 * 
	 * @config.csrf_salt (default = '') 
	 * 
	*/
	'csrf_salt' => 'a7c9164782a0534a50e7f5f6005b0ddfec11d081',
	
	/*
	 ***************************
	 * 
	 * @config.secret_key (default = none) 
	 * info: secret key for encryption open SSL. 
	*/
	'secret_key' => 'de49fa1335e312ddf6ca0959ba25d23751a4bc1e',


	/*
	 ***************************
	 * 
	 * @config.encryption.method (default = AES-256-CBC) 
	 * info: OPENSSL encryption method. 
	*/
	'encryption.method' => 'AES-256-CBC',


	/*
	 ***************************
	 * 
	 * @config.secret_key_salt
	 * info: secret key salt for encryption open SSL. 
	*/
	'secret_key_salt' => '0d0998984e07115606c7505df8912bbbefba8d61',


	/*
	 ***************************
	 * 
	 * @config.webasapi_token (default = none) 
	 * info: web as api token. 
	*/
	'webasapi_token' => '457036b2e4cc7aa1f038decec96740e5',


	/*
	 ***************************
	 * 
	 * @config.sanitize_html (default = true) 
	 * info: allow moorexa to sanitize html. Provides a safer output against injections.
	*/
	'sanitize_html' => true,


	/*
	 ***************************
	 * 
	 * @config.filter-input (default = true) 
	 * info: allow moorexa to filter user input, provides a safer input against injections.
	*/
	'filter-input' => true,

	 
	/*
	 ***************************
	 * 
	 * @config.static_url (default = '') 
	 * info: Cookie free static url for serving static files. eg static.example.com
	*/
	'static_url' => '',


	/*
	 ***************************
	 * 
	 * @config.http_access_control (default = array_config) 
	 * info: Add access control headers
	*/
	'http_access_control' => [
		'Content-Type',
		'X-Api-Token',
		'Api-Request-Token'
		// you can add more here
	],


	/*
	 ***************************
	 * 
	 * @config.controller_config (default = array_config) 
	 * info: Add a default controller config
	*/
	'controller_config' => [
		
	],
	

	/*
	 ***************************
	 * 
	 * @config.debug_mode (default = true) 
	 * info: Turn on | off debug mode
	*/
	'debug_mode' => true,

]);


/*
 ***************************
 * 
 * @config.finder (default = array_option ) 
 * info: set finder configuration for applications.
*/

$config->finder([

	/*
	 ***************************
	 * 
	 * @finder.autoloader (default = array ) 
	 * info: The goal here is to help you register nested folders that acts as a namespace to a file.
	*/
	'autoloader' => [
		// eg. HOME .'/modules/*',
		get_path(func()->const('lab'), '/library/') . '*',
		get_path(func()->const('utility'), '/Classes/') . '*'
	],


	/*
	 ***************************
	 * 
	 * @finder.namespaces (default = array )
	 * info: The goal here is to help the PHP spl_autoload function watch for a pattern in a namespace and load from a registered directory if the file exists.
	*/
	'namespaces' => [
		'Plugin\*'	  			=> get_path(func()->const('plugin'), ''),
		'Moorexa\Events\*'  	=> get_path(func()->const('event'), ''),
		'Resources\*'			=> HOME . '/resources/'
	]
]);
