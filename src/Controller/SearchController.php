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
            	$type = $this->request->data['type']['name'];
            	echo $type;
            	$items = $items->find('all')->where(['Media_Items.title LIKE' => "%".$search."%", 'Media_Items.media_type' => $type]);
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