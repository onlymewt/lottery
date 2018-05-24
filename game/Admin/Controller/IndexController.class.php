<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    //左侧主菜单
    public function backstageSammaryPage(){
		$sp_id = session('sp_user');
		$power = M('nzspuser')->where('sp_id='.$sp_id)->getField('power');
		$this->assign('power',$power);
        $sp_username = session('sp_name');
        $this->assign('sp_username',$sp_username);
        $this->display();
    }

    public function outlogin(){
        session(null);
        redirect(U(MODULE_NAME.'/Login/index'));
    }
	
		public function gameNotice(){
		$time = time();
		$now_date = date('Y-m-d', $time);
		$now_time = strtotime($now_date);
		$end_time = $now_time+86400;
		/*$condition['time'] = array('gt',$now_time);
		$condition['time'] = array('lt',$end_time);*/
		$condition['time'] = array(array('gt',$now_time),array('lt',$end_time));
		/*SELECT SUM(gold) FROM syd_store;
		SELECT SUM(report_money) FROM syd_store;
		SELECT SUM(buycar_money) FROM syd_store;
		SELECT SUM(bonus) FROM syd_store;
		SELECT SUM(frozen_money) FROM syd_store;*/
		
		$gold_sum = M('store')->where()->sum('gold');
		$report_money_sum = M('store')->where()->sum('report_money');
		$buycar_money_sum = M('store')->where()->sum('buycar_money');
		$bonus_sum = M('store')->where()->sum('bonus');
		$frozen_money_sum = M('store')->where()->sum('frozen_money');
		$transaction_money_sum = M('transaction')->where($condition)->sum('money');
		$withdraw_money_sum = M('withdraw')->where($condition)->sum('money');
		$add_user_sum = M('user')->where($condition)->count();
		$buycarmoney_count = M('getbuycarmoney_record')->where($condition)->count();
		$buycarmoney_sum = $buycarmoney_count*6000;
		$getgold_count = M('getgold_record')->where($condition)->count();
		$getgold_sum = $getgold_count*1000;
		$getbonus_count = M('getbonus_record')->where($condition)->count();
		$getbonus_sum = $getbonus_count*2000;
		$upsidemoney_sum = M('upside_record')->where($condition)->sum('money');
		$this->assign('gold_sum',$gold_sum);
		$this->assign('report_money_sum',$report_money_sum);
		$this->assign('buycar_money_sum',$buycar_money_sum);
		$this->assign('bonus_sum',$bonus_sum);
		$this->assign('frozen_money_sum',$frozen_money_sum);
		$this->assign('transaction_money_sum',$transaction_money_sum);
		$this->assign('withdraw_money_sum',$withdraw_money_sum);
		$this->assign('add_user_sum',$add_user_sum);
		$this->assign('buycarmoney_sum',$buycarmoney_sum);
		$this->assign('getgold_sum',$getgold_sum);
		$this->assign('getbonus_sum',$getbonus_sum);
		$this->assign('upsidemoney_sum',$upsidemoney_sum);
		
		/*dump($gold_sum);die;*/
		
		
		$this->display();
	}
	
	public function searchValuePage(){
		$starttime_date = I('post.starttime');
		$endtime_date = I('post.endtime');
		$starttime = strtotime($starttime_date);
		$endtime = strtotime($endtime_date);
		if($starttime>$endtime){
			echo "<script>alert('开始日期不能高于结束日期');</script>";
           echo "<script>javascript:history.back(-1);</script>";die;
		}
		/*$condition['time']=array('between',$starttime,$endtime);*/
		/*$condition['time'] = array('gt',$starttime);
		$condition['time'] = array('lt',$endtime);*/
		$condition['time'] = array(array('gt',$starttime),array('lt',$endtime));
		$transaction_money_sum = M('transaction')->where($condition)->sum('money');
		$withdraw_money_sum = M('withdraw')->where($condition)->sum('money');
		$add_user_sum = M('user')->where($condition)->count();
		$buycarmoney_count = M('getbuycarmoney_record')->where($condition)->count();
		$buycarmoney_sum = $buycarmoney_count*6000;
		$getgold_count = M('getgold_record')->where($condition)->count();
		$getgold_sum = $getgold_count*1000;
		$getbonus_count = M('getbonus_record')->where($condition)->count();
		$getbonus_sum = $getbonus_count*2000;
		$upsidemoney_sum = M('upside_record')->where($condition)->sum('money');
		$this->assign('transaction_money_sum',$transaction_money_sum);
		$this->assign('withdraw_money_sum',$withdraw_money_sum);
		$this->assign('add_user_sum',$add_user_sum);
		$this->assign('buycarmoney_sum',$buycarmoney_sum);
		$this->assign('getgold_sum',$getgold_sum);
		$this->assign('getbonus_sum',$getbonus_sum);
		$this->assign('upsidemoney_sum',$upsidemoney_sum);
		$this->display();
	}

}