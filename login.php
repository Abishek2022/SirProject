<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">

	.login{
  width: 564px;
  height: 511px;

  border: 1px solid black;
  margin-left: 678px;
  margin-top: 275px;
}
.titlelogin{
	 
	font-size: 40px;
	left: 241px;
	top: 31px;

}
	.usernamelabel{
	 
	font-size: 20px;
  margin-left: 55px;
  margin-top: 113px;
}
	input[type=text]{
		  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
   margin-left: 55px;
   

	}
	.passwordlabel{
	 
	font-size: 20px;
  margin-left: 55px;
  margin-top: 113px;
}

	input[type=password]{
		  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 55px;
;
	}
	.labellfo{
		font-size: 20px;
		color: blue;
		font-family: cursive;
	}
.creat{
	margin-left: 10px;
	margin-top: 50px;
	position: absolute;
}

		
</style>
<body>
	<div class="main">

	<form class="login">
		<label class="labell titlelogin">Log In</label><br>
		<label class="labell usernamelabel">Username</label><br>
	<input type="text" name="username" id="username" ><br>
	<label class="labell passwordlabel">Password</label><br>
	<input type="password" name="password" id="password"><br>
	<button type="submit" value="Submit"></button><br>
	<label class="labellfo creat">Create Account</label><br>
	<label class="labellfo forgate">Forgate your password</label>
	</form>
	</div>

</body>
</html>