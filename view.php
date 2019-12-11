<?php
$file = 'uploads/pdf/THUMA.pdf';
$filename = 'THUMA.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="'.$filename .'"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>