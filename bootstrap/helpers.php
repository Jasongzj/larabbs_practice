<?php


/**
 * 将当前请求的路由名称转换为CSS类名称
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}

function model_admin_link($title, $model)
{
    return model_link($title, $model, 'admin');
}

/**
 * 返回模型链接
 * @param  [type] $title  链接名称
 * @param  [type] $model  链接对应模型实例
 * @param  string $prefix 前缀
 * @return string         模型链接
 */
function model_link($title, $model, $prefix = '')
{
    // 获取数据模型的复数蛇形命名
    $model_name = model_plural_name($model);

    // 初始化前缀
    $prefix = $prefix ? "/$prefix/" : '/';

    // 使用站点 URL 拼接全量 URL
    $url = config('app.url') . $prefix . $model_name . '/' . $model->id;

    // 拼接 HTML A 标签并返回
    return '<a href="' . $url . '" target="_blank">' . $title . '</a>';
}

function model_plural_name($model)
{
    // 从实体从获取完整类名，如：App\Models\User
    $full_class_name = get_class($model);

    // 获取基础类名，如'App\Models\User' 会得到 'User'
    $class_name = class_basename($full_class_name);

    // 蛇形命名，如 'User' => 'user', 'FooBar' => 'foo_bar'
    $snake_case_name = snake_case($class_name);

    // 获取子串的复数形式，如 'user' => 'users'
    return str_plural($snake_case_name);
}