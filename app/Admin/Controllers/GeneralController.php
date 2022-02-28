<?php

namespace App\Admin\Controllers;

use App\Models\General;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GeneralController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'General';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new General());

        $grid->column('id', __('Id'));
        $grid->column('key', __('Key'));
        $grid->column('grub', __('Grub'));
        $grid->column('value1', __('Value1'));
        $grid->column('value3', __('Value3'));
        $grid->column('value2', __('Value2'));
        $grid->column('value4', __('Value4'));
        $grid->column('help', __('Help'));
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
        $show = new Show(General::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('key', __('Key'));
        $show->field('grub', __('Grub'));
        $show->field('value1', __('Value1'));
        $show->field('value3', __('Value3'));
        $show->field('value4', __('Value4'));
        $show->field('value2', __('Value2'));
        $show->field('help', __('Help'));
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
        $form = new Form(new General());

        $form->textarea('key', __('Key'));
        $form->textarea('grub', __('Grub'));
        $form->textarea('value1', __('Value1'));
        $form->textarea('value3', __('Value3'));
        $form->textarea('value2', __('Value2'));
        $form->textarea('value4', __('Value4'));
        $form->textarea('help', __('Help'));

        return $form;
    }
}
