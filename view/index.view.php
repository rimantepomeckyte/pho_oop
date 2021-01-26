<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>

<?php

use Users\Student;
use Users\Show;

$user1 = new Student('Rimante', 'rimante@gmail.com', 'Student', 9.5);
$user1->addDescription('Labai geras vartotojas');

Show::ShowData($user1->getUserData());

?>

</body>
</html>