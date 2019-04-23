<?php
$b = 1;

$c = 2;


$float = 0.5;

$octal = 05232;



// simple echo
Echo "Echo is working \n";

// simple int addition
// also dynamic allocation some result variables
$a = $b + $c;
echo $a;

echo "\n";

// float int addition
$r = $float + $c;
echo $r;

echo "\n";

// octal int addition
// cool it works
$r = $octal + $c;
echo $r;
echo "\n";

// hex inline int addition
// cool it works
$r = 0x1F + $c;
echo $r;

echo "\n";


// hex inline octal addition
// cool it realy works
$r = 0x01 + 0011;
echo $r;

echo "\n";


// hard casted typed echo
//Fatal error: Uncaught LogicException: Unknown JIT opcode: TYPE_CAST_STRING in /compiler/lib/JIT.php:501
//echo (string)$b."+".(string)$c."=".(string)$a; // sting cast is not supported yet

// inline string replacing
//Fatal error: Uncaught Error: Call to undefined method PHPLLVM\LLVMAbstract\Type::getElementType() in /compiler/lib/JIT/Builtin/Type/String_.php:772
// echo "$b + $c = $a"; // dynamic type casting is not supported yet

// concat diffrent types
//Fatal error: Uncaught LogicException: Unknown JIT opcode: TYPE_CAST_STRING in /compiler/lib/JIT.php:501
//Fatal error: Uncaught Error: Call to undefined method PHPLLVM\LLVMAbstract\Type::getElementType() in /compiler/lib/JIT/Builtin/Type/String_.php:772
//echo $b."+".$c."=".$a; // basicly the same as inline