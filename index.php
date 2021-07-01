<?php
$iframe_option = "SAMEORIGIN";
header ("X-Frame-Options: $iframe_option");
?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>A Basic Template</title>
  <meta name="description" content="A basic HTML5 Template.">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>

<img src="lulioKKI.png" alt="KKI in Lulio" width="250" />
<p><b>iFrame option selected:</b> <?php echo $iframe_option; ?></p>

<button type="button" onclick="window.history.back();">JS Go Back</button>

<button type="button" onclick="window.open('', '_parent', ''); window.close();">JS Close Window</button>

</body>
</html>
