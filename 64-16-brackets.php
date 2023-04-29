<?php
/**
	RD1-3 + quarters in brackets.
*/
function tpl($part) {

	$head = "
{{16TeamBracket
| RD1= {{{RD1|Runda 1}}}
| RD2= {{{RD2|Runda 2}}}
| RD3= {{{RD3|Runda 3}}}
| RD4= {{{RD4|Æwieræfina³y}}}";

	$txt = "";
	for ($rd = 1; $rd <= 4; $rd++) {
		$rdmax = pow(2, 5-$rd);
		$txt .= "\n";
		for ($row = 1; $row <= $rdmax; $row++) {
			$rowNo = sprintf('%02d', $row);
			$paramNo = sprintf('%02d', $part*$rdmax+$row);
			$txt .= "
| RD$rd-seed$rowNo={{{RD$rd-seed$paramNo|}}}
| RD$rd-team$rowNo={{{RD$rd-team$paramNo|}}}
| RD$rd-score$rowNo={{{RD$rd-score$paramNo|}}}";
		}
	}
	return $head . $txt . "\n}}";
}
echo tpl(0);
echo tpl(1);
echo tpl(2);
echo tpl(3);
