// var subjectObject = {
//     "iCARE Peer Tutors": {
//       "Python": ["Corms","JB"],
//       "Java": ["Juls","Etian"],
//       "Mental Health": ["Daryl"]
//     },
//     "Mechanical Engineering": {
//       "Engineering Math 1": ["Teacher 1", "Teacher 2", "Teacher 3"],
//       "Mech 1": ["Teacher 3", "Teacher 4", "Teacher 5"]
//     },
//     "Computer Engineering": {
//       "Microprocessors": ["Ethel", "Onin"],
//       "Data Structures": ["Nino", "Lyber"]
//     },
//     "Civil Engineering": {
//       "Strength of Materials": ["Kalbo", "Panot"],
//       "Calculus 99": ["Lagman", "Di Man"]
//     },
//     "Electrical Engineering": {
//       "Kuryente 101": ["Boy Asim", "Idol ni Juls"],
//       "Electroboom Content": ["Si Miss Sungit", "Girl Pahiya"]
//     }
// };
  
// window.onload = function(){
//     var first = document.getElementById('first');
//     var second = document.getElementById('second');
//     var third = document.getElementById('third');
//     var nameInput = document.getElementById('name');
//     var submitButton = document.getElementById('submit-btn');

//     for(var x in subjectObject){
//         first.options[first.options.length] = new Option(x);
//     }
  
//     first.onchange = function(){
//         second.length = 1;
//         third.length = 1;

//         second.style.display = 'block';
//         third.style.display = 'none';

//         for(var y in subjectObject[this.value]){
//             second.options[second.options.length] = new Option(y);
//         }
//     }

//     second.onchange = function(){
//         third.length = 1;
        
//         third.style.display = 'block';
//         z = subjectObject[first.value][this.value];
        
//         for(let i = 0; i < z.length; i++){
//             third.options[third.options.length] = new Option(z[i]);
//         }
//     }

//     submitButton.addEventListener('click', function(){
//         var name = nameInput.value;
//         var dateTime = new Date();
//         console.log(name + ' submitted at ' + dateTime);
//         // You can save this data as required.
//     });
// }

// Your existing code...
function back(event){
  event.preventDefault();
  window.open("/dashboard/dashboard.php","_self");
}

