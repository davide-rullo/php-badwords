<?php



$mytext = $_POST['mytext'];
$badword = $_POST['badword'];

$badwordlen = strlen($badword);

$hidden = str_repeat('***', $badwordlen);;

$textlength = strlen($mytext) + strlen($badword);
$textcensorlen = strlen($mytext) + strlen($hidden);
?>

<body>
    <h2>Paragrafo:</h2>
    <p><?php echo "$mytext $badword"; ?></p>

    <h2>Numero di lettere nel paragrafo: <?php echo $textlength; ?> </h2>
    <br><br><br>



    <p><?php echo "$mytext $hidden"; ?></p>

    <h2>Numero di lettere nel paragrafo: <?php echo $textcensorlen; ?> </h2>
</body>