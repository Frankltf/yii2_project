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
function sendajax(url,sucfun,errfun){
    var async=arguments[3]?arguments[3]:true;
    var cache=arguments[4]?arguments[4]:true;
    $.ajax({
        url:"demo_test.txt",
        success:function(result,status,xhr){
            errfun(result,status,xhr);
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
    $.post(url,data,fun,function(data, textStatus){
        fun(JSON.parse(data),status)
    });
}