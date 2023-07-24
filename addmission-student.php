<?php
    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/top_header.php';
?>


<div class="container-fluid whole">
            <div class="row">
                <div class="col-12">
                <div class="dashboard">
                    <h1><span class="fas fa-school" style="color: #FF1E1E;"></span>  <span>Welcome To University Saraswati Vidya</span></h1><hr>


                    <div class="title">
                        <span><a href="index.php">Home</a> / <span>Student Addmission</span></span>
                    </div>
                </div>
            </div>
        </div>


        <div class="row header-title">
           <div class="col-12">
               <h4 class="text-center">Online Addmission Registration</h4><hr>
             </div>
          </div>


          <div class="row addmission-details-area">
           <div class="col-12">
            <div class="personal-details">
              <h5 class="text-center">Personal Details Form</h5>

           <div class="container">
              <div class="col-12">
               <div class="row">
          <div class="title">Registration</div>

          <div class="content">
           <form action="#">
            <div class="user-details">
            <div class="input-box">
               <span class="details">Full Name<span style="color: red;">*</span></span>
               <input type="text" name="name" placeholder="Enter your name" required>
            </div>

            <div class="input-box">
              <span class="details">Parents Name<span style="color: red;">*</span></span>
              <input type="text" name="name" placeholder="Enter your Parents" required>
          </div>

          <div class="input-box">
              <span class="details">Email ID<span style="color: red;">*</span></span>
              <input type="text" name="email" placeholder="@Gmail.com" required>
          </div>

          <div class="input-box">
             <span class="details">Aadhar No<span style="color: red;">*</span></span>
             <input type="text" name="aadr" placeholder=" 1111 1111 1111 1111" required>
          </div>

          <div class="input-box">
            <span class="details">Phone Number<span style="color: red;">*</span></span>
            <input type="text" name="phone" placeholder="+91 ********0" required>
          </div>
        
       
          <div class="input-box">
            <span class="details">Date Of Birth<span style="color: red;">*</span></span>
            <input type="text" name="Birth" placeholder="10/**/2**0" required>
          </div>

          <div class="input-box">
            <span class="details">Trade Department Apply<span style="color: red;">*</span></span>
            <input type="text" name="Trade" placeholder="CS/EE/EEE/ME/CE/BA/MA/**/.." required>
          </div>

          <div class="input-box">
            <span class="details">Address<span style="color: red;">*</span></span>
            <input type="text" name="Address" placeholder="Enter Your Full Address" required>
          </div>

          <div class="input-box">
            <span class="details">Country<span style="color: red;">*</span></span>
            <input type="text" name="name" placeholder="Country/State/Dist./City" required>
          </div>

          <div class="input-box">
            <span class="details">Pin<span style="color: red;">*</span></span>
            <input type="text" name="Number" placeholder="Enter Your Pin Code" required>
          </div>
        </div>
        
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>

          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>

          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Other</span>
            </label>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>




                    

                      




<?php
 include 'include/footer.php';
?>