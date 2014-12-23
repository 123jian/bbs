<?php
namespace Home\Controller;
use Think\Controller;
//use Think\Session\Driver
class IndexController extends Controller {
    public function __construct() {
        parent::__construct();
         $nav=M('nav');
		 $result = $nav->where('nav_category=0 and isset=1')->order("orders")->select();
		 //var_dump($result);die;
		// $condition = array( 'isset' =>1,'nav_category'=>0);
		//var_dump($condition);die;
       // $nav=$nav->where($condition)->select();
		//var_dump($nav);die;
        //$this->assign('nav',$array);
        //var_dump($array);die;
        $this->assign('nav',$result); 
    }
   public function index(){
     $model = D('pvs');
        $o_pv = $model->where("url='index'")->find();
        //var_dump($pv['click' );
        $data['click']=$o_pv['click']+1;
        $n_pv = $model->where("url='index'")->save($data);
        
     //var_dump($nav);
     $article=M('articles');
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
    $jiuye=M('question');
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

	$p_class = M("pxclass"); //实例化p_class对   
   
     $list5=$p_class->select();
     $this->assign("list5",$list5); //赋值数据集

     $course=M("course");
     $list6=$course->select();
     $this->assign('list6',$list6);
     
	 //常见问题
	 
	  $question = M("question"); //实例化p_class对象
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

	   //前台用户登录
    public function login(){
        $this->display();
    }
    //执行登录
    public function login_pro(){
	include '/Public/config.inc.php';
	include '/Public/uc_client/client.php';

	$name=$_POST['name'];
	$pwd=$_POST['pwd'];
	/*list($uid, $username, $password, $email) = uc_user_login($name,$pwd);
	if($uid > 0) {
           session('n_name',$name); 
           echo uc_user_synlogin($uid);
	 echo "<script>location.href='/bbs/index.php/home/index/index'</script>";
	} elseif($uid == -1) {
			echo '用户不存在,或者被删除';
	} elseif($uid == -2) {
			echo '密码错';
	} else {
			echo '未定义';
	}*/
	$user = M("admin_user");
	$userinfo = $user->where("username=$name")->select();
	//var_dump($userinfo);die;
	if($userinfo){
		if($userinfo[0]["psd"]==md5($pwd)){
			
			    session('name',$name); 
				
				//var_dump($_SESSION);
			 $this->success('登录成功','index/index');
			// print_r ($_SESSION);
			 //echo '欢迎$name登录成功';

			   //session('name',$name); 
                      // $this->display('index');
			//echo "ok";
		}else{
			//echo "psd error";
			$this->success('登录失败','index/login');
		}
	}else{
		echo "name error";
	}


    }





	  //注册
    public function zhu_pro(){
      // include '/Public/config.inc.php';
	include '/Public/uc_client/client.php';
        $name=$_GET['name'];
	$pwd=$_GET['pwd'];
        $uid = uc_user_register($name,$pwd,rand(1111,99999).'@qq.com');
        if($uid <= 0) {
                if($uid == -1) {
                        echo '用户名不合法';
                } elseif($uid == -2) {
                        echo '包含要允许注册的词语';
                } elseif($uid == -3) {
                        echo '用户名已经存在';
                } elseif($uid == -4) {
                        echo 'Email 格式有误';
                } elseif($uid == -5) {
                        echo 'Email 不允许注册';
                } elseif($uid == -6) {
                        echo '该 Email 已经被注册';
                } else {
                        echo '未定义';
                }
        } else {
            echo "<script>location.href='/bbs/index.php/home/index/login'</script>";  
        }
    }
    //退出登录
    public function loginout(){
    //    include '/Public/config.inc.php';
	//include '/Public/uc_client/client.php';
           unset($_SESSION['name']); 
       //    echo uc_user_synlogout($uid); 
            //$this->redirect('Index/index');
          
		   $this->success('退出成功','index/index');
    }
    

}