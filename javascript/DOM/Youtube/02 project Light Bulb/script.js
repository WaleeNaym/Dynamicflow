
// ### Clicking on the same button:

let bulb01 = document.querySelector("#bulb");     //used hashtag, Selecting to apply css

let btn01 = document.querySelector("button");   //Didn't use hashtag it doesnt have class

let numberOfClick = 0;

btn01.addEventListener("click", function(){
    if( numberOfClick == 0 ){
        bulb01.style.backgroundColor = "yellow";
        console.log(`Clicked: ${numberOfClick}`);
        numberOfClick = 1;
    } else {
        bulb01.style.backgroundColor = "rgb(150, 150, 150)";
        console.log(`Clicked Again: ${numberOfClick}`);
        numberOfClick = 0;
    }
});

/* initially numberOfClick is zero
it listens for click, after clicking it finds it zero & executes command,
then it assigns numberOfClick to 1,
then it listens again, when clicked, else condition is executed & numberOfClick is set to 0.
it keeps on going like a see-saw.
*/


// ### Selecting multiple elements at the same time:

//Node List is similar to Array, DOM methods capture Multiple  HTML elements as Node Lists. Use Index to access them.
let varH1 = document.querySelectorAll("h1");

varH1.forEach( function(i){
    console.log(i);             //Just Iterating over Node list & displaying them
} );

varH1[0].innerHTML = "Helooo";



























