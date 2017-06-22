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
        public function youssef() {
            $this->set("title", "About - Youssef");
        }
        public function index() {
            $this->set("title", "Home");
        }
}
?>