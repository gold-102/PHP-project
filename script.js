
//show nav bar

document.querySelector('.nav-btn').addEventListener("click", function() {
   //document.querySelector('#menus').style.display = "block";
   $('#menus').toggle();
   event.preventDefault();
    
    
});






//submit the form
function formSubmit()
{   
    var firstName =  document.getElementById("fname").value;
    var lastName =  document.getElementById("sname").value;
    var mobNo = document.getElementById("ph").value;
    var email = document.getElementById("mail").value;
    var error = document.getElementById("error-msg");


    var regxx = /^([a-z0-9\.-]+)@([a-z0-9-]+).([a-z]{2,3})(.[a-z]{2,3})$/;


    //first name validation
    if(firstName == ""){
        error.innerHTML = "**Please enter first name**";
        return false;
    }
    if(!isNaN(firstName)) {
        error.innerHTML = "**only characters are allowed**";
        return false;
    }


    //last name validtion
    if(lastName == ""){
        error.innerHTML = "**please enter second name**";
        return false;
    }

    if(!isNaN(lastName)) {
        error.innerHTML = "**only characters are allowed**";
        return false;
    }
    


    //mobileno validation

    if(mobNo == "") {
        error.innerHTML = "**please enter mobile no**";
        return false;
    }

    if(isNaN(mobNo)) {
        error.innerHTML = "**only digits are allowed**";
        return false;
    }
    if(mobNo.length != 10) {
        error.innerHTML = "**Length of digits must be 10 **";
        return false;
    }

    //email validation

    if(email == "") {
        error.innerHTML = "**please enter email** ";
        return false;
    }
    if(regxx.test(email))
    {
        return true;
    }
    else{
        error.innerHTML = "**Invalid Email**";
        return false;
    }


    
    
}







//subscribe functionality

function subScribe() {

    var emailid = document.getElementById("emailid").value;
    var fullname = document.getElementById("fullname").value;
    var msg = document.getElementById("msg");


    //email validation
    var regx = /^([a-z0-9\.-]+)@([a-z0-9-]+).([a-z]{2,3})(.[a-z]{2,3})$/;

    if(emailid == ""){
        msg.innerHTML = "**Please enter Email**";
        return false;
    }

    if(regx.test(emailid))
    {
        return true;
    }
    else{
         msg.innerHTML = "**Invalid Email**";
        return false;
    }








    //name validation
    if(fullname == "") 
    {
        msg.innerHTML = "**Please enter name**";
        return false;
    }

    if(!isNaN(fullname)) {
        msg.innerHTML = "**only characters are allowed**";
        return false;
    }
}