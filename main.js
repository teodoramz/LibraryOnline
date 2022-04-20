var changed = 0;
function change() {
    
    const checkRemember = document.getElementById("dashList");
    if(changed == 0){
        checkRemember.style.left = '0';
        changed = 1;
    }
    else{
        checkRemember.style.left = '-100%';
        changed = 0;
    }
}


var fullname = "";
var username = "";
var phone = "";
var email = "";

function setReadOnlyFunc(x) {
    
  if(x == 1)
 { 
   if(fullname == "")
   {
     fullname = document.getElementById("fullname").value;
   }
  
  if(check1.checked == 1){
    document.getElementById("fullname").readOnly = false;
  }
  if(check1.checked == 0){
    document.getElementById("fullname").readOnly = true;

    var id =  document.getElementById("fullname");

    if(id.value == ""){
      id.value = fullname;
    }
  }
 }

 if(x == 2){

  if(username == "")
  {
    username = document.getElementById("username").value;
  }

  if(check2.checked == 1){
    document.getElementById("username").readOnly = false;
  }
  if(check2.checked == 0){
    document.getElementById("username").readOnly = true;
    
    var id =  document.getElementById("username");

    if(id.value == ""){
      id.value = username;
    }
  }
 }
 if(x == 3){

  if(email == "")
   {
     email = document.getElementById("email").value;
   }

  if(check3.checked == 1){
    document.getElementById("email").readOnly = false;
  }
  if(check3.checked == 0){
    document.getElementById("email").readOnly = true;
    
    var id =  document.getElementById("email");

    if(id.value == ""){
      id.value = email;
    }
  }
 }
 if(x == 4){

  if(phone == "")
   {
     phone = document.getElementById("phone").value;
   }

  if(check4.checked == 1){
    document.getElementById("phone").readOnly = false;
  }
  if(check4.checked == 0){
    document.getElementById("phone").readOnly = true;
 
    var id =  document.getElementById("phone");

    if(id.value == ""){
      id.value = phone;
    }
  }
 }

 if(x == 5){
  if(check5.checked == 1){
    document.getElementById("pass").readOnly = false;
  }
  if(check5.checked == 0){
    document.getElementById("pass").readOnly = true;
 }
}
}