<?php
$url_api = "https://script.google.com/macros/s/AKfycbwu40bVhkq9tTW7aWtupGomg1pdDLD4RFSht1EscFQMGRXaTnOAD0rQ4QMq1dgFG5mV1A/exec";
	$inputJSON = file_get_contents($url_api);
	$data = json_decode($inputJSON, TRUE);
	$datoss = $data["user"];
exit(json_encode($datoss));

