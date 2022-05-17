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
var category = "";
var description = "";

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


  if(check6.checked == 1){
    document.getElementById("subjectEd").readOnly = false;
  }
  if(check6.checked == 0){
    document.getElementById("subjectEd").readOnly = true;
  
  }
 }

 if(x == 7){
  
  if(check7.checked == 1){
    document.getElementById("descriereEd").readOnly = false;
  }
  if(check7.checked == 0){
    document.getElementById("descriereEd").readOnly = true;
  
  }
 }


}



function aboutPage() {
  window.location.assign('AboutPage.php');
}

function subjectsPage() {
  window.location.assign('SubjectsPage.php');
}

function contactPage() {
  window.location.assign('ContactPage.php');
}


const subjects = new Array("History", "Fantasy", "Horror","Biology", "Design", "Architecture", "Science Fiction", "Romance", "Short Stories");
const subjectsImages = new Array("../Images/lib2.jpg", "../Images/lib2.jpg", "../Images/lib2.jpg","../Images/lib2.jpg", "../Images/lib2.jpg", "../Images/lib2.jpg", "../Images/lib2.jpg", "../Images/lib2.jpg", "../Images/lib2.jpg");
const subjCls = new Array("s11", "s2", "s3", "s4", "s5", "s6", "s7", "s8", "s9");

var idSubj = 0;
function stgBtnExe() {
  var ant = idSubj;
  if(idSubj - 1 < 0){
    idSubj = subjects.length - 1;
  }
  else{
    idSubj = idSubj - 1;
  }
  document.getElementById("subj-input").value = subjects[idSubj];

  document.getElementById("subj-input").classList.toggle(subjCls[ant]);
  document.getElementById("subj-input").classList.toggle(subjCls[idSubj]);
}

function rightBtnExe() {
  var ant = idSubj;
  if(idSubj + 1 == subjects.length){
    idSubj = 0;
  }
  else{
    idSubj = idSubj + 1;
  }
  document.getElementById("subj-input").value = subjects[idSubj];
  document.getElementById("subj-input").classList.toggle(subjCls[ant]);
  document.getElementById("subj-input").classList.toggle(subjCls[idSubj]);
}

function openPdf(x){
  window.location.assign('ReadPdf.php?' + x);
}

function borrowBook(x){
  window.location.assign('BorrowBooks.php?' + x);
}

function goBooks(x){
  window.location.assign('SearchPage.php?' + x);
}
