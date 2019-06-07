function checkUserName(){
    var userNameLength = $('#userName').val().length;
    if(userNameLength>=6 && userNameLength<=15) {
        $('#userNameError').text(" ");
    }
    else{
            $('#userNameError').text("User Name must be between 6 to 15 characters");
        }
}


$('#userName').click(function () {
    checkUserName();
})
$('#userName').blur(function () {
    checkUserName();
})
$('#userName').keyup(function () {
    checkUserName();
})

function checkPassword() {
    var passwordLength = $('#password').val().length;
    if(passwordLength>=6 && passwordLength<=15){
        $('#passwordError').text(" ");
    }
    else
        $('#passwordError').text("password must be between 5 to 10 characters");
}
$('#password').click(function () {
    checkPassword();
})
$('#password').blur(function () {
    checkPassword();
})
$('#password').keyup(function () {
    checkPassword();
})
function checkConfirmPassword() {
    var confirmPassword = $('#confirmPassword').val();
    var password = $('#password').val();
    if(confirmPassword==password){
        $('#confirmPasswordError').text('password matched');
    }
    else
        $('#confirmPasswordError').text("password does not matched");
}
$('#confirmPassword').click(function () {
    checkConfirmPassword();
})
$('#confirmPassword').blur(function () {
    checkConfirmPassword();
})
$('#confirmPassword').keyup(function () {
    checkConfirmPassword();
})
