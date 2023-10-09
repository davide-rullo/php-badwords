<?php



$mytext = $_POST['mytext'];
$badword = $_POST['badword'];

$textlength = strlen($mytext);

?>

<body>

    <h2><?php echo $mytext; ?></h2>

    <h2><?php echo $textlength; ?> </h2>

</body>