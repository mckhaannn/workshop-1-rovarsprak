<?php
class Rovarsprak
{
    /**
     * Translates anything to rövarspråk
     *
     * @param [type] $str
     * @return string
     */
    protected function translateToRovarsprak($str): string
    {
        return preg_replace("([bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ])", '${0}o${0}', $str);
    }
}
