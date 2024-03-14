<?php
class FrontUtils
{
    /**
     * format the date to be more readable
     *
     * @param [type] $date
     * @return void
     */
    public static function FormatDate($date)
{
    $dateObject = new DateTime($date);
    return $dateObject->format('d/m/Y');
}

}
