<!DOCTYPE html>
<html lang="en">
<head>
  <title> ABOUT ME </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <style>

   
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      padding-top: 93px;
    }

    .topnav {
      overflow: hidden;
      background-color: #f2d29f;
      text-align: center;
      position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
    }

    .topnav a {
      display: inline-block;
      padding: 1px; 
      margin: 10px;
      text-decoration: none;
      border-radius: 10%;
    }
    .topnav a img {
      width: 70px; 
      height: auto;
    }

   

    .topnav a:hover {
      background-color: #f8f4b8;
    }

    .content {
      background-color: #fff4d6;
      padding: 20px;
      text-align: center;
      font-family: superc;
      font-size:20px;
      color: #b27e69;
    }

    .grid-container {
      display: grid;
      grid-template-columns: auto auto auto;
      gap: 20px;
      background-color: #fae1bb;
      padding: 50px;
    }

    .grid-item {
      background-color: rgba(255, 255, 255, 0.8);
      text-align: center;
      padding: 0 auto;
      font-size: 30px;
      height: 400px; 
      margin: 30px; 
    }

    .grid-item img {
      max-width: 100%;
      height: 100%;
      object-fit: cover; 
    }

    .footer {
      background-color: #fff4d6;
      padding: 10px;
      display: flex;
  justify-content: space-between;
  align-items: center;
    }
  </style>
</head>
<body>

  <div class="topnav">
    <a href="home.php"><img src="images/milkf.png" alt="Home"></a>
    <a href="aboutme.php"><img src="images/chiffonf.png" alt="About Me"></a>
    <a href="index.php"><img src="images/heartcinna.png" alt="About Me"></a>
    <a href="interests.php"><img src="images/mochaf.png" alt="Interests"></a>
    <a href="gallery.php"><img src="images/expressof.png" alt="Gallery"></a>
  </div>

  <div class="content">
    <h1> ABOUT THE CREATOR </h1>
  </div>

  <div class="grid-container">
    <div class="grid-item"><img src="images/hiyori1.jpg" alt="HIYORI"></div>
    <div class="grid-item"><img src="images/hiyori2.jpg" alt="HIYORI"></div>
    <div class="grid-item"><img src="images/hiyori3.jpg" alt="HIYORI"></div>
  </div>

  <div class="footer">
    <p>WORK IN PROGRESS SORRYYY</p>
    <div class="digital-clock" id="digital-clock">  </div> 
  </div>
  
  <script src="jav.js"></script>

</body>
</html>
