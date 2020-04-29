<?php
// Credit to Sparksammy for creating this server side datastore code
// Also credit to Ephyllox for the idea to make it POST and Hotstuff6660 for the original idea and save code.
$json = file_get_contents('php://input');
$jsonDecoded = json_decode($json);

$myfile = fopen($jsonDecoded->name, "w") or die("Unable to open file!");
$txt = $jsonDecoded->data;
fwrite($myfile, $txt);
fclose($myfile);
?> 