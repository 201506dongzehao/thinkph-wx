<?php
/**
 * Created by PhpStorm.
 * News: Administrator
 * Date: 2017/11/27 0027
 * Time: 9:30
 */

namespace app\admin\controller;


use app\common\model\Image;
use app\common\model\News;
use app\common\model\Newstext;
use app\common\model\Voice;
use EasyWeChat\Foundation\Application;
use EasyWeChat\Message\Article;
use think\Controller;
use think\Request;

class NewsController extends Controller
{
    private $options = [
        'debug'     => true,
        'app_id'  => 'wxa358fcbdd9a98c6f',         // AppID
        'secret'  => '595e3f54911afeae8a81737df23edc58',     // AppSecret
        'token'  => 'dzhao',
    ];
    //显示素材管理
    public function material()
    {
        $app = new Application($this->options);
        $broadcast = $app->broadcast;
//        $broadcast->sendNews($mediaId);
        return $this->fetch();
    }
    //素材管理—图片
    public function photos()
    {
        $images = image::all();
        $this->assign("image",$images);
        return $this->fetch();
    }
    //上传图片
    public function uploadi(Request $request)
    {
        $file = request()->file('image');
        if ($file){
            //移动文件到指定目录下(public目录为根页面)
            $file=$file->move('uploads');
//            dump($file);exit;
            $image = new image();
            $image->image=$file->getpathName();
            $app = new Application($this->options);
            // 永久素材
            $material = $app->material;
            $result = $material->uploadImage("$image->image");
            $image->media_id=$result["media_id"];
//            dump($image->media_id);exit;
            if($image->save()){
                $this->success("成功!","http://dzhao.wywwwxm.com/thinkphp/public/index.php/admin/news/photos","","1");
            }
        }
    }
    //素材管理-声音
    public function voice()
    {
        $voices = voice::all();
        $this->assign("voice",$voices);
        return $this->fetch();
    }
    //上传声音
    public function uploadv()
    {
        $file = request()->file('voice');
        if ($file){
            //移动文件到指定目录下(public目录为根页面)
            $file=$file->move('uploads');
//            dump($file);exit;
            $voice = new Voice();
            $voice->image=$file->getpathName();
            $app = new Application($this->options);
            // 永久素材
            $material = $app->material;
            $result = $material->uploadVoice(" ");
            $voice->media_id=$result["media_id"];
//            dump($image->media_id);exit;
            if($voice->save()){
                $this->success("成功!","http://dzhao.wywwwxm.com/thinkphp/public/index.php/admin/news/photos","","1");
            }
        }
    }
    //显示图文消息
    public function newstext()
    {
        $images = Image::all();
        $this->assign("image",$images);
        return $this->fetch();
    }
    //保存图文消息到数据库
    public function ntsave()
    {
        $newstext = new Newstext();
        $newstext->abstract = input('abstract');
        $newstext->title = input('title');
        $newstext->content = input('content');
        $newstext->cover = input('mediaid');
//        dump($newstext->cover);exit;
//        if ($file) {
//            //移动文件到指定目录下(public目录为根页面)
//            $file = $file->move('uploads');
//             dump($file);exit;
//            $newstext->cover = $file->getpathName();
//        }
//        dump($newstext);exit;
        $result=$newstext->save();
        if ($result){
            $this->success("保存成功!",'http://dzhao.wywwwxm.com/thinkphp/public/index.php/admin/news/material');
        }
    }
    //保存到数据库并群发
    public function ntsavesent()
    {
        $newstext = new Newstext();
        $newstext->abstract = input('abstract');
        $newstext->title = input('title');
        $newstext->content = input('content');
        $newstext->cover = input('mediaid');
//        $file = request()->file('cover');
//        if ($file) {
//            //移动文件到指定目录下(public目录为根页面)
//            $file = $file->move('uploads');
////            dump($file);exit;
//            $newstext->cover = $file->getpathName();
//        }
        $result=$newstext->save();
//        if ($result){
//            $this->success("保存成功!",'/admin/news/newstext');
//        }
        $app = new Application($this->options);
        $material = $app->material;
        // 永久素材
//        $result = $material->uploadThumb("../public/static/images/y1.jpg");
        $mediaid=$result['media_id'];
        // 上传单篇图文
        $article = new Article([
            'title' => $newstext->title,
            'thumb_media_id' => $mediaid,
            "digest" => $newstext->abstract,
            "show_cover_pic" => 1,
            "content" => $newstext->content,
        ]);
        $media_Id=$material->uploadArticle($article);
        $n=ltrim("$media_Id","{\"media_id\":\"");
        $m=rtrim("$n","\"}");
//        return $m;
        $broadcast = $app->broadcast;
        $broadcast->send('news', "$m");
//        $broadcast = $App->broadcast;
//        $broadcast->sendNews($mediaId);

    }
}