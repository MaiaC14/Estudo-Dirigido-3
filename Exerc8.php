<?php

function DiaNum ($dia) { switch ($dia)
    
  {  case 1;
     print "Segunda"."\n";
     break;

     case 2;
     print "Terça"."\n";
     break;

     case 3;
     print "Quarta"."\n";
     break;

     case 4;
     print "Quinta"."\n";
     break;

     case 5;
     print "Sexta"."\n";
     break;

     case 6;
     print "Sábado"."\n";
     break;

     case 7;
     print "Domingo"."\n";
     break; }

 return $dia; }

print "Digite qualquer número 1 a 7 e veja a qual dia da semana ele corresponde: \n" ;
$dia= (int) fgets (STDIN);

DiaNum ($dia);