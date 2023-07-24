<?php
// Include database connection details
include 'config.php';

// Check if form is submitted
if (isset($_POST['add_ok'])) {
    // Get form data
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $phone = $_POST['phone'];
    $alt = $_POST['alt'];
    $mail = $_POST['mail'];
    $dob = $_POST['dob'];
    $aadhar = $_POST['aadhar'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $cast = $_POST['cast'];
    $vill = $_POST['vill'];
    $post = $_POST['post'];
    $ps = $_POST['ps'];
    $area = $_POST['area'];
    $hnumber = $_POST['hnumber'];
    $dist = $_POST['dist'];
    $state = $_POST['state'];
    $sub = $_POST['sub'];
    $country = $_POST['country'];
    $pin = $_POST['pin'];
    $class = $_POST['class'];
    $trade = $_POST['trade'];
    $adate = $_POST['adate'];
    $pschool = $_POST['pschool'];
    $pcollage = $_POST['pcollage'];

    // Upload and store images
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "photo/".$_FILES['image']['name']);

    $tc = $_FILES['tc']['name'];
    move_uploaded_file($_FILES['tc']['tmp_name'], "tc/".$_FILES['tc']['name']);

    // Insert data into database
    $sql = "INSERT INTO add_student(name,fname,mname,phone,alt,mail,dob,aadhar,gender,religion,cast,vill,post,ps,area,hnumber,dist,state,sub,country,pin,class,trade,adate,pschool,pcollage,image,tc)VALUES('$name','$fname','$mname','$phone','$alt','$mail','$dob','$aadhar','$gender','$religion','$cast','$vill','$post', '$ps','$area','$hnumber','$dist','$state','$sub','$country','$pin','$class','$trade','$adate','$pschool','$pcollage','$image','$tc')";

    if(mysqli_query($conn,$sql)){
            echo "<script>
                    alert('Student Add Successful');
                    window.location = '../add_student.php';
                </script>";
        }else{
            echo "Error".mysqli_error($conn);
        }
    }
?>
