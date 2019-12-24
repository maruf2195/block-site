 <?php  
 
  $conn = mysqli_connect('localhost','root','','blog');
  $sql="SELECT * FROM post ";
  $result=mysqli_query($conn ,$sql);
  $row=mysqli_num_rows($result);
 ?>



 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="bg-success font-weigt-bold">
   <div "navbar-header "> 
    <nav  class="navbar navbar-default">
     <ul class="nav navbar-nav pull-right">
     <li><a class="navbar-brand"href="userlist.php">User List</a></li>
     <li><a class="navbar-brand" href="logoutcode.php">Logout</a></li>
     <li><a  class="navbar-brand"href="login.php">Login</a></li>
     <li><a  class="navbar-brand"href="registation.php">Registation</a></li>
    </ul>  
   </nav>
   </div>
   </div>
   <div class="container margin:0 auto;">
      <div style="">
    <div class="panel panel-default">
      <div class="panel-heading ">
        <h1 class="text-success font-weigt-bold">List View</h1>
      </div>
     <div class="panel-body">
                                                                                                                                                                                    
        <div class="col-md-4">
          <a class="btn btn-info" href="addpost.php">Add Post</a>
        </div>
          <div class="col-md-9">
            <table class="table">

              <thead>
                <th>SI</th>
                <th>Title</th>
                <th>Describtion</th>
                <th>Data</th>
                <th>Approval</th>
                 <th>Action</th>
                </thead>
               <tbody>
               </tbody><?php while($row= mysqli_fetch_assoc($result)){ ?>
                <tr>
                  <td><?php echo $row['id']?></td>
                  <td><?php echo $row['title']?></td>
                  <td><?php echo $row['descibtion']?></td>
                  <td><?php echo $row['data']?></td>
                  <td><?php echo $row['approve']?></td>
                  <td>
                    <a class="btn btn-info" href="viewpost.php?id=<?php echo $row['id']?>">view</a>
                    <a class="btn btn-warning "onclick="return confirm('Are you sore?')" href="delete.php?id=<?php echo $row['id']?>">Delete</a>
                   <a class="btn btn-info" href="edit.php?id=<?php echo $row['id']?>">Update</a>
                  </td>
                </tr >
                <?php  }?>
                </tbody>
       </div>
      </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>