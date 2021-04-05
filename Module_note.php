<!DOCTYPE html>
<html>
<head>
	<title>Sticky Note</title>
</head>
<body>
	<center>
		<table>
			<tr>
				Ghi note của bạn vào đây
			</tr>
			<td>
				<?php 
				$note= fopen("ghichu1.inp", "a+");
				fclose($note);
				echo "$note";
				?>
			</td>
		</table>
	</center>
</body>
</html>