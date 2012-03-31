<?php
class UsersController extends AppController {
    var $name = 'Users';
	var $helpers    = array('Html', 'Form');

	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login', 'index', 'signup', 'logout');
		$this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'home');
	} 

    function index() {
		         
    }
     
    function login() {
         
    }
     
    function logout() {
    	$this->Auth->logout();
        $this->Session->destroy(); // need to explictly destroy session to kill facebook_user
		$this->redirect(array('controller' => 'users', 'action' => 'login'));
    }

	function signup() {
		if (!empty($this->data)) {
			if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['password_confirm'])) {
				$this->User->create();
				$this->User->save($this->data);
				$this->Auth->login($this->data);
				$this->redirect(array('controller' => 'pages', 'action' => 'home'));
			}
		}
	}
}