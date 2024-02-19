//Browser BOM
setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo2").innerHTML = d.toLocaleTimeString();
}

//html dom
document.getElementById("p1").innerHTML = "Yes, I have always been interested in coding/art ever since i was a child, and wanted to create my own game before.";

//function
function myFunction() {
  alert("Welcome to my website, its still a work in progress!");
}
myFunction();

const d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();

let text1 = "Hello, ";
text1 += "My Name is";
document.getElementById("intro").innerHTML = text1;

let Name = "John Emmanuel Piala";
document.getElementById("demo1").innerHTML = Name;

function bg() {
    document.querySelector('body').style.background = "url('images/bg.jpg') center center / cover";
}

function bg2() {
    document.querySelector('body').style.background = "url('images/bg2.jpg') center center / cover";
}

//objects
const hobby = {firhobby:"sketching", sechobby:"reading manhuas/manhwas/mangas", thihobby:"photography", forhobby:"playing sports", fifhobby:"gaming"};

document.getElementById("hobby").innerHTML = "My hobbies include " + hobby.firhobby + ", " + hobby.sechobby + ", " + hobby.thihobby + ", " + hobby.forhobby + " and " + hobby.fifhobby + ".";

// Classes
class Inte {
  constructor(name) {
    this.name = name;
  }
}

const myInte1 = new Inte("photography, sketching, and animation");
const myInte2 = new Inte("martial arts");

document.getElementById("Inte").innerHTML =
"I have a strong interest in arts, particularly " + myInte1.name + ", as well as " + myInte2.name + ".";
