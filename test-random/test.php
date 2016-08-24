<?php

// This test is to ensure that the random number generator doesn't
// behave as a troll (see http://dilbert.com/strip/2001-10-25)

for($i = 0; $i < 6; $i++)
	echo rand() . "\n";
