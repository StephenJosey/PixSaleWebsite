<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\View\Helper\UrlHelper;

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
        if ($this->request->is('post')) 
        {
            $search = $this->request->data['search'];
            $category = $this->request->data['category'];
            $image = $this->request->data['image'] == 'N' ? '' : $this->request->data['image'];
            $video = $this->request->data['video'] == 'N' ? '' : $this->request->data['video'];
            $audio = $this->request->data['audio'] =='N' ? '' : $this->request->data['audio'];
            if(!empty($search) || !empty($category) || !empty($image) || !empty($video) || !empty($audio)) {
                $searchWhere = (!$search) ? '1' : '%'.$search.'%';
                $search = (!$search) ? '1' : 'title LIKE';
                $categoryWhere = (!$category) ? '1' : $category;
                $category = (!$category) ? '1' : 'category_id';
                $imageWhere = (!$image) ? '1' : $image;
                $mediaType = (!empty($image) || !empty($video) || !empty($audio) ) ? 'media_type' : '1';
                $image = (!$image) ? '1' : 'media_type';
                $videoWhere = (!$video) ? '1' : $video;
                $audioWhere = (!$audio) ? '1' : $audio;
                $items = $items->find('all')->where([$search => $searchWhere, 
                    $category => $categoryWhere,
                    'OR' => [ [$mediaType => $imageWhere],
                              [$mediaType => $audioWhere],
                              [$mediaType => $videoWhere],
                    ]]);
            }
             {
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

    public function singleProduct(int $id) {
        $this->set("title", "View Product");
        $items = TableRegistry::get('Media_Items');
        $item = $items->get($id);

        $this->set('item', $item);

        if ($this->request->is('post')) {
            if (!$this->Auth->user()) {
                $this->Flash->set("You must log in before purchasing an item.");
                return $this->redirect(['controller' => 'Login', 'action' => 'index']);
            }
            $seller = TableRegistry::get('Registered_Users')->get($item->registered_user_id);
            $messageTable = TableRegistry::get('Messages');
            $message = $messageTable->newEntity();
            $message->sender = $this->Auth->user('id');
            $message->receiver = $seller->id;
            $message->media_items_id = $id;
            $message->message = $this->Auth->user('username') + " wants to buy this item!";
            if ($messageTable->save($message)) {
                $this->Flash->success("You've successfully purchased that item!");
                return $this->redirect(['controller' => 'Search', 'action' => 'index']);
            } else {
                $this->Flash->warning("Failed to purchase item.");
            }
        }
    }



    
}

?>