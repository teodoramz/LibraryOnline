var userID = -17;

function add(){
    window.location.assign('AddCategory.html');
}

function addUsr(){
    window.location.assign('AddUser.php');
}

function editUsr(x){
    window.location.assign('EditUser.php?' + x);
}

function deleteUsr(x){
  window.location.assign('DeleteUser.php?' + x);
}

function edit(category, description){
    window.location.assign('EditCategory.html');

    document.getElementById("subjectEd").value = category;
    document.getElementById("descriereEd").value = description;
}

function nope(){
    alert('Nope');
}


var fullname = "";
var username = "";
var phone = "";
var email = "";
var role = "";


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

if(x == 6){

  if(role == "")
   {
     role = document.getElementById("role").value;
   }

  if(check6.checked == 1){
    document.getElementById("role").readOnly = false;
  }
  if(check6.checked == 0){
    document.getElementById("role").readOnly = true;
    
    var id =  document.getElementById("role");

    if(id.value == ""){
      id.value = role;
    }
  }
 }


}