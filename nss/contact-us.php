<!DOCTYPE html>
<html lang="en">
<head>
  
    <!--external css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link  rel="stylesheet" href="css files/contact us.css ">
    
       <!--head php-->
       <?php include 'includes/head.php';?>

    
</head>
<body>
  
    	<!-- Header -->
      <?php include 'includes/header.php';?>
  
  
      <!--nav-bar-->
      <?php include 'includes/navbar.php';?>
  
  
    <!--form-->

    <section class="contact py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card">
                        <div class="card-body">
                          <div class="row pb-3">
                              <div class="col-lg-12">
                                  <div class="heading-contact text-center py-3">
                                      <h3 class="head-contact">Contact Us</h3>
                                  </div>
                              </div>
                          </div>
                          <div class="form p-3">
                              <div class="row my-5 ">
                                  <div class="col-lg-12">
                                      <input type="text" class="effect-1" placeholder="Full Name" required>
                                       
                                  </div>
                     
                               </div>
                               <div class="row my-5">
                                   <div class="col-lg-12">
                                    
                                        <input type="email" class="effect-1" placeholder="Your E-mail" required>
                                        
                                      
                                   </div>
                               </div>
                              <div class="row ">
                                  <div class="col-lg-12">
                                    <textarea name="message" placeholder="Your Message" class="effect-1" required ></textarea>
                                   
                                  </div>
                              </div>
                              <div class="row my-5 ">
                                <div class="col-lg-12  text-center  ">
                                    <button type="submit" class="btn btn-primary " style="font-size: 15px;">Send Message</button>
                                </div>

                          </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!-- form end-->



<!--CONTACT-->
<div class="container my-5  py-5 contact-box">
    <div class="row">
      <!--address-->
      <div class="col-md-5 ">
          <div class="row my-2"><i class="material-icons mx-auto " style="font-size:3rem;color:red">place</i></div>
          
        
          <div class="row my-auto"><p class="mx-auto text-center">Institute of Engineering and Technology<br>
              Devi Ahilya Vishwavidyalaya<br>
              Khandwa Road Indore-452017 (M.P.)</p>
          </div>
          
      </div>
  
      <!--phone-->
      <div class="col-md-3 ">
          <div class="row my-2"><i class="material-icons  mx-auto" style="font-size:3rem;color:blue">local_phone</i></div>
          
        
          <div class="row my-4"><p class="mx-auto text-center">0731-2361116 / 2361117
            </p>
          </div>
          
      </div>
    <!--email-->
    <div class="col-md-4 ">
      <div class="row my-2"><i class="material-icons   mx-auto" style="font-size:3rem;color:black">local_post_office</i></div>
      
    
      <div class="row my-4"><p class="mx-auto text-center">nssietdavv@gmail.com
        </p>
      </div>
      
     </div>
     
    
  
  
  
   </div>
  
  
  
</div>


     <!--footer-->
     <?php include 'includes/footer.php';?>






</body>
</html>