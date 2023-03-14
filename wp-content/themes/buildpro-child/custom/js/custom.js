
jQuery(document).ready(function($) {


    const GQSubjectOption = $('#getAQuoteFrom #subjectOption');
    const GQOtherSubjectField = $("#getAQuoteFrom #otherSubject");
    GQOtherSubjectField.hide();
    GQSubjectOption.on('change', function() {
        if(this.value == "Others"){
            GQOtherSubjectField.show();
            GQSubjectOption.attr('name', 'otherhide');
            GQOtherSubjectField.attr('name', 'subject');

        }else{
            GQOtherSubjectField.hide();
            GQOtherSubjectField.attr('name', 'otherhide');
            GQSubjectOption.attr('name', 'subject');
        }
    });

    const CFSubjectOption = $('#contact_form #subjectOption');
    const CFOtherSubjectField = $("#contact_form #otherSubject");
    CFOtherSubjectField.hide();
    CFSubjectOption.on('change', function() {
        if(this.value == "Others"){
            CFOtherSubjectField.show();
            CFSubjectOption.attr('name', 'otherhide');
            CFOtherSubjectField.attr('name', 'subject');

        }else{
            CFOtherSubjectField.hide();
            CFOtherSubjectField.attr('name', 'otherhide');
            CFSubjectOption.attr('name', 'subject');
        }
    });
});

