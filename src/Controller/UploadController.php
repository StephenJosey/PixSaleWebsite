<?php

namespace App\Controller;

use App\Controller\AppController;

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
                }else{
					$this->Flash->error(__('Unable to upload file, please try again.'));
				}
                    
				
			}	
        }
		
        $this->set('uploadData', $uploadData);
    }
    
	
}
