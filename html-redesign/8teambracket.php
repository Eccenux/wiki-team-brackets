<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>8team</title>
	<link rel="stylesheet" href="style.css">
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
		$pairs = 4;
		for ($rd=1; $rd<=$rounds; $rd++) {
			$t=1;
			if ($pairs <= 0) {
				break;
			}
			for ($p=1; $p<=$pairs; $p++) {
				include('pair.html');
				$t+=2;
			}
			$pairs>>=1;
		}
	?>
</div>

</body>
</html>