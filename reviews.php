<?php define( '_NO', 1 ); ?>
<?php
include ("block/bd.php");
$result = mysql_query ("SELECT title,meta_d,meta_k,text FROM common_text WHERE page='reviews'",$db);
if (!$result)
{
echo "<p><br>Sorry, but the request for database haven't passed. Please report to administration by admin@ddiscounter.ie.
<br> <strong> Mistake Code: </strong> </p>";
exit (mysql_error());
}
if (mysql_num_rows($result) > 0)
{
$myrow = mysql_fetch_array ($result);
}
else {
echo "<p><br>The information from database couldn't be reached, no information inside.<br>Please report to administration by admin@ddiscounter.ie.</p>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $myrow["meta_k"]?>; " />
<meta name="description" content=" <?php echo $myrow["meta_d"]?>; " />
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
 <td height="530" valign="top"><?php echo $myrow["text"];
$result5 = mysql_query("SELECT str FROM postr_nav", $db);
$myrow5 = mysql_fetch_array($result5);
$num = $myrow5["str"];
@$page = $_GET['page'];
$result4 = mysql_query("SELECT COUNT(*) FROM comments");
$temp = mysql_fetch_array($result4);
$posts = $temp[0];
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
$page = intval($page);
if(empty($page) or $page < 0) $page = 1;
  if($page > $total) $page = $total;
$start = $page * $num - $num;
if ($page != 1) $pervpage = '<a href=reviews.php?id='.$id.'&page=1>To the first page</a> | <a href=reviews.php?id='.$id.'&page='. ($page - 1) .'>Next</a> | ';
if ($page != $total) $nextpage = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 1) .'>Next</a> | <a href=reviews.php?id='.$id.'&page=' .$total. '>To the last page</a>';
if($page - 5 > 0) $page5left = ' <a href=reviews.php?id='.$id.'&page='. ($page - 5) .'>'. ($page - 5) .'</a> | ';
if($page - 4 > 0) $page4left = ' <a href=reviews.php?id='.$id.'&page='. ($page - 4) .'>'. ($page - 4) .'</a> | ';
if($page - 3 > 0) $page3left = ' <a href=reviews.php?id='.$id.'&page='. ($page - 3) .'>'. ($page - 3) .'</a> | ';
if($page - 2 > 0) $page2left = ' <a href=reviews.php?id='.$id.'&page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = '<a href=reviews.php?id='.$id.'&page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';

if($page + 5 <= $total) $page5right = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 5) .'>'. ($page + 5) .'</a>';
if($page + 4 <= $total) $page4right = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 4) .'>'. ($page + 4) .'</a>';
if($page + 3 <= $total) $page3right = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 3) .'>'. ($page + 3) .'</a>';
if($page + 2 <= $total) $page2right = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 1) .'>'. ($page + 1) .'</a>';
if ($total > 1)
{
Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class=\"postr_nav\">";
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
echo "</div>";
}
 ?>
<br>
<br>
<?
$result1 = mysql_query ("SELECT * FROM comments ORDER BY date LIMIT $start, $num",$db);
$myrow1 = mysql_fetch_array ($result1);
do {
printf ("<p class='table_cat'>
<a class='p1'>Added by:</a>       <strong class='p3'>%s</strong>          
<a class='p1'>Review for:</a>  <strong class='p3'>%s</strong>          
<a class='p1'>Date:</a>  <strong class='p3'>%s</strong>      <br><br>
<a class='p1'>Text:</a> %s</p>",
$myrow1["author"],$myrow1["ltd_name"],$myrow1["date"],$myrow1["text"] );
}
while ($myrow1 = mysql_fetch_array ($result1)); ?>
<?
if ($page != 1) $pervpage = '<a href=reviews.php?id='.$id.'&page=1>To the first page</a> | <a href=reviews.php?id='.$id.'&page='. ($page - 1) .'>Next</a> | ';
if ($page != $total) $nextpage = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 1) .'>Next</a> | <a href=reviews.php?id='.$id.'&page=' .$total. '>To the last page</a>';
if($page - 5 > 0) $page5left = ' <a href=reviews.php?id='.$id.'&page='. ($page - 5) .'>'. ($page - 5) .'</a> | ';
if($page - 4 > 0) $page4left = ' <a href=reviews.php?id='.$id.'&page='. ($page - 4) .'>'. ($page - 4) .'</a> | ';
if($page - 3 > 0) $page3left = ' <a href=reviews.php?id='.$id.'&page='. ($page - 3) .'>'. ($page - 3) .'</a> | ';
if($page - 2 > 0) $page2left = ' <a href=reviews.php?id='.$id.'&page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = '<a href=reviews.php?id='.$id.'&page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';

if($page + 5 <= $total) $page5right = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 5) .'>'. ($page + 5) .'</a>';
if($page + 4 <= $total) $page4right = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 4) .'>'. ($page + 4) .'</a>';
if($page + 3 <= $total) $page3right = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 3) .'>'. ($page + 3) .'</a>';
if($page + 2 <= $total) $page2right = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href=reviews.php?id='.$id.'&page='. ($page + 1) .'>'. ($page + 1) .'</a>';
if ($total > 1)
{
Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class=\"postr_nav\">";
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
echo "</div>";
}
?>
<?
$result2 = mysql_query ("SELECT img FROM comments_settings",$db);
$myrow2 = mysql_fetch_array ($result2);
?>
<form action="comment.php" method="post" name="comm_form">
<p class="p1"><label>Name:  </label>
<input name="author" type="text" size="29" maxlength="30"></p>
<p class="p1"><label>Review for:  </label>
<input name="ltd_name" type="text" size="23" maxlength="30"></p>
<p class="p1"><label>Add your comment here:  <br> <textarea name="text" cols="40" rows="15"></textarea></label></p>
<a class="p1">Enter security code: </a>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="9%" valign="middle"><p><img src="<?php echo $myrow2["img"];  ?>" width="70" height="50"></p></td>
    <td valign="middle"><p><input name="pr" type="text" size="5" maxlength="5"></p></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><p><input name="comm_sub" type="submit" value=" Post your review to the site "></p></td>
  </tr>
</table>
</form>
<?php 
$result5 = mysql_query ("SELECT COUNT(*) FROM comments",$db);
$sum = mysql_fetch_array ($result5);
echo "<p align='right' class='stats'>Reviews in the base: $sum[0] </p>";
?>    
 </td>
<?php  include "block/rightblock.php";    ?>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
<?php include "block/footer.php";?>
        </tr>
      </table>
  </tr>
</table>
</body>
</html>