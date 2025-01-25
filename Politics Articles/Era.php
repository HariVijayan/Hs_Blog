<!DOCTYPE html>
<html lang="en">
   <head>
      <title>HS Blog</title>
      <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
      </link>
      <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
      </link>
      <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
      </link>
      <link rel="icon" href="f.jpg" type="image/jpg" >
      </link>
      <link rel="stylesheet" type="text/css" href="part.css">
      </link>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </link>
      <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100&family=Teko:wght@300&display=swap" rel="stylesheet">
      </link>
      <script src="politicsjs.js"></script>
   </head>
   <body>
   <div id="header">
         <div id="lhead">
            <button id="b1"><a href="..\index.php">Home</a></button>
            <button id="b1"><a href="..\a.php">User Article</a></button>
         </div>
         <div id="rhead">
         <ul>
               <li><h1>Follow Us</h1></li>
               <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></a></i></li>
               <li><a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter"></a></i></li>
               <li><a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram"></a></i></li>
            </ul>

         </div>
         <h1 id="hs">HS Blog</h1>
         <p>A Blog designed by Hari & Sandeep to keep you updated daily</p>
      </div>
      <h1 id="ptitle"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> POLITICS</h1>
      <div id="article">
         <h1>Polling in an Era of Political Polarization</h1>
         <h3 id="mdate">Date:30/04/2022;</h3>
         <h3 id="mtime">Time:02:30AM;</h3>
         <div class="pslideshow">
            <div class="pSlides fade">
               <img src="../Politics Articles/Images/er1.jpg">
            </div>
            <div class="pSlides fade">
               <img src="../Politics Articles/Images/er2.png" >
            </div>
            <div class="pSlides fade">
               <img src="../Politics Articles/Images/er3.png">
            </div>
         </div>
         <p id="articleinfo">I'm often asked about the value of national public opinion polling in an era of rigid political polarization and within a system where members of the U.S. House and Senate are elected at the district and state level, not in national elections. Certainly, polling keeps the people of the nation informed about each other and helps fulfill our natural interest in what others think and feel. But national polling is, or should be, important for the nation's elected representatives as well, as I will explain.<br><br>The ultimate direction for the American government's actions and policies arises from the people of the nation, not from a single ruler, autocrat or oligarchy. This by itself helps justify the importance of measuring what the people of the nation are thinking and feeling. But our system of government makes these types of considerations quite complicated. The Founders, while embracing the concept of democracy, were wary of its implications and set up an intermediary buffer between the people and their government -- our system of elected representatives. There has ever since been debate and discussion centered on exactly how this buffer between the people and policy decisions should operate. And a debate on just what should drive the decision-making of individuals we elect and send off to Washington.
         </p>
         <button id="like" onclick="toggleword()">
         <i class="fa fa-thumbs-up"></i>
         <span id="icon">Like</span>
         </button>
      </div>
      <script>
         showSlides(slideIndex);
      </script>
   </body>
</html>