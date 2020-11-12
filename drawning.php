<?php

$width = 1929; 
$height = 1080;        
$img = ImageCreate( $width, $height );
$white = ImageColorAllocate( $img, 255, 255, 255 );
$pen = ImageColorAllocate( $img, 0, 0, 0 );
$pen2 = ImageColorAllocate( $img, 100, 100, 100 );
$startx1 = 700;     
$startx2 = 400;   
$starty = 300; 
$rad_1_1 = 300   ; 
$rad_1_2 = 400;  
$rad_2_1 = 700;
$rad_2_2 = 100;
ImageEllipse( $img, $startx1, $starty, $rad_1_1, $rad_1_2, $pen );
ImageEllipse( $img, $startx2, $starty2, $rad_2_1, $rad_2_2, $pen2 );
header('Content-type: image/png' );
ImagePng( $img );
?>