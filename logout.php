 <?php
    session_start();
    
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<body>

</body>
</html>




