<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title >CRUD Application</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-center">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">My CRUD App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="text-primary">Records List</h2>
            <a href="addnew.php" class="btn btn-success">+ Add New</a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>MObile</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Update At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2025101</td>
                        <td>Jane Doe</td>
                        <td>9142457731</td>
                        <td>jane@example.com</td>
                        <td><a href="image"></a></td>
                        <td>2025-05-19</td>
                        <td>2025-05-19</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-info btn-sm me-1">View</a>
                            <a href="#" class="btn btn-warning btn-sm me-1">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <!-- More records here -->
                </tbody>
            </table>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>