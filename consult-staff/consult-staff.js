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

function scheduleBtn(){
    window.open("/faculty-schedule/faculty-schedule.php","_self");
}
function facultyBtn(){
    window.open("/faculty-monitoring/faculty.php","_self");
}
function tutBtn(){
    window.open("/tutor-staff/tut-staff.php","_self");
}
function dash(){
    window.open("/dashboard-staff/dash-staff.php","_self");
}

function validateForm() {
    var studentNumber = document.getElementById("studentnumber").value;
    var password = document.getElementById("password").value;

    // Check if student number and password are not empty
    if (studentNumber.trim() === "" || password.trim() === "") {
        alert("Student number and password are required.");
        return false; // Prevent form submission
    }
}

function submitForm(button) {
    var form = button.closest('form');
    form.submit();
}

function activateButton(button) {
    document.querySelectorAll('.tablebuttons button').forEach(function(btn) {
        btn.classList.remove('active');
    });

    button.classList.add('active');
}

var sucBtn = document.getElementById("sucBtn");
var unsucBtn = document.getElementById("unsucBtn");
var unclassBtn = document.getElementById("unclassBtn");

var sucTable = document.getElementById("sucTable");
var unsucTable = document.getElementById("unsucTable");
var unclassTable = document.getElementById("unclassTable");

sucBtn.addEventListener("click", () => {
    sucTable.style.display = "block";
    unsucTable.style.display = "none";
    unclassTable.style.display = "none";
    activateButton(sucBtn); 
});

unsucBtn.addEventListener("click", () => {
    sucTable.style.display = "none";
    unsucTable.style.display = "block";
    unclassTable.style.display = "none";
    activateButton(unsucBtn); 
});

unclassBtn.addEventListener("click", () => {
    sucTable.style.display = "none";
    unsucTable.style.display = "none";
    unclassTable.style.display = "block";
    activateButton(unclassBtn); 
});

