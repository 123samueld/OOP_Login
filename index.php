<?php

    include 'includes/dbh.inc.php';
    include 'includes/user.inc.php';
    include 'includes/viewuser.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    $users = new ViewUser();
    $users->show_all_users();
?>

</body>
</html>