<?php include 
'database/config.php';
$rollnumber =urldecode(base64_decode( $_GET['rollnumber']));
//echo $rollnumber;
$data = "select * from student where roll = '$rollnumber'";
$dataQ = mysqli_query($conn, $data);
$info = mysqli_fetch_array($dataQ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .student-card {
        max-width: 700px;
        margin: auto;
        margin-top: 50px;
        border-radius: 1rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .student-img {
        width: 100%;
        height: auto;
        margin-top: 50px;
        border-style: solid;
        border-color:rgb(50, 88, 238);
        border-radius: 0.5rem;

    }

    .info-label {
        font-weight: 600;
        color: #495057;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-center">
        <div class="container-fluid">
            <a class="navbar-brand " href="index.php">My CRUD App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container">
        <div class="card student-card p-4">
            <div class="row g-6">


                <!-- Student Info -->

                <div class="col-md-8">
                    <h4 class="mb-3">Student Details</h4>

                    <div class="row mb-2">
                        <div class="col-sm-4 info-label">Roll Number:</div>
                        <div class="col-sm-8"><?php echo $info['roll'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 info-label">First Name:</div>
                        <div class="col-sm-8"><?php echo $info['fname'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 info-label">Last Name:</div>
                        <div class="col-sm-8"><?php echo $info['lname'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 info-label">Father's Name:</div>
                        <div class="col-sm-8"><?php echo $info['father'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 info-label">Mother's Name:</div>
                        <div class="col-sm-8"><?php echo $info['mother'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 info-label">Mobile:</div>
                        <div class="col-sm-8">+91-<?php echo $info['mobile'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 info-label">Email:</div>
                        <div class="col-sm-8"><?php echo $info['email'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 info-label">Created At:</div>
                        <div class="col-sm-8"><?php echo $info['create_at'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 info-label">Updated At:</div>
                        <div class="col-sm-8"><?php echo $info['update_at'] ?></div>
                    </div>


                </div>
                <!-- Student Image -->
                <div class="col-md-2 text-center">
                    <img src="<?php echo $info['image'] ?>" class="student-img" alt="Student Photo">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>