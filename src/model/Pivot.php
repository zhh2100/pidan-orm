<?php
declare (strict_types = 1);

namespace pidan\model;

use pidan\Model;

/**
 * 多对多中间表模型类
 */
class Pivot extends Model
{

    /**
     * 父模型
     * @var Model
     */
    public $parent;

    /**
     * 是否时间自动写入
     * @var bool
     */
    protected $autoWriteTimestamp = false;

    /**
     * 架构函数
     * @access public
     * @param  array  $data 数据
     * @param  Model  $parent 上级模型
     * @param  string $table 中间数据表名
     */
    public function __construct(array $data = [], Model $parent = null, string $table = '')
    {
        $this->parent = $parent;

        if (is_null($this->name)) {
            $this->name = $table;
        }

        parent::__construct($data);
    }

}
