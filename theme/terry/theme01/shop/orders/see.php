<style>
    .main-content .biaoti {
        height: 52px;
        font-size: 12px;
        line-height: 52px;
        font-weight: bolder;
    }

    .main-content .item {
        width: 100%;
    }

    .main-content .item .bottom {
        width: 100%;
    }

    .bottom .title {
        width: 100%;
        margin-top: 10px;
        line-height: 46px;
        font-size: 12px;
        padding-left: 22px;
        padding-bottom: 20px;
        box-sizing: border-box;

    }

    .bottom .col-box {
        width: 12px;
        height: 7px;
        border-radius: 5px;
        margin-top: 17px;
        margin-left: 10px;
        margin-right: 7px;
        background-color: #37e06f;
    }

    .bottom .title .shangpinbg {
        width: 56px;
        height: 56px;
        background: #BBDFF6;
        border-radius: 3px;
    }

    .bottom .blue {
        float: right;
        font-size: 12px;
        width: 60px;
        margin-top: 5px;
        height: 25px;
        background: #30B5FE;
        border: none;
        box-shadow: 0 0 8px #30B5FE;
        border-radius: 20px;
        outline: none;
        cursor: pointer;
    }

    .bottom .bottom_top {
        width: 100%;
        height: 42px;
        line-height: 42px;
        font-size: 18px;
        font-weight: bolder
    }

    .el-icon-edit {
        margin-left: 10px;
        font-size: 24px;
        text-align: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #3bacfe;
        line-height: 30px;
        box-shadow: 0 3px 8px #48A1FF;
    }

    table {
        font-size: 14px;
    }

    .el-step__head .el-step__line {
        border-color: #c0c4cc;
    }

    .el-step__head.is-finish .el-step__line {
        border-color: #409EFF;
    }
