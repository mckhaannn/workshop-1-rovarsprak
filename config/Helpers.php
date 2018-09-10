<?php
class Helper
{
    /**
     * Translates the users text input, if no input, return an empty string
     * 
     * @return string
     */
    public function getTextToBeTranslated(): string
    {
        if (isset($_POST['text'])) {
            return ($_POST['text']);
        } else {
            return '';
        }
    }

    /**
     * Translates the text depending on the selected language
     *
     * @param [type] $name
     * @return string
     */
    public function langaugeToTranslate($language): string
    {
        if (isset($_POST[$language])) {
            return ($_POST[$language]);
        }
    }
}
