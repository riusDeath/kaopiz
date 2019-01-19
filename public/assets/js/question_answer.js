$(document).ready(function(){
    $('.sg-replace-icons').click(function () {
      var cau = $(this).data("cau");
      inputCheck(cau);
    });
    $('.cau').click(function(){
        var question = $(this).data("iquestion");
        showQuestion(question);
    });
    $(".part").bind("click", function(e){
        var part = $(this).data("part");
        if (part == "part1") {
            $(".change_page_back").hide();
        }
        var start = $(this).data("start");
        $('.part').removeClass('action');
        $('.'+part).addClass('action');
        part_start(start);
    });
    $("#fulltest_page").find(".change_page").bind("click",function(e){
        e.preventDefault();
        var page = $("#fulltest_page").data("page"); 
        var type = $(this).data("type");
        page = page + type ;
        fulltest_change_page(page);
    });
    function showQuestion(question){
        $('.question').hide();
        $('.'+question).show();
        $('.script_answer').hide();
        $('.'+question).find('.script_answer').show();

        var page = $('.'+question).data("page");
        $('#fulltest_page').data("page", page);
        var p = $('.'+question).data("part");
        change_action_part(p);
        if (p=="part3" || p=="part4" || p=="part6" || p=="part7"){
            var media_id = $('.'+question).data("media");
            media_part3_4(media_id);
        }
    }
    function inputCheck(cau){
        var c = "cau_"+cau;
        $('.'+c).find("a").css("background-color", "#00acd6");
    }
    function part_start(start){
        $('.script_answer').hide();
        var fullest_page_next = "fullest_page_"+start;
        $('#fulltest_page').data("page", start);
        $('.question').hide();                    
        $('.'+fullest_page_next).show();
        $('.'+fullest_page_next).find('.script_answer').show();
        var p = $('.'+fullest_page_next).data("part");
        change_action_part(p);
        if (p=="part3" || p=="part4" || p=="part6" || p=="part7"){
            var media_id = $('.'+fullest_page_next).data("media");
            media_part3_4(media_id);
        }
    }
    function change_action_part(p){
        $('.part').removeClass('action');
        $('.'+p).addClass('action');
    }
    function fulltest_change_page(page){
        var limit = parseInt($("#fulltest_page").attr("data-limit"));
        
        if ( page < 2) {
            $(".change_page_back").hide();
        } else if(page == limit){
            $(".change_page_next").hide();
        } else{
            $(".change_page_back").show();
            $(".change_page_next").show();
        }
        $("#fulltest_page").data("page", page);
        var fullest_page_next = "fullest_page_"+page;
        $('.question').hide();                    
        $('.'+fullest_page_next).show();
        $('.'+fullest_page_next).find('.script_answer').show();
        var p = $('.'+fullest_page_next).data("part");
        change_action_part(p);
        if (p=="part3" || p=="part4" || p=="part6" || p=="part7"){
            var media_id = $('.'+fullest_page_next).data("media");
            media_part3_4(media_id);
        }
    }
    function media_part3_4(media_id){
        $('.'+media_id).show();
    }
  
});