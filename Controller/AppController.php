<?php
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
/*
	var $helpers = array('Facebook.Facebook');
	var $components = array('Session', 'Auth', 'Facebook.Connect');
*/

	var $components = array('Session', 'Auth');


	function beforeFilter() {
		$this->set('user', $this->Auth->user());
		//$this->set('facebook_user', $this->Connect->user()); // can set other fields here
	}
}