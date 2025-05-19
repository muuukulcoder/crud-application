<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Add New Record</h4>
                    </div>
                    <div class="card-body">
                        <form action="insert.php" method="POST" enctype="multipart/form-data">
                            <!-- Roll -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Enter Roll Number</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Enter First Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Enter Last Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Enter your father's name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Enter your mother's name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <!-- Mobile Number -->
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" id="mobile" name="mobile" required
                                    pattern="[0-9]{10}" placeholder="e.g., 9876543210">
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Image</label>
                                <input class="form-control" type="file" id="image" name="image" accept="image/*"
                                    required>
                            </div>

                            <!-- Submit -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>