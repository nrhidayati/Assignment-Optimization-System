<!DOCTYPE html>
<html>
<head>
    <title>LP System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="display:flex; flex-direction:column; min-height:100vh;">
    <?php include 'navbar.php'; ?>

    <div class="container flex-grow-1 d-flex justify-content-center align-items-center mb-5">
        <div class="glass text-center p-5" style="max-width: 850px; width: 90%;">
            <div class="badge bg-success mb-4 px-4 py-2 rounded-pill" style="font-size: 0.9rem;">
                POWERED BY LINEAR PROGRAMMING
            </div>
            <h1 class="display-3 fw-bold mb-4">Maximize Your <span style="color: var(--primary);">Grades</span></h1>
            <p class="text-secondary mb-5" style="font-size: 1.3rem; line-height: 1.6;">
                Calculate the perfect ratio of assignments to hit your peak score using high-speed optimization logic.
            </p>
            
            <div class="d-flex gap-3 justify-content-center">
                <a href="input.php" class="btn btn-custom px-5 py-3">Start Solving 🚀</a>
                <a href="history.php" class="btn btn-outline-secondary px-5 py-3 text-light" style="border-radius: 15px; font-weight: 600;">View Logs</a>
            </div>
        </div>
    </div>
</body>
</html>