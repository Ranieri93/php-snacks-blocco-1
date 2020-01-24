<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

    $classe = [
        [
            "nome" => "Ranieri",
            "cognome" => "Innocenti",
            "voti" => [
                9, 8, 7, 6
            ]
        ],
        [
            "nome" => "Giada",
            "cognome" => "Volpi",
            "voti" => [
                7, 8, 5, 7
            ]
        ],
    ];

    foreach ($classe as $alunno) {
        echo "<br>";
        echo $alunno["nome"] .' ';
        echo $alunno["cognome"];
        $sommaVoti = 0;
        foreach ($alunno['voti'] as $voto) {
            $sommaVoti = $sommaVoti + $voto;
        }
        $nVoti = count($alunno["voti"]);
        if ($nVoti != 0) {
            $media = $sommaVoti / $nVoti;
            echo " media voti: " . $media;
        }

    }


 ?>
