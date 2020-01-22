<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i
PM in un rettangolo verde. -->
<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    foreach ($db as $key) {
        echo "<pre>";
         var_dump($key[0]);
        echo "</pre>";
        // foreach ($key as $value) {
        //     echo "<pre>";
        //      var_dump($value['name']);
        //      var_dump($value['lastname']);
        //     echo "</pre>";
        // }
    }

    for ($i=0; $i < count($db); $i++) {
        echo "<pre>";
         var_dump($i['teachers']);
        echo "</pre>";
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
        <title>snack6</title>
    </head>
    <body>

    </body>
</html>
