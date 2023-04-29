<?php
/**
	RD1-3 in brackets.
*/
function tpl($part) {

return "
{{8TeamBracket
| RD1= {{{RD1|Runda 1}}}
| RD2= {{{RD2|Runda 2}}}
| RD3= {{{RD3|Runda 3}}}

| RD1-seed1={{{RD1-seed".($part*8+1)."|}}}
| RD1-team1={{{RD1-team".($part*8+1)."|}}}
| RD1-score1={{{RD1-score".($part*8+1)."|}}}
| RD1-seed2={{{RD1-seed".($part*8+2)."|}}}
| RD1-team2={{{RD1-team".($part*8+2)."|}}}
| RD1-score2={{{RD1-score".($part*8+2)."|}}}

| RD1-seed3={{{RD1-seed".($part*8+3)."|}}}
| RD1-team3={{{RD1-team".($part*8+3)."|}}}
| RD1-score3={{{RD1-score".($part*8+3)."|}}}
| RD1-seed4={{{RD1-seed".($part*8+4)."|}}}
| RD1-team4={{{RD1-team".($part*8+4)."|}}}
| RD1-score4={{{RD1-score".($part*8+4)."|}}}

| RD1-seed5={{{RD1-seed".($part*8+5)."|}}}
| RD1-team5={{{RD1-team".($part*8+5)."|}}}
| RD1-score5={{{RD1-score".($part*8+5)."|}}}
| RD1-seed6={{{RD1-seed".($part*8+6)."|}}}
| RD1-team6={{{RD1-team".($part*8+6)."|}}}
| RD1-score6={{{RD1-score".($part*8+6)."|}}}

| RD1-seed7={{{RD1-seed".($part*8+7)."|}}}
| RD1-team7={{{RD1-team".($part*8+7)."|}}}
| RD1-score7={{{RD1-score".($part*8+7)."|}}}
| RD1-seed8={{{RD1-seed".($part*8+8)."|}}}
| RD1-team8={{{RD1-team".($part*8+8)."|}}}
| RD1-score8={{{RD1-score".($part*8+8)."|}}}

| RD2-seed1={{{RD2-seed".($part*4+1)."|}}}
| RD2-team1={{{RD2-team".($part*4+1)."|}}}
| RD2-score1={{{RD2-score".($part*4+1)."|}}}
| RD2-seed2={{{RD2-seed".($part*4+2)."|}}}
| RD2-team2={{{RD2-team".($part*4+2)."|}}}
| RD2-score2={{{RD2-score".($part*4+2)."|}}}

| RD2-seed3={{{RD2-seed".($part*4+3)."|}}}
| RD2-team3={{{RD2-team".($part*4+3)."|}}}
| RD2-score3={{{RD2-score".($part*4+3)."|}}}
| RD2-seed4={{{RD2-seed".($part*4+4)."|}}}
| RD2-team4={{{RD2-team".($part*4+4)."|}}}
| RD2-score4={{{RD2-score".($part*4+4)."|}}}

| RD3-seed1={{{RD3-seed".($part*3+1)."|}}}
| RD3-team1={{{RD3-team".($part*3+1)."|}}}
| RD3-score1={{{RD3-score".($part*3+1)."|}}}
| RD3-seed2={{{RD3-seed".($part*3+2)."|}}}
| RD3-team2={{{RD3-team".($part*3+2)."|}}}
| RD3-score2={{{RD3-score".($part*3+2)."|}}}
}}
";

}

echo tpl(0);
echo tpl(1);
echo tpl(2);
echo tpl(3);
echo tpl(4);
echo tpl(5);
echo tpl(6);
echo tpl(7);
