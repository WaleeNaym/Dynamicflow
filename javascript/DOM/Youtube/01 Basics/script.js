// Pillars of DOM :
/*  `Selection of an Element
    `Changing HTML
    `Changing CSS
    `Event Listener  
*/

//Various ways of selecting elements:
document.querySelector("h1");    //Selecting an element
document.querySelector("#idName");  //Selecting an id of an element
document.querySelector(".className");  //Selecting class of an element


// Changing the HTML:

//Put it in a variable, so you don't have to select same item over & over again.
let var1 = document.querySelector("h1"); //Set a whole element to a variable
var1.innerHTML = "Pushed this text";        //If there is content inside h1, it will be changed
//Same as:
document.querySelector("h1").innerHTML="Pushed this text";



// Changing the CSS:

let var2 = document.querySelector("h1");
var2.style.color = "red";       //color is css attribute & "red" is attribute value.
//style property must be used, doesn't matter what css file name is randomName.css
//Similar to css, after selecting element, apply styles.

//Javascript don't support Dash, so background-color won't work
//MUST use camel casing convention instead,  
// Ex: backgroundColor, fontSize etc
var2.style.backgroundColor = "aqua";
var2.style.fontSize = "100px";



//  Event Listener :
let var3 = document.querySelector("h2");
var3.addEventListener("click", function(){
    var3.innerHTML = "Thanks for the click";
    var3.style.color = "red";
    var3.style.backgroundColor = "aqua";
});

//wait for an event, when mouse clicked execute the function