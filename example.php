<?php
include_once("colors.inc.php");
$ex=new GetMostCommonColors();
$ex->image="test.jpg";
$colors=$ex->Get_Color();
$how_many=12;
$colors_key=array_keys($colors);
?>
<html>
<head>
</head>
<body>
<table border="1">
<tr><th colspan="3">test.jpg</th></tr>
<tr><td>Color</td><td>Count</td><td>Color value</td></tr>
<?php
for ($i = 0; $i <= $how_many; $i++)
{
	echo "<tr><td bgcolor=".$colors_key[$i]." width=16 height=16></td>&nbsp;<td>".$colors[$colors_key[$i]]."</td><td>$colors_key[$i]</td></tr>";
}
?>
<?php
$ex->image="test2.jpg";
$colors=$ex->Get_Color();
$how_many=12;
$colors_key=array_keys($colors);
?>
</table>
<table border="1">
<tr><th colspan="3">test2.jpg</th></tr>
<tr><td>Color</td><td>Count</td><td>Color value</td></tr>
<?php
for ($i = 0; $i <= $how_many; $i++)
{
	echo "<tr><td bgcolor=".$colors_key[$i]." width=16 height=16></td>&nbsp;<td>".$colors[$colors_key[$i]]."</td><td>$colors_key[$i]</td></tr>";
}
?>
</table>
</body>
</html>