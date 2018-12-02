<?php
/**
 * Created by PhpStorm.
 * User: Roger
 * Date: 02/12/2018
 * Time: 19:17
 */

namespace App\Model\Entity;


use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    public function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }

}