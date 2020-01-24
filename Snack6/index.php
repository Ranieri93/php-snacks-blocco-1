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



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
        <title>snack6</title>
    </head>
    <body>
        <?php foreach ($db as $ruolo => $persone) {
            if ($ruolo == 'teachers') { ?>
                <div class="grey">
        <?php    } else {  ?>
            <div class="green">
                <?php
            }
             echo $ruolo . '<br>'
            foreach ($persone as $persona) {
                echo "<pre>";
                 var_dump($persona['name'] . ' ');
                 var_dump($persona['lastname'] . '<br>');
                echo "</pre>";
            } ?>

        </div>
        <?php }   ?>
    </body>
</html>
