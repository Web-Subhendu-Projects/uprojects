<?php
    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/top_header.php';
?>



 <div class="container-fluid whole">
            <div class="row">
                <div class="col-12">
                <div class="dashboard">
                    <h1><span class="fas fa-school" style="color: #FF1E1E;"></span><span>Welcome To University Saraswati Vidya</span></h1><hr>


                    <div class="title">
                        <span><a href="index.php">Home</a>/<span>Student Dues Fees Details  </span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row student-form-area">
        <div class="col-12">
         <h4 class="text-center p-2"> Student Dues </h4><hr>
         
         <div class="title-text">
             <h5 class="text-center">Student Dues Fees Table</h5>
         </div>



  <div class="container p-0">
    <table id="duesTable">
      <thead>
        <tr>
          <th>Student Name</th>
          <th>Membership Type</th>
          <th>Duration (in months)</th>
          <th>Membership Fees</th>
          <th>Permanent (Student Fees)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Anjali Majhi</td>
          <td>Basic</td>
          <td>3</td>
          <td>3000.00</td>
          <td>Dues Pay</td>
        </tr>

        <tr>
          <td>Subhendu Majhi</td>
          <td>Basic</td>
          <td>3</td>
          <td>1000.00</td>
          <td>Dues Pay</td>
        </tr>
        


        <tr>
          <td>Ranjit Molick</td>
          <td>Premium</td>
          <td>6</td>
          <td>190000.00</td>
          <td>Dues Pay</td>
        </tr>
        <tr>
          <td>Madhoblota Mandal</td>
          <td>Gold</td>
          <td>12</td>
          <td>2400000.00</td>
          <td>Dues Pay</td>
        </tr>
      </tbody>
    </table>

    <div id="payMoney">
      <input type="text" id="studentName" style="border: 1px solid lightskyblue;" placeholder="Student Name">
      <input type="number" id="paymentAmount" style="border: 2px solid lightskyblue;margin-top: 11px;" placeholder="Payment Amount">
      <button onclick="payMoney()" style="color: white; background-color: royalblue;border: 1px solid lightskyblue; font-weight: bold;">Pay Money</button><hr>
  </div>
   

    <div id="permanentDetails">
      <button onclick="viewPermanentDetails()" style="color: white; background-color: royalblue; font-weight: bold; border: 1px solid lightskyblue;">View Permanent Details</button>
      <div id="permanentTableContainer"></div>
    </div>
  </div>








































<?php
    include 'include/footer.php';
?>