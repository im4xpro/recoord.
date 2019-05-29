<!DOCTYPE html>
<html lang="de">
<head>
  <!-- FAVICIONS -->
  <meta
     name='viewport'
     content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'
/>
<link rel="stylesheet" href="assets/css/bootstrap.css">
 <!--<script src="../assets/js/bootstrap.js"></script> -->
<style>
/***************** *******************/
/***************** *******************/
/***************** *******************/
/***************** *******************/
/* Normal */
#mainBody{
  width:100%;
  height:auto;
  margin: 0;
  padding:0;

}
h2{
  font-weight:400;
  margin-left: 0.5em;
  margin-right: 0.5em;
}
#objectBox{
  width:70%;
  height:auto;
  background-color: lightgrey;
  cursor:crosshair;
  float:left;
}
#objectBox img{
  width:100%;
  height:100%;
}
.markers{
  width:auto;
  height:21px;
  background-color: red;
  visibility: hidden;
  border-radius: 10em;
  color:yellow;
  padding-left:2px;
  padding-right: 2px;
  cursor:pointer;
  padding-bottom:2px;
  text-align: center;
}
.markerButton{
  font-size:20px;
}
#truppBox{
  float:left;
  width:30%;
  background-color: lightgrey;
  padding:2px;
  padding-left:5px;
  font-size:16px;
}

#aktKarte{
  text-align: center;
  line-height: 1em;
  margin-top: 20px;

}
#buttonsEingabe{
  margin-bottom:10px;
}
.buttonZahl{
  margin-top:5px;
  font-size:24px;
  width:50px;
  height:50px;
  padding:0;
  border:0;
}

.buttonZahl:active{
  background-color:red;
}
.buttonZahl:focus{
  background-color: red;
}
.buttonKlasse{
  margin-top:5px;
  margin-left:10px;
  font-size:24px;
  width: 150px;
  height:50px;
  border:0;
}
.buttonKlasse:active{
  background-color:red;
}
.buttonKlasse:focus{
  background-color: red;
}
input[type=text]{
  width:159px;
  font-size:20px;
  height:50px;
}

#placeholderEinsatz{
  display:none;
}

#changeMapButton{
  width:159px;
  height:50px;


}
.settingsButton{
  font-size:24px;
  margin-top:10px;
  border:0;

}
.settingsButton:active{
  background-color:red;
}
.settingsButton:focus{
  background-color: red;
}
button a{
  text-decoration: none;
  color:red;
}
button a:hover{
  text-decoration: none;
  color:darkred;
}
#helpButton{
  width:150px;
  height:50px;
  margin-left:10px;
  border:0;
}
#console{
  float:left;
  width:100%;
  height:auto;
  margin-left:1em;
  padding-top:1em;
}
#consoleDelButton{
  font-size:12px;
  margin-left:2em;
  cursor:pointer;
}
#consoleDelButton:hover{
  text-decoration: underline;
}
#buttons{
  float:left;
  width:100%;
  height:auto;
  margin-left:1em;
  padding-top:1em;
}

#errorDiv{
  display:none;
}
/***************** *******************/
/***************** *******************/
/***************** *******************/
/***************** *******************/
/* MEDIA QUERY*/
@media (max-width: 1200px){

  h2{
    font-weight:400;
    margin-left: 0.5em;
    margin-right: 0.5em;
  }
  #objectBox{
    width:70%;
    height:auto;
    background-color: lightgrey;
    cursor:crosshair;
    float:left;
  }
  #objectBox img{
    width:100%;
    height:100%;
  }
  .markers{
    width:auto;
    height:20px;
    background-color: red;
    visibility: hidden;
    border-radius: 10em;
    color:yellow;
    padding-left:2px;
    padding-right: 2px;
    cursor:pointer;
    padding-bottom:2px;
    text-align: center;
  }

  #changeMapButton{
    width:140px;
    height:45px;
    border:0;


  }
  .settingsButton{
    font-size:20px;
    margin-top:10px;
    border:0;


  }

  #helpButton{
    width:130px;
    height:45px;
    margin-left:5px;
    border:0;

  }

  #aktKarte{
    text-align: center;
    line-height: 1em;
    margin-top: 20px;

  }
  #buttonsEingabe{
    margin-bottom:10px;
  }
  .buttonZahl{
    margin-top:5px;
    font-size:20px;
    width:45px;
    height:45px;
    padding:0;
    border:0;


  }



  .buttonKlasse{
    margin-top:5px;
    margin-left:5px;
    font-size:20px;
    width: 130px;
    height:45px;
    border:0;
  }

  input[type=text]{
    width:144px;
    font-size:18px;
    height:45px;
  }

  #console{
    float:left;
    width:100%;
    height:auto;
    margin-left:1em;
    padding-top:1em;
  }
  #buttons{
    float:left;
    width:100%;
    height:auto;
    margin-left:1em;
    padding-top:1em;
  }
}

