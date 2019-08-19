<?php

namespace App\Admin\Controllers;

use App\SkuModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\SkuModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SkuModel);

        $grid->column('s_id', __('skuid'));
        $grid->column('sku_num', __('编号'));
        $grid->column('goods_id', __('商品id'));
        $grid->column('sku_name', __('sku名称'));
        $grid->column('sku_price', __('Sku价格'));
        $grid->column('sku_goods_repertory', __('库存'));
        $grid->column('sku_goods_img', __('照片'))->image();
        $grid->column('created_at', __('添加时间'));
        $grid->column('updated_at', __('修改时间'));
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
        $show = new Show(SkuModel::findOrFail($id));

        $show->field('s_id', __('S id'));
        $show->field('sku_num', __('Sku num'));
        $show->field('goods_id', __('Goods id'));
        $show->field('sku_name', __('sku名称'));
        $show->field('sku_price', __('Sku price'));
        $show->field('sku_goods_repertory', __('Sku goods repertory'));
        $show->field('sku_goods_img', __('Sku goods img'));
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
        $form = new Form(new SkuModel);

        $form->text('sku_num', __('编号'));
        $form->text('goods_id', __('商品id'));
        $form->text('sku_name', __('sku名称'));
        $form->text('sku_price', __('商品价格'));
        $form->text('sku_goods_repertory', __('库存'));
        $form->image('sku_goods_img', __('照片'))->uniqueName();
        return $form;
    }
}
