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
                        <span><a href="index.php">Home</a> / <span>View Student</span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row title_1 p-0" >
            <div class="col-12">
                <h4 class="text-center" style="border-radius: 21px; font-family: initial; font-weight: bold;" >View Student Details</h4><hr>
            </div>
        </div>

        <div class="row view-area-top">
            <div class="col-12">
                <div class="view-area">
                    <h4>Students Details</h4><hr>
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-2 p-0 m-0">
                                <table class="table table-responsive">
                                    <tr>
                                        <td><input type="text" name="name" class="form-control" placeholder="Enter Name..."></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-2 p-0 m-0">
                                <table class="table table-responsive">
                                    <tr>
                                        <td><input type="roll" name="number" class="form-control" placeholder=" Roll No..."></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-2 p-0 m-0">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>
                                            <select class="form-control" name="class">
                                            <option disabled selected value=""> Class Name</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="B.Tech">B.Tech</option>
                                        </select>
                                        </td>
                                    </tr>                     
                                </table>
                            </div>
                               <div class="col-12 col-md-3 p-0 m-0">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>
                                           <select class="form-control" name="Trade">
                                            <option disabled selected value="">Selection Trade</option>
                                            <option value="Engineeing">Electrical Engineering</option>
                                            <option value="Engineeing">Electronics & Communication Engineering</option>
                                            <option value="Engineeing">Machanical Engineering</option>
                                            <option value="Engineeing">Civll Engineeing</option>
                                            <option value="Engineeing">Software Engineering</option>
                                            <option value="Engineeing">Computer Seience and Engineering</option>
                                        </select>
                                        </td>
                                    </tr>                     
                                </table>
                            </div>
                            <div class="col-12 col-md-3 m-0">
                            <table class="table table-responsive">
                                <tr>
                                    <td>
                                        <input type="submit" name="search" value="Search...">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        </div>
                    </form>

                     <!--Data table start here-->

                     <div class="row data">
                    <div class="col-12 m-0 p-0">
                        <table id='empTable' class='display dataTable table-responsive'>
                            <thead>
                                <tr>
                                    <th>Reg.Id</th>
                                    <th>Session</th>
                                    <th>Name</th>
                                    <th>Father</th>
                                    <th>Mobile</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Roll</th>
                                    <th>D.O.B</th>
                                    <th>Aadhar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>D-782342</td>
                                    <td>2020-2022</td>
                                    <td>Subhendu Majhi</td>
                                    <td>Mukti Pada Majhi</td>
                                    <td>9733960608</td>
                                    <td>Diploma</td>
                                    <td>A</td>
                                    <td>12</td>
                                    <td>10-10-1999</td>
                                    <td>946310986044</td>
                                    <td>
                                        <a href="javascript:void(0)"><button class="edit"><i class="fas fa-edit"></i></button></a>  
                                        <a href="javascript:void(0)"><button class="view"><i class="fas fa-eye"></i></button></a>
                                        <a href="javascript:void(0)"><button class="del"><i class="fas fa-trash"></i></button></a>           
                                    </td>
                                </tr>

                        

                                <tr>
                                     <td>W-79742</td>
                                    <td>2020-2023</td>
                                    <td>Indrojit Duba</td>
                                    <td>Bammla Dhuba</td>
                                    <td>956760608</td>
                                    <td>B-Tech</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>10-10-1999</td>
                                    <td>94631*8**044</td>
                                    <td>
                                         <a href="javascript:void(0)"><button class="edit"><i class="fas fa-edit"></i></button></a>                                                   
                                        <a href="javascript:void(0)"><button class="view"><i  class="fas fa-eye"></i></button></a>                                              
                                        <a href="javascript:void(0)"><button class="del"><i  class="fas fa-trash"></i></button></a> 
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