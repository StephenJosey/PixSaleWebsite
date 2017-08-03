
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix userProfile">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="btn-group" role="group" aria-label="...">
         <!-- Button Links -->
		  <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'profile'))?>" class="btn btn-default active"><i class="fa fa-user" aria-hidden="true"></i>Profile</a> 

          <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'index'))?>" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Listed Products</a>
	
          <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'messages'))?>" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Order History</a>
		 
		 <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'orderRequests'))?>" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Order Requests</a>
	
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="innerWrapper profile">
          <div class="orderBox">
            <h4>profile</h4>
          </div>
          <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-12">
              <div class="thumbnail">
                <img src="img/products/profile/profile-image.jpg" alt="profile-image">
                
              </div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-12">
                <form class="form-horizontal">
		    <div class="form-group">
                    <label for="" class="col-md-2 col-sm-3 control-label">Username</label>
                    <div class="col-md-10 col-sm-9">
                      <input type="text" class="form-control" value =<?= $registered_user->username ?> readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 col-sm-3 control-label">First Name</label>
                    <div class="col-md-10 col-sm-9">
                      <input type="text" class="form-control" value =<?= $registered_user->first_name ?> readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 col-sm-3 control-label">Last Name</label>
                    <div class="col-md-10 col-sm-9">
                      <input type="text" class="form-control" value =<?= $registered_user->last_name ?> readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 col-sm-3 control-label">Email Address</label>
                    <div class="col-md-10 col-sm-9">
                      <input type="email" class="form-control" value =<?= $registered_user->email ?> readonly>
                    </div>
                  </div>
                
             
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>