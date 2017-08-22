function myFunction(open){
var i, content;
content = document.getElementsByClassName("Content");
for (i = 0; i<content.length; i++) {
content[i].style.display = "none";

}
document.getElementById(open).style.display = "block";



}
