<!DOCTYPE html>
<html lang="en">
<head>



 <!--head php-->
 <?php include 'includes/head.php';?>

 <!--external css-->

 <!--external carousel css-->


 <link rel="stylesheet" href="css/footer.css">

 <link href="css/aos.css" rel="stylesheet">
 <script src="js/aos.js"></script>
 <style type="text/css">
   body{
    overflow-x: hidden;
  }
</style>

<style>

  .section-title{

    font-size: 40px;
    margin-bottom: 30px;
    text-align: center;
    font-weight: bold;
  }
  .middle-over{

    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    display:none;
  }
  .card-title{
    color:black;
    font-weight:bold;

    padding-bottom:10px;
  }



  /* Position the image container (needed to position the left and right arrows) */
  .activities-container {
   position: relative;
 }

 /* Hide the images by default */
 .mySlides {
   display: none;
   margin: auto;
   /* transition: visibility 0.3s linear, opacity 0.3s linear; */
 }

 .mySlides img {
   height: 35rem;
 }

 /* Add a pointer when hovering over the thumbnail images */
 .cursor {
   cursor: pointer;
 }

 /* Number text (1/3 etc) */
 .numbertext {
   color: #f2f2f2;
   font-size: 12px;
   padding: 8px 12px;
   position: absolute;
   background: #123c69;
   /* top: 0; */
 }

 /* Container for image text */
 .caption-container {
   text-transform: uppercase;
   margin-left: auto;
   margin-right: auto;
   margin-bottom: 2rem;
   background-color: #123c69;
   padding: 10px 16px;
   color: white;
   width: 30rem;
   border-radius: 7px;
 }

 .activity-row:after {
   content: "";
   display: table;
   clear: both;
 }

 /* Add a transparency effect for thumnbail images */
 .demo {
   opacity: 0.9;
   /* padding: 0.1rem; */
   height: 12rem;
   margin-bottom: 10%;
 }

 .active,
 .demo:hover {
   opacity: 1;
 }

 .card {
   transition: transform 0.1s linear;
 }

 .card:hover  {
   transform: scale(0.97);
   opacity:0.8;

 }
 .card:hover .middle-over{
   display:block;
 }




 .overlay {
   height: 100%;
   width: 0;
   position: fixed;
   z-index: 1000;
   top: 0;
   left: 0;
   background-color: rgb(0, 0, 0);
   background-color: rgba(0, 0, 0, 0.9);
   overflow-x: hidden;
   transition: 0.3s;
 }

 .overlay-content {
   position: relative;
   top: 11%;
   width: 100%;
   text-align: center;
   /* margin-top: 30px; */
 }

 .overlay a {
   padding: 8px;
   text-decoration: none;
   font-size: 36px;
   color: #818181;
   display: block;
   transition: 0.3s;
 }

 .overlay a:hover,
 .overlay a:focus {
   color: #f1f1f1;
 }

 .overlay .closebtn {
   position: absolute;
   top: 0px;
   right: 2rem;
   font-size: 60px;
 }

 @media screen and (max-width: 450px) {
   .overlay a {
    font-size: 20px
  }

  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }

  .mySlides img {
    height: 15rem;
  }
}
</style>
</head>
<body>

  <!-- Header -->
  <?php include 'includes/header.php';?>




  <!--nav-bar-->
  <?php include 'includes/navbar.php';?>


  <?php  function display_activity($activity_type, $color)
  {

    $dir = "./images/gallery/" . $activity_type . "/";
    $folders = scandir($dir);
    $details = array();
    foreach ($folders as $folder) {
      if ($folder !== "." and $folder !== ".." and is_dir($dir . $folder)) {
        $name_date = explode("_", $folder);
        $date = end($name_date);
        $dateTo = "";
        if(strpos($date,"to")){
          $datearr = explode("to",$date);
          $date =  $datearr[0];
          $dateTo = $datearr[1];
        }
        $name = implode(array_slice($name_date,1,count($name_date)-2)," ");
        $detail = array(
          "folder" => $dir . $folder . "/", 
          "name" => $name,
          "date" => strtotime($date),
          "dateFrom"=>date_format(date_create($date),"d/m/Y"),
          "dateTo"=> !empty($dateTo)?" to ".date_format(date_create($dateTo),"d/m/Y"):$dateTo );
        $details[] = $detail;
      }
    }



    usort($details, function ($a, $b) {
      return -($a["date"] <=> $b["date"]);
    });



    foreach ($details as $detail) {


      echo '
      <div class="col-sm-8 col-md-4 col-lg-4 pl-4 pr-4 my-3" data-aos="zoom-in" data-aos-duration="2000">
      <div class="card  shadow">
      <img src="' . $detail["folder"] . scandir($detail["folder"])[2] . '" alt="Avatar" class="image-fluid" style="width:100% ;height:200px">
      <div class="middle-over">
      <a href="javascript:void(0)" class="btn btn-' . $color . ' btn-lg" onclick="openNav(\'' . $detail["folder"] . '\',\'' . $detail["name"].' '.$detail["dateFrom"].' '. $detail["dateTo"] . '\')"><i class="fas fa-plus"></i></a>
      </div>
      </div>
      <div class="card-footer shadow text-center"><b>'.$detail["name"].'</b></div>
      </div>';
    }
  }
  ?>


  <!-- Activities section -->
  <section class="about-section spad pt-0">
    <div class="container">
      <div class="section-title text-center my-5">
        Gallery

      </div>



      <h5 class="text-center my-3 py-2">2019-2020</h5>

      <hr>
      <div class="row">
        <?php display_activity("2019-2020", "primary"); ?>
      </div>


      <h5 class="text-center my-3  py-2">2018-2019</h5>

      <hr>
      <div class="row">
        <?php display_activity("2018-2019", "danger"); ?>
      </div>

    <!--  <h5 class="text-center my-3  py-2 " >2017-2018</h5>

    <hr>
    <div class="row">
    <?php display_activity("2017-2018", "success"); ?>
  </div> -->


</div>



</div>
</section>
<!-- Activities section end-->


<!-- Slideshow Section -->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <div class="activities-container container-fluid">
      <div class="row">
        <div class="col-lg-2" onclick="closeNav()"></div>
        <div class="col-lg-8" id="slideshow"></div>
        <div class="col-lg-2" onclick="closeNav()"></div>
      </div>
    </div>
  </div>

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
      var dots = document.getElementsByClassName("demo");
				// var captionText = document.getElementById("caption");
        if (n > slides.length) {
         slideIndex = 1
       }
       if (n < 1) {
         slideIndex = slides.length
       }
       for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
       }
       for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" active", "");
       }
       slides[slideIndex - 1].style.display = "block";
       dots[slideIndex - 1].className += " active";
				// captionText.innerHTML = dots[slideIndex - 1].alt;
     }
   </script>

 </div>

 <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->



 <script>
  function openNav(folder, name) {
			// AJAX
     var xmlhttp = new XMLHttpRequest();
     xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("slideshow").innerHTML = this.responseText;
     }
				// alert(folder);
     };
     xmlhttp.open("GET", "activities_slideshow.php?folder=" + folder + "&name=" + name, true);
     xmlhttp.send();
     document.getElementById("myNav").style.width = "100%";
     document.getElementById("navmenu").style.display = "None";
			// AJAX
    }

    function closeNav() {
     document.getElementById("myNav").style.width = "0%";
     document.getElementById("navmenu").style.display = "Block";
   }
 </script>

 <!-- Slideshow Section End -->



 <!--footer-->
 <?php include 'includes/footer.php';?>





 <script>
  AOS.init();
</script>

</body>
</html>