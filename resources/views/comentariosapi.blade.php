<?php
$url_api = "https://script.google.com/macros/s/AKfycbwQTixj8Rmhbtlv6t2ybKhKFkEoSCe5GAjNSAiEVP9EgPqe_DMvbUX0Wa4728V2ALXi/exec";
	$inputJSON = file_get_contents($url_api);
	$data = json_decode($inputJSON, TRUE);
	$datoss = $data["user"];
exit(json_encode($datoss));
