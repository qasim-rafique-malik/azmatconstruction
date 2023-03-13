
jQuery(document).ready(function($) {


    const subjectOption = $('#getAQuoteFrom #subjectOption');
    const otherSubjectField = $("#getAQuoteFrom #otherSubject");
    otherSubjectField.hide();
    subjectOption.on('change', function() {
        if(this.value == "Others"){
            otherSubjectField.show();
            subjectOption.attr('name', 'otherhide');
            otherSubjectField.attr('name', 'subject');

        }else{
            otherSubjectField.hide();
            otherSubjectField.attr('name', 'otherhide');
            subjectOption.attr('name', 'subject');
        }
    });
});

