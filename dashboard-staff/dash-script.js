
function consult(){
    window.open("/consult-staff/consult-staff.php","_self");
}

function tutorial(){
    window.open("/tutor-staff/tut-staff.php","_self");
}

function monitor(){
    window.open("/faculty-monitoring/faculty.php","_self");
}

function schedule(){
    window.open("/faculty-schedule/faculty-schedule.php","_self");
}

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