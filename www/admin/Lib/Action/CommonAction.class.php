<?php

class CommonAction extends  Action{
	
	
	public function verify(){
		//导入验证码类
		import("ORG.Util.Image");
		
		/*
		 * 参数1：验证码长度，默认4
		 * 参数2：类型，0为字母，1为数字，2为大写字母，3为小写字母，4为中文
		 * 参数3：图片类型，默认png格式，若服务器没有开PNG，就改成其他格式
		 * 参数4：图片宽度（根据长度自动计算）
		 * 参数5：图片高度，默认22个像素
		 * 参数6：验证码保存在Session的名称 'verify'
		 */
		 
		Image::buildImageVerify(4,3,'png');//静态方法
		
		//Image::GBVerify();
		
	}
	public function filter($list){
    		
    	foreach($list as $key=>$value){	//文章标题过长时裁剪
			if(strlen($list[$key]['NewsTitle'])>80){
					$list[$key]['NewsTitle']=$this->cutString($list[$key]['NewsTitle'],0,20).'...';				
			}
		}
    }
      /**
     * @函数  cutString
     * @功能  字符串裁剪(仅适用于UTF-8)
     */ 
    public function cutString($str, $from, $len)
    {
        return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'.
                       '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s',
                       '$1',$str);
    }
}

?>