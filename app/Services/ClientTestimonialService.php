<?php
/**
 * Created by PhpStorm.
 * User: MyPc
 * Date: 14/02/2018
 * Time: 10:38 AM
 */

namespace App\Services;


interface ClientTestimonialService
{
    public function getAllTestimonials();

    public function addTestimonial($data);

    public function updateTestimonial($data, $id);

    public function getActiveTestimonial($id);

    public function getAllActiveTestimonial();
}