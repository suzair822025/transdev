$(document).ready(function(){
    // Contact Page Scripts
    $('#contactForm').formValidation({
        framework: 'bootstrap',
        fields: {
            name: {
                validators: {
                    notEmpty:{
                        message: 'The name field is required.'
                    },
                    regexp: {
                        regexp: /^[ a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email field is required.'
                    },
                    emailAddress: {
                        message: 'Please enter a valid email address'
                    }
                }
            },
            subject: {
                validators: {
                    notEmpty:{
                        message: 'The subject field is required.'
                    }
                }
            },
            phone:{
                validators: {
                    notEmpty:{
                        message: 'The phone field is required.'
                    }
                }
            },
            clientmessage:{
                 validators: {
                    stringLength: {
                        max: 400,
                        message: 'The bio must be less than 200 characters'
                    },
                    notEmpty:{
                        message: 'The message field is required'
                    }
                }
            }
        }
    })
    .on('success.form.fv', function(e) {
        // Prevent form submission
         e.preventDefault();
        var $form = $(e.target);
        var fv = $form.data('formValidation');
        fv.defaultSubmit();
     });
// Contact Page Scripts ends

        
// Career Page Scripts
    $('#careersForm').formValidation({
        framework: 'bootstrap',
        fields: {
            name: {
                validators: {
                    notEmpty:{
                        message: 'Please enter your name'
                    },
                    regexp: {
                        regexp: /^[ a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'Please enter a valid email address'
                    }
                }
            },
            phone:{
                validators: {
                    notEmpty:{
                        message: 'Please enter your contact number'
                    }
                }
            },
            native_language:{
                validators: {
                    notEmpty:{
                        message: 'Please enter your native language'
                    }
                }
            },
            careerFile: {
                validators: {
                    file: {
                        extension: 'doc,docx,pdf,rtf',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf',
                        maxSize: 5*1024*1024,   // 5 MB
                        message: 'The selected file is not valid, it should be (doc,docx,pdf,rtf) and 5 MB at maximum.'
                    }
                }
            }

        }
    })
    .on('success.form.fv', function(e) {
        // Prevent form submission
         e.preventDefault();
        var $form = $(e.target);
        var fv = $form.data('formValidation');
        fv.defaultSubmit();
     });
// Career Page Scripts ends


// Subscribe Page Scripts
    $('#subscribeForm').formValidation({
        framework: 'bootstrap',
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'Please enter a valid email address'
                    }
                }
            },
            notification_type:{
                err: '#alertNotifytypeMessage',
                validators: {
                    notEmpty:{
                        message: 'The notification type field is required.'
                    }
                }
            }
        }
    })
    .on('success.form.fv', function(e) {
        // Prevent form submission
         e.preventDefault();
        var $form = $(e.target);
        var fv = $form.data('formValidation');
        fv.defaultSubmit();
     });
// Subscribe Page Scripts ends

// get quote Page Scripts
$('#get-quote-form').formValidation({
    framework: 'bootstrap',
    fields: {
        first_name: {
            validators: {
                notEmpty:{
                    message: 'Please enter your firstname'
                }
            }
        },
        last_name: {
            validators: {
                notEmpty:{
                    message: 'Please enter your last name'
                },
            }
        },
        email: {
            validators: {
                notEmpty: {
                    message: 'The email address is required'
                },
                emailAddress: {
                    message: 'Please enter a valid email address'
                }
            }
        },
        phone:{
            validators: {
                notEmpty:{
                    message: 'Please enter your contact number'
                }
            }
        },
        option:{
            validators: {
                notEmpty:{
                    message: 'Please Select option'
                }
            }
        },
        comments:{
            validators: {
                notEmpty:{
                    message: 'Please enter any comment'
                }
            }
        },
        quoteFile: {
            validators: {
                file: {
                    extension: 'mp4,avi,ogg,webm,pdf,doc,docx,mp3,wav,wma,aiff,pcm,flac',
                    message: 'The selected file is not valid, it should be (mp4,avi,ogg,webm,pdf,doc,docx,mp3,wav,wma,aiff,pcm,flac) and 5 MB at maximum.'
                }
            }
        },
        from_language_id: {
            validators: {
                callback : {
                    message : 'Language is not selected',
                    callback : function (input) {
                        if ($('[name=option]:checked').val() === 'transcribe') {
                            return true;
                        }
                        return input !== null;
                    }
                }

            }
        },
        to_language_id: {
            validators: {
                notEmpty:{
                    message: 'Target Language is not selected'
                }
            }
        }

    }
})
.on('success.form.fv', function(e) {
    // Prevent form submission
     e.preventDefault();
    var $form = $(e.target);
    var fv = $form.data('formValidation');
    fv.defaultSubmit();
 });
// get quote Page Scripts ends

});    // ready ends


$('#register_form').formValidation({
    framework: 'bootstrap',
    fields: {
        name: {
            validators: {
                notEmpty:{
                    message: ' '
                }
            }
        },
        last_name: {
            validators: {
                notEmpty:{
                    message: ' '
                }
            }
        },
        email: {
            validators: {
                notEmpty: {
                    message: ' '
                },
                emailAddress: {
                    message: 'Please enter a valid email address'
                }
            }
        },
        phone:{
            validators: {
                notEmpty:{
                    message: ' '
                }
            }
        },
        company:{
            validators: {
                notEmpty:{
                    message: ' '
                }
            }
        },
        password:{
            validators: {
                notEmpty:{
                    message: ' '
                }
            }
        },
        password_confirmation:{
            validators: {
                identical: {
                    field: 'password',
                    message: 'The password and its confirm are not the same'
                }
            }
        }
    }
})
