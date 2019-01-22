 $(document).ready(function(){
        // // add remove question part 
        $('.btn-addQuestionPart').on('click', function(e){
            e.preventDefault();
            var dbl = $(this).attr('data-dblPart');
            var divid = $(this).attr('data-div');
            $('.'+dbl).clone().appendTo(''+divid);
            // $('.questionPart4').clone().appendTo('#addPart3');
            $('.btn-removeQuestionPart').show();
            $(divid+' .'+dbl+':last-child input').val(null);
        });

        $('.btn-removeQuestionPart').on('click', function(e){
            var dbl = $(this).attr('data-dblPart');
            var divid = $(this).attr('data-div');
            $(divid+' .'+dbl+':last-child').remove();
        });

        $('.c-Edit').dblclick(function(){
            // $('')
            alert('ok');
        });

        $(document).on('click', '.btn-remove', function(){
                var idtable = $(this).attr('data-table');
                var url = $(this).attr('linkUrl');
                var del = confirm('You want to delete !');
                if (del == true) {
                    $.ajax({
                        url: url,
                        type: 'GET',
                        success: function(data) {
                            $(''+idtable).load(location.href +' '+idtable+'>*');
                            $('#part1').load(location.href +' #part1>*');
                            alert(data);
                        }
                    });  
                }
            }); 

        $('input[type=file]').change(function() {
        var link = $(this).data("link");
        var file = $(this).get(0).files[0];
        if (file!=undefined) {
            var reader  = new FileReader();

            reader.addEventListener("load", function () {
                $('.'+link).attr("src",reader.result )  ;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        } else {
                $('.'+link).removeAttr('src');  ;
        }
    });
    });