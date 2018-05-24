<?php
namespace Mobile\Controller;
use Think\Controller;
use Org\Util\String;
class IndexController extends CommonController {

    public function copyPageTwo(){
		$userid = session('userid');
		$dbu = M('user');
		$userInfo = $dbu->where('userid='.$userid)->find();
		$storeInfo = M('store')->where('uid='.$userid)->find();
		$leve=0;
		$is_top_id = M('group')->where('one_id='.$userid)->find();
		if($is_top_id){
			$leveT=1;
		}else{
			$parent_id = M('user')->where('userid='.$userid)->getField('parent_id');
			if($parent_id){
				$is_top_id = M('group')->where('one_id='.$parent_id)->find();
				if($is_top_id){
					$leveT=2;
				}else{
					$parent_idT = M('user')->where('userid='.$parent_id)->getField('parent_id');
					if($parent_idT){
						$is_top_id = M('group')->where('one_id='.$parent_idT)->find();
						if($is_top_id){
							$leveT=3;
						}
					}
				}
			}
		}
		$userInfo['levename']="普通会员";
		if($leveT==1){
			$userInfo['levename']="组长";
		}
		if($leveT==2){
			$userInfo['levename']="副组长";
		}
		if($leveT==3){
			$userInfo['levename']="组员";
		}
		$this->assign('storeInfo',$storeInfo);
		$this->assign('userInfo',$userInfo);
		$this->display();
	}
	public function index(){
		$userid = session('userid');
		$dbu = M('user');
		$userInfo = $dbu->where('userid='.$userid)->find();
		$storeInfo = M('store')->where('uid='.$userid)->find();
		$leve=0;
		$is_top_id = M('group')->where('one_id='.$userid)->find();
		if($is_top_id){
			$leve=1;
		}else{
			$parent_id = M('user')->where('userid='.$userid)->getField('parent_id');
			if($parent_id){
				$is_top_id = M('group')->where('one_id='.$parent_id)->find();
				if($is_top_id){
					$leve=2;
				}else{
					$parent_idT = M('user')->where('userid='.$parent_id)->getField('parent_id');
					if($parent_idT){
						$is_top_id = M('group')->where('one_id='.$parent_idT)->find();
						if($is_top_id){
							$leve=3;
						}
					}
				}
			}
		}
		$userInfo['levename']="普通会员";
		if($leve==1){
			$userInfo['levename']="组长";
		}
		if($leve==2){
			$userInfo['levename']="副组长";
		}
		if($leve==3){
			$userInfo['levename']="组员";
		}
		$this->assign('userInfo',$userInfo);
		$this->assign('storeInfo',$storeInfo);
		$this->display('copyPageTwo');
	}
	
	//注册页面
	public function user_register(){
	 	$userId = session('userid');
		$user = M('user');
		$userInfo = $user->where('userid='.$userId)->find();
		$account = $userInfo['account'];
		$this->assign('account',$account);
		$this->display();
	}
	
