<?php
include 'libs/load.php';
$user = "Klinton";
$pass = isset($_GET['pass']) ? $_GET['pass'] : '';
$result = null;

if (isset($_GET['logout'])) {
          Session::destroy();
          die("Session Destroyed, <a href='logintest.php'>Login Again</a>");
}
/*
1. Check if session_token in PHP session is available
2. If yes, construct UserSession and see if it is successfull
3. Check if the session is valid one
4. If valid, print "Session vlidated"
5. Else, print "Invalid Session" and ask user to login.
*/
if (Session::get('is_loggedin')) {
          $username = Session::get('session_username');
          $userobj = new User($username);
          print("Welcome Back " . $userobj->getFirstname() . "<br>");
          //print("<br>" . $userobj->getBio());
          $userobj->setBio("Hi Buddies");
          echo "<br>";
          //$userobj->setPic("Rollback");
          $userobj->thiIsNotAFunction();
          //print("<br>" . $userobj->getBio());
?>

<?php
} else {
          printf("No Session found, trying to login now. <br>");
          $result = User::login($user, $pass);
          //$userobj = new User($username);
          if ($result) {
                    $userobj = new User($user);
                    echo "Login SUCCESS " . $userobj->getUsername(); //. $result->getPassword();
                    Session::set('is_loggedin', true);
                    Session::set('session_username', $result);
                    //echo $userobj;
          } else {
                    echo "\nLogin FAILED $user <br>";
          }
}
echo <<<EOL
<br><br><a href="logintest.php?logout">Logout</a><br>
EOL;
