<html>
<?php
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$fb = $_REQUEST['fb'];
$position = strpos($fb, "facebook.com");
if ($position === FALSE){
    $fb = "http://facebook/" . $fb;
}
$twitter = $_REQUEST['twitter'];
$twitter_url  = "http://twitter.com/";
$position = strpos($twitter, "@");
if ($position === FALSE){
    $twitter = $twitter_url . $twitter;
}
 else {
     $twitter = $twitter_url . substr($twitter, $position + 1);
}
?>
    <head>
        <link href="../../css/phpMM.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
        <div id="example">Пример 2.1</div>
        <div id="content">
            <p>Это запись той информации, которую вы отправили:</p>
            <p>
                Имя: <?php echo $first_name . " " . $last_name; ?><br />
                Email: <?php echo $email; ?><br />
                Facebook: <a href = "<?php echo $fb; ?>"><?php echo $fb; ?>
                </a><br />
                Twitter: <a href="<?php echo $twitter; ?>"><?php echo $twitter; ?></a><br />
            </p>
        </div>
        <div id="footer"></div>
    </body>
</html>