<?php

$addition = $subtraction = null;
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     $val1 = isset($_POST["val1"]) ? $_POST["val1"]: 0;
     $val2 = isset($_POST["val2"]) ? $_POST["val2"]: 0;
     if(isset($_POST["add"])){
         $addition = $val1 + $val2;
     }elseif (isset($_POST["sub"])){
         $subtraction = $val1 - $val2;
     }elseif(isset($_POST["multiply"])){
         $multiply = $val1*$val2;
     }elseif(isset($_POST["divide"])){
         $division = $val1 / $val2;
     }
 }

?>

<html>

<style>
    .container {
        display: flex;
        padding: auto;
        height: 20rem;
        width: 40rem;
        border: 2px solid black;
    }

    .form {
        display: flex;
        flex-direction: column;
        height: 80vh;
        width: 80vw;
    }

    .button {
        height: 2rem;
        width: 2rem;
        background-color: burlywood;
        color: black;
        margin: 0.5rem;
    }

    .btn-container {
    }
</style>

<body>
    <section class="container">
        <form class="form" action="" method="post">
            <label for="val1" class="val1">Val 1</label>
            <input name="val1" class="val1Input" type="number">
            <label for="val2" class="val2">Val 2</label>
            <input name="val2" class="val2Input" type="number">

            <div class="btn-container">
                <button class="button" type="submit" name="add">➕</button>
                <button class="button" type="submit" name="sub">➖</button>
                <button class="button" type="submit" name="multiply">✖️</button>
                <button class="button" type="submit" name="divide">➗</button>
            </div>
        </form>

        <div>
            <?php
if ( isset($addition) || isset($subtraction) || isset($multiply)|| isset($division)) {
                echo isset($addition) ? $addition: '';
                echo isset($subtraction) ? $subtraction : '';
                echo isset($multiply) ? $multiply : '';
                echo isset($division) ? $division : '';
            }
            ?>
        </div>
    </section>
</body>

</html>