	//用户提交注册信息完成注册
	public function register(){
		$t=I('post.');
		if($t['provinceDataCode']==710000){
		    $t['city']="无";
		    $t['cityDataCode']=1;
		    $t['area']="无";
		    $t['areaDataCode']=1;
        }
        if($t['provinceDataCode']==810000){
            $t['area']="无";
            $t['areaDataCode']=1;
        }
        if($t['provinceDataCode']==820000){
            $t['area']="无";
            $t['areaDataCode']=1;
        }
		
		 if($t['upside_account']==""){
            $t['upside_account']=1;
        }
		foreach($t as $v){
			if($v == ''){
				echo "<script>alert('请确认输入完成');</script>";
                echo "<script>javascript:history.back(-1);</script>";die;
            }
		}
		$account = I('post.account');
		$username = I('post.username');
		$identity_card = I('post.identity_card');
		$phone = I('post.phone');
		$parent_account = I('post.parent_account');
		$password = I('post.password');
		$passwordT = I('post.passwordT');
		$paypassword = I('post.paypassword');
		$paypasswordT = I('post.paypasswordT');
		$province = I('post.province');
		$provinceDataCode = I('post.provinceDataCode');
		$city = I('post.city');
		$cityDataCode = I('post.cityDataCode');
		$area = I('post.area');
		$areaDataCode = I('post.areaDataCode');
		$upside_account = I('post.upside_account');
        $upside_id="";
        if($upside_account){
            $upside_id = M('user')->where("account='".$upside_account."'")->getField('userid');
            if(!$upside_id){
                echo "<script>alert('分组上级账号不存在，请重新填写');</script>";
                echo "<script>javascript:history.back(-1);</script>";die;
            }
        }
		
		$parent_id = M('user')->where("account='".$parent_account."'")->getField('userid');
		if(!$parent_id){
			echo "<script>alert('推荐账号不存在');</script>";
            echo "<script>javascript:history.back(-1);</script>";die;
		}
		$report_money = M('store')->where('uid='.$parent_id)->getField('report_money');
		if($report_money<10000){
            echo "<script>alert('报单币不足');</script>";
            echo "<script>javascript:history.back(-1);</script>";die;
        }
        if($provinceDataCode==710000){
            $city=" ";
            $cityDataCode=1;
            $area=" ";
            $areaDataCode=1;
        }
        if($provinceDataCode==810000){
            $area=" ";
            $areaDataCode=1;
        }
        if($provinceDataCode==820000){
            $area=" ";
            $areaDataCode=1;
        }
		if(!$province||!$city||!$area){
            echo "<script>alert('请选择省市区');</script>";
            echo "<script>javascript:history.back(-1);</script>";die;
        }
        if(!$provinceDataCode||!$cityDataCode||!$areaDataCode){
            echo "<script>alert('系统错误，请重新注册');</script>";
            echo "<script>javascript:history.back(-1);</script>";die;
        }
		if($parent_id==null){
			echo "<script>alert('推荐人不存在');</script>";
            echo "<script>javascript:history.back(-1);</script>";die;
		}
		$is_account = M('user')->where("account='".$account."'")->find();
		if($is_account){
			echo "<script>alert('该用户名已经存在');</script>";
            echo "<script>javascript:history.back(-1);</script>";die;
		}
		$is_phone = M('user')->where("phone='".$phone."'")->find();
		if($is_phone){
			echo "<script>alert('该手机号已经存在');</script>";
            echo "<script>javascript:history.back(-1);</script>";die;
		}
//		$res=$this->validation_filter_id_card($identity_card);
//		if($res==false){
//			echo "<script>alert('身份证号格式不正确');</script>";
//            echo "<script>javascript:history.back(-1);</script>";die;
//		}
		if($password!=$passwordT){
			echo "<script>alert('两次输入的登陆密码不一致');</script>";
            echo "<script>javascript:history.back(-1);</script>";die;
		}
		if($paypassword!=$paypasswordT){
			echo "<script>alert('两次输入的安全密码不一致');</script>";
            echo "<script>javascript:history.back(-1);</script>";die;
		}
		
		//=============登录密码加密==============
        $salt= substr(md5(time()),0,3);
        $password=md5(md5(trim($password)).$salt);
        

        //=============安全密码加密==============
        $two_salt= substr(md5(time()),0,3);
        $two_password=md5(md5(trim($paypassword)).$two_salt); 
		
		$data['account'] = $account;
		$data['username'] = $username;
		$data['identity_card'] = $identity_card;
		$data['phone'] = $phone;
		$data['recommend_id'] = $parent_id;
		$data['salt'] = $salt;
		$data['password'] = $password;
		$data['safety_salt'] = $two_salt;
		$data['paypassword'] = $two_password;
		$data['lockuser'] = 1;
		$data['leve'] = 1;
		$data['time'] = time();
		$data['province']=$province;
		$data['province_code']=$provinceDataCode;
		$data['city']=$city;
		$data['city_code']=$cityDataCode;
		$data['area']=$area;
		$data['area_code']=$areaDataCode;
		$data['upside_id']=$upside_id;
		$res = M('user')->data($data)->add();

		$userid = M('user')->where("account='".$account."'")->getField('userid');

		$record['uid'] = $userid;
		$rem = M('store')->data($record)->add();

		$information['uid']=$userid;
		$information['username']=$username;
		$information['account']=$account;
		$information['time']=time();
		$rec = M('registration_record')->data($information)->add();
		$sem = M('store')->where('uid='.$parent_id)->setDec('report_money',10000);
		if($res&&$rec&&$rem&&$sem){
		   /*$rom = M('store')->where('uid='.$parent_id)->setInc('gold',1000);
		    if($rom){
		        $nn['uid']=$parent_id;
		        $nn['money']=1000;
		        $nn['reason']="注册奖励";
		        $nn['time']=time();
		        M('bonus_record')->data($nn)->add();

		        $vv['uid']=$parent_id;
		        $vv['money']="+1000";
		        $vv['reason']="注册奖励";
		        $vv['time']=time();
		        M('getgold_record')->data($vv)->add();
            }*/
			
			
        }
		if($res&&$rem&&$rec){
			$this->sendmessage($account);
			echo "<script>alert('注册成功');location.href='".U('Index/copyPageTwo')."'</script>";
			exit();
		}else{
			echo "<script>alert('注册失败');location.href='".U('Index/copyPageTwo')."'</script>";
			exit();
		}
	}
	
