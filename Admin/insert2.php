<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="insert2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <title>Page Créer</title>
  </head>
  <body>
   
   <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>ADMIN SIDEBAR</h3>
      </div>
      
      
      <ul class="list-unstyled components">
        <p>Welcome Admin</p>
        <li class="active">
          <a href="home.php" >Home</a>
        </li>
        
        <li>
          <a href="about.php">About</a>
        </li>
        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Services</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
              <a href="insert.php">Add</a>
            </li>
            <li>
              <a href="update.php">Update</a>
            </li>
            <li>
              <a href="delete.php">Delete</a>
            </li>
          </ul> 
        </li>
        <li>
          <a href="contact.php">Contact</a>
        </li>
        <li>
          <a href="logout.php">Logout</a>
        </li>
      </ul>
      
  
    </nav>
    
    <div class="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
      <button type="button" id="sidebarCollapse" class="btn btn-info">
        <i class="fa fa-align-justify"></i> <span>toggle sidebar</span>
      </button>
      
  <!--<a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</nav>
    

  <div class="container-fluid">
    <h2 style="text-align: center; color: white; font-weight: normal; font-size: 80px;">Fill the blinks below in order to add a new RH manager</h2> 
     <p>
      <div class="row">
          <form action="insert3.php" method="POST">
            <div class="container">
              <table>
                        <tr>
                          <td style="color:white;font-size: large;"> Name: </td>
                          <td><input type="text" class="span3" name="nom" id="nom" placeholder="Enter a name" required="required" pattern="[a-zA-Z]*" oninvalid="setCustomValidity('Vous devez respect le format suivant: Juste les lettres sont acceptées')"></td>
                  </tr>   
                        <tr>
                          <td style="color:white;font-size: large;"> Prenom: </td>
                          <td><input type="text" class="span3" name="prenme" id="prenm" placeholder="Enter a last name" required="required" pattern="[a-zA-Z]*" oninvalid="setCustomValidity('Vous devez respect le format suivant: Juste les lettres sont acceptées')" ></td>
                        </tr>
                        <tr>
                          <td style="color:white;font-size: large;"> Email: </td>
                          <td><input type="mail" class="span3" name="mail" id="mail" placeholder="xyz@gmail.com" required="required" pattern=".*@gmail.com"  oninvalid="setCustomValidity('Vous devez respect le format suivant: xyz@gmail.com')"></td>
                        </tr>
                        <tr>
                          <td style="color:white;font-size: large;"> Password: </td>
                          <td><input type="password" class="span3" name="pwd" id="pwd" placeholder="Enter a password" required="required" ></td>
                        </tr>
                      </table>
            </div>
            <div class="row">
              <input type="submit" name="ajouter" value="Submit">
            </div>
            </form> 
      </div>
      </p>    
    <div class="line"></div>
 
  </div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
      $(document).ready(function(){
      $('#sidebarCollapse').on('click',function(){
        $('#sidebar').toggleClass('active');
      });
    });  
  </script>
    
    
    
    
    
  </body>
</html>