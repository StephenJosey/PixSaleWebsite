<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix logIn">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading"><h3>log in</h3></div>
          <div class="panel-body">
            <form action="" method="POST" role="form">
              <div class="form-group">
                <label for="">Enter Username</label>
                <input type="text" class="form-control" name="username">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="pass">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
              <button type="submit" class="btn btn-primary btn-block">log in</button>
              <?= '<a data-dismiss="modal" data-toggle="modal" href="#signup" style = "padding-top:20px;"><span style = "color:#337ab7 !important;">No account? Click to register.</span></a>' ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>