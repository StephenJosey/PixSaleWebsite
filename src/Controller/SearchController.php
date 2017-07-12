<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class SearchController extends AppController {

    public function index() {
        $this->set("title", "Search");
        $searchForm = "";
        $items = TableRegistry::get('Media_Items');
        if ($this->request->is('post')) {
            if(!empty($this->request->data['search'])){
            	$search = $this->request->data['search'];
            	$items = $items->find('all')->where(['Media_Items.title LIKE' => "%".$search."%"]);
            }
            else {
            	$items = $items->find('all');
            }
        }
        else {
        	$items = $items->find('all');
        }
        $this->set('items', $items);
        $this->set('searchForm', $searchForm);
    }

}

?>