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
                        <span><a href="index.php">Home</a> / <span>Add Student</span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row student-form-area">
        <div class="col-12">
            <h4 class="text-center">Student Admission Details</h4><hr>

            <form action="sql/add_student.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="left-form">
                            <h4 class="text-center pt-2">Personal Details</h4>
                            <table class="table table-responsive w-100">
                                <tr>
                                    <td>Name<span style="color: red;">*</span></td>
                                    <td><input type="text" name="name" placeholder="Enter Your Name" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Father's Na.<span style="color: red;">*</span></td>
                                    <td><input type="text" name="fname" placeholder="Enter Father's Name" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Mother Na.<span style="color: red;">*</span></td>
                                    <td><input type="text" name="mname" placeholder="Enter Mother's Name" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Mobile No.<span style="color: red;">*</span></td>
                                    <td><input type="text" name="phone" placeholder="Enter Mobile Number" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Alt. No..<span style="color: red;">*</span></td>
                                    <td><input type="text" name="alt" placeholder="Enter Alt. Number" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Email ID<span style="color: red;">*</span></td>
                                    <td><input type="Email" name="mail" placeholder="Enter Your Email ID" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Date of Birth<span style="color: red;">*</span></td>
                                    <td><input type="date" name="dob" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Aadhar No.<span style="color: red;">*</span></td>
                                    <td><input type="text" name="aadhar" placeholder="0000 0000 0000 0000" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Gender<span style="color: red;">*</span></td>
                                    <td>
                                       <select class="form-control w-100" name="gender" required>
                                           <option disabled selected value="">---Select---</option>
                                           <option value="Male">Male</option>
                                           <option value="Female">Female</option>
                                           <option value="Other">Other</option>
                                       </select>
                                 </tr>

                                <tr>
                                    <tr>
                                    <td>Religion<span style="color: red;">*</span></td>
                                    <td>
                                       <select class="form-control w-100" name="religion" required>
                                           <option disabled selected value="">---Select---</option>
                                           <option value="Hindu">Hindu</option>
                                           <option value="Islam">Muslim</option>
                                           <option value="Sikh">Sikh</option>
                                           <option value="Other">Other</option>
                                       </select>
                                 </tr>

                                <tr>
                                    <tr>
                                    <td>Category<span style="color: red;">*</span></td>
                                    <td>
                                       <select class="form-control w-100" name="cast" required>
                                           <option disabled selected value="">---Select---</option>
                                           <option value="General">General</option>
                                           <option value="SC">SC</option>
                                           <option value="ST">ST</option>
                                           <option value="OBC">OBC</option>
                                           <option value="OBC-A">OBC-A</option>
                                           <option value="OBC-B">OBC-B</option>
                                           <option value="OBC-C">OBC-C</option>
                                           <option value="Other">Other</option>
                                       </select>
                                   </td>
                                </tr>

                              <tr>
                                 <td>Upload Photo<span style="color:red;">*</span></td>
                                  <td><input type="file" name="image" class="form-control" accept="application/pdf, image/jpg, image/jpeg, image/png"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!--Address Area Start Here-->  
                    <div class="col-12 col-md-4">
                        <div class="right-form">
                            <h4 class="text-center pt-2">Address</h4>
                            <table class="table table-responsive w-100">
                                <tr>
                                    <td>Village <span style="color:red;">*</span></td>
                                    <td><input type="text" name="vill" placeholder="Enter Your Village" class="form-control"></td>
                             </tr>

                                <tr>
                                    <td>Post <span style="color:red;">*</span></td>
                                    <td><input type="text" name="post" placeholder="Enter Your Post" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Police Station <span style="color:red;">*</span></td>
                                    <td><input type="text" name="ps" placeholder="Enter Your Police Station" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Area<span style="color:red;">*</span></td>
                                    <td><input type="text" name="area" placeholder="Enter Your Sub Division" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>House Number<span style="color:red;">*</span></td>
                                    <td><input type="text" name="hnumber" placeholder="Enter Your House Number" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>District<span style="color:red;">*</span></td>
                                    <td><input type="text" name="dist" placeholder="Enter Your District" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>State <span style="color:red;">*</span></td>
                                    <td><input type="text" name="state" placeholder="Enter Your State" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Sub-No.<span style="color:red;">*</span></td>
                                    <td><input type="text" name="sub" placeholder="Enter Your Sub Division No" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Country<span style="color:red;">*</span></td>
                                    <td><input type="text" name="country" placeholder="Enter Your Country" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Pin Code<span style="color:red;">*</span></td>
                                    <td><input type="text" name="pin" placeholder="Enter Your Pin Code" class="form-control"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!--Address Area Start Here--> 

                    <!--Education Details Here--> 
                    <div class="col-12 col-md-4">
                        <div class="end-form">
                            <h4 class="text-center pt-2">Addmission Details</h4>
                            <table class="table table-responsive w-100">
                                <tr>
                                    <td>Class<span style="color:red;">*</span></td>
                                    <td>
                                        <select class="form-control" name="class" required>
                                            <option disabled selected value="">---Select---</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="B.Tech">B.Tech</option>
                                        </select>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>Selection Trade<span style="color:red;">*</span></td>
                                    <td>
                                        <select class="form-control" name="trade" required>
                                            <option disabled selected value="">Selection Trade</option>
                                            <option value="Engineeing">Electrical Engineering</option>
                                            <option value="Engineeing">Machanical Engineering</option>
                                            <option value="Engineeing">Civll Engineeing</option>
                                            <option value="Engineeing">Computer Seience Engineering</option>
                                           
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Addmission Date <span style="color:red;">*</span></td>
                                    <td><input type="date" name="adate" class="form-control"></td>
                                </tr>

                                <tr>
                                   <td>Previous School <span style="color:red;">*</span></td>
                                    <td><input type="text" name="pschool" class="form-control" placeholder="Enter Previous School"></td>
                                </tr>

                                 <tr>
                                   <td>Previous Collage <span style="color:red;">*</span></td>
                                    <td><input type="text" name="pcollage" class="form-control" placeholder="Enter Previous Collage"></td>
                                </tr>

                                 <tr>
                                   <td>Upload TC <span style="color:red;">*</span></td>
                                    <td><input type="File" name="tc" class="form-control"></td>
                                </tr>
                            </table>
                        </div>
                    </div> 

                    <!--educational details End here-->    
                </div>
                <div class="row">
                    <div class="col-12 m-0 p-0">
                        <div class="submit">
                            <table class="table table-responsive">
                                <tr>
                                    <td style>
                                        <input type="Reset" value="Reset Info" class="btn btn-danger">
                                        <input type="submit" name="add_ok" value="Add Student" class="btn btn-primary">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
    include 'include/footer.php';

?>