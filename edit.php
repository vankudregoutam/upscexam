<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPSC Exam Form</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet">

    <!-- Site CSS -->
    <link rel="stylesheet" href="site.css" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>

    <style>
        #abc {
            background: linear-gradient(to right, #9CECFB 0%, #65C7F7 50%, #0052D4 100%);
        }

        #def {
            background: linear-gradient(to right, rgb(166,166,166,1) 0%, rgba(255,255,255,1) 29%);
        }

        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            margin: 20px;
            padding: 5px;
            /* size: 50px; */
            /* width: 150px; */
        }

        .image {
            background-image: url(army.jpg);
            color: white;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container-fluid" id="abc">
        <!-- Header -->
            <div class="row text-center shadow-2-strong mb-2 bg-white" id="abc">
                <div class="col-6 order-1 col-sm-2">
                    <img class="col-8 col-sm-6 img-fluid" src="upsc.jpeg" alt="upsc">
                </div>

                <div class="col-12 order-3 order-sm-2 col-sm-8">
                    <h1 class="p-4">UNION PUBLIC SERVICE COMMUNICATION</h1>
                </div>

                <div class="col-6 order-2 col-sm-2 order-sm-3">
                    <img class="col-8 col-sm-6 img-fluid" src="ias.jpeg" alt="ias">
                </div>
            </div>        
    </div>

    <div class="image"><br>
        <h4 style="text-align: center;">Application Form for Civil Service (Preliminary) Examination - 2022</h4><br><br>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-12 bg-dark rounded text-center text-white mt-1 p-2">
                        <h1>UPDATE APPLICATION FORM</h1>
                        <!-- <span class="design"> <a href="form.php">Home</a>&nbsp;	&nbsp;	
                        <a href="admin.php">Admin</a></span> -->
                    </div>
                </div>
            </div><br>
            <!-- <ul class="nav nav-pills" id="def" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" style="text-decoration: underline;" data-bs-toggle="pill" href="#info">Part-1 Registration</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="text-decoration: underline;" data-bs-toggle="pill" href="#payment">Payment Confirmation</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="text-decoration: underline;" data-bs-toggle="pill" href="#center">Center Selection</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="text-decoration: underline;" data-bs-toggle="pill" href="#contacts">Photo & Sign Upload and Declaration Agreed</a>
                </li>
            </ul>
            <br><br> -->
            <div class="container">
                <div class="tab-content">
                <!-- <div class="container mt-3"> -->
                    <div id="info" class="container tab-pane active">
                        <form action="exam_form.php" method="post">
                        Student's Full Name( Capital Letters ):
                        <input style="text-transform: uppercase; margin-left: auto;" type="text" name="sname" required  placeholder="Start with Surname..." size="50px"><br><br>

                        Father's Name( Capital Letters ):
                        <input style="text-transform: uppercase; margin-left: 38px;" type="text" name="fname" required size="50px"><br><br>

                        <!-- Mother's Name( Capital Letters ):
                        <input style="text-transform: uppercase; margin-left: 32px;" type="text" name="mname" required id="" size="50px"><br><br> -->

                        Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gender" id="" value="Male">
                        Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gender" id="" value="Female">
                        Female<br><br>

                        Disability:&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="disable" id="" value="Yes">
                        Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="disable" id="" value="No">
                        No<br><br>

                        Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="email" name="email" size="50px" id=""><br><br>

                        Mobile No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="number" name="phone" id=""><br><br>

                        DOB:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="date" name="dob" id=""><br><br>

                        <!-- <h4>Add Documents</h4>
                                
                        <table style="width: 85%;">
                                        
                            <tr>
                                <th>Sr.</th>
                                <th>Documents</th>
                                <th>File</th>
                            </tr>

                            <tr>
                                <td>1.</td>
                                <td>SSC Marksheet</td>
                                <td><input type="file" name="ssc" id=""></td>
                            </tr>

                            <tr>
                                <td>2.</td>
                                <td>HSC Marksheet</td>
                                <td><input type="file" name="hsc" id=""></td>
                            </tr>

                            <tr>
                                <td>3.</td>
                                <td>EWS Certificate</td>
                                <td><input type="file" name="ews" id=""></td>
                            </tr>

                            <tr>
                                <td>4.</td>
                                <td>Caste Certificate</td>
                                <td><input type="file" name="caste" id=""></td>
                            </tr>

                            <tr>
                                <td>5.</td>
                                <td>Disability Certificate</td>
                                <td><input type="file" name="disability" id=""></td>
                            </tr>

                            <tr>
                                <td>6.</td>
                                <td>Domicile Certificate</td>
                                <td><input type="file" name="domicile" id=""></td>
                            </tr>

                            <tr>
                                <td>7.</td>
                                <td>Any Government-issued ID Card</td>
                                <td><input type="file" name="gov_id" id=""></td>
                            </tr>

                            <tr>
                                <td>8.</td>
                                <td>Scanned Photograph</td>
                                <td><input type="file" name="photo" id=""></td>
                            </tr>

                            <tr>
                                <td>9.</td>
                                <td>Scanned Signature</td>
                                <td><input type="file" name="sign" id=""></td>
                            </tr>

                        </table><br><br> -->
                        <center>
                            <input type="submit" value="Submit">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" value="Reset">
                        </center><br><br><br>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$server="localhost";
$username="root";
$password="";
$database="upsc_db";

$con=new mysqli($server,$username,$password,$database);
if($con->connect_error){
    die("Failed".$con->connect_error);
}

if(isset($_POST['submit'])){
    
    $sname = $_GET['sname'];
    $fname = $_POST['fname'];
    $mname=$_POST['mname'];
    $gender = $_POST['gender'];
    $disable = $_POST['disable'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    // $ssc=$_POST['ssc'];
    // $hsc=$_POST['hsc'];
    // $ews=$_POST['ews'];
    // $caste=$_POST['caste'];
    // $disability=$_POST['disability'];
    // $domicile=$_POST['domicile'];
    // $gov_id=$_POST['gov_id'];
    $photo = $_POST['photo'];
    // $sign=$_POST['sign'];

    $sql = "UPDATE 'candidates' SET 'smane' = '$sname', 'fname' = '$fname', 'mname' = '$mname'
    'gender' = '$gender', 'disable' = '$disable', 'email' = '$email', 'phone' = '$phone',
    'dob' = '$dob', 'photo' = '$photo' WHERE id = '$sname' ";
    
    $result = mysqli_query($sql);
    
    if($result == true) {
        ?>
        <script>alert("Update Successfully");</script>
        <?php
    }
    else {
        ?>
        <script>alert("Update Failed");</script>
        <?php
    }
}
?>