var input1 = document.querySelector('div.input input#name');
var label1 = document.querySelector('div.input label#nameLabel');
input1.addEventListener("focus", function() {
    label1.classList.add('up');
});

input1.addEventListener("blur", function() {
    if(input1.value == '') {
        label1.classList.remove('up');
        input1.classList.add('invalid');
    } else {
        input1.classList.remove('invalid');
    }
});

var input2 = document.querySelector('div.input input#email');
var label2 = document.querySelector('div.input label#emailLabel');
input2.addEventListener("focus", function() {
    label2.classList.add('up');
});

input2.addEventListener("blur", function() {
    if(input2.value == '') {
        label2.classList.remove('up');
        input2.classList.add('invalid');
    } else {
        input2.classList.remove('invalid');
    }
});