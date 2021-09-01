<?php
    require_once("../controllers/databaseController.php");
    require_once("../controllers/functionsController.php");

    header("Cache-Control: no-cache");
    header("Content-Type: text/event-stream");

    if($_SERVER["HTTP_LAST_EVENT_ID"]){
        $id = $_SERVER["HTTP_LAST_EVENT_ID"];
    }
    else{
        $id = 0;
    }

    $db_conn = (new DatabaseController())->getConnection();
    $functionsController = (new FunctionsController());

    while(true){

        $options = $functionsController->getFunctionOptions();
        sleep(1);

        $a = $options["a"];
        $id++;

        $data = [];

        $data["x"] = $id;
        $data["a"] = $a;

        if($options["y1"] === 1){
            
            $y1 = sin($a*$id) * sin($a*$id);
            $data["y1"] = $y1;
        }
        
        if($options["y2"] === 1){
            
            $y2 = cos($a*$id) * cos($a*$id);
            $data["y2"] = $y2;
        }

        if($options["y3"] === 1){
            
            $y3 = sin($a*$id) * cos($a*$id);
            $data["y3"] = $y3;
        }

        echo "id: " . $id . "\n";
        echo "event: generateFunValues\n";
        echo "data: " . json_encode($data) . "\n\n";

        if(ob_get_level() > 0){
            ob_flush();
        }
        
        flush();
    }
?>