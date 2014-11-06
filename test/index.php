<?php

require_once('db_connect.inc.php');
require_once('users.php');

?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<div id="form_container">			
			<form id="form"method="post" action="">
				<div class="form_description">
					<p>Login</p>
				</div>						
					<ul>					
						<li id="li_1">
							<label class="description" for="login">Login</label>
								<div>
									<input id="login" name="login" class="element text medium" type="text" maxlength="255" value=""> 
								</div> 
						</li>		
						<li id="li_2">
							<label class="description" for="password">Password</label>
							<div>
								<input id="password" name="password" class="element text medium" type="password" maxlength="255" value=""> 
							</div> 
						</li>
					
						<li class="buttons">						
							<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit">
						</li>
					</ul>
				<form>					
		</div>
	</body>
</html>
