var express = require('express')
var app = express()

// 本地json-server服务器搭建代码
// 引入数据库文件
var appData = require('../static/data/1.json');
var apiRoutes = express.Router()
// 使用api的方法来创建连接时候的请求
apiRoutes.post('/test', function (req, res) {
  res.json({
    errno: 0 ,
    data: appData
  });
})

apiRoutes.post('/test2', function (req, res) {
  res.json({
    errno: 0 ,
    data: appData.data.slide
  });
})


module.exports = apiRoutes;
// 调用api
//app.use('/api', apiRoutes);
//axios.post('/api/test2,{"abc":234}); 这样的形式调用