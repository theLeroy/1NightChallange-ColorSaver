<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- .................................sheets.................................-->
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/style.min.css">
    <script src="js/index.js"></script>
    <script src="js/consolinfo.js"></script>
    <!-- .................................Fonts .................................-->
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,500,700" rel="stylesheet">
    <!-- .................................Meta Tags.................................-->
    <title>Color</title>
    <meta name="Janis Wanger" content="Janis Wanger">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="author" content="Janis Wanger">
    <meta name="description" content="Meine Farben--Janis.">
    <!--.................................favicon.................................-->
  </head>
  <!--.................................start Body.................................-->
  <body>
    <div class="add">
      <form action="/php/newfile.php" name="form" method="get">
        <input id="farbenmput" autocomplete="off" type="text" name="farbe" onfocus="if(this.value == '#A13BF2  |  Rgb(12,33,140)') { this.value = ''; }" value="#A13BF2  |  Rgb(12,33,140)" class="imput">
      </form>
    </div><?php include 'php/main.php'; ?>
  </body>
</html>