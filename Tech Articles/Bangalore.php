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
      <link rel="stylesheet" type="text/css" href="techart.css">
      </link>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </link>
      <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100&family=Teko:wght@300&display=swap" rel="stylesheet">
      </link>
      <script src="techjs.js"></script>
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
      <h1 id="title"><i class="fa fa-laptop" aria-hidden="true"></i> TECH</h1>
      <div id="article">
         <h1>Bangalore keeps its crown as India’s high-growth tech hub</h1>
         <h3 id="wdate">Date:30/04/2022;</h3>
         <h3 id="wtime">Time:08:30PM;</h3>
         <div class="tslideshow">
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/be1.jpg" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/be2.jpg" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/be3.jpg" >
            </div>
         </div>
         <p id="articleinfo">The southern Indian tech hub of Bangalore is home to the largest number of high-growth companies in India and ranks fourth overall among Asian cities, according to the FT’s latest ranking of High Growth Companies in Asia-Pacific, compiled by research company Statista.<br><br>Twenty of the top 500 companies on the list are based in Bangalore, representing four per cent of the total. India’s financial capital, Mumbai, is Bangalore’s nearest rival, with 13 companies in the top 500.<br><br>Bangalore has also retained its high growth crown despite having recently lost its title of India’s start-up capital. According to the government’s Economic Survey, 5,000 new start-ups were recognised in New Delhi between April 2019 and December 2021, compared with 4,514 in Bangalore.
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