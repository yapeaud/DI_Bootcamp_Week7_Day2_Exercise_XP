<?php

function myFunction($nbr) {
    if (filter_var($nbr, FILTER_VALIDATE_INT) === 0 || ! filter_var($nbr, FILTER_VALIDATE_INT) === false) {
        echo "$nbr is a valid integer";
    } else {
        echo "$nbr is not a valid integer";
    }
}
try {
    myFunction(2.5);
}
catch(Exception $e) {
    echo "Try again.";
}
finally{
    echo "<br>";
    echo "Validation Complete";
}

/*
    filter_var: Filtre une variable avec un filtre spécifié
   FILTER_VALIDATE_INT: Valide la valeur en tant qu'entier, éventuellement à partir de la plage spécifiée, et convertit en int en cas de succès.
*/
?>
<br>
<a href="index.php">Retour</a>