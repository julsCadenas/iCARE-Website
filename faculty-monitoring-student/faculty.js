const sidePanel = document.getElementById('sidePanel');
const menuBtn = document.getElementById('menuBtn');

menuBtn.addEventListener('click', function() {
    if (sidePanel.style.right === '0px') {
        sidePanel.style.right = '-200px';
        menuBtn.style.right = "10px";
    } else {
        sidePanel.style.right = '0px';
        menuBtn.style.right = "210px";
    }
});

function dash(){
    window.open("/dashboard/dashboard.php","_self");
}
function consultBtn(){
    window.open("/consultation/consultation.php","_self");
}
function tutorBtn(){
    window.open("/tutorial/tutorial.php","_self");
}
function aboutBtn(){
    window.open("/about-us/about-us.html","_self");
}

function activateButton(button) {
    document.querySelectorAll('.tablebuttons button').forEach(function(btn) {
        btn.classList.remove('active');
    });

    button.classList.add('active');
}

var cpeBtn = document.getElementById("cpeBtn");
var eeeBtn = document.getElementById("eeeBtn");
var emeBtn = document.getElementById("meBtn");
var ceBtn = document.getElementById("ceBtn");
var hscBtn = document.getElementById("hscBtn");
var mpsBtn = document.getElementById("mpsBtn");
var itBtn = document.getElementById("itBtn");
var csBtn = document.getElementById("csBtn");

var cpeTable = document.getElementById("cpeTable");
var eeeTable = document.getElementById("eeeTable");
var emeTable = document.getElementById("meTable");
var ceTable = document.getElementById("ceTable");
var hscTable = document.getElementById("hscTable");
var mpsTable = document.getElementById("mpsTable");
var itTable = document.getElementById("itTable");
var csTable = document.getElementById("csTable");

cpeBtn.addEventListener("click", () => {
    cpeTable.style.display = "block";
    eeeTable.style.display = "none";
    meTable.style.display = "none";
    ceTable.style.display = "none";
    hscTable.style.display = "none";
    mpsTable.style.display = "none";
    itTable.style.display = "none";
    csTable.style.display = "none";
    activateButton(cpeBtn); 
});

eeeBtn.addEventListener("click", () => {
    cpeTable.style.display = "none";
    eeeTable.style.display = "block";
    meTable.style.display = "none";
    ceTable.style.display = "none";
    hscTable.style.display = "none";
    mpsTable.style.display = "none";
    itTable.style.display = "none";
    csTable.style.display = "none";
    activateButton(eeeBtn); 
});

meBtn.addEventListener("click", () => {
    cpeTable.style.display = "none";
    eeeTable.style.display = "none";
    meTable.style.display = "block";
    ceTable.style.display = "none";
    hscTable.style.display = "none";
    mpsTable.style.display = "none";
    itTable.style.display = "none";
    csTable.style.display = "none";
    activateButton(meBtn); 
});

ceBtn.addEventListener("click", () => {
    cpeTable.style.display = "none";
    eeeTable.style.display = "none";
    meTable.style.display = "none";
    ceTable.style.display = "block";
    hscTable.style.display = "none";
    mpsTable.style.display = "none";
    itTable.style.display = "none";
    csTable.style.display = "none";
    activateButton(ceBtn); 
});

hscBtn.addEventListener("click", () => {
    cpeTable.style.display = "none";
    eeeTable.style.display = "none";
    meTable.style.display = "none";
    ceTable.style.display = "none";
    hscTable.style.display = "block";
    mpsTable.style.display = "none";
    itTable.style.display = "none";
    csTable.style.display = "none";
    activateButton(hscBtn); 
});

mpsBtn.addEventListener("click", () => {
    cpeTable.style.display = "none";
    eeeTable.style.display = "none";
    meTable.style.display = "none";
    ceTable.style.display = "none";
    hscTable.style.display = "none";
    mpsTable.style.display = "block";
    itTable.style.display = "none";
    csTable.style.display = "none";
    activateButton(mpsBtn); 
});

itBtn.addEventListener("click", () => {
    cpeTable.style.display = "none";
    eeeTable.style.display = "none";
    meTable.style.display = "none";
    ceTable.style.display = "none";
    hscTable.style.display = "none";
    mpsTable.style.display = "none";
    itTable.style.display = "block";
    csTable.style.display = "none";
    activateButton(itBtn); 
});

csBtn.addEventListener("click", () => {
    cpeTable.style.display = "none";
    eeeTable.style.display = "none";
    meTable.style.display = "none";
    ceTable.style.display = "none";
    hscTable.style.display = "none";
    mpsTable.style.display = "none";
    itTable.style.display = "none";
    csTable.style.display = "block";
    activateButton(csBtn); 
});