@media(max-width:974px){
  #mainBody{
    display:none;
  }
  #console{
    display: none;
  }
  #errorDiv{
    display:block;
  }
}
/***************** *******************/
/***************** *******************/
/***************** *******************/
/***************** *******************/
</style>

</head>
<body onload="main()">
<div id="mainBody">
  <div id="objectBox">
    <img id="karte" src="" alt="Error 3: Karte nicht gefunden, überprüfe den Namen." />

  </div>
  <div id="truppBox">
    <h2 >recoord.</h2>
    <span class="markers" id="placeholderEinsatz"></span>

    <div id="buttonsEingabe">

            <button id="n7" class="buttonZahl">7</button>
            <button id="n8" class="buttonZahl">8</button>
            <button id="n9" class="buttonZahl">9</button>
            <button id="elSetzen" class="buttonKlasse">Einsatzleiter</button>
            <br />
            <button id="n4" class="buttonZahl">4</button>
            <button id="n5" class="buttonZahl">5</button>
            <button id="n6" class="buttonZahl">6</button>
            <button id="trSetzen" class="buttonKlasse">Trupp</button>
            <br />
            <button id="n1" class="buttonZahl">1</button>
            <button id="n2" class="buttonZahl">2</button>
            <button id="n3" class="buttonZahl">3</button>
            <button id="fzSetzen" class="buttonKlasse">Fahrzeug</button>
            <br />
            <button id="slashButton" class="buttonZahl"> / </button>
            <button id="n0" class="buttonZahl">0</button>
            <button id="acButton" class="buttonZahl">AC</button>
            <button id="GesSetzen" class="buttonKlasse">Gesuchter</button>
            <br />
            <input type="text" id="eingabeFeld" placeholder = "Eingabe..." />
            <button id="GebSetzen" class="buttonKlasse">Gebäude</button>
            <br />
            <hr />

            <button id="changeMapButton" class="settingsButton">Karte ändern</button>
            <button id="helpButton" class="settingsButton">Console</button>
            <br />




<br>
              <input type="file" id="files" name="files[]" />
<output id="list"></output>
<br >
<br>
<button id="exitButton" name="exitButton" class="settingsButton"><a href="index.php">Einsatz beenden</a></button>
<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.

          document.getElementById('karte').src = e.target.result;

        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>



      </div>

      </div>
</div>


<div id="buttons">

</div>
<div id="console">

  <h2>Ereignisse</h2>
  <p id="consoleText">

  </p>
</div>

<script language="javascript" type="text/javascript">

// Ausführen bei Mausklick
document.getElementById("objectBox").onmousedown = findObjectCoords;
//****************************************************************
//****************************************************************
// Truppname setzen
var truppName = "";
function truppEingabe(id){
  leereTextfeld();
  var num;
  var eingabeButton = id;
  switch(id){
    case "n1": num = 1;
    break;
    case "n2": num = 2;
    break;
    case "n3": num = 3;
    break;
    case "n4": num = 4;
    break;
    case "n5": num = 5;
    break;
    case "n6": num = 6;
    break;
    case "n7": num = 7;
    break;
    case "n8": num = 8;
    break;
    case "n9": num = 9;
    break;
    case "n0": num = 0;
    break;
  }
  if(id == "okButton"){
  window.alert(truppName);
  }else if(id == "acButton"){
    truppName = "";
    leereTextfeld();
  }else if(id == "slashButton"){
    truppName+="/";

  }else{
    truppName+=num;

  }
document.getElementById("eingabeFeld").value = truppName;
}
//****************************************************************
// Art setzenn
var istEinsatzleiter;
var istTrupp;
var istFahrzeug;
var istMisterX;
var istGebäude;

