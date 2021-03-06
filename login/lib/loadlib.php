<?php
/**
 * Add all libraries to the autoloader
 *
 * @category LoveMachine
 * @package  Core
 * @author   LoveMachine Inc. <all@lovemachineinc.com>
 * @license  Copyright (c) 2009-2010, LoveMachine Inc. All Rights Reserved
 * @version  SVN: $Id: loadlib.php 53 2010-06-09 13:43:43Z yani $
 * @link     http://www.lovemachineinc.com
 */
/**
 * @var string The directory, where the library resides.
 */
$libDir = dirname(__FILE__);
/**
 * Loader
 */
require_once $libDir . '/Loader.php';
/**
 * Loader_Exception
 */
require_once $libDir . '/Loader/Loader_Exception.php';

// Controller
Loader::registerClass('Controller', $libDir . '/Controller.php');
// Controller Action
Loader::registerClass('Controller_Action', $libDir . '/Controller_Action.php');
// CURLHandler
Loader::registerClass('CURLHandler', $libDir . '/CURLHandler.php');
// DataObject
Loader::registerClass('DataObject', $libDir . '/DataObject.php');
// functions
Loader::registerClass('Functions', $libDir . '/Functions.php');
// Request
Loader::registerClass('Request', $libDir . '/Request.php');
// Response
Loader::registerClass('Response', $libDir . '/Response.php');
// AppAuth
Loader::registerClass('AppAuth', $libDir . '/AppAuth.php');
//Authentication_Handler
Loader::registerClass('Authentication_Handler', $libDir . '/Authentication_Handler.php');
//Ldap_Authentication_Handler
Loader::registerClass('Ldap_Authentication_Handler', $libDir . '/Ldap_Authentication_Handler.php');
//Db_Password_Authentication_Handler
Loader::registerClass('Db_Password_Authentication_Handler', $libDir . '/Db_Password_Authentication_Handler.php');


Loader::splRegister();

unset($libDir);
