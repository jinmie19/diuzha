<?php
//decode by http://www.sucaihuo.com/
namespace app\home\validate; class Member extends Base { protected $rule = [ 'username|手机号' => 'require|max:25|min:4|unique:member|checkMobile:', 'password|密码' => 'require|min:6|confirm', 'password_confirm|确认密码' => 'require', 'captcha|验证码'=>'require|captcha' ]; protected $message = [ 'password.confirm' => '两次密码输入不一致' ]; protected $scene = [ 'login' => [ 'name'=>'require|max:25|min:4', 'password|密码' => 'require|min:6', 'captcha' ] ]; protected function checkEmail($email){ if (!check_email($email)) { return '邮箱格式不正确'; } return true; } }