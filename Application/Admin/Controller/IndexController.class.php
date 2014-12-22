<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	public function ll() {
		if(empty($_SESSION['name'])){
		   $this->redirect('index/login');  
		}
    }
	public function index(){
            $this->ll();
	$this->display();
	}
    public function login(){
    $this->display();
    }
     /** 
        *  
        * 验证码生成 
        */  
       public function verify_c(){  
           $Verify = new \Think\Verify();  
           $Verify->fontSize = 18;  
           $Verify->length   = 4;  
           $Verify->useNoise = false;  
           $Verify->codeSet = '0123456789';  
           $Verify->imageW = 130;  
           $Verify->imageH = 50;  
           //$Verify->expire = 600;  
           $Verify->entry();  
       }
        public function yzm(){
			$config =    array(    
				 'fontSize'    =>    130,    // 验证码字体大小   
				 'length'      =>    4,     // 验证码位数   
				// 'useNoise'    =>    true, // 关闭验证码杂点
			 );
			$Verify = new \Think\Verify($config);
			$Verify->entry();
        }
        //处理登陆
        public function admin_login_pro(){
              
            //print_r($_POST);
            $code=$_POST['yzm'];
            $name=$_POST['admin_name'];
            $pwd=$_POST['admin_pwd'];
            //echo $pwd;die;
            $verify = new \Think\Verify();   
            if(empty($verify->check($code, $id=''))){
                $this->display('login');
            }else{
                $admin_user = M('admin_user');
                $data = $admin_user->where("username='".$name."'")->find();
                //echo $admin_user->getLastSql();
                if($data){
					if($data['psd']==md5($pwd)){
						//  $this->redirect();
						session('name',$name); 
						//$this->display('index');
						$this->success('登录成功', 'index');

					}else{
						$this->success('登录失败', 'index');
					}
				 }
				  else{
				  echo "<script>alert('用户名不存在')</script>";
				  $this->display('login');
				  }
            }
        }
        //用户注册
        public function zhuce_pro(){
            $user=M('admin_user');
			$name=$_POST['username'];
		    $psd=$_POST['psd'];
			$data['username'] = $name;
			$data['psd'] = md5($psd);
			//var_dump ($data);die;
			$aa=$user->add($data);
			//print_r($aa);die;
			if($aa){
				$this->redirect('Index/login'); 
			}
		} 
        public function loginout(){
            $this->show('dsadasd');
            $this->ll();
           unset($_SESSION['name']); 
           $this->display('login');
        }
        //加载注册页面
        public function zhuce(){
            $this->display();
        }
	
		
		/*      //将栏目添加到数据库
	public function add_category_pro(){
        $this->ll();
	$name=$_POST['name'];
	$content=$_POST['content'];
	$category = M("bbs_categorys"); // 实例化User对象
	// 然后直接给数据对象赋值
	$data['c_title'] = $name;
	$data['c_content'] = $content;
	$aa=$category->add($data);
        if($aa){
           $this->redirect('Index/category_list'); 
        }
	}
        //查看栏目
	public function category_list(){
                $this->ll();
		$category = M("bbs_categorys"); // 实例化User对象    
        $count      = $category->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $category->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
		$this->display('check_category_show');
	}
        //删除分类信息
        public function category_delete(){
                $this->ll();
            $cid=$_GET['c_id'];
           $category = M('bbs_categorys');
            $aa=$category->delete($cid);
            if($aa){
               $this->redirect('Index/category_list');  
            }
        }
        //显示修改分类信息的表单
        public function edit_category_show(){
                $this->ll();
            $c_id=$_GET['c_id'];
              $category=M('bbs_categorys'); 
          $condition = array( 'c_id' =>$c_id);
            $array=$category->where($condition)->find();
            $this->assign('list',$array); 
            $this->display();
        }
        //修改分类信息
        public function edit_category_pro(){
                $this->ll();
        $id=$_POST['c_id'];    
       // echo $id;die;
        $c_title=$_POST['c_title'];
        $c_content=$_POST['c_content'];
        $category=M("bbs_categorys");
        $data=array('c_title'=>$c_title,'c_content'=>$c_content);
        //var_dump($data);die;
        $a=$category->where("c_id='$id'")->setField($data); //更新个别字段的值，可以使用setField方法。
        if($a){
            $this->redirect('index/category_list');
        }

        }
        //显示文章表单并查询分类
        public function article_show(){
             $this->ll();
           $category=M('bbs_categorys'); 
           $array = $category->select();
	//print_r($array);
	$this->assign('array',$array); 
        $this->display('add_article_show');
        }
        //将文章保存到数据库
	public function add_article_show(){   
                $this->ll();
	$title=$_POST['title'];
        $aid=$_POST['a_id'];
	$content=$_POST['content'];
	$article = M("bbs_articles"); // 实例化User对象
       $data['c_title']=$aid;
	$data['a_title'] = $title;
	$data['a_content'] = $content;
	$aa=$article->add($data);
        if($aa){
            $this->redirect('Index/article_list'); 
        }
	}
        //将文章列表显示
        public function article_list(){
             $this->ll();
            $article=M('bbs_articles');
            $count      = $article->count();// 查询满足要求的总记录数
            $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show       = $Page->show();// 分页显示输出
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $article->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('array',$list);// 赋值数据集
            $this->assign('page',$show);// 赋值分页输出
            $this->display('check_article');
        }
          //删除文章信息
        public function article_delete(){
                $this->ll();
            $id=$_GET['c_id'];
           $article = M('bbs_articles');
            $aa=$article->delete($id);
            if($aa){
               $this->redirect('Index/article_list');  
            }
        }
        //编辑文章信息
        public function edit_article_show(){
                $this->ll();
            $id=$_GET['id'];
            $article=M('bbs_articles');
            $category=M('bbs_categorys');
            $array=$category->select();
            $condition = array( 'id' =>$id);
            $list=$article->where($condition)->find();
            $this->assign('list',$list);
            $this->assign('array',$array);
            $this->display();
        }
        //将文章信息保存到数据库
        public function edit_article_pro(){
                $this->ll();
            $a_title=$_POST['a_title'];
            $id=$_POST['id'];
             $title=$_POST['c_title'];
            $content=$_POST['content'];
            $article = M("bbs_articles"); // 实例化User对象
        // 更改用户的name和email的值
        $data = array('a_title'=>$a_title,'c_title'=>$title,'a_content'=>$content);
        $aa=$article-> where("id='".$id."'")->setField($data);
            if($aa){
            $this->redirect('Index/article_list'); 
        }
        }*/

	}
