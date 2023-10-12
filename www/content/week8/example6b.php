<?php
//echo "<p>The username sent was ".$_POST['username']."</p>";
//echo "<p>The username sent was ".$_POST['password']."</p>";

$list1=fopen("./content/week8/userData.txt",'r');
//$lines = count(file("./content/week8/userData.txt")); 
$stringA = fgets($list1);
$stringB = fgets($list1);
$stringC = fgets($list1);

$array = [];
$array[0] = explode(",", $stringA);
$array[1] = explode(",", $stringB);
$array[2] = explode(",", $stringC);

foreach ($array as $user) {
	if (($_POST['username'] === $user[1]) && $_POST['password'] === $user[2]) {
		echo "Hello There " . $user[3] . "</p>";
		$userData = $user;
		$validLogin = true;
	}
}

if ($validLogin) {
	// Session is started in init.php
	$_SESSION['firstName'] = $userData[3];
	$_SESSION['lastName'] = $userData[4];
	$_SESSION['age'] = $userData[5];
	$_SESSION['city'] = $userData[6];
	$_SESSION['state'] = $userData[7];
	echo "<p><a href='/weeks/8/example6c'>Link to Example6C</a></p>";
}