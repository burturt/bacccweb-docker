<?php
	$pagecontents = file_get_contents("./index.html");
	if (isset($_GET['noredirect'])) {
		$pagecontents = str_replace("redirect", "n0-r3d1r3ktz", $pagecontents);
	}
	
	$pagecontents = str_replace("flag 8: BACCC{x-p0z3d-1nd3x-f1l3-37ce8d}", "flag 8 went missing!", $pagecontents);
	echo $pagecontents;

