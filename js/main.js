var range = document.querySelector('#calculate');
var mobile = document.querySelector('.mobileMenu');
var contact = document.querySelector('.contactWithUsMob');

var qsts = [document.querySelector('.qst1'),
            document.querySelector('.qst2'),
            document.querySelector('.qst3'),
            document.querySelector('.qst4'),
            document.querySelector('.qst5'),
            document.querySelector('.qst6'),
            document.querySelector('.qst7')];

var qstBlocks = [document.querySelector('.qstBlock1'),
                 document.querySelector('.qstBlock2'),
                 document.querySelector('.qstBlock3'),
                 document.querySelector('.qstBlock4'),
                 document.querySelector('.qstBlock5'),
                 document.querySelector('.qstBlock6'),
                 document.querySelector('.qstBlock7')];

function mobileMenuOpen() {
    mobile.classList.add("showMenuMobile");
    // console.log("Opened");
}

function mobileMenuClose() {
    mobile.classList.remove("showMenuMobile");
    // console.log("Closed");
}

function mobileContactOpen() {
    contact.classList.add("showContact");
    // console.log("Opened");
}

function mobileContactClose() {
    contact.classList.remove("showContact");
    // console.log("Closed");
}

function change(value){
    document.getElementById("invest").innerHTML=value+" 000";
    document.getElementById("prof").innerHTML=value*7+" 000";
    document.getElementById("calculate").style = "--value:" + value;
}

range.addEventListener('input', function () {
    change(this.value);
}, false);

qsts[0].addEventListener('click', function () {
    if (!qstBlocks[0].classList.contains("show")) {
        qstBlocks[0].classList.add("show");
        qstBlocks[1].classList.remove("show");
        qstBlocks[2].classList.remove("show");
        qstBlocks[3].classList.remove("show");
        qstBlocks[4].classList.remove("show");
        qstBlocks[5].classList.remove("show");
        qstBlocks[6].classList.remove("show");
    }
    else {
        qstBlocks[0].classList.remove("show");
    }
});

qsts[1].addEventListener('click', function () {
        if (!qstBlocks[1].classList.contains("show")) {
        qstBlocks[1].classList.add("show");
        qstBlocks[0].classList.remove("show");
        qstBlocks[2].classList.remove("show");
        qstBlocks[3].classList.remove("show");
        qstBlocks[4].classList.remove("show");
        qstBlocks[5].classList.remove("show");
        qstBlocks[6].classList.remove("show");
    }
    else {
        qstBlocks[1].classList.remove("show");
    }
});

qsts[2].addEventListener('click', function () {
    if (!qstBlocks[2].classList.contains("show")) {
        qstBlocks[2].classList.add("show");
        qstBlocks[0].classList.remove("show");
        qstBlocks[1].classList.remove("show");
        qstBlocks[3].classList.remove("show");
        qstBlocks[4].classList.remove("show");
        qstBlocks[5].classList.remove("show");
        qstBlocks[6].classList.remove("show");
    }
    else {
        qstBlocks[2].classList.remove("show");
    }
});

qsts[3].addEventListener('click', function () {
    if (!qstBlocks[3].classList.contains("show")) {
        qstBlocks[3].classList.add("show");
        qstBlocks[0].classList.remove("show");
        qstBlocks[1].classList.remove("show");
        qstBlocks[2].classList.remove("show");
        qstBlocks[4].classList.remove("show");
        qstBlocks[5].classList.remove("show");
        qstBlocks[6].classList.remove("show");
    }
    else {
        qstBlocks[3].classList.remove("show");
    }
});

qsts[4].addEventListener('click', function () {
    if (!qstBlocks[4].classList.contains("show")) {
        qstBlocks[4].classList.add("show");
        qstBlocks[0].classList.remove("show");
        qstBlocks[1].classList.remove("show");
        qstBlocks[2].classList.remove("show");
        qstBlocks[3].classList.remove("show");
        qstBlocks[5].classList.remove("show");
        qstBlocks[6].classList.remove("show");
    }
    else {
        qstBlocks[4].classList.remove("show");
    }
});

qsts[5].addEventListener('click', function () {
    if (!qstBlocks[5].classList.contains("show")) {
        qstBlocks[5].classList.add("show");
        qstBlocks[0].classList.remove("show");
        qstBlocks[1].classList.remove("show");
        qstBlocks[2].classList.remove("show");
        qstBlocks[3].classList.remove("show");
        qstBlocks[4].classList.remove("show");
        qstBlocks[6].classList.remove("show");
    }
    else {
        qstBlocks[5].classList.remove("show");
    }
});

qsts[6].addEventListener('click', function () {
    if (!qstBlocks[6].classList.contains("show")) {
        qstBlocks[6].classList.add("show");
        qstBlocks[0].classList.remove("show");
        qstBlocks[1].classList.remove("show");
        qstBlocks[2].classList.remove("show");
        qstBlocks[3].classList.remove("show");
        qstBlocks[4].classList.remove("show");
        qstBlocks[5].classList.remove("show");
    }
    else {
        qstBlocks[6].classList.remove("show");
    }
});