<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 11:18
 */

namespace App\Controller;


class IndexController
{
    public function index()
    {
        require_once 'src/View/home/index.php';
    }
}