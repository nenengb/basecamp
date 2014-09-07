
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
            <li><a href="<?= base_url() ?>dashboard" class="nav-link">Dashboard</a></li>
            <li><a href="<?= base_url() ?>#features" class="nav-link">Benefits</a></li>
            <li><a href="<?= base_url() ?>#about" class="nav-link">About</a></li>
            <li><a href="<?= base_url() ?>#contact">Contact Us</a></li>
            <li><button href="<?= base_url() ?>login" class="btn btn-warning btn-sm navbar-btn"><a href="<?= base_url() ?>auth/logout">Logout</a></button></li>
          </ul>
        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container -->
    </nav> <!-- /.navbar -->
<br><br><br><br><br><br><br>
      <div class="row">
        <div class="span12 text-center">
        	<h2>Project Status</h2>
        	<form action="" method="POST">
				<input type="radio" name="status" value="1"<?php if ($status == 1) { echo " checked"; } ?>>Enable<br>
				<input type="radio" name="status" value="0"<?php if ($status == 0) { echo " checked"; } ?>>Disable<br/><br/>
				<button type="submit">Change status</button>
			</form>
        </div>
      </div>
<br><br><br><br><br><br><br><br><br>