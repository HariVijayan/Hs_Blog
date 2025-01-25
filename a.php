<!DOCTYPE html>
<html lang="en">
   <head>
      <title>HS Blog</title>
      <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
      </link>
      <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
      </link>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </link>
      <link rel="icon" href="f.jpg" type="image/jpg" >
      </link>
      <link rel="stylesheet" type="text/css" href="tech.css">
      </link>
      <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
      </link>
      <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100&family=Teko:wght@300&display=swap" rel="stylesheet">
      </link>
      <script src="index.js"></script>
   </head>
   <body>
      <div id="header">
         <div id="lhead">
            <button id="b1"><a href="index.php">Home</a></button>
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
      <div id="usercontact">
         <h1>Want Your Article In Our Site..Please Fill The Form Below...</h1>
         <div id="luc">
            <h3 id="luc1">Name</h3>
            <h3 id="luc2">Mail-ID</h3>
            <h3 id="luc3">Phone No</h3>
            <h3 id="luc4">Your Article</h3>
         </div>
         <div id="ruc">
         <form id="aform"action="connect1.php" method="post">
         <input type="text" id="name" name="Name" placeholder="Please Enter Your Name..">
         <input type="text" id="mailid" name="MailID" placeholder="Please Enter Your Mail ID..">
         <input type="text" id="phoneno" name="Phone_Number" placeholder="Please Enter Your Phoneno">
         <input type="text" textarea id="userarticle" name="Articles" placeholder="Enter your Article.." style="height:270px"></textarea>
            <input type="submit" value="Submit">
                </form>

         <h1>By clicking submit you agree to our <a href="rules.php">rules and regulations</a></h1>
         </div>
      </div>
   </body>
</html>

