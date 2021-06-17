

function validate() {
    var password = document.getElementsByName("password")[0].value;
    var confirmPassword = document.getElementsByName("repassword")[0].value;
    if (password != confirmPassword){
        alert("Passwords do not match");
        return false;
    }else{
        if(password.length<3){
            alert("Password is too short.");
            return false;
        }
        return true;
    }
    
    
    
}

function radiob(){
    var x = document.getElementById("crddetails");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
  }
}

function checktel(num){
    if(num.length<10){
        alert("Invalid Phone Number.");
        return false
    }else{
        return true;
    }
}