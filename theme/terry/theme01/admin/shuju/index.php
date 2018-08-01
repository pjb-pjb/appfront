<div class="main-content">
    <div id="platdata">
        <div class="adminmannager-title">
            <span>数据中心</span>&nbsp;
            <span>·&nbsp;平台数据</span>
        </div>
        <!--<div class="ShopMannager-search">
            <div class="xiala">
                <select name="member-level" id="member-level"
                        style="width: 180px;background: #f3faff;margin-left:0;">
                    <option value="">最近24小时</option>
                </select>
                <div class="xialaimg1"></div>
            </div>-->
            <!--时间戳-->
            <!--<div class="block" style="float: left;line-height: 48px; margin-left: 20px;position: relative;">
                <span class="demonstration">时间段选择</span>
                <div class="timer">
                    <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                        <i class="el-input__icon el-range__icon el-icon-time"></i>
                        <input placeholder="开始日期" name="" class="el-range-input1 el-range-input" />
                        <span class="el-range-separator">至</span>
                        <input placeholder="结束日期" name="" class="el-range-input2 el-range-input"/>
                        <i class="el-input__icon el-range__icon el-icon-time"></i>
                    </div>
                </div>

            </div>
            <button>查询</button>-->
        <!--</div>-->
        <div class="tongji">
            <ul>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/huiyuan.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span><?php echo $huiyuannew['num']?></span><span>个</span>
                        </div>
                        <div>
                            <span>新增会员</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/shuisi.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span><?php echo $shuisiall['num']?></span><span>家</span>
                        </div>
                        <div>
                            <span>入驻水司</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/shangjia.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span><?php echo $shangjiaall['num']?></span><span>家</span>
                        </div>
                        <div>
                            <span>入驻商家</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/fangke.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span>2222</span>
                        </div>
                        <div>
                            <span>总访问量</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--会员增长趋势-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">会员新增趋势</div>
                <div class="platdata-headerright">
                    <ul style="cursor:pointer;">
                        <li class="week but1" onclick='cut(3,this)' uri='1'>七天</li>
                        <li class="month but1" onclick='cut(3,this)' uri='2'>一个月</li>
                        <li class="quarter but1" onclick='cut(3,this)' uri='3'>一个季度</li>
                        <li class="year but1" onclick='cut(3,this)' uri='4'>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <input type="text" style="width:100%;height:100%;text-align: center;border:none;" name="data" class="demo-input"
                                       placeholder="<?php echo date('Y-m-d h:i:s',time()),'-',date('Y-m-d h:i:s',time())?>" id="test10">
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:13px;" onclick='atime()'>确定</button>
                </div>
            </div>
            <div>
                <span>今日新增：<?php echo $huiyuannew['num'];?>&nbsp;&nbsp;&nbsp;&nbsp;会员总数：<?php echo $huiyuanall['num'];?></span>
            </div>
            <div id="mychart" >
            
            </div>
            <script type="text/javascript"> 
            //日期时间范围
            laydate.render({
                elem: '#test10'
                , type: 'datetime'
                , range: true
                , theme: "#3CACFE"
            });  
           function atime(){
               var aval=$('#test10').val();
               if(aval){ 
            	   $(".but1").css({"background":"#fff","color":"#99cafe"});
            	   var sta = aval.substring(0, 10); 
            	   var end = aval.substring(22,32);
            	   url="<?= Yii::$service->url->getUrl('admin/shuju/searchdate') ?>?type=3&sta="+sta+"&end="+end;
            	   $.get(url).done(function (data) {
                    	var row =JSON.parse(data); 
                        // 填入数据
        	             myChart.setOption({
        	          	   title: {
        	                   text: ''
        	               },
        	               tooltip: {},
        	               legend: {
        	                   data:['新增量']
        	               },
        	               xAxis: {
        	                   data:row.dat    /* row.dat */
        	               },
        	               yAxis: {},
        	               series: [{
        	                   name: '会员',
        	                   type: 'line',
        	                   data:row.num    /* row.num */
        	               }],
          	             toolbox: {

           	            	　　show: true,
           	            	　　feature: {

           	            	　　　　saveAsImage: {

           	            	　　　　show:true,

           	            	　　　　excludeComponents :['toolbox'],

           	            	　　　　pixelRatio: 2

           	            	　　　　}

           	            	　　}

           	            	}
        	           });
                    });
               }
           }        
           var myChart = echarts.init(document.getElementById('mychart'));
            // 异步加载数据
           var url="<?= Yii::$service->url->getUrl('admin/shuju/hours?hours=24&type=3') ?>";
           function cut(type,that){
        	   $('#test10').val("");
               $(".but1").css({"background":"#fff","color":"#99cafe"});
               $(that).css({"background":"#F3FAFF","color":"red"});
               if($(that).attr("uri")==1){
            	   url="<?= Yii::$service->url->getUrl("admin/shuju/week") ?>?type="+type;
               }else if($(that).attr("uri")==2){
            	   url="<?= Yii::$service->url->getUrl('admin/shuju/month') ?>?type="+type;
               }else if($(that).attr("uri")==3){
            	   url="<?= Yii::$service->url->getUrl('admin/shuju/quarter') ?>?type="+type;
               }else if($(that).attr("uri")==4){
            	   url="<?= Yii::$service->url->getUrl('admin/shuju/year') ?>?type="+type;
               }
               $.get(url).done(function (data) {
                  	var row =JSON.parse(data); 
                      // 填入数据
      	             myChart.setOption({
      	          	   title: {
      	                   text: ''
      	               },
      	               tooltip: {},
      	               legend: {
      	                   data:['新增量']
      	               },
      	               xAxis: {
      	                   data:row.dat    /* row.dat */
      	               },
      	               yAxis: {},
      	               series: [{
      	                   name: '会员',
      	                   type: 'line',
      	                   data:row.num    /* row.num */
      	               }],
        	             toolbox: {

         	            	　　show: true,

         	            	　　feature: {

         	            	　　　　saveAsImage: {

         	            	　　　　show:true,

         	            	　　　　excludeComponents :['toolbox'],

         	            	　　　　pixelRatio: 2

         	            	　　　　}

         	            	　　}

         	            	}
      	           });
                  });
           }
            $.get(url).done(function (data) {
            	var row =JSON.parse(data); 
                // 填入数据
	             myChart.setOption({
	          	   title: {
	                   text: ''
	               },
	               tooltip: {},
	               legend: {
	                   data:['新增量']
	               },
	               xAxis: {
	                   data:row.dat    /* row.dat */
	               },
	               yAxis: {},
	               series: [{
	                   name: '会员',
	                   type: 'line',
	                   data:row.num    /* row.num */
	               }],
	               toolbox: {

	  	            	　　show: true,
	  	            	　　feature: {

	  	            	　　　　saveAsImage: {

	  	            	　　　　show:true,

	  	            	　　　　excludeComponents :['toolbox'],

	  	            	　　　　pixelRatio: 2

	  	            	　　　　}

	  	            	　　}

	  	            	}
	           });
            });
