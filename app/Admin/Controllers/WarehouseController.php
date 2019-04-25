<?php

namespace App\Admin\Controllers;

use App\Models\Warehouse;
use App\Models\carName;
use App\Models\carType;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class WarehouseController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('仓库')
            ->description('列表')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('详情')
            ->description('列表')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Warehouse);

        $grid->id('Id');
        $grid->carNames_id("汽车品牌")->display(function($carNames_id){
            $name=carName::find($carNames_id)->Name;
            return $name;
        });
        $grid->carTypes_id("汽车型号")->display(function($carTypes_id){
            $name=carType::find($carTypes_id)->carType;
            return $name;
        });
        $grid->image_url('图片地址');
        $grid->number('库存');
        $grid->price('价格');
        $grid->created_at('创建时间');
        $grid->updated_at('更新时间');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Warehouse::findOrFail($id));

        $show->id('Id');
        $show->carNames_id('汽车品牌')->as(function ($carNames_id){
             return carName::findOrFail($carNames_id)->Name;
        });
        $show->carTypes_id('汽车型号')->as(function ($carTypes_id){
            return carType::findOrFail($carTypes_id)->carType;
        });
        $show->image_url('照片路径');
        $show->number('库存');
        $show->price('价格');
        $show->created_at('创建时间');
        $show->updated_at('更新时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Warehouse);

        $form->text('carNames_id', 'CarNames id');
        // $form->text('carTypes_id', 'CarTypes id')->value('**')->readonly();
        $form->text('carTypes_id', 'CarTypes id');
        // $form->text('image_url', 'Image url');
        $form->image('image_url')->move('/images')->uniqueName();
        $form->number('number', 'Number');
        $form->number('price', 'Price');

        return $form;
    }
}
