<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;
/*
	Handles the registration page 
*/

class RegistrationController extends AppController{
	//Hashes password.Authentiction uses DefaultPasswordHasher
	//Reference: https://book.cakephp.org/3.0/en/controllers/components/authentication.html#hashing-passwords-for-digest-authentication	
	
	/*
	protected function _setPassword($password){
		if (strlen($password) > 0) {
          return (new DefaultPasswordHasher)->hash($password);
        }
	}
	*/
	
	
	public function index(){
		$this->set('title', 'Registration');
		
		if($this->request->is('post')){
			/*
				Input fields should be named accordingly:
					'username' for username
					'pass' for pass
					'email' for email
					'first_name' for first name
					'last_name' for last name
			*/
			$username = $this->request->data('username'); 
			$password = $this->request->data('password');
			$email = $this->request->data('email');
			$first_name = $this->request->data('first_name');
			$last_name = $this->request->data('last_name');
			
			//Add registered user to database
			$registered_users_table = TableRegistry::get('registered_users');
			
			$registered_user = $registered_users_table->newEntity();
			$registered_user->username = $username;
			$registered_user->pass = $password;
			$registered_user->email = $email;
			$registered_user->first_name = $first_name;
			$registered_user->last_name = $last_name;
			
			//Check if registered user successfully added to database
			if($registered_users_table->save($registered_user)){
				$this->Flash->success("Your account has succesfully been created");
			}else{
				$this->Flash->set('There was an error creating your account');
			}
		}
	}
	
	
	
	
}