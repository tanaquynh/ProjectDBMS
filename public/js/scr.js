function toggleMenu(e){
    e.classList.toggle('active');
    let navigator = document.querySelector('.side-bar');
    let main = document.querySelector('.main');
    navigator.classList.toggle('active');
    main.classList.toggle('active');
}
function toggleChangeProfile(e) {
    let edit = document.querySelector('.change-employee .edit');
    let add = document.querySelector('.change-employee .add');
    
    if (e.innerHTML === '<ion-icon name="pencil-outline" role="img" class="md hydrated" aria-label="pencil outline"></ion-icon>') {
        if (e.classList.length < 2) {
            e.classList.add('active');
        }
        if (e.classList.length === 2) {
            edit.classList.add('active');
            add.classList.remove('active');
                    let emID = e.parentNode.firstChild.nextSibling;
                    let name = emID.nextSibling.nextSibling;
                    let dob = name.nextSibling.nextSibling;
                    let sex = dob.nextSibling.nextSibling;
                    let office = sex.nextSibling.nextSibling;
                    let pos = office.nextSibling.nextSibling;
                    let dp = pos.nextSibling.nextSibling;

                    emID = emID.innerHTML;
                    name = name.innerHTML;
                    dob = dob.innerHTML;
                    sex = sex.innerHTML;
                    office = office.innerHTML;
                    pos = pos.innerHTML;
                    document.querySelector('.change-employee .edit input[name="emIDEdit"]').value = emID;
                    document.querySelector('.change-employee .edit input[name="nameEdit"]').value = name;
                    document.querySelector('.change-employee .edit input[name="dateofbirthEdit"]').value = dob;
                    console.log(document.querySelector('.change-employee .edit select[name="sexEdit"]'));
                    document.querySelector('.change-employee .edit select[name="sexEdit"]').firstChild.nextSibling.innerHTML = sex;
                    document.querySelector('.change-employee .edit select[name="positionEdit"]').firstChild.nextSibling.innerHTML = pos;
                    document.querySelector('.change-employee .edit select[name="officeEdit"]').firstChild.nextSibling.innerHTML = office;
        }
        else {
            add.classList.add('active');
            edit.classList.add('active');
        }
    }
    else {
        edit.classList.remove('active');
        add.classList.add('active');
    }
}
function popup() {
    let alert = document.querySelector('.pop-up');
    alert.classList.toggle('active');
}