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
                        <span><a href="index.php">Home</a> / <span>View Staff</span></span>
                    </div>
                </div>
            </div>
        </div>


          <div class="row title_2">
            <div class="col-12">
                <h4 class="text-center">View Staff Details</h4><hr>
            </div>
        </div>

        <div class="row view-area-top_1">
            <div class="col-12">
                <div class="view-area">
                    <h4>Staff Details</h4><hr>

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
                                            <option disabled selected value="">Staff Working</option>
                                            <option value="Eng"> CCTV cameras and monitoring</option>
                                            <option value="Eng">Bio-metric fingerprint scanning for network access</option>
                                            <option value="Eng">Next-generation firewall security</option>
                                            <option value="Eng"> Data storage on main servers and duplicate backup servers</option>
                                            <option value="Eng">Backup power supply and generators</option>
                                            <option value="Eng">Video and telephone conferencing and private conference rooms</option>
                                            <option value="Eng">VoIP secure connections </option>
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
                                    <th>Works</th>
                                    <th>Work Room No</th>
                                    <th>D.O.B</th>
                                    <th>Aadhar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>UC782342</td>
                                    <td>Dr Rajib Kalam</td>
                                    <td>+91 973*****08</td>
                                    <td>VoIP secure connections</td>
                                    <td>A-12</td>
                                    <td>10-10-1999</td>
                                    <td>946316044</td>
                                    <td>
                                        <a href="javascript:void(0)"><button class="edit"><i class="fas fa-edit"></i></button></a>  
                                        <a href="javascript:void(0)"><button class="view"><i class="fas fa-eye"></i></button></a>
                                        <a href="javascript:void(0)"><button class="del"><i class="fas fa-trash"></i></button></a>           
                                    </td>
                                </tr>
                                
                                <tr>
                                   <td>UC782342</td>
                                    <td>Ronjion Das</td>
                                    <td>+91 9*****08</td>
                                    <td>CCTV cameras and monitoring</td>
                                    <td>A-12</td>
                                    <td>10-10-1999</td>
                                    <td>9440986044</td>
                                    <td>
                                        <a href="javascript:void(0)"><button class="edit"><i class="fas fa-edit"></i></button></a>  
                                        <a href="javascript:void(0)"><button class="view"><i class="fas fa-eye"></i></button></a>
                                        <a href="javascript:void(0)"><button class="del"><i class="fas fa-trash"></i></button></a> 
                                    </td>
                                </tr>

                                <tr>
                                   <td>UC782342</td>
                                    <td>Aliem Kalam</td>
                                    <td>+91 967960608</td>
                                    <td>Clener</td>
                                    <td>A-12</td>
                                    <td>10-10-1999</td>
                                    <td>9976586044</td>
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