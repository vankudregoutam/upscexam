<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <!-- <style>
        table, th, tr {
            border
        }
    </style> -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 bg-danger text-center text-white mt-1 p-2">
            <h2>CANDIDATE'S INFO</h2>
            
            </div>
        </div>
    </div><br><br>
    <center>
    <table class="table table-hover mt-4" style="width:700px;">
        <thead>
            <th>Sutdent Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Disability</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Mobile No.</th>
            <th>SSC</th>
            <th>HSC</th>
            <th>EWS Certificate</th>
            <th>Caste Certificate</th>
            <th>Disability</th>
            <th>Domicile Certificate</th>
            <th>Govt. ID</th>
            <th>Photograph</th>
            <th>Signature</th>
            <th>Delete</th>
            <th>Update</th>
        </thead>
    </center>
</body>
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "upsc_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM candidates";
    $result = $conn->query($sql);

        // output data of each row
        // while ($row = $result->fetch_assoc()) {
        //     echo "<br>Student Name: " . $row["sname"] . "<br>Father's Name: " . $row["fname"] . "<br>Mother's Name :" . $row["mname"] . "<br>";
        //     echo "Gender: " . $row["gender"] . "<br>Disablity: " . $row["disable"] . "<br>DOB: " . $row["dob"] . "<br>Email: " . $row["email"] . "<br>";
        //     echo "Mobile No.: " . $row["phone"] . "<br>SSC Marksheet: " . $row["ssc"] . "<br>HSC Marksheet: " . $row["hsc"] . "<br>EWS Certificate: " . $row["ews"] . "<br>";
        //     echo "Caste Certificate: " . $row["caste"] . "<br>Disability Certificate: " . $row["disability"] . "<br>Domicile Certificate: " . $row["domicile"] . "<br>";
        //     echo "Photograph: " . $row["photo"] . "<br>Signature: " . $row["sign"] . "<br>ID Card: " . $row["gov_id"] . "<br>";
        // }
        while($row = $result->fetch_assoc()) {
            $sname = $row['sname'];
            $fname = $row['fname'];
            $mname = $row['mname'];
            $gender = $row['gender'];
            $disable = $row['disable'];
            $dob = $row['dob'];
            $email = $row['email'];
            $phone = $row['phone'];
            $ssc = $row['ssc'];
            $hsc = $row['hsc'];
            $ews = $row['ews'];
            $caste = $row['caste'];
            $disability = $row['disability'];
            $domicile = $row['domicile'];
            $gov_id = $row['gov_id'];
            $photo = $row['photo'];
            $sign = $row['sign'];
        
    

    

    
?>

<center>
    <tbody>
        <tr>
            <td><?php echo $sname; ?></td>
            <td><?php echo $fname; ?></td>
            <td><?php echo $mname; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $disable; ?></td>
            <td><?php echo $dob; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $phone; ?></td>
            <td><?php echo $ssc; ?></td>
            <td><?php echo $hsc; ?></td>
            <td><?php echo $ews; ?></td>
            <td><?php echo $caste; ?></td>
            <td><?php echo $disability; ?></td>
            <td><?php echo $domicile; ?></td>
            <td><?php echo $gov_id; ?></td>
            <td><?php echo $photo; ?></td>
            <td><?php echo $sign; ?></td>
            <td><button class="btn btn-danger"> <a href="upsc_data_delete.php?sname=<?php echo $row['sname'];?>">Delete</a></button></td>
            <td><button class="btn btn-success"> <a href="edit.php?sname=<?php echo $row['sname'];?>">Edit</a></button></td>
        </tr>
    </tbody>
</center>
<?php } ?>