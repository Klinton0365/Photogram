<?php
include 'libs/load.php';

$user = "Klinton";

if (isset($_GET['logout'])) {
          if (Session::isset("session_token")) {
                    $Session = new UserSession(Session::get("session_token"));
                    if ($Session->removeSession()) {
                              echo "<h3> previous Session is removing from db</h3>";
                    } else {
                              echo "<h3> Previous Session not removing from db</h3>";
                    }
                    Session::destroy();
                    die("Session destroyed, <a href='logintest2.php'>Login Again</a>");
          }
}
/*
1. Check is session_token in PHP session is available
2. If yes, construct Username and see if its successfull.
3. Check if the session is valid one.
4. If valid, print "Session Validated"
5. Else, print "Invalid Session" and assk user to login.
*/
if (Session::set('Session_token', 'hi')) {
          if (UserSession::authorize(Session::get("Session_token"))) {
                    print("HI");
          }
}


echo <<<EOL
<br><br><a href="logintest2.php?logout">LOG OUT</a>
EOL;
