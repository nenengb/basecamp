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
            
            <li><a class="navbar-brand nav-link" href="#top">Don't have account?</a></li>
            <li><button class="btn btn-warning btn-sm navbar-btn"><a href="<?= base_url() ?>auth/signup">Sign Up</a></button></li>
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
            <?php if ($_POST) { echo "<p style='color:red'>Invalid Login!</p>"; } ?>
            <div class="container">
              <div class="row colored">
                <div class="contcustom">
                   <span class="glyphicon glyphicon-user">
                   <h2>Log In</h2>          
                      <div class="txts">
                        
                        <form method="POST" action="<?= base_url() ?>auth/login">
                          <input type="email" required name="email" placeholder="email" value="<?php if($_POST){echo $_POST['email'];}?>">
                          <input type="password" required name="password" placeholder="password">
                          <button type="submit" class="btn btn-default wide"><span class="glyphicon glyphicon-ok"></span></button>
                        </form>
                    </div>         
                </div>
              </div>
            </div>

        <br><br><br><br><br><br><br><br>
          </div> <!-- /.col-md-10 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div> <!-- /.container-alternate -->
