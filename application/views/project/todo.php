
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

       <br><br><br><br><br><br><br><br><br><br><br><br>
      <div id="projlist" class="list-group">
        <a href="<?= base_url() ?>project/view/<?= $data->pro_id ?>" class="list-group-item">
         <?php echo $data->pro_name ?>
        </a>
        <!-- <a href="<?= base_url() ?>project/discussion/<?= $data->pro_id ?>" class="list-group-item">Discussion</a> -->
        <a href="<?= base_url() ?>project/todo/<?= $data->pro_id ?>" class="list-group-item active">To-do list</a>
        <!-- <a href="<?= base_url() ?>project/file/<?= $data->pro_id ?>" class="list-group-item">File</a>
        <a href="<?= base_url() ?>project/text/<?= $data->pro_id ?>" class="list-group-item">Text Document</a>
        <a href="<?= base_url() ?>project/event/<?= $data->pro_id ?>" class="list-group-item">Event</a> -->
      </div>

<div class="col-md-2 col-md-offset-1 text-center">&nbsp;</div>
    <div class="col-md-6 col-md-offset-1 text-center" style="margin-top:-340px">

            <br><br><br><br><br><br>
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
                <h2>Todo List</h2>
                <?php
                //var_dump($todo);
                  foreach ($todo as $key => $value) {
                   echo "<p><span class='glyphicon glyphicon-list'></span>&nbsp;&nbsp;&nbsp;<a href='".base_url()."comments/view/".$id."/".$value->todo_id."'>".$value->todo_title."</a> <code>".$value->todo_assign."</code>&nbsp;&nbsp;&nbsp;<a href='".$id."/".$value->todo_id."'><span class='glyphicon glyphicon-pencil'></span></a><br/>Due date <code> ".$value->due_date."</code></p>";
                  }
                ?>
                <br/><br/><hr/>
                <form method="POST" action="">
                  <h3>Add Todo</h3><input type="text" name="todo_title">
                  <select name="todo_assign" class="form-control">
                      <option value='Unassigned'>Unassigned</option>
                      <?php 
                      foreach ($users as $key => $ff) {
                        echo "<option value='".$ff->fullname."'>".$ff->fullname."</option>";
                      }
                      foreach ($user as $key => $fff) {
                        echo "<option value='".$fff->fullname."'>".$fff->fullname."</option>";
                      }
                      ?>
                  </select>
                  <input type="date" class="form-control" name="due_date">
                  <input type="text" hidden name="todo_project" value="<?= $id ?>">
                  <br/><br/>
                 <button type="submit" class="btn btn-default">Submit</button>
                </form>
                

              </div>
            </div>
          </div> <!-- /.col-md-10 --> 

      <br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>