
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





    <div class="container-alternate">
      <div class="container">
        <h3 id="about" class="subhead"></h3>
        <h2 id="about" class="subhead"> </h2>
        <div class="row about">
          <div class="col-md-10 col-md-offset-1 text-center">

            
            <?php 
            if (isset($_GET['error']) && $_GET['error'] == 1) { echo "<p style='color:red'>Sorry! You are not allowed to edit Inactive Projects.</p>"; }
            if (isset($_GET['error']) && $_GET['error'] == 2) { echo "<p style='color:red'>Project not found or you don't have access to that project.</p>"; } 
            ?>
            <!-- <div>
              <span id="searchicon" class="glyphicon glyphicon-search"></span><div id="searchbox"><input id="searchtxt" type="text" class="form-control" placeholder="Jump to a project, label, or search...">
              </div>
            </div>  -->

            <div id="newproj">

              <div>
                <a href="<?= base_url() ?>dashboard/project/add"><span id="plusicon" class="glyphicon glyphicon-plus-sign"></span></s>
                </div>

                <h4><a href="<?= base_url() ?>dashboard/project/add">New Project</a></h4> <br>
                
 
            </div>


            <div id="allproj"><h2>My Projects</h2> 
            </div>

<?php
$this->load->view('dashboard/projectlist');
?>

            <div id="allproj"><h2>Shared Projects (to you)</h2> </div>
<?php
$this->load->view('dashboard/sharedprojectlist');
?>
            

            <br/><br/><br/>

          </div> <!-- /.col-md-10 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div> <!-- /.container-alternate -->

    <br>
