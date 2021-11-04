<?php
	$Connect = pg_connect("postgres://aabvarsmummrlk:a1e97b61495765cc457617ac54dba51d771927723a23be63ab2c452a3eb14e51@ec2-3-218-92-146.compute-1.amazonaws.com:5432/d5t0b9kl2j5fjo");
    if (!$Connect) {
        die("Connection failed");
    }
?>