function setzeEinsatzleiter(){
  istEinsatzleiter = true;
  istTrupp = false;
  istFahrzeug = false;
  istMisterX = false;
  istGebäude = false;


}

function setzeTrupp(){
  istEinsatzleiter = false;
  istTrupp = true;
  istFahrzeug = false;
  istMisterX = false;
  istGebäude = false;
}

function setzeFahrzeug(){
  istEinsatzleiter = false;
  istTrupp = false;
  istFahrzeug = true;
  istMisterX = false;
  istGebäude = false;
}

function setzeMisterX(){
  istEinsatzleiter = false;
  istTrupp = false;
  istFahrzeug = false;
  istMisterX = true;
  istGebäude = false;
}

function setzeGebäude(){
  istEinsatzleiter = false;
  istTrupp = false;
  istFahrzeug = false;
  istMisterX = false;
  istGebäude = true;
}

//****************************************************************
// Marker-Script
var markerSum = [" "];
var xpos;
var ypos;
function findObjectCoords(mouseEvent)
{
  var obj = document.getElementById("objectBox");
  var obj_left = 0;
  var obj_top = 0;

  while (obj.offsetParent)
  {
    obj_left += obj.offsetLeft;
    obj_top += obj.offsetTop;
    obj = obj.offsetParent;
  }
  if (mouseEvent)
  {
    //FireFox
    xpos = mouseEvent.pageX;
    ypos = mouseEvent.pageY;
  }
  else
  {
    //IE
    xpos = window.event.x + document.body.scrollLeft - 2;
    ypos = window.event.y + document.body.scrollTop - 2;
  }
  xpos -= obj_left;
  ypos -= obj_top;


//****************************************************************
// prüft truppName, setzt Textfeldinhalt ein wenn leer
      if(truppName == ""){
        truppName = document.getElementById("eingabeFeld").value;
      }
//****************************************************************
// New Marker
   var elementID = truppName;
   var status = "Trupp";
    var screenWidth = document.body.offsetWidth;
    var istVorhanden = false;
     if(elementID != ""){
       var markers = document.getElementsByClassName("markers");

       for(var i = 0; i< markers.length;i++){
         if(elementID == markers[i].innerHTML){
           istVorhanden = true;

         }
       }
       if(istVorhanden == false){
           var parentObject = document.getElementById("objectBox");
           var newElement = document.createElement("div");
           newElement.setAttribute("id", elementID);
           newElement.className += "markers";
           if(screenWidth < 1200){
             newElement.setAttribute("ontouchstart", "setNewMarker(this.id)");
           }else{
             newElement.setAttribute("onclick", "setNewMarker(this.id)");
           }

           newElement.style.position = "absolute";
           newElement.style.left = xpos+"px";
           newElement.style.top = ypos + "px";
           newElement.style.visibility = "visible";
           newElement.innerHTML = elementID;

           var btnParent = document.getElementById('buttons');
           var newButton = document.createElement('button');
           newButton.setAttribute("id", elementID);
           newButton.setAttribute("class", "truppButtons");
           newButton.setAttribute("onclick", "setNewMarker(this.id)");
           newButton.innerHTML = elementID;
           btnParent.appendChild(newButton);
           if(istEinsatzleiter){
             newElement.style.background = "yellow";
             newElement.style.color = "red";
             status = "Einsatzleiter";
             newElement.classList.add("Einsatzleiter");
           }else if(istTrupp){
             newElement.style.background = "red";
             newElement.style.color = "yellow";
             status = "Trupp";
           }else if(istFahrzeug){
             newElement.style.background = "blue";
             newElement.style.color = "yellow";
             status = "Fahrzeug";
           }else if(istGebäude){
             newElement.style.background = "green";
             newElement.style.color = "white";
             status = "Gebäude";
           }else if(istMisterX){
             newElement.style.background = "black";
             newElement.style.color = "white";
             status = "Gesuchter";
           }
           parentObject.appendChild(newElement);
           leereTextfeld();

           document.getElementById("consoleText").innerHTML += consoleEvent()+" Der "+status+" "+elementID+" wurde neu gesetzt.<br />";


           markerSum.push(elementID);
           truppName = "";
           selectedMarker = "";
         }else{
           window.alert("Error 1: Trupp ist schon vorhanden.");
           leereTextfeld();
           truppName = "";
         }
       }
}