//             // 使用刚指定的配置项和数据显示图表。
//             myChart.setOption(option);
            </script>
            <div class="chart-b">
                <button style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #30b7fe;margin-left: 0;">导出图片</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #33d892;margin-left: 0;">导出表格</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #f9c131;margin-left: 0;">导出报告</button>
                <div class="line-img">
                    <img src="/public/adminimg/line.png" alt="">
                    <span style="color:#a4adb5">销售额</span>
                </div>
            </div>
        </div>
        <!--水司增长趋势-->
        <div class="addofplatdata" style="float: left;">
       		 <div class="platdata-header">
                <div class="platdata-headername">水司新增趋势</div>
                <div class="platdata-headerright">
                    <ul>
                        <li class="week but1" onclick='cut2(1,this)' uri='1'>七天</li>
                        <li class="month but1" onclick='cut2(1,this)' uri='2'>一个月</li>
                        <li class="quarter but1" onclick='cut2(1,this)' uri='3'>一个季度</li>
                        <li class="year but1" onclick='cut2(1,this)' uri='4'>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <input type="text" style="width:100%;height:100%;text-align: center;border:none;" name="data" class="demo-input"
                                       placeholder="<?php echo date('Y-m-d h:i:s',time()),'-',date('Y-m-d h:i:s',time())?>" id="test11">
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:13px;" onclick='btime()'>确定</button>
                </div>
            </div>
            <div>
                <span>今日新增：<?php echo $shuisinew['num'];?>&nbsp;&nbsp;&nbsp;&nbsp;会员总数：<?php echo $shuisiall['num'];?></span>
            </div>
            <div id="mychart2" style="width:700px;height:400px;float:left;">
            </div>
            <script type="text/javascript">           
            //日期时间范围
            laydate.render({
                elem: '#test11'
                , type: 'datetime'
                , range: true
                , theme: "#3CACFE"
            });  
           function btime(){
               var aval=$('#test11').val();
               if(aval){ 
            	   $(".but1").css({"background":"#fff","color":"#99cafe"});
            	   var sta = aval.substring(0, 10); 
            	   var end = aval.substring(22,32);
            	   url="<?= Yii::$service->url->getUrl('admin/shuju/searchdate') ?>?type=1&sta="+sta+"&end="+end;
            	   $.get(url).done(function (data) {
                    	var row =JSON.parse(data); 
                        // 填入数据
                    	mychart2.setOption({
        	          	   title: {
        	                   text: ''
        	               },
        	               tooltip: {},
        	               legend: {
        	                   data:['新增量']
        	               },
        	               xAxis: {
        	                   data:row.dat    /* row.dat */
        	               },
        	               yAxis: {},
        	               series: [{
        	                   name: '水司',
        	                   type: 'line',
        	                   data:row.num    /* row.num */
        	               }],
          	             toolbox: {

           	            	　　show: true,

           	            	　　feature: {

           	            	　　　　saveAsImage: {

           	            	　　　　show:true,

           	            	　　　　excludeComponents :['toolbox'],

           	            	　　　　pixelRatio: 2

           	            	　　　　}

           	            	　　}

           	            	}
        	           });
                    });
               }
           }        
            
           var mychart2 = echarts.init(document.getElementById('mychart2'));
            // 异步加载数据
           var url="<?= Yii::$service->url->getUrl('admin/shuju/hours?hours=24&type=1') ?>";
           function cut2(type,that){
        	   $('#test11').val("");
               $(".but1").css({"background":"#fff","color":"#99cafe"});
               $(that).css({"background":"#F3FAFF","color":"red"});
               if($(that).attr("uri")==1){
            	   url="<?= Yii::$service->url->getUrl("admin/shuju/week") ?>?type="+type;
               }else if($(that).attr("uri")==2){
            	   url="<?= Yii::$service->url->getUrl('admin/shuju/month') ?>?type="+type;
               }else if($(that).attr("uri")==3){
            	   url="<?= Yii::$service->url->getUrl('admin/shuju/quarter') ?>?type="+type;
               }else if($(that).attr("uri")==4){
            	   url="<?= Yii::$service->url->getUrl('admin/shuju/year') ?>?type="+type;
               }
               $.get(url).done(function (data) {
                  	var row =JSON.parse(data); 
                      // 填入数据
                  	mychart2.setOption({
      	          	   title: {
      	                   text: ''
      	               },
      	               tooltip: {},
      	               legend: {
      	                   data:['新增量']
      	               },
      	               xAxis: {
      	                   data:row.dat    /* row.dat */
      	               },
      	               yAxis: {},
      	               series: [{
      	                   name: '水司',
      	                   type: 'line',
      	                   data:row.num    /* row.num */
      	               }],
        	             toolbox: {

       	            	　　show: true,

       	            	　　feature: {

       	            	　　　　saveAsImage: {

       	            	　　　　show:true,

       	            	　　　　excludeComponents :['toolbox'],

       	            	　　　　pixelRatio: 2

       	            	　　　　}

       	            	　　}

       	            	}
      	           });
                  });
           }
            $.get(url).done(function (data) {
            	var row =JSON.parse(data); 
                // 填入数据
            	mychart2.setOption({
	          	   title: {
	                   text: ''
	               },
	               tooltip: {},
	               legend: {
	                   data:['新增量']
	               },
	               xAxis: {
	                   data:row.dat    /* row.dat */
	               },
	               yAxis: {},
	               series: [{
	                   name: '水司',
	                   type: 'line',
	                   data:row.num    /* row.num */
	               }],
	               toolbox: {

	  	            	　　show: true,

	  	            	　　feature: {

	  	            	　　　　saveAsImage: {

	  	            	　　　　show:true,

	  	            	　　　　excludeComponents :['toolbox'],

	  	            	　　　　pixelRatio: 2

	  	            	　　　　}

	  	            	　　}

	  	            	}
	           });
            });
            </script>
            <div class="chart-b">
                <button style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #30b7fe;margin-left: 0;">导出图片</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #33d892;margin-left: 0;">导出表格</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #f9c131;margin-left: 0;">导出报告</button>
                <div class="line-img">
                    <img src="/public/adminimg/line.png" alt="">
                    <span style="color:#a4adb5">销售额</span>
                </div>
            </div>
        </div>
        <!--商家增长趋势-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">商家新增趋势</div>
                <div class="platdata-headerright">
                    <ul>
                        <li class="week but1" onclick='cut3(2,this)' uri='1'>七天</li>
                        <li class="month but1" onclick='cut3(2,this)' uri='2'>一个月</li>
                        <li class="quarter but1" onclick='cut3(2,this)' uri='3'>一个季度</li>
                        <li class="year but1" onclick='cut3(2,this)' uri='4'>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <input type="text" style="width:100%;height:100%;text-align: center;border:none;" name="data" class="demo-input"
                                       placeholder="<?php echo date('Y-m-d h:i:s',time()),'-',date('Y-m-d h:i:s',time())?>" id="test12">
                            </div>
                        </div>


                    </div>
                    <button style="float: left;border:0;margin-top:13px;" onclick='ctime()'>确定</button>
                </div>
            </div>
            <div>
                <span>今日新增：<?php echo $shuisinew['num'];?>&nbsp;&nbsp;&nbsp;&nbsp;会员总数：<?php echo $shuisiall['num'];?></span>
            </div>
            <div id="mychart3" style="width:700px;height:400px;float:left;">
            </div>
             <script type="text/javascript">   
             //日期时间范围
             laydate.render({
                 elem: '#test12'
                 , type: 'datetime'
                 , range: true
                 , theme: "#3CACFE"
             });  
            function ctime(){
                var aval=$('#test12').val();
                if(aval){ 
             	   $(".but1").css({"background":"#fff","color":"#99cafe"});
             	   var sta = aval.substring(0, 10); 
             	   var end = aval.substring(22,32);
             	   url="<?= Yii::$service->url->getUrl('admin/shuju/searchdate') ?>?type=2&sta="+sta+"&end="+end;
             	   $.get(url).done(function (data) {
                     	var row =JSON.parse(data); 
                         // 填入数据
                     	mychart3.setOption({
         	          	   title: {
         	                   text: ''
         	               },
         	               tooltip: {},
         	               legend: {
         	                   data:['新增量']
         	               },
         	               xAxis: {
         	                   data:row.dat    /* row.dat */
         	               },
         	               yAxis: {},
         	               series: [{
         	                   name: '商家',
         	                   type: 'line',
         	                   data:row.num    /* row.num */
         	               }],
           	             toolbox: {

            	            	　　show: true,

            	            	　　feature: {

            	            	　　　　saveAsImage: {

            	            	　　　　show:true,

            	            	　　　　excludeComponents :['toolbox'],

            	            	　　　　pixelRatio: 2

            	            	　　　　}

            	            	　　}

            	            	}
         	           });
                     });
                }
            }                
           var mychart3 = echarts.init(document.getElementById('mychart3'));
            // 异步加载数据
           var url="<?= Yii::$service->url->getUrl('admin/shuju/hours?hours=24&type=2') ?>";
           function cut3(type,that){
        	   $('#test12').val("");
               $(".but1").css({"background":"#fff","color":"#99cafe"});
               $(that).css({"background":"#F3FAFF","color":"red"});
               if($(that).attr("uri")==1){
            	   url="<?= Yii::$service->url->getUrl("admin/shuju/week") ?>?type="+type;
               }else if($(that).attr("uri")==2){
            	   url="<?= Yii::$service->url->getUrl('admin/shuju/month') ?>?type="+type;
               }else if($(that).attr("uri")==3){
            	   url="<?= Yii::$service->url->getUrl('admin/shuju/quarter') ?>?type="+type;
               }else if($(that).attr("uri")==4){
            	   url="<?= Yii::$service->url->getUrl('admin/shuju/year') ?>?type="+type;
               }
               $.get(url).done(function (data) {
                  	var row =JSON.parse(data); 
                      // 填入数据
                  	mychart3.setOption({
      	          	   title: {
      	                   text: ''
      	               },
      	               tooltip: {},
      	               legend: {
      	                   data:['新增量']
      	               },
      	               xAxis: {
      	                   data:row.dat    /* row.dat */
      	               },
      	               yAxis: {},
      	               series: [{
      	                   name: '商家',
      	                   type: 'line',
      	                   data:row.num    /* row.num */
      	               }],
        	             toolbox: {

       	            	　　show: true,

       	            	　　feature: {

       	            	　　　　saveAsImage: {

       	            	　　　　show:true,

       	            	　　　　excludeComponents :['toolbox'],

       	            	　　　　pixelRatio: 2

       	            	　　　　}

       	            	　　}

       	            	}
      	           });
                  });
           }
            $.get(url).done(function (data) {
            	var row =JSON.parse(data); 
                // 填入数据
            	mychart3.setOption({
	          	   title: {
	                   text: ''
	               },
	               tooltip: {},
	               legend: {
	                   data:['新增量']
	               },
	               xAxis: {
	                   data:row.dat    /* row.dat */
	               },
	               yAxis: {},
	               series: [{
	                   name: '商家',
	                   type: 'line',
	                   data:row.num    /* row.num */
	               }],
	               toolbox: {

	  	            	　　show: true,

	  	            	　　feature: {

	  	            	　　　　saveAsImage: {

	  	            	　　　　show:true,

	  	            	　　　　excludeComponents :['toolbox'],

	  	            	　　　　pixelRatio: 2

	  	            	　　　　}

	  	            	　　}

	  	            	}
	           });
            });
            </script>
            <div class="chart-b">
                <button style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #30b7fe;margin-left: 0;">导出图片</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #33d892;margin-left: 0;">导出表格</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #f9c131;margin-left: 0;">导出报告</button>
                <div class="line-img">
                    <img src="/public/adminimg/line.png" alt="">
                    <span style="color:#a4adb5">销售额</span>
                </div>
            </div>
        </div>
        <!--商品服务数据-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">商品服务数据</div>
                <div class="platdata-headerright">
                    <ul>
                        <li class="week but1" onclick='cut4(4,this)' uri='1'>七天</li>
                        <li class="month but1" onclick='cut4(4,this)' uri='2'>一个月</li>
                        <li class="quarter but1" onclick='cut4(4,this)' uri='3'>一个季度</li>
                        <li class="year but1" onclick='cut4(4,this)' uri='4'>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                                <input placeholder="开始日期" name="" class="el-range-input1 el-range-input" />
                                <span class="el-range-separator">至</span>
                                <input placeholder="结束日期" name="" class="el-range-input2 el-range-input"/>
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:13px;">确定</button>
                </div>
            </div>
            <div id="mychart4" style="width:700px;height:400px;float:left;">
            </div>
            <div class="chart-b">
                <button style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #30b7fe;margin-left: 0;">导出图片</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #33d892;margin-left: 0;">导出表格</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #f9c131;margin-left: 0;">导出报告</button>
                <div class="line-img">
                    <img src="/public/adminimg/line.png" alt="">
                    <span style="color:#a4adb5">销售额</span>
                </div>
            </div>
        </div>
        <!--支付方式汇总-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">支付方式汇总</div>
                <div class="platdata-headerright">
                    <ul>
                        <li>七天</li>
                        <li>一个月</li>
                        <li>一个季度</li>
                        <li>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                                <input placeholder="开始日期" name="" class="el-range-input1 el-range-input" />
                                <span class="el-range-separator">至</span>
                                <input placeholder="结束日期" name="" class="el-range-input2 el-range-input"/>
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:13px;">确定</button>
                </div>
            </div>
            <div id="mychart5">
            </div>
            <div class="chart-b">
                <button style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #30b7fe;margin-left: 0;">导出图片</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #33d892;margin-left: 0;">导出表格</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #f9c131;margin-left: 0;">导出报告</button>
                <div class="line-img">
                    <img src="/public/adminimg/line.png" alt="">
                    <span style="color:#a4adb5">销售额</span>
                </div>
            </div>
        </div>
        <!--访问数据-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">访问数据</div>
                <div class="platdata-headerright">
                    <ul>
                        <li>七天</li>
                        <li>一个月</li>
                        <li>一个季度</li>
                        <li>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                                <input placeholder="开始日期" name="" class="el-range-input1 el-range-input" />
                                <span class="el-range-separator">至</span>
                                <input placeholder="结束日期" name="" class="el-range-input2 el-range-input"/>
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:13px;">确定</button>
                </div>
            </div>
            <div id="mychart6">
            </div>
            <div class="chart-b">
                <button style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #30b7fe;margin-left: 0;">导出图片</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #33d892;margin-left: 0;">导出表格</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #f9c131;margin-left: 0;">导出报告</button>
                <div class="line-img">
                    <img src="/public/adminimg/line.png" alt="">
                    <span style="color:#a4adb5">销售额</span>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .layui-laydate .layui-this{
        background: #30B5FE !important;
    }
</style>