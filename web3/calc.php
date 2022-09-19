<html>

<head>
    <title>Calculation Result</title>
</head>

<body>
    <?php
    if (isset($_POST)) {
        if (isset($_POST['val1']) && is_numeric($_POST['val1'])
            && isset($_POST['val2']) && is_numeric($_POST['val2'])
            && isset($_POST['calc'])) {

            $val1 = $_POST['val1'];
            $val2 = $_POST['val2'];
            $calc = $_POST['calc'];
            $result = 0;

            switch($calc) {
                case 'add':
                    $result = $val1 + $val2;
                    break;
                case 'sub':
                    $result = $val1 - $val2;
                    break;
                case 'mul':
                    $result = $val1 * $val2;
                    break;
                case 'div':
                    $result = $val1 / $val2;
                    break;
            }
            echo "Calculation result: $result";
        } else {
            echo "Invalid entry - please retry";
        }
    }
    ?>
</body>

</html>