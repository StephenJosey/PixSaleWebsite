<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;
/*
	Handles the registration page 
*/

class LoginController extends AppController{
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
		$this->set('title', 'Login');

		if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->Flash->success('Successfully logged in');
                return $this->redirect($this->Auth->redirectUrl()); 
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
	
}