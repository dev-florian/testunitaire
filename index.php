<?php

use App\Calcul;
Require "src/Calcul.php";
?>

<form name="form" action="" method="post">
    <label for="number1">Premier chiffre</label>
    <input type="number" name="number1" step="1">
    <p>+</p>
    <label for="number2">Premier chiffre</label>
    <input type="number" name="number2" step="1">

    <input type="submit" name="submit" value="calculer">
</form>
<?php

if(isset($_POST['submit'])){
    $init = new Calcul();
    $res = $init->add($_POST['number1'], $_POST['number2']);
    echo "<h3>Le resultat est de ".$res."</h3>";
}