//****************************************************************
//****************************************************************
//****************************************************************
// Marker und Button löschen
function deleteElement(id){
  document.getElementById("eingabeFeld").value = id;
  var markers = document.getElementsByClassName("markers");
  for(var i=0;i<=markers.length;i++){
    if(markers[i].innerHTML == id){
      var element = document.getElementById(markers[i].innerHTML);
      element.parentNode.removeChild(element);
      i = markers.length+1;
    }
  }
}
function deleteButton(id){
  document.getElementById("eingabeFeld").value = id;
  var buttons = document.getElementsByClassName("truppButtons");
  for(var i=0;i<=buttons.length;i++){
    if(buttons[i].innerHTML == id){
      var element = document.getElementById(buttons[i].innerHTML);
      element.parentNode.removeChild(element);
      i = buttons.length+1;
    }
  }
}
//****************************************************************
// Karte ändern
function changeMap(){
  var eingabe = document.getElementById("eingabeFeld").value;
  var path = "maps/";
  if(eingabe != ""){
    var picName = eingabe+".png";
    var imageSrc = path+picName;
    document.getElementById("karte").src = imageSrc;
  }else{
    window.alert("Error 2: empty text area");
  }
  leereTextfeld();
  document.getElementById("consoleText").innerHTML += consoleEvent()+ " Karte wurde zu '"+picName+"' geändert.<br />";

}
//****************************************************************
// Main-Script, führt sich bei Seitenload aus
function main(){
  document.getElementById("consoleText").innerHTML += consoleEvent()+" Einsatz gestartet. <br />";

  leereTextfeld()
  truppName = "";
  var path = "source/";
  var imageSrc = path+"template_recoord.png";
  document.getElementById("karte").src = imageSrc;

// prüft die Breite des Fensters
// vergibt entweder onclick(für PC) oder ontouchstart(Tablet)
  var screenWidth = document.body.offsetWidth;
  if(screenWidth < 1200){

    document.getElementById("n9").setAttribute("ontouchstart", "truppEingabe(this.id)");
    document.getElementById("n8").setAttribute("ontouchstart", "truppEingabe(this.id)");
    document.getElementById("n7").setAttribute("ontouchstart", "truppEingabe(this.id)");
    document.getElementById("n6").setAttribute("ontouchstart", "truppEingabe(this.id)");
    document.getElementById("n5").setAttribute("ontouchstart", "truppEingabe(this.id)");
    document.getElementById("n4").setAttribute("ontouchstart", "truppEingabe(this.id)");
    document.getElementById("n3").setAttribute("ontouchstart", "truppEingabe(this.id)");
    document.getElementById("n2").setAttribute("ontouchstart", "truppEingabe(this.id)");
    document.getElementById("n1").setAttribute("ontouchstart", "truppEingabe(this.id)");
    document.getElementById("n0").setAttribute("ontouchstart", "truppEingabe(this.id)");

    document.getElementById("slashButton").setAttribute("ontouchstart", "truppEingabe(this.id)");
    document.getElementById("acButton").setAttribute("ontouchstart", "truppEingabe(this.id)");

    document.getElementById("elSetzen").setAttribute("ontouchstart", "setzeEinsatzleiter()");
    document.getElementById("trSetzen").setAttribute("ontouchstart", "setzeTrupp()");
    document.getElementById("fzSetzen").setAttribute("ontouchstart", "setzeFahrzeug()");
    document.getElementById("GesSetzen").setAttribute("ontouchstart", "setzeMisterX()");
    document.getElementById("GebSetzen").setAttribute("ontouchstart", "setzeGebäude()");


    document.getElementById("changeMapButton").setAttribute("ontouchstart", "changeMap()");
    document.getElementById("helpButton").setAttribute("ontouchstart", "WriteConsoleLog()");


  }else{

    document.getElementById("n9").setAttribute("onclick", "truppEingabe(this.id)");
    document.getElementById("n8").setAttribute("onclick", "truppEingabe(this.id)");
    document.getElementById("n7").setAttribute("onclick", "truppEingabe(this.id)");
    document.getElementById("n6").setAttribute("onclick", "truppEingabe(this.id)");
    document.getElementById("n5").setAttribute("onclick", "truppEingabe(this.id)");
    document.getElementById("n4").setAttribute("onclick", "truppEingabe(this.id)");
    document.getElementById("n3").setAttribute("onclick", "truppEingabe(this.id)");
    document.getElementById("n2").setAttribute("onclick", "truppEingabe(this.id)");
    document.getElementById("n1").setAttribute("onclick", "truppEingabe(this.id)");
    document.getElementById("n0").setAttribute("onclick", "truppEingabe(this.id)");

    document.getElementById("slashButton").setAttribute("onclick", "truppEingabe(this.id)");
    document.getElementById("acButton").setAttribute("onclick", "truppEingabe(this.id)");

    document.getElementById("elSetzen").setAttribute("onclick", "setzeEinsatzleiter()");
    document.getElementById("trSetzen").setAttribute("onclick", "setzeTrupp()");
    document.getElementById("fzSetzen").setAttribute("onclick", "setzeFahrzeug()");
    document.getElementById("GesSetzen").setAttribute("onclick", "setzeMisterX()");
    document.getElementById("GebSetzen").setAttribute("onclick", "setzeGebäude()");

    document.getElementById("changeMapButton").setAttribute("onclick", "changeMap()");
    document.getElementById("helpButton").setAttribute("onclick", "WriteConsoleLog()");


  }
}

