<html>
    <head>
    <Meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>assa</title>
        <link rel="stylesheet" type="text/css" href="header.css">
         <link rel="stylesheet" type="text/css" href="footer.css">


        <!--<<<<<<<<<<<<<<<IMG SLIDESHOW CSS>>>>>>>>>>>>>>>>-->
        <style>

        {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {

    margin-top: 30px;

  position: relative;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}




/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}*/

    img{

        height: 350px;
        width: 100%;

    }

            .imagetext{

                background: black;
                color: white;
                position: absolute;
                bottom: 8px;
                left: 16px;
            }



        </style>




    </head>

<body>

    <br><br><br><br><br><br><br>
     <p id="text">Book unique homes <br><br><br>
    and experience a city like a local.</p>


	<div id="header">

		<ul >
		  <li><a class="active1" href="#home">Home</a></li>
		  <li><a href="about.html">About</a></li>
		  <li><a href="news.html">News</a></li>
		  <li><a href="#contact.html">Contact</a></li>
		</ul>
             <div class="headerelem2">

        <ul>
        <li><a href="register.php">Signup</a></li>
        <li><a href="login.html">Login</a></li>
        </ul>


        </div>
        <form action="result.php" method="GET">
              <input class="search-box" type="text" name="city" placeholder="Enter a location Eg.city,locality or landmark..">

            <button id="searchb" type="submit" value="search" name="sub"><span>search</span></button>

           </form>


    </div>
    <br><br><br><br>











      <!--<<<<<<<<<<<<<<<<<<<<<<<<IMG SLIDESHOW Html>>>>>>>>>>>>>>>>>>>>>-->


    <div class="slideshow-container" >

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="hotel-rooms.jpg"  >
    <div class="imagetext">abc</div>

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="login-img.jpeg"  >

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="hotel%20image%202.jpg"  >

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

                  <!---Result show -------------->
<div class="resilt">
  <table id =result>

  <?php
  $user='root';
  $pass='';
  $db='testdb';

  $db_con=mysqli_connect('localhost',$user,$pass,$db) or die("Unable to connect".mysql_error());
  //echo"hiii>";
  $submit=$_GET["sub"];
  $place=$_GET["city"];
  if(isset($submit))
  {
  $search_query="SELECT * FROM `rent_available` WHERE city='$place'";

  $query_result=mysqli_query($db_con,$search_query);

  if($query_result)
  {
    while($row=mysqli_fetch_assoc($query_result))
    {
      echo"<tr>";
      echo"<tr>";
      echo"<td colspan=4 rowspan='6'>";
      echo '<img height="300" width="300" src="data:image;base64,'.$row['image'].'"/>';
    //  echo"<td colspan='4' rowspan='6'>".$row['image']."</td></tr>";
     echo"</td></tr";
        echo'<tr>';
           echo"<td colspan='6'>".$row['building_name']."</td>";
          echo"</tr>";
        echo"<tr>";
            echo"<td rowspan='3'>";
            echo $row['address'];
            echo"</td>";
            echo"</tr>";

          echo "<tr>";
            echo"<td>price:</td>";
             echo"<td>".$row['rate_per_hour']."</td>";
             echo"<td>date:</td>";
             echo"<td>".$row['available_date']."</td>";
             echo"</tr>";
          echo"<tr><td>owner:</td>";
          echo "<td>".$row['owner_email']."</td>";
            echo"<td>contact:</td>";
            echo"<td>".$row['contact']."</td>";
              echo"</tr>";
              echo"</tr>";


   }
  }
  else {
    echo"Some error in query processing";
    echo("error".mysqli_error($db_con));
  }

  }
  ?>
</table>
</div>

        <!--<<<<<<<<FOOTER>>>>>>>>-->


    <div id = "footer">

        <div class="imgcontainer">
        <table>
          <tr>
             <td >
                 <div class="container">
              <img id="img" class="image"  src="Darjeelingpic.jpg">

                 </div>
             </td>

               <td>
                   <div class="container">
              <img id="img" class="image"  src="Goapic.jpg">
                   </div>
             </td>

          </tr>

               <tr>
             <td>
                 <div class="container">
              <img id="img"  class="image"   src="holidaypackagepic.jpg">
                 </div>
             </td>

               <td>
                   <div class="container">
              <img id="img" class="image"  src="Shimlapic.jpg">
                   </div>
             </td>

          </tr>


        </table>
        </div>



        <table class="footerTable" cellspacing="5" cellpadding="10" >

            <tr >

                <td><img class="icon" src="phone%20icon.png"></td>

                <td class="td"><h4>24/7 customer support</h4>
If you need help while traveling or <br>hosting, contact us at our toll free<br> number: 000 800 4405 103</td>


                 <td><img class="icon" src="verification%20icon.jpg"></td>

                <td class="td"><h4>Verified ID</h4>
We aim to build a trusted community<br> by giving you more info when you're <br> deciding who to host or stay with.</td>
            </tr>


        </table>

        <hr>

        <table cellspacing="5" cellpadding="10" class="footerText" >

        <tr>
        <td >
           About us
        </td>
        <td >
           Help
        </td>
        </tr>

           <tr>
        <td >
           Careers
        </td>
          <td>
           Blog
        </td>
        </tr>

        <tr>
        <td >
           Support
        </td>
          <td>
           Contact us
        </td>
        </tr>




        </table>
        <hr>


        <ul>

            <li><a href="https://www.facebook.com/login/"><img src="fb%20icon.png" class="icon2"></a></li>
             <li><a href="https://twitter.com/login?lang=en"><img src="twitter%20.png" class="icon2"></a></li>
             <li><a href="https://www.instagram.com/accounts/login/"><img src="insta%20icon.png" class="icon2" ></a></li>



        </ul>

  </div>











      <!--<<<<<<<<<<<<<<<<<<<<<<<<IMG SLIDESHOW JAVASCRIPT>>>>>>>>>>>>>>>>>>>>>-->

    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>


</body>



</html>
