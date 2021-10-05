function validatePassword() {
    var newPassword = document.getElementById('changePasswordForm').newPassword.value;
    var minNumberofChars = 8;
    var maxNumberofChars = 14;
    var regularExpression = /^(?=.[0-9])(?=.[])[a-zA-Z0-9]{8,14}$/;
    alert(newPassword);
    if (newPassword.length < minNumberofChars || newPassword.length > maxNumberofChars) {
        return false;
    }
    if (!regularExpression.test(newPassword)) {
        alert("password should contain atleast one number and one special character");
        return false;
    }
}