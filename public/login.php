<?php
/**
 * Start the session.
 */
session_start();
/**
 * Include ircmaxell's password_compat library.
 */
require 'password.php';

/**
 * Include our MySQL connection.
 */
require 'login_connect.php';

// Check if the user is already logged in, if so, redirect to the index page
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: index.php');
    exit;
}


// //If the POST var "login" exists (our submit button), then we can
// //assume that the user has submitted the login form.
// if (isset($_POST['login'])) {

//     //Retrieve the field values from our login form.
//     $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
//     $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
//     $email = !empty($_POST['email']) ? trim($_POST['email']) : null;

//     //Retrieve the user account information for the given username.
//     $sql = "SELECT username, password,email FROM users WHERE username = :username";
//     $stmt = $pdo->prepare($sql);

//     //Bind value.
//     $stmt->bindValue(':username', $username);

//     //Execute.
//     $stmt->execute();

//     //Fetch row.
//     $user = $stmt->fetch(PDO::FETCH_ASSOC);

//     //If $row is FALSE.
//     if ($user === false) {
//         //Could not find a user with that username!
//         //PS: You might want to handle this error in a more user-friendly manner!
//         die('Incorrect username / password combination!');
//     } else
//     // if($user['username']=='admin')
//     {
//         //User account found. Check to see if the given password matches the
//         //password hash that we stored in our users table.

//         //Compare the passwords.
//         $validPassword = password_verify($passwordAttempt, $user['password']);

//         //If $validPassword is TRUE, the login has been successful.
//         if ($validPassword) {

//             //Provide the user with a login session.
//             $_SESSION['user_id'] = $user['id'];

//             // $_SESSION['admin'] = $user['id'];

//             $_SESSION['logged_in'] = time();

//             //Redirect to our protected page, which we called home.php
//             header('Location: index.php');
//             exit;
//         } else {
//             //$validPassword was FALSE. Passwords do not match.
//             die('Incorrect username / password combination!');
//         }
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>El-Care</title>
</head>

<body>
    <div>

        <div class="container">
            <h1>Login</h1>
            <form action="login.php" id="add_record_form" method="post">

                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required placeholder="Simon Clarke" class="text-input"
                    onBlur="username_validation();" /><span id="name_err"></span>
                <br>

                <label for="password">Password: </label>
                <input type="password" name="password" id="password" required placeholder="Simonclarke123"
                    class="text-input" onBlur="password_validation();" /><span id="password_err"></span>
                <br>

                <input type="submit" name="login" value="Login">
                <p>Already have an Account?
                    <a href="register.php">Register Here</a>
                    <a href="admin-login.php">Amin Login</a>
                </p>
            </form>
        </div>
    </div>

</body>

</html>