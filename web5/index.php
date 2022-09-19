<?php
session_start();
$num_visits = $_SESSION['num_visits'] ?? 1;

if ($num_visits >= 5) {
    echo "Thank you for visiting the page a lot.</br>";
}
if ($num_visits >= 10) {
    header('Location: congratulations.php');
}

$_SESSION['num_visits'] = $num_visits + 1;
?>

<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>