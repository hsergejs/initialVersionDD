<?php define( '_NO', 1 ); ?>
<? include ("block/bd.php");
$result = mysql_query ("SELECT * FROM ltd_page WHERE sh_name='Toscana_restaurant'",$db);
if (!$result)
{
echo "<p>Sorry, but the request for database haven't passed.
<br>Please report to administration by admin@ddiscounter.ie
<br> <strong> Mistake Code: </strong> </p>";
exit (mysql_error());
}
if (mysql_num_rows($result) > 0)
{
$myrow = mysql_fetch_array ($result);
}
else {
echo "<p>The information from database couldn't be reached, no information inside. Please report to administration by admin@ddiscounter.ie</p>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $myrow["meta_k"]?>;" />
<meta name="description" content="<?php echo $myrow["meta_d"]?>;" />
<title><?php echo $myrow["title"]?></title>
<link href="CSS/cssDD.css" rel="stylesheet" type="text/css" /> <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<!--[if IE 7]>
<link rel="stylesheet" media="screen" type="text/css" title="StyleIE7" href="CSS/ie7.css" />
<![endif]-->
<meta name="robots" content="INDEX,FOLLOW"> 
<meta name="revisit-after" content="2 week"> 
<meta http-equiv="content-language" content="English"> 
<meta name="author" content="ddiscounter">  
<meta name="publisher" content="www.ddiscounter.ie">  
<meta name="made" content="admin@ddiscounter.ie">  
<meta name="copyright" content="www.ddiscounter.ie">  
<meta name="audience" content="All">  
<meta name="page-topic" content="ddiscounter – Home of the Dublin discounts and offers"> 
</head>
<body>
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" height="657" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php include "block/header.php";?>       
    </table>
    <table  width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
<?php include "block/menu.php";  ?>
  </tr>
</table>
</td>
  </tr>
</table>
      <table width="100%" border="0" cellspacing="15" cellpadding="15">
        <tr>
 <td valign="top">
<? 
echo $myrow["text"];
?>

<?php 
echo "<p class='commhead'>Rating\Comments\Reviews</p>"; 

//RATING SCRIPT
$queryr = mysql_query ("SELECT * FROM rating WHERE sh_name='Toscana_restaurant'");
$rowr = mysql_fetch_array($queryr);

$sh_name = $rowr['sh_name'];
$rating = $rowr['rating'];
echo "
<table align='center' width='100%' border='0'>
  <tr>
    <td align='left' width='250px'><form action='' method='POST'>
<p>Choose rating value: 
<select name='rating' />
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>

<input type='submit' name='submit' value='Rate Me' />
</form>
</td>
    <td align='left'>"; echo "<p>Current company rating: "; 
printf ("<strong class='p3'>%0.1f</strong></p>",$rating);
echo "</td>
  </tr>
</table></p><hr>";
//END RATING SCRIPT
//COMMENT SCRIPT
$queryget = mysql_query ("SELECT * FROM comments WHERE sh_name='Toscana_restaurant' ORDER BY id ASC") or die("Error 3");
$querypr = mysql_query ("SELECT sum FROM comments_settings") or die ("Error 4");
$myrowpr = mysql_fetch_array ($querypr);

//message if no posts inside the DB
$querygetnumrow = mysql_num_rows ($queryget); 
if ($querygetnumrow ==0)
echo "<p>Presently there are no comments for this company.</p>";

while ($row = mysql_fetch_array ($queryget))
{

$id = $row['id'];
$name = $row['name'];
$email = $row['email'];
$message = $row['message'];
$date = $row['date'];
$time = $row['time'];
$ip = $row['ip'];

/* color by id
if ($id%2)
	$bgcolor = "#E6E6E6";
else 
	$bgcolor = "#FFFFFF";
*/

//process data echo
echo "
<table width='600px' bgcolor='$bgcolor' cellspacing='0' cellpadding='0' class='commtable'>
  <tr style='padding-bottom:0;'>
    <td width='100px'><p class='p1'>Posted by:</p></td>
    <td width='200px' align='left'><p class='p3'>$name</p></td>
    <td width='60px'><p class='p1'>Date:</p></td>
    <td width='200px' align='left'><p class='p3'>$date</td>
    <td width='60px'><p class='p1'>Time:</p></td>
    <td width='200px' align='left'><p class='p3'>$time</p></td>
  </tr>
  <tr>
    <td colspan='6' class='comm2l'>".nl2br(strip_tags($message))."</td>
  </tr>
</table>
";
}

if ($_POST['submit'])
{

$name = $_POST['name'];
$message = $_POST['message'];
$date = date ("Y-m-d");
$time = date ("H:i:s");
$pr = $_POST['sum'];
$sh_name = $_POST['sh_name'];
$ip = $_POST['ip'];

if ($_POST['tress'])

{ 
die ("No trespassers allowed!");
}
else 

$sh_name='Toscana_restaurant';
$ip = ($_SERVER['HTTP_X_FORWARDED_FOR'] == "" ? $_SERVER['REMOTE_ADDR'] : $_SERVER['HTTP_X_FORWARDED_FOR']); 

if ($name&&$message&&$pr)
{
	
if ($pr == $myrowpr['sum'])	
{	
	
$querypost = mysql_query("INSERT INTO comments VALUES (NULL,'$name','$message','$date','$time','$sh_name','$ip')");
echo ("<p class='commwarn'>Please wait...</p>  <meta http-equiv='refresh' content='0'");

$adress = "admin@ddiscounter.ie";
$subject = "New comment added\n";
$message = "New comment on DDiscounter.ie\n
Comment added by:".$name."\n    LTD name:".$sh_name."\n    Date:".$date."\n\n    Comment text: ".$message."\n 
Link to the page: http://ddiscounter.ie/".$sh_name.".php";
mail ($adress,$subject,$message);

}
else
	echo "<p class='commwarn'>Incorect security code entered!</p>";

}
else 
	echo "<p class='commwarn'>Please fill in ALL fields!</p>";

}

echo "
<div class='commtable1'>
<form action='' method='POST'>
<div class='trform'><input type='text' name='tress' size='10'/></div>
<table width='100%' class='joinF'>
	<tr>
		<td>
Your name:
		</td>
		<td>
<input type='text' name='name' maxlength='40'>
		</td>
	</tr>
	<tr>
		<td valign='top'>
Your comment:
		</td>
		<td>
<textarea cols='40' rows='10' name='message'></textarea>
		</td>
	</tr>
	<tr>
		<td>"; 
$queryprimg = mysql_query ("SELECT img FROM comments_settings");
$myrow = mysql_fetch_array ($queryprimg);
echo $myrow['img'];
echo "
		</td>
		<td>
<input type='text' name='sum' size='5' maxlength='5'>
		</td>
	</tr>
	<tr>
		<td>
		</td>
		<td>
<input type='submit' name='submit' value='Post your comment'>
		</td>
	</tr>
</table>
</form>
</div>
";
//END COMMENT SCRIPT
?>
<?php   
//RATING SCRIPT
//process the submission
if ($_POST['submit'])
		   {
	//get data sended id
	//valuable of new rating
	$rating_post = $_POST['rating'];
	
if ($rating_post <= 5 && $rating_post !=0 )

{
	//old rating
	$get = mysql_query ("SELECT * FROM rating WHERE sh_name='$sh_name'");
	$get = mysql_fetch_assoc($get);
	$get = $get['rating'];
	//new rating
	if ($get ==0)
	{
		$newrating = $get + $rating_post;

	}
	else

		$newrating = ($get + $rating_post)/2;
	
	 $update = mysql_query ("UPDATE rating SET rating='$newrating' WHERE sh_name='$sh_name'");
 echo " <meta http-equiv='refresh' content='0'>";
}
else 
	die ("Access denied!");

		   }
		   //END RATING SCRIPT
?>

<?php  include "block/rightblock.php";    ?>
                 
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
<?php include "block/footer.php";?>
        </tr>
      </table>
      </td>
  </tr>
</table>
</body>
</html>