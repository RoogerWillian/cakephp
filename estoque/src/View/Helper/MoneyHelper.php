<?php
/**
 * Created by PhpStorm.
 * User: Roger
 * Date: 02/12/2018
 * Time: 11:33
 */

namespace App\View\Helper;


use Cake\View\Helper;

class MoneyHelper extends Helper
{
    public function format($number)
    {
        return "R$ " . number_format($number, 2, ",", ".");
    }
}