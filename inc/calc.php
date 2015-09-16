<?php
$rows = 1;
if (isset($_COOKIE['znak'])) {
    $rows = $_COOKIE['znak'];
} else {
    setcookie('znak', $rows);
}

if (!empty($_POST)) {
    if (isset($_POST['znak'])) {
        $znak = $_POST['znak'];
        if ($znak == '+') {
            $rows++;
        } elseif ($znak == '-' && $rows > 1) {
            $rows--;
        }
        setcookie('znak', $rows);
    }
}
?>

<form name="plus" action="index.php?inc=calc" method="post">
    <input type="hidden" name="znak" value="+">
    <input type="submit" value="+">
</form>
<form name="minus" action="index.php?inc=calc" method="post">
    <input type="hidden" name="znak" value="-">
    <input type="submit" value="-">
</form>
<form name="main" action="index.php?inc=calc" method="post">
<?php
    for($i = 1; $i <= $rows; $i++) {
?>
        <input name="num1" value="">
        <select name="operation">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
					<option value="%">деление с остатком</option>
					<option value="**">корень</option>
				</select>
        <input name="num2" value=""><br />
<?php
    }
?>
    <br />
    <input type="submit" value="Send" name="send">
</form>
<?php 
	if (isset($_POST['num1'])) {
		$num1 = $_POST["num1"];
	}
	if (isset($_POST['num2'])) {
		$num2 = $_POST["num2"];
	}
	if (isset($_POST['operation'])) {
		$oper	= $_POST["operation"];
	} else {
		$oper = "";
	}
	$res = "";

	switch($oper){
		case '+': $res .= $num1 + $num2; break;
		case '-': $res .= $num1 - $num2; break;
		case '*': $res .= $num1 * $num2; break;
		case '/':
		if($num2 == 0)
		$res = 'Деление на ноль запрещено!';
		else
		$res .= $num1 / $num2;
		break;
		case '%': $res .= $num1 % $num2; break;
		case '**': $res .= pow($num1, $num2); break;
	};
	if (isset($_POST['send'])) {
		echo $res;
	}
	
?>
