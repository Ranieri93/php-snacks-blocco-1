<!-- Creare un array di array: ogni array figlio avrà come chiave una data in questo
formato: DD-MM-YYYY (es 01-01-2007) e come valore un array di post
associati a quella data.
Stampare ogni data con i relativi post. -->

<?php

$posts = [
    '20/01/2020' => [
        [
            'title' => 'Post 1',
            'author' => 'Ranieri Innocenti',
            'text' => 'Ciao! Come Va?'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Mugnai',
            'text' => 'Tutto bene, te?'
        ],
    ],
    "21/01/2020" => [
        [
            'title' => 'Post 3',
            'author' => 'Ranieri Innocenti',
            'text' => 'Php è bellissimo!'
        ]
    ],
];
echo "<pre>";
var_dump($posts);
echo "</pre>";

?>

<?php
foreach ($posts as $days => $singlePost) {?>
    <h2> <?php echo $days; ?>:</h2>

        <ul> <?php

            foreach ($singlePost as $value) { ?>
                <li>
                    <?php echo $value['title']; ?>
                </li>
                <li>
                    <?php echo $value['author']; ?>
                </li>
                <li>
                    <?php echo $value['text']; ?>
                </li>
            <?php
            }
            ?>
        </ul>
<?php };  ?>
