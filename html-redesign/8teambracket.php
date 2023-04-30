<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>8team</title>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="lines.css">
</head>
<body>
<div class="teambracket-8">
	<div class="headers">
		<div class="rd-1">{{{RD1|Ćwierćfinały}}}</div>
		<div class="rd-2">{{{RD2|Półfinały}}}</div>
		<div class="rd-3">{{{RD3|Finał}}}</div>
	</div>
	<?php
		$rounds = 3;
		$pairs = 4;
		$teams = $pairs*2;
		for ($rd=1; $rd<=$rounds; $rd++) {
			$t=1;
			if ($pairs <= 0) {
				break;
			}
			for ($p=1; $p<=$pairs; $p++) {
				include('pair.html');
				$t+=2;
			}
			// vertical lines
			if ($pairs > 1) {
				for ($p=2; $p<=$teams; $p++) {
					include('line.html');
				}
			}
			$pairs>>=1;
		}
	?>
</div>

</body>
</html>