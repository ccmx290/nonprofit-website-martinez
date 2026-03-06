$("#contactForm").validate({
    rules: {
        firstname: {
            required: true,
            minlength: 2
        },
        lastname: {
            required: true,
            minlength: 2
        },
        email: {
            required: true
        },
        message: {
            required: true,
            minlength: 15
        }
    },

    messages: {
        firstname: "Please enter your first name. Minimum of 2 characters required.",
        lastname: "Please enter your last name. Minimum of 2 characters required.",
        email: "Please enter a valid email address.",
        message: "Please enter a message with a minimum of 15 characters."
    },

    submitHandler: function(form) {
        form.submit();
    }
});

$("input", "textarea").addClass("error");