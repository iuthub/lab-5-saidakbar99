<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		
		<hr />
		
		<h2>Give Us Your Money</h2>
		<form action="sucker.php" method="post">
			<label>Name<input type="text" name="fname"></label>

			<label>Section
                <select name="section">
                    <option value>(Select a section)</option>
                    <option>MA</option>
                    <option>MB</option>
                    <option>MC</option>
                    <option>MD</option>
                    <option>ME</option>
                    <option>MF</option>
                    <option>MG</option>
                    <option>MH</option>
                </select>
            </label>

			<label>Credit Card<input type="text" name="card"></label>


			<div class="radio">

				<label>Visa <input class="rbtn" type="radio" value="visa" name="rbtn"></label>

				<label>MasterCard <input class="rbtn" type="radio" value="master" name="rbtn"></label>
			</div>
            <div>
                <input type="submit" name="submit" value="I am a giant sucker.">
            </div>
		</form>


		

	</body>
</html>