function checkPassword(form) {
    password1 = form.password1.value;
    password2 = form.password2.value;

    if (!validatePassword(password1))
        return false;

    // If Not same return False.    
    else if (password1 != password2) {
        alert("\nPassword did not match: Please try again...")
        return false;
    }

    // If same return True.
    else {
        alert("Password Match: Welcome to GeeksforGeeks!")
            // return $('form#form1').submit();
    }
}

function validatePassword(password) {
    var newPassword = password;
    var minNumberofChars = 8;
    var maxNumberofChars = 14;
    var regularExpression = /^(?=.[0-9])(?=.[])[a-zA-Z0-9]{8,14}$/;

    if (newPassword.length < minNumberofChars || newPassword.length > maxNumberofChars) {
        alert("Password length: 8-14");
        return false;
    }
    if (!regularExpression.test(newPassword)) {
        alert("password should contain atleast one number and one special character");
        return false;
    }
}