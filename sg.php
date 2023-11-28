<pre>
<?php
//Session::start();
//session_start();
//setcookie("_test_name", "test_value", time() + (86400 * 30), "/");
include 'libs/load.php';

print("_SESSION \n");
print_r($_SESSION);
print("_SERVER \n");
print_r($_SERVER);

if (isset($_GET['clear'])) {
          printf("Clearing\n");
          Session::unset_all();
          //session_unset();
}

if (isset($_SESSION['a'])) {
          print("Variable A Already exists... Value: " . Session::get('a') . "\n");
} else {
          //$_SESSION['a'] = time();
          Session::set('a', time());
          print("Assigning new value... Value: $_SESSION[a]\n");
}
if (isset($_GET['destroy'])) {
          printf("Destroying...\n");
          Session::destroy();
}
?>
</pre>