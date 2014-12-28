<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class JiuyeController extends Controller {
        public function __construct() {
        parent::__construct();
         $nav=M('nav');
		 $result = $nav->where('nav_category=0 and isset=1')->order("orders")->select();
        //$condition = array( 'isset' =>1);
        //$nav=$nav->where($condition)->select();
        //$this->assign('nv',$array);
        //var_dump($array);die;
        $this->assign('nav',$result); 
    }
    public function index(){
         $model = D('pvs');
        $o_pv = $model->where("url='jiuye'")->find();
        //var_dump($pv['click' );
        $data['click']=$o_pv['click']+1;
        $n_pv = $model->where("url='jiuye'")->save($data);
        
        $Jiuye = M("jiuye");
        $Jiuye1 = M("jiuye1");
        $res = $Jiuye1->order('add_time desc')->limit(4)->select();
		$this->assign('res',$res);
        $count = $Jiuye->count();
        $Page  = new \Think\Page($count,5);
        $show  = $Page->show();
        $a=$_GET['p'];
       //echo bbb.$a;die;
         $b = S($a.jiuye);
        if(!empty($b)){
         $list=$b;
      //echo "<script>alert('来自缓存');</script>";
        }else{
        $list  = $Jiuye->cache($a.jiuye,60,xcache)->limit($Page->firstRow.','.$Page->listRows)->select();
        }
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }
    public function detial(){
        $id = $_GET['id'];
        $Jiuye1 = M("jiuye1");
      //  $list = $Jiuye1->select();
        $li = $Jiuye1->find($id);
       // var_dump($li);die;
        $this->assign("li",$li);
        $this->display();
    }
	public function search(){
        $Jiuye = M("bbs_jiuye");
        $student_name = $_POST['student_name'];
        $school_name = $_POST['school_name'];
		//echo $student_name."123".$school_name;die;
		//include('/sphinxapi.php');
		//$sphinx = new \SphinxClient();
		/* 谁用改谁IP$sphinx->SetServer("127.0.0.1",9312);*/
		//$sphinx->SetMatchMode(SPH_MATCH_ANY);
		//$result = $sphinx->query($student_name,"*");
		//var_dump($result);die;
		//$key = array_keys($result['matches']);
		//var_dump($result['matches']);
		//$ids = implode(',',$key);
		$where = " where 1=1";
		if($student_name) {
                $where .= " and student_name like '%$student_name%'";
          //  $map['student_name'] = array('like',"%{$student_name}%");
        }
        if($school_name) {
                $where .= " and school_name like '%$school_name%'";
            ////$map['school_name'] = array('like',"%{$school_name}%");
        }
		$sql="select * from bbs_jiuye" . $where;
		//echo $sql;die;
		$list = $Jiuye->query($sql);
		//$list = $Jiuye ->  where($map)-> select();
		//var_dump($list);die;
        $Jiuye1 = M("jiuye1");
        $res = $Jiuye1->select();
        $this->assign('res',$res);
        $this -> assign('list',$list);
        $this->display('index');
    }

}