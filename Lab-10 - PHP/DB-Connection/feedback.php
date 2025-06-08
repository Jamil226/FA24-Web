<?php
	include("includes/database-helper.php");

    if(isset($_REQUEST['BtnSubmit'])){
        $FullName = $_REQUEST['TxtName'];
        $Contact = $_REQUEST['TxtContact'];
        $Email = $_REQUEST['TxtEmail'];
        $Subject = $_REQUEST['TxtSubject'];
        $Message = $_REQUEST['TxtMessage'];
        $Query = "SELECT MAX(id) FROM university_feedback";
        // echo $Query; die;
        $Result = mysqli_query($conn, $Query);
        $MaxID = mysqli_fetch_array($Result);
        $UserID = $MaxID['0'];
        $ID = $UserID + 1;
        // echo $ID; die;
        $InsertQuery = "INSERT INTO university_feedback ".
            " (id, name, phone, email, subject, message) ".
            " VALUES ($ID, '$FullName', '$Contact', '$Email', ".
            " '$Subject', '$Message')";
            mysqli_query($conn, $InsertQuery);
            echo "Thanks for your kind feedback!";
        // echo $Query; die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Feedback</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="contaienr mt-4">
        <center>
            <h1 bg-success>Feedback Form</h1>
        </center>
    </div>
    <div class="container mt-4">
        <div class="form">
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label"for="fullname">Full Name</label>
                        <input class="form-control" type="text" id="fullname" name="TxtName" autofocus>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label class="form-label"for="phone">Phone</label>
                        <input class="form-control" type="text" id="phone" name="TxtContact">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label"for="email">Email Address</label>
                        <input class="form-control" type="text" id="email" name="TxtEmail">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label class="form-label"for="subject">Subject</label>
                        <input class="form-control" type="text" id="subject" name="TxtSubject">
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label"for="message">Message</label>
                        <textarea class="form-control" type="text" id="message" name="TxtMessage" rows="8"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <input class="form-control btn btn-success" type="submit" id="signup" name="BtnSubmit">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>