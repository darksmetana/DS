<form action="index.php?inc=multiple" method="POST">
	<input type="text" name="rows">
	<input type="text" name="colls">
	<input type="submit" name="ok" value="Применить">
</form>
<table border='1'>
<?php
	if (isset($_POST['ok'])) {
		for ($rows=1; $rows <= $_POST['rows']; $rows++) { 
			for ($colls=1; $colls <= $_POST['colls']; $colls++) { 
				echo "<td>" . ($rows*$colls) . "</td>";
			}
			if ($rows != $_POST['rows']) echo "<tr></tr>";
		}
	}
?>
</table>
