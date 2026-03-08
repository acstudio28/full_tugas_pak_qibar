<?php
function best_of_month(){
    echo "agustus";
}

//parameter = tarik data dari luar fungsi
function best_moment($something){
    echo $something . " adalah istimewa";
}

?>

<html>
    <head>
        <title>Best Of Debes</title>
    </head>
    <body>
        <h1><?php best_of_month(); ?></h1>
        <h1><?php best_moment("pergi ke disneyland"); ?></h1>
    </body>
</html>
