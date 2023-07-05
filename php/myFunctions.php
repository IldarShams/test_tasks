<?php 
    function func1($oper1, $oper2, $operation){
        switch ($operation) {
            case "+":
                return $oper1 + $oper2;
                break;
            case "-":
                return $oper1 - $oper2;
                break;
            case "*":
                return $oper1 * $oper2;
                break;
            case "/":
                return $oper1 / $oper2;
                break;
        }
            
    }

    if (isset($_POST['oper1']) and $_POST['oper2'] and $_POST['operation']) {
        echo func1($_POST['oper1'], $_POST['oper2'], $_POST['operation']);
    }
?>