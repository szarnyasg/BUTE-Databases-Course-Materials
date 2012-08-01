<?php
  function flushPDF($url, $filename) {
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="'.$filename.'"');
    readfile($url);
  }
  
  $document = $_GET["document"];
  $url = 'https://github.com/szarnyasg/BUTE-Databases-Course-Materials/blob/master/' . $document . '/' . $document . '.pdf?raw=true';
  $filename = $document . ".pdf";
  
  flushPDF($url, $filename);
?>
