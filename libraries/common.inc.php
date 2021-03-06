<?php
/**
 * Common stuff required by all scripts.
 * MUST be included in every script.
 */

/**
 * Block attempts to directly run this script
 */
if (getcwd() == dirname(__FILE__)) {
    die('Attack stopped');
}

/**
 * Protect against possible exploits - there is no need to have so much variables
 */
if (count($_REQUEST) > 1000) {
    die('Possible exploit');
}

/**
 * For verification in every script.
 */
define('TU_HAA', true);

/**
 * Used to generate the page
 */
require_once 'libraries/Response.class.php';
/**
 * Contains functions common to all scripts.
 */
require_once 'libraries/core.lib.php';
/**
 * Main interface class for all database interactions.
 */
require_once 'libraries/DatabaseInterface.class.php';
/**
 * Global DBI class instance.
 */
$GLOBALS['dbi'] = new HAA_DatabaseInterface();

?>