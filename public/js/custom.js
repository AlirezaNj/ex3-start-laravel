$( document ).ready(function() {

    $('button').click(function (){
        $(this).removeClass();
        $(this).addClass('btn btn-sm btn-success');
        $(this).html('<i class="bi bi-check-lg"></i>');
        question_counter();
    });



    // $('#ahmad').click().addClass('btn btn-sm btn-danger');
});

function question_counter(){
    let all_selected_questions = 0;
    all_selected_questions = $('.btn-success').length;
    $('#show_number_of_questions').html('تعداد سوال:' + all_selected_questions);
}
