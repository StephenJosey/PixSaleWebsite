<?php
namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController {
	public function about() {
            $this->set("title", "About");
	}
        public function stephen() {
            $this->set("title", "About - Stephen");
        }
<<<<<<< HEAD
				public function ryan() {
					$this->set("title", "About - Ryan");
				}
        public function index() {
            $this->set("title", "Home");
        }
=======
>>>>>>> 3891a643b064c1d1c8ecf3a49c043e809c50311e
}
?>
