<?php

namespace Sphp;

use Sphp\Core\Configuration;
/**
 * SPHP frameworks folder's root
 */
const SPH_DIR = __DIR__;

Configuration::useDomain("manual")->set("SPHP_DIR", __DIR__);
//Configuration::setSphpRoot(__DIR__, Configuration::httpHost());

define('Sphp\PDO_SESSIONING', __DIR__ . "/php/components/sessioning.php");

//define('Sphp\PHP_PACKAGES', SPH_DIR . "/php/packages");
//define('Sphp\SPH_PACKAGE', PHP_PACKAGES . "/php/sph");
define('Sphp\LOCALE_PATH', __DIR__ . "/locale");

const DEFAULT_DOMAIN = "Sphp.Defaults";

/**
 * Http root folder path
 */
const HTTP_ROOT = "http://playground.samiholck.com/";

namespace Sphp\js;

const FOUNDATION_FOLDER = "sphp/js/vendor/foundation/";

define('Sphp\js\ROOT_PATH', "sphp/js/");
define('Sphp\js\VENDOR_PATH', "sphp/js/vendor/");
define('Sphp\js\SPH_ALL_PATH', "sphp/js/sph.all.js");
define('Sphp\js\APP_PATH', "sphp/js/app/");
/**
 * path to the sph functions
 */
//define('Sphp\SPH_FUNCTIONS_PATH', \Sphp\SPH_DIR . "/php/functions/");
/**
 * path to the error log file
 */
define('Sphp\ERROR_LOG_PATH', \Sphp\SPH_DIR . "/errors.log");


define('Sphp\Images\SCALER', \Sphp\HTTP_ROOT . "sphp/image/thumb.php");

/**
 * applicationConstants.php
 *
 * (c) Sami Holck, 2007, 2008, 2009, 2010, 2011, 2012
 */
######################################################################
# NOTE! Do not modify these unless you truly know what you are doing #
######################################################################
/**
 * PDO database constants
 */

namespace Sphp\Db;

const PDO_DNS = "mysql:host=192.168.10.208;port=3306;dbname=sphp;charset=utf8";
const PDO_SU_USERNAME = "sphp_su";
const PDO_SU_PASSWORD = "o5Qen58&";
const PDO_USERNAME = "sphp_framework";
const PDO_PASSWORD = "Vxr79s?8";
$dbParams = array(
    'driver' => 'pdo_mysql',
    'user' => 'sphp_framework',
    'password' => 'Vxr79s?8',
    'host' => '192.168.10.208;port=3306',
    'charset' => 'utf8',
    'dbname' => 'sphp',
    'driverOptions' => [1002 => 'SET NAMES utf8']
);
namespace Sphp\Images;

define('Sphp\Images\CACHE', \Sphp\SPH_DIR . "/image/cache");
define('Sphp\Images\CACHE_HTTP', \Sphp\HTTP_ROOT . "sphp/image/cache");
define('Sphp\Images\IMAGE_APP', \Sphp\HTTP_ROOT . "sphp/image/image.php");
//const RESIZE = 0b1;			//1
//const SCALE = 0b10;			//2
//const SCALE_TO_FIT = 0b100;	//4

