<?php 
namespace LLAR\controllers;
use ChemMVC\controller as Controller;

class homeController extends Controller
{
    function index(){
        return parent::view();
    }
}
