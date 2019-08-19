<?php

namespace App\Admin\Controllers;

use App\Goods;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Goods';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Goods);

        $grid->column('goods_id', __('商品id'));
        $grid->column('goods_name', __('商品名称'));
        $grid->column('goods_discount', __('商品折扣'));
        $grid->column('goods_desc', __('商品描述'));
        $grid->column('goods_address', __('生产地址'));
        $grid->column('goods_addtime', __('商品添加时间'));
        $grid->column('goods_img', __('商品图片'))->image();
        $grid->column('goods_sells', __('售卖件数'));
        $grid->column('goods_new', __('是否新品'));
        $grid->column('goods_hot', __('是否热卖'));
        $grid->column('goods_business', __('商家'));

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
        $show = new Show(Goods::findOrFail($id));

        $show->field('goods_id', __('商品id'));
        $show->field('goods_name', __('商品名称'));
        $show->field('goods_discount', __('商品折扣'));
        $show->field('goods_desc', __('商品描述'));
        $show->field('goods_address', __('生产地址'));
        $show->field('goods_addtime', __('商品添加时间'));
        $show->field('goods_img', __('商品图片'));
        $show->field('goods_sells', __('卖件数'));
        $show->field('goods_new', __('是否新品'));
        $show->field('goods_hot', __('是否热卖'));
        $show->field('goods_business', __('商家'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Goods);

        $form->text('goods_name', __('商品名称'));
        $form->text('goods_discount', __('商品折扣'));
        $form->text('goods_desc', __('商品描述'));
        $form->text('goods_address', __('生产地址'));
        $form->number('goods_addtime', __('商品添加时间'));
        $form->image('goods_img', __('商品图片'))->uniqueName();
        $form->text('goods_sells', __('卖件数'));
        $form->number('goods_new', __('是否新品'));
        $form->number('goods_hot', __('是否热卖'));
        $form->text('goods_business', __('商家'));

        return $form;
    }
}
