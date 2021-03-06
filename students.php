<?php
$title = "View Student | Online Examination Result Management System | SLGTI";
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
                     <h2>Student's Information | SLGTI</h2>
                     </div>
                    </div>
                    </div>
                    <br>
                <!-- 1st row end -->

                <form method="POST" action="">
                <div class="row">
                <div class='col-7'>
                <div class='form-group col-md'>
                <ul class='nav nav-tabs'>
                <li class='nav-item'>
                <a class='nav-link active' href='./students.php'>ALL</a>
                </li>
                <li class='nav-item'>
                <a class='nav-link' href='./student.php'>Add New</a>
                </li>
                </ul>
                </div>
                </div>
                <div class='col-3'>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class='col-2'>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
                </div>
                </form>
                
                <div class="row">
                    <div class="form-group col-md-12 table-responsive">
                    <table class='table align-middle '>
                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>NO</th>
                            <th scope='col'>Exams</th>
                            <th scope='col'>DEPARTMENT</th>
                            <th scope='col'>COURSE</th>
                            <th scope='col'>SEMESTER</th>
                            <th scope='col'>MODULE</th>
                            <th scope='col'>ACTIONS</th>
                        </tr>
                        <tr>
                            <td scope='col'>NO</td>
                            <td scope='col'>Exams</td>
                            <td scope='col'>DEPARTMENT</td>
                            <td scope='col'>COURSE</td>
                            <td scope='col'>SEMESTER</td>
                            <td scope='col'>MODULE</td>
                            <td scope='col'>ACTIONS</td>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                    </div>
                </div>

                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>
