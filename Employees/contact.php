<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>CV</title>
		<link rel="stylesheet" href="contact.css" type="text/css">
	</head>
<aside class="b">
	<body>
  <header>
      <img src="bg2.jpeg">
	  
    <h1><?php echo $_SESSION['nom'].' '.$_SESSION['prenom']?></h1>

    
    <h2>Engineering Student at ENSAM Casablanca</h2>

  </header>

  
  <div class="profile-bio">

    <p>-I live in Casablanca,Morocco  </p>
          <p>-Sciences physiques in High School 
          <br/>-Can speak 3 languages (Arabic,French,English)
          <br/>-I like photography and editing 
          <br>-I can use CATIA , Python and other cool stuff.
          <br/>- Email me at <a href="mailto:<?php echo $_SESSION['email']?>"><?php echo $_SESSION['email']?></a>
	</br><input type="button" value="Go back!" onclick="history.back()"></p>

  </div>

  
  <ul class="profile-social-links">

    
    <li>
      
        <img src="Twitter.png">
      </a>
    </li>

    <li>
      <a href="mailto:admin123@gmail.com"></a>
        <img src="gmail.png">
      </a>
    </li>

    

  </ul>

</aside>

	</body>
	</html>