<?php


    if(isset($_POST["val1"]) && isset($_POST["val2"]) && isset($_POST["ops"])){
        if($_POST["val1"]!='' || $_POST["val2"]!=''){
            $val1 = $_POST["val1"];
            $val2 = $_POST["val2"];
            $ops =  $_POST["ops"];
            
                switch ($ops) {
            case 'add':
                $result = $val1 + $val2;
                break;
            case 'sub':
                $result = $val1 - $val2;
                break;
            case 'multiply':
                $result = $val1 * $val2;
                break;
            case 'divide':
                $result = $val1 / $val2;
                break;
            default:
                $result = "some error";
            }
        }
        
    


}

?>

<html>

<style>
    .container {
        display: flex;
        flex-direction: column;
        object-fit: contain;
        padding: auto;
        height: 20rem;
        width: 40rem;
        border: 2px solid black;
    }

    .form {
        display: flex;
        flex-direction: column;
        height: 100%;
        width: 100%;
    }

    .button {
        height: 2rem;
        width: 2rem;
        background-color: burlywood;
        color: black;
        margin: 0.5rem;
    }

    input {
        width: max-content;
        margin-bottom: 1.5rem;
    }

    .btn-container {
        background-color: lightgreen;
    }
</style>

<body>
    <section class="container">
        <form class="form" action="" method="post">
            <label for="val1" class="val1">Val 1</label>
            <input name="val1" class="val1Input" type="number" value="30">
            <label for="val2" class="val2">Val 2</label>
            <input name="val2" class="val2Input" type="number">

            <select name="ops">
                <option value="">Select the Operation</option>
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            <button type="submit" name="submit">Enter</button>
        </form>
            <?php
            if (isset($result)) {
                echo "<div>".$result."</div>";
            }
            ?>

    </section>

</body>

</html>
