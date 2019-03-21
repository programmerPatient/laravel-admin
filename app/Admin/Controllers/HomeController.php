<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;//用来实现内容区的布局
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {

        return $content
           ->header('填写页面头标题')//填写页面头标题
           ->description('填写页面描述小标题...')//填写页面描述小标题
            ->row(Dashboard::title())//`row`是`body`方法的别名用来添加页面内容
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
           });
        // return redirect('admin/users');
    }
}
