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
                        <span><a href="index.php">Home</a> / <span>Travel Management</span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row header-title">
           <div class="col-12">
               <h4 class="text-center">Student Travel Management System</h4><hr>
             </div>
          </div>

          <div class="title-text">
             <h5 class="text-center">Online Transport Registration</h5>
         </div>

      <div class="container">
              <div class="col-12">
               <div class="row">
          <div class="title">Apply for Transport Registration</div>

          <div class="content">
           <form action="#">
            <div class="user-details">
            <div class="input-box">
               <span class="details">Full Name<span style="color: red;">*</span></span>
               <input type="text" name="name" placeholder="Enter your name" required>
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
            <span class="details">Travel Date:<span style="color: red;">*</span></span>
            <input type="text" name="Birth" placeholder="00/00/23" required>
          </div>

          <div class="input-box">
            <span class="details">Trade Department Apply<span style="color: red;">*</span></span>
            <input type="text" name="Trade" placeholder="CS/EE/EEE/ME/CE.." required>
          </div>

          <div class="input-box">
            <span class="details">Transport Type:<span style="color: red;">*</span></span>
            <tr>
             <select class="form-control w-100" name="tGender" required>
              <option disabled selected value="">Select Gender</option>
              <option value="bus">Student Bus Service</option>
              <option value="car">Techare Car</option>
              <option value="cab">Cab Booking Service</option>
             </select>
           </tr>
          </div>

          <div class="input-box">
            <span class="details">Address/ Location<span style="color: red;">*</span></span>
            <input type="text" name="Address" placeholder="Enter Your Location Update" required>
          </div>

          <div class="input-box">
            <span class="details">State/Country<span style="color: red;">*</span></span>
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
  </div><hr>

  <div class="row">
    <div class="col-12 col-md-6 p-0 ">
      <img class="pull-left flip pr-20" width="500" src="img/bus/a.png" alt="" width= "500px" height="210px">
    </div>
    <div class="col-12 col-md-6 p-2">
      <img class="pull-left flip pr-20" width="500" src="img/bus/c.webp" alt="" width= "500px" height="203px">
    </div>
  </div><hr>

    <section class="table-section">
      <h2>Transport Applications</h2>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Transport Type</th>
            <th>Travel Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody id="table-body">
          <tr>
            <td>Akash Mondal</td>
            <td>akashmon10@gmail.com</td>
            <td>Teacher Car</td>
            <td>2023-02-20</td>
            <td>Approved</td>
          </tr>
          <tr>
            <td>Jane Smith</td>
            <td>janesmith11@gmail.com</td>
            <td>Student Bus</td>
            <td>2023-02-22</td>
            <td>Pending</td>
          </tr>
          <tr>
            <td>Bolina Johnson</td>
            <td>bonlinas24@gmail.com</td>
            <td>Cab Book </td>
            <td>2023-02-25</td>
            <td>Denied</td>
          </tr>
        </tbody>
      </table>
    </section>
  </div>
</div>


<script src="script.js"></script>

<?php
    include 'include/footer.php';
?>