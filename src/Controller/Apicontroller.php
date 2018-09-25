<?php
namespace App\Controller;
 
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
 
 
class ApiController extends AppController
{
 
    public function test(){
 
        $sample_list = [
                [
                  "list" => "ListA",
                  "content" => "ContentA"
                ],
                [
                  "list" => "ListB",
                  "content" => "ContentB"
                ],
                [
                  "list" => "ListC",
                  "content" => "ContentC"
                ]
        ];
 
        $this->set([
            'sample_list' => $sample_list,
            '_serialize' => ['sample_list']
        ]);
    }
 
}