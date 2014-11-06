<?php
if(!empty($_POST)){

$login = $_POST["login"];
$password = $_POST["password"];
if($login and $password)
	//print($login."  ".$password);

$sqlText = "SELECT `employee_login`.`login_id`,`employee_login`.`login`,`employee_login`.`password` FROM `ysh_test`.`employee_login`;";
$query = "select * from employee_login where login='".$login."';";
if ($result = mysqli_query($mysqli, $query)) {
    //print("Select \n".mysqli_num_rows($result));
	
	
	$row = mysqli_fetch_array($result);
	/*echo(count($row));
	echo("<pre>");
	print_r($result);
	echo("</pre>");
	*/
	
	$num_rows =$result->num_rows;	
	if($num_rows==0) echo('Invalid login or password');
	if($num_rows>1) echo ('<br>ERROR!');
	if($num_rows == 1){
		if($row['login'] == $login&&$row['password']==$password){
			header("Location:main.php");
			session_start();
			$_SESSION["login"] = $login;
		}
		else echo("Invalid password or login");
	
	}

	

}
}
?>