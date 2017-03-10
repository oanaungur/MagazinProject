<?php
/*
 * we define action default
 */
$action = 'home';
/*
 * verify if the 'action' resource is present in the url
 * if so, overwrite the default action
 */
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}