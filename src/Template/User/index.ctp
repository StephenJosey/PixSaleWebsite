<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 

  </head>

  <body class="body-wrapper">

    <div class="main-wrapper">

      

      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix userProfile">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="btn-group" role="group" aria-label="...">
                
	               <!-- Button Links -->
				 
                <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'profile'))?>" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i>Profile</a> 
			
                <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'index'))?>" class="btn btn-default active"><i class="fa fa-list" aria-hidden="true"></i>Listed Products</a>
				
                <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'messages'))?>" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Order History</a>
				
				<a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'orderRequests'))?>" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Order Requests</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="innerWrapper">
                <div class="orderBox">
                  <h4>Your Products</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Product ID</th>
						  <th>Title</th>
                          <th>Total Price</th>
						  <th>Product</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
						foreach($products as $product){
						 $file_path = dirname($_SERVER['SCRIPT_NAME'])."/uploads/thumbnails/".$product->file_path;
						    echo '<tr>
                          <td>'. $product->id . '</td>
						  <td>'. $product->title . '</td>
                          <td> $ '.$product->price. '</td>
						  <td> <img src ="'. (string)$file_path . '" class = "img-thumbnail img-fluid" style = "height:100px;width:150px;"></td> 
                        </tr>';
						}
						?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      




  </body>
</html>
