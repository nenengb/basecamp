
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
<?php if ((int) $this->id > 0) { ?>
            <li><a href="<?= base_url() ?>dashboard" class="nav-link">Dashboard</a></li>
<?php } ?>
            <li><a href="#features" class="nav-link">Benefits</a></li>
            <li><a href="#about" class="nav-link">About</a></li>
            <li><a href="#contact">Contact Us</a></li>

<?php
  if (!(int) $this->id > 0) {
    echo '<li><button href="'. base_url() .'login" class="btn btn-warning btn-sm navbar-btn"><a href="'. base_url() .'auth/login">Sign In</a></button></li>';
  }
  else{
    echo '<li><button href="'. base_url() .'login" class="btn btn-warning btn-sm navbar-btn"><a href="'. base_url() .'auth/logout">Logout</a></button></li>';
  }
?>
          </ul>
        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container -->
    </nav> <!-- /.navbar -->

    <div id="top" class="jumbotron">
      <div class="container">
        <h1>Welcome to Basecamp!</h1>
        <h2>Last year alone, Basecamp helped over 285,000 companies finish more than 2,000,000 projects.</h2>
        <?php if (!(int) $this->id > 0) { ?>
          <p><a class="btn btn-primary btn-lg" href="<?= base_url() ?>auth/signup">Sign Up Today <span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
        <?php } ?>
      </div> <!-- /.container -->
    </div> <!-- /.jumbotron -->

    <div class="container">
      <h3 id="features" class="subhead">Features</h3>
      <div class="row benefits">
        <div class="col-md-4 col-sm-6 benefit">
          <div class="benefit-ball">
            <span class="glyphicon glyphicon-thumbs-up"></span>
          </div>
          <h3>Highly recommended</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div> <!-- /.benefit -->

        <div class="col-md-4 col-sm-6 benefit">
          <div class="benefit-ball">
            <span class="glyphicon glyphicon-ok-circle"></span>
          </div>
          <h3>A track record you can trust</h3>
          <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        </div> <!-- /.benefit -->

        <div class="col-md-4 col-sm-6 benefit">
          <div class="benefit-ball">
            <span class="glyphicon glyphicon-phone"></span>
          </div>
          <h3>On the Mac, PC, iPhone/iPad, Android and via email</h3>
          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu.</p>
        </div> <!-- /.benefit -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->

    <div class="container-alternate">
      <div class="container">
        <h3 id="about" class="subhead">About Us</h3>
        <div class="row about">
          <div class="col-md-10 col-md-offset-1 text-center">
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
              nonummy nibh euismod tincidunt ut laoreet dolore magna.  Ut wisi
              enim ad minim veniam, quis nostrud exerci tation ullamcorper
              suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
              autem vel eum iriure dolor in hendrerit in vulputate velit esse
              molestie consequat, vel illum dolore eu feugiat nulla facilisis at
              vero eros et accumsan.
            </p>
            <p>
              Nam liber tempor cum soluta nobis eleifend option congue nihil
              imperdiet doming id quod mazim placerat facer possim assum. Typi non
              habent claritatem insitam; est usus legentis in iis qui facit eorum
              claritatem. Investigationes demonstraverunt lectores legere me lius
              quod ii legunt saepius.
            </p>
          </div> <!-- /.col-md-10 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div> <!-- /.container-alternate -->
