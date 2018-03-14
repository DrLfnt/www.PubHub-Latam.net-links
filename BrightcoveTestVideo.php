<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$videoidErr = $playeridErr = $playerkeyErr = "";
$videoid = $playerid = $playerkey = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["videoid"])) {
     $videoidErr = "Video ID is required";
   } else {
     $videoid = test_input($_POST["videoid"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[0-9 ]*$/",$videoid)) {
       $videoidErr = "Only numbers please"; 
     }
   }
   
   if (empty($_POST["playerid"])) {
     $playeridErr = "Player ID is required";
   } else {
     $playerid = test_input($_POST["playerid"]);
     // check if e-mail address is well-formed
     if (!preg_match("/^[0-9 ]*$/",$playerid)) {
       $playeridErr = "Only numbers please"; 
     }
   }
         
   if (empty($_POST["playerkey"])) {
     $playerkeyErr = "Player KEY is required";
   } 

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Validation Video</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Video ID: <input type="text" name="videoid" value="<?php echo $videoid;?>">
   <span class="error">* <?php echo $videoidErr;?></span>
   <br><br>
   Player ID: <input type="text" name="playerid" value="<?php echo $playerid;?>">
   <span class="error">* <?php echo $playeridErr;?></span>
   <br><br>
   Player Key: <input type="text" name="playerkey" value="<?php echo $playerkey;?>">
   <span class="error"><?php echo $playerkeyErr;?></span>
   <br>
   <input type="submit" name="submit" value="Validate">
</form>

<h3>
  Argentina
</h3>
<p>
  Player Id: 4103581857001<br>
  Player Key: AQ~~,AAADuYB69Zk~,EWYUf4LPGDrii1acmzTAL8lDgz9biI4p
</p>

<h3>
Brasil
</h3>
<p>
Player Id: 4103581881001<br>
Player Key: AQ~~,AAADtnYCtKE~,lConzzgj0IeiyVNbC8bTSsfHgxpVjc9K
</p>

<h3>
Centro América
</h3>
<p>
Player Id 4107178460001<br>
Player Key AQ~~,AAADuYB7EPE~,yiwQ85yOY4Z2NnNW5rfmc8jUSyfmpirl
</p>

<h3>
Chile
</h3>
<p>
Player Id: 4108227302001<br>
Player Key: AQ~~,AAADuYB6uwE~,Ot0DDoPyPtKjLRGHS54wKTOY41o7v1aP
</p>

<h3>
Colombia
</h3>
<p>
Player Id: 4105236584001<br>
Player Key: AQ~~,AAADuYB7AVE~,3z_nVAW92ml7QDfkQdLaVtziZpbznSXa
</p>

<h3>
México
</h3>
<p>
Player Id: 4107332281001<br>
Player Key: Q~~,AAADuYB6zok~,delY0Atcgiowf5fe4WuYUMMg-gwwiz5
</p>

<h3>
Perú
</h3>
<p>
Player Id: 4107767677001<br>
Player Key: AQ~~,AAADuYB6_Wk~,0M3T8_xG3MI3kyRB0OKHgSAcpeGh2BRO
</p>

<h3>
Puerto Rico
</h3>
<p>
Player Id: 4107332281001<br>
Player Key: Q~~,AAADuYB6zok~,delY0Atcgiowf5fe4WuYUMMg-gwwiz5
</p>

<h3>
Venezuela
</h3>
<p>
Player Id: 4107178485001<br>
Player Key: AQ~~%2CAAADuYB7CSE~%2CpdJeUiLwVUXChSC2UEJtlbUllJ3LBf1C
</p>



<?php
echo "<h2>Your Video:</h2>";
?>

  <!-- Start of Brightcove Player -->
<div style="display:none">
</div>
<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
<div>Video Example</div>
<object id="myExperience<?php echo $videoid;?>" class="BrightcoveExperience"><!-- Aca va el Id VIDEO -->
  <param name="bgcolor" value="#FFFFFF" />
    <param name="width" value="500" />
  <param name="height" value="305" />
  <param name="playerID" value="<?php echo $playerid;?>" /> <!-- Aca va el player Id -->
  <param name="playerKey" value="<?php echo $playerkey;?>" />
  <param name="isVid" value="true" />
  <param name="isUI" value="true" />
  <param name="dynamicStreaming" value="true" />  
  <param name="@videoPlayer" value="<?php echo $videoid;?>" /> <!-- Aca va el Id VIDEO -->
</object>
<script type="text/javascript">brightcove.createExperiences();</script>
<!-- End of Brightcove Player -->
<!-- Start of Brightcove Player -->
  
</body>
</html>