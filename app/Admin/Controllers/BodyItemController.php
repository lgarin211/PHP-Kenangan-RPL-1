<?php

namespace App\Admin\Controllers;

use App\Models\Bodyitem;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class BodyItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Bodyitem';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Bodyitem());

        $grid->column('id', __('Id'));
        $grid->column('body_judul', __('Body judul'));
        $grid->column('deskripsi', __('Deskripsi'));
        $grid->column('img', __('Img'));
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
        $show = new Show(Bodyitem::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('body_judul', __('Body judul'));
        $show->field('deskripsi', __('Deskripsi'));
        $show->field('img', __('Img'));
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
        $data=DB::table('headitems')->get();
        $a=array();
        foreach ($data as $key => $value) {
            $a+=array($value->id => $value->judul);
            // dd($a);
        }
        // dd($a);

        $form = new Form(new Bodyitem());

        $form->select('id_head', __('id_head'))
        ->options($a);
        $form->textarea('body_judul', __('Body judul'));
        $form->textarea('deskripsi', __('Deskripsi'));
        $form->image('img', __('Img') );

        return $form;
    }
}
