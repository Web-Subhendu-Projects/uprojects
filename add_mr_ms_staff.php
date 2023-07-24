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
                        <span><a href="index.php">Home</a> / <span>Add Staff</span></span>
                    </div>
                </div>
            </div>
        </div>

         <div class="row staff-form-area">
         <div class="col-12">
         <h4 class="text-center p-2"> Add Mr/Ms: Staff 's Details</h4><hr>

         <form>
                <div class="row">
                    <div class="col-12">
                        <div class="left-form-1">
                            <h5 class="text-center pt-1">Personal Details</h5>

                            <table class="table table-responsive w-100">
                                <tr>
                                    <td>Full Name<span style="color: red;">*</span></td>
                                    <td><input type="text" name="tname" placeholder="Enter Your Name" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Father's Name<span style="color: red;">*</span></td>
                                    <td><input type="text" name="tname" placeholder="Enter Your Father's Name" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Mother Name<span style="color: red;">*</span></td>
                                    <td><input type="text" name="tname" placeholder="Enter Your Mother's Name" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Mobile Number<span style="color: red;">*</span></td>
                                    <td><input type="text" name="tphone" placeholder="Enter Your Mobile Number" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Alt Land Number<span style="color: red;">*</span></td>
                                    <td><input type="text" name="tAlt.phone" placeholder="Enter Your Alt. Number" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Email ID<span style="color: red;">*</span></td>
                                    <td><input type="Email" name="tmail" placeholder="Enter Your Email ID" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Date of Birth<span style="color: red;">*</span></td>
                                    <td><input type="date" name="tbob" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Aadhar Number<span style="color: red;">*</span></td>
                                    <td><input type="text" name="tAadhar" placeholder="1001 2002 3003 4004" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Gender<span style="color: red;">*</span></td>
                                    <td>
                                       <select class="form-control w-100" name="tGender" required>
                                           <option disabled selected value="">Select Gender</option>
                                           <option value="Male">Male</option>
                                           <option value="Female">Female</option>
                                           <option value="Male">Other</option>
                                       </select>
                                 </tr>

                                 <tr>
                                    <tr>
                                    <td>Religion<span style="color: red;">*</span></td>
                                    <td>
                                       <select class="form-control w-100" name="tReligion" required>
                                           <option disabled selected value="">Select Religion</option>
                                           <option value="Hindu">Hindu</option>
                                           <option value="Islam">Islam</option>
                                           <option value="Sikh">Sikh</option>
                                           <option value="Male">Other</option>
                                       </select>
                                 </tr>

                                <tr>
                                    <tr>
                                    <td>Category<span style="color: red;">*</span></td>
                                    <td>
                                       <select class="form-control w-100" name="tCategory" required>
                                           <option disabled selected value="">Select Category</option>
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

                    <div class="col-12"><hr>
                        <div class="address-form-1">
                            <h4 class="text-center pt-1">Personal Address</h4>

                                <table class="table table-responsive w-100">
                                <tr>
                                    <td>Village <span style="color:red;">*</span></td>
                                    <td><input type="text" name="tvill" placeholder="Enter Your Village" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Post Office<span style="color:red;">*</span></td>
                                    <td><input type="text" name="tPost" placeholder="Enter Your Post Office" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Police Station <span style="color:red;">*</span></td>
                                    <td><input type="text" name="tps" placeholder="Enter Your Police Station" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Land Area<span style="color:red;">*</span></td>
                                    <td><input type="text" name="tarea" placeholder="Enter Your Sub Division" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>House Number<span style="color:red;">*</span></td>
                                    <td><input type="text" name="tHouseno" placeholder="Enter Your House Number" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>District<span style="color:red;">*</span></td>
                                    <td><input type="text" name="tdist" placeholder="Enter Your District Name" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>State Name<span style="color:red;">*</span></td>
                                    <td><input type="text" name="tState" placeholder="Enter Your State" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Sub-Word No<span style="color:red;">*</span></td>
                                    <td><input type="text" name="tSub-Word" placeholder="Enter Your Sub Division No" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Country<span style="color:red;">*</span></td>
                                    <td><input type="text" name="tCountry" placeholder="Enter Your Country" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Pin Code<span style="color:red;">*</span></td>
                                    <td><input type="text" name="tPin" placeholder="Enter Your Pin Code" class="form-control"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!--Address Area End Here-->
                </div> 






                 <!--Education Details Strt Here--> 

                    <div class="row">
                        <div class="col-12 mt-1"><hr>
                            <div class="qualification-degree">
                                <h4 class="text-center">Education Qualifcation</h4>

                                 <table class="table table-responsive w-100">
                                    <thead>
                                        <tr>
                                            <th>Degree</th>
                                            <th>School / College </th>
                                            <th>Board / University </th>
                                            <th>Year of Passing </th>
                                            <th>Percentage (%) </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="Degree1" class="form-control" placeholder="Enter Degree"></td>
                                            <td><input type="text" name="College1" class="form-control" placeholder="Enter School / College"></td>
                                            <td><input type="text" name="Board1" class="form-control" placeholder="Enter Board / University"></td>
                                            <td><input type="text" name="Pass1" class="form-control" placeholder="Enter Year of Passing"></td>
                                            <td><input type="text" name="Percentage1" class="form-control" placeholder="Enter Percentage (%)"></td>
                                        </tr>

                                        <tr>
                                            <td><input type="text" name="Degree1" class="form-control" placeholder="Enter Degree"></td>
                                            <td><input type="text" name="College1" class="form-control" placeholder="Enter School / College"></td>
                                            <td><input type="text" name="Board1" class="form-control" placeholder="Enter Board / University"></td>
                                            <td><input type="text" name="Pass1" class="form-control" placeholder="Enter Year of Passing"></td>
                                            <td><input type="text" name="Percentage1" class="form-control" placeholder="Enter Percentage (%)"></td>
                                        </tr>

                                        <tr>
                                            <td><input type="text" name="Degree1" class="form-control" placeholder="Enter Degree"></td>
                                            <td><input type="text" name="College1" class="form-control" placeholder="Enter School / College"></td>
                                            <td><input type="text" name="Board1" class="form-control" placeholder="Enter Board / University"></td>
                                            <td><input type="text" name="Pass1" class="form-control" placeholder="Enter Year of Passing"></td>
                                            <td><input type="text" name="Percentage1" class="form-control" placeholder="Enter Percentage (%)"></td>
                                        </tr>

                                        <tr>
                                            <td><input type="text" name="Degree1" class="form-control" placeholder="Enter Degree"></td>
                                            <td><input type="text" name="College1" class="form-control" placeholder="Enter School / College"></td>
                                            <td><input type="text" name="Board1" class="form-control" placeholder="Enter Board / University"></td>
                                            <td><input type="text" name="Pass1" class="form-control" placeholder="Enter Year of Passing"></td>
                                            <td><input type="text" name="Percentage1" class="form-control" placeholder="Enter Percentage (%)"></td>
                                        </tr>

                                       
                            
                                      <div class="row">
                                      <div class="col-12 m-0 p-0">
                                     <div class="submit">
                                    <table class="table table-responsive">
                                  <tr>
                                    <td>
                                        <input style="margin: 5px;" type="Reset" value="Reset Info" class="btn btn-danger">
                                        <input style="margin: 5px;" type="submit" name="submit" value="Add Qualifcation" class="btn btn-primary">
                                    </td>
                                </tr>
                            </table>
                        </div>
            
                    

                        <!--Education Details End Here-->



                        <!--Experience Details strt Here-->

                     <div class="row ">
                       <div class="col-12 pt-10"><hr>
                       <div class="qualification-Experience">
                       <h4 class="text-center">Works Experience</h4>

                      <table class="table table-responsive w-100">
                        <thead>
                          <tr>
                            <th>Degree</th>
                            <th>Field Name</th>
                            <th>Organisation Name</th>
                            <th>University/Company</th>
                            <th>Job Description</th>
                            <th>Work Of Years</th>
                            <th>Job Responsibilities</th>
                            </tr>
                            </thead> 

                            <tbody>
                                <tr>
                                <td><input type="text" name="Degree1" class="form-control" placeholder=" Degree"></td>
                                <td><input type="text" name="field" class="form-control" placeholder="field Name"></td>
                                <td><input type="text" name="Organisation" class="form-control" placeholder=" Organisation"></td>
                                <td><input type="text" name="College1" class="form-control" placeholder="Work College/Company"></td>
                                <td><input type="text" name="Description" class="form-control" placeholder="Description"></td>
                                <td><input type="number" name="Years" class="form-control" placeholder="Years"></td>
                                <td><input type="text" name="Responsibilities" class="form-control" placeholder="Responsibilities"></td>
                                </tr>

                                <tr>
                                <td><input type="text" name="Degree1" class="form-control" placeholder=" Degree"></td>
                                <td><input type="text" name="field" class="form-control" placeholder="field Name"></td>
                                <td><input type="text" name="Organisation" class="form-control" placeholder=" Organisation"></td>
                                <td><input type="text" name="College1" class="form-control" placeholder="Work College/Company"></td>
                                <td><input type="text" name="Description" class="form-control" placeholder="Description"></td>
                                <td><input type="number" name="Years" class="form-control" placeholder="Years"></td>
                                <td><input type="text" name="Responsibilities" class="form-control" placeholder="Responsibilities"></td>
                                </tr>

                        

                               <div class="row">
                              <div class="col-12">
                             <div class="submit">
                             <table class="table table-responsive">
                                <tr>
                                <td>
                                 <input style="margin: 5px;" type="Reset" value="Reset Info" class="btn btn-danger">
                                 <input style="margin: 5px;" type="submit" name="submit" value="Add Works Experience" class="btn btn-primary">
                                 <input style="margin: 5px;" type="submit" name="submit" value="Submit" class="btn btn-primary">
                                 </td>
                                </tr>
                            </div>
                         </table>
                       </form>
                    </div>
                  </div>
                        
                        

       
<!-- Experience Details End Here -->









<?php
 include 'include/footer.php';
?>