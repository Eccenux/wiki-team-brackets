<?php
/**
	quarters+ in brackets.
*/
function tpl($part) {

	$head = "
{{8TeamBracket
| RD1= {{{RD4|Æwieræfina³y}}}
| RD2= {{{RD5|Pó³fina³y}}}
| RD3= {{{RD6|Fina³}}}";

	$txt = "";
	for ($rd = 1; $rd <= 3; $rd++) {
		$rdmax = pow(2, 4-$rd);
		$rdParam = $rd+3;
		$txt .= "\n";
		for ($row = 1; $row <= $rdmax; $row++) {
			//$rowNo = sprintf('%02d', $row);
			$rowNo = sprintf('%d', $row);
			$paramNo = sprintf('%02d', $part*$rdmax+$row);
			$txt .= "
| RD$rd-seed$rowNo={{{RD$rdParam-seed$paramNo|}}}
| RD$rd-team$rowNo={{{RD$rdParam-team$paramNo|}}}
| RD$rd-score$rowNo={{{RD$rdParam-score$paramNo|}}}";
		}
	}
	return $head . $txt . "\n}}";
}
echo tpl(0);