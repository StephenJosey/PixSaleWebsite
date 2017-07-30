<!DOCTYPE html>
<html lang="en">
  <head>

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
				<a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'profile'))?>" class="btn btn-default active"><i class="fa fa-user" aria-hidden="true"></i>Profile</a> 
			
                <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'index'))?>" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Your Products</a>
				
                <a href="<?= $this->Url->build(array('controller' => 'user', 'action' => 'messages'))?>" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Orders</a>
				
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

    
      <!-- COPY RIGHT -->
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 col-xs-12">
            </div>
            <div class="col-sm-5 col-xs-12">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- LOGIN MODAL -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">log in</h3>
          </div>
          <div class="modal-body">
            <form action="" method="POST" role="form">
              <div class="form-group">
                <label for="">Enter Email</label>
                <input type="text" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
              <button type="submit" class="btn btn-primary btn-block">log in</button>
              <button type="button" class="btn btn-link btn-block">Forgot Password?</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- SIGN UP MODAL -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Create an account</h3>
          </div>
          <div class="modal-body">
            <form action="" method="POST" role="form">
              <div class="form-group">
                <label for="">Enter Email</label>
                <input type="email" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.js"></script>
    <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
    <script src="plugins/countdown/jquery.syotimer.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
