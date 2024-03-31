function about(){
    window.open("/about-us/about-us.html","_self");
}

function tutorial(){
    window.open("/tutorial/tutorial.php","_self");
}

function consult(){
    window.open("/consultation/consultation.php","_self");
}

function facultyBtn(){
    window.open("/faculty-monitoring-student/faculty.php","_self");
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


