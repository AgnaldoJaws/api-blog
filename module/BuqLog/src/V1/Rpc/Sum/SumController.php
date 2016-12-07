<?php
namespace BuqLog\V1\Rpc\Sum;

use Zend\Http\Request;
use Zend\Mvc\Controller\AbstractActionController;
use ZF\ContentNegotiation\ViewModel;

class SumController extends AbstractActionController
{
    public function sumAction()
    {
        if($this->getRequest()->getMethod() == Request::METHOD_GET){
            $num1 = $this->params()->fromQuery('num1');
            $num2 = $this->params()->fromQuery('num2');
        } else {
            $num1 = $this->params()->fromPost('num1');
            $num2 = $this->params()->fromPost('num2');
        }

        $sum = $num1 + $num2;
        return new ViewModel([
            'sum' => $sum
        ]);
    }
}




