<?php defined('_NO') or die("Access denied!"); ?>

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<td width="275px" valign="top">
<br>
<div id="rightmenuhead"></div> <div id="marquee"align="center"><marquee width="170px" height="14" direction="left" scrollamount="6" bgcolor="#FFFFFF" style="color:#000; font-family:Verdana, Geneva, sans-serif; font-size:14px; border:0px" align="middle">Dublin Discounter - Home of the Dublin discounts and offers.</marquee></div>
<br>
<div id="rightmenubody"><div id="rightmenubodytext"><table class="right_menu" width="100%" height="250" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="20" align="left" valign="middle"><a href="index.php">Home</a></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="middle"><a href="Def_cat.php">Definition catalogue</a></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="middle"><a href="A_Z_cat.php">A - Z catalogue</a></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="middle"><a href="advertising.php">Advertising with Us</a></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="middle"><a href="join_us.php">Join Us</a></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="middle"><a href="contact_us.php">Contact Us</a></td>
              </tr>
</table></div></div>
<div id="searchimg"><table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
<div id="searchform"><form action="http://www.ddiscounter.ie/searchresults.php" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-6372439663214831:tguyzggd7e0" />
    <input type="hidden" name="cof" value="FORID:9" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="17" />
    <input type="submit" name="sa" value="Go" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.ie/cse/brand?form=cse-search-box&amp;lang=en"></script> 
</div>
<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=en"></script>
</td>
  </tr>
</table></div>


</div>
<div align="right" id="bannerright">
  <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="230" height="167">
    <param name="movie" value="banners/banner2.swf">
    <param name="quality" value="high">
    <param name="wmode" value="opaque">
    <param name="swfversion" value="6.0.65.0">
    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
    <param name="expressinstall" value="Scripts/expressInstall.swf">
    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="banners/banner2.swf" width="230" height="167">
      <!--<![endif]-->
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="swfversion" value="6.0.65.0">
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
      <div>
        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
      </div>
      <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
  </object>
</div>




<div id="mapimg">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
<div id="maphead"><p class="stats_name"> <strong> Dublin Map </strong> </p></div>
   <div id="mapbody"> <td><a href="map.php"><div id="map"></div></a></td></div>
  </tr>
</table>
</div>
<div id="recommend"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="recommend">
  <tr>
    <td><div id="recommendhead"><strong><p class="stats_name">Recommend Us!</p></strong></div></td>
  </tr>
  <tr>
    <td>
<div id="recommendbody">
<form method="post" action="recommend/mail.php" onSubmit="return checkmail()" name="entermail">
<p>Friends Name:<br>
<input type="text" name="name" value="" size=20>
</p>						   
<p>Friends Email:<br>
<input  type="text"  name="email" value="" size=20>
</p> 
<p>Your Name:<br>
<input type="text" name="yourname" value="" size=20>
</p>
<div id="recommendbutton"><p>           
<input type="submit"  name="submit" value="Recommend">
</p></div>
</form>
</div>
</td>
  </tr>
</table></div>
<div id="statsimg"><table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div id="statshead"><strong class="stats_name">Stats</strong></div>
<div id="statsbody">
<?php 
include ("block/bd.php");
$result = mysql_query ("SELECT COUNT(*) FROM comments",$db);
$sum = mysql_fetch_array ($result);
echo "<p class='stats'>Reviews in the base: $sum[0] </p>";
$result1 = mysql_query ("SELECT COUNT(*) FROM catalogue",$db);
$sum1 = mysql_fetch_array ($result1);
echo "<p class='stats'>Companies in the base: $sum1[0] </p>";
?></div>  


  
</td>
  </tr>
</table></div>
<div align="right" id="bannerright">
  <object id="FlashID1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="230" height="167">
    <param name="movie" value="banners/banner2.swf">
    <param name="quality" value="high">
    <param name="wmode" value="opaque">
    <param name="swfversion" value="6.0.65.0">
    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
    <param name="expressinstall" value="Scripts/expressInstall.swf">
    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="banners/banner2.swf" width="230" height="167">
      <!--<![endif]-->
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="swfversion" value="6.0.65.0">
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
      <div>
        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
      </div>
      <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
  </object>
</div>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID2");
//-->
</script>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID1");
//-->
</script>
