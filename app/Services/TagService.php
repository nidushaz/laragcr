<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 14/02/2018
 * Time: 3:04 PM
 */

namespace App\Services;


interface TagService
{
    public function tagList();
    public function tagAdd($data);
    public function checkTags($tags);
}