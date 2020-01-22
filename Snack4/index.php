<!-- Creare una funzione che restituisce un array con 15 numeri casuali, tenendo
conto che l’array non dovrà contenere lo stesso numero più di una volta -->

 <?php
    function genArrayNumeri ($min, $max, $tot) {

        $arrayNumeri = [];

        while (count($arrayNumeri) < $tot) {

            $random = rand($min, $max);

            if (!in_array($random, $arrayNumeri)) {
            $arrayNumeri[] = $random;
            }
        }
        return var_dump($arrayNumeri);


    }

    genArrayNumeri(1,100,15);
  ?>
