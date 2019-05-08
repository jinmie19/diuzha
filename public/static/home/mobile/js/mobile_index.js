$(document).ready(function () {
    $(".tree-select:first").not(".tree-select-active").addClass("tree-select-active");
    $(".catagory-select-item:first").not(".catagory-select-item-active").addClass("catagory-select-item-active");
    $(".step-list:first").find(".step-item-title").eq(0).css("color","rgb(255, 89, 43)");
    $(".step-list:first").find("i").eq(0).css("color","rgb(255, 89, 43)");
    $(".step-list:first").addClass("step-process");
    $(".action-step").children("button").eq(0).hide();
    $(".action-step").children("button").eq(1).hide();
    $(".action-step").children("button").attr("type","button");
	
    //分类选择-大分类选择
    $(".tree-select").click(function () {
        var catagory_level=$(this).index();
        var n=$(".tree-select").length;
        $(this).not(".tree-select-active").addClass("tree-select-active");
        for(var i=0;i<n;i++)
        {
            if(catagory_level!=i)
            {
                $(".tree-select").eq(i).removeClass("tree-select-active");
            }
        }
        switch (catagory_level) {
            case 0:
                $(".catagory-select-item").show();
                break;
            case 1:
                for(var i=0;i<n;i++)
                {
                    var id=Math.floor($(".catagory-select-item").eq(i).attr("data-id"));
                    if(id!=3&&id!=8&&id!=2)
                    {
                        $(".catagory-select-item").eq(i).hide();
                    }
                    else
                    {
                        $(".catagory-select-item").eq(i).show();
                    }
                }
                break;
            case 2:
                for(var i=0;i<n;i++)
                {
                    var id=Math.floor($(".catagory-select-item").eq(i).attr("data-id"));
                    if(id!=7&&id!=9&&id!=4)
                    {
                        $(".catagory-select-item").eq(i).hide();
                    }
                    else
                    {
                        $(".catagory-select-item").eq(i).show();
                    }
                }
                break;
            case 3:
                for(var i=0;i<n;i++)
                {
                    var id=Math.floor($(".catagory-select-item").eq(i).attr("data-id"));
                    if(id!=11)
                    {
                        $(".catagory-select-item").eq(i).hide();
                    }
                    else
                    {
                        $(".catagory-select-item").eq(i).show();
                    }
                }
                break;
            default:
                break;
        }
    });
    //分类选择-小分类选择
    $(".catagory-select-item").click(function () {
        var category_id=Math.floor($(this).attr("data-id"));
        var index=$(this).index();
        var n=$(".catagory-select-item").length;
        $("input[name='category_id']").val(category_id);
        var i_html="<i data-v-630d2e1a=\"\" class=\"van-icon van-icon-checked van-tree-select__selected\" style=\"font-size: 16px;\"><!----></i>";
        $(this).not(".catagory-select-item-active").addClass("catagory-select-item-active");
        $(this).append(i_html);
        for(var i=0;i<n;i++)
        {
            if((index-1)!=i)
            {
                $(".catagory-select-item").eq(i).removeClass("catagory-select-item-active");
                $(".catagory-select-item").eq(i).children().remove();
            }
        }
    });
    $(".action-step").children("button").on("click",function(){
        var index= $(".step-process").index();
        var text=$(this).children("span.button-text").text();
        switch (text) {
            case "下一步":
                nextstep();
                break;
            case "上一步":
                prestep();
                break;
            case "申请发布":
                var step=nextstep();
                if(step!="no")
                {
                    postSendDdata();
                }
                break;
            case "查看预览":
                break;
            default:
                break;
        }
    });
   //第三步显示底部选择
        $(".van-overlay").hide();
        $(".van-overlay").css("z-index","3");
        $(".van-cell--clickable").eq(0).click(function () {
            $(".van-overlay").show();
            $(".step-choose-page").delay("fast").show();
        });
        $(".van-overlay").eq(0).click(function () {

            $(".step-choose-page").delay("fast").hide();
            $(this).hide();
        });
     //第三步相关功能
        $(".step-actionsheet_item").on("click",function () {
            var i=$(this).index();
            var title_name="";
            var m=1;
            var start_div="<div  class='step-item van-cell-group van-hairline--top-bottom'><div  class='van-cell'><div  class='van-cell__title'><div  class='van-row van-row--flex van-row--align-center'><div  class='icon'>";
            var mid_div="</div>" + "<div  class='title'>";
            var end_div="</div></div></div><i  class='van-cell__right-icon van-icon van-icon-delete' style='color: red; font-size: 18px;'> <!----> </i> </div> </div>";
            switch (i) {
                case 0:
                        title_name="收集数据";
                        addStepItem(start_div,m,mid_div,title_name,end_div,i);
                    break;
                case 1:
                        title_name="收集截图";
                        addStepItem(start_div,m,mid_div,title_name,end_div,i);
                    break;
                case 2:
                        title_name="网址跳转";
                        addStepItem(start_div,m,mid_div,title_name,end_div,i);
                    break;
                case 3:
                        title_name="图文说明";
                        addStepItem(start_div,m,mid_div,title_name,end_div,i);
                    break;
                default:
                    break;
            }
        });
     //添加步骤
    function addStep(i,arrayList){
        var returnArray=new Array();
        var click_id=0;
        var res="";
        var input_id="";
        var message="";
        var report_window_start="<div  class='edit-box van-dialog' style='z-index: 2011;'><div class='van-dialog__content'><div  class='header van-hairline--bottom'>步骤1 : ";
        var title_name="";
        var report_window_mid="</div><div class='content van-cell-group'><div class='van-cell van-field'><div class='van-cell__title van-field__label'><span>步骤说明</span></div><div class='van-cell__value'><div class='van-field__body'>";
        var insertControl_bannel="";
        var report_widow_end="</div></div></div> <div class='error-message'></div></div></div><div class='van-hairline--top van-dialog__footer van-dialog__footer--buttons'><button class='van-button van-button--default van-button--large van-dialog__cancel'><span class='van-button__text'>取消</span></button><button class='van-button van-button--default van-button--large van-dialog__confirm van-hairline--left'><span class='van-button__text'>添加</span></button></div></div>";
        //弹出添加窗口
        switch (i) {
            case 0:
                title_name="收集数据";
                input_id="check_text_content";
                message="请填写数据内容!"
                insertControl_bannel=$("#data-item").html();
                $("#data-item").empty();
                if(insertControl_bannel=="")
                {
                    insertControl_bannel="<textarea class='shuoming new-add-task-content' name='check_text_content' placeholder='如需接单者提供文字信息，请在此输入内容，如不需要可不填'></textarea>";
                }
               // $("#"+input_id).remove();
                break;
            case 1:
                title_name="收集截图";
                message="请上传悬赏截图!";
                input_id="thumbsi-img";
                insertControl_bannel=$('#upform').html();
                $('#upform').empty();
                if(insertControl_bannel=="")
                {
                    insertControl_bannel="<a href=\"javascript:\" id=\"getImg\" data-rate=\"1\" class=\"t_wx2\" onclick=\"getImg();\">添加截图</a>";
                }
                break;
            case 2:
                title_name="网站跳转";
                input_id="about_url";
                message="请填写跳转网站地址！";
                insertControl_bannel=$("#url-redrict").html();
                $("#url-redrict").empty();
                if(insertControl_bannel=="")
                {
                    insertControl_bannel="<input type=\"text\" class=\"task-txt\"  name=\"about_url\" placeholder=\"填写跳转网址，以http(s)://开头\" value=\"\" style=\"width:100%;\" />"
                }
                break;
            case 3:
                title_name="图文说明";
                input_id="process_sm";
                message="请填写图文说明！";
                insertControl_bannel=$("#upload_img").html();
                $("#upload_img").empty();
                if(insertControl_bannel=="")
                {
                    insertControl_bannel="<a href=\"javascript:\" data-rate=\"1\" class=\"t_wx2\" onclick=\"uploadStepData();\">请添加图文</a>";
                }
                break;
            default:
                break;
        }

        //显示添加弹窗
        $(".show-item").append(report_window_start+title_name+report_window_mid+insertControl_bannel+report_widow_end);
        $(".show-item div.edit-box").find(".van-dialog__confirm").attr('type',"button");
        $(".show-item div.edit-box").find(".van-dialog__cancel").attr('type','button');
        $(".show-item div.edit-box").find(".van-dialog__confirm").click([input_id,message,res,i,arrayList],function () {
           var txt= $(this).children("span.van-button__text").text();
           if(txt=="添加"){
               if(i==0)
               {
                   if($(this).parent().parent(".show-item div.edit-box").find("textarea").val()!="")
                   {
                       res="yes";
                   }
                   else
                   {
                       $(this).parent().prev("div.van-dialog__content").children(".content").children(".error-message").css("margin-left","15px");
                       $(this).parent().prev("div.van-dialog__content").children(".content").children(".error-message").text(message);
                       res="no";
                   }
               }
               else
               {
    			if(i==2)
                   {
                       res="yes";
                           console.log("do noting!");
                   }
                   else {
                       if($(this).parent().parent(".show-item div.edit-box").find("input[name='"+input_id+"']").val()!="")
                       {
                           res="yes";
                       }
                       else
                       {
                           $(this).parent().prev("div.van-dialog__content").children(".content").children(".error-message").css("margin-left","15px");
                           $(this).parent().prev("div.van-dialog__content").children(".content").children(".error-message").text(message);
                           res="no";
                       }
                   }

               }
               if(res=="yes"||res=="test")
               {
                   $(".show-item").append(arrayList[0]+arrayList[1]+arrayList[2]+arrayList[3]+arrayList[4]);
                   $(".show-item div.step-item").children("div.van-cell").on("click",function () {
                       editStep($(this).find(".icon").text());
                   });

                   $(".van-icon-delete").on("click",function (i) {
                       $(this).parent().parent("div.step-item").remove();
                       //还需要清除该行包含的数据内容
                       console.log($(this).index()+"追加值");
                       $(this).parent().parent(".show-item div.edit-box").remove();
                       //重新写数字
                       countNum();
                   })
                   $(this).parent().parent(".show-item div.edit-box").hide();
                   $(".van-overlay").hide();
               }
               else
               {
                   //$(".van-overlay").hide();
               }
           }else{
               if(i==0)
               {
                   if($(this).parent().parent(".show-item div.edit-box").find("textarea").val()!="")
                   {
                       $(this).parent().prev("div.van-dialog__content").children(".content").children(".error-message").empty();
                       $(this).parent().parent(".show-item div.edit-box").hide();
                       $(".van-overlay").hide();
                   }
                   else
                   {
                       $(this).parent().prev("div.van-dialog__content").children(".content").children(".error-message").css("margin-left","15px");
                       $(this).parent().prev("div.van-dialog__content").children(".content").children(".error-message").text(message);
                   }
               }
               else
               {
                    if($(this).parent().parent(".show-item div.edit-box").find("input[name='"+input_id+"']").val()!="")
                    {
                        $(this).parent().prev("div.van-dialog__content").children(".content").children(".error-message").empty();
                        $(this).parent().parent(".show-item div.edit-box").hide();
                        $(".van-overlay").hide();
                    }
                    else
                    {
                        $(this).parent().prev("div.van-dialog__content").children(".content").children(".error-message").css("margin-left","15px");
                        $(this).parent().prev("div.van-dialog__content").children(".content").children(".error-message").text(message);
                    }
               }


            }


        });
        $(".show-item div.edit-box").find(".van-dialog__cancel").on("click",[res,i],function () {
            if(i==0)
            {
                if($(this).parent().prev().children().find("textarea[name='input_id']").val()=="")
                {
                    $(this).parent().parent("div.edit-box").remove();
                }
                else
                {
                    $(this).parent().parent("div.edit-box").hide();
                }
            }
            else{
                if($(this).parent().prev().children().find("input[name='input_id']").val()=="")
                {
                    $(this).parent().parent("div.edit-box").remove();
                }
                else
                {
                    $(this).parent().parent("div.edit-box").hide();
                }
            }
            $(".van-overlay").hide();
            res="no";
        });
        return res;
    }
    //第四部相关步骤
    $("#clicktable").on("click",function () {
        $(".van-overlay").show();
        $(".show-item div.new-task-item").show();

    });
   $(".new-task-item").children(".van-dialog__footer--buttons").children("button").attr("type","button");
    $(".new-task-item").find("button.van-dialog__cancel").on("click",function () {
        $(".van-overlay").hide();
        $(".show-item div.new-task-item").hide();
    });
    $(".new-task-item").find("button.van-dialog__confirm").on("click",function () {
        if($("#task_endTime").val()==""){
            message('请输入任务结束时间','','error');
        }
        if($("#unit_price").val()=="")
        {
            message('请输入悬赏金额','','error');
        }
        if($("#task_num").val()=="")
        {
            message('请输入任务数量','','error');
        }
        if($("#task_endTime").val()!=""&&$("#unit_price").val()!=""&&$("#task_num").val()!="")
        {
            if( $(".show-item div.van-panel").length<=0){
                var money=parseFloat($("#unit_price").val()).toFixed(2);
                var task_num=$("#task_num").val();
                var end_time=$("#task_endTime").val();
                var total_sub=parseFloat(money*task_num).toFixed(2);
                var insettHtml="<div  class=\"van-cell-group van-hairline--top-bottom van-panel\">" +
                    "<div  class=\"van-cell van-panel__header\">" +
                    "<div  class=\"van-cell__title\">" +
                    "<div  class=\"van-row van-row--flex van-row--align-center van-row--justify-space-between\">" +
                    "<div  class=\"van-col\">任务组：悬赏任务</div> <i  class=\"van-icon van-icon-delete\" style=\"color: red; font-size: 18px;\"><!----></i>" +
                    "</div> " +
                    "<div  class=\"van-cell__label van-row\">" +
                    "<div  class=\"van-col van-col--10\">\n" +
                    "             任务赏金："+money+" 元 \n" +
                    "            </div> <div  class=\"van-col van-col--10 van-col--offset-4\">\n" +
                    "              任务数量："+task_num+" 个\n" +
                    "            </div><div data-v-4764bdd2=\"\" class=\"van-col van-col--24\">\n" +
                    "              截止时间："+end_time+"\n" +
                    "            </div></div></div></div><div  class=\"van-panel__content\"></div></div>";
                $(".show-item ").children("div.van-hairline--top-bottom").eq(0).after(insettHtml);
                $("#total_info").find("div.van-cell__value").text(total_sub+"元 (含15%服务费)");
                $(".van-overlay").hide();
                $(".show-item div.new-task-item").hide();
                $(".show-item div.van-panel").find("div.van-row").on("click",function () {
                    $(".new-task-item").show();
                    $(".van-overlay").show();
                    $(".show-item div.new-task-item").show();
                });
                $(".van-icon-delete").on("click",function(){
                    $(this).parents("div.van-panel").remove();
                    $("#total_info").find("div.van-cell__value").text("0元 (含15%服务费)");
                });
            }

        }
    });

    function editStep(i){
        var m=i-1;
        $(".show-item div.edit-box").eq(m).find(".van-dialog__confirm").children("span.van-button__text").text("保存");
        $(".show-item div.edit-box").eq(m).show();
        $(".van-overlay").show();
    }
    function addStepItem(start_div,m,mid_div,title_name,end_div,i)
    {
        var res="";
        $(".step-choose-page").slideToggle("fast");
        if($(".show-item div.step-item").length >= 1){
          var  m=$(".show-item div.step-item").length+1;
        }
        var arrayList=new Array(start_div,m,mid_div,title_name,end_div);
        addStep(i,arrayList);
    }


    //重新排序
    function countNum(){
        if($(".show-item div.step-item").length>=1)
        {
            $(".show-item div.step-item").each(function (i) {
               var m=i+1;
                $(this).find(".icon").text(m);
            });
        }
    }
    //上一步函数方法
    function prestep() {
        var index= $(".step-process").index();
        var indexNow=index-1;
        if(index>0&&index<=4)
        {
            $(".step").eq(index).removeClass("show-item")
            $(".step").eq(indexNow).addClass("show-item");
            $(".step-list").find(".step-item-title").eq(index).css("color","");
            $(".step-list").eq(index).removeClass("step-process");
            $(".step-list").eq(indexNow).removeClass("step-finish");
            $(".step-list").find("i").eq(index).not(".van-step__circle").addClass("van-step__circle");
            $(".step-list").find("i").eq(index).removeClass("van-icon ");
            $(".step-list").find("i").eq(index).removeClass("van-icon-edit")
            $(".step-list").find("i").eq(indexNow).removeClass("van-step__circle");
            $(".step-list").eq(indexNow).not(".step-process").addClass("step-process");
            $(".step-list").find("i").eq(indexNow).not(".van-icon").addClass("van-icon");
            $(".step-list").find("i").eq(indexNow).not(".van-icon-edit").addClass("van-icon-edit");
            $(".step-list").find(".step-item-title").eq(indexNow).css("color","rgb(255, 89, 43)");
            $(".step-list").find("i").eq(indexNow).css("color","rgb(255, 89, 43)");
        }
        if(indexNow==0)
        {
            $(".action-step").children("button").eq(0).hide();
        }
        if(indexNow==2)
        {
            $(".action-step").children("button").eq(1).hide();
            $(".action-step").children("button").eq(2).children("span.button-text").text("下一步");
        }
        if(indexNow>=3)
        {
            if($(".show-item .step").find("div.van-panel").length=0){
                message("请添加任务结束时间以及金额","","error");
                return "no";
            }
        }
    }

    //下一步函数方法
    function nextstep() {

       var index= $(".step-process").index();
       var indexNow=index+1;
       if(index<=3){
         index=index;
       }
       else
       {
           index=0;
       }
       if(validateForm(index)=="step"||validateForm(index)=="yes")
       {
           $(".step").eq(index).removeClass("show-item")
           $(".step").eq(indexNow).addClass("show-item");
           $(".step-list").find(".step-item-title").eq(index).css("color","");
           $(".step-list").eq(index).removeClass("step-process");
           $(".step-list").eq(index).addClass("step-finish");
           $(".step-list").find("i").eq(index).not(".van-step__circle").addClass("van-step__circle");
           $(".step-list").find("i").eq(index).removeClass("van-icon ");
           $(".step-list").find("i").eq(index).removeClass("van-icon-edit")
           $(".step-list").find("i").eq(indexNow).removeClass("van-step__circle");
           $(".step-list").eq(indexNow).not(".step-process").addClass("step-process");
           $(".step-list").find("i").eq(indexNow).not(".van-icon").addClass("van-icon");
           $(".step-list").find("i").eq(indexNow).not(".van-icon-edit").addClass("van-icon-edit");
           $(".step-list").find(".step-item-title").eq(indexNow).css("color","rgb(255, 89, 43)");
           $(".step-list").find("i").eq(indexNow).css("color","rgb(255, 89, 43)");
           //添加上一页标签
           if(index==0)
           {
               $(".action-step").children("button").eq(0).show();
           }
           if(index==2)
           {
              //$(".action-step").children("button").eq(1).show();
               $(".action-step").children("button").eq(2).children("span.button-text").text("申请发布");
           }
       }
       else
       {
            if(index==2)
            {
                message('悬赏步骤中必须含有信息收集类型','','error');
            }
       }

        //验证页面控件
        

    }


    //表单验证控件方法
    function moveMessage(index){
       var value= $(".error-message").eq(index).prev().val();
       if(value!="")
       {
           $(".error-message").eq(index).empty();
       }

    }
    function validateForm(index){
        var res="step";
        var message="";
        if(index==1){
            var title=$("input[name='title']").val();
            var appName=$("input[name='appName']").val();
            var text=$("textarea").val();
            if(appName!=""&&appName.length>6)
            {
                res="no";
                message="应用名称不能大于6个字符！";
                $(".error-message").eq(1).text(message);
            }
            if(title.length>12)
            {
              	                res="no";
                message="标题名称不能大于12个字符！";
                $(".error-message").eq(0).text(message);
            }

                if(title==""){message="标题不能为空，请输入标题！"; res="no";$(".error-message").eq(0).text(message);}
                if(appName==""){message="应用名称不能为空，请如实填写！"; res="no";$(".error-message").eq(1).text(message);}
                if(text==""){message="悬赏描述不能为空！"; res="no";$(".error-message").eq(2).text(message);}

        }
        if(index==2){
            if($(".show-item div.step-item").length>=1)
            {
                res="yes";
            }
            else
            {
                res="no";
            }

        }
        if(index==3){

        }
        $("input[name='title']").change(function () {
            moveMessage(0);
        });
        $("input[name='appName']").change(function () {
            moveMessage(1);
        });
        $("textarea").change(function () {
            moveMessage(2);
        });
        return res;
    }
    //发布任务
    
    $('.publish-task-btn').click(function () {
        postSendDdata();
    });
    function postSendDdata() {
        var formData = new FormData($( "#post_form" )[0]);
        var ua = navigator.userAgent.toLowerCase();
        if (ua.indexOf('safari') != -1 || ua.indexOf('iphone') != -1 || ua.indexOf('ipad') != -1 || ua.indexOf('ipod') != -1) {
            try {
                var iterator = formData.entries(), end = false;
                while(end == false) {
                    var item = iterator.next();
                    if (item.value != undefined) {
                        var pair = item.value;
                        console.log(pair);
                        if (pair[1] instanceof File) {
                            var files = formData.getAll(pair[0]);
                            formData.delete(pair[0]);
                            jQuery.each(files, function (key, fileNameObject) {
                                if (fileNameObject.name && fileNameObject.size != 0) {
                                    formData.append(pair[0], fileNameObject);
                                }
                            });
                        }
                    } else if (item.done == true) {
                        end = true;
                    }
                }
            } catch (e) {
                console.log(e.message);
            }
        }
        message('正在发布','','loading');
        $.ajax({
            url: post_form_action,
            type: 'POST',
            data: formData,
            dataType: "json",
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
                message(res.message,res.redirect,res.type);
            },
            error: function () {
                message('请求错误','','error');
            }
        });
    }
    //点击图片上传
    $('.image-box-img .item').last().click(function(){
        //点击选择图片
        $('.files input[type="file"]:first').click().bind('change',function(){
            if(this.files.length > 0){
                var src = getFileSrc(this.files[0]);
                $('.image-box-img').prepend('<div class="item img-item"><img class="images-item" src="'+src+'"></div>');
                //向.files的div中添加input，已经选择了一个，将这个保留，新增一个新的input作为补充
                $('.files').prepend('<input type="file" accept="image/*" name="thumbs[]">');
            }
        });
    });
    //输入任务单价事件
    $("#unit_price").bind('input propertychange', function() {
        var money = parseFloat($(this).val().trim());
        if(isNaN(money)){
            money = 0;
        }
        /*var fee = parseFloat($(this).attr('data-fee'));
        $('#user_gold').html((money*Math.abs((1-fee))).toFixed(2));
        $('#plat_gold').html((money*Math.abs(fee)).toFixed(2));*/
        var task_num = $("#task_num").val();
        if($.trim(task_num)!=""){
            countMoney(money,task_num);
        }
    });

});
function getImg(){
        $(".task-item-pic").show();
}
function finishStepImg() {
    if($("img.images-item").length>0)
    {
        var url=$("img.images-item").attr("src");
        if(url!="")
        {
            $(".task-item-pic").find(".message").empty();
            $(".task-item-pic").hide();
        }
        else
        {
            $(".task-item-pic").find(".message").css({"color":"red","margin-left":"15px","margin-top":"10px","font-size":"15px"});
            $(".task-item-pic").find(".message").text("请添加截图");
        }
    }
    else
    {
        $(".task-item-pic").find(".message").css({"color":"red","margin-left":"15px","margin-top":"10px","font-size":"15px"});
        $(".task-item-pic").find(".message").text("请添加截图");
    }


}
