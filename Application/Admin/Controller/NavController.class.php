<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
//use \Think\Verify;
class NavController extends Controller {
	
    //导航添加
    public function nav_add(){ 
        
	$this->display("nav_add");
    }
    //导航添加处理
    public function nav_add_pro(){ 
        
        //echo "<pre>";
        //print_r($_POST);die;
        $Nav = M("Nav"); // 实例化nav对象
        $data['nav_name'] = $_POST['title'];
        $data['nav_url'] = $_POST['url'];
        $data['nav_category'] = $_POST['category'];
        $data['nav_content'] = $_POST['content'];
        $data['isset'] = $_POST['isset'];
        $data['order'] = $_POST['order'];
        $result=$Nav->add($data);
        //var_dump($result);
        if($result){
            echo "<script>alert('添加导航成功！');</script>";
            $this->redirect('nav/nav_list');
        }else{
            echo "<script>alert('添加失败！');history.go(-1);</script>";
        }        
    }

    //导航列表
    public function nav_list(){ 	
        
        $Nav = M("Nav"); // 实例化nav对象       
        $count = $Nav->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $data = $Nav->order('nav_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        
        $this->assign('data',$data);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
	$this->display("nav_list");
    }
    
    //导航隐藏
    public function nav_isset_a(){ 	
        
        $id=$_GET['nav_id'];
        //echo $id;die;
        $Nav = M("Nav"); // 实例化nav对象     
        $data['isset'] = '0'; // 要修改的数据对象属性赋值
        $result=$Nav->where('nav_id='.$id)->save($data);//根据条件更新记录
        if($result){
           $this->redirect('nav/nav_list');//隐藏成功，跳转到列表页
        }else{
            echo "<script>alert('隐藏失败！');history.go(-1);</script>"; 
        }	
    }
    //导航显示
    public function nav_isset_b(){ 	
        
        $id=$_GET['nav_id'];
        //echo $id;die;
        $Nav = M("Nav"); // 实例化nav对象       
        $data['isset'] = '1'; // 要修改的数据对象属性赋值
        $result=$Nav->where('nav_id='.$id)->save($data);//根据条件更新记录
        if($result){
           $this->redirect('nav/nav_list');//显示成功，跳转到列表页
        }else{
            echo "<script>alert('显示失败！');history.go(-1);</script>"; 
        }	
    }
    //导航编辑
    public function nav_edit(){ 
        
        $id=$_GET['nav_id'];
        $Nav = M("Nav"); // 实例化nav对象
        $data=$Nav->where('nav_id='.$id)->find();
        //print_r($data);die;
        $this->assign('data',$data);
	$this->display("nav_edit");
    }
    //导航编辑处理
    public function nav_edit_pro(){ 
        
        //echo '<pre>';
        //print_r($_POST);//die;
        $id=$_POST['h_id'];
        $Nav = M("Nav"); // 实例化nav对象
        $Nav->nav_name = $_POST['title'];
        $Nav->nav_url = $_POST['url'];
        $Nav->nav_category = $_POST['category'];
        $Nav->nav_content = $_POST['content'];
        $Nav->isset = $_POST['isset'];
        $Nav->order = $_POST['order'];
        $result=$Nav->where('nav_id='.$id)->save();
        //echo $Nav->getLastSql();
        //print_r($result);die;      
        if($result!=0){
           $this->redirect('nav/nav_list');//编辑成功，跳转到列表页
        }else{
            echo "<script>alert('编辑失败！');history.go(-1);</script>"; 
        }
    }
    //导航删除
    public function nav_delete(){ 
        
        $id=$_GET['nav_id'];
        $Nav = M("Nav"); // 实例化nav对象       
        $result=$Nav->delete($id);
        //var_dump($result);die;        
        if($result){
           echo "<script>alert('删除成功！');</script>";
           $this->redirect('nav/nav_list');//删除成功，跳转到列表页
        }else{
           echo "<script>alert('删除失败！');</script>";
           $this->redirect('nav/nav_list');//删除失败，跳转到列表页
        }
    }
    

}