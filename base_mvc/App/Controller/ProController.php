<?php
namespace App\Controller;

use App\Model\ProModel;
use Core\Controller\Controller;

class ProController extends Controller{

    public function __construct()
    {
        $this->proModel = new ProModel();
    }

    public function showNumberPro()
    {
        $nbPro = $this->proModel->countAll();
        return $nbPro;
    }


}