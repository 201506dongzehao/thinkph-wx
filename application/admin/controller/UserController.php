<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/5 0005
 * Time: 19:30
 */

namespace app\admin\controller;

use app\common\model\BlackList;
use app\common\model\UserList;
use EasyWeChat\Foundation\Application;
use think\Controller;
use think\Request;

class UserController extends Controller
{
    private $options = [
        'debug'     => true,
        'app_id'  => 'wxa358fcbdd9a98c6f',         // AppID
        'secret'  => '595e3f54911afeae8a81737df23edc58',     // AppSecret
        'token'  => 'dzhao',
    ];
    //显示关注用户
    public function index()
    {
        $this->userlist();
        $pages = UserList::paginate(8);
        $this->assign('pages',$pages);
        return $this->fetch();
    }
    //获取所有关注用户
    public function userlist()
    {
        $app = new Application($this->options);
        $userService = $app->user;
        //获取json数据
        $userlist = $userService->lists($nextOpenId = null);
//        return $userlist->count;exit;
        $allopenid = json_decode($userlist,true);
        //循环获取用户信息
        for ($i = 0; $i < $userlist->count; $i++){
            $openid = $allopenid["data"]["openid"][$i];
            $user = $userService->get($openid);
//            dump($user);exit;
            $userlistall = new UserList();
            $userlistall->nickname = $user["nickname"];
            $userlistall->openid = $user["openid"];
            $userlistall->city = $user["country"].$user["city"];
            $conditions = [];
            $conditions['openid'] = $userlistall->openid;
            $userlists = $userlistall->where($conditions)->find();
//            dump($userlists);exit;
            if ($userlists) {
                continue;
            } else {
                $userlistall->save();
            }
        }
    }
    //拉黑用户
    public function black()
    {
        $id = input('id'); // 获取某个post变量
        $app = new Application($this->options);
        $userService = $app->user;
        //获取到拉黑用户的信息
        $info = UserList::get($id);
        $openid = $info->openid;
        if ($userService->batchBlock([$openid])){
            $blacklist = new BlackList();
            $blacklist->nickname = $info->nickname;
            $blacklist->openid = $info->openid;
            $blacklist->city = $info->city;
            $blacklist->save();
            $this->success('拉黑成功','http://dzhao.wywwwxm.com/thinkphp/public/index.php/admin/user/blacklist');
        }

    }
    //显示用户黑名单
    public function blacklist()
    {
        $app = new Application($this->options);
        $app->user->blacklist();
        $pages = BlackList::paginate(8);
        $this->assign('pages',$pages);
        return $this->fetch();
    }
    //取消拉黑
    public function back()
    {
        $id = input('id');
        $app = new Application($this->options);
        $black = BlackList::get($id);
        $openid = $black->openid;
        if($app->user->batchUnblock([$openid])){
            BlackList::destroy($id);
            $this->success('取消拉黑','http://dzhao.wywwwxm.com/thinkphp/public/index.php/admin/user/index');
        }
    }
}