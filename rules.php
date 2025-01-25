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
      <link rel="stylesheet" type="text/css" href="feedback.css">
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
      <div id ="rules">
          <h1>Rules and regulations to submit your article in HS Blog</h1>
          <p>1)Make your own post <br>2)Don't post your article with false or incomplete information <br>3)Don't post anything that may be offensive<br>4)Don't post news that are dead long ago<br>5)Don't try to include scams inside the article <br>6)Don't give your article to us under a fake identity<br>7)Be ready as we will contact you once if the article you sent seems legit to us and we would like to post it.
      </div>
      <div id="contact">
         <h1 id="cmh">Contact Us</h1>
         <form id="fform"action="connect.php" method="post">
            <h3 id="ch1">Name</h3>
            <input type="text" id="name" name="User_Name" placeholder="Please Enter Your Name..">
            <h3 id="ch2">Mail-ID</h3>
            <input type="text" id="MailID" name="MailID" placeholder="Please Enter Your Mail ID..">
            <h3 id="ch3">Country</h3>
            <select id="country" name="Country">
               <option value="india">India</option>
               <option value="uk">United Kingdom</option>
               <option value="canada">Canada</option>
               <option value="usa">USA</option>
            </select>
            <h3 id="ch4">Feedback</h3>
            <textarea id="feedback" name="Feedbacks" placeholder="Explain What We Can Improve.." style="height:100px"></textarea>
            <input type="submit" value="Submit">
         </form>
      </div>
   </body>
</html>