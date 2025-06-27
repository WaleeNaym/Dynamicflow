

//Trigered by the "oninput" JS event, whenever user types something
function showName01() {
  let name01 = document.getElementById("nameInput").value;    //Getting the value from the input field 
  document.getElementById("nameOutput").innerText = name01;   //Setting that value as text inside the "nameOutput" span element
}

//Trigered by the "onchange" JS event on EACH gender checkbox
function Gender01() {                                           //Checking if each gender is selected, if it is, then pushing to array
  let gendersAll01 = [];
  if (document.getElementById("male").checked) {        
    gendersAll01.push("Male");
  }
  if (document.getElementById("female").checked) {
    gendersAll01.push("Female");
  }
  if (document.getElementById("others").checked) {              //If "Others" is slected, it displays a input field which was hidden
    gendersAll01.push("Others");
    document.getElementById("others-Input-Div").style.display = "block";    //If "Others" input field is checked, display is now visible
  } else {
    document.getElementById("others-Input-Div").style.display = "none";    //If "Others" input field is Unchecked, display is now hidden
    document.getElementById("otherGenderOutput").innerText = "";
  }
  document.getElementById("genderOutput").innerText = gendersAll01.join(", ");  //Joining the selected options as string from array to output
}

//Trigered by the "oninput" JS event on "Other Gender" checkbox, when it is visible
function OtherGender02() {
  let otherGenderInput = document.getElementById("otherGenderInput").value;     //Getting the value from the input field 
  document.getElementById("otherGenderOutput").innerText = otherGenderInput;    //Setting that value as text inside the "otherGenderOutput" span element
}

//Trigered by the "onchange" JS event on Department selection dropdown
function viewDepartment01() {
  let dept01 = document.getElementById("deptSelect").value;     //Getting the selected department value
  document.getElementById("deptOutput").innerText = dept01;      //Setting that value as text inside the "deptOutput" span element
}


function resetForm01() {
  if (confirm("Are you sure to reset ?")) {             //shows a popup with OK and Cancel. Ok is true & execute
    // Resetting the inputs
    document.getElementById("nameInput").value = "";        //Clears the text from the name field.
    document.getElementById("male").checked = false;        //These three, Unchecks all three gender checkboxes.
    document.getElementById("female").checked = false;
    document.getElementById("others").checked = false;
    document.getElementById("deptSelect").value = "";       //Clears the department dropdown selection

    // Resetting the outputs
    document.getElementById("nameOutput").innerText = "";
    document.getElementById("genderOutput").innerText = "";
    document.getElementById("otherGenderOutput").innerText = "";
    document.getElementById("deptOutput").innerText = "";

    // Hiding Other-gender input
    document.getElementById("others-Input-Div").style.display = "none";     //If “Others” gender was checked and hidden text box was shown, it hides that input box again
    document.getElementById("otherGenderInput").value = "";                 //Clears any value typed in that "Other Gender" input field.
  }
}
