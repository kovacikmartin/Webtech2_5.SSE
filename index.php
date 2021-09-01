<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSE</title>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div id="functions">

    </div>

    <div id="options">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="checkboxY1" value="y1" onclick="updateFunctions();" checked>
            <label class="form-check-label" for="checkboxY1">y1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="checkboxY2" value="y2" onclick="updateFunctions();" checked>
            <label class="form-check-label" for="checkboxY2">y2</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="checkboxY3" value="y3" onclick="updateFunctions();" checked>
            <label class="form-check-label" for="checkboxY3">y3</label>
        </div>

        <input type="number" id="paramA" onkeyup="updateFunctions();" onmouseup="updateFunctions();" value="1">
    </div>
    
    <script src="js/script.js"></script>
</body>
</html>