<?php
namespace Home\Controller;
use Think\Controller;

class CzltController extends Controller {
   
    //传智论坛首页
    public function index(){
        
        $nav = M("nav"); // 实例化nav对象
        // 查找status值为1name值为think的用户数据 
        $result = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        //dump($data);die;
        //echo $nav->getLastSql();die;
		//***********这个是会员专区和讲师专区
		$art = M('Article');//获取表总数据
        $data = $art->join('bbs_category ON bbs_article.text_type = bbs_category.c_id')->where('text_status=0 and user_type=3')->order('text_id desc')->limit(8)->select();
        $list = $art->join('bbs_category ON bbs_article.text_type = bbs_category.c_id')->where('text_status=0 and user_type=2')->order('text_id desc')->limit(8)->select();
        //print_r($list);//die;
        $this->assign('data',$data);
        $this->assign('list',$list);
		

        $this->assign("nav",$result);
        $this->display();
    }
    
    //技术论坛
    public function jslt(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }
    
    //IT问答精灵
    public function wdjl(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }
    
    //传智特刊
    public function cztk(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }
    
    //积分商城
    public function jfsc(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }
    
    //免费公开课
    public function mfgkk(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }
    
    //积分抽奖
    public function jfcj(){       
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        
        $this->display();
    }
    
    //找回密码
    public function zhmm(){
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        $this->assign("nav",$data);
        //$this->assign("host",$host);
        
        $this->display();
    }
    //找回密码处理页
    public function zhmm_pro(){
        
        $nav = M("nav");
        $data = $nav->where('nav_category=1 and isset=1')->order("orders")->select();
        //$this->assign("nav",$data);
       
        session_start();

$target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";

$mobile = $_POST['mobile'];
$send_code = $_POST['send_code'];

$mobile_code = random(4,1);
if(empty($mobile)){
	exit('手机号码不能为空');
}

if(empty($_SESSION['send_code']) or $send_code!=$_SESSION['send_code']){
	//防用户恶意请求
	exit('请求超时，请刷新页面后重试');
}

$post_data = "account=cf_731956283&password=15901436343yy&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$mobile_code."。请不要把验证码泄露给其他人。");
//密码可以使用明文密码或使用32位MD5加密
$gets =  xml_to_array(Post($post_data, $target));
if($gets['SubmitResult']['code']==2){
	$_SESSION['mobile'] = $mobile;
	$_SESSION['mobile_code'] = $mobile_code;
}
echo $gets['SubmitResult']['msg'];
        
        //$this->display();
    }
//短信接口start   
    function Post($curlPost,$url){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_NOBODY, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
		$return_str = curl_exec($curl);
		curl_close($curl);
		return $return_str;
}
function xml_to_array($xml){
	$reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
	if(preg_match_all($reg, $xml, $matches)){
		$count = count($matches[0]);
		for($i = 0; $i < $count; $i++){
		$subxml= $matches[2][$i];
		$key = $matches[1][$i];
			if(preg_match( $reg, $subxml )){
				$arr[$key] = xml_to_array( $subxml );
			}else{
				$arr[$key] = $subxml;
			}
		}
	}
	return $arr;
}
function random($length = 6 , $numeric = 0) {
	PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
	if($numeric) {
		$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
	} else {
		$hash = '';
		$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
		$max = strlen($chars) - 1;
		for($i = 0; $i < $length; $i++) {
			$hash .= $chars[mt_rand(0, $max)];
		}
	}
	return $hash;
}
//短信接口end
   
    

	
}