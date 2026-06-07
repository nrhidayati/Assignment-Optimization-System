<?php
include 'config.php';
$res = $conn->query("SELECT * FROM history ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <div class="glass">
        <h3>History</h3>

        <div class="table-responsive">
            <table class="table table-dark table-striped align-middle">
                <tr>
                    <th>ID</th>
                    <th>Easy Available</th>
                    <th>Hard Available</th>
                    <th>Max Assignments</th>
                    <th>Easy Time</th>
                    <th>Hard Time</th>
                    <th>Total Time</th>
                    <th>Result</th>
                </tr>

                <?php while ($row = $res->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['easy_available']; ?></td>
                        <td><?php echo $row['hard_available']; ?></td>
                        <td><?php echo $row['max_assignments']; ?></td>
                        <td><?php echo $row['easy_time']; ?></td>
                        <td><?php echo $row['hard_time']; ?></td>
                        <td><?php echo $row['total_time']; ?></td>
                        <td><?php echo $row['result']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </div>
</div>

</body>
</html>