<?php
/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 14:36
 */

  /*
   * 控制器名字 方法
   * */
  function C($name,$method){
      //1引入控制器文件
      require_once("Controller/".$name."Controller.php");
      //2实例化控制器
//      $testController=new testController();
//      $testController->show();
      eval('$obj=new '.$name.'Controller(); $obj->'.$method.'();');//字符串转化为可执行的php语句
//      print_r('$obj=new '.$name.'Controller(); $obj->'.$method.'();');
  }

/*
 * 模型名字 方法
 * */
  function M($name){
//1引入模型器文件
      require_once("Model/".$name."Model.php");
      //2实例模型
      eval('$obj=new '.$name.'Model();');//字符串转化为可执行的php语句0

      return $obj;
  }

  /*视图名字 方法*/
function V($name){
//1引入模型器文件
    require_once("View/".$name."View.php");
    //2实例模型
    eval('$obj=new '.$name.'View(); ');//字符串转化为可执行的php语句

    return $obj;
}

//过滤非法参数
function daddslashes($str){
    return (!get_magic_quotes_gpc()?addcslashes($str):$str);
}


