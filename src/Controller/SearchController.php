<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class SearchController extends AppController {

    public $paginate = [
        'limit' => 10,
    ];

    public function loadCategories() {
        $categories = TableRegistry::get('Categories');
        $categories = $categories->find('all');
        //$this->set("categories", $categories);
        return $categories;
    }


    public function index() {
        $this->set("title", "Search");
        $searchForm = "";
        $items = TableRegistry::get('Media_Items');
        if ($this->request->is('post')) {
            if(!empty($this->request->data['search'] || !empty($this->request->data['category']))) {
            	$search = $this->request->data['search'];
                $category = $this->request->data['category'];
                if ($category != null) {
                    $items = $items->find('all')->where(['Media_Items.title LIKE' => "%".$search."%", 'Media_Items.category_id' => $category]);
                }
                else {
                    $items = $items->find('all')->where(['Media_Items.title LIKE' => "%".$search."%"]);
                }
            	
            }
            else {
            	$items = $items->find('all');
            }
        }
        else {
        	$items = $items->find('all');
        }
        $items = $this->paginate($items);
        $this->set(compact('items'));
        $this->set('_serialize', ['items']);
        $this->set('searchForm', $searchForm);
        $categories = TableRegistry::get('Categories');
        $categories = $categories->find('list', array( 
            'fields' => array('id', 'category_name')));
        $this->set(compact('categories'));
    }


    
}

?>