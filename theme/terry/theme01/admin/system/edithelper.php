<style>
    .main-content .red {
        height: 33px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0 8px #FD5E4E;
        padding-top: 10px;
    }

    .main-content .details {
        width: 600px;
        height: 116px;
        outline: none;
        resize: none;
        border-radius: 3px;
        background: #f3faff;
        border: 2px solid #e5eff8;
        padding: 8px;
    }

    .el-input__inner {
        height: 30px;
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;

    }

    .el-form {
        margin-top: 30px;
    }

    .el-form-item__content {
        position: relative;
        cursor: pointer;
    }

    .el-form-item__content > .close {
        position: absolute;
        left: 84px;
        top: -2px;
        background-color: #ccc;
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 20px;
        border-radius: 10px;
        cursor: pointer;
        display: none;
    }

    .el-form-item__content:hover .close {
        display: block;
    }
    .ke-content img{
        width: 150px;
        height: auto;
    }


</style>

<link rel="stylesheet" href="/public/kindeditor-master/themes/example1/example1.css" />
<script src="/public/kindeditor-master/kindeditor-all-min.js"></script>
<div class="main-content">
    <div class="adminmannager">
        <div class="adminmannager-title">
            <span>系统设置</span>&nbsp;
            <span>·&nbsp;帮助</span>
            <span>·&nbsp;修改帮助</span>
        </div>
        <form class="el-form" method="post" enctype="multipart/form-data" action="<?= Yii::$service->url->getUrl('admin/system/edithelp') ?>">
            <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
            <div class="el-row" style="width: 500px;">
                <div class="el-form-item">
                    <label class="el-form-item__label" style="width: 120px;">标题:</label>
                    <div class="el-form-item__content" style="margin-left: 120px;">
                        <div class="el-input">
                            <input type="text" value="<?=$help['title']?>" name="title" placeholder="<?=$help['title']?>" class="el-input__inner">
                        </div>
                    </div>
                </div>
                <div class="el-form-item">
                    <label class="el-form-item__label" style="width: 120px;">正文:</label>
                    <div class="el-form-item__content" style="margin-left: 120px;">
                         <textarea id="editor_id" name="content" style="width:700px;height:300px;">
                         </textarea>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= $help['id']?>">
                <div style="margin-left:80px;">
                    <button type="submit" class="el-button red el-button--danger is-round">
                        <span>保存</span>
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>
<script>
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_id',{
            themeType : 'example1'
        });
        editor.html(`<?php echo $help['content']?>`);
    });
</script>