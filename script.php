<?php



$mytext = $_POST['mytext'];
$badword = $_POST['badword'];

$paragraph = $mytext . ' ' . $badword;

$hidden = str_replace($badword, '***', $paragraph);

$textlength = strlen($paragraph) - 1;
$censorlength = strlen($hidden) - 1;


?>

<body>
    <h2>Paragrafo:</h2>
    <p><?php echo $paragraph; ?></p>

    <h2>Numero di lettere nel paragrafo: <?php echo $textlength; ?> </h2>
    <br><br><br>

    <h2>Paragrafo censurato:</h2>
    <p><?php echo $hidden; ?></p>

    <h2>Numero di lettere nel paragrafo: <?php echo $censorlength; ?> </h2>



</body>