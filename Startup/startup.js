const css_attr = document.querySelector(".pass-key");
const show_btn = document.querySelector(".show");
show_btn.addEventListener("click",function(){
    if(css_attr.type === "password"){
        css_attr.type = "text";
        show_btn.textContent = "HIDE";
        show_btn.style.color = "#3498db";
    }
    else{
        css_attr.type = "password";
        show_btn.textContent = "SHOW";
        show_btn.style.color = "#3498db";
    }
});

const labelText = document.getElementById("remember-text");
const checkRemember = document.getElementById("checkbox");
labelText.addEventListener("click", function(){
    if(checkRemember.checked == true){
        checkRemember.checked = false;
    }
    else{
        checkRemember.checked = true;
    }
});

const labelText2 = document.getElementById("remember-text2");
const checkRemember2 = document.getElementById("checkbox2");
labelText2.addEventListener("click", function(){
    if(checkRemember2.checked == true){
        checkRemember2.checked = false;
    }
    else{
        checkRemember2.checked = true;
    }
});

function back() {
    window.location.href='RegisterPage.php';
}


function clearTextBoxes(){
    document.getElementById('box1').value = '';
    document.getElementById('box2').value = '';
    document.getElementById("checkbox").checked = false;
}