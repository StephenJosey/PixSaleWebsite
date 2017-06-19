<?php 
namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController {
	public function about() {
		$this->set("title", "About");
	}
}



?>