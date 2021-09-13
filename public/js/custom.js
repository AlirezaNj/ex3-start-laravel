$( document ).ready(function() {

    $('button').click(function (){
        $(this).removeClass();
        $(this).addClass('btn btn-sm btn-success');
        $(this).html('<i class="bi bi-check-lg"></i>');
        question_counter();
    });


    $( "input[type=checkbox]" ).on( "click", function (){
        all_questions = $('#questions').find('span[id='+this.id+']').parent().parent().parent().parent().parent().toggleClass().toggle();
        // all_questions = $('#questions').find('span[id='+this.id+']').parent("div[id^='question_card_']").toggleClass().toggle();
    });


});

function question_counter(){
    let all_selected_questions = 0;
    all_selected_questions = $('.btn-success').length;
    $('#show_number_of_questions').html('تعداد سوال:' + all_selected_questions);
}
