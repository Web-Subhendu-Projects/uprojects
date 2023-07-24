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
                        <span><a href="index.php">Home</a> / <span> View Teachers</span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row title_2">
            <div class="col-12">
                <h4 class="text-center" style="border-radius: 21px; font-family: initial; font-weight: bold;">View Teachers Details</h4><hr>
            </div>
        </div>

        <div class="row view-area-top_1">
            <div class="col-12">
                <div class="view-area">
                    <h4>Teachers Details</h4><hr>

                    <form>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <table class="table table-responsive">
                                    <tr>
                                        <td><input type="text" name="name" class="form-control" placeholder="Enter Teacher Name..."></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-3">
                                <table class="table table-responsive">
                                    <tr>
                                        <td><input type="id number" name="number" class="form-control" placeholder=" ID Card Number"></td>
                                    </tr>
                                </table>
                            </div>

                               <div class="col-12 col-md-3">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>
                                           <select class="form-control" name="Trade">
                                            <option disabled selected value="">Teaching All Subject</option>
                                            <option value="Eng">English Communication Skill</option>
                                            <option value="Eng">Business Statistics & Communication</option>
                                            <option value="Eng">Management Communication Skill</option>
                                            <option value="Eng">Hardoware+Networking +Telecommunication</option>
                                            <option value="Eng">Financil & Marketing Skill</option>
                                            <option value="Eng">Software & Website Development Skill</option>
                                            <option value="Eng">IT Information Security+Technology Skill  </option>
                                            <option value="Eng">Seience Physics+Chemistry+Mathematics Skill</option>
                                            <option value="Eng">Electrical+Mechanical+Civil Engineeing Skill</option>
                                        </select>
                                        </td>
                                    </tr>                     
                                </table>
                            </div>

                            <div class="col-12 col-md-3 w-100">
                            <table class="table table-responsive">
                                <tr>
                                    <td>
                                        <input type="submit" name="search" value="Search.....">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        </div>
                    </form>

                     <!--Data table start here-->

                     <div class="row_data">
                    <div class="col-12 m-0 p-0">
                        <table id='empTable' class='display dataTable table-responsive'>
                            <thead>
                                <tr>
                                    <th>Id No</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Subjet</th>
                                    <th>Teaching Room No</th>
                                    <th>D.O.B</th>
                                    <th>Aadhar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>UC782342</td>
                                    <td>Dr Apj Abdul Kalam</td>
                                    <td>+91 9733960608</td>
                                    <td>Software & Website</td>
                                    <td>A-12</td>
                                    <td>10-10-1999</td>
                                    <td>946310986044</td>
                                    <td>
                                        <a href="javascript:void(0)"><button class="edit"><i class="fas fa-edit"></i></button></a>  
                                        <a href="javascript:void(0)"><button class="view"><i class="fas fa-eye"></i></button></a>
                                        <a href="javascript:void(0)"><button class="del"><i class="fas fa-trash"></i></button></a>           
                                    </td>
                                </tr>
                                
                                <tr>
                                   <td>UC782342</td>
                                    <td>Dr Apj Abdul Kalam</td>
                                    <td>+91 9733960608</td>
                                    <td>Software & Website</td>
                                    <td>A-12</td>
                                    <td>10-10-1999</td>
                                    <td>946310986044</td>
                                    <td>
                                        <a href="javascript:void(0)"><button class="edit"><i class="fas fa-edit"></i></button></a>  
                                        <a href="javascript:void(0)"><button class="view"><i class="fas fa-eye"></i></button></a>
                                        <a href="javascript:void(0)"><button class="del"><i class="fas fa-trash"></i></button></a> 
                                    </td>
                                </tr>

                                <tr>
                                   <td>UC782342</td>
                                    <td>Dr Apj Abdul Kalam</td>
                                    <td>+91 9733960608</td>
                                    <td>Software & Website</td>
                                    <td>A-12</td>
                                    <td>10-10-1999</td>
                                    <td>946310986044</td>
                                    <td>
                                        <a href="javascript:void(0)"><button class="edit"><i class="fas fa-edit"></i></button></a>  
                                        <a href="javascript:void(0)"><button class="view"><i class="fas fa-eye"></i></button></a>
                                        <a href="javascript:void(0)"><button class="del"><i class="fas fa-trash"></i></button></a> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                     <!--Data table end here-->

                </div>
            </div>
        </div>
    </div>


<?php
    include 'include/footer.php';
?>