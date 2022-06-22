<?php
require_once ("vendor/autoload.php");
use Source\Controller\renameText;
$rename = new renameText();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/clipboard.js-master/dist/clipboard.js"></script>
    <title>Change space by another character</title>
    
</head>
<body>
    
<h2>Removing space to create name (GIT, Projects, Files, Directories)</h2>
    <form action="" method="post">

        <div>
            <label for="texto">Write or paste text</label><br>
            <input type="text" name="texto" placeholder="Digite ou cole o texto" id="texto" style="width: 60%;">
        </div><br>

        <div>
            <label for="">Choice the element</label><br>
            <input type="radio" name="choice" value="-" checked> Trace ( - )<br>
            <input type="radio" name="choice" value="_"> Under ( _ )<br>
            <input type="radio" name="choice" value=",">Comma ( , )<br>
            <input type="radio" name="choice" value=";"> Semicomma ( ; ) <br>
        </div>

        <br>
        <input type="submit" value="Send text"><br>
    </form>

    <?= $rename->renameText(); ?>
    <button class="btn" data-clipboard-action="copy" data-clipboard-target="#resultText" alt="Copy to clipboard" title="Copy to clipboard"> Copy Text </button>
    
</body>
<script>      
    var clipboard = new ClipboardJS('.btn');
</script>
</html>



