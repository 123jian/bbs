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
     $condition = array('c_title' =>ѧԺ��Ϣ);
     $list=$article->where($condition)->select();
     $condition1 = array('c_title' =>У԰��̬);
     $list1=$article->where($condition1)->order('a_time desc')->limit(8)->select();
     //var_dump($list);
     $this->assign('list',$list);
     $this->assign('list1',$list1);
    //��ѯ��ҵ��Ϣ
     $jiuye=M('jiuye');
     $list=$jiuye->order('add_time desc')->limit(8)->select(); 
     $this->assign('list2',$list);
     //��ѯphp��ѵ��ʦ����
    $jiuye=M('bbs_question');
     $list=$jiuye->order('q_time desc')->limit(0,6)->select(); 
     $array=$jiuye->order('q_time desc')->limit(6,5)->select(); 
     $this->assign('list3',$list);
     $this->assign('list4',$array);
     //��ѯ��ҳ��Ƶ
        $Jiuye1 = M("jiuye1");
        $res = $Jiuye1->order('add_time desc')->limit(4)->select();
        $this->assign('res',$res);
        //var_dump($res);
        //��ѯ��̳����
        
	//�鿴php��ѵ

	$p_class = M("bbs_pxclass"); //ʵ����p_class��   
   
     $list5=$p_class->select();
     $this->assign("list5",$list5); //��ֵ���ݼ�

     $course=M("bbs_course");
     $list6=$course->select();
     $this->assign('list6',$list6);
     
	 //��������
	 
	  $question = M("bbs_question"); //ʵ����p_class����
        $count=$question->count(); //��ѯ�ܼ�¼��
        $Page= new\Think\Page($count,3); // ʵ������ҳ��  �����ܼ�¼����ÿҳ��ʾ����
        $show=$Page->show(); //��ҳ��ʾ���
        // ���з�ҳ���ݲ�ѯ  ע��limit �����Ĳ���Ҫʹ��Page�������
        $list7=$question->where('q_show=1')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list8=$question->where('q_show=2')->select();
        $this->assign("list7",$list7); //��ֵ���ݼ�
        $this->assign("list8",$list8); //��ֵ���ݼ�


     $this->display();
    }

	public function Admin(){
        
		$this->display();
    }
}