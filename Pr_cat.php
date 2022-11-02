<?php define( '_NO', 1 ); ?>
<? include ("block/bd.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Price catalogue" />
<meta name="description" content="DDiscounter - Home of the Dublin discounts and offers">
<title>Price catalogue</title>
<link href="CSS/cssDD.css" rel="stylesheet" type="text/css" /> <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<!--[if IE 7]>
<link rel="stylesheet" media="screen" type="text/css" title="StyleIE7" href="CSS/ie7.css" />
<![endif]-->
<meta name="robots" content="INDEX,FOLLOW"> 
<meta name="revisit-after" content="2 week"> 
<meta http-equiv="content-language" content="English"> 
<meta name="author" content="ddiscounter">  
<meta name="publisher" content="www.ddiscounter.ie">  
<meta name="made" content="admin@ddiscounter">  
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

$result2 = mysql_query("SELECT str FROM 1_20_postr_nav", $db);
$myrow2 = mysql_fetch_array($result2);
$num = $myrow2["str"];

@$page = $_GET['page'];

$result3 = mysql_query("SELECT COUNT(*) FROM a1_20cat");
$temp = mysql_fetch_array($result3);
$posts = $temp[0];

$total = (($posts - 1) / $num) + 1;
$total =  intval($total);

$page = intval($page);


if(empty($page) or $page < 0) $page = 1;
  if($page > $total) $page = $total;


$start = $page * $num - $num;


$result1 = mysql_query ("SELECT ltd_name,link,date_till,date_from,logo,definition,id_price FROM a1_20cat ORDER BY id_price LIMIT $start, $num",$db);
$myrow1 = mysql_fetch_array ($result1);


if ($page != 1) $pervpage = '<a href=price_1_20.php?id='.$id.'&page=1>To the first page</a> | <a href=price_1_20.php?id='.$id.'&page='. ($page - 1) .'>Next</a> | ';

if ($page != $total) $nextpage = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 1) .'>Next</a> | <a href=price_1_20.php?id='.$id.'&page=' .$total. '>To the last page</a>';


if($page - 5 > 0) $page5left = ' <a href=price_1_20.php?id='.$id.'&page='. ($page - 5) .'>'. ($page - 5) .'</a> | ';
if($page - 4 > 0) $page4left = ' <a href=price_1_20.php?id='.$id.'&page='. ($page - 4) .'>'. ($page - 4) .'</a> | ';
if($page - 3 > 0) $page3left = ' <a href=price_1_20.php?id='.$id.'&page='. ($page - 3) .'>'. ($page - 3) .'</a> | ';
if($page - 2 > 0) $page2left = ' <a href=price_1_20.php?id='.$id.'&page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = ' <a href=price_1_20.php?id='.$id.'&page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';

if($page + 5 <= $total) $page5right = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 5) .'>'. ($page + 5) .'</a>';
if($page + 4 <= $total) $page4right = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 4) .'>'. ($page + 4) .'</a>';
if($page + 3 <= $total) $page3right = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 3) .'>'. ($page + 3) .'</a>';
if($page + 2 <= $total) $page2right = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 1) .'>'. ($page + 1) .'</a>';



if ($total > 1)
{
Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class=\"postr_nav\">";
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
echo "</div>";
}





?>


<?





do {
printf ("<p class='table_cat'> 
<a class='p1'>Price range: </a>      <strong>%s</strong>     
<a class='p1'>Company: </a>          <strong>%s</strong> 
<a class='p1'>Definition: </a>       <strong>%s</strong> 
<a class='p1'>Company logo </a>      <strong>%s</strong>          


<br>
<br>
<a class='p1'>To the </a>       <strong>%s</strong>  
<a class='p1'>Dates from:</a>       <strong style='color:#FFC488'>%s</strong>
<a class='p1'>till:</a>       <strong style='color:#FFC488'>%s</strong>

</p>",
$myrow1["id_price"],$myrow1["ltd_name"],$myrow1["definition"],$myrow1["logo"],$myrow1["link"],$myrow1["date_from"],$myrow1["date_till"]);
}

while ($myrow1 = mysql_fetch_array ($result1));



if ($page != 1) $pervpage = '<a href=price_1_20.php?id='.$id.'&page=1>To the first page</a> | <a href=price_1_20.php?id='.$id.'&page='. ($page - 1) .'>Next</a> | ';

if ($page != $total) $nextpage = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 1) .'>Next</a> | <a href=price_1_20.php?id='.$id.'&page=' .$total. '>To the last page</a>';


if($page - 5 > 0) $page5left = ' <a href=price_1_20.php?id='.$id.'&page='. ($page - 5) .'>'. ($page - 5) .'</a> | ';
if($page - 4 > 0) $page4left = ' <a href=price_1_20.php?id='.$id.'&page='. ($page - 4) .'>'. ($page - 4) .'</a> | ';
if($page - 3 > 0) $page3left = ' <a href=price_1_20.php?id='.$id.'&page='. ($page - 3) .'>'. ($page - 3) .'</a> | ';
if($page - 2 > 0) $page2left = ' <a href=price_1_20.php?id='.$id.'&page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = ' <a href=price_1_20.php?id='.$id.'&page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';

if($page + 5 <= $total) $page5right = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 5) .'>'. ($page + 5) .'</a>';
if($page + 4 <= $total) $page4right = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 4) .'>'. ($page + 4) .'</a>';
if($page + 3 <= $total) $page3right = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 3) .'>'. ($page + 3) .'</a>';
if($page + 2 <= $total) $page2right = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href=price_1_20.php?id='.$id.'&page='. ($page + 1) .'>'. ($page + 1) .'</a>';



if ($total > 1)
{
Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class=\"postr_nav\">";
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
echo "</div>";
}
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
