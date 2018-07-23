<?php

$imput = $_GET['farbe'];
echo $imput."=Imput</br> </br>";

date_default_timezone_set("Europe/Berlin");
$time = date('Y-m-d');

$colorcodehex = substr($imput,0,1);
$colorcodergb = substr($imput,0,3);
$colorcodergba = substr($imput,0,4);
$rgbstring = substr($imput,3,20);
$rgbastring = substr($imput,4,20);

echo $colorcodehex."=colorcodehex</br> </br>";
echo $colorcodergb."=colorcodergb</br> </br>";
echo $colorcodergba."=colorcodergba</br> </br>";
echo $rgbstring."=rgbstring</br> </br>";
echo $rgbastring."=rgbastring</br> </br>";

if ($colorcodehex == "#") {
  $output = $imput;
  echo $output."=output #";
  $myfile = fopen("../color/$output.txt", "w") or die("Ich kann das File nicht Öffnen");
  $txt = $output;
  fwrite($myfile, $txt);
  fclose($myfile);
  echo "<script type='text/javascript'>alert('Work');</script>";

}


elseif ($colorcodergb == "rgb") {

  $rgbstring = trim($rgbstring, '()');
  $rgb = explode(",", $rgbstring);

  $i = 0;
foreach ($rgb as $rgbwert) {
  if (strlen(dechex($rgbwert)) == 1) {
    $rgb[$i] = "0".dechex($rgbwert);
  }else {
    $rgb[$i] = dechex($rgbwert);
  }
  $i++;
}

  $output = "#".$rgb[0].$rgb[1].$rgb[2];
  echo $output." = output rgb";

  $myfile = fopen("../color/$output.txt", "w") or die("Ich kann das File nicht Öffnen");
  $txt = $output;
  fwrite($myfile, $txt);
  fclose($myfile);
  echo "<script type='text/javascript'>alert('Work');</script>";
}


elseif ($colorcodergba == "rgba") {

  $rgbastring = trim($rgbastring, '()');
  $rgb = explode(", ", $rgbastring);

  $i = 0;
foreach ($rgb as $rgbwert) {
  if (strlen(dechex($rgbwert)) == 1) {
    $rgb[$i] = "0".dechex($rgbwert);
  }else {
    $rgb[$i] = dechex($rgbwert);
  }
  $i++;
}

  $output = "#".$rgb[0].$rgb[1].$rgb[2];
  echo $output." = output rgb";
  $myfile = fopen("../color/$output.txt", "w") or die("Ich kann das File nicht Öffnen");
  $txt = $output;
  fwrite($myfile, $txt);
  fclose($myfile);
  echo "<script type='text/javascript'>alert('Work');</script>";

}


else {
  echo $output."Dein Farb Code ist undgültig";
  $message = "Dein Farb Code ist undgültig";
  echo "<script type='text/javascript'>alert('$message');</script>";
}






header('Location: http://color.janiswanger.ch/');
exit;

?>
