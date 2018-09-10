<?php
require_once "config/Helpers.php";
class TranslateController
{

    /**
     * Return translated text depending on the language that is chosen
     *
     * @return void
     */
    public function displayTranslatedText()
    {
        $helper = new Helper();
        var_dump($_POST['language']);
    }
}
