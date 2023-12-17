<?php
$env = parse_ini_file('.env');

$site_mode= $env["site_mode"];

if($site_mode=="maint"){
    echo "we are in maintenance";
}
if($site_mode=='live'){
    header('Location: ./app/');
}

if($site_mode=='pre'){
    echo "we are in prelaunch. check after 01 Nov 2023";
}

?>
