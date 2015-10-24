var g_Article_Num = null;
var g_Article_Essay_Num = null;
var g_Article_Code_Num = null;
var g_Article_Daily_Num = null;

$(document).ready(function () {
        $.AMUI.progress.start();
        $.getJSON("./api/articles/max", function (json) {
            g_Article_Num = json;
            var this_url = window.location.pathname;
            if (this_url.indexOf("essay") > 0) {
                getCategoryJson("essay");
            } else if (this_url.indexOf("code") > 0) {
                getCategoryJson("code");
            } else if (this_url.indexOf("daily") > 0) {
                getCategoryJson("daily");
            } else if (this_url.indexOf("search") > 0) {
                var tmp_keyword = this_url.split("search/")[1];
                wind_search(tmp_keyword);
            }else if (this_url.indexOf("links") > 0) {
                $("#bread_del").remove(); 
            } 
            else {
                getArticleJson();
                
            }
        });
    }),
    $(window).load(function () {
        $.AMUI.progress.done();
        getRandomJson();
        window.console.log("Ծ‸Ծ 哎呀被发现了呢~\n如果您看到了这行文字，那么请收下我最诚挚的祝福  @稗田千秋 - Oct.17 2015");
        
    }
);

//在这里从api/article/max获取当前置顶文章数量进行比较

//Loading Progress


//textedit
if (document.getElementById("editor")) {
    var editor = new Simditor({
        textarea: $('#editor')
    });
} else {};


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
            parent.location.href = "/articles"
        });
        return false;
    });
});

//前端渲染  
function getArticleJson() {
    var article_Url = null;
    var flag = 1;
    $.getJSON("/api/more/" + g_Article_Num, function (json) {
        //alert("JSON Data : " + json);
        //重用代码 减少耦合
        $.each(json, function (index, domEle) {
            console.log(domEle);
            g_Article_Num = g_Article_Num - 1;
            if (domEle !== null) {
                $("#add_more").html(function (index, oldHtml) {
                    var text = "<div class=\"am-article\">";
                    text += " <h3 class=\"am-article-title blog-title am-text-center am-animation-fade\">";
                    text += "<a href=\"/articles/";
                    text += domEle.id;
                    text += "\" style=\"\">";
                    text += domEle.title;
                    text += "</a></h3>";
                    text += "<h4 class=\"am-article-meta blog-meta am-text-center\" style=\"margin-top:-10px;color:#888;\">";
                    text += domEle.published_at.toString();
                    text += " under " + domEle.category;
                    text += "</h4>";
                    text += "<div  class=\"am-animation-fade\">";
                    text += domEle.text.split('<!--more-->')[0];
                    text += "</div>";
                    text += "<p class=\"am-text-center\"><a href=\"/articles/";
                    text += domEle.id;
                    text += "\" class=\"am-text-lg\">-More-</a>";
                    text += "<hr data-am-widget=\"divider\" style=\"\" class=\"am-divider am-divider-default\" />"
                    text += "</div>";

                    var test = oldHtml + text;
                    return test;
                });
            }
            if (domEle === null && flag == 1) {
                flag = 0;
                window.console.log("到底了");
                g_Article_Num = 0;
                $("#load_more").html(function (index, oldHtml) {
                    var load = "<p class=\"am-text-center\" >-The End-</p>";
                    return load;
                });

            }
        });
    })
};

//其他页面的渲染
function getCategoryJson(page_Category) {
    var article_Url = null;
    var flag = 1;
    $.getJSON("/api/category/" + page_Category + "/" + g_Article_Num, function (json) {
        //alert("JSON Data : " + json);

        $.each(json, function (index, domEle) {
            console.log(domEle);
            g_Article_Num = g_Article_Num - 1;
            if (domEle != null) {

                if (domEle.category === page_Category) {

                    $("#add_more").html(function (index, oldHtml) {
                        var text = "<div class=\"am-article\">";
                        text += " <h3 class=\"am-article-title blog-title am-text-center am-animation-fade\">";
                        text += "<a href=\"/articles/";
                        text += domEle.id;
                        text += "\" style=\"\">";
                        text += domEle.title;
                        text += "</a></h3>";
                        text += "<h4 class=\"am-article-meta blog-meta am-text-center\" style=\"margin-top:-10px;color:#888;\">";
                        text += domEle.published_at.toString();
                        text += " under " + domEle.category;
                        text += "</h4>";
                        text += "<div  class=\"am-animation-fade\">";
                        text += domEle.text.split('<!--more-->')[0];
                        text += "</div>";
                        text += "<p class=\"am-text-center\"><a href=\"/articles/";
                        text += domEle.id;
                        text += "\" class=\"am-text-lg\">-More-</a>";
                        text += "<hr data-am-widget=\"divider\" style=\"\" class=\"am-divider am-divider-default\" />"
                        text += "</div>";

                        var test = oldHtml + text;
                        return test;
                    });
                }
            }
            if (domEle === null && flag == 1 || g_Article_Num == 1) {
                flag = 0;
                window.console.log("到底了");
                g_Article_Num = 0;
                $("#load_more").html(function (index, oldHtml) {
                    var load = "<p class=\"am-text-center\" >-The End-</p>";
                    return load;
                });

            }
        });
    })
};

function wind_search(t_keyword) {
    //    var t_keyword = eval(document.getElementById('keyword')).value;
    $.getJSON("./api/search/" + t_keyword, function (json) {
        console.log(json);
        $.each(json, function (index, domEle) {
            console.log(domEle);
            if (domEle != null) {
                $("#add_more").html(function (index, oldHtml) {
                    var text = "<div class=\"am-article\">";
                    text += " <h3 class=\"am-article-title blog-title am-text-center am-animation-fade\">";
                    text += "<a href=\"/articles/";
                    text += domEle.id;
                    text += "\" style=\"\">";
                    text += domEle.title;
                    text += "</a></h3>";
                    text += "<h4 class=\"am-article-meta blog-meta am-text-center\" style=\"margin-top:-10px;color:#888;\">";
                    text += domEle.published_at.toString();
                    text += " under " + domEle.category;
                    text += "</h4>";
                    text += "<div class=\"am-animation-fade\">";
                    text += domEle.text.split('<!--more-->')[0];
                    text += "</div>";
                    text += "<p class=\"am-text-center\"><a href=\"/articles/";
                    text += domEle.id;
                    text += "\" class=\"am-text-lg\">-More-</a>";
                    text += "<hr data-am-widget=\"divider\" style=\"\" class=\"am-divider am-divider-default\" />"
                    text += "</div>";

                    var test = oldHtml + text;
                    return test;
                });
            }

        });
    });
};


function search_redirect() {
    var goto_url = 'http://localhost:8000/search/' + eval(document.getElementById('keyword')).value;
    window.location.href = goto_url;
}

//get random article
function getRandomJson() {
    $.getJSON("http://localhost:8000/api/random/article", function (json) {
        $.each(json, function (index, domEle) {
            console.log(domEle);
            if (domEle !== null) {
                $("#sidebar_random").html(function (index, oldHtml) {
                    var text = "<div class=\"am-text-truncate\" style=\"width:180px;\"><a href=\"http://localhost:8000/articles/";
                    text += domEle.id;
                    text += "\" class=\"am-link-muted am-text-truncate\">";
                    text += domEle.title;
                    text += "</a></div>";
                    var test = oldHtml + text;
                    return test;
                });
            }
        });
    })
};
