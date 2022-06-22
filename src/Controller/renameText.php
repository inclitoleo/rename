<?php

namespace Source\Controller;

class renameText
{

    /**
     * rename a text to another format
     * @return string
     */
    public function renameText(): string
    {

        if (isset($_POST) && !empty($_POST['texto'])) {

            $textAcent = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú', ' ');
            $cleanText = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U');

            $textPost = $_POST['texto'];

            if (isset($_POST['choice'])) {

                array_push($cleanText, $_POST['choice']);
                $text = str_replace($textAcent, $cleanText, $textPost);

                $msg =  '<h3>Result:</h3>';
                $msg .= '<span style="font-size:16px;"  id="resultText"> ' . strtolower($text) . '</span><br>';

                return $msg;
            } else {
                return '<h4>Choice a type.</h4>';
            }
        }
    }
}
