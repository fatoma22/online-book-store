<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Online Book Store</title>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;
}

li a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}
</style>
</head>
<body>
    
    <div class = "container"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Book Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" 
           aria-current="page" 
            href="index.php">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"
           href="#">Contact</a>
           
        </li>
        <li class="nav-item">
          <a class="nav-link"
           href="#">About</a>
</li>
<li class="nav-item">
          <a class="nav-link"
           href="login.php">Login</a>
</li>
        <li class="nav-item">
        <a class="nav-link"
           href="register.php">Register</a>
</li>
         
    </div>
    <div class="content">
  <h1>Alzahra Book Shop</h1>



  <p> The largest Arab electronic library open for books </p>
  <h2>Search for Book/Author</h2>
<form action="/action_page.php">
  <label for="search">Search:</label>
  <input type="search" id="search" name="search">
  <input type="submit" value="Submit">
</form>
</li>
  </div>

</nav>
</body>
</html>