//****************************************************************
// Leere Textfeldinhalt
function leereTextfeld(){
  document.getElementById("eingabeFeld").value = "";
}

//****************************************************************

// Marker neu setzen
function setNewMarker(id){
  var color = document.getElementById(id).style.backgroundColor;
  switch (color) {
    case "yellow": setzeEinsatzleiter();
      break;
      case "green": setzeGebäude();
        break;
        case "blue": setzeFahrzeug();
          break;
          case "black": setzeMisterX();
            break;
    default: setzeTrupp();

  }
  leereTextfeld();
  deleteElement(id);
  deleteButton(id);
  document.getElementById("consoleText").innerHTML += consoleEvent()+" "+id+" wurde entfernt.<br />";

}

//****************************************************************
// Consolen-Eintrag
function WriteConsoleLog(){
  var text = document.getElementById("eingabeFeld").value;
  document.getElementById("consoleText").innerHTML += consoleEvent()+" "+text+"<br />";

  leereTextfeld();
}
//****************************************************************
// aktuelle Zeit und Datum
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  return h+":"+m+":"+s;

}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

function timestamp() {
    var now = new Date();
    var y = now.getFullYear().toString();
    var m = (now.getMonth() + 1).toString();
    var d = now.getDate().toString();
    (d.length == 1) && (d = '0' + d);
    (m.length == 1) && (m = '0' + m);
    var ddmmyyyy = d+"-"+m+"-"+y;
    return ddmmyyyy;
}
//****************************************************************
// set console timestamp
function consoleEvent(){
  var dateTime = "["+timestamp()+" | "+startTime()+"]";
  return dateTime;
}
function logEvent(){
  var stamp = ""+timestamp()+"_"+startTime();
  return stamp;
}
function writeLogFile(){
  window.alert(document.getElementById("consoleSave").value);
}
</script>
</body>
</html>
