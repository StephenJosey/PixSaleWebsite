<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class SearchController extends AppController {

    public function index() {
        $this->set("title", "Search");
        $items = TableRegistry::get('Media_Items');
        $items = $items->find('all');
        $this->set('items', $items);
    }

}

?>