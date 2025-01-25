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
         <h1>Tech InDepth: Understanding GaN chargers and their advantages</h1>
         <h3 id="wdate">Date:30/04/2022;</h3>
         <h3 id="wtime">Time:01:30PM;</h3>
         <div class="tslideshow">
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/ga1.jpg" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/ga2.jpg" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/ga3.jpg" >
            </div>
         </div>
         <p id="articleinfo">When looking for a new phone, the specifications are a top priority for most customers. However, there’s one aspect of phones that is perhaps not considered so much. That’s the charger. No, I don’t mean the charging speed of your phone, but the actual charging brick. A new wave of chargers is set to hit the mainstream market soon called GaN chargers, which stands for Gallium Nitride chargers. These are smaller, more efficient and while they’re already being used with many devices, they could soon be the future of all chargers. Here’s all you need to know about GaN chargers.<br><br>Gallium Nitride is a material that is considered a better alternative to silicon, which is usually used to transfer power to your device in most chargers. Gallium Nitride is much better at conducting high voltage over longer times compared to silicon. It also allows electrical currents to travel faster through it.<br><br>This makes Gallium Nitride a more efficient solution to materials used in chargers, while being a faster solution as well. Thanks to the higher rate of conductivity, Gallium Nitride needs lesser energy than silicone to generate the same output. Less energy also translates to lower heat.
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