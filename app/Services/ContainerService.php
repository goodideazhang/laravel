<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @date 2018/5/7 15:30
 */

namespace App\Services;


class ContainerService
{
    protected $bindings = [];

    /**
     * @param string $abstract 是要实例化类的抽象，他可以是类的全局名称，
     * 也可以是接口的全局名称，还可以是你给类起的一个名字，总之非常灵活。
     *
     * @param \Closure|string|null $concrete 描述一个类如何实例化的信息，它可以是一个返回一个类实例的匿名函数，
     * 也可以是一个可实例化类的全局名称，Container 会利用反射类自动创建其构造函数所需参数，
     * 并实例化这个类。
     *
     * @param bool $shared
     */
    public function bind($abstract, $concrete = null, $shared = false)
    {
        if (!$concrete instanceof \Closure) {
            $concrete = $this->getClosure($abstract, $concrete);//生成默认的闭包
        }
    }

    public function getClosure($abstract, $concrete)
    {
        return function ($container, $parameters = []) use ($abstract, $concrete) {
            if ($abstract == $concrete) {
                return $container->build($concrete);
            }

            return $container->make($concrete, $parameters);
        };
    }

    public function make(){

    }

}