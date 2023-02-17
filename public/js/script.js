/*
var name= 'Jane'; //global variable
var money= 456.78;

function OnClick() {
    alert('On Click Action!') 
}



function OnMouseOver() {
    alert('Mouse Over Action') 
}

function Register(MyLocation, MyCountry) {
    name1= 'John'; //private variable
    alert(MyLocation + ',' + MyCountry);
    alert('My name is ' + name + '. I have RM' + money);
    alert(name1)
}


var a = 34;
var b = 10;
var c = 'Test';
var linebreak = "<br />";

document.write("a = 34, b = 10, c = test" + linebreak);

document.write("a + b = ");
result = a + b;
document.write(result);
document.write(linebreak);

document.write("a - b = ");
result = a - b;
document.write(result);
document.write(linebreak);

document.write("a / b = ");
result = a / b;
document.write(result);
document.write(linebreak);

document.write("a % b = ");
result = a % b;
document.write(result);
document.write(linebreak);

document.write("a * b = ");
result = a * b;
document.write(result);
document.write(linebreak);

document.write("a + b + c = ");
result = a + b + c;
document.write(result);
document.write(linebreak);

document.write("a + c + b = ");
result = a + c + b;
document.write(result);
document.write(linebreak);

a = a++;
document.write("a++ = ");
result = a++;
document.write(result);
document.write(linebreak);

b = b--;
document.write("b-- = ");
result = b--;
document.write(result);
document.write(linebreak);


var a = 10;
var b = 20;
var linebreak = "<br />";

document.write("(a == b) => ");
result = (a == b);
document.write(result + linebreak);

document.write("(a < b) => ");
result = (a < b);
document.write(result + linebreak);

document.write("(a > b) => ");
result = (a > b);
document.write(result + linebreak);

document.write("(a != b) => ");
result = (a != b);
document.write(result + linebreak);

document.write("(a >= b) => ");
result = (a >= b);
document.write(result + linebreak);

document.write("(a <= b) => ");
result = (a <= b);
document.write(result + linebreak);



var age = prompt("What age?");
if (age >= 17) {
    document.write("<h1>Qualified for driving</h1>");
} else {
    document.write("<h1>Does not qualified for driving</h1>");
}


var book = prompt("Which Book Category?").toLowerCase();
if (book == "history") {
    document.write("<b>History Book</b>");
} 
else if (book == "maths" || book == "math") {
    document.write("<b>Maths Book</b>");
}
else if (book == "economics" || book == "economic") {
    document.write("<b>Economics Book</b>");
}
else {
    document.write("<b>Unknown Book</b>");
}

var grade = prompt("Which Grade?").toUpperCase();
document.write("<br />Entering switch block<br />");
    switch(grade) {
        case 'A' : document.write("Good Job<br />");
        break;
        case 'B' : document.write("Pretty Good<br />");
        break;
        case 'C' : document.write("Passed<br />");
        break;
        case 'D' : document.write("Not So Good<br />");
        break;
        case 'F' : document.write("Failed<br />");
        break;
        default : document.write("Unknown Grade<br />");
    }

var count = prompt("Start No.?");
document.write("Starting Loop<br />");
while (count <= 100) {
    document.write("Current Count : " + count + "<br / >");
    count++;
}
document.write("Loop Stopped!<br />");


var x = prompt("Start No.?");
var y = prompt("End No.?");
for (count = x; count <= y; count++) {
    document.write("Current Count : " + count);
    document.write("<br />");
}
document.write("Loop Stopped!<br />");
*/

var x = prompt("Start No.?");
var y = prompt("End No.?");
for (count = y; count>= x; count--) {
    document.write("Current Count : " + count);
    document.write("<br />");
}
document.write("Loop Stopped!<br />");






