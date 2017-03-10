<?php

/*
 * Starts the session and saves the data for later usage
 */

session_start();

/*
 * show php errors
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
 *  connects the app to the db
 */
require_once 'db-connect.php';

/*
 *  detects action and initiates cart
 */
require_once 'action.php';

/*
 *  loads html code 
 */
require_once 'html.php';

/*
 *  disconnect the app from db
 */

require_once 'db-disconnect.php';

