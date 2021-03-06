<?php
$title = "Add Student | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <nav id="sidebar" class="sidebar-wrapper">
            <?php include_once("nav.php"); ?>
        </nav>
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">

                <!-- #1 Insert Your Content-->
                <div class="container">

                <!-- 1st row start -->
                <div class="row">
                     <div class="col-sm">
                     <div class="border border-primary rounded text-center">
                     <h2>Student's Registration Form | SLGTI</h2>
                     </div>
                    </div>
                    </div>
                    <br>
                    <form method="POST" action="">
                <div class="row">
                <div class='col-7'>
                <div class='form-group col-md'>
                <ul class='nav nav-tabs'>
                <li class='nav-item'>
                <a class='nav-link' href='./students.php'>ALL</a>
                </li>
                <li class='nav-item'>
                <a class='nav-link active' href='./student.php'>Add New</a>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </form>
                <!-- 1st row end -->

                <!-- 2 row start -->
                <div class="row">
                <div class="col-sm">
                <div class="border-bottom border-primary">
                <h3>Personal Information</h3>
                </div>
                </div>
                </div><br>
                <form method="POST" action="">
                <!-- 1st row start -->
                    <div class="form-row">

                    <div class="col-2">
                    <label for="title"> Title: </label>
                    <select name="title" id="title" class="custom-select" value="<?php echo $title; ?>" required>
                    <option selected disabled>Choose Title</option>
                    <option value="Mr" <?php if($title=="Mr") echo 'selected';?>>Mr</option> 
                    <option value="Miss" <?php if($title=="Miss") echo 'selected';?>>Miss</option>
                    <option value="Mrs"<?php if($title=="Mrs") echo 'selected';?>>Mrs</option>
                    </select>
                    </div>

                    <div class="col-7">
                    <label for="fullname"> Full Name: </label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="" placeholder="" aria-describedby="fullnamePrepend" required>
                    </div>

                    <div class="col-3">
                    <label for="ini_name"> Name with Initials: </label>
                    <input type="text" class="form-control" id="ini_name" name="ini_name" value="" placeholder="" required>
                    </div>

                    </div>
                <!-- 1st row end -->

                <!-- 2nd row start -->
                    <div class="form-row">

                    <div class="col-3">
                    <label for="custom-select"> Gender: </label>
                    <select name="gender" id="gender" class="custom-select" value="<?php echo $gender; ?>" required>
                    <option selected disabled>Choose Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="civil"> Civil Status: </label>
                    <select name="civil" id="civilstatus" class="custom-select" value="<?php echo $civil; ?>" required>
                    <option selected disabled>Choose Status</option>
                    <option value="Single">Single</option> 
                    <option value="Married">Married</option>
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="email"> Email: </label>
                    <div class="input-group-prepend">
                    <input type="email" class="form-control" id="email" name="email" value="" placeholder="ab2237243@gmail.com"  required>
                    </div>
                    </div>

                    <div class="col-3">
                    <label for="nic"> NIC: </label>
                    <input type="text" class="form-control" id="nic" name="nic" max="12" min="10" value="" placeholder="980000000V"  required>
                    </div>

                    </div>
                <!-- 2nd row end -->

                <!-- 3rd row start -->
                <div class="form-row">

                    <div class="col-3">
                    <label for="dob"> Date of Birth: </label>
                    <input type="date" class="form-control" id="dob" name="dob" value="" placeholder=""  required>
                    </div>

                    <div class="col-3">
                    <label for="phone"> Phone No: </label>
                    <input type="tel" class="form-control" id="phone" name="phone" maxlength="10" minlength="10" value="" placeholder="0700000000"  required>
                    </div>

                    <div class="col-6">
                    <label for="address"> Address: </label>
                    <input type="textarea" class="form-control" id="address" name="address" value="" placeholder="No, Street, Hometown."  required>
                    </div>

                </div>
                <!-- 3rd row end -->

                <!-- 4th row start -->
                <div class="form-row">

                    <div class="col-3">
                    <label for="ds"> Divisional Secretariat: </label>
                    <input type="text" name="ds" class="form-control" id="ds" value="" placeholder="Thirukkovil"  required>
                    </div>

                    <div class="col-3">
                    <label for="district"> District: </label>
                    <select class="custom-select" name="district" id="district" data-live-search="true" data-width="100%" value="<?php echo $district; ?>" required>
                    <option value="">Select</option>
                    <option value="Ampara"<?php if($district=="Ampara")  echo 'selected';?>> Ampara </option>
                    <option value="Batticalo"<?php if($district=="Batticalo")  echo 'selected';?>> Batticaloa </option>
                    <option value="Trincomalee"<?php if($district=="Trincomalee")  echo 'selected';?>> Trincomalee </option>
                    <option value="Jaffna"<?php if($district=="Jaffna")  echo 'selected';?>> Jaffna </option>
                    <option value="Vavuniya"<?php if($district=="Vavuniya")  echo 'selected';?>> Vavuniya </option>
                    <option value="Killinochchi"<?php if($district=="Killinochchi")  echo 'selected';?>> Killinochchi  </option>
                    <option value="Mullaitivu"<?php if($district=="Mullaitivu")  echo 'selected';?>> Mullaitivu </option>
                    <option value="Mannar"<?php if($district=="Mannar")  echo 'selected';?>> Mannar </option>
                    <option value="Puttalam"<?php if($district=="Puttalam")  echo 'selected';?>> Puttalam </option>
                    <option value="Kurunegala"<?php if($district=="Kurunegala")  echo 'selected';?>> Kurunegala </option>
                    <option value="Gampaha"<?php if($district=="Gampaha")  echo 'selected';?>> Gampaha </option>
                    <option value="Colombo"<?php if($district=="Colombo")  echo 'selected';?>> Colombo </option>
                    <option value="Kalutara"<?php if($district=="Kalutara")  echo 'selected';?>> Kalutara </option>
                    <option value="Anuradhapura"<?php if($district=="Anuradhapura")  echo 'selected';?>> Anuradhapura </option>
                    <option value="Polonnaruwa"<?php if($district=="Polonnaruwa")  echo 'selected';?>> Polonnaruwa </option>
                    <option value="Matale"<?php if($district=="Matale")  echo 'selected';?>> Matale	 </option>
                    <option value="Kandy"<?php if($district=="Kandy")  echo 'selected';?>> Kandy </option>
                    <option value="Nuwara Eliya"<?php if($district=="Nuwara Eliya")  echo 'selected';?>> Nuwara Eliya </option>
                    <option value="Kegalle"<?php if($district=="Kegalle")  echo 'selected';?>> Kegalle </option>
                    <option value="Ratnapura"<?php if($district=="Ratnapura")  echo 'selected';?>> Ratnapura </option>
                    <option value="Badulla"<?php if($district=="Badulla")  echo 'selected';?>> Badulla </option>
                    <option value="Monaragala"<?php if($district=="Monaragala")  echo 'selected';?>> Monaragala </option>
                    <option value="Hambantota"<?php if($district=="Hambantota")  echo 'selected';?>> Hambantota </option>
                    <option value="Matara"<?php if($district=="Matara")  echo 'selected';?>> Matara </option>
                    <option value="Galle"<?php if($district=="Galle")  echo 'selected';?>> Galle </option>
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="province"> Province: </label>
                    <select name="province" id="province" class="custom-select" value="<?php echo $province; ?>" required>
                    <option value="">Select</option>
                    <option value="1"<?php if($province=="1")  echo 'selected';?>> Northen </option>
                    <option value="2"<?php if($province=="2")  echo 'selected';?>> Eastern </option>
                    <option value="3"<?php if($province=="3")  echo 'selected';?>> Western </option>
                    <option value="4"<?php if($province=="4")  echo 'selected';?>> Southern </option>
                    <option value="5"<?php if($province=="5")  echo 'selected';?>> Central </option>
                    <option value="6"<?php if($province=="6")  echo 'selected';?>> North Western </option>
                    <option value="7"<?php if($province=="7")  echo 'selected';?>> Uva </option>
                    <option value="8"<?php if($province=="8")  echo 'selected';?>> North Central </option>
                    <option value="9"<?php if($province=="9")  echo 'selected';?>> Sabaragamuwa </option>
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="zip"> ZIP-Code:</label>
                    <input type="text" class="form-control" id="zip" name="zip" value="" placeholder="32420"  required>
                    </div>

                </div>
                <!-- 4th row end -->

                <!-- 5th row start -->
                <div class="form-row">

                    <div class="col-2">
                    <label for="zip"> Blood Group:</label>
                    <input type="text" class="form-control" id="bg" name="bg" value="" placeholder="B+"  required>
                    </div>

                </div>
                <!-- 5th row end -->
                </form>   
                    
                </div>
                <!-- 2 row end -->

                <!-- 3 row start -->
                <br>
                <div class="row">
                <div class="col-sm">
                <div class="border-bottom border-primary">
                <h3>Enroll Information</h3>
                </div>
                </div>
                    </div><br>
                    <form method="POST" action="">
                    <div class="col-md-2 mb-3">
                    <label for="title"> Title: </label>
                    <select name="title" id="title" class="custom-select" value="<?php echo $title; ?>" required>
                    <option selected disabled>Choose Title</option>
                    <option value="Mr" <?php if($title=="Mr") echo 'selected';?>>Mr</option> 
                    <option value="Miss" <?php if($title == "Miss") echo 'selected';?>>Miss</option>
                    <option value="Mrs"<?php if($title=="Mrs") echo 'selected';?>>Mrs</option>
                    </select>
                    </div>
                    </form>
                </div>

                <!-- 3 row end -->

                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>
