<?php
/**
 * Created by PhpStorm.
 * News: Administrator
 * Date: 2017/11/22 0022
 * Time: 15:37
 */

namespace app\admin\controller;
use app\common\model\Menu;
use think\Controller;
use EasyWeChat\Foundation\Application;
use think\Request;
use think\cURL;


class IndexController extends Controller
{
    private $options = [
        'debug'     => true,
        'app_id'  => 'wxa358fcbdd9a98c6f',         // AppID
        'secret'  => '595e3f54911afeae8a81737df23edc58',     // AppSecret
        'token'  => 'dzhao',
    ];
    public function index()
    {
        $app = new Application($this->options);
        // 获取 access token 实例
        $accessToken = $app->access_token; // EasyWeChat\Core\AccessToken 实例
        $token = $accessToken->getToken(); // token 字符串
        return $this->fetch();
    }
    public function createmine()
    {
        return $this->fetch();
    }
    public function docreate()
    {
//        $App = new Application($this->options);
//        $menu = $App->menu;
//        $request = Request::instance();
//        $test = $request->getInput('menu');
//        $mymenu = input('menu');
//        $json = json_encode($test,true);
//        $smenu = new Menu();
//        $smenu->menu = $mymenu;
//        $smenu->save();
//        dump($smenu->toArray());
//        dump($json);exit;
//        $contion = [];
//        $contion->menu = $smenu->menu;
//        $contion = Menu::where($contion)->select();
//        if ($contion){
//            $contion = Menu::where($contion)->select();
//            $buttons = [
//                $contion->toArray()
//            ];
//            dump($buttons);exit;
//            $menu->add($buttons);
//
//        }
//        $json = json_encode($mymenu,true);
//        dump($mymenu);exit;

    }
}