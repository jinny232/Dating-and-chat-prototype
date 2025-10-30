<?php
session_start();

# check if username & password submitted
if (isset($_POST['username']) && isset($_POST['password'])) {

    # database connection file
    include '../db.conn.php';

    # get data from POST request and store them in vars
    $password = $_POST['password'];
    $username = $_POST['username'];

    # simple form validation
    if (empty($username)) {
        # error message
        $em = "Username is required";

        # redirect to 'index.php' and passing error message
        header("Location: ../../signin.php?error=$em");
        exit; // Exit to prevent further execution
    } else if (empty($password)) {
        # error message
        $em = "Password is required";

        # redirect to 'index.php' and passing error message
        header("Location: ../../signin.php?error=$em");
        exit; // Exit to prevent further execution
    } else {
        $sql  = "SELECT * FROM users WHERE username=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);

        # if the username exists in the database
        if ($stmt->rowCount() === 1) {
            # fetching user data
            $user = $stmt->fetch();

            # verifying the encrypted password
            if ($user['password'] === $password) {

                # successfully logged in
                # creating the SESSION
                $_SESSION['username'] = $user['username'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['isLogin'] = $user['isLogin'];
                

                # redirect to 'home.php'
                header("Location: ../../information/page1.php");
                exit; // Exit to prevent further execution

            } else {
                # error message
                $em = "Incorrect password";

                # redirect to 'index.php' and passing error message
                header("Location: ../../signin.php?error=$em");
                exit; // Exit to prevent further execution
            }
        } else {
            # error message
            $em = "Username not found";

            # redirect to 'index.php' and passing error message
            header("Location: ../../signin.php?error=$em");
            exit; // Exit to prevent further execution
        }
    }
} else {
    header("Location: ../../index.php");
    exit;
}
?>
