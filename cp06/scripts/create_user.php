<html>
<?php
require '../../scripts/database_connection.php';
$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
$fb =
        str_replace(
                "facebook.org",
                "facebook.com",
                trim($_REQUEST['fb']));
$position = strpos($fb, "facebook.com");
if ($position === FALSE){
    $fb = "http://facebook.com/" . $fb;
}
$twitter = trim($_REQUEST['twitter']);
$twitter_url  = "http://twitter.com/";
$position = strpos($twitter, "@");
if ($position === FALSE){
    $twitter = $twitter_url . $twitter;
}
 else {
     $twitter = $twitter_url . substr($twitter, $position + 1);
}
$insert_sql = "INSERT INTO users (first_name, last_name, " .
    "email, facebook_url, twitter_handle) " .
    "VALUES ('{$first_name}', '{$last_name}', '{$email}', " .
    "'{$fb}', '{$twitter}');";
mysqli_query($connect, $insert_sql)
        or die(mysqli_error($connect));
$get_user_query = "SELECT * FROM USERS WHERE ...";
mysqli_query($connect, $insert_sql);
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
                Twitter: <a href="<?php echo $twitter; ?>"><?php echo $twitter; 
                ?></a><br />
            </p>
        </div>
        <div id="footer"></div>
    </body>
</html>