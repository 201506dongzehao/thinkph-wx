<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14 0014
 * Time: 14:47
 */

namespace app\admin\controller;

use app\common\model\Question;
use think\Controller;

class OauthController extends Controller
{
    //用户问题保存到数据库
    public function question()
    {
        $question = new Question();
        $question->username=input('username');
        $question->sex=input('sex');
        $question->phone=input('phone');
        $question->buytime=input('buytime');
        $question->question=input('question');
        $question->number=input('number');
        $question->save();
//        dump($question);exit;
//        if($question->save()) {
//            //感谢页面
//            return 'thank you';
//        }
    }
    //后台显示用户问题
    public function show()
    {
        //获取分页数据
        $show = Question::paginate(8);
        $this->assign('show',$show);
        return $this->fetch();
    }
}