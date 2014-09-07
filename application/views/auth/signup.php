    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand nav-link" href="<?= base_url() ?>"><span class="glyphicon glyphicon-tower"></span>  Grem & Kat</a>
        </div> <!-- /.navbar-header -->

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            
            <li><a class="navbar-brand nav-link" href="#top">Already have account?</a></li>
            <li><button class="btn btn-warning btn-sm navbar-btn"><a href="<?= base_url() ?>auth/login">Log In</a></button></li>
          </ul>
        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container -->
    </nav> <!-- /.navbar -->



    <div class="container-alternate">
      <div class="container">
        <h3 id="about" class="subhead"></h3>
        <h2 id="about" class="subhead"> </h2>
        <div class="row about">
          <div class="col-md-10 col-md-offset-1 text-center">
            <br><br><br>
 			<?php if (isset($error)) { echo "<p style='color:red'>Sorry! Email address already exist.</p>"; } ?>
            <div class="container">
              <div class="row colored">
                <div class="contcustom">
                   <span class="glyphicon glyphicon-user">
                   <h2>Sign Up</h2>          
                      <div>
                        <form method="POST" action="<?= base_url() ?>auth/signup">
	                       <input type="text" placeholder="fullname" name="fullname" required value="<?php if(isset($fullname)){echo $_POST['fullname'];}?>">
	                       <input type="text" placeholder="company or organization (optional)" name="company" value="<?php if(isset($company)){echo $_POST['company'];}?>">
	                       <input type="email" placeholder="email" name="email" required value="<?php if(isset($email)){echo $_POST['email'];}?>">
	                       <input type="password" placeholder="password" name="password" required value="<?php if(isset($password)){echo $_POST['password'];}?>">
	                       <button class="btn btn-default wide"><span class="glyphicon glyphicon-plus"></span></button>
                  	    </form>
                    </div>         
                </div>
              </div>
            </div>

<br><br><br><br>
          </div> <!-- /.col-md-10 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div> <!-- /.container-alternate -->
