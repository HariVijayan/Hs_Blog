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
         <h1>WhatsApp Begins Testing Granular Privacy Controls on Latest iOS Beta Update: Report</h1>
         <h3 id="wdate">Date:16/05/2022;</h3>
         <h3 id="wtime">Time:04:16pm;</h3>
         <div class="tslideshow">
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/wa1.jpg" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/wa2.png" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/wa3.jpg" >
            </div>
         </div>
         <p id="articleinfo">WhatsApp is reportedly rolling out new granular privacy controls to certain testers on the latest beta version of the app for iOS, that allows advanced management of privacy settings on the app. First spotted in development last year, the feature is designed to give users granular control over who can see their last seen, about, and profile photo on the messaging service. While some testers can now access these features on the beta versions for iOS and Android, WhatsApp is yet to announce when these privacy settings will be rolled out to all users.<br><br>According to a report by WhatsApp features tracker WABetaInfo, the Meta-owned messaging service has started rolling out the granular privacy controls for profile photo, ‘About' description, and ‘Last seen' on WhatsApp. Users who have signed up to receive beta builds via TestFlight can update to WhatsApp beta for iOS 22.9.0.70 might see the features enabled in the app. The new settings appear to be enabled via a server-side switch, as some users may have to wait for 24 hours in order to see the new settings, according to the feature tracker.<br><br>Users who have updated to the latest beta version can visit WhatsApp Settings and select Account, then tap on Privacy. Under each of three sections titled About, Last Seen and Profile Photo, users should be able to see a new option titled My Contacts Except... — which will prevent any selected contacts from viewing their profile photo, last seen, or about profile sections. Previously, WhatsApp would only allow users to choose among Everyone, My Contacts, and Nobody.
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