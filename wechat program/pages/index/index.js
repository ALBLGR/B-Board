//index.js
//获取应用实例
var app = getApp()
Page({
  data: {
    motto: 'Hello World',
    userInfo: {},
    count: 1,
    canIUse: wx.canIUse('button.open-type.contact'),
    responseText : '',
    HTTPcode : '',
    isLoading : false
  },
  //事件处理函数
  bindViewTap: function() {
    wx.navigateTo({
      url: '../logs/logs'
    })
  },
  onLoad: function () {
    console.log('onLoad')
    var that = this
    //调用应用实例的方法获取全局数据
    app.getUserInfo(function(userInfo){
      //更新数据
      that.setData({
        userInfo:userInfo
      })
    })
  },
  add: function(e) {
    this.setData({
      count: this.data.count + 1
    })
  },

  clickRequest: function(){
    var that = this
    this.setData({isLoading:true}),
    wx.request({
  url: 'https://board.org.cn/console/databaseaccess.php', //仅为示例，并非真实的接口地址
  data: {
     textData: 'Hi, WeChat Program!' ,
     para: 'viaWeChatRequest',
     json: true
  },
  header: {
      'content-type': 'application/json'
  },
  success: function(res) {
    console.log(res.data),
    that.setData({
      responseText : res.data,
      HTTPcode : res.statusCode,
      isLoading : false
    })
  },
  fail: function(res) {
  that.setData({
    responseText : 'Fail to request content from bBoard!',
    isLoading : false
  })
}


})
  }

})
