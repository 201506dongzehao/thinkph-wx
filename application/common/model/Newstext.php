<?php

namespace app\common\model;

use think\Model;
use traits\model\SoftDelete;

class Newstext extends Model
{
    protected $table = 'newstext'; //当前操作的数据表的名称
    protected $autoWriteTimestamp= 'datetime';//使用 timestopm类型
    protected $createTime = 'create_time';//插入记录时，自动维护字段
    protected $updateTime = 'update_time';//更新记录时，自动维护字段
    protected $deleteTime = 'delete_time';//软删除字段,时间戳
    //引入软删除
    use SoftDelete;
}
