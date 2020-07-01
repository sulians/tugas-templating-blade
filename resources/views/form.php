<!DOCTYPE html>
<html>
<head>
	<title>FORM-SULIAN SEDUBUN</title>
</head>
<body>
	<h2>Buat Account Baru!</h2>
	<h4>Sign Up Form</h3>
	<form action="/welcome_post" id="form1" method="POST">
		<input type="hidden" name="token" value={{csrf_token()}}>
		<label for="first_name">First Name:</label>
		<br>
		<br>
		<input type="text" name="first_name">
		<br>
		<br>
		<label for="last_name">Last Name:</label>
		<br>
		<br>
		<input type="text" name="last_name">
		<br>
		<br>
		<label>Gender:</label>
		<br>
		<br>
		<input type="radio">Male<br>
		<input type="radio">Female<br>
		<input type="radio">Other<br>
		<br>
		<label>Nationality:</label>
		<br>
		<select>
			<option>Indonesian</option>
			<option>Malaysian</option>
			<option>Australian</option>
		</select>
		<br>	
		<br>
		<label>Language Spoken:</label>
		<br>
		<br>
		<input type="checkbox" name="language" value="0">Bahasa Indonesia
		<br>
		<input type="checkbox" name="language" value="1">English
		<br>
		<input type="checkbox" name="language" value="0">Other
		<br>
		<br>
		<label for="bio">Bio:</label>
		<br>
		<br>
		<textarea cols="20" rows="7" id="bio"></textarea>
		<br>
		<input type="submit" value="Sign Up" >
	</form>	


</body>
</html>