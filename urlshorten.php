<?php
echo'<form action="urlshorten.php" method="post">'
    .'<input type="text" name="url" placeholder="Enter in your url here:"/>'
    .'<input type="submit" name="submit"/>'
    .'</form>';

if(isset($_POST['submit']))
{
$url = $_POST['url'];
$id= rand(0,100000000);

$f = fopen("$id.php",'w');
fwrite($f,'<?php header("Location: '.$url.'"); ?>');
fclose($f);
}
echo 'Your shortened url: www.yoursite.com/'.$id.'.php';
?>
