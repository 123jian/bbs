<?php
namespace Home\Controller;
use Think\Controller;
class CzltController extends Controller {
   
    //传智论坛首页
    public function index(){
        
        
        $this->assign("data",'123');
        $this->display();
    }

	
}