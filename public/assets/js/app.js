
const body = document.getElementById("nightbody");
const dayone =  document.getElementById('dayone');
const toggleiconone = document.getElementById('toggleiconone');
const daynighttoggler1 = document.getElementById("daynighttoggler1");
const daynighttoggler2 = document.getElementById("daynighttoggler2");

const daytwo = document.getElementById('daytwo');
const toggleicontwo = document.getElementById("toggleicontwo");

function dayornightcheck(){
        

        let dayornight = localStorage.getItem('dayornight');


        if(dayornight){
                if(dayornight == "day"){
                        body.classList.remove('active');
                        dayone.innerText = "Night";
                        daytwo.innerText = "Night";
                        daynighttoggler1.innerHTML = "<i class='fa-solid fa-moon'></i>"
                        daynighttoggler2.innerHTML = "<i class='fa-solid fa-moon'></i>"
                }else if(dayornight == "night"){
                        body.classList.add('active');
                        dayone.innerText = 'Day';
                        daytwo.innerText = "Day";
                        daynighttoggler1.innerHTML = "<i class='fa-solid fa-sun'></i>" 
                        daynighttoggler2.innerHTML = "<i class='fa-solid fa-sun'></i>" 
                }
        }else{
                body.classList.remove('active');
                dayone.innerText = "Night";
                daytwo.innerText = "Night";
                daynighttoggler1.innerHTML = "<i class='fa-solid fa-moon'></i>"
                daynighttoggler2.innerHTML = "<i class='fa-solid fa-moon'></i>"
                localStorage.setItem("dayornight","day");
        }
}

function changedayandnight(){
        isactive = body.classList.contains('active');
       
        if(isactive){
                body.classList.remove('active');
               dayone.innerText = "Night";
                daytwo.innerText = "Night";
                daynighttoggler1.innerHTML = "<i class='fa-solid fa-moon'></i>"
                daynighttoggler2.innerHTML = "<i class='fa-solid fa-moon'></i>"
                localStorage.setItem("dayornight","day");
               
        }else{
                body.classList.add('active');
               dayone.innerText = "Day";
               daytwo.innerText = "Day";
               daynighttoggler1.innerHTML = "<i class='fa-solid fa-sun'></i>"
               daynighttoggler2.innerHTML = "<i class='fa-solid fa-sun'></i>" 
               localStorage.setItem("dayornight","night");
           
              
        }
}





// document.oncontextmenu = function() {
//         return false;
// }

// document.addEventListener('copy', function (e) {
//         e.preventDefault();
//     });
    
//     document.addEventListener('cut', function (e) {
//         e.preventDefault();
//     });
    
//     document.addEventListener('paste', function (e) {
//         e.preventDefault();
//     });
    




