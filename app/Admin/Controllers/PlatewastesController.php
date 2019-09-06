<?php

namespace App\Admin\Controllers;

use App\Models\Platewaste;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PlatewastesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Platewaste';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Platewaste);

        $grid->column('id', __('Id'));
        $grid->column('date', __('Date'));
        $grid->column('hotel_id', __('Hotel id'));
        $grid->column('weight_kg', __('Weight kg'));
        $grid->column('people', __('People'));
        $grid->column('type', __('Type'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Platewaste::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('date', __('Date'));
        $show->field('hotel_id', __('Hotel id'));
        $show->field('weight_kg', __('Weight kg'));
        $show->field('people', __('People'));
        $show->field('type', __('Type'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Platewaste);

        $form->datetime('date', __('Date'))->default(date('Y-m-d H:i:s'));
        $form->number('hotel_id', __('Hotel id'));
        $form->number('weight_kg', __('Weight kg'));
        $form->number('people', __('People'));
        $form->number('type', __('Type'));

        return $form;
    }
}
