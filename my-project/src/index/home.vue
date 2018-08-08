<style>
.indexitem {
    width: 100%;
}
.indexitem_body {
    width: 100%;
}
.indexitem_header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background-color: rgba(255, 255, 255, 0.534);
    border-bottom: 2px solid #eee;
    z-index: 999999;
}
.indexitem_header_left {
    float: left;
}
.indexitem_header_left_img {
    width: 76px;
    height: 76px;
    border-radius: 10px;
    overflow: hidden;
    margin: 12px;
    margin-left: 30px;
    float: left;
}
.indexitem_header_left_name {
    float: left;
    font-size: 28px;
    line-height: 100px;
}
.indexitem_header_left_make {
    float: right;
    width: 144px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    font-size: 28px;
    border-radius: 10px;
    margin: 20px;
    margin-right: 30px;
    color: #fff;
    background-color: #52b0ff;
}
/* 文章标题 */
.indexitem_titile {
    margin-top: 100px;
    width: 100%;
    height: 128px;
    line-height: 40px;
    padding: 30px 30px 26px 30px;
    box-sizing: border-box;
}
.indexitem_titile_name {
    font-size: 28px;
}
.indexitem_titile_rest {
    font-size: 24px;
    color: #b0b0b0;
}
.indexitem_titile_rest span {
    margin-right: 33px;
}
/* 图文 */
.indexitem_container {
    width: 100%;
}
.indexitem_container_item {
    width: 100%;
    padding: 0px 30px;
    box-sizing: border-box;
}
.indexitem_container_name {
    width: 100%;
    font-size: 28px;
    padding: 30px 0px;
}
.indexitem_container_img {
    width: 100%;
    height: 622px;
}
.indexitem_container_video {
    width: 100%;
    height: 420px;
}
/* 底部TABber栏 */
.indexitem_footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 98px;
    line-height: 98px;
    padding: 0px 32px;
    border: 2px solid #eee;
    background-color: #fff;
    text-align: center;
    box-sizing: border-box;
    font-size: 28px;
    display: flex;
}
.indexitem_footer_item {
    flex: 1;
    width: 48%;
    text-align: left;
    color: #333;
}
.indexitem_footer_item_img {
    display: block;
    width: 48px;
    height: 48px;
    margin: 26px 18px 21px 80px;
    float: left;
}
.indexitem_footer_shu {
    width: 4px;
    height: 40px;
    margin: 29px 0px;
    text-align: center;
    background-color: #ccc;
}
/* 打赏 */
.indexitem_hot {
    width: 100%;
    height: 300px;
    padding: 0px 30px;
    border-bottom: 2px solid #eee;
    box-sizing: border-box;
}
.indexitem_hot_guli {
    width: 100%;
    height: 70px;
    line-height: 70px;
    text-align: center;
    font-size: 24px;
    color: #999;
}
.indexitem_hot_give {
    width: 148px;
    height: 61px;
    line-height: 61px;
    text-align: center;
    background-color: #ffb05b;
    color: #fff;
    font-size: 32px;
    border-radius: 20px;
    margin: 0 auto;
    margin-top: 27px;
}
.indexitem_hot_givenum {
    width: 100%;
    height: 66px;
    line-height: 66px;
    text-align: center;
    color: #999;
    font-size: 24px;
}
.indexitem_hot_readandpraise {
    width: 100%;
    height: 75px;
    line-height: 75px;
    text-align: left;
    color: #999;
    font-size: 24px;
}
.indexitem_hot_readandpraise_item {
    height: 28px;
    line-height: 28px;
    margin-right: 55px;
    float: left;
}
.indexitem_hot_readandpraise_img {
    width: 28px;
    height: 28px;
    float: right;
    margin-left: 8px;
    cursor: pointer;
}
/* 关注 */
.home_content_attention_no {
    width: 100%;
}
.home_content_attention_item {
    width: 100%;
    height: 162px;
    padding: 25px 30px;
    box-sizing: border-box;
}
.home_attention_item_left {
    float: left;
}
.home_attention_item_left_img {
    width: 111px;
    height: 111px;
    border-radius: 50%;
    float: left;
}
.home_attention_item_left_name {
    float: left;
    margin-left: 20px;
    line-height: 45px;
    padding: 18px 0px;
}
.home_item_left_nametop {
    font-size: 30px;
}
.home_item_left_namebottom {
    font-size: 26px;
    color: #999;
}
.home_attention_item_right {
    float: right;
    margin-top: 30px;
    width: 120px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    font-size: 26px;
    border-radius: 30px;
    cursor: pointer;
}
.indexitem_images {
    width: 60%;
    height: 60%;
}
/* 音乐 */
.indexitem_audio {
    width: 80px;
    height: 80px;
    line-height: 120px;
    text-align: center;
    position: fixed;
    top: 120px;
    right: 30px;
    border-radius: 50%;
    overflow: hidden;
    background-color: #fff;
    border: 1px solid #ccc;
    z-index: 98999;
}
.images {
    width: 100%;
    height: 100%;
}
.zhanweizhi {
    width: 100%;
    height: 96px;
}
.audieo {
    width: 100%;
    height: 60px;
}
</style>

