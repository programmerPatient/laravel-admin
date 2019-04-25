<?php

namespace App\Admin\Controllers;

use App\Models\carType;
use App\Models\carName;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class carTypeController extends Controller
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
            ->header('Index')
            ->description('description')
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
            ->header('Detail')
            ->description('description')
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
        $grid = new Grid(new carType);

        $grid->id('Id');
        // $grid->carNames_id('汽车名称')->carNames();
        $grid->carNames_id("汽车品牌")->display(function($carNames_id){
            $name=carName::find($carNames_id)->Name;
            return $name;
        });
        // $carName=carName::find($carName_id)->Name;
        // $grid->column('carName','汽车名称');
        $grid->carType('车型号');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

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
        $show = new Show(carType::findOrFail($id));

        $show->id('Id');
        $show->carNames_id('车名')->as(function ($carNames_id){
            return carName::findOrFail($carNames_id)->Name;
        });
        //$grid->carName_id('CarName id');
        // $show->carNames->carName;
        // $grid->column('carName.carName','汽车名称');
        $show->carType('汽车类型');
        $show->created_at('创建时间');
        $show->updated_at('更新时间');
        $show->panel()
        ->tools(function ($tools) {
            $tools->disableEdit();
            // $tools->disableList();
            $tools->disableDelete();
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new carType);

        $form->number('carName_id', 'CarName id');
        $form->text('carType', 'CarType');

        return $form;
    }
}
