<?php
session_start();
unset($_SESSION["reg__"]);
unset($_SESSION["name__"]);
unset($_SESSION["avg__"]);
unset($_SESSION["data_entered__"]);
unset($_SESSION["no_data_retrieval"]);
extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/Home.css">
    <script src="./nav.js" defer ></script>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
    </style>
    <title>Home</title>
  </head>
  <body>
    <div class="header">
      <p>Welcome To Student Information Centre
      </p>
      <a href="logout.php"  ><button class="logout">Logout</button></a>  
    </div>
      <div class="buttons_field">
        <div class="clicks">

          <button onclick="Data_E()" >Data Entry</button>
          
          <button onclick="Data_R()" >Data Retrieval</button>
        </div>

      </div>
      <div class="sports" style="font-size: 30px">
        <p>Favourite Players</p>
      </div>
      <div class="images">
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/Don_Bradman"><img src="./images/bradman.jpg" alt="Don Bradman"></a>
          </div>
          
          <div class="image"> 
            <a href="https://en.wikipedia.org/wiki/Sunil_Gavaskar"><img src="./images/sunil.png" alt="Sunil Gavaskar"></a> 
          </div>
          
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/Kapil_Dev"><img src="./images/kapil.jpg" alt="Kapil Dev"></a>
            </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/Sachin_Tendulkar"><img src="./images/sachin.jpg" alt="Sachin Tendulkar"></a>  
          </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/Rahul_Dravid"><img src="./images/dravid.jpg" alt="Rahul Dravid"></a>  
          </div>
      </div>
      <footer class="foot">
        
          <p><?php  echo $name  ?></p>
          <p><?php  echo $email  ?></p>
          <p><?php  echo $reg  ?></p>
      </footer>
  </body>
</html>
