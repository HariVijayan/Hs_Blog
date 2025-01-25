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
         <h1>Windows 11 has been launched to all devices</h1>
         <h3 id="wdate">Date:01/01/2021;</h3>
         <h3 id="wtime">Time:12:00AM;</h3>
         <div class="tslideshow">
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/win11.jpg" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/win11b.jpg" >
            </div>
            <div class="tSlides fade">
               <img src="../Tech Articles/Images/win11c.jpg" >
            </div>
         </div>
         <p id="articleinfo">I've been using Windows 11 since it first went into preview back in June on all my PCs. I've loved my time with it, and I think it's the start of a great new era for the OS. That said, this is the first release of Windows 11, meaning there is certainly room for improvement in a number of areas. So, with all that in mind, let's dive in to the details.<br><br>Windows 11 is now generally available as an update for eligible Windows 10 PCs. Microsoft is taking a measured and phased approach to the rollout, however, meaning not everybody will be offered the update immediately. When your PC is ready, a big popup will appear in Windows Update that will allow you to initiate the download and install process, and Windows will do the rest.Your PC must meet the following requirements to be eligible for the Windows 11 upgrade:A compatible CPU At least 4GB of RAM At least 64GB of storage UEFI, Secure Boot, & TPM 2.0 enabled.Windows 11 is also available on new PCs starting October 5, including on the new Surface Laptop Studio, Surface Pro 8, and Surface Go 3. More devices from other PC makers are expected to begin shipping from October 5 onwards as well, all with Windows 11 preloaded.Be sure to check out our list of best Windows 11 PCs if you're interested in seeing what new PCs are ready for Windows 11
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