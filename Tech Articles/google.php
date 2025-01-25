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
         <h1>Google is pulling the plug on third-party call-recording apps next month</h1>
         <h3 id="wdate">Date:22/05/2022;</h3>
         <h3 id="wtime">Time:05:00am;</h3>
         <div class="tslideshow">
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/go1.jpg" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/go2.jpg" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/go3.jpg" >
            </div>
         </div>
         <p id="articleinfo">Google is implementing a new change to Android via Google's Play Policy that will leave third-party call recording apps with no way to gain access to cellular calls, making them completely useless.Google is ending support for third-party call recording apps with a new change to Android. An upcoming update to the Google Play Policy will kill the feature on all third-party recording apps that functioned in calls, conferences and any other similar use-cases.<br><br>Google has been actively against call recording apps and services for years now, believing it to be an invasion of a user’s privacy when they’re being unknowingly recorded on a call. As a result, even the call recording feature on Google’s own Dialer application comes with a loud “This call is now being recorded” alert that’s heard on both sides, before recording begins.<br><br>Starting with Android 6, the official call-recording API that enabled the feature was killed off. After this, many developers turned to unofficial workarounds for the recording feature of their apps to function. When these methods were also eliminated in Android 9, third-party apps started using the Android Accessibility API for call recording. This is where Google is set to strike now.<br><br>As per a report by XDA developers, the updated Play Policy will lay out several changes to the Accessibility API that will leave call recording apps unable to use the API to their advantage. The change is expected to go into effect from May 11.<br><br>Google clarified that the change will affect only third-party apps, which means call recording on the Google Dialer will still function if it is available on your device, in your region. This also likely means that any other preloaded Dialer apps that offer call recording features will also still work – only third party apps that are downloaded from the Play Store or sideloaded will get the axe.
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