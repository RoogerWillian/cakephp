<?php
/**
 * Created by PhpStorm.
 * User: Roger
 * Date: 02/12/2018
 * Time: 11:39
 */

namespace App\Model\Entity;


use Cake\ORM\Entity;

class Produto extends Entity
{
    public function calculaDesconto()
    {
        return $this->preco * 0.9;
    }
}