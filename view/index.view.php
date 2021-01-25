<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<?php

use Users\User;

$user1 = new User('Rimante', 'rimante@gmail.com', 'Student');
$user1->addDescription('Labai geras vartotojas');

echo "<ul> Vartotojas:";
foreach ($user1->getUserData() as $user) {
    echo "<li>$user</li> ";
}
echo "</ul>";

?>

</body>
</html>