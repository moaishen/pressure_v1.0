<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  //登录
  public function login(){
    //
  }

  //登出
  public function loginOut(){
    //
  }

  //验证码
  public function captchaVerifications(){
    //
/*    if (Request::getMethod() == 'POST')
    {
      $rules = ['captcha' => 'required|captcha'];
      $validator = Validator::make(Input::all(), $rules);
      if ($validator->fails())
      {
        echo '<p style="color: #ff0000;">Incorrect!</p>';
      }
      else
      {
        echo '<p style="color: #00ff30;">Matched :)</p>';
      }
    }*/

    $form = '<form method="post" action="captcha-test">';
    $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    $form .= '<p>' . captcha_img() . '</p>';
    $form .= '<p><input type="text" name="captcha"></p>';
    $form .= '<p><button type="submit" name="check">Check</button></p>';
    $form .= '</form>';
    return $form;

  }

  //session超时
  public function overTime(){
    //
  }

}
