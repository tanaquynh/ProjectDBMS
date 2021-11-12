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