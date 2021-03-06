    var arrs = {
        goods: [
            {"name":"商品列表","url":"/shop/goods/index"},
            {"name":"用户评价","url":"/shop/goods/commentlist"}
        ],
        orders: [
            {"name":"订单列表","url":"/shop/orders/index"},
            {"name":"纠纷列表","url":"/shop/orders/dispute"},
            {"name":"取件单列表","url":"/shop/orders/takelist"}
        ],
        store: [
            {"name":"店铺信息","url":"/shop/store/index"},
            {"name":"店铺图片设置","url":"/shop/store/setimg"},
            {"name":"优惠券管理","url":"/shop/store/couponindex"},

        ],
        account: [
            {"name":"账户信息","url":"/shop/account/realname"},
            {"name":"账单列表","url":"/shop/account/index"},
            {"name":"资金列表","url":"/shop/account/money"},
            {"name":"账户解冻","url":"/shop/account/thawing"}
        ],
        datas: [

            {"name":"订单统计","url":"/shop/datas/index"},
            {"name":"销售统计","url":"/shop/datas/sale"}
        ]
    };
    var url = location.href.split("/");

    var arr = arrs[url[4]];

    var str = `<div class="logo"></div><ul class="aside-list">`;
    if(arr){
        arr.forEach(function (val,index) {
            str+=`<li href1="${val.url}">
                    <div class="col-box"></div> 
                    <a href="${val.url}" class="router-link-exact-active router-link-active">${val.name}</a>
                </li> `;
        });
        str+="</ul>"
        document.querySelector(".aside").innerHTML=str;
    }