</style>
<div class="main-content">
    <div style="width: 1012px; margin: 0 auto;">
        <div data-v-2b6e6d92="" class="biaoti">
            <div data-v-2b6e6d92="" aria-label="Breadcrumb" role="navigation" class="el-breadcrumb"><span
                        data-v-2b6e6d92=""
                        class="el-breadcrumb__item"><span
                            role="link" class="el-breadcrumb__inner is-link">订单管理</span><span role="presentation"
                                                                                              class="el-breadcrumb__separator">·</span></span>
                <span data-v-2b6e6d92="" class="el-breadcrumb__item">
                    <a href="<?= Yii::$service->url->geturl("/shop/orders/index") ?>">
                        <span role="link" class="el-breadcrumb__inner">订单列表</span>
                    </a>
                        <span role="presentation" class="el-breadcrumb__separator">·</span>
                    </span>
                <span data-v-2b6e6d92="" class="el-breadcrumb__item" aria-current="page">
                        <span role="link" class="el-breadcrumb__inner">
                            <span data-v-2b6e6d92="" style="color: rgb(48, 211, 102); font-weight: bolder;">查看详情</span>
                        </span>
                        <span role="presentation" class="el-breadcrumb__separator">·</span>
                    </span>
            </div>
        </div>
        <div data-v-2b6e6d92="" class="item">
            <div data-v-2b6e6d92="" class="el-steps el-steps--horizontal" style="margin-bottom: 20px;">
                <div data-v-2b6e6d92="" class="el-step is-horizontal is-center"
                     style="flex-basis: 20%; margin-right: 0px;">
                    <div class="el-step__head <?= $res["order_status"] > -1 ? "is-finish" : "" ?>">
                        <div class="el-step__line" style="margin-right: 0px;"><i class="el-step__line-inner"
                                                                                 style="transition-delay: 0ms; border-width: 1px; width: 100%;"></i>
                        </div>
                        <div class="el-step__icon is-text"><!---->
                            <div class="el-step__icon-inner">1</div>
                        </div>
                    </div>
                    <div class="el-step__main">
                        <div class="el-step__title <?= $res["order_status"] > -1 ? "is-finish" : "" ?>">提交订单</div>
                        <?php if ($res["order_status"] > -1) { ?>
                            <div class="el-step__description is-finish"><?= date("Y-m-d H:i:s", $res[created_at]) ?></div>
                        <?php } ?>
                    </div>
                </div>
                <div data-v-2b6e6d92="" class="el-step is-horizontal is-center"
                     style="flex-basis: 20%; margin-right: 0px;">
                    <div class="el-step__head <?= $res["order_status"] > 0 ? "is-finish" : "" ?>">
                        <div class="el-step__line" style="margin-right: 0px;"><i class="el-step__line-inner"
                                                                                 style="transition-delay: 150ms; border-width: 1px; width: 100%;"></i>
                        </div>
                        <div class="el-step__icon is-text"><!---->
                            <div class="el-step__icon-inner">2</div>
                        </div>
                    </div>
                    <div class="el-step__main">
                        <div class="el-step__title <?= $res["order_status"] > 0 ? "is-finish" : "" ?>">支付订单</div>
                        <?php if ($res["order_status"] > 0) { ?>
                            <div class="el-step__description is-finish"><?= date("Y-m-d H:i:s", $res[paypal_order_datetime]) ?></div>
                        <?php } ?>
                    </div>
                </div>
                <div data-v-2b6e6d92="" class="el-step is-horizontal is-center"
                     style="flex-basis: 20%; margin-right: 0px;">
                    <div class="el-step__head <?= $res["order_status"] > 1 ? "is-finish" : "" ?>">
                        <div class="el-step__line" style="margin-right: 0px;"><i class="el-step__line-inner"
                                                                                 style="transition-delay: 300ms; border-width: 1px; width: 100%;"></i>
                        </div>
                        <div class="el-step__icon is-text">
                            <div class="el-step__icon-inner">3</div>
                        </div>
                    </div>
                    <div class="el-step__main">
                        <div class="el-step__title <?= $res["order_status"] > 1 ? "is-finish" : "" ?>">接单</div>
                        <?php if ($res["order_status"] > 1) { ?>
                            <div class="el-step__description is-finish"><?= date("Y-m-d H:i:s", $res[receipt_at]) ?></div>
                        <?php } ?>
                    </div>
                </div>
                <div data-v-2b6e6d92="" class="el-step is-horizontal is-center"
                     style="flex-basis: 20%; margin-right: 0px;">
                    <div class="el-step__head <?= $res["order_status"] > 2 ? "is-finish" : "" ?>">
                        <div class="el-step__line" style="margin-right: 0px;"><i class="el-step__line-inner"
                                                                                 style="transition-delay: 450ms; border-width: 0px; width: 0%;"></i>
                        </div>
                        <div class="el-step__icon is-text">
                            <div class="el-step__icon-inner">4</div>
                        </div>
                    </div>
                    <div class="el-step__main">
                        <div class="el-step__title <?= $res["order_status"] > 2 ? "is-finish" : "" ?>">确认送达</div>
                        <?php if ($res["order_status"] > 2) { ?>
                            <div class="el-step__description is-finish"><?= date("Y-m-d H:i:s", $res[confirm_at]) ?></div>
                        <?php } ?>
                    </div>
                </div>
                <div data-v-2b6e6d92="" class="el-step is-horizontal is-center"
                     style="flex-basis: 20%; max-width: 20%;">
                    <div class="el-step__head <?= $res["order_status"] > 3 ? "is-finish" : "" ?>">
                        <div class="el-step__line"><i class="el-step__line-inner"></i></div>
                        <div class="el-step__icon is-text">
                            <div class="el-step__icon-inner">5</div>
                        </div>
                    </div>
                    <div class="el-step__main">
                        <div class="el-step__title <?= $res["order_status"] > 3 ? "is-finish" : "" ?>">评价</div>
                        <?php if ($res["order_status"] > 3) { ?>
                            <div class="el-step__description is-finish"><?= date("Y-m-d H:i:s", $res[evaluate_at]) ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div data-v-2b6e6d92="" class="bottom">
                <div data-v-2b6e6d92="" class="bottom_top">
                    <div data-v-2b6e6d92="" class="col-box"></div>
                    <span data-v-2b6e6d92="" style="color: rgb(48, 163, 254);">基本</span>信息
                </div>
                <div data-v-2b6e6d92="" class="title">
                    <div data-v-2b6e6d92=""
                         class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                         style="width: 100%; font-size: 14px;">
                        <div class="hidden-columns">
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                        </div>
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header">
                                <colgroup>
                                    <col name="el-table_2_column_11" width="128">
                                    <col name="el-table_2_column_12" width="200">
                                    <col name="el-table_2_column_13" width="110">
                                    <col name="el-table_2_column_14" width="110">
                                    <col name="el-table_2_column_15" width="110">
                                    <col name="el-table_2_column_16" width="110">
                                    <col name="el-table_2_column_17" width="110">
                                    <col name="el-table_2_column_18" width="110">
                                    <col name="gutter" width="0">
                                </colgroup>
                                <thead class="has-gutter">
                                <tr style="font-size: 14px;color: #B1DBFE;">
                                    <th colspan="1" rowspan="1" class="el-table_2_column_11     is-leaf">
                                        <div class="cell">订单号</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_12     is-leaf">
                                        <div class="cell">购货人：信息|留言</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_13     is-leaf">
                                        <div class="cell">支付方式</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_14     is-leaf">
                                        <div class="cell">下单时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_15     is-leaf">
                                        <div class="cell">付款时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_16     is-leaf">
                                        <div class="cell">订单状态</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_17     is-leaf">
                                        <div class="cell">接单时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_18     is-leaf">
                                        <div class="cell">评价时间</div>
                                    </th>
                                    <th class="gutter" style="width: 0px; display: none;"></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="el-table__body-wrapper is-scrolling-none">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                   style="width:100%;">
                                <colgroup>
                                    <col name="el-table_2_column_11" width="128">
                                    <col name="el-table_2_column_12" width="200">
                                    <col name="el-table_2_column_13" width="110">
                                    <col name="el-table_2_column_14" width="110">
                                    <col name="el-table_2_column_15" width="110">
                                    <col name="el-table_2_column_16" width="110">
                                    <col name="el-table_2_column_17" width="110">
                                    <col name="el-table_2_column_18" width="110">
                                </colgroup>
                                <tbody style="font-size: 12px;color:#82898e">
                                <tr class="el-table__row">
                                    <td class="el-table_2_column_11  ">
                                        <div class="cell el-tooltip" title="<?= $res["increment_id"] ?>"><?= $res["increment_id"] ?></div>
                                    </td>
                                    <td class="el-table_2_column_12  ">
                                        <div class="cell el-tooltip" title="<?= $res["order_remark"] ?>"><?= $res["order_remark"] ?></div>
                                    </td>
                                    <td class="el-table_2_column_13  ">
                                        <div class="cell el-tooltip" title="<?= $res["payment_method"] ?>"><?= $res["payment_method"] ?></div>
                                    </td>
                                    <td class="el-table_2_column_14  ">
                                        <div class="cell el-tooltip" title="<?= date("Y-m-d H:i:s", $res[created_at]) ?>">
                                            <?php if ($res[created_at]) { ?>
                                                <?= date("Y-m-d H:i:s", $res[created_at]) ?>
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_15  ">
                                        <div class="cell el-tooltip" title="<?= date("Y-m-d H:i:s", $res[created_at]) ?>">
                                            <?php if ($res[paypal_order_datetime]) { ?>
                                                <?= date("Y-m-d H:i:s", $res[paypal_order_datetime]) ?>
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_16  ">
                                        <div class="cell el-tooltip" title="<?php
                                        $arr = ["待支付", "待接单", "待确认", "待评价", "已完成", "已退单"];
                                        echo $arr[$res["order_status"]];
                                        ?>"><?php
                                            $arr = ["待支付", "待接单", "待确认", "待评价", "已完成", "已退单"];
                                            echo $arr[$res["order_status"]];
                                            ?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_17  ">
                                        <div class="cell el-tooltip" title="<?= date("Y-m-d H:i:s", $res[receipt_at]) ?>">
                                            <?php if ($res[receipt_at]) { ?>
                                                <?= date("Y-m-d H:i:s", $res[receipt_at]) ?>
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_18  ">
                                        <div class="cell el-tooltip" title="<?= date("Y-m-d H:i:s", $res[evaluate_at]) ?>">
                                            <?php if ($res[evaluate_at]) { ?>
                                                <?= date("Y-m-d H:i:s", $res[evaluate_at]) ?>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="el-table__column-resize-proxy" style="display: none;"></div>
                    </div>
                </div>
            </div>
            <div data-v-2b6e6d92="" class="bottom">
                <div data-v-2b6e6d92="" class="bottom_top">
                    <div data-v-2b6e6d92="" class="col-box"></div>
                    <span data-v-2b6e6d92="" style="color: rgb(48, 163, 254);">收货人</span>信息
                    <!--                <i data-v-2b6e6d92="" class="el-icon-edit"></i>-->
                    <a href="<?= Yii::$service->url->getUrl('shop/orders/editeceivernfo?order_id=' . $res['order_id']) ?>">
                        <button data-v-2b6e6d92="" type="button" class="blue el-button--primary is-round">编辑
                        </button>
                    </a>
                </div>
                <div data-v-2b6e6d92="" class="title">
                    <div data-v-2b6e6d92=""
                         class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                         style="width: 100%;">
                        <div class="hidden-columns">
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                        </div>
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                   style="width: 100%;">
                                <colgroup>
                                    <col name="el-table_3_column_19" width="100">
                                    <col name="el-table_3_column_20" width="150">
                                    <col name="el-table_3_column_21" width="250">
                                    <col name="el-table_3_column_22" width="180">
                                    <col name="el-table_3_column_23" width="150">
                                    <col name="el-table_3_column_24" width="182">
                                    <col name="gutter" width="0">
                                </colgroup>
                                <thead class="has-gutter">
                                <tr style="font-size: 14px;color: #B1DBFE;">
                                    <th colspan="1" rowspan="1" class="el-table_3_column_19     is-leaf">
                                        <div class="cell">收货人</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_3_column_20     is-leaf">
                                        <div class="cell">手机号</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_3_column_21     is-leaf">
                                        <div class="cell">收货地址</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_3_column_22     is-leaf">
                                        <div class="cell">确认时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_3_column_23     is-leaf">
                                        <div class="cell">邮政编码</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_3_column_24     is-leaf">
                                        <div class="cell">电子邮件</div>
                                    </th>
                                    <th class="gutter" style="width: 0px; display: none;"></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="el-table__body-wrapper is-scrolling-none">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                   style="width:100%;">
                                <colgroup>
                                    <col name="el-table_3_column_19" width="100">
                                    <col name="el-table_3_column_20" width="150">
                                    <col name="el-table_3_column_21" width="250">
                                    <col name="el-table_3_column_22" width="180">
                                    <col name="el-table_3_column_23" width="150">
                                    <col name="el-table_3_column_24" width="182">
                                </colgroup>
                                <tbody style="font-size: 12px;color:#82898e">
                                <tr class="el-table__row">
                                    <td class="el-table_3_column_19  ">
                                        <div class="cell el-tooltip" title="<?= $res["customer_firstname"] ?>"><?= $res["customer_firstname"] ?></div>
                                    </td>
                                    <td class="el-table_3_column_20  ">
                                        <div class="cell el-tooltip" title="<?= $res["customer_telephone"] ?>"><?= $res["customer_telephone"] ?></div>
                                    </td>
                                    <td class="el-table_3_column_21  ">
                                        <div class="cell el-tooltip" title="<?= $res["customer_address_country"] . $res["customer_address_state"] . $res["customer_address_city"] . $res["customer_address_street1"] ?>"><?= $res["customer_address_country"] . $res["customer_address_state"] . $res["customer_address_city"] . $res["customer_address_street1"] ?></div>
                                    </td>
                                    <td class="el-table_3_column_22  ">
                                        <div class="cell  el-tooltip"
                                             title="<?= date("Y-m-d H:i:s", $res[confirm_at]) ?>">
                                            <?php if ($res[confirm_at]) { ?>
                                                <?= date("Y-m-d H:i:s", $res[confirm_at]) ?>
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td class="el-table_3_column_23  ">
                                        <div class="cell el-tooltip" title="<?= $res["customer_address_zip"] ?>"><?= $res["customer_address_zip"] ?></div>
                                    </td>
                                    <td class="el-table_3_column_24  ">
                                        <div class="cell el-tooltip" title="<?= $res["customer_email"] ?>"><?= $res["customer_email"] ?></div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="el-table__column-resize-proxy" style="display: none;"></div>
                    </div>
                </div>
            </div>
            <div data-v-2b6e6d92="" class="bottom">
                <div data-v-2b6e6d92="" class="bottom_top">
                    <div data-v-2b6e6d92="" class="col-box"></div>
                    <span data-v-2b6e6d92="" style="color: rgb(48, 163, 254);">商品</span>信息
                </div>
                <div data-v-2b6e6d92="" class="title">
                    <div data-v-2b6e6d92=""
                         class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                         style="width: 100%;">
                        <div class="hidden-columns">
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                        </div>
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                   style="width: 100%;">
                                <colgroup>
                                    <col name="el-table_5_column_31" width="230">
                                    <col name="el-table_5_column_32" width="142">
                                    <col name="el-table_5_column_33" width="160">
                                    <col name="el-table_5_column_34" width="160">
                                    <col name="el-table_5_column_35" width="160">
                                    <col name="el-table_5_column_36" width="160">
                                    <col name="gutter" width="0">
                                </colgroup>
                                <thead class="has-gutter">
                                <tr style="font-size: 14px;color: #B1DBFE;">
                                    <th colspan="1" rowspan="1" class="el-table_5_column_31     is-leaf">
                                        <div class="cell">商品名称【品牌】</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_32     is-leaf">
                                        <div class="cell">货号</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_33     is-leaf">
                                        <div class="cell">价格</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_34     is-leaf">
                                        <div class="cell">数量</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_35     is-leaf">
                                        <div class="cell el-tooltip">库存</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_36     is-leaf">
                                        <div class="cell el-tooltip">小计</div>
                                    </th>
                                    <th class="gutter" style="width: 0; display: none;"></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="el-table__body-wrapper is-scrolling-none">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                   style="width: 100%">
                                <colgroup>
                                    <col name="el-table_5_column_31" width="230">
                                    <col name="el-table_5_column_32" width="142">
                                    <col name="el-table_5_column_33" width="160">
                                    <col name="el-table_5_column_34" width="160">
                                    <col name="el-table_5_column_35" width="160">
                                    <col name="el-table_5_column_36" width="160">
                                </colgroup>
                                <tbody style="font-size: 12px;color:#82898e">
                                <?php foreach ($res["goodDatas"] as $v) { ?>
                                    <tr class="el-table__row">
                                        <td class="el-table_5_column_31  ">
                                            <div class="cell el-tooltip">
                                                <div data-v-2b6e6d92="" style="display: flex;align-items: center">
                                                    <div data-v-2b6e6d92="" class="shangpinbg">
                                                        <img src="">
                                                    </div>
                                                    <span data-v-2b6e6d92=""
                                                          style="margin-left: 10px;"><?= $v["name"] ?></span></div>
                                            </div>
                                        </td>
                                        <td class="el-table_5_column_32  ">
                                            <div class="cell el-tooltip" title="<?= $v["sku"] ?>"><?= $v["sku"] ?></div>
                                        </td>
                                        <td class="el-table_5_column_33  ">
                                            <div class="cell el-tooltip" title="<?= $v["price"] ?>"><?= $v["price"] ?></div>
                                        </td>
                                        <td class="el-table_5_column_34  ">
                                            <div class="cell el-tooltip" title="<?= $v["qty"] ?>"><?= $v["qty"] ?></div>
                                        </td>
                                        <td class="el-table_5_column_35  ">
                                            <div class="cell el-tooltip" title="<?= $v["kc"] ?>"><?= $v["kc"] ?></div>
                                        </td>
                                        <td class="el-table_5_column_36  ">
                                            <div class="cell el-tooltip" title="<?= $v["row_total"] ?>"><?= $v["row_total"] ?></div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="7">
                                        <div style="float:right;text-align: center;box-sizing: border-box;padding-right: 75px">
                                            <div style="color: #41b2fc;margin-bottom: 5px">合计</div>
                                            <span>
                                                <?= $res["subtotal"] ?>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table></div>
                        <div class="el-table__column-resize-proxy" style="display: none;"></div>
                    </div>
                </div>
            </div>
            <div data-v-2b6e6d92="" class="bottom">
                <div data-v-2b6e6d92="" class="bottom_top">
                    <div data-v-2b6e6d92="" class="col-box"></div>
                    <span data-v-2b6e6d92="" style="color: rgb(48, 163, 254);">费用</span>信息
                </div>
                <div data-v-2b6e6d92="" class="title">
                    <div data-v-2b6e6d92=""
                         class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                         style="width: 100%;">
                        <div class="hidden-columns">
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                            <div data-v-2b6e6d92=""></div>
                        </div>
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                   style="width: 933px;">
                                <colgroup>
                                    <col name="el-table_6_column_39" width="162">
                                    <col name="el-table_6_column_40" width="170">
                                    <col name="el-table_6_column_41" width="170">
                                    <col name="el-table_6_column_42" width="170">
                                    <col name="el-table_6_column_43" width="170">
                                    <col name="el-table_6_column_44" width="170">
                                    <col name="gutter" width="0">
                                </colgroup>
                                <thead class="has-gutter">
                                <tr style="font-size: 14px;color: #B1DBFE;">
                                    <th colspan="1" rowspan="1" class="el-table_6_column_39     is-leaf">
                                        <div class="cell">商品总金额</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_6_column_40     is-leaf">
                                        <div class="cell">折扣</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_6_column_41     is-leaf">
                                        <div class="cell">使用金币</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_6_column_42     is-leaf">
                                        <div class="cell">使用优惠券</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_6_column_43     is-leaf">
                                        <div class="cell">订单总金额</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_6_column_44     is-leaf">
                                        <div class="cell">应付总金额</div>
                                    </th>
                                    <th class="gutter" style="width: 0px; display: none;"></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="el-table__body-wrapper is-scrolling-none">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                   style="width: 100%;">
                                <colgroup>
                                    <col name="el-table_6_column_39" width="162">
                                    <col name="el-table_6_column_40" width="170">
                                    <col name="el-table_6_column_41" width="170">
                                    <col name="el-table_6_column_42" width="170">
                                    <col name="el-table_6_column_43" width="170">
                                    <col name="el-table_6_column_44" width="170">
                                </colgroup>
                                <tbody style="font-size: 12px;color:#82898e">
                                <tr class="el-table__row">
                                    <td class="el-table_6_column_39  ">
                                        <div class="cell el-tooltip" title="<?= $res["subtotal"] ?>"><?= $res["subtotal"] ?></div>
                                    </td>
                                    <td class="el-table_6_column_40  ">
                                        <div class="cell el-tooltip" title="<?= $res["discount_amount"] ?>"><?= $res["discount_amount"] ?></div>
                                    </td>
                                    <td class="el-table_6_column_41  ">
                                        <div class="cell el-tooltip" title="<?= $res["coin_num"] ?>"><?= $res["coin_num"] ?>个</div>
                                    </td>
                                    <td class="el-table_6_column_42  ">
                                        <div class="cell el-tooltip"><?php
                                                if(isset($res["discount"])){
                                                    echo "-" . $res["discount"];
                                                }
                                            ?></div>
                                    </td>
                                    <td class="el-table_6_column_43  ">
                                        <div class="cell el-tooltip"><?= $res["grand_total"] ?></div>
                                    </td>
                                    <td class="el-table_6_column_44  ">
                                        <div class="cell el-tooltip"><?= $res["grand_total"] - $res["subtotal_with_discount"] ?></div>
                                    </td>
                                </tr><!----></tbody>
                            </table><!----><!----></div><!----><!----><!----><!---->
                        <div class="el-table__column-resize-proxy" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>