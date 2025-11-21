<?php
//======================================================================
// USER AUTHENTICATE
//======================================================================

include_once (realpath(dirname(__FILE__) . '/path.php'));
include_once (realpath(dirname(__FILE__) . '/config.php'));

session_start(); // Ensure session is active

//-----------------------------------------------------
// Authenticate
//-----------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['message'] = "Username or Password is empty!";
        header("location: " . SRC_PATH . "/home.php");
        exit();
    }

    // Clean input
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Protect against SQL injection
    $username = stripslashes($username);
    $username = mysqli_real_escape_string($db_connection, $username);

    // Fetch user details including hash
    $select_users = $db_connection->prepare("
        SELECT u.user_id, u.role_id, cr.username, cr.password_hash
        FROM Users u
        JOIN Credentials cr ON u.user_id = cr.user_id
        WHERE cr.username = ? LIMIT 1
    ");
    $select_users->bind_param("s", $username);
    $select_users->execute();
    $select_users->bind_result($user_id, $user_role, $db_username, $db_password_hash);
    $select_users->store_result();

    if ($select_users->num_rows === 1 && $select_users->fetch()) {
        
        // Verify password with hash
        if (password_verify($password, $db_password_hash)) {

            $_SESSION['user_id'] = $user_id;
            $_SESSION['login_user'] = $db_username;
            $_SESSION['user_role'] = $user_role;

            // Redirect users based on role
            if ($user_role == 1) {
                header("location: " . BASE_URL . "/admin");
            } elseif ($user_role == 2) {
                header("location: " . BASE_URL . "/user/feed.php");
            } elseif ($user_role == 3) {
                header("location: " . BASE_URL . "/guest");
            } else {
                $_SESSION['error'] = "Login Failed";
                header("location: " . SRC_PATH . "/home.php");
            }
            exit();
        } else {
            $_SESSION['message'] = "Invalid password!";
            header("location: " . SRC_PATH . "/home.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "Username not found!";
        header("location: " . SRC_PATH . "/home.php");
        exit();
    }

    // close connection
    $select_users->close();
} else {
    header("location: " . SRC_PATH . "/logout.php");
    exit();
}
?>
