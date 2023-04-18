<?php
$conn = pg_connect("postgres://zcarjgqufaatat:31563e1437e74fc6546e65799b7df7552367b62bfb2dca319c1a471bebc78c58@ec2-34-236-103-63.compute-1.amazonaws.com:5432/ddmn69iaf3mv0m");

	if(!$conn)
	{
		die("Could not connect to database");
    }

?>