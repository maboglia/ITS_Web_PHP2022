<?php include("header.php");  ?>
<h1>Funzioni</h1>
<?php

function faiQualcosa($argomento)
{
    if (is_string($argomento)){
        return strtoupper($argomento);
    } elseif (is_int($argomento)){
        return $argomento * $argomento;
    }


}

echo faiQualcosa("pippo");
echo faiQualcosa(5);
?>
<?php include("footer.php");  ?>