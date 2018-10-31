<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller 
{
    public function index(){
        dump("app bundle default controller");die;
    }
}

?>