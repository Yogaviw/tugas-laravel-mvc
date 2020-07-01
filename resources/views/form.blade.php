<!DOCTYPE html>
<html>
<head>
	<title>Daftar Sanbercode</title>
</head>
<body>
	<form action="form1">
	<h2>Buat Account Baru</h2>
	<h4>Sign Up Form</h4>
	<p>
		<label>First Name:</label><br>
		<input type="text" name="">
	</p>
		<p>
		<label>Last Name:</label><br>
		<input type="text" name="">
	</p>
	<p>
		<label>Gender:</label><br>
		<br>
		<label><input type="radio" name="gender" value="Male"/>Male</label><br>
		<label><input type="radio" name="gender" value="Female"/>Female</label><br>
		<label><input type="radio" name="gender" value="Other"/>Other</label><br>
	</p>
	<p>
		<label>Nationaly:</label><br>
		<br>
		<select name='nationaly'>
			<option value="indonesia">Indonesia</option>
			<option value="india">India</option>
			<option value="malaysia">Malaysia</option>
		</select>
	</p>
	<p>
		<label>Language Spoken:</label><br><br>
		<label><input type="checkbox" name=""/>Bahasa Indonesia</label><br>
		<label><input type="checkbox" name=""/>Engslis</label><br>
		<label><input type="checkbox" name=""/>Other</label><br>
	</p>
	<p>
		<label>Bio:</label><br>
		<textarea name='bio'></textarea>
	</p>
	<input type="submit" value="Sign up" formaction="/selamat">
	</form>
</body>
</html>