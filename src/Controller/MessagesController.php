<?php 
/*
	Handles the Messages page
*/
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class MessagesController extends AppController{
	
	public function index(){
		//get id of logged in user
		$user_id = $this->Auth->user('id');
		
		$messages  = $this->Messages->find('all')->where(['Messages.id' => $user_id]);
		//send data to index.ctp
		$this->set(compact('messages'));
		$this->set('id', $user_id);
	}
	
}




