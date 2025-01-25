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
         <h1>Twitter Spotted Working on Much-Awaited Edit Button, to Be Available for Twitter Blue Users</h1>
         <h3 id="wdate">Date:16/05/2022;</h3>
         <h3 id="wtime">Time:05:18pm;</h3>
         <div class="tslideshow">
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/tw1.jpg" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/tw2.jpg" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/tw3.jpg" >
            </div>
         </div>
         <p id="articleinfo">Twitter has been spotted working on a way for users to edit their tweets on the microblogging platform. The feature has been spotted on the Twitter Web interface for the first time, and could make its way to the Android and iOS apps in the future. The ability to edit tweets after they have been posted has been requested by users for several years. Twitter has already confirmed that the service is already working on an edit button, which will make its way to Twitter Blue users in the coming months.<br><br>The edit button for Twitter was first spotted on the web interface by developer Alessandro Paluzzi, who shared screenshots of the feature on Twitter. An Edit Tweet option is shown to be located in the three-dot menu after a tweet is posted, under the option to View Tweet analytics. According to the screenshot shared by Paluzzi, clicking the button will bring up the composer window with the ability to edit the tweet (or rewrite it), with a blue Update button replacing the usual Tweet button.<br><br>While this is the first instance of the new edit button being spotted, it is likely that the feature will evolve and change while it is in development. It is currently unclear what time frame will be provided to users for editing a tweet. Another Twitter user Nima Owji (@nima_owji) shared an animation of the feature in action, adding that at the moment, it is not possible for users to edit or modify the audience of a tweet once it has been posted.
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