<template>
    <div class="indexitem">
        <div class="indexitem_header">
            <div class="indexitem_header_left">
                <div class="indexitem_header_left_img">
                    <img class="images" src="http://www.wenzhang.xiaoniren.cn/word-info/static/img/3.png">
                </div>
                <div  class="indexitem_header_left_name">分享美丽</div>
            </div>
            <div class="indexitem_header_left_make" @click="make">开始制作</div>
        </div>
        <div class="indexitem_body">
            <div class="indexitem_titile">
                <div class="indexitem_titile_name">{{items.title}}</div>
                <div class="indexitem_titile_rest">
                    <span>{{items.create_time}}</span>
                    <span>{{items.nickname}}</span>
                    <span>阅读{{items.read_quantity}}</span>
                </div>
            </div>
            <div class="indexitem_audio" @click="audioshowhide(items.bgmusic)">
                <img class="images" src="http://www.wenzhang.xiaoniren.cn/word-info/static/img/3.png" alt="">
            </div>
            <div class="zhanweifu_min"></div>
            <audio class="audieo" ref='audio' src="http://zhangmenshiting.qianqian.com/data2/music/6b1355835e52ee9dd4ac3e23158c4697/596654708/596654708.mp3?xcode=7935fd99979b9737afe7b73b41f866fe" controls></audio>
            <!-- <a-player :music="musicarr" autoplay></a-player> -->
            <div class="indexitem_container">
                <div class="indexitem_container_item" v-for="(item,key) in items.details" :key="key">
                    <div class="indexitem_container_name">{{item.content}}</div>
                    <img v-if="item.type == 1" class="images" :src="http + item.view" mode="widthFix" alt="">
                    <!-- <video 
                        class="indexitem_container_video" 
                        v-if="item.type == 2"
                        playsinline
                        webkit-playsinline
                        x5-video-player-type="h5"
                        :controls="controls == key"
                        :src="http + item.view"
                        v-on:mouseenter="HelpcenterShow(key)"
                        v-on:mouseleave="HelpcenterHide()">
                    </video> -->
                    <video-player
                     class="video-player vjs-custom-skin"
                     v-if="item.type == 2"
                     ref="videoPlayer"
                     :playsinline="true"
                     :options="playarr[key]"
                     :src="http + item.view"
                     @play="onPlayerPlay($event)"
                     @pause="onPlayerPause($event)"
                    >
                    </video-player>
                </div>
            </div>
            <div class="indexitem_hot">
                <div class="indexitem_hot_guli">如果喜欢的我的作品，请赞赏鼓励哦</div>
                <div class="indexitem_hot_give" @click="reward">打赏</div>
                <div class="indexitem_hot_givenum">3人打赏</div>
                <div class="indexitem_hot_readandpraise">
                    <div class="indexitem_hot_readandpraise_item" @click="dianzan(items.id)">
                        <span>{{items.zan}}</span>
                        <img class="indexitem_hot_readandpraise_img" :src="zanarr[items.zan_type]" alt="">
                    </div>
                    <div class="indexitem_hot_readandpraise_item">{{items.read_quantity}}  阅读</div>
                </div>
            </div>
            <div class="home_content_attention_no">
                    <div class="home_content_attention_item">
                        <div class="home_attention_item_left">
                            <img class="home_attention_item_left_img" :src="items.touxiang" alt="">
                            <div class="home_attention_item_left_name">
                                <div class="home_item_left_nametop">{{items.nickname}}</div>
                                <div class="home_item_left_namebottom">每篇摄影师</div>
                            </div>
                        </div>
                        <div class="home_attention_item_right" @click="dotattention(items.openid)" :style="{backgroundColor:attnf[items.g_type].bgc,color:attnf[items.g_type].color}">
                            {{attnf[items.g_type].name}}
                        </div>
                    </div>
                </div>
            <div class="zhanweizhi"></div>
            <div class="indexitem_footer">
                <div class="indexitem_footer_item" @click.stop="more">
                    <img class="indexitem_footer_item_img" src="http://www.wenzhang.xiaoniren.cn/word-info/static/img/shouye.png" alt="">
                    更多美文
                    </div>
                <div class="indexitem_footer_shu"></div>
                <div class="indexitem_footer_item" @click="shareApp">
                    <img class="indexitem_footer_item_img" src="http://www.wenzhang.xiaoniren.cn/word-info/static/img/zhuanfa.png" alt="">
                    转发给朋友
                </div>
            </div>
       </div>
    </div>
