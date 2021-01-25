<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<?php

use Users\Student;

$user1 = new Student('Rimante', 'rimante@gmail.com', 'Student', 9.5);
$user1->addDescription('Labai geras vartotojas');

echo "<ul> Vartotojas:";
foreach ($user1->getUserData() as $user) {
    echo "<li>$user</li> ";
}
echo "</ul>";

?>

</body>
</html>