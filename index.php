<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <link rel='stylesheet' href='styles.css' type='text/css'>
    <link rel="icon" type="image/png" href="TroubleU-icon.png">

    <title>Clock</title>
    <?php
    require 'logic.php';
    ?>

</head>
<body class=<?php echo $timeOfDay; ?>>

    <h1>Clock Application: the time is <?php echo $now; ?>
    </h1>
    <img src='http://making-the-internet.s3.amazonaws.com/php-<?php echo $timeOfDay ?>.png'>
</body>
</html>
