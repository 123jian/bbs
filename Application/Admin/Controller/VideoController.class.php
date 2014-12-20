<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
//use \Think\Verify;
class VideoController extends Controller {
    public function video_up(){ 
    
		$User = M("video"); // 实例化User对象// 要修改的数据对象属性赋值
                if($_GET['status']==1){
                    $data['status'] = '0';
                }else{
                    $data['status'] = '1';
                }
                
                $User->where('id='.$_GET['id'])->save($data); // 根据条件更新记录
                $this->redirect("video_show");
    }
    public function video_del(){ 
		$Teacher = M("video"); // 实例化User对象
                $Teacher->where('id='.$_GET['id'])->delete(); // 删除id为5的用户数据
                $this->success('删除成功！');
    }
    public function video_show(){ 
		$Teacher = M("video"); // 实例化User对象
                $teacher=$Teacher->join('bbs_teacher ON bbs_video.t_id = bbs_teacher.t_id')
                ->select();
               // print_r($teacher);
                $this->assign('teacher',$teacher);
		$this->display("video_show");
    }
    public function add_video(){ 
		$Teacher = M("Teacher"); // 实例化User对象
                $teacher=$Teacher->select();
               // print_r($teacher);
                $this->assign('teacher',$teacher);
		$this->display("add_video");
    }
    public function add_video_pro(){ 
        $upload = new \Think\Upload();   
        $upload->maxSize   =     3145728 ;    
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
        $upload->savePath  =      './Uploads/';
        $info   =   $upload->upload();  
        $url=$info['thumb']['savepath'].$info['thumb']['savename'];
        if(!$info) {      
            $this->error($upload->getError());    
        }else{       
            $video = M("Video");
            $_POST['thumb']=$url;
            $_POST['status']=1;
            $video->data($_POST)->add();
            $this->success('上传成功！','video_show');    
        }       
    }
}