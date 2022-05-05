<?php
session_start();
#if the admin is logged in 
if (isset($_SESSION['user_id']) &&
    isset($_SESSION['user_email'])) 

#database connection file
include "connect.php";
 # Book helper function
 
  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ADMIN</title>
     <!--bootstrabs 5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
     <!--bootstrabs 5 bundle JS CDN-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous"></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <div class = "container"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin.php">admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" 
           aria-current="page" 
            href="index.php">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"
           href="#">Add Book</a>
           
        </li>
        <li class="nav-item">
          <a class="nav-link"
           href="#">Add Category</a>
</li>
</li>
        <li class="nav-item">
          <a class="nav-link"
           href="#">Add Author</a>
</li>
<li class="nav-item">
          <a class="nav-link"
           href="logout.php">Logout</a>
</li>
         
    </div>
  </div>
</nav>
<?php if ($book==0){?>
 empty }
    <?php } else{?>

    }

}

<h4>Books</h4>
    <table class="table table-bordered shadow">
    <thead>
        <tr>
            <th> #</th>
            <th> Title </th>
            <th>Author</th>
            <th>Description</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        <thead>

            <tbody>
                <?php foreach ($books as $book){?>
                }

<tr>
          <td>1</td>
          <td> <?=$book['name']?></td>
          <td> <?=$book['author_name']?></td>
          <td> </td>
          <td> Novels and stories</td>

<td>
                <a href="#"
                class ="btn btn- warrning">
                 Edit</a>
        
                 <a href="#"
                class =" btn btn -danger">
                 Delete </a>
                 </td>
				</tr>
			    <?php } ?>
			</tbody>
		</table> 
		<?php } ?>
	</div>
</body>
</html>


            