<?php

namespace App\Admin\Controllers;

use App\Models\Headitem;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HeadItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Headitem';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        // dd($uri);
        $grid = new Grid(new Headitem());

        $grid->column('id', __('Id'));
        $grid->column('judul', __('Judul'));
        $grid->column('lokasi', __('Lokasi'));
        $grid->column('pembuatan', __('Pembuatan'));
        $grid->column('img_headline', __('Img headline'))->display(
            function ($value) 
            {        
                $uri=url('FSP/Admin/');
                return "<img src='$uri/$value' style='max-width: 150px;max-height: 150px;'>";
            }
        );
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
        $show = new Show(Headitem::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('judul', __('Judul'));
        $show->field('lokasi', __('Lokasi'));
        $show->field('pembuatan', __('Pembuatan'));
        $show->field('img_headline', __('Img headline'));
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
        $form = new Form(new Headitem());

        $form->textarea('judul', __('Judul'));
        $form->textarea('lokasi', __('Lokasi'));
        $form->textarea('pembuatan', __('Pembuatan'));
        // $form->textarea();
        $form->image('img_headline', __('Img headline') );

        return $form;
    }
}
