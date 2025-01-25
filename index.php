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
      <link rel="stylesheet" type="text/css" href="sports.css">
      </link>
      <link rel="stylesheet" type="text/css" href="entertainment.css">
      </link>
      <link rel="stylesheet" type="text/css" href="politics.css">
      </link>
      <link rel="stylesheet" type="text/css" href="feedback.css">
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
            <button id="b1"><a href="a.php">User Article</a></button>
            <button id="b1"><a href="#contact">Contact</a></button>
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
      <div id="category">
         <button id="b2"><a href="tech.php"><i class="fa fa-laptop" aria-hidden="true"></i> Tech</a></button>
         <button id="b2"><a href="sports.php"><i class="fa fa-futbol-o" aria-hidden="true"></i> Sports</a></button>
         <button id="b2"><a href="entertainment.php"><i class="fa fa-music" aria-hidden="true"></i> Entertainment</a></button>
         <button id="b2"><a href="politics.php"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Politics</a></button>
      </div>
      <div id="tech">
         <div id="ltech">
            <h1><i class="fa fa-laptop" aria-hidden="true"></i> TECH</h1>
            <p id="techpara">Techonolgy can be also be most broadly defined
               <br>as the entities,both material and immaterial,
               <br>created by the application of mental and physical
               <br>effect in order to achieve some value.
               <br>an example for techonolgy is mobile phone.
            </p>
            <button id="b3"><a href="tech.php">Read More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></button>
         </div>
         <div id="rtech">
            <div class="tslideshow">
               <div class="tSlides fade">
                  <img src="../project/Tech Articles/Images/be1.jpg" style="width:100%">
                  <div class="ttext"><a href="..\project\Tech Articles\Bangalore.php">Bangalore keeps its crown as India’s high-growth tech hub</a></div>
               </div>
               <div class="tSlides fade">
                  <img src="../project/Tech Articles/Images/ga1.jpg" style="width:100%">
                  <div class="ttext"><a href="..\project\Tech Articles\chargers.php">Tech InDepth: Understanding GaN chargers and their advantages</a></div>
               </div>
               <div class="tSlides fade">
                  <img src="../project/Tech Articles/Images/wi1.png" style="width:100%">
                  <div class="ttext"><a href="..\project\Tech Articles\pixel.php">Wipro to acquire SAP Consulting firm Rizing for $540 million</a></div>
               </div>
               <a class="tprev" onclick="tnext(-1)">&#10094;</a>
               <a class="tnext" onclick="tnext(1)">&#10095;</a>
            </div>
            <br>
            <div id="tset" style="text-align:center">
               <span class="tdot" onclick="tcurrent(1)"></span> 
               <span class="tdot" onclick="tcurrent(2)"></span> 
               <span class="tdot" onclick="tcurrent(3)"></span> 
            </div>
         </div>
      </div>
      <div id="sports">
         <div id="lsports">
            <h1><i class="fa fa-futbol-o" aria-hidden="true"></i> SPORTS</h1>
            <p id="sportspara">Sports pertains to any form of completitive
               <br>physical activity or game the aims to use,
               <br>maintain or improve physical ability and skills
               <br>while providing enjoyment to participants
               <br>and,in the some cases enterainment to spectators.
            </p>
            <button id="b4"><a href="sports.php">Read More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></button>
         </div>
         <div id="rsports">
            <div class="sslideshow">
               <div class="sSlides fade">
                  <img src="../project/Sports Articles/Images/mr1.jpg" style="width:100%">
                  <div class="stext"><a href="..\project\Sports Articles\mi vs rr.php">RR vs MI highlights: Mumbai Indians end 8-match losing streak</a></div>
               </div>
               <div class="sSlides fade">
                  <img src="../project/Sports Articles/Images/be1.jpg" style="width:100%">
                  <div class="stext"><a href="..\project\Sports Articles\ben.php">Ben Stokes appointed as England's full-time Test captain</a></div>
               </div>
               <div class="sSlides fade">
                  <img src="../project/Sports Articles/Images/si1.jpg" style="width:100%">
                  <div class="stext"><a href="..\project\Sports Articles\sindhu.php">Sindhu scripts drama, semis spot</a></div>
               </div>
               <a class="sprev" onclick="snext(-1)">&#10094;</a>
               <a class="snext" onclick="snext(1)">&#10095;</a>
            </div>
            <br>
            <div id="sset" style="text-align:center">
               <span class="sdot" onclick="scurrent(1)"></span> 
               <span class="sdot" onclick="scurrent(2)"></span> 
               <span class="sdot" onclick="scurrent(3)"></span> 
            </div>
         </div>
      </div>
      <div id="entertainment">
         <div id="lentertainment">
            <h1><i class="fa fa-music" aria-hidden="true"></i> ENTERTAINMENT</h1>
            <p id="entertainmentpara">The pleasure afforded by being entertained
               <br>amusement.The comedian performed for our
               <br>entertainment. Entertainment is defined as
               <br>as a funny or interesting performance or 
               <br>show.an example of entertainment is TVshow.
            </p>
            <button id="b5"><a href="entertainment.php">Read More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></button>
         </div>
         <div id="rentertainment">
            <div class="eslideshow">
               <div class="eSlides fade">
                  <img src="../project/Entertainment Articles/Images/vik3.jpeg" style="width:100%">
                  <div class="etext"><a href="..\project\Entertainment Articles\vikram.php">Lokesh Kanagaraj's Vikram script legally copyrighted</a></div>
               </div>
               <div class="eSlides fade">
                  <img src="../project/Entertainment Articles/Images/ak3.png" style="width:100%">
                  <div class="etext"><a href="..\project\Entertainment Articles\ak.php">Happy Birthday Ajith Kumar</a></div>
               </div>
               <div class="eSlides fade">
                  <img src="../project/Entertainment Articles/Images/kgf21.jpg" style="width:100%">
                  <div class="etext"><a href="..\project\Entertainment Articles\kgf21000.php">KGF Chapter 2 Yash's film crosses Rs 1000-crore mark</a></div>
               </div>
               <a class="eprev" onclick="enext(-1)">&#10094;</a>
               <a class="enext" onclick="enext(1)">&#10095;</a>
            </div>
            <br>
            <div id="eset" style="text-align:center">
               <span class="edot" onclick="ecurrent(1)"></span> 
               <span class="edot" onclick="ecurrent(2)"></span> 
               <span class="edot" onclick="ecurrent(3)"></span> 
            </div>
         </div>
      </div>
      <div id="politics">
         <div id="lpolitics">
            <h1><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> POLITICS</h1>
            <p id="politicspara">politics is way that people living in 
               <br>groups make decision.politics is about
               <br>making agreements between people so that
               <br>they can live together in groups such
               <br>as tribes,cities, or countries.
            </p>
            <button id="b6"><a href="politics.php">Read More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></button>
         </div>
         <div id="rpolitics">
            <div class="pslideshow">
               <div class="pSlides fade">
                  <img src="../project/Politics Articles/Images/si1.jpg" style="width:100%">
                  <div class="ptext"><a href="..\project\Politics Articles\shivsena.php">Politics of Shiv Sena factions in Punjab amid old faultlines</a></div>
               </div>
               <div class="pSlides fade">
                  <img src="../project/Politics Articles/Images/de1.jpg" style="width:100%">
                  <div class="ptext"><a href="..\project\Politics Articles\democrats.php">Today is a disastrous day for Democrats' 2022 chances</a></div>
               </div>
               <div class="pSlides fade">
                  <img src="../project/Politics Articles/Images/pc1.jpg" style="width:100%">
                  <div class="ptext"><a href="..\project\Politics Articles\coal.php">P Chidambaram's Stinging Sarcasm For Centre Amid Coal And Power Shortage</a></div>
               </div>
               <a class="pprev" onclick="pnext(-1)">&#10094;</a>
               <a class="pnext" onclick="pnext(1)">&#10095;</a>
            </div>
            <br>
            <div id="pset" style="text-align:center">
               <span class="pdot" onclick="pcurrent(1)"></span> 
               <span class="pdot" onclick="pcurrent(2)"></span> 
               <span class="pdot" onclick="pcurrent(3)"></span> 
            </div>
         </div>
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
      <script>
         tshow(tIndex);
      </script>
      <script>
         sshow(sIndex);
      </script>
      <script>
         eshow(eIndex);
      </script>
      <script>
         pshow(pIndex);
      </script>
   </body>
</html>