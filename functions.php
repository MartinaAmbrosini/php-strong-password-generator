<?php
function generatePassword($length)
{
    //impostiamo a 10 il limite massimo dei carratteri che formeranno la password da generare
    $limit = 10;
    if ($length > $limit) {
        $length = $limit;
    }
    srand(time());


    //consideriamo i caratteri da randomizzare
    $alfa_number = "abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
    $len_alfa_number = strlen($alfa_number);
    $pass_random = "";
    $i = 0;

    //ciclo i caratteri uno per uno finchè non raggiungo il valore di $length
    while ($i < $length) {
        //con rand trovo l'indice casuale
        $number_random = rand(0, $len_alfa_number - 1);
        $pass_random .= $alfa_number[$number_random];
        $i++;
    }
    return $pass_random;
}
echo generatePassword(8);
