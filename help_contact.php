<?php
    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/top_header.php';
?>



<div class="container-fluid whole">
            <div class="row">
                <div class="col-12">
                <div class="dashboard">
                 <h1><span class="fas fa-school" style="color: #FF1E1E;"></span> <span>Welcome To University Saraswati Vidya</span></h1><hr>


                    <div class="title">
                        <span><a href="index.php">Home</a> / <span>Help|Contact Details</span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row student-form-area">
        <div class="col-12">
         <h4 class="text-center p-2">Help|Contact Details</h4><hr>
         
         <div class="title-text">
             <h5 class="text-center">University Help|Contact Details</h5>



        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 style="font-family: initial;">Contact</h2>                 
                            <div class="breadcrumb" id="page-banner" style= "background-image: url(img/help/banner-1.jpg)">
                                <li class="breadcrumb-item"><a href="index.php" style="text-decoration-line: none;">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page" style="color: #FBEEAC;">Contact</li>
                           </div>                      
                    </div>  
                </div>
            </div> 


            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-form">
                            <form id="contact-form" action="#" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="name" type="text" placeholder="Your name" required="required">
                                        </div> 
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="email" type="text" placeholder="Email" required="required">
                                        </div> 
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="subject" type="text" placeholder="Subject" required="required">                        
                                      </div>  
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" placeholder="Phone" required="required">
                                        </div> 
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="messege" placeholder="Messege" required="required"></textarea>
                                        </div> 
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-12">
                                        <div class="singel-form">
                                            <button type="submit" class="main-btn" style="width: 20%; font-family: initial; font-size: 20px;">Send Data</button>
                                        </div> 
                                    </div> 
                                </div> 
                            </form>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>

             <div class="container">
                <div class="row">
                    <div class="col-12">
                    <div class="contact-address ">
                        <ul>
                            <li>
                                 <div class="singel-address">
                                    <div class="icon" style="background-color: #1B9C85; border-radius: 50px;">
                                        <i class="fa fa-home" style="color: #F2BE22;"></i>
                                    </div>
                                    <div class="cont">
                                        <p style="font-family: initial; font-size: 30px;">Salt lake Sector 5, Bidhanagar, Kolkata, West Bengal, India, 7000009</p>
                                    </div>
                                </div> 
                            </li>

                            <li>
                                <div class="singel-address">
                                    <div class="icon" style="background-color: #1B9C85; border-radius: 50px;">
                                        <i class="fa fa-phone"  style="color: #F2BE22;"></i>
                                    </div>
                                    <div class="cont">
                                        <p style="font-family: initial; font-size: 30px;">Subhendu Majhi:- +91 9733960608</p>
                                        <p style="font-family: initial; font-size: 30px;">+1235434587</p>
                                    </div>
                                </div> 
                            </li>

                            <li>
                                <div class="singel-address">
                                    <div class="icon" style="background-color: #1B9C85; border-radius: 50px;">
                                        <i class="fas fa-at" style="color: #F2BE22;"></i>
                                    </div>
                                    <div class="cont">
                                        <p style="font-family: initial; font-size: 30px;">subhendu@gmail.com</p>
                                        <p style="font-family: initial; font-size: 30px;">infoums@mail.com</p>
                                    </div>
                                </div> 
                            </li>
                        </ul>
                    </div> 
                </div>
            </div>
        </div>

            <div class="container">
            	<div class="row">
            		<div class="col-12">
            			<div class="map">
            				<div class="contact-map"></div>
            			</div>		  
                    </div> 
                </div>
            </div> 
        </div> 


        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>





























































<?php
    include 'include/footer.php';
?>