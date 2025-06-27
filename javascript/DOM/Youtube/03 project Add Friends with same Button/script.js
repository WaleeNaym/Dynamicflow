let istatus = document.querySelector("h5");

let btn = document.querySelector("#add");  //selectin id "add"

let checkClick = 0;


btn.addEventListener("click", function(){
    if(checkClick == 0){

        istatus.innerHTML = "Friends";
        istatus.style.color = "green";   
        btn.innerHTML = "Remove Friend"
        
        checkClick = 1;
    } else{
        istatus.innerHTML = "Stranger";
        istatus.style.color = "red";   
        btn.innerHTML = "Add Friend"
        
        checkClick = 0;
    }
});

