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
                        <span><a href="index.php">Home</a> / <span>Hostel Module</span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row student-form-area">
        <div class="col-12">
         <h4 class="text-center p-2">Hostel Module Details </h4><hr>
         
         <div class="title-text">
             <h5 class="text-center">Students Boy's Girl's Staff Hostel</h5>
         </div>


<div class="container">
  <div class="hostel-module">
    <img src="img/Hostel/h1.jpg" style="width:50%; height: 500px; "alt="Hostel Image">
    <div class="hostel-details">
        <h2>Fill Hostel Form</h2>
        <form id="booking-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" required>
            <label for="aadhaar">Aadhaar Number:</label>
            <input type="text" id="aadhaar" name="aadhaar" required>
            <label for="college">College Name:</label>
            <input type="text" id="college" name="college" required>
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
   
      <input type="submit" value="Book Now">
    </form>
  </div>
</div>

  <div class="booking-form">
    <h2>Hostel Details</h2>
    <p id="location">Location: West Bengal, Kolkata,Big City</p>
    <p id="capacity">Capacity: 1000 Boy's Students, 1000 Girl's Students,  1000 Staff's Students,</p>
    <p id="facilities">Facilities: Wi-Fi, study room, gym, common room, Food, Everything All Facilities,</p>
  </div>
</div><hr>

<div class="container">
    <h1>Hostel Pictures</h1>
  <div class="image-container">
    <img src="img/hostel/h2.jpg" alt="Hostel 1">
    <img src="img/hostel/h3.jpg" alt="Hostel 2">
    <img src="img/hostel/h4.jpg" alt="Hostel 3">
    <img src="img/hostel/h5.jpg" style="height: 170px;" alt="Hostel 4">
  </div>
</div>



























































<?php
    include 'include/footer.php';
?>