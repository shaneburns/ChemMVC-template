<?php 
namespace LLAR\controllers;
use ChemMVC\controller as Controller;

class shopController extends Controller
{
    function index(){
        return parent::view();
    }
}