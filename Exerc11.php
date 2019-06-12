<?php
print "Digite as notas de um aluno \n" ;

$num= (int) fgets (STDIN);
$num2= (int) fgets (STDIN);

print "Agora calcule a média que esse aluno fez : \n\n" ;

$soma = $num + $num2 ;

$media = $soma/2;

if ($media >= 6 ){
    print "PARABÉNS! Você foi aprovado!\n\n" ;
}else{
    print " Você ficou de recuperação\n\n" ;
}