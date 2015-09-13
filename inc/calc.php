<form action="index.php?inc=calc" method="GET">
	<input type="submit" name="plus" value="+">
	<input type="submit" name="minus" value="-">
</form>
<form action="index.php?inc=calc" method="GET">
	<input type="text" name="number1">
	<select name="oper">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
		<option value="%">деление с остатком</option>
		<option value="**">корень</option>
	</select>
	<input type="text" name="number2">
	<br>
	<?php
	// error_reporting(0);
	if (isset($_GET['plus'])) {
		$p = $_GET['plus'];
	} else {
		$p = "";
	}
	if (isset($_GET['minus'])) {
		$m = $_GET['minus'];
	} else {
		$m = "";
	}
	if ($_GET['plus']) {
	echo "<input type=\"text\" name=\"number12\">
		<select name=\"oper2\">
			<option value=\"+\">+</option>
			<option value=\"-\">-</option>
			<option value=\"*\">*</option>
			<option value=\"/\">/</option>
			<option value=\"%\">деление с остатком</option>
			<option value=\"**\">корень</option>
		</select>
		<input type=\"text\" name=\"number22\"><br>"
	.
	"<input type=\"text\" name=\"number13\">
		<select name=\"oper3\">
			<option value=\"+\">+</option>
			<option value=\"-\">-</option>
			<option value=\"*\">*</option>
			<option value=\"/\">/</option>
			<option value=\"%\">деление с остатком</option>
			<option value=\"**\">корень</option>
		</select>
		<input type=\"text\" name=\"number23\"><br>"
	.
	"<input type=\"text\" name=\"number14\">
		<select name=\"oper4\">
			<option value=\"+\">+</option>
			<option value=\"-\">-</option>
			<option value=\"*\">*</option>
			<option value=\"/\">/</option>
			<option value=\"%\">деление с остатком</option>
			<option value=\"**\">корень</option>
		</select>
		<input type=\"text\" name=\"number24\">"
		;
	} 
	?>
	<input type="submit" value="=">
</form>
<?php
if (isset($_GET['number1'])) {
$num1 = $_GET["number1"];
}
if (isset($_GET['number2'])) {
$num2 = $_GET["number2"];
}
if (isset($_GET['oper'])) {
$oper	= $_GET["oper"];
} else {
	$oper = "";
}
$out = "";
if (isset($_GET['number12'])) {
$num12 = $_GET["number12"];
}
if (isset($_GET['number22'])) {
$num22 = $_GET["number22"];
}
if (!empty($_GET["oper2"])) {
$oper2	= $_GET["oper2"];
} else {
	$oper2 = "";
}
$out2 = "";
if (isset($_GET['number13'])) {
$num13 = $_GET["number13"];
}
if (isset($_GET['number23'])) {
$num23 = $_GET["number23"];
}
if (isset($_GET['oper3'])) {
$oper3	= $_GET["oper3"];
} else {
	$oper3 = "";
}
$out3 = "";
if (isset($_GET['number14'])) {
$num14 = $_GET["number14"];
}
if (isset($_GET['number24'])) {
$num24 = $_GET["number24"];
}
if (isset($_GET['oper4'])) {
$oper4	= $_GET["oper4"];
} else {
	$oper4 = "";
}
$out4 = "";

switch($oper){
		case '+': $out .= $num1 + $num2; break;
		case '-': $out .= $num1 - $num2; break;
		case '*': $out .= $num1 * $num2; break;
		case '/':
		if($num2 == 0)
		$out = 'Деление на ноль запрещено!';
		else
		$out .= $num1 / $num2;
		break;
		case '%': $out .= $num1 % $num2; break;
		case '**': $out .= $num1 ** $num2; break;
	};
	switch($oper2){
		case '+': $out2 .= $num12 + $num22; break;
		case '-': $out2 .= $num12 - $num22; break;
		case '*': $out2 .= $num12 * $num22; break;
		case '/':
		if($num22 == 0)
		$out2 = 'Деление на ноль запрещено!';
		else
		$out2 .= $num12 / $num22;
		break;
		case '%': $out2 .= $num12 % $num22; break;
		case '**': $out2 .= $num12 ** $num22; break;
	};
	switch($oper3){
		case '+': $out3 .= $num13 + $num23; break;
		case '-': $out3 .= $num13 - $num23; break;
		case '*': $out3 .= $num13 * $num23; break;
		case '/':
		if($num23 == 0)
		$out3 = 'Деление на ноль запрещено!';
		else
		$out3 .= $num13 / $num23;
		break;
		case '%': $out3 .= $num13 % $num23; break;
		case '**': $out3 .= $num13 ** $num23; break;
	};
	switch($oper4){
		case '+': $out4 .= $num14 + $num24; break;
		case '-': $out4 .= $num14 - $num24; break;
		case '*': $out4 .= $num14 * $num24; break;
		case '/':
		if($num24 == 0)
		$out4 = 'Деление на ноль запрещено!';
		else
		$out4 .= $num14 / $num24;
		break;
		case '%': $out4 .= $num14 % $num24; break;
		case '**': $out4 .= $num14 ** $num24; break;
	};
echo $out + $out2 + $out3 + $out4;
?>
