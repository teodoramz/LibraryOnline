function add(){
    window.location.assign('AddCategory.html');
}

function addUsr(){
    window.location.assign('AddUser.html');
}

function editUsr(){
    window.location.assign('EditUser.html');
}

function edit(category, description){
    window.location.assign('EditCategory.html');

    alert(category + ' ' + description);
    document.getElementById("subjectEd").value = category;
    document.getElementById("descriereEd").value = description;
}

function nope(){
    alert('Nope');
}