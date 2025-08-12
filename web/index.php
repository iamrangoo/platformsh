<?php

// error_reporting(0);

// $valid_passwords = array ("mario" => "carbonell");
// $valid_users = array_keys($valid_passwords);

// $user = $_SERVER['PHP_AUTH_USER'];
// $pass = $_SERVER['PHP_AUTH_PW'];

// $validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

// if (!$validated) {
//   header('WWW-Authenticate: Basic realm="My Realm"');
//   header('HTTP/1.0 401 Unauthorized');
//   die ("Not authorized");
// }

// If arrives here, is a valid user.
// echo "<p>Welcome $user.</p>";
// echo "<p>Congratulation, you are into the system.</p>";

//test

// var_dump(getenv('SOMETHING'));

// foreach (getallheaders() as $name => $value) {
//     echo "$name: $value <br />";
// }

openlog("", LOG_PID, LOG_LOCAL0);
syslog(LOG_INFO, "Operation started");
syslog(LOG_ERR, "Operation failed");
closelog();

$output=null;
$retval=null;
exec('platform ssh \'echo $FASTLY_API_SERVICE\' -p 2av2ipslw5whe -e main && platform ssh \'echo $FASssTLY_API_TOKEN\' -p 2av2ipslw5whe -e main', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);
var_dump($output[0]);
var_dump(is_null($output[0]));
var_dump(strlen($output[0]));

var_dump($output[1]);
var_dump(is_null($output[1]));
var_dump(strlen($output[1]));