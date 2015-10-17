$(document).ready(function(){$.AMUI.progress.start()}),
$(window).load(function(){$.AMUI.progress.done()});
//Loading Progress


//textedit
var editor = new Simditor({   textarea: $('#editor') });

//test
//$(document).ready(function(){
//    $('#post-form').ajaxForm(function() { 
//                alert("Thank you for your comment!"); 
//    });
//});


//将form转为AJAX提交
function ajaxSubmit(updata, fn) {
    var dataPara = getFormJson(updata);
    $.ajax({
        url: updata.action,
        type: updata.method,
        data: dataPara,
        success: fn
    });
}

//将form中的值转换为键值对。
function getFormJson(updata) {
    var o = {};
    var a = $(updata).serializeArray();
    $.each(a, function () {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
}

$(document).ready(function(){
    $('#post-form').bind('submit', function(){
        ajaxSubmit(this, function(data){
            alert("success!");
        });
        return false;
    });
});