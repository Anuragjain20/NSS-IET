<!DOCTYPE html>
<html>
<head>
  <title>NSS GALLERY TIMELINE | National Service Scheme,IET-DAVV</title>


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
<style type="text/css">
  *,
  *::before,
  *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  section {
    font: normal 16px/1.5 'Titillium Web', sans-serif;
    background: linear-gradient(54deg, #9164ff, #8bfff4);
    color: #3c3f64;
    overflow-x: hidden;
    padding-bottom: 50px;
  }

  .timeline ul li {
    list-style-type: none;
    position: relative;
    width: 6px;
    margin: 0 auto;
    padding-top: 50px;
    background: #fff;
  }
  .timeline ul li::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%) rotate(45deg);
    width: 20px;
    height: 20px;
    z-index: 2;
    background: #eee;
  }
  .timeline ul li div {
    position: relative;
    bottom: 0;
    width: 555px;
    padding: 20px;
    background: #fff;
    box-shadow: 4px 13px 30px 1px rgba(252, 56, 56, 0.2);
    border-radius: 5px;
    display: flex;
    align-items: center;
  }
  .timeline ul li div time {
    position: absolute;
    background: #f5af19;
    width: 130px;
    height: 30px;
    top: -15px;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    letter-spacing: 2px;
  }
  .timeline ul li div div {
    height: 100px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .timeline ul li div div p {
    text-align: center;
  }
  .timeline ul li div .discovery {
    margin-right: 10px;
  }
  .timeline ul li:nth-of-type(odd) > div {
    left: 45px;
  }
  .timeline ul li:nth-of-type(even) > div {
    left: -590px;
  }

  .timeline ul li div {
    visibility: hidden;
    opacity: 0;
    transition: all 0.5s ease-in-out;
  }
  .timeline ul li:nth-of-type(odd) div {
    transform: translate3d(100px, -10px, 0) rotate(10deg);
  }
  .timeline ul li:nth-of-type(even) div {
    transform: translate3d(-100px, -10px, 0) rotate(10deg);
  }
  .timeline ul li.in-view div {
    transform: none;
    visibility: visible;
    opacity: 1;
  }

  .timeline ul li div a img{
    object-fit: scale-down;
    max-height: 300px;
    width: calc(100vw - 91px);
  }

  @media screen and (max-width: 900px) {
    .timeline ul li div {
      width: 250px;
      flex-direction: column;
    }
    .timeline ul li div div {
      width: 80%;
      margin: 10px;
    }
    .timeline ul li:nth-of-type(even) > div {
      left: -289px;
    }
  }
  @media screen and (max-width: 600px) {

    .timeline ul li {
      margin-left: 20px;
    }
    .timeline ul li div {
      width: calc(100vw - 91px);
    }
    .timeline ul li:nth-of-type(even) > div {
      left: 45px;
    }
  }
</style>
</head>
<body>

 <!-- Header -->
 <?php include 'includes/header.php';?>




 <!--nav-bar-->
 <?php include 'includes/navbar.php';?>

 <div class="h2 section-title text-center my-3">
  Gallery
</div>
<section class="timeline">
  <ul>
    <?php
    $dir = "./images/gallery/";
    $folders = scandir($dir);
    usort($folders, function($a,$b){
      return -(explode('-',$a)[0]<=>explode('-',$b)[0]);
    });
    $details = array();
    foreach ($folders as $folder) {
      if ($folder !== "." and $folder !== ".." and is_dir($dir . $folder)) {
        $x = scandir($dir.$folder);
        $x1 = $x[rand(2,count($x)-1)];
        $x2 = $x[rand(2,count($x)-1)];
        while($x1==$x2)
        {
         $x2 = $x[rand(2,count($x)-1)];
       }
       $y1 = scandir($dir.$folder.'/'.$x1);
       $y2 = scandir($dir.$folder.'/'.$x2);
       ?>
       <li >
        <div>
          <time><?=$folder?></time>
          <a href="gallery.php?year=<?=$folder?>">
            <img class="discovery my-2 img-fluid" alt="<?=$folder?> nss activity pics" data-aos="flip-right" data-aos-duration="1500"
            src='<?= $dir.'/'.$folder.'/'.$x1.'/'.rawurlencode($y1[2])?>'></img>
            <img class="scientist my-2 img-fluid" alt="<?=$folder?> nss activity pics" data-aos="flip-right" data-aos-duration="1500" 
            src='<?= $dir.'/'.$folder.'/'.$x2.'/'.rawurlencode($y2[2])?>'></img>
          </a>
        </div>
      </li>
      <?php
    }
  }
  ?>
</section>

<!--footer-->
<?php include 'includes/footer.php';?>


</body>
<script>
  AOS.init();
</script>
<script type="text/javascript">
  var items = document.querySelectorAll(".timeline li");

  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (

      rect.left >= 0 &&

      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        if(!items[i].classList.contains("in-view")){
          items[i].classList.add("in-view");
        }
      } else if(items[i].classList.contains("in-view")) {
        items[i].classList.remove("in-view");
      }
    }
  }

  window.addEventListener("load", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
</script>
</html>


