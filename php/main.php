<?php
$directory = 'color';
$files = array_diff(scandir($directory), array('.', '..'));
//$files = scandir($directory);

foreach($files as $file) {

$inhaltlinieeins = file_get_contents($directory."/".$file);


	echo '<div class="colors">
      <div class="farbe" style="background-color:'.$inhaltlinieeins.';">
        <div class="name">'.$inhaltlinieeins.'</div>
      </div>
    </div>';
}


//$filecount = count( $files );


//$filecount = count( $files );




//zum kopiere:
/*
$file = "colors.txt";
$buffer = "#123123";

if (file_exists($file)) {
  $obuffer = file_get_contents($file);
  echo $obuffer;
  $buffer = $obuffer . $buffer;
  file_put_contents($file, $buffer);
}
*/



?>
