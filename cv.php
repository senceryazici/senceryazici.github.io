<?php
    $file = "github.com/senceryazici/cv/releases/latest/download/main.pdf"

    header("Content-Description: File Transfer"); 
    header("Content-Type: application/octet-stream"); 
    header("Content-Disposition: attachment; filename=\"". basename($file) ."\""); 
    
    readfile ($file);
    exit(); 
?>
