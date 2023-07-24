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
                        <span><a href="index.php">Home</a> / <span>Add Teachers</span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row teacher-form-area">
        <div class="col-12">
            <h4 class="text-center p-2"style="border-radius: 21px; font-family: initial; font-weight: bold;"> Teacher's Details</h4><hr>

            <form>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="left-form">
                            <h4 class="text-center pt-1">Personal Details</h4>
                            <table class="table table-responsive w-100">
                                <tr>
                                    <td>Name<span style="color: red;">*</span></td>
                                    <td><input type="text" name="tname" placeholder="Enter Your Name" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Father's Na.<span style="color: red;">*</span></td>
                                    <td><input type="text" name="tname" placeholder="Enter Your Father's Name" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Mother Na.<span style="color: red;">*</span></td>
                                    <td><input type="text" name="tname" placeholder="Enter Your Mother's Name" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Mobile No.<span style="color: red;">*</span></td>
                                    <td><input type="text" name="tphone" placeholder="Enter Your Mobile Number" class="form-control" required></td>
                                </tr>

                                <tr>
                                    <td>Alt. No..<span style="color: red;">*</span></td>
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
                                    <td>Aadhar No.<span style="color: red;">*</span></td>
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
                    <div class="col-12 col-md-6">
                        <div class="right-form">
                            <h4 class="text-center pt-1">Address</h4>
                            <table class="table table-responsive w-100">
                                <tr>
                                    <td>Village <span style="color:red;">*</span></td>
                                    <td><input type="text" name="tvill" placeholder="Enter Your Village" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Post <span style="color:red;">*</span></td>
                                    <td><input type="text" name="tPost" placeholder="Enter Your Post Office" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Police Station <span style="color:red;">*</span></td>
                                    <td><input type="text" name="tps" placeholder="Enter Your Police Station" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Area<span style="color:red;">*</span></td>
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
                                    <td>State <span style="color:red;">*</span></td>
                                    <td><input type="text" name="tState" placeholder="Enter Your State" class="form-control"></td>
                                </tr>

                                <tr>
                                    <td>Sub-No.<span style="color:red;">*</span></td>
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

                    <!--Education Details Here--> 
                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="qualification">
                                <h4 class="text-center pt-1">Education Qualifcation</h4><hr>
                                <table class="table table-responsive w-100">
                                    <thead>
                                        <tr>
                                            <th>Degree</th>
                                            <th>School / College</th>
                                            <th>Board / University</th>
                                            <th>Year of Passing </th>
                                            <th>Percentage (%)</th>
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
                                            <td><input type="text" name="Degree2" class="form-control" placeholder="Enter Degree"></td>
                                            <td><input type="text" name="College2" class="form-control" placeholder="Enter School / College"></td>
                                            <td><input type="text" name="Board2" class="form-control" placeholder="Enter Board / University"></td>
                                            <td><input type="text" name="Pass2" class="form-control" placeholder="Enter Year of Passing"></td>
                                            <td><input type="text" name="Percentage2" class="form-control" placeholder="Enter Percentage (%)"></td>
                                        </tr>

                                        <tr>
                                            <td><input type="text" name="Degree3" class="form-control" placeholder="Enter Degree"></td>
                                            <td><input type="text" name="College3" class="form-control" placeholder="Enter School / College"></td>
                                            <td><input type="text" name="Board3" class="form-control" placeholder="Enter Board / University"></td>
                                            <td><input type="text" name="Pass3" class="form-control" placeholder="Enter Year of Passing"></td>
                                            <td><input type="text" name="Percentage3" class="form-control" placeholder="Enter Percentage (%)"></td>
                                        </tr>

                                        <tr>
                                            <td><input type="text" name="Degree4" class="form-control" placeholder="Enter Degree"></td>
                                            <td><input type="text" name="College4" class="form-control" placeholder="Enter School / College"></td>
                                            <td><input type="text" name="Board4" class="form-control" placeholder="Enter Board / University"></td>
                                            <td><input type="text" name="Pass4" class="form-control" placeholder="Enter Year of Passing"></td>
                                            <td><input type="text" name="Percentage4" class="form-control" placeholder="Enter Percentage (%) " onclick="MoreDetails()"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="row">
                                    <div class="col-12 col-md-8"></div>
                                    <div class="col-12 col-md-4">
                                        <div class="add-more">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="more">Add More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--educational details End here-->    
                
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="qualification-degree">
                                <h4 class="text-center p-1">Profesonal Qualification</h4><hr>

                                <table class="table table-responsive">
                                 <thead>
                                     <tr>
                                         <th>Institute & Location</th>
                                         <th>Courses & Skills Attained</th>
                                         <th>Board / University</th>
                                         <th>Course Duration</th>
                                         <th>Major Subjects</th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                     <tr>
                                        <td><input type="text" name="degree1" class="form-control" placeholder="Enter Institute & Location"></td>
                                        <td><input type="text" name="school1" class="form-control" placeholder="Enter Courses & Skills Attained"></td>   
                                        <td><input type="text" name="board1" class="form-control"placeholder="Enter Board / University"></td>                                              
                                        <td><input type="text" name="pass1" class="form-control" placeholder="Enter Course Duratio"></td>                                              
                                        <td><input type="text" name="percetage1" class="form-control"placeholder="Enter Percentage"></td>
                                     </tr>

                                      <tr>
                                        <td><input type="text" name="degree1" class="form-control" placeholder="Enter Institute & Location"></td>
                                        <td><input type="text" name="school1" class="form-control" placeholder="Enter Courses & Skills Attained"></td>   
                                        <td><input type="text" name="board1" class="form-control"placeholder="Enter Board / University"></td>                                              
                                        <td><input type="text" name="pass1" class="form-control" placeholder="Enter Course Duratio"></td>                                              
                                        <td><input type="text" name="percetage1" class="form-control"placeholder="Enter Percentage"></td>
                                     </tr>

                                      <tr>
                                        <td><input type="text" name="degree1" class="form-control" placeholder="Enter Institute & Location"></td>
                                        <td><input type="text" name="school1" class="form-control" placeholder="Enter Courses & Skills Attained"></td>   
                                        <td><input type="text" name="board1" class="form-control"placeholder="Enter Board / University"></td>                                              
                                        <td><input type="text" name="pass1" class="form-control" placeholder="Enter Course Duratio"></td>                                              
                                        <td><input type="text" name="percetage1" class="form-control"placeholder="Enter Percentage"></td>   
                                     </tr>

                                      <tr>
                                        <td><input type="text" name="degree1" class="form-control" placeholder="Enter Institute & Location"></td>
                                        <td><input type="text" name="school1" class="form-control" placeholder="Enter Courses & Skills Attained"></td>   
                                        <td><input type="text" name="board1" class="form-control"placeholder="Enter Board / University"></td>                                              
                                        <td><input type="text" name="pass1" class="form-control" placeholder="Enter Course Duratio"></td>                                              
                                        <td><input type="text" name="percetage1" class="form-control"placeholder="Enter Percentage"></td>
                                     </tr>

                                     <tr>
                                        <td><input type="text" name="degree1" class="form-control" placeholder="Enter Institute & Location"></td>
                                        <td><input type="text" name="school1" class="form-control" placeholder="Enter Courses & Skills Attained"></td>   
                                        <td><input type="text" name="board1" class="form-control"placeholder="Enter Board / University"></td>                                              
                                        <td><input type="text" name="pass1" class="form-control" placeholder="Enter Course Duratio"></td>                                              
                                        <td><input type="text" name="percetage1" class="form-control"placeholder="Enter Percentage"></td>
                                     </tr>

                                     <tr>
                                        <td><input type="text" name="degree1" class="form-control" placeholder="Enter Institute & Location"></td>
                                        <td><input type="text" name="school1" class="form-control" placeholder="Enter Courses & Skills Attained"></td>   
                                        <td><input type="text" name="board1" class="form-control"placeholder="Enter Board / University"></td>                                              
                                        <td><input type="text" name="pass1" class="form-control" placeholder="Enter Course Duratio"></td>                                              
                                        <td><input type="text" name="percetage1" class="form-control"placeholder="Enter Percentage"></td>
                                     </tr>

                                     <tr>
                                        <td><input type="text" name="degree1" class="form-control" placeholder="Enter Institute & Location"></td>
                                        <td><input type="text" name="school1" class="form-control" placeholder="Enter Courses & Skills Attained"></td>   
                                        <td><input type="text" name="board1" class="form-control"placeholder="Enter Board / University"></td>                                              
                                        <td><input type="text" name="pass1" class="form-control" placeholder="Enter Course Duratio"></td>                                              
                                        <td><input type="text" name="percetage1" class="form-control"placeholder="Enter Percentage"></td>
                                     </tr>
                                 </tbody>   
                                </table>
                            </div>
                        </div>
                    </div>








                <div class="row">
                    <div class="col-12 m-0 p-0">
                        <div class="submit">
                            <table class="table table-responsive">
                                <tr>
                                    <td>
                                        <input style="margin: 5px;" type="Reset" value="Reset Info" class="btn btn-danger">
                                        <input style="margin:5px; " type="submit" name="submit" value="Add Student" class="btn btn-primary">
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