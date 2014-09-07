
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

            <br><br>
            <div class="container">
              <?php
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                  echo "<p style='color:red'>Sorry We cannot find that project, create new instead!</p>";
                }
                if (isset($_GET['error']) && $_GET['error'] == 2) {
                  echo "<p style='color:red'>Something went wrong with the URL, create new project instead!</p>";
                }
              ?>
              <div class="row colored">
                <form method="POST" 
                <?php 
                if(isset($edit) == true){
                  echo 'action="'.base_url().'dashboard/project/edit/'.$id.'"';
                } 
                else{
                  echo 'action=""';
                }
                ?>>
                <h2>
                <?php 
                if(isset($edit) == true){
                  echo 'Edit Project';
                } 
                else{
                  echo 'Add Project';
                }
                ?></h2>
                <h3 class="sub2">Name of Project :</h3>
                 <input type="text" name="pro_name" required 
                <?php 
                if(isset($edit) == true){
                  echo 'value="'.$name.'"';
                }
                ?> 
                 >

                <h3 class="sub3">Description :</h3>
                <textarea id="editor1" class="input-block-level" rows="10" cols="50" name="pro_description">
                <?php 
                if(isset($edit) == true){
                  echo $description;
                }
                ?>
                </textarea><br/>
                 <!-- <div>
                       <h3>Team Members :</h3>
                       <input type="text">
                       <input type="text">
                      <input type="password">
                      
                 </div>   --> 
                 <script>
                      
                      CKEDITOR.replace( 'editor1' );
                  </script>
                 <button type="submit" class="btn btn-default">Submit</button>
                </form>
              </div>
            </div>

          </div> <!-- /.col-md-10 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div> <!-- /.container-alternate -->
