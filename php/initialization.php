<?php

    require_once("../controllers/functionsController.php");
    $functionController = (new FunctionsController());

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["a"]) && $_POST["a"] === "1"){
            
            $a = 1;
        }

        if(isset($_POST["y1"]) && $_POST["y1"] === "true"){
            
            $y1 = true;
        }
        
        if(isset($_POST["y2"]) && $_POST["y2"] === "true"){
            
            $y2 = true;
        }

        if(isset($_POST["y3"]) && $_POST["y3"] === "true"){
            
            $y3 = true;
        }

        echo $functionController->insertFunctionOptions($a, $y1, $y2, $y3);
   }
?>