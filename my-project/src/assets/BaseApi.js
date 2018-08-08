
const HOST_NAME = process.env.HOST_NAME
const BACK_NAME = process.env.BACK_NAME
export const http = HOST_NAME
export const back = BACK_NAME
export const https = 'https://www.xiaoniren.cn'

// 获取merchant_id
export const MerchantId = http + '/weapp-api/merchant?appid='
// 请求商品详情
export const Goods = http + '/restapi/goods'
// 请求商品分类
export const GoodsCategory = http + '/restapi/goods-category'
// 请求商品分类
export const GoodssCategory = https + '/restapi/goods-category'
// 请求单页数据
export const WechatPage = http + '/restapi/wechat-page'
// 后台母版地址
export const Www1 = http + '/weapp-config/setting'
// 前台及子版地址
export const BackEnd = back + '/weapp-template/setting?id='
// 请求商品栏数据
export const Goodss = https + '/restapi/goods'
// 请求地址分类数据
export const TemplatePage = back + '/weapp-template/page?temp_id='
