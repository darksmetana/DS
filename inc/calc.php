<form action="index.php?inc=calc" method="POST">
	<input type="submit" name="plus" value="+">
	<input type="submit" name="minus" value="-">
</form>
<form action="index.php?inc=calc" method="POST">
	<input type="text" name="number1">
	<select name="oper">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
		<option value="%">деление с остатком</option>
		<option value="**">корень</option>
	</select>
	<input type="text" name="number2" name="submit">
	<br>
	<?php
	error_reporting(E_ALL);
	if (isset($_POST['plus'])) {
	$inputs = "<input type=\"text\" name=\"number12\">
		<select name=\"oper2\">
			<option value=\"+\">+</option>
			<option value=\"-\">-</option>
			<option value=\"*\">*</option>
			<option value=\"/\">/</option>
			<option value=\"%\">деление с остатком</option>
			<option value=\"**\">корень</option>
		</select>
		<input type=\"text\" name=\"number22\"><br>
		<input type=\"text\" name=\"number13\">
		<select name=\"oper3\">
			<option value=\"+\">+</option>
			<option value=\"-\">-</option>
			<option value=\"*\">*</option>
			<option value=\"/\">/</option>
			<option value=\"%\">деление с остатком</option>
			<option value=\"**\">корень</option>
		</select>
		<input type=\"text\" name=\"number23\"><br>
		<input type=\"text\" name=\"number14\">
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
		setcookie("inputs", $inputs, time() + 3600, "/");
		if (isset($_COOKIE['inputs'])) {
			echo $_COOKIE['inputs'];
		}
	}
	if (isset($_POST['minus'])) {
		setcookie("inputs", "", time(), "/");
	}
	?>
	<input type="submit" value="=">
</form>
<?php
if (isset($_POST['number1'])) {
$num1 = $_POST["number1"];
}
if (isset($_POST['number2'])) {
$num2 = $_POST["number2"];
}
if (isset($_POST['oper'])) {
$oper	= $_POST["oper"];
} else {
	$oper = "";
}
$out = "";
if (isset($_POST['number12'])) {
$num12 = $_POST["number12"];
}
if (isset($_POST['number22'])) {
$num22 = $_POST["number22"];
}
if (!empty($_POST["oper2"])) {
$oper2	= $_POST["oper2"];
} else {
	$oper2 = "";
}
$out2 = "";
if (isset($_POST['number13'])) {
$num13 = $_POST["number13"];
}
if (isset($_POST['number23'])) {
$num23 = $_POST["number23"];
}
if (isset($_POST['oper3'])) {
$oper3	= $_POST["oper3"];
} else {
	$oper3 = "";
}
$out3 = "";
if (isset($_POST['number14'])) {
$num14 = $_POST["number14"];
}
if (isset($_POST['number24'])) {
$num24 = $_POST["number24"];
}
if (isset($_POST['oper4'])) {
$oper4	= $_POST["oper4"];
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
