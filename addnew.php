<?php
include 'database/config.php';
$student = "select * from student ORDER BY roll DESC LIMIT 1";
$query = mysqli_query($conn, $student);
$row = mysqli_fetch_array($query);
$roll = $row['roll']+1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert Record</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    #btn{
        display: grid;
        place-items: center;
    }
</style>

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
    <!-- Insert Form Section -->
   <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Add New Record</h4>
                </div>
                <div class="card-body">
                    <form action="insert.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <!-- Roll -->
                            <div class="col-md-6 mb-3">
                                <label for="roll" class="form-label">Enter Roll Number</label>
                                <input type="text" class="form-control" id="roll" name="roll" value="<?php echo $roll ?>" required readonly>
                            </div>

                            <!-- First Name -->
                            <div class="col-md-6 mb-3">
                                <label for="fname" class="form-label">Enter First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" required>
                            </div>

                            <!-- Last Name -->
                            <div class="col-md-6 mb-3">
                                <label for="lname" class="form-label">Enter Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" required>
                            </div>

                            <!-- Father's Name -->
                            <div class="col-md-6 mb-3">
                                <label for="father" class="form-label">Enter Father's Name</label>
                                <input type="text" class="form-control" id="father" name="father_name" required>
                            </div>

                            <!-- Mother's Name -->
                            <div class="col-md-6 mb-3">
                                <label for="mother" class="form-label">Enter Mother's Name</label>
                                <input type="text" class="form-control" id="mother" name="mother_name" required>
                            </div>

                            <!-- Mobile Number -->
                            <div class="col-md-6 mb-3">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" id="mobile" name="mobile" required pattern="[0-9]{10}" placeholder="e.g., 9876543210">
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Image Upload -->
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">Upload Image</label>
                                <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="col-md-12 mb-3" id="btn">
                            <button type="submit" class="btn btn-success text-center w-25">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>