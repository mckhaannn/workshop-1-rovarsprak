<?php
class LayoutView
{
    /**
     * Render page view
     *
     * @param InputView $iv
     * @param OutputView $ov
     * @return void
     */
    public function render(InputView $iv, OutputView $ov)
    {
        echo '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>Rovarsprak</title>
                <link rel="stylesheet" href="style.css">
                <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
            </head>
            <body>
                ' . $iv->renderLanguageOption() . '
                ' . $iv->renderInput() . '
                ' . $ov->renderOutput() . '
            </body>
        </html>
        ';
    }
}
