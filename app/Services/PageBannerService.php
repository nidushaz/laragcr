<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 09/02/2018
 * Time: 3:10 PM
 */

namespace App\Services;


interface PageBannerService
{
    public  function getPageContent($id);
    public  function getPageBanner($id);
    public function saveData($data);
    public  function getPageId($page);

}