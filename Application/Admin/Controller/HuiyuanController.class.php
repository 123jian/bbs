<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
//use \Think\Verify;
class HuiyuanController extends Controller{

    //添加页面
    public function add_category_show(){
        $this->display("add_category_show");
    }
    //执行添加
    public function add_category_pro(){
        //print_r($_POST);die;
        $cat = M("Category"); // 实例化User对象
        $data['c_name'] = $_POST['name'];
        $data['c_desc'] = $_POST['desc'];
        $data['c_time'] = time();
        $res=$cat->add($data);
        if($res){
            $this->success('新增成功', 'category_list');
        }else{
            $this->error('新增失败');
        }
        //$this->display("add_category_show");
    }
    //查看栏目
    public function category_list()
    {
        $cat = M('Category');//获取表总数据
        $count = $cat->count();//调用分页  并且设置每页显示的记录数

        $page = new \Think\Page($count,2);//分页显示

        $show = $page->show();//获取分页后数据

        $data = $cat->order('c_id desc')->limit($page->firstRow.','.$page->listRows)->select();

        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display("check_category_show");    
    }
    //栏目删除category_delete
    public function category_delete()
    {
        //echo $_GET['c_id'];die;
        $c_id=$_GET['c_id'];
        $cat = M("Category"); // 实例化User对象
        $cat->where('c_id='.$c_id)->delete(); // 删除id为5的用户数据
        $this->success('category_list');
    }
    //修改栏目页面
    public function edit_category_show(){
        //print_r($_GET);
        $cat = M("Category"); // 实例化User对象// 查找status值为1name值为think的用户数据 
        $data = $cat->where('c_id='.$_GET['c_id'])->find();
        //print_r($data);//die;
        $this->assign('data',$data);
        $this->display("edit_category_show");    
    }
    //修改栏目
    public function category_up()
    {
        //print_r($_POST);die;
        $cat = M("Category"); // 实例化User对象// 要修改的数据对象属性赋值
        $data['c_id'] = $_POST['c_id'];
        $data['c_name'] = $_POST['c_title'];
        $data['c_desc'] = $_POST['c_content'];
        $res=$cat->where('c_id='.$_POST['c_id'])->save($data); // 根据条件更新记录
        //echo $res;die;
        if($res){
            $this->success('修改成功', 'category_list');
        }else{
            $this->error('修改失败');
        }
    }
    //文章添加
    public function article_show(){
        //echo "111";
        $cat = M("Category"); // 实例化User对象
        //$data = $cat->getField('c_id,c_name');// 获取所有用户的ID和昵称列表
        $data = $cat->getField('c_id,c_name');
        //print_r($data);die;
        $this->assign('data',$data);
        
        $this->display("add_article_show");  
    }
    //执行添加
    public function add_article_pro(){
        //print_r($_POST);die;
        $User = M("Article");
        $data['text_title'] = $_POST['t_title'];
        $data['text_content'] = $_POST['t_content'];
        $data['add_time'] = time();
        $data['text_type'] = $_POST['a_id'];
        $data['user_type'] = 2;
        $res=$User->add($data);
        if($res){
            $this->success('新增成功', 'article_list');
        }else{
            $this->error('新增失败');
        }
    }
    //文章列表页面
    public function article_list(){
        //echo 111;die;
        $art = M('Article');//获取表总数据
        $count = $art->where('text_status=0')->count();//调用分页  并且设置每页显示的记录数

        $page = new \Think\Page($count,3);//分页显示

        $show = $page->show();//获取分页后数据

        $data = $art->join('bbs_category ON bbs_article.text_type = bbs_category.c_id')->order('text_id desc')->where('text_status=0')->limit($page->firstRow.','.$page->listRows)->select();
        //print_r($data);die;
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display("check_article");   
    }
    //删除文章
    public function article_delete()
    {
        //print_r($_GET['text_id']);
        $text_id=$_GET['text_id'];
        $cat = M("Article"); // 实例化User对象
        $cat->where('text_id='.$text_id)->delete(); // 删除id为5的用户数据
        $this->success('article_list');
    }
    //修改页面
    public function edit_article_show(){
        $cat = M("Category"); // 实例化User对象
        $data = $cat->getField('c_id,c_name');
        //print_r($data);die;print_r($_GET);
        $art = M("Article"); // 实例化User对象// 查找status值为1name值为think的用户数据 
        $arr = $art->where('text_id='.$_GET['text_id'])->find();
        //print_r($data);//die;
        $this->assign('data',$data);
        $this->assign('arr',$arr);
        $this->display("edit_article_show");     
    }
    //执行修改
    public function edit_article_pro(){
        //print_r($_POST);
        $art = M("Article"); // 实例化User对象// 要修改的数据对象属性赋值
        //$data['text_id'] = $_POST['text_id'];
        $data['text_title'] = $_POST['text_title'];
        $data['text_content'] = $_POST['text_content'];
        $data['add_time'] = time();
        $data['text_type'] = $_POST['text_type'];
        $data['user_type'] = 3;
        $res=$art->where('text_id='.$_POST['text_id'])->save($data); // 根据条件更新记录
        //echo $res;die;
        if($res){
            $this->success('修改成功', 'article_list');
        }else{
            $this->error('修改失败');
        }
    }
    //放入回收站
    public function article_statu(){
        //print_r($_GET);die;
        $art = M("Article"); // 实例化User对象// 要修改的数据对象属性赋值
        if($_GET['sta']==0){
            $data['text_status'] = 1;
        }else{
            $data['text_status'] = 0;
        }
        
        $res=$art->where('text_id='.$_GET['text_id'])->save($data); // 根据条件更新记录
        //echo $res;die;
        if($res){
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }
    //回收站
    public function article_huishou_list(){
        
        $art = M('Article');//获取表总数据
        $count = $art->where('text_status=0')->count();//调用分页  并且设置每页显示的记录数

        $page = new \Think\Page($count,3);//分页显示

        $show = $page->show();//获取分页后数据

        $data = $art->join('bbs_category ON bbs_article.text_type = bbs_category.c_id')->order('text_id desc')->where('text_status=1')->limit($page->firstRow.','.$page->listRows)->select();
        //print_r($data);die;
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display("check_article");   
    }
    
	/*public function yzm()
	{
	
	}*/
}