<?php
if (isset($_GET['f'])) {
	$f = $_GET['f'];
	if (!file_exists('./files/' . $f) or $f === '') {
		header('HTTP/1.0 404 Not Found');
		echo 'File ' . $f . ' not found.';
		die();
	}
	if ($f !== '../hide.php' and $f !== 'cat' and $f !== 'hello') {
		header('HTTP/1.0 403 Forbidden');
		echo "While this is valid, I can't have you looking around the files beyond the intended file. Sorry :/";
		die();
	}
	echo(file_get_contents('./files/' . $f));
	die();
}
header('HTTP/1.0 400 Bad Reqest');
echo 'Specify the f query parameter or use the form below.';
echo '<br>Available files: <code>hello</code>, <code>cat</code>';
echo '<form action="get.php" method="GET">
    <input type="text" name="f" value="cat" /> 
    <button type="submit" value="Submit">Submit</button> 
</form>';

die();
