<?php
include('User.php');

$userOne = new User(username: "Pree", email: 'Pree.t@g.com');

echo $userOne->addFriend(). '<br>';
$userOne->setEmail('Papa@g.com');
echo $userOne->getEmail(). '<br>';
echo $userOne->role. '<br>';

echo '<br>'.'<br>';

include('AdminUser.php');

$userTwo = new AdminUser(username: "Pree2", email: 'Pree2.t@g.com',level:6);

echo $userTwo->level.'<br>';
echo $userTwo->role.'<br>';
echo $userTwo->addFriend(). '<br>';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Class 1</title>
</head>

<body>

</body>

</html>