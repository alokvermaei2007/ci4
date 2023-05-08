// Define common validation rules and messages
const commonRules = {
    firstname: {
        required: true,
    },
    lastname: {
        required: true,
    },
    mobile: {
        required: true,
    },
    username: {
        required: true,
    },
    password: {
        required: true,
        minlength: 6,
    },
    email: {
        required: true,
        maxlength: 60,
        email: true,
    },
};

const commonMessages = {
    firstname: {
        required: "First Name is required.",
    },
    lastname: {
        required: "Last Name is required.",
    },
    mobile: {
        required: "Mobile is required.",
    },
    username: {
        required: "Username is required.",
    },
    password: {
        required: "Password is required.",
        minlength: "Password must be at least 6 characters long.",
    },
    email: {
        required: "Email is required.",
        email: "It does not seem to be a valid email.",
        maxlength: "The email should be or equal to 60 chars.",
    },
};

// Use common rules and messages for each form
if ($("#add_create").length > 0) {
    $("#add_create").validate({
        rules: commonRules,
        messages: commonMessages,
    });
}

if ($("#update_user").length > 0) {
    $("#update_user").validate({
        rules: {
            ...commonRules,
            mobile: {
                ...commonRules.mobile,
                digits: true,
            },
            username: {
                ...commonRules.username,
                minlength: 3,
            },
        },
        messages: {
            ...commonMessages,
            password: {
                minlength: "Password must be at least 6 characters long.",
            },
        },
    });
}
