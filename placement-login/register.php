<html>
<head>
	<link rel="stylesheet" href="regAlign.css" type="text/css" />
	<script type="text/javascript" src="http://www.code.jquery.com/jquery-latest.js">
	</script>
</head>

<body background="golden_bar_graph-1920x1200.jpg">

<p>
<form method="post" action="submit.php">
<br><br>
<label for="fname"> Full Name: </label>
<input type="text" name="fname" id="fname" tabindex="1"> <br><br>

<label for='email' >Email Address:</label>
<input type='text' name='email' id='email' maxlength="50" tabindex="2" tabindex="2"/><br><br>

<label for="pass">Enter Password:</label>
<input type="password" name="pass1" id="pass1" tabindex="3"> <br><br>
<span id="passstrength"></span>

<label for="pass2">Re-Enter Password:</label>
<input type="password" name="pass2" id="pass2" tabindex="4"> <br><br>


<label for='phone' >Phone Number:</label>
<input type='number' name='phone' id='phone' maxlength="15" tabindex="5"/><br><br>

<label for='Address' >Address:</label>
<textarea rows="5" cols="20" name='Address' id='Address' tabindex="6"> </textarea><br><br>
<strong><h1>Academic Details:</h1></strong><br>

<label for='10' >10th percentile:</label>
<input type='text' name='10' id='10' maxlength="15" tabindex="7"/><br><br>

<label for='12' >12th/PUC Percentile:</label>
<input type='text' name='12' id='12' maxlength="15" tabindex="8"/><br><br>

<label for='Dip' >Diploma Score:<br>(Type NA if not applicable)</label>
<input type='text' name='Dip' id='Dip' maxlength="15" tabindex="9"/><br><br>

<strong><h2>RVCE Scores:</h2><strong>
<h3>*Type only SGPA's</h3><br>

<label for='s1' >1st SEM:</label>
<input type='number'step="any" name='s1' id='s1' maxlength="15" tabindex="10"/><br><br>

<label for='s2' >2nd SEM:</label>
<input type='number'step="any" name='s2' id='s2' maxlength="15" tabindex="11"/><br><br>

<label for='s3' >3rd SEM:</label>
<input type='number'step="any" name='s3' id='s3' maxlength="15" tabindex="12"/><br><br>

<label for='s4' >4th SEM:</label>
<input type='number'step="any" name='s4' id='s4' maxlength="15" tabindex="13"/><br><br>

<label for='s5' >5th SEM:</label>
<input type='number'step="any" name='s5' id='s5' maxlength="15" tabindex="14"/><br><br>

<label for='s6' >6th SEM:</label>
<input type='number'step="any" name='s6' id='s6' maxlength="15" tabindex="15"/><br><br>

<label for='s7' >7th SEM:</label>
<input type='number'step="any" name='s7' id='s7' maxlength="15" tabindex="16"/><br><br><br>

<label for='cgpa' >Current CGPA:</label>
<input type='number'step="any" name='cgpa' id='cgpa' maxlength="15" tabindex="17"/><br><br>

<label for='back' >Backlogs:<br></label>
<input type='number' name='back' id='back' maxlength="15" tabindex="9"/><br><br>

<input type="submit" value="Register" tabindex="7">

</form>
<p>
</body>
</html>