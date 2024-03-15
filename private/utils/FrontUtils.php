<?php
class FrontUtils
{
    /**
     * format the date to be more readable
     *
     * @param [type] $date
     * @return void
     */
    public static function FormatDate($date,$format = 'd/m/Y')
    {
        $dateObject = new DateTime($date);
        return $dateObject->format($format);
    }
}
