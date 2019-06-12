<?php
  function FarToCel ($tf){ $tf = ($tf - 32) * 5/9;
                           return $tf; }

  print "Digite uma temperatura em Fahrenheit;" ;
  $tf = (float) fgets (STDIN);
  $tf = FarToCel ($tf);
  print $tf . "Fahrenheit equivale a " . $tf. "Celsius" ;