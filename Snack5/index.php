<!-- Creare un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il
paragrafo e suddividerlo in tanti paragrafi: ogni volta che si incontra un punto,
bisogna creare un nuovo paragrafo. -->

<?php

 $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

 $arrayComma = explode('.' , $text);

    echo "<pre>";
     var_dump($arrayComma);
    echo "</pre>";

    foreach ($arrayComma as $value) {
        echo "<p>" . $value . "</p>";
    }

 ?>
