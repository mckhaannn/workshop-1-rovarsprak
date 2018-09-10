<?php
require_once 'controller/TranslateController.php';

class OutputView
{
    private $translator;

    public function __construct()
    {
        $this->translator = new TranslateController();
    }

    /**
     * Return translated text
     *
     * @return string
     */
    public function renderOutput(): string
    {
        return '<div class="output">' . $this->translator->displayTranslatedText() . '</div>';
    }
}
