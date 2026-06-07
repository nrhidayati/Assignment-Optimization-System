<?php
include 'config.php';

$easy_available = (int)$_POST['easy_available'];
$hard_available = (int)$_POST['hard_available'];

$max_assignments = (int)$_POST['max_assignments'];
$easy_time = (int)$_POST['easy_time'];
$hard_time = (int)$_POST['hard_time'];
$total_time = (int)$_POST['total_time'];

/*
    The user enters simple real-life values.
    The system automatically converts them into LP constraints:

    Constraint 1:
    x1 + x2 <= max_assignments

    Constraint 2:
    easy_time*x1 + hard_time*x2 <= total_time
*/

$c1x1 = 1;
$c1x2 = 1;
$c1b = $max_assignments;

$c2x1 = $easy_time;
$c2x2 = $hard_time;
$c2b = $total_time;

$points = [];
$steps = [];

for ($i = 0; $i <= $easy_available; $i++) {
    for ($j = 0; $j <= $hard_available; $j++) {

        $constraint1 = ($c1x1 * $i) + ($c1x2 * $j);
        $constraint2 = ($c2x1 * $i) + ($c2x2 * $j);

        if ($constraint1 <= $c1b && $constraint2 <= $c2b) {
            $points[] = [$i, $j];
        }
    }
}

if (empty($points)) {
    $best = [0, 0];
    $bestZ = 0;
    $steps[] = "(0,0) → Z=0 | No feasible solution found";
} else {
    $best = [0, 0];
    $bestZ = -1;

    foreach ($points as $p) {
        $z = $p[0] + $p[1];

        $steps[] = "(" . $p[0] . "," . $p[1] . ") → Z=" . $z;

        if ($z > $bestZ) {
            $bestZ = $z;
            $best = $p;
        }
    }
}

$res = "Easy=" . $best[0] . ", Hard=" . $best[1] . ", Total Assignments=" . $bestZ;

$stmt = $conn->prepare("INSERT INTO history 
(easy_available, hard_available, max_assignments, easy_time, hard_time, total_time, result) 
VALUES (?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
    "iiiiiis",
    $easy_available,
    $hard_available,
    $max_assignments,
    $easy_time,
    $hard_time,
    $total_time,
    $res
);

$stmt->execute();
?>

<form action="result.php" method="POST" id="f">
    <input type="hidden" name="u" value="<?php echo $best[0]; ?>">
    <input type="hidden" name="n" value="<?php echo $best[1]; ?>">
    <input type="hidden" name="z" value="<?php echo $bestZ; ?>">
    <input type="hidden" name="steps" value="<?php echo htmlspecialchars(implode('|', $steps)); ?>">

    <input type="hidden" name="easy_available" value="<?php echo $easy_available; ?>">
    <input type="hidden" name="hard_available" value="<?php echo $hard_available; ?>">

    <input type="hidden" name="max_assignments" value="<?php echo $max_assignments; ?>">
    <input type="hidden" name="easy_time" value="<?php echo $easy_time; ?>">
    <input type="hidden" name="hard_time" value="<?php echo $hard_time; ?>">
    <input type="hidden" name="total_time" value="<?php echo $total_time; ?>">

    <input type="hidden" name="c1x1" value="<?php echo $c1x1; ?>">
    <input type="hidden" name="c1x2" value="<?php echo $c1x2; ?>">
    <input type="hidden" name="c1b" value="<?php echo $c1b; ?>">

    <input type="hidden" name="c2x1" value="<?php echo $c2x1; ?>">
    <input type="hidden" name="c2x2" value="<?php echo $c2x2; ?>">
    <input type="hidden" name="c2b" value="<?php echo $c2b; ?>">
</form>

<script>
document.getElementById('f').submit();
</script>