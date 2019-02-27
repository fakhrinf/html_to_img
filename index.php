<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAVE IMAGE</title>
</head>
<body>
    <div id="canvas">
        <p style="position:absolute;padding-left:5px;color:white !important;"><?=date('Y-m-d')?></p>
        <img src="drive/1.jpg" alt="" style="max-width:400px;">
    </div>
    <button onclick="download()">DOWNLOAD</button>
</body>
<script src="jquery.js"></script>
<script src="html2canvas.js"></script>
<script src="savejpg.js"></script>
</html>