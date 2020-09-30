<?php

$folder = $_REQUEST["folder"];
$name = $_REQUEST["name"];
// echo "<p>$folder</p>";
$images = scandir($folder);
array_splice($images, 0, 2);
$num_of_images = count($images);

echo '
<div class="row">
            <div class="caption-container">
               <span>' . $name . '</span>
            </div>
      </div>';

echo '<div class="row" >';
for ($i = 0; $i < $num_of_images; ++$i) {
      echo '<div class="mySlides">
                  <div class="numbertext">' . ($i + 1) . ' / ' . $num_of_images . '</div>
                  <img class="img-fluid img-thumbnail"  src="' . $folder . $images[$i] . '">
      </div>';
}

echo '</div>
      <div class="row mt-4 mb-4">
             <div class="col text-center" style="left:8%;"><button class="btn btn-light btn-arrow-left" onclick="plusSlides(-1)">❮</button></div>
             <div class="col text-center" style="right:8%;"><button class="btn btn-light btn-arrow-right" onclick="plusSlides(1)">❯</button></div>
<script>showSlides(1);</script>
</div>
      <div class="row" data-aos="fade-down-right">';
for ($i = 0; $i < $num_of_images; ++$i) {
      echo '<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                  <img class="demo cursor img-thumbnail" src="' . $folder . $images[$i] . '" style="width:100%" onclick="currentSlide(' . ($i + 1) . ')">
            </div>';
}
echo '</div>';

?>