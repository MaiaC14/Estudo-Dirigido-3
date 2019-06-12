<?php

function MesNum ($mes) { switch ($mes) 

   { case 1;
     print "Janeiro"."\n";
     break;
                                         
     case 2;
     print "Fevereiro"."\n";
     break;

     case 3;
     print "Março"."\n";
     break;

     case 4;
     print "Abril"."\n";
     break;

     case 5;
     print "Maio"."\n";
     break;

     case 6;
     print "Junho"."\n";
     break;

     case 7;
     print "Julho"."\n";
     break;

     case 8;
     print "Agosto"."\n";
     break;
     
     case 9;
     print "Setembro"."\n";
     break;

     case 10;
     print "Outrubo"."\n";
     break;

     case 11;
     print "Novembro"."\n";
     break;

     case 12;
     print "Dezembro"."\n";
     break; }

return $mes; }


print "Digite qualquer número entre 1 a 12, e veja a qual mês ele corresponde.\n" ;
$mes= (int) fgets (STDIN);

MesNum ($mes);