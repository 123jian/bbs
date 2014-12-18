<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function Index(){
        echo "000";
		$this->display();
    }
	public function Admin(){
        
		$this->display();
    }
}