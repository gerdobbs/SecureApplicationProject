<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
<<<<<<< HEAD

=======
include_once 'includes/headers.php';
>>>>>>> 6a5e11963ec6a3f9c4786008946050bd38c13c7f
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
        <link rel="stylesheet" href="styles/bootstrap.min.css" />
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="page1.php">Home</a>
              </li>
              <li class="nav-item">
<<<<<<< HEAD
                <a class="nav-link" data-toggle="tab" href="changePass.php">Change Password</a>
=======
                <a class="nav-link" data-toggle="tab" href="page2.php">Change Password</a>
>>>>>>> 6a5e11963ec6a3f9c4786008946050bd38c13c7f
              </li>
              <li class="nav-item">
                <a class="nav-link" href="includes/logout.php">Logout</a>
              </li>
            </ul>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p>
                This is an example protected page.  
            </p>
            <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>