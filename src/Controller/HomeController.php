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
		public function ryan() {
			$this->set("title", "About - Ryan");
		}
        public function index() {
            $this->set("title", "Home");
        }
        public function manuel() {
            $this->set("title", "About - Manuel");
        }
}
?>
