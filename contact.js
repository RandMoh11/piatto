function sendMessage(){
    var name =document.getElementById("name").value;
        var email =document.getElementById("email").value;
            var message =document.getElementById("message").value;
            if(name == ""){
                window.alert("name is required");
                return false;
            }
            else if(email.indexOf("@")==-1){
            window.alert("email is not valid");
            return false;    
            }
else if(message == ""){
                window.alert("message can not be empty");
                return false;
            }
else{
                    window.alert("message send successfully");
                    return false;

}
}