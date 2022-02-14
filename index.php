<?php

$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$censured_word = $_GET['tempor'];
$new_paragraph = str_replace('tempor', '***', $paragraph);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords!</title>
</head>

<body>

    <p>
        <?php echo $paragraph ?>
    </p>

    <p>La lunghezza del mio paragrafo è di (tot. caratteri):
        <?php echo strlen($paragraph) ?>.
    </p>

    <p>
        <?php echo $new_paragraph ?>
    </p>
    
    <p>
        La lunghezza del mio paragrafo censurato è di (tot. caratteri):
        <?php echo strlen($new_paragraph) ?>.
    </p>



</body>

</html>


<!-- 
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->