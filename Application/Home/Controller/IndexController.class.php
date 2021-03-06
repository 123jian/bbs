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

    //文章查看
    public function article_show(){
//echo 123;die;
        //print_r($_GET);//die;
		$id=$_GET['id'];
        
		//memcache缓存
		//$mem = new Memcache;
		//$mem->connect("192.168.1.219","11211");
		/*if(S(md5($id)){
			echo "memcache";
			$list=S(md5($id));
		}else{
			echo "数据库";*/
			$article=M('articles');
			$list = $article->where('id='.$_GET['id'])->find();
		//	$mem->set(md5($id),$list,0,5);
		//	S(md5($id),$list,5);
		//}

        //print_r($list);die;
		$com=M("comment");
		$data = $com->where('a_id='.$_GET['id'])->select();
		//echo time();die;
		if($data){
			$this->assign('data',$data);
			//print_r($data);die;
		}
        $this->assign('list',$list);
        $this->display();
    }
	//添加评论
	public function add_com(){
		//die;
		$code=$_POST['code'];
		$verify = new \Think\Verify();   
		if($verify->check($code,$id='')){
			//$this->display('login');
//print_r($_POST);
			
			$com=M("comment");
			$data['user'] = "游客";
			$data['content'] = $_POST['content'];
			$data['add_time'] = time();
			$data['a_id'] = $_POST['pid'];
			if($com->add($data)){
				$this->success('评论成功', 'article_show/id/'.$_POST['pid']);
			}else{
				$this->success('添加失败', 'article_show/id/'.$_POST['pid']);
			}

		}else{
			$this->success('验证码错误，重新输入', 'article_show/id/'.$_POST['pid']);
		}
	}

    //前台用户登录

    public function login(){
        $this->display();
    }
    //执行登录
    public function login_pro(){

		include 'config.inc.php';
		include 'uc_client/client.php';
		$name=$_POST['name'];
		$pwd=$_POST['pwd'];
		list($uid, $username, $password, $email) = uc_user_login($name,$pwd);
		//echo $uid;die;
		if($uid > 0) {
		  session('name',$name);
		 echo uc_user_synlogin($uid);
		 echo "<script>location.href='/index.php/index/index'</script>";
		} elseif($uid == -1) {
				echo '用户不存在,或者被删除';
		} elseif($uid == -2) {
				echo '密码错';
		} else {
				echo '未定义';
		}
		$user = M("admin_user");
		$userinfo = $user->where("username=$name")->select();
		//var_dump($userinfo);die;
		if($userinfo){
			if($userinfo[0]["psd"]==md5($pwd)){

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
        include 'config.inc.php';
	include 'uc_client/client.php';
        $name=$_GET['name'];
	$pwd=md5($_GET['pwd']);
        $phones=$_GET['phones'];
	//print_r($_GET);
        $uid = uc_user_register($name,$pwd,rand(1111,99999).'@qq.com');
        //print_r($_GET);
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
            $user = M("admin_user"); // 实例化nav对象
            $data['username'] = $name;
            $data['psd'] = $pwd;
            $data['phones'] = $phones;
            $user->add($data);
          echo "<script>location.href='/index.php/index/login'</script>";    
        }
    }
    //退出登录
    public function loginout(){
        include 'config.inc.php';
        include 'uc_client/client.php';
        unset($_SESSION['name']); 
        echo uc_user_synlogout($uid); 
        //$this->redirect('Index/index');

        $this->success('退出成功','index/index');
    }
    //前台找回密码
    public function zhmm(){
        $this->display();
    }

    //找回密码--获取手机号
    public function hqsj(){
        $name=$_GET['username'];       
        $user = M("admin_user");
        $result = $user->where("username='$name'")->select();       
        $a=$_GET['callback'];
        $b=$result[0]['phones'];

        echo $a."(".json_encode($b).")";     
    }

    //处理找回密码页面
    public function zhmm_pro(){
       $this->display();
    }
    //设置新密码
    public function xmm(){
        //print_r($_POST);
        //print_r($_SESSION);
        $phone=$_SESSION['mobile'];
        $user = M("admin_user"); // 实例化User对象
        $data['psd'] = md5($_POST['pwd']);
        $result=$user->where('phones='.$phone)->save($data); // 根据条件更新记录
        //echo $user->getLastSql();
        //print_r($result);die;
        if($result){
            unset($_SESSION['mobile']);
            unset($_SESSION['mobile_code']); 
            echo "<script>alert('密码修改成功');location.href='/index.php/index/login'</script>";
        }else{
            echo "<script>alert('修改失败');location.href=history.go(-1);</script>";
        }
    }
	public function verify(){
            $Verify =     new \Think\Verify();
            $Verify->fontSize = 20;
            $Verify->length   = 4;
            $Verify->useNoise = false;
            $Verify->entry();
    }

}

?>