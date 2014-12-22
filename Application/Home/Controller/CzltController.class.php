<?php
namespace Home\Controller;
use Think\Controller;
class CzltController extends Controller {
   
    //传智论坛首页
    public function index(){
        
        $nav = M("nav"); // 实例化nav对象
        // 查找status值为1name值为think的用户数据 
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        //dump($data);die;
<<<<<<< HEAD
        //echo $nav->getLastSql();die;

=======
		//***********这个是会员专区和讲师专区
		$art = M('Article');//获取表总数据
        $data = $art->join('bbs_category ON bbs_article.text_type = bbs_category.c_id')->where('text_status=0 and user_type=3')->order('text_id desc')->limit(8)->select();
        $list = $art->join('bbs_category ON bbs_article.text_type = bbs_category.c_id')->where('text_status=0 and user_type=2')->order('text_id desc')->limit(8)->select();
        //print_r($list);//die;
        $this->assign('data',$data);
        $this->assign('list',$list);
		//************
>>>>>>> f5f2743d3a97d756b83d2c49af35df878c69c338
        $this->assign("nav",$data);
        $this->display();
    }
    
    //技术论坛
    public function jslt(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }
    
    //IT问答精灵
    public function wdjl(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }
    
    //传智特刊
    public function cztk(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }
    
    //积分商城
    public function jfsc(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }
    
    //免费公开课
    public function mfgkk(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }
    
    //积分抽奖
    public function jfcj(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }

	
}