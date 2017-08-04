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
        if ($this->Auth->user('id') == null) {
            return $this->redirect(['controller' => 'Login', 'action' => 'index']);
        }
        if ($this->request->is('post')) {
            if(!empty($this->request->data['file']['name'])){
                $fileName = $this->request->data['file']['name'];
                $uploadPath = 'uploads/mediaitems/';
				$fileName =  preg_replace('/\s/', '-', $fileName);
                $uploadFile = $uploadPath.$fileName;
                echo $fileName;
                if(move_uploaded_file($this->request->data['file']['tmp_name'],$uploadFile)){
                    $this->Flash->success(__('File has been uploaded and inserted successfully.'));
                    $item = new MediaItem([
                        'title' => $this->request->data['title'],
                        'price' => $this->request->data['price'],
                        'media_type' => 'image',
                        'description' => $this->request->data['description'],
                        'category_id' => $this->request->data['category'],
                        'file_path' => $fileName,
                        'registered_user_id' => $this->Auth->user('id')
                    ]);
                    TableRegistry::get('Media_Items')->save($item);
					//Make thumbnail
					if(is_file($uploadFile)){
						$thumb_file_name = 'uploads/thumbnails/' . $fileName;
						list($width_orig, $height_orig, $image_type) = getimagesize($uploadFile);
						if($width_orig){
							switch($image_type){
								case 2: $src_im = imagecreatefromjpeg($uploadFile); break; // if jpeg file
                                case 3: $src_im = imagecreatefrompng($uploadFile); break; // if png file 								
							}
							$thumb_width = 300;
							$thumb_height = 300;
							$new_image = imagecreatetruecolor($thumb_width,$thumb_height);
							
							if($new_image){
								imagecopyresampled($new_image, $src_im,0,0,0,0,$thumb_width,$thumb_height, $width_orig, $height_orig);
							    switch($image_type){
									case 2: imagejpeg($new_image, $thumb_file_name, 100); break;
									case 3: imagepng($new_image, $thumb_file_name, 100); break;
								}
							}
						}
						
					}
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
