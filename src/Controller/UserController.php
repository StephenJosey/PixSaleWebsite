<?php 
/*
	Handles the Messages page
*/
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


/*
	+-----Peer Review------+
	Great use of comments to show what is being handled.
	Spaces between if statements and () and {} would be better.
	Everything is self-explanatory. I understood what the code was doing by skimming through it.

*/

class UserController extends AppController{
	
	/*
	     Handles the landing page
	*/
	public function index(){
		//get id of logged in user
		if($this->Auth->user('id')){
			$user_id = $this->Auth->user('id');
			$this->loadModel('Messages');
			$this->loadModel('MediaItems');
			$messages  = $this->Messages->find('all')->where(['Messages.id' => $user_id]);
			$products = $this->MediaItems->find('all', array('fields' => array('id','title','price','file_path')))->where(['MediaItems.registered_user_id' => $user_id]);
			//send data to index.ctp
			$this->set(compact('messages'));
			$this->set(compact('products'));
			$this->set('id', $user_id);
		}else{
			 return $this->redirect(['controller' => 'login', 'action' => 'index']);
		}	
	
	
		
	}
	
	/*
	     Handles the profile page
	*/
	public function profile(){
		if($this->Auth->user('id')){
			$user_id = $this->Auth->user('id');
			$this->loadModel('RegisteredUsers');
			$registered_user = $this->RegisteredUsers->find('all', array('fields' => array('username','email','first_name','last_name')))
		                   ->where(['RegisteredUsers.id' => $user_id])->first();
			$this->set(compact('registered_user'));
		}else{
			return $this->redirect(['controller' => 'login', 'action' => 'index']);
		}
		
	}
	
	/*
	   Handles the order history page
	*/
	public function messages(){
		if($this->Auth->user('id')){
			$user_id = $this->Auth->user('id');
		
			$messages= TableRegistry::get('Messages');
			$message = $messages->find();
			$orders = $messages->find()->select([
											  'Messages.id',
											  'Messages.receiver',
											  'Messages.media_items_id'
											])
									->contain([
											'MediaItems' => [
												'fields' => [
												    'MediaItems.file_path',
											        'MediaItems.price',
													'MediaItems.media_type',
													'MediaItems.title'
												]
											
											]	
									])->contain([
										'RegisteredUsers' => [
											'fields' => ['RegisteredUsers.email']
										]
										])
									->where(['Messages.sender' => $user_id]);
								
							
			$this->set(compact('orders'));
		}else{
			return $this->redirect(['controller' => 'login', 'action' => 'index']);
		}
	}
	/*
		Handles the order requests page
	*/
	public function orderRequests(){
		if($this->Auth->user('id')){
			$user_id = $this->Auth->user('id');
		
			$messages= TableRegistry::get('Messages');
			$message = $messages->find();
			$order_requests = $messages->find()->select([
											  'Messages.id',
											  'Messages.sender',
											  'Messages.media_items_id'
											])
									->contain([
											'MediaItems' => [
												'fields' => [
												    'MediaItems.file_path',
											        'MediaItems.price',
													'MediaItems.media_type',
													'MediaItems.title'
												]
											
											]	
									])->contain([
										'RegisteredUsers' => [
											'fields' => ['RegisteredUsers.email']
										]
										])
									->where(['Messages.receiver' => $user_id]);								
							
			$this->set(compact('order_requests'));
		}else{
			return $this->redirect(['controller' => 'login', 'action' => 'index']);
		}
		
		
	}
}