</template>

<script>

import wx from 'weixin-js-sdk'
import VueAplayer from 'vue-aplayer'
// let jssdk = new JSSDK('wxf728037082736173', 'bafaf3b46d1b1a439316ead339be17dd')


export default {
    data() {
        return {
            // 歌曲
            musicarr:{
                title:'',
                author: '',
                url: 'http://zhangmenshiting.qianqian.com/data2/music/6b1355835e52ee9dd4ac3e23158c4697/596654708/596654708.mp3?xcode=7935fd99979b9737afe7b73b41f866fe',
                pic: '',
                lrc: ''
            },
            // 
            attnf:[
                {
                  name:'关注',
                  color:'#fff',
                  bgc:'#57a7fe'
                },
                {
                  name:'已关注',
                  color:'#999',
                  bgc:'#eee'
                }
            ],
            controls:null,
            items:{},
            // 赞状态
            zanarr:[
                'http://www.wenzhang.xiaoniren.cn/word-info/static/img/zan.png','http://www.wenzhang.xiaoniren.cn/word-info/static/img/zanred.png'
            ],
            //   组件需要
            loadingStatus: false,
            requestStatus: '',
            http:'http://www.wenzhang.xiaoniren.cn',
            // 音乐状态
            aid:1,
            openid:'',
            id:'',
            // 视频组件
            playarr:[],
            playerOptions: {
                //        playbackRates: [0.7, 1.0, 1.5, 2.0], //播放速度
                autoplay: false, //如果true,浏览器准备好时开始回放。
                muted: false, // 默认情况下将会消除任何音频。
                loop: false, // 导致视频一结束就重新开始。
                preload: 'auto', // 建议浏览器在<video>加载元素后是否应该开始下载视频数据。auto浏览器选择最佳行为,立即开始加载视频（如果浏览器支持）
                language: 'zh-CN',
                aspectRatio: '16:9', // 将播放器置于流畅模式，并在计算播放器的动态大小时使用该值。值应该代表一个比例 - 用冒号分隔的两个数字（例如"16:9"或"4:3"）
                fluid: true, // 当true时，Video.js player将拥有流体大小。换句话说，它将按比例缩放以适应其容器。
                sources: [
                    {   
                        type: "video/mp4",
                        src: "http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" //你的视频地址（必填
                    },
                    {   
                        type: "video/mp4",
                        src: "http://www.wenzhang.xiaoniren.cn/upload/article/2018/0725/15325042672364.mp4" //你的视频地址（必填
                    },
                ],
                poster: "poster.jpg", //你的封面地址
                width: document.documentElement.clientWidth,
                notSupportedMessage: '此视频暂无法播放，请稍后再试', //允许覆盖Video.js无法播放媒体源时显示的默认信息。
                //        controlBar: {
                //          timeDivider: true,
                //          durationDisplay: true,
                //          remainingTimeDisplay: false,
                //          fullscreenToggle: true  //全屏按钮
                //        }
            }
        }
    },
    components: {
        'a-player': VueAplayer
    },
    mounted() {     
        console.log(wx)
      // 获取URL 地址参数
      var getUrlStr =  function(name) {
        　var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        　var r = window.location.search.substr(1).match(reg);
            　if(r != null) return unescape(r[2]);
            　return null;
      }
      this.id = getUrlStr ("id")
      this.openid = getUrlStr ("openid")
      this.articledetails()
    },
    computed: {
        player() {
            return this.$refs.videoPlayer.player
        }
    },
    methods:{
        // 分享
        shareApp(){        
            wx.miniProgram.navigateTo({url:'../../pages/share/main?id='+ this.id + '&name=' + this.items.title })
        },
        // 视频组件
        onPlayerPlay(player) {
            // alert("play");
        },
        onPlayerPause(player){
            // alert("pause");
        },
        // 结束播放
        HelpcenterShow(e) {
            this.controls = e
        },
        HelpcenterHide() {
            this.controls = null
        },
        // 音乐播放
        audioshowhide(src) {
            console.log(this.$refs.audio)
            console.log(this.items.bgmusic)
            // wx.translateVoice(src)
            wx.playVoice(src)
            // this.$refs.audio.src = this.items.bgmusic
        },
        // 关注接口
        dotattention (id) {
            var _this = this
            this.$ajax.post('http://www.wenzhang.xiaoniren.cn/restapi/follow/create', {
                use_openid: this.openid || '121212',
                follow_openid: id
            })
            .then(function (res) {
                if(res.data.success) {
                    _this.$message({
                        showClose: true,
                        message: res.data.data.msg,
                        type: 'success'
                    });
                    _this.items.g_type = res.data.data.data.g_type
                }else {
                    console.log(res)
                }
            })
            .catch(function (res) {
                console.log(res)
            })
        },
        // 点赞
        dianzan (id) {
            var _this = this
            this.$ajax.post('http://www.wenzhang.xiaoniren.cn/restapi/article-zan/create', {
                openid: this.openid  || '121212',
                aid: id
    
            })
            .then(function (res) {
                if(res.data.success) {
                    _this.$message({
                        showClose: true,
                        message: res.data.data.msg,
                        type: 'success'
                    });
                    _this.items.zan_type = res.data.data.data.zan_type
                    _this.items.zan = res.data.data.data.zan
                }else {
                    _this.$message({
                        showClose: true,
                        message: '点赞失败啦',
                    });
                    console.log(res.data)
                }
            })
            .catch(function (res) {
                console.log(res)
            })
        },
        // 更多
        more () {
            wx.miniProgram.switchTab({url:'../../pages/index/main'})
        },
        // 制作
        make () {
            wx.miniProgram.switchTab({url:'../../pages/publish/main'})
        },
        // 打赏
        reward () {
            wx.miniProgram.navigateTo({url:'../../pages/reward/main'})
        },
        // 文章详情
        articledetails () {
            var _this = this
            this.$ajax.get('http://www.wenzhang.xiaoniren.cn/restapi/article/view', {
                params: {
                    openid: this.openid  || '121212',
                    id: this.id  || '19'
                }
            })
            .then(function (res) {
                _this.items = res.data.data
                _this.musicarr.url = res.data.data.bgmusic
                var data = res.data.data.details
                for (let i = 0; i < data.length; i++) {
                    var playerOptions = {
                        autoplay: false,
                        muted: false,
                        loop: false,
                        preload: 'auto',
                        language: 'zh-CN',
                        aspectRatio: '16:9',
                        fluid: true,
                        sources: [
                            {   
                                type: "video/mp4",
                                src: _this.http + data[i].view
                            }
                        ],
                        poster: _this.http + data[i].image,
                        width: document.documentElement.clientWidth,
                        notSupportedMessage: '此视频暂无法播放，请稍后再试',
                        controlBar: {
                            timeDivider: false,
                            durationDisplay: false,
                            remainingTimeDisplay: false,
                            fullscreenToggle: false  //全屏按钮
                        }
                    }
                    _this.playarr.push(playerOptions)
                }
                console.log('请求数据成功')
            })
            .catch(function (err) {
                console.log(err)
                console.log('请求失败了')
            });
        },
    },
    onUnload () {
        wx.miniProgram.navigateBack({
            delta: 1
        })
    },
    onReachBottom(){
        // this.currentPage++
        // if(this.currentPage <= this.maxPage){
        //     this.$refs.loading.show()
        //     this.articledetails()
        // }
    },
}
</script>