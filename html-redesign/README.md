The goal is to make this at least a bit responsive.

- ✅Make a new html structure with some simple divs.
- ✅Maybe make a basic layout with a grid (recreate current layout of boxes). https://pl.wikipedia.org/wiki/Szablon:8TeamBracket
- ✅Add lines connecting boxes.
	- ✅Horizontal lines
	- ✅Vertical lines
- [XOR] Generate classes for lines in PHP. CSS will be simpler.
	- Mark top, bottom and middle cells.
	- Refactor CSS.
- [XOR] Simpler aproach?
	- Use cells in-between to add a middle line (just transform it like the right line).
		- 2 cell-lines in RD1
		- 1 cell-lines in RD2, but spanning 3 rows
	- After rd-score add another element that will be used for right line and a half-height vertical line (angle, narożnik).
	- Remove extra columns.
- Make a bigger team bracket html. Maybe generate 64 teams (32 pairs): https://pl.wikipedia.org/wiki/Szablon:64TeamBracket
- Refactor CSS to be more generic? Or just add 64 teams variant.
- Try to make a new CSS variant that would re-create something like the split layout: https://pl.wikipedia.org/wiki/Szablon:64TeamBracket-split
	With CSS alone I would probably need to use a layout that only shows QF once.


Lines loose inspiration:
* https://codepen.io/tutsplus/pen/MWedpoj

Brackets:
* https://pl.wikipedia.org/wiki/Szablon:64TeamBracket-split
* https://pl.wikipedia.org/wiki/Szablon:8TeamBracket

Testing:
* http://localhost/wiki-varia/team-brackets/html-redesign/8teambracket.php
* https://pl.wikipedia.org/wiki/Wikipedysta:Nux/test_teambracket
* https://pl.wikipedia.org/wiki/Wikipedysta:Nux/test_teambracket/8tpl
* https://pl.wikipedia.org/wiki/Szablon:Nux/test_teambracket/8tpl-main.css
* https://pl.wikipedia.org/wiki/Szablon:Nux/test_teambracket/8tpl-lines.css
