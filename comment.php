<?php 
include ("block/bd.php");

if (isset ($_POST['author']));
{
$author = $_POST['author'];
}
if (isset ($_POST['ltd_name']));
{
$ltd_name = $_POST['ltd_name'];
}
if (isset ($_POST['text']));
{
$text = $_POST['text'];
}
if (isset ($_POST['pr']));
{
$pr = $_POST['pr'];
}
if (isset ($_POST['comm_sub']));
{
$comm_sub = $_POST['comm_sub'];
}

if (isset ($comm_sub))
{
if (isset ($author))  {trim($author); }
else  {$author = "";}

if (isset ($ltd_name))  {trim($ltd_name); }
else  {$ltd_name = "";}

if (isset ($text))  {trim($text); }
else  {$text = "";}


if (empty ($author) or empty ($ltd_name) or empty ($text))
{
exit ("<p>Please fill all fields. <a href='reviews.php'>Back to the form.</a></p>");
}

$author = stripslashes ($author);
$ltd_name = stripslashes ($ltd_name);
$text = stripslashes ($text);

$author = htmlspecialchars ($author);
$ltd_name = htmlspecialchars ($ltd_name);
$text = htmlspecialchars ($text);

$result = mysql_query ("SELECT sum FROM comments_settings",$db);
$myrow = mysql_fetch_array($result);

if ($pr == $myrow["sum"])
{
$date = date ("Y-m-d");

$result2 = mysql_query ("INSERT INTO comments (author,ltd_name,text,date) VALUES ('$author','$ltd_name','$text','$date')",$db);
$adress = "admin@ddiscounter.ie";
$subject = "New comment added";
$message = "New comment on DDiscounter.ie   
Comment added:".$author."\n    LTD name:".$ltd_name." \n    Date:".$date." \n    Comment text: ".$text." \n Link to the page: http://www.ddiscounter.ie/reviews.php";
mail ($adress,$subject,$message);

echo "<html><head> 
<meta http-equiv='Refresh' content='0; URL=reviews.php'>
</head></html>";
exit ();

}
else 
{
exit ("<p>Wrong summ entered, please try again.</p> <p><a href='reviews.php'>Back to the form.</a></p>");
}

}
?>