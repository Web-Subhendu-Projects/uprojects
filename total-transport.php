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
                        <span><a href="index.php">Home</a> / <span>Total Transport View</span></span>
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
             <h5 class="text-center">View Our Transport</h5>
         </div>

      <div class="container">
         <div class="row">
    <div class="col-12 col-md-6 p-0 ">
      <img class="pull-left flip pr-20" width="500" src="img/bus/d.jpg" alt="" width= "500px" height="210px">
    </div>
    <div class="col-12 col-md-6 p-2">
      <img class="pull-left flip pr-20" width="500" src="img/bus/e.jpg" alt="" width= "500px" height="203px">
    </div>
  </div><hr>

   <div class="row">
    <div class="col-12 col-md-6 p-0 ">
      <img class="pull-left flip pr-20" width="500" src="img/bus/f.jpg" alt="" width= "500px" height="210px">
    </div>
    <div class="col-12 col-md-6 p-2">
      <img class="pull-left flip pr-20" width="500" src="img/bus/g.jpg" alt="" width= "500px" height="203px">
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
























































<?php
    include 'include/footer.php';
?>

