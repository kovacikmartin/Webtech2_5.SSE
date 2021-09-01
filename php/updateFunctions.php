<?php

    require_once("../controllers/functionsController.php");
    $functionController = (new FunctionsController());

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["a"])){
            
            $a = $_POST["a"];
        }

        if(isset($_POST["y1"])){

            $y1 = $_POST["y1"] === "true" ? 1 : 0;
        }
        
        if(isset($_POST["y2"])){
            
            $y2 = $_POST["y2"] === "true" ? 1 : 0;

        }

        if(isset($_POST["y3"])){
            
            $y3 = $_POST["y3"] === "true" ? 1 : 0;
        }

        echo $functionController->updateFunctionOptions($a, $y1, $y2, $y3);
   }
?>