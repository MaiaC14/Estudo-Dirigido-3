<?php

function comparacao($n1,$n2){ if ($n1>$n2) { $msg="$n1 é maior que $n2.\n"; }
                              else { $msg="$n2 é maior que $n1.\n"; }
                              return $msg; }

print "Informe um número:";
$n1= (float) fgets (STDIN);

print "Informe outro número:";
$n2= (float) fgets (STDIN);

$x= comparacao($n1,$n2);
print $x;