<?php
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="download.pdf"');
readfile('SubhamSHrivastava.pdf');
exit;
