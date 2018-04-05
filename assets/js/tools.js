/**
 * Created by liutengfei on 2018/3/30.
 */
/**
 * senddata(url,sucfun,errfun,async,cache)
 * @param url
 * @param sucfun
 * @param errfun
 * 后边两个可以默认不传
 */
function sendajax(url,data,sucfun,errfun){
    var async=arguments[3]?arguments[3]:true;
    var cache=arguments[4]?arguments[4]:true;
    $.ajax({
        type:'POST',
        url:url,
        data:data,
        contentType: "application/json;charset=utf-8",
        success:function(result,status,xhr){
            console.log(result)
            sucfun(result,status,xhr);
        },
        error:function (result,status,xhr) {
          errfun(result,status,xhr);
        },
        cache:cache,
        async:async,

    });
}
function sendget(url,data,fun){
    $.get(url,data,function(data,status){
            fun(JSON.parse(data),status)
    });
}
function sendpost(url,data,fun) {
    $.post(url,data,function(res, textStatus){
        console.log(111)
        console.log(res)
        fun(JSON.parse(res),textStatus)
    });
}