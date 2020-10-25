<!doctype html>
<html>
<head>
    <!--head php-->
    <?php include 'includes/head.php';?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
    <style>.mssg {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-image: linear-gradient(54deg, #9164ff, #8bfff4);
        background-repeat: no-repeat
    }

    .card {
        box-shadow: 0px 4px 8px 0px #BDBDBD
    }

    .profile-pic {
        width: 150px !important;
        height: 150px;
        box-shadow: 0px 4px 8px 0px #BDBDBD
    }

    .owl-carousel .owl-nav button.owl-next,
    .owl-carousel .owl-nav button.owl-prev {
        background: 0 0;
        color: #1E88E5 !important;
        border: none;
        padding: 5px 20px !important;
        font: inherit;
        font-size: 50px !important
    }

    .owl-carousel .owl-nav button.owl-next:hover,
    .owl-carousel .owl-nav button.owl-prev:hover {
        color: #0D47A1 !important;
        background-color: transparent !important
    }

    .owl-dots {
        display: none
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }

    .item {
        display: none
    }

    .next {
        display: block !important;
        position: relative;
        transform: scale(0.8);
        transition-duration: 0.3s;
        opacity: 0.6
    }

    .prev {
        display: block !important;
        position: relative;
        transform: scale(0.8);
        transition-duration: 0.3s;
        opacity: 0.6
    }

    .item.show {
        display: block;
        transition-duration: 0.4s
    }

    .content{
        text-align: justify;
    }

    @media screen and (max-width: 999px) {

        .next,
        .prev {
            transform: scale(1);
            opacity: 1
        }

        .item {
            display: block !important
        }
    }</style>



</head>
<body>


    <!-- Header -->
    <?php include 'includes/header.php';?>




    <!--nav-bar-->
    <?php include 'includes/navbar.php';?>              

    <div class="container-fluid mssg my-5">
        <div class="container-lg px-3 px-sm-5 my-5 text-center">
            <h4 class="mb-5 font-weight-bold">Message From the Director </h4>
            <div class="card border-0 py-3 px-4 ">
                <div class="row justify-content-center"> <img src="images/message/sanjiv.jpg" alt="director iet-davv" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h5 class="mb-3 mt-2">Dr. Sanjiv Tokekar</h5>
                <h6 class="mb-3 mt-2">Director, IET-DAVV</h6>
                <i class="fa fa-quote-right" style="font-size:40px;"></i>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum iure ab nihil animi laudantium necessitatibus odio nobis, cumque sequi, ducimus odit? Recusandae rem velit corporis cupiditate excepturi officia maiores eveniet.</p>
            </div>

        </div>   

        <div class="container-fluid px-3 px-sm-5 my-5 text-center">
            <h4 class="mb-5 font-weight-bold">Message From the Program Officers</h4>
            <div class="row">
                <div class="col-lg-6 my-5">
                    <div class="card border-0 py-3 px-4  ">
                        <div class="row justify-content-center"> <img src="images/message/ssk.jpg" alt="program officer boys unit" class="img-fluid profile-pic mb-4 mt-3"> </div>
                        <h5 class="mb-3 mt-2">Dr. Shailendra Singh Khinchi</h5>
                        <h6 class="mb-3 mt-2">Program Officer</h6>
                        <i class="fa fa-quote-right" style="font-size:40px;"></i>
                        <p class="content mb-5 mx-2"> 
                            <b>" The flower that blooms in adversity is the most rare and beautiful of all " <br><span class="d-block text-right" style="text-align: right;">-  Walt Disney.</span></b>
                            <br> The quote speaks so much about our NSS volunteers I look at them as the flowers that dare to be different from the rest. Our dignitaries are soaring high with the promise of a bright future of our volunteers. Its uniqueness lies in its flexibility to adapt to respond to the changing perspective of social scenerio  and to be open to the new horizons  of growth and excellence. I would like to appreciate the entire team for a job well done and for their whole hearted involvement to take NSS to such great heights. I  congratulate all for  their tireless efforts and hard work for the launching of NSS IET-DAVV  website. I also thank our Director Dr. Sanjeev Tokekar for his constant support and encouragement. With warm wishes and God's blessings.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 my-5">
                        <div class="card border-0 py-3 px-4 ">
                            <div class="row justify-content-center"> <img src="images/message/suwarna.jpg" alt="Dr. Suwarna Torgal program officer girls unit"class="img-fluid profile-pic mb-4 mt-3"> </div>
                            <h5 class="mb-3 mt-2">Dr. Suwarna Torgal</h5>
                            <h6 class="mb-3 mt-2">Program Officer</h6>
                            <i class="fa fa-quote-right" style="font-size:40px;"></i>
                            <p class="content mb-5 mx-2"> "The flower that blooms in adversity is the most rare and beautiful of all" -  Walt Disney. The quote speaks so much about our NSS volunteers I look at them as the flowers that dare to be different from the rest. Our dignitaries are soaring high with the promise of a bright future of our volunteers. Its uniqueness lies in its flexibility to adapt to respond to the changing perspective of social scenerio  and to be open to the new horizons  of growth and excellence. I would like to appreciate the entire team for a job well done and for their whole hearted involvement to take NSS to such great heights. I  congratulate all for  their tireless efforts and hard work for the launching of NSS IET-DAVV  website. I also thank our Director Dr. Sanjeev Tokekar for his constant support and encouragement. With warm wishes and God's blessings.</p>
                        </div>
                    </div>
                </div>


            </div>


         

    <!--footer-->
    <?php include 'includes/footer.php';?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>
