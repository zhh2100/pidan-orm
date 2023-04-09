<?php
namespace pidan\facade;

use pidan\Facade;

/**
 * @see \pidan\DbManager
 * @mixin \pidan\DbManager
 */
class Db extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'pidan\DbManager';
    }
}
