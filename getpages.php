
<?php  


$url='https://docs.google.com/spreadsheets/d/14IXYphUdcyvhQZb1J2CXqQlMwOaGhFVz9wF3SofovNg/gviz/tq?tq=select+C,E,H';  
$html = file_get_contents($url);  
echo $html;  
?>  
