<?php
class InputView
{

    /**
     * Render textarea
     *
     * @return string
     */
    public function renderInput(): string
    {
        return '
        <form action="index.php" method="post">
        <p>Input text to translate to {your language choice here}</p>
        <textarea id="text" name="text">

        </textarea><br>
        <button>Translate</button>
        </form>
        ';
    }

    /**
     * Render dropdown options
     *
     * @return void
     */
    public function renderLanguageOption()
    {
        return '
        <span>Select a language</span>
        <form action="index.php" method="post">
        <select name="language">
            <option name="rovarsprak">Rovarsprak</option>
            <option name="english">English</option>
            <option name="german">German</option>
        </select>
        <input type="submit" name="submit"/>
        </form>
        ';
    }
}
