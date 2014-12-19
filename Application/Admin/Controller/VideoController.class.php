<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
//use \Think\Verify;
class VideoController extends Controller {
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
            $video->data($_POST)->add();
            $this->success('上传成功！');    
        }       
    }
}