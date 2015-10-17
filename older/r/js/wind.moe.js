$(document).ready(function () {
        $.AMUI.progress.start();
    }),
    $(window).load(function () {
        $.AMUI.progress.done();
        console.log("Ծ‸Ծ 哎呀被发现了呢~\n如果您看到了这行文字，那么请收下我最诚挚的祝福  @稗田千秋 - Oct.17 2015");

});
//Loading Progress


//textedit
var editor = new Simditor({
    textarea: $('#editor')
});


//form -> AJAX
function ajaxSubmit(updata, fn) {
    var dataPara = getFormJson(updata);
    $.ajax({
        url: updata.action,
        type: updata.method,
        data: dataPara,
        success: fn
    });
}

//form -> data
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

$(document).ready(function () {
    $('#post-form').bind('submit', function () {
        ajaxSubmit(this, function (data) {
            alert("success!");
        });
        return false;
    });
});