	public function sendmessage($account) {
	  
	  $trade_code=$account;
	  $msg['code'] = $trade_code;
		$msg = json_encode($msg);
		
		$url = "http://api.sms.cn/sms/?ac=send&uid=sun2033539&pwd=c1d1e28244ca3b1293dd3bde4725409d&template=413118&mobile=13826666776&content=".$msg;		
		$info =  file_get_contents($url);
		$sns = iconv('GBK', 'UTF-8', $info);
		$sns = json_decode($sns,true);
     
    }
	
	//验证身份证
	function validation_filter_id_card($id_card){ 
	 	if(strlen($id_card)==18){ 
	 		return $this->idcard_checksum18($id_card); 
		}elseif((strlen($id_card)==15)){ 
	 		$id_card=$this->idcard_15to18($id_card); 
	 		return $this->idcard_checksum18($id_card); 
	 	}else{ 
	 		return false; 
	 	} 
	} 
	// 计算身份证校验码，根据国家标准GB 11643-1999 
	function idcard_verify_number($idcard_base){ 
		 if(strlen($idcard_base)!=17){ 
		 	return false; 
		 } 
		 //加权因子 
		 $factor=array(7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2); 
		 //校验码对应值 
		 $verify_number_list=array('1','0','X','9','8','7','6','5','4','3','2'); 
		 $checksum=0; 
		 for($i=0;$i<strlen($idcard_base);$i++){ 
		 	$checksum += substr($idcard_base,$i,1) * $factor[$i]; 
		 } 
		 $mod=$checksum % 11; 
		 $verify_number=$verify_number_list[$mod]; 
		 return $verify_number; 
	} 
	// 将15位身份证升级到18位 
	function idcard_15to18($idcard){ 
		 if(strlen($idcard)!=15){ 
		 	return false; 
		 }else{ 
		 // 如果身份证顺序码是996 997 998 999，这些是为百岁以上老人的特殊编码 
			 if(array_search(substr($idcard,12,3),array('996','997','998','999')) !== false){ 
				$idcard=substr($idcard,0,6).'18'.substr($idcard,6,9); 
			 }else{ 
				$idcard=substr($idcard,0,6).'19'.substr($idcard,6,9); 
			 } 
		 } 
		 $idcard=$idcard.$this->idcard_verify_number($idcard); 
		 return $idcard; 
	} 
	// 18位身份证校验码有效性检查 
	function idcard_checksum18($idcard){ 
		 if(strlen($idcard)!=18){ 
		 	return false; 
		 } 
		 $idcard_base=substr($idcard,0,17); 
		 if($this->idcard_verify_number($idcard_base)!=strtoupper(substr($idcard,17,1))){ 
		 	return false; 
		 }else{ 
		 	return true; 
		 } 
	}

	public function applyCar(){
	    $userid=session('userid');
	    $userInfo = M('user')->where('userid='.$userid)->find();
	    $condition['uid']=$userid;
	    $condition['status']=0;
	    $is_have=M('applycar')->where($condition)->find();
	    if($is_have){
            echo "<script>alert('已存在审核中订单，不可再次申请');location.href='".U('Index/copyPageTwo')."'</script>";
            exit();
        }
	    $data['uid']=$userid;
	    $data['username']=$userInfo['username'];
	    $data['phone']=$userInfo['phone'];
	    $data['account']=$userInfo['account'];
	    $data['time']=time();
	    $data['status']=0;
	    $res = M('applycar')->data($data)->add();
	    if($res){
			$this->sendmessageT();
            echo "<script>alert('申请成功');location.href='".U('Index/copyPageTwo')."'</script>";
            exit();
        }else{
            echo "<script>alert('申请失败');location.href='".U('Index/copyPageTwo')."'</script>";
            exit();
        }
    }
	
	public function sendmessageT() {
	  $userid = session('userid');
	  $account = M('user')->where('userid='.$userid)->getField('account');
	  $trade_code=$account;
	  $msg['code'] = $trade_code;
		$msg = json_encode($msg);
		
		$url = "http://api.sms.cn/sms/?ac=send&uid=sun2033539&pwd=c1d1e28244ca3b1293dd3bde4725409d&template=413119&mobile=13826666776&content=".$msg;		
		$info =  file_get_contents($url);
		$sns = iconv('GBK', 'UTF-8', $info);
		$sns = json_decode($sns,true);
     
    }
	
	public function helpdocument(){
		$helpdocument_list = M('helpintroduce')->where()->order('id desc')->select();
		$this->assign('helpdocument_list',$helpdocument_list);
		$this->display();
	}
}