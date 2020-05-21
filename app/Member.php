<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //定义模型关联的数据表
    protected $table = 'member';
    //定义主键
    protected $primaryKey = 'id';
    //定义禁止操作时间
    public $timestamps = false;
    //设置允许写入的数据字段（数组）
    protected $fillable = ['username', 'password', 'todo'];
}
