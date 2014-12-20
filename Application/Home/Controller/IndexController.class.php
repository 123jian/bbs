<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
   public function index(){
     $model = D('bbs_b_pv');
        $o_pv = $model->where("url='index'")->find();
        //var_dump($pv['click' );
        $data['click']=$o_pv['click']+1;
        $n_pv = $model->where("url='index'")->save($data);
        
     //var_dump($nav);
     $article=M('bbs_articles');
     $condition = array('c_title' =>学院信息);
     $list=$article->where($condition)->select();
     $condition1 = array('c_title' =>校园动态);
     $list1=$article->where($condition1)->order('a_time desc')->limit(8)->select();
     //var_dump($list);
     $this->assign('list',$list);
     $this->assign('list1',$list1);
    //查询就业信息
     $jiuye=M('jiuye');
     $list=$jiuye->order('add_time desc')->limit(8)->select(); 
     $this->assign('list2',$list);
     //查询php培训名师答疑
    $jiuye=M('bbs_question');
     $list=$jiuye->order('q_time desc')->limit(0,6)->select(); 
     $array=$jiuye->order('q_time desc')->limit(6,5)->select(); 
     $this->assign('list3',$list);
     $this->assign('list4',$array);
     //查询首页视频
        $Jiuye1 = M("jiuye1");
        $res = $Jiuye1->order('add_time desc')->limit(4)->select();
        $this->assign('res',$res);
        //var_dump($res);
        //查询论坛热帖
        
	//查看php培训

	$p_class = M("bbs_pxclass"); //实例化p_class对   
   
     $list5=$p_class->select();
     $this->assign("list5",$list5); //赋值数据集

     $course=M("bbs_course");
     $list6=$course->select();
     $this->assign('list6',$list6);
     
	 //常见问题
	 
	  $question = M("bbs_question"); //实例化p_class对象
        $count=$question->count(); //查询总记录数
        $Page= new\Think\Page($count,3); // 实例化分页类  传入总记录数和每页显示条数
        $show=$Page->show(); //分页显示输出
        // 进行分页数据查询  注意limit 方法的参数要使用Page类的属性
        $list7=$question->where('q_show=1')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list8=$question->where('q_show=2')->select();
        $this->assign("list7",$list7); //赋值数据集
        $this->assign("list8",$list8); //赋值数据集


     $this->display();
    }

	public function Admin(){
        
		$this->display();
    }
}