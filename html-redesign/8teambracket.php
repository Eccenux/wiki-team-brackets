<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>8team</title>
</head>
<body>
<div class="teambracket-8">
	<div class="headers">
		<div>{{{RD1|Ćwierćfinały}}}</div>
		<div>{{{RD2|Półfinały}}}</div>
		<div>{{{RD3|Finał}}}</div>
	</div>
	<?php
		$rounds = 3;
		$rd=1;
		$pairs = 4;
		$t=1;
		for ($p=1; $p<=$pairs; $p++) {
			include('pair.html');
			$t+=2;
		}
	?>
</div>

</body>
</html>