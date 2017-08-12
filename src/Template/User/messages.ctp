
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix userProfile">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="btn-group" role="group" aria-label="...">
          
           <!-- Button Links -->
		  <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'profile'))?>" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i>Profile</a> 

          <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'index'))?>" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Listed Products</a>
	
          <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'messages'))?>" class="btn btn-default active"><i class="fa fa-list" aria-hidden="true"></i>Order History</a>
		  
		  <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'orderRequests'))?>" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Order Requests</a>
        
		</div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="innerWrapper">
          <div class="orderBox">
            <h4>All Orders</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Receiver's User ID</th>
					<th>Receiver's Email</th>
					<th>Product ID</th>
					<th>Title</th>
					<th>Media Type</th>
                    <th>Total Price</th>
					<th>Sample </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($orders as $order){
			 $file_path = dirname($_SERVER['SCRIPT_NAME'])."/uploads/thumbnails/".$order->media_item->file_path;
			    echo '<tr>
						<td>'. $order->receiver . '</td>
						<td>'. $order->registered_user->email . '</td>
						<td>'. $order->media_items_id .'</td>
						<td>'. $order->media_item->title .'</td>
						<td>'. $order->media_item->media_type .'</td>
						<td>'. $order->media_item->price . '</td>
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

