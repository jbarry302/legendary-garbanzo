<html>

<head>
    <title>Your Favorite</title>
</head>

<body>
    <?php
    if (isset($_POST)) {
        $username = $_POST['username'] ?? false;
        $color = $_POST['color'] ?? false;
        $dish = $_POST['dish'] ?? false;

        if ($username && $color && $dish) {
            echo "Thanks for your selection " . $username;
            echo "</br>You really enjoy " . $dish . "</br>- especially with a nice " . $color . " wine";
        } else {
            $arr = array(
                $username = $username ? "" : "username",
                $color = $color ? "" : "color",
                $dish = $dish ? "" : "dish",
            );
            echo "Invalid input value/s for " . json_encode(array_values(array_filter($arr, 'strlen')));
        }
    }
    ?>
</body>

</html>