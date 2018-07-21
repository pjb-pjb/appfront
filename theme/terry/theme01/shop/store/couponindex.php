<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;

?>


<style>
    .content {
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        padding-top: 8px;
    }

    .content .biaoti {
        height: 52px;
        font-size: 12px;
        line-height: 52px;
        font-weight: bolder;
    }

    .content .shuaixuan {
        height: 46px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
    }

    .sousuo {
        margin-top: 5px;
        width: 40px;
        height: 40px;
        background: url("/public/img/sousuo.png") no-repeat center center/100% auto;
    }

    .content .item {
        width: 100%;
        height: 50px;
    }

    .content .red {
        height: 35px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0px 8px #FD5E4E;
    }

    .content .green {
        height: 35px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0px 8px #37DF73;
        margin-right: 20px;
    }
</style>
<div data-v-4ce00a5c="" class="main-content">
    <div data-v-4ce00a5c="" style="width: 1064px; margin: 0px auto;">
        <div data-v-345ba354="" data-v-4ce00a5c="">
            <div data-v-345ba354="" class="content">
                <div data-v-345ba354="" class="biaoti">
                    <div data-v-345ba354="" aria-label="Breadcrumb" role="navigation" class="el-breadcrumb"><span
                                data-v-345ba354="" class="el-breadcrumb__item"><span role="link"
                                                                                     class="el-breadcrumb__inner is-link">店铺管理</span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                                data-v-345ba354="" class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                                         class="el-breadcrumb__inner"><span
                                        data-v-345ba354=""
                                        style="color: rgb(48, 211, 102); font-weight: bolder;">优惠券管理</span></span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span></div>
                </div>
                <div data-v-345ba354="" class="shuaixuan">
                    <ul data-v-345ba354="" style="width: 500px; display: flex; justify-content: space-between;">
                        <li data-v-345ba354="">
                            <div data-v-345ba354="" class="el-select" style="width: 200px; display: inline-block;">
                                <!---->
                                <div class="el-input el-input--suffix"><!----><input type="text" autocomplete="off"
                                                                                     placeholder="请输入优惠券状态"
                                                                                     readonly="readonly"
                                                                                     class="el-input__inner">
                                    <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i
                                                    class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----></span>
                                        <!----></span><!----></div>
                                <div class="el-select-dropdown el-popper" style="display: none; min-width: 200px;">
                                    <div class="el-scrollbar" style="">
                                        <div class="el-select-dropdown__wrap el-scrollbar__wrap"
                                             style="margin-bottom: -17px; margin-right: -17px;">
                                            <ul class="el-scrollbar__view el-select-dropdown__list"><!---->
                                                <li data-v-345ba354="" class="el-select-dropdown__item"><span>1</span>
                                                </li>
                                                <li data-v-345ba354="" class="el-select-dropdown__item"><span>2</span>
                                                </li>
                                                <li data-v-345ba354="" class="el-select-dropdown__item"><span>3</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="el-scrollbar__bar is-horizontal">
                                            <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                        </div>
                                        <div class="el-scrollbar__bar is-vertical">
                                            <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                        </div>
                                    </div><!----></div>
                            </div>
                        </li>
                        <li data-v-345ba354="">
                            <div data-v-345ba354="" class="el-input" style="width: 200px;"><!----><input type="text"
                                                                                                         autocomplete="off"
                                                                                                         placeholder="请输入优惠券名称/关键字"
                                                                                                         class="el-input__inner">
                                <!----><!----><!----></div>
                        </li>
                        <li data-v-345ba354="">
                            <div data-v-345ba354="" class="sousuo"></div>
                        </li>
                    </ul>
                    <div data-v-345ba354=""><a data-v-345ba354="" href="#/ShopCouponAdd" class="">
                        <a href="<?= Yii::$service->url->geturl("/shop/store/addcoupon") ?>">
                            <button data-v-345ba354="" type="button" class="el-button green el-button--success is-round">
                                <span>添加优惠券</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div data-v-345ba354="" class="item">
                    <div data-v-345ba354=""
                         class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                         style="width: 100%;">
                        <div class="hidden-columns">
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                        </div>
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                   style="width: 1064px;">
                                <colgroup>
                                    <col name="el-table_5_column_29" width="50">
                                    <col name="el-table_5_column_30" width="200">
                                    <col name="el-table_5_column_31" width="139">
                                    <col name="el-table_5_column_32" width="135">
                                    <col name="el-table_5_column_33" width="135">
                                    <col name="el-table_5_column_34" width="135">
                                    <col name="el-table_5_column_35" width="135">
                                    <col name="el-table_5_column_36" width="135">
                                    <col name="gutter" width="0">
                                </colgroup>
                                <thead class="has-gutter">
                                <tr class="">
                                    <th colspan="1" rowspan="1"
                                        class="el-table_5_column_29   el-table-column--selection  is-leaf">
                                        <div class="cell"><label role="checkbox" class="el-checkbox"><span
                                                        aria-checked="mixed" class="el-checkbox__input"><span
                                                            class="el-checkbox__inner"></span><input type="checkbox"
                                                                                                     aria-hidden="true"
                                                                                                     class="el-checkbox__original"
                                                                                                     value=""></span>
                                                <!----></label></div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_30     is-leaf">
                                        <div class="cell">优惠券名称</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_31     is-leaf">
                                        <div class="cell">优惠金额</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_32     is-leaf">
                                        <div class="cell">消费金额</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_33     is-leaf">
                                        <div class="cell">开始时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_34     is-leaf">
                                        <div class="cell">结束时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_35     is-leaf">
                                        <div class="cell">优惠券状态</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_36     is-leaf">
                                        <div class="cell">操作</div>
                                    </th>
                                    <th class="gutter" style="width: 0px; display: none;"></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="el-table__body-wrapper is-scrolling-none">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                   style="width: 1064px;">
                                <colgroup>
                                    <col name="el-table_5_column_29" width="50">
                                    <col name="el-table_5_column_30" width="200">
                                    <col name="el-table_5_column_31" width="139">
                                    <col name="el-table_5_column_32" width="135">
                                    <col name="el-table_5_column_33" width="135">
                                    <col name="el-table_5_column_34" width="135">
                                    <col name="el-table_5_column_35" width="135">
                                    <col name="el-table_5_column_36" width="135">
                                </colgroup>
                                <tbody>
                                <?php foreach ($res as $v){ ?>
                                <tr class="el-table__row">
                                    <td class="el-table_5_column_29  el-table-column--selection">
                                        <div class="cell">
                                            <label role="checkbox" class="el-checkbox">
                                                <span aria-checked="mixed" class="el-checkbox__input">
                                                    <span class="el-checkbox__inner"></span>
                                                    <input type="checkbox" aria-hidden="true" class="el-checkbox__original" value="">
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="el-table_5_column_30  ">
                                        <div class="cell el-tooltip" style="width: 199px;"><?= $v["coupon_name"] ?></div>
                                    </td>
                                    <td class="el-table_5_column_31  ">
                                        <div class="cell el-tooltip" style="width: 138px;"><?= $v["discount"] ?></div>
                                    </td>
                                    <td class="el-table_5_column_32  ">
                                        <div class="cell el-tooltip" style="width: 134px;"><?= $v["conditions"] ?></div>
                                    </td>
                                    <td class="el-table_5_column_33  ">
                                        <div class="cell el-tooltip" title="<?= date("Y-m-d H:i:s",$v["created_at"]) ?>" style="width: 134px;"><?= date("Y-m-d H:i:s",$v["created_at"]) ?></div>
                                    </td>
                                    <td class="el-table_5_column_34  ">
                                        <div class="cell el-tooltip" title="<?= date("Y-m-d H:i:s",$v["expiration_date"]) ?>" style="width: 134px;"><?= date("Y-m-d H:i:s",$v["expiration_date"]) ?></div>
                                    </td>
                                    <td class="el-table_5_column_35  ">
                                        <div class="cell">
                                            <?php if($v["expiration_date"]>time()){?>
                                                <span data-v-345ba354="" style="color: rgb(54, 221, 124);">
                                                    有效
                                                </span>
                                            <?php }else{?>
                                                <span data-v-345ba354="" style="color: #ff4949;">
                                                    无效
                                                </span>
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td class="el-table_5_column_36  ">
                                        <div class="cell el-tooltip" style="width: 134px;">
                                            <button data-v-345ba354="" type="button" class="el-button el-button--text el-button--small">
                                                <span>编辑</span>
                                            </button>
                                            <span data-v-345ba354="" style="color: rgb(234, 235, 236);">|</span>
                                            <button data-v-345ba354="" type="button" class="el-button el-button--text el-button--small">
                                                <span><i data-v-345ba354="" class="el-icon-delete"></i></span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="el-table__column-resize-proxy" style="display: none;"></div>
                    </div>
                    <div data-v-345ba354="" style="position: relative;">
                        <div data-v-345ba354=""
                             style="width: 180px; position: absolute; right: 0px; bottom: 50px; display: flex; justify-content: space-between;">
                            <div data-v-345ba354="" style="display: flex;">
                                <div data-v-345ba354="" class="dian"></div>
                                总计<span data-v-345ba354=""
                                        style="color: rgb(61, 176, 255); font-weight: bolder;"><?= $num ?></span>记录
                            </div>
                            <div data-v-345ba354="" style="display: flex;">
                                <div data-v-345ba354="" class="dian" style="background: rgb(41, 201, 154);"></div>
                                分<span data-v-345ba354=""
                                       style="font-weight: bolder; color: rgb(41, 201, 154);"><?= $page ?></span>页
                            </div>
                        </div>
                        <div data-v-345ba354="" style="margin-top: 40px;">
                            <button data-v-345ba354="" type="button" class="el-button el-button--default"><!----><!----><span>全选</span>
                            </button>
                            <button data-v-345ba354="" type="button" class="el-button red el-button--danger is-round">
                                <!----><!----><span>批量删除</span></button>
                        </div>
                    </div>
                    <div data-v-345ba354="" style="width: 100%; position: relative;">
                        <div data-v-345ba354=""
                             style="font-size: 12px; position: absolute; bottom: 0px; right: 0px; display: flex; justify-content: space-between;">
                            <?php
                            echo LinkPager::widget([
                                'pagination' => $pagination,
                                'firstPageLabel' => '首页',
                                'lastPageLabel' => '尾页',

                                'nextPageLabel' => '>',
                                'prevPageLabel' => '<',
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>