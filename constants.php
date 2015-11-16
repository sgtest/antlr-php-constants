<?php

namespace x\y\a {
	const CONSTANT = 1;
	function f() {}
}

namespace x\y\b {
	const CONSTANT = 2;
	function f() {}
}

namespace x\y\c {
	const CONSTANT = 3;
	echo CONSTANT;
	echo \x\y\c\CONSTANT;
	echo \x\y\a\CONSTANT;
}

namespace {
	use function x\y\a\f as f1;
	f1();
	use const x\y\b\CONSTANT;
	echo CONSTANT;
}

namespace {
	use function x\y\b\f;
	f();
	use const x\y\a\CONSTANT;
	echo CONSTANT;
}

define("ACONSTANT", 10);
echo ACONSTANT;
