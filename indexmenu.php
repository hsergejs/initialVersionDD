<?php define( '_NO', 1 ); ?>
<?php include ("block/bd.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>








<?php 

$queryget = mysql_query ("SELECT definition FROM indexcat ORDER BY id ASC") or die("Error 3");
$myrowpr = mysql_fetch_array ($queryget);



$querysum = mysql_query ("SELECT COUNT(*) FROM indexcat");
$sum = mysql_fetch_array ($querysum);



//message if no posts inside the DB
$querygetnumrow = mysql_num_rows ($queryget); 
if ($querygetnumrow ==0)
echo "<p>Nothing in catalogue</p>";

while ($row = mysql_fetch_array ($queryget))
{

$definition = $row['definition'];

echo "";
}

?>


<table width="800px" border="1" align="center">
  <tr align="center">
    <td><a href="#">Entertainment(<?php echo $sum[0]; ?>)</a></td>
    <td>Food Stores</td>
    <td>Health&Beauty </td>
    <td>Hotels,B&B </td>
  </tr>
  <tr align="center">
    <td>Insurance</td>
    <td>PC</td>
    <td>Restaurants</td>
    <td>Cafe</td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>


</body>
</html>