<?php
namespace Home\Controller;
use Think\Controller;
class CzltController extends Controller {
   
    //传智论坛首页
    public function index(){
        
        $nav = M("nav"); // 实例化nav对象
        // 查找status值为1name值为think的用户数据 
        $data = $nav->where('nav_category=1 and isset=1')->select();
        //dump($data);die;

        $this->assign("nav",$data);
        $this->display();
    }
    
    //技术论坛
    public function jslt(){       
        

        $this->assign("nav",$data);
        $this->display();
    }

	
}