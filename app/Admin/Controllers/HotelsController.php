<?php

namespace App\Admin\Controllers;

use APP\Models\Hotel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HotelsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'APP\Models\Hotel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Hotel);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('star', __('Star'));
        $grid->column('room_number', __('Room number'));
        $grid->column('description', __('Description'));
        $grid->column('location', __('Location'));
        $grid->column('user_id', __('User id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('country', __('Country'));
        $grid->column('style', __('Style'));
        $grid->column('invitation_code', __('Invitation_Code'));

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
        $show = new Show(Hotel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('star', __('Star'));
        $show->field('room_number', __('Room number'));
        $show->field('description', __('Description'));
        $show->field('location', __('Location'));
        $show->field('user_id', __('User id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('country', __('Country'));
        $show->field('style', __('Style'));
        $show->field('invitation_code', __('Invitation_Code'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        do {
			//generate a random string using Laravel's str_random helper
			$token = str_random();
		} //check if the token already exists and if it does, try again
		while (Hotel::where('invitation_code', $token)->first());

        $form = new Form(new Hotel);

        $form->text('name', __('Name'));
        $form->number('star', __('Star'));
        $form->number('room_number', __('Room number'));
        $form->text('description', __('Description'));
        $form->text('location', __('Location'));
        $form->number('user_id', __('User id'));
        $form->text('country', __('Country'));
        $form->text('style', __('Style'));
        $form->text('invitation_code', __('Invitation_Code'))->value($token);

        return $form;
    }
}
