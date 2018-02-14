<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 06/02/2018
 * Time: 5:34 PM
 */

namespace App\Entities;


class  CommonEntity
{


    /**
     * @ORM\Column(type="string",options={"unsigned":true, "default":0})
     */
    private $deleted;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;


}