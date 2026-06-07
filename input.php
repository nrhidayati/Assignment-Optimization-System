<!DOCTYPE html>
<html>
<head>
    <title>Optimize Assignments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5" style="max-width:800px;">
        <div class="glass">
            <h3 class="mb-1">Optimization Parameters</h3>
            <p class="text-info mb-4">
                Input the number of assignments available and the resource constraints below.
            </p>

            <form action="solve.php" method="POST">

                <div class="card bg-dark bg-opacity-25 border-0 p-4 mb-4" style="border-radius: 15px;">
                    <h5 class="text-primary mb-3">Assignment Availability</h5>

                    <div class="constraint-grid" style="grid-template-columns: repeat(2, 1fr);">
                    <div class="constraint-item">
                        <label class="constraint-label">Total Easy Assignments<br>Available</label>
                        <input type="number" name="easy_available" value="3" min="0" class="form-control">
                    </div>

                    <div class="constraint-item">
                        <label class="constraint-label">Total Hard Assignments<br>Available</label>
                        <input type="number" name="hard_available" value="8" min="0" class="form-control">
                    </div>
                </div>
                </div>

                <div class="card bg-dark bg-opacity-25 border-0 p-4 mb-4" style="border-radius: 15px;">
                    <h5 class="text-primary mb-3">Objective Function</h5>

                    <p class="mb-0 text-secondary">
                        Maximize Z = x₁ + x₂
                    </p>

                    <small class="text-secondary">
                        x₁ = easy assignments selected, x₂ = hard assignments selected
                    </small>
                </div>

                <h5 class="mb-3">System Constraints</h5>

                <div class="card bg-dark bg-opacity-25 border-0 p-4 mb-4" style="border-radius: 15px;">
                    <h5 class="text-primary mb-3">Assignment Limit</h5>

                    <label class="small text-secondary mb-1">Maximum Assignments Can Be Completed</label>
                    <input type="number" name="max_assignments" value="5" min="0" class="form-control text-center">

                    <small class="text-secondary d-block mt-2">
                        Example: If the value is 5, the system will make sure the total selected assignments do not exceed 5.
                    </small>
                </div>

                <div class="card bg-dark bg-opacity-25 border-0 p-4 mb-4" style="border-radius: 15px;">
                    <h5 class="text-primary mb-3">Time / Effort Limit</h5>

                    <div class="constraint-grid">
                        <div class="constraint-item">
                        <label class="constraint-label">Time for 1 Easy<br>Assignment</label>
                        <input type="number" name="easy_time" value="2" min="0" class="form-control">
                    </div>

                <div class="constraint-item">
                    <label class="constraint-label">Time for 1 Hard<br>Assignment</label>
                    <input type="number" name="hard_time" value="4" min="0" class="form-control">
                </div>

                <div class="constraint-item">
                    <label class="constraint-label">Total Time<br>Available</label>
                    <input type="number" name="total_time" value="12" min="0" class="form-control">
                </div>
            </div>
    

                    <small class="text-secondary d-block mt-3">
                        Example: Easy assignment takes 2 hours, hard assignment takes 4 hours, and the total available time is 12 hours.
                    </small>
                </div>

                <button class="btn btn-custom w-100 py-3">Run Optimization Algorithm 🚀</button>
            </form>
        </div>
    </div>
</body>
</html>