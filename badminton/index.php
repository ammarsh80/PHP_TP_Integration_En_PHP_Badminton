<!DOCTYPE html>
<html lang="en">

<?php
include 'common/head.php';
?>

<body>
<?php
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_STRING);

$array = [
    "lundi" => "18h à 22h",
    "mardi" => "18h à 20h",
    "mercredi" => "16h30 à 18h",
    "jeudi" => "19h30 à 22h",
    "vendredi" => "18h à 22h",
];

$day = filter_input(INPUT_GET, "day", FILTER_SANITIZE_STRING);
$hours = filter_input(INPUT_GET, "hours", FILTER_SANITIZE_STRING);
include 'template.php';
?>

</body>
</html>