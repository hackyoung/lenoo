<?php
/**
 * 通过leno init自动生成, 如果需要在路由之前执行逻辑，则重写Router的beforeRoute方法
 */
class Router extends \Leno\Routing\Router
{
    
   // 如果需要编写规则，则取消注释下面的代码
   //  
   protected $rules = [
       '^user/${1}/articles/focused' => 'user/articles/focused/${1}', 
       '^user/${1}/articles/template' => 'user/articles/template/${1}', 
       '^user/${1}/articles/drafts' => 'user/articles/drafts/${1}', 
       '^user/${1}/articles' => 'user/articles/${1}', 

       '^user/${1}/tasks' => 'user/tasks/${1}', 
   ];
   // 
   // 如果需要在route之前执行逻辑，则取消注释这个方法然后写你的逻辑
   // 
   // protected function beforeRoute()
   // {
   // 
   // }
   // 
   // 
   // 如果需要在route之偶执行逻辑，则取消注释这个方法然后实现逻辑
   // 
   // protected function afterRoute()
   // {
   // }
}
