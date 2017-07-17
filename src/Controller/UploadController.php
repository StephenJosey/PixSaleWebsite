<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\MediaItem;
use Cake\ORM\TableRegistry;

/* https://www.codexworld.com/handling-file-uploads-cakephp/  */

class UploadController extends AppController
{
	 public function initialize(){
        parent::initialize();
        
        // Include the FlashComponent
        $this->loadComponent('Flash');
        
  
      
    }
    
    public function index(){
        $uploadData = '';
        if ($this->request->is('post')) {
            if(!empty($this->request->data['file']['name'])){
                $fileName = $this->request->data['file']['name'];
                $uploadPath = 'uploads/mediaitems/';
                $uploadFile = $uploadPath.$fileName;
                if(move_uploaded_file($this->request->data['file']['tmp_name'],$uploadFile)){
                    $this->Flash->success(__('File has been uploaded and inserted successfully.'));
                    $item = new MediaItem([
                        'title' => $this->request->data['title'],
                        'price' => $this->request->data['price'],
                        'media_type' => 'image',
                        'description' => $this->request->data['description'],
                        'category_id' => $this->request->data['category'],
                        'file_path' => $this->request->data['file']['name']
                    ]);
                    TableRegistry::get('Media_Items')->save($item);
                }else{
					$this->Flash->error(__('Unable to upload file, please try again.'));
				}
                    
				
			}	
        }
        $categories = TableRegistry::get('Categories');
        $categories = $categories->find('list', array( 
            'fields' => array('id', 'category_name')));
        $this->set(compact('categories'));
		
        $this->set('uploadData', $uploadData);
    }
    
	
}
