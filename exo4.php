
<?php

$phrase = "Engage le jeu que je le gagne";

$rvrs = str_replace(" ","",strtolower($phrase));


if(strrev($rvrs)==$rvrs) {
    echo "La phrase $phrase est un palindrome";
} else {
    echo "La phrase $phrase n'est pas un palindrome";
}

?>
</body>
</html>
