<?php 
/*
	Handles the Messages page
*/
namespace App\Controller;

use App\Controller\AppController;


class UserController extends AppController{
	
	public function index(){
		//get id of logged in user
		$user_id = $this->Auth->user('id');
		$this->loadModel('Messages');
		$this->loadModel('MediaItems');
		$messages  = $this->Messages->find('all')->where(['Messages.id' => $user_id]);
		$products = $this->MediaItems->find('all')->where(['MediaItems.registered_user_id' => $user_id]);
		//send data to index.ctp
		$this->set(compact('messages'));
		$this->set(compact('products'));
		$this->set('id', $user_id);
	}
	
}




