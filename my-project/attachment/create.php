<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;


$this->title = '文件管理';
$this->context->layout = false;
?>
<html>
<title>图片管理</title>
<head>

    <link rel="stylesheet" href="https://cdn.staticfile.org/webuploader/0.1.5/webuploader.css">
    <style>
        html,body,ul,li,p,span{
            margin: 0;
            padding:0;
            font-size:14px;
        }
        a,a:active,a:visited{
            color: #333;
        }
        a:hover{
            color: #0a9dc7;
        }
        body{
            overflow: hidden;
        }
        .btns{
            width:100%;
            padding: 10px;
            height:30px;
            line-height:30px;
        }
        .btns a.btn{
            display: inline-block;
            float: left;
            height: 26px;
            line-height:26px;
            padding:5px 10px;
            margin-right: 10px;
            background: #0a9dc7;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }
        .btns a.btn-primary{
            background-color: #0bb20c;
        }

        .webuploader-pick {
            position: relative;
            float: left;
            height: 26px;
            line-height:26px;
            padding:5px 15px;
            margin-right: 10px;
            background: #0bb20c;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            overflow: hidden;
        }

        .btns .month-list{
            width: 120px;
            float: left;
            position: relative;
            padding-top:2px;
        }
        .month-select{
            text-align: center;line-height:30px;
            font-size:14px;
            border:1px solid #eeeeff;
            padding-right:10px;
            background: url(/img/down3.png) 90px center no-repeat;
        }
        .month-options{
            display: block;
            width:300px;
            background:#eeeeff;
            position: absolute;
            top:0;
            left:0;
            padding:6px;
            z-index: 20;
        }
        .month-options a{
            font-size:12px;
            line-height:2em;
            padding: 2px;
            display: inline-block;
            cursor: pointer;
            text-align: center;
            width:55px;
        }
        .btns .form{
            width: 214px;
            float: right;
        }
        .form input{
            width:160px;
            padding:5px;
            margin-top:3px;
        }
        .form a.btn-search{
            height: 26px;
            line-height:26px;
            padding:6px 13px;
            margin-right: 10px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            color: #fff;
            cursor: pointer;
            background: #0a9dc7 ;
        }
        .category{
            height: 30px;
            line-height:30px;
            padding:10px 10px 0 10px;
            width:100%;
            border-bottom:1px solid #eeeeff;
            margin-bottom:10px;
            clear: both;
        }
        .category a{
            float: left;
            display: inline-block;
            line-height:29px;
            height:29px;
            background: #fff;
            border:1px solid #eeeeff;
            color: #0a0b0c;
            text-decoration: none;
            padding:0 10px;
            margin-right:5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom:none;
            font-size:12px;
        }
        .category a.active{
            background: #ccc;
            font-width:bold;
        }

        .img-items {
            float: left;
            list-style: none;
            padding:0 0 0 10px;
            max-width:870px; 
        }
        .img-items li{
            float: left;
            width:133px;
            margin:0 10px 0 0;
            position: relative;
        }
        .img-items li img{
            width: 128px;
            height: 80px;
            padding:2px;
            border:1px solid #c9cccf;
            cursor: pointer;
        }
        .img-items li img.active{
            border: 3px solid #1094fa;
            padding: 0;
        }
        .img-items li img.selected{
            width: 32px;
            height: 32px;
            position: absolute;
            bottom: 31px;
            right: 2px;
            z-index: 2;
            padding: 0;
            border: none;
        }
        .img-items li img.deleteBtn{
            width:20px;
            height:20px;
            position: absolute;
            top:50%;
            right:50%;
            z-index: 2;
            padding:0;
            border:none;
        }
        .img-items p{
            font-size: 12px;
            line-height:2em;
            height:2em;
            overflow: hidden;
        }
        .img-items input{
            font-size: 12px;
            width:120px;
            line-height: 1.6em;
            height: 1.6em;
        }
        .pager {
            clear: both;
            width:880px;
            margin:10px auto;
            text-align: center;
        }
        .pager   a{

            padding:.4rem 0.6rem;
            display:inline-block;
            border:1px solid #ddd;
            background:#fff;
            margin:10px 5px ;
            color:#0E90D2;
            text-decoration: none;
        }
        .pager   a:hover{
            background:#eee;
        }
        .pager   a.active{
            background:#0E90D2;
            color:#fff;
        }
    </style>
    <script src="https://cdn.bootcss.com/vue/2.5.8/vue.min.js"></script>
    <script src="https://cdn.bootcss.com/axios/0.16.0/axios.min.js"></script>
    <script src="https://cdn.staticfile.org/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/webuploader/0.1.5/webuploader.min.js"></script>
</head>
<body>
<div id="app">
    <div class="btns">
        <div id="picker" v-show="btnOn">上传</div>
<!--        <a class="btn" @click="newGroup()">新建分组</a>-->
<!--        <a class="btn" @click="editGroup()">编辑分组</a>-->
<!--        <a class="btn" @click="moveImgs()">移动</a>-->
        <a class="btn" @click="delImgs()" v-show="btnOn">删除</a>
        <div class="month-list">
            <div class="month-select" @click="showMonth=true;">{{month}}</div>
            <div class="month-options" v-show="showMonth" @mouseleave="showMonth=false;">
                <a :class="{'active':month==''}" @click="month='全部时间';showMonth=false;loadData();">全部时间</a>
                <a v-for="m in months" :class="{'active':month==m}" @click="month=m;showMonth=false;loadData();">{{m}}</a>
            </div>
        </div>
        <div class="form">
            <input type="hidden" v-model="month" />
            <input type="text"  v-model.trim="keywords" />
            <a class="btn-search" @click="loadData()">Q</a>
        </div>
    </div>

    <div class="category">
        <a href="###" @click="cat_id=0;loadData()" :class="{'active':cat_id == 0}">全部图片</a>
        <a href="###" @click="cat_id=0;loadData('public')">公共图片</a>
<!--        <a v-for="cate in category" href="###" @click="cat_id=cate.id;loadData()" :class="{'active':cat_id == cate.id}">{{cate.name}}</a>-->
    </div>

    <div>
        <ul class="img-items">
            <li v-for="img in imgs">
                    <img v-if="img.is_remote" @click="selectImage(img.id,'<?=Yii::$app->params['staticFrontendUrl']?>'+img.attachment)" :src="'<?=Yii::$app->params['staticFrontendUrl']?>'+img.attachment" :alt="img.filename" :class="selectedImgs.indexOf(img.is_remote?'<?=Yii::$app->params['staticFrontendUrl']?>'+img.attachment:'<?=Yii::$app->params['staticFrontendUrl']?>'+img.attachment)>=0 ? 'active' : ''">
                    <img v-else @click="selectImage(img.id,'<?=Yii::$app->params['staticFrontendUrl']?>'+img.attachment)" :src="'<?=Yii::$app->params['staticFrontendUrl']?>'+img.attachment" :alt="img.filename" :class="selectedImgs.indexOf(img.is_remote?'<?=Yii::$app->params['staticFrontendUrl']?>'+img.attachment:'<?=Yii::$app->params['staticFrontendUrl']?>'+img.attachment)>=0 ? 'active' : ''">
                <p  @dblclick="editName($event,img.id)">{{img.filename}}</p>
                <img v-if="selectedImgs.indexOf(img.is_remote?'<?=Yii::$app->params['staticFrontendUrl']?>'+img.attachment:'<?=Yii::$app->params['staticFrontendUrl']?>'+img.attachment)>=0" class="selected" src="/js/plugins/ueditor/dialogs/image/images/success.png" alt="">
            </li>
        </ul>
        <div class="pager" v-show="pages > 1">
            <a v-show="page != 1" @click="page-- && goto(page)"  href="javascript:void(0)"><<</a>
            <a href="javascript:void(0)" v-for="index in pager"  @click="goto(index)" :class="{'active':page == index}" :key="index">{{index}}</a>
            <a v-show="pages != page && pages != 0 " @click="page++ && goto(page++)"  href="javascript:void(0)" >>></a>
        </div>
    </div>
    <input type="hidden" id="images" value="xxoo">
</div>
<?php
$dateAll = implode(',',$date);
?>
<script>

    var app = new Vue({
        el: '#app',
        data: {
            category: [],
            imgs: [],
            keywords: '',
            cat_id:0,
            btnOn: true,
            month: '全部时间',
            pages:1,//总页数
            page:1,//当前页码
            selectedImgs:[],
            selectedImgIds:[],
            showMonth:false,
            months:'<?=$dateAll?>'.split(','),
            imgTag:''
        },
        computed:{
            pager:function(){
                var pag = [];
                if( this.page < 5 ){ //如果当前的激活的项 小于要显示的条数
                    //总页数和要显示的条数那个大就显示多少条
                    var i = Math.min(5,this.pages);
                    while(i){
                        pag.unshift(i--);
                    }
                }else{ //当前页数大于显示页数了
                    var middle = this.page - Math.floor(5 / 2 ),//从哪里开始
                        i = 5;
                    if( middle >  (this.pages - 5)  ){
                        middle = (this.pages - 5) + 1
                    }
                    while(i--){
                        pag.push( middle++ );
                    }
                }
                console.log(pag);
                return pag
            }
        },
        created:function(){
            //this.loadData();
            this.loadCategory();
            this.loadData();
            console.log('created')
            var parentID = '<?=Yii::$app->request->get("div");?>';
            var parentInput = '<?=Yii::$app->request->get("input");?>';
            var has_img = window.parent.document.querySelector('#'+parentInput).value;
            var img_arr = has_img.split('|||');
            console.log(img_arr);
            if(has_img.length>1){
                if(img_arr.length>0){
                    for(i=0;i<img_arr.length;i++){
                        this.selectedImgs.push(img_arr[i]);
                        this.imgTag+='<img src="'+img_arr[i]+'">';
                    }
                }
            }
        },
        mounted:function () {
            console.log('mounted')
        },
        methods: {
            goto: function (page=1) {
                this.loadData(page)
                this.page = page;
            },
            loadData: function (type,page) {
                this.imgs.splice(0,18);
                if(type == 'public'){
                    this.btnOn = false
                }else{
                    this.btnOn = true
                }
                axios.get('<?php echo Url::toRoute('/attachment/index',true)?>', {
                    params:{
                        cat_id: this.cat_id,
                        keywords: this.keywords,
                        month: this.month,
                        page: page,
                        type: type
                    }
                })
                    .then(function (response) {
                        app.imgs = response.data.data
                        app.pages = response.data.totalPage
                        console.log(response.data.data);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            loadCategory:function () {
                axios.get('<?php echo Url::toRoute('/attachment/category',true)?>')
                    .then(function (response) {
                        app.category = response.data.data
                        console.log(response.data.data);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });

//                console.log('page' + this.page);
//                console.log('pages' + this.pages);
//                console.log('category' + this.category);
//                console.log('imgs' + this.imgs);
            },
            selectImage:function(key,url){
                this.imgTag = ''
                if(this.selectedImgs.indexOf(url)>=0) {
                    this.selectedImgs.splice(this.selectedImgs.indexOf(url),1);
                    this.selectedImgIds.splice(this.selectedImgs.indexOf(url),1);
                }else {
                    var  is_single = <?=Yii::$app->request->get('single') ? Yii::$app->request->get('single') : 0;?>;
                    if(!is_single || this.selectedImgIds.length == 0){
                        this.selectedImgs.push(url);
                        this.selectedImgIds.push(key);
                    }
                }
                if(this.selectedImgs.length>0){
                    for (i=0;i<this.selectedImgs.length;i++){
                        this.imgTag+='<img src="'+this.selectedImgs[i]+'">';
                    }
                }

                console.log(this.imgTag)
                app.sendToParent();
            },
            editName:function (event,id) {
                var e = event.currentTarget;
                var oldhtml = e.innerHTML;
                var newobj = document.createElement('input');
                newobj.type = 'text';
                newobj.value = oldhtml;
                newobj.onblur = function () {
                    e.innerHTML = this.value ? this.value : oldhtml;
                    // ajax
                    var csrfToken = '<?= Yii::$app->request->csrfToken ?>';
                    if(this.value != oldhtml){
                        axios.post('<?php echo Url::toRoute('/attachment/update',true)?>?id='+id,{
                            'filename': this.value,
                            '_csrf':csrfToken
                        })
                            .then(function (response) {
                                if(!response.data.success)
                                    console.log(response.data.error);
                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                    }

                }
                newobj.click = function () {
                    return;
                }
                e.innerHTML = '';
                e.appendChild(newobj);
                newobj.focus();
            },
            delImgs:function () {
                var r=confirm("确定删除选中文件吗？")
                if (r==true)
                {
                    axios.post('<?php echo Url::toRoute('/attachment/delete',true)?>',{
                        'id': this.selectedImgIds.join(','),
                        '_csrf':'<?= Yii::$app->request->csrfToken ?>'
                    })
                        .then(function (response) {
                            if(response.data.success){
                                //remove dom
                                app.selectedImgIds = [];
                                app.selectedImgs = [];
                                app.loadData();
                            }
                            console.log(response.data.error);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
            },
            sendToParent:function () {
                var parentID = '<?=Yii::$app->request->get("div");?>';
                var parentInput = '<?=Yii::$app->request->get("input");?>';
                window.parent.document.querySelector('#'+parentID).innerHTML = this.imgTag
                window.parent.document.querySelector('#'+parentInput).value = this.selectedImgs.join('|||');

                window.parent.document.querySelector('#'+parentInput).onblur && window.parent.document.querySelector('#'+parentInput).onblur();
            }
        },
    })
    var uploader = WebUploader.create({

        auto: true,
        // swf文件路径
        swf: 'https://cdn.staticfile.org/webuploader/0.1.5/Uploader.swf',

        // 文件接收服务端。
        server: '<?php echo Url::toRoute(["/attachment/create"])?>',

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '#picker',
        formData:{
            '_csrf':'<?= Yii::$app->request->csrfToken ?>',
        },

        // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
        resize: true,
        // 只允许选择图片文件。
        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,png',
            mimeTypes: 'image/*'
        }
    });
    uploader.on( 'uploadSuccess', function( file ,response ) {
        console.log(response)
        if(!response.error){
            app.loadData();

        }
    });

    uploader.on( 'uploadError', function( file ,reason ) {
        console.log(reason)
    });


</script>
</body>
</html>
