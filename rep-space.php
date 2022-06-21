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

    <?php

        if (isset($_POST) && !empty($_POST['texto'])) {
            
            $textAcent = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú', ' ');
            $cleanText = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U');

            $textPost = $_POST['texto'];

            if (isset($_POST['choice'])) {
                
                array_push($cleanText,$_POST['choice']);
                $text = str_replace($textAcent,$cleanText, $textPost);

                echo '<h3>Result:</h3>';
                echo '<span style="font-size:16px;"  id="resultText"> ' . strtolower($text) . '</span><br>';
                echo '<button class="btn" data-clipboard-action="copy" data-clipboard-target="#resultText" alt="Copy to clipboard" title="Copy to clipboard"> Copy Text </button>';

            }else {
                echo '<h4>Choice a type.</h4>';
            }
            
        }
    ?>
    
</body>
<script>      
    var clipboard = new ClipboardJS('.btn');
</script>
</html>



