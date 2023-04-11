<?php
header('Content-Description: File Transfer');
header('Content-Type: application/msword');
header("Content-Disposition: attachment; filename=szia.docx");
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: 55000');