$(document).ready(function(){

    $.ajax({
        url: "php/initialization.php",
        data: {a : 1, y1 : true, y2 : true, y3 : true},
        type: "post"
    });

    var source = new EventSource("php/sse.php");

    source.addEventListener("generateFunValues", (event) => {

        var data = JSON.parse(event.data);

        var functions = document.getElementById("functions");

        functions.innerHTML = "x: " + data.x;
        functions.innerHTML += "<br>a: " + data.a;

        if(("y1" in data) && data.y1 !== null){
            functions.innerHTML += "<br>y1: " + data.y1;
        }
        
        if(("y2" in data) && data.y2 !== null){
            functions.innerHTML += "<br>y2: " + data.y2;
        }
        
        if(("y3" in data) && data.y3 !== null){
            functions.innerHTML += "<br>y3: " + data.y3;
        }

    });
})

function updateFunctions(){

    var a = document.getElementById("paramA").value
    var y1 = document.getElementById("checkboxY1").checked;
    var y2 = document.getElementById("checkboxY2").checked;
    var y3 = document.getElementById("checkboxY3").checked;
    
    $.ajax({
        url: "php/updateFunctions.php",
        data: {a : a, y1 : y1, y2 : y2, y3 : y3},
        type: "post"
    });
};