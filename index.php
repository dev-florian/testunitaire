<?php

use App\Calcul;

Require "src/Calcul.php";
?>

    <h1>ADDITION</h1>
    <form name="form" action="" method="post">
        <label for="number1">Premier chiffre</label>
        <input type="number" name="number1" step="1">
        <p>+</p>
        <label for="number2">Deuxieme chiffre</label>
        <input type="number" name="number2" step="1">

        <input type="submit" name="submit" value="calculer">
    </form>

<h1>MULTIPLICATION</h1>
    <form name="form2" action="" method="post">
        <label for="number1">Premier chiffre</label>
        <input type="number" name="number1" step="1">
        <p>*</p>
        <label for="number2">Deuxieme chiffre</label>
        <input type="number" name="number2" step="1">

        <input type="submit" name="submit2" value="calculer">
    </form>

    <h1>CHOICE</h1>
    <form name="form3" action="" method="post">
        <label for="number1">Premier chiffre</label>
        <input type="number" name="number1" step="1">
        <br>
        <select name="choice_calcul">
            <option value="add">+</option>
            <option value="multiply">*</option>
        </select>
        <br>
        <label for="number2">Deuxieme chiffre</label>
        <input type="number" name="number2" step="1">



        <input type="submit" name="submit3" value="valider">
    </form>
<?php

if (isset($_POST['submit'])) {
    $init = new Calcul();
    $res = $init->add($_POST['number1'], $_POST['number2']);
    echo "<h3>Le resultat est de " . $res . "</h3>";
}

if (isset($_POST['submit2'])) {
    $init = new Calcul();
    $res = $init->multiply($_POST['number1'], $_POST['number2']);
    echo "<h3>Le resultat est de " . $res . "</h3>";
}

if (isset($_POST['submit3'])) {
    $init = new Calcul();
    if($_POST["choice_calcul"] == "add"){
        $res = $init->add($_POST['number1'], $_POST['number2']);
    }
    if($_POST["choice_calcul"] == "multiply"){
        $res = $init->multiply($_POST['number1'], $_POST['number2']);
    }
    echo "<h3>Le resultat est de " . $res . "</h3>";
}