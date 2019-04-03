<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 14:11
 */

class testController
{
  function show(){

     $testModel=M('test');;
     $data= $testModel->get();
     //选取视图
      $testVIew=V('test');
      $testVIew->display($data);
  }
}