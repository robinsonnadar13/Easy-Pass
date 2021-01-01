<!DOCTYPE html>
<html>
<head>
	<title>Quick Pass</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="quickpass.css">
</head>
<body>
<h1>Quick Pass</h1>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">English</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Tamil</label>
		<div class="login-form">
			<div class="sign-in-htm">
			<div class="group">
					<label for="name" class="label">Name</label>
					<input id="name" type="text" class="input">
				</div>
				<div class="group">
					<label for="mobilenumber" class="label">Mobile Number</label>
					<input id="mobilenumber" type="number" class="input">
				</div>
				<div class="group">
					<label for="address" class="label">Address</label>
					<input id="name" type="text" class="input">
				</div>
				<div class="group">
					<label for="noofmembers" class="label">Numbers Including Yourself: (Max 6)</label>
					<input id="noofmembers" type="number" class="input">
				</div>
				<div class="group">
					<label for="password" class="label">Secure Password (To Regenerate/Cancel Pass) Use minimum 6 characters.</label>
					<input id="password" type="password" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Book">
				</div>
				<div class="hr"></div>
			</div>
			<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
					<label for="name" class="label">பெயர்</label>
					<input id="name" type="text" class="input">
				</div>
				<div class="group">
					<label for="mobilenumber" class="label">கைபேசி எண்</label>
					<input id="mobilenumber" type="number" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="address" class="label">முகவரி</label>
					<input id="address" type="text" class="input">
				</div>
				<div class="group">
					<label for="noofmembers" class="label">உங்களை உள்ளடக்கிய எண்கள்: (அதிகபட்சம் 6)</label>
					<input id="noofmembers" type="number" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="password" class="label">உங்கள் பின்னை (PIN) உருவாக்கவும்</label>
					<input id="password" type="password" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="பதிவு">
				</div>
				<div class="hr"></div>
			</div>
	</div>
</div>
</body>
</html>