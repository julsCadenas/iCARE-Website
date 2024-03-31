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
function scheduleBtn(){
    window.open("/faculty-monitoring-student/faculty.php","_self");
}

function activateButton(button) {
    document.querySelectorAll('.tablebuttons button').forEach(function(btn) {
        btn.classList.remove('active');
    });

    button.classList.add('active');
}

var icareBtn = document.getElementById("icareBtn");
var acad = document.getElementById("acad");
var partner = document.getElementById("partner");
var meet = document.getElementById("meet");
var icareTable = document.getElementById("icareTable");
var acadTable = document.getElementById("acadTable");
var parterTable = document.getElementById("partnerTable");
var meetTable = document.getElementById("meetTable");

icareBtn.addEventListener("click", () => {
    icareTable.style.display = "block";
    acadTable.style.display = "none";
    partnerTable.style.display = "none";
    meetTable.style.display = "none";
    activateButton(icareBtn); 
});

acad.addEventListener("click", () => {
    icareTable.style.display = "none";
    acadTable.style.display = "block";
    partnerTable.style.display = "none";
    meetTable.style.display = "none";
    activateButton(acad); 
});

partner.addEventListener("click", () => {
    icareTable.style.display = "none";
    acadTable.style.display = "none";
    partnerTable.style.display = "block";
    meetTable.style.display = "none";
    activateButton(partner); 
});

meet.addEventListener("click", () => {
    icareTable.style.display = "none";
    acadTable.style.display = "none";
    partnerTable.style.display = "none";
    meetTable.style.display = "block";
    activateButton(meet); 
});






