function studentValidation() {
    console.log("studentValidation: OK");
    var brukernavn = document.forms["studentForm"]["brukernavn"].value;
    if (brukernavn == "") {
      var melding;
      melding = "<span style='color:red'>Brukernavn mangler<span>";
      document.getElementById("melding").innerHTML = melding;
        return false;
    }	else if (brukernavn.length!=2){
    var melding;
    melding = "<span style='color:red'>Vennligst bruk dine 2 initialer som brukernavn<span>";
    document.getElementById("melding").innerHTML = melding;
    return false;
  }
    var fornavn = document.forms["studentForm"]["fornavn"].value;
    if (fornavn == "") {
        var melding;
        melding = "<span style='color:red'>Fornavn mangler<span>";
        document.getElementById("melding").innerHTML = melding;
        return false;
    }
    var etternavn = document.forms["studentForm"]["etternavn"].value;
    if (etternavn == "") {
      var melding;
      melding = "<span style='color:red'>Etternavn mangler<span>";
      document.getElementById("melding").innerHTML = melding;
        return false;
    }
}
function klasseValidation(){
  console.log("klasseValidation: OK");
  var klassekode = document.forms["klasseForm"]["klassekode"].value;
  if (klassekode == "") {
    var melding;
    melding = "<span style='color:red'>Klassekode mangler<span>";
    document.getElementById("melding").innerHTML = melding;
    return false;
  } else if (klassekode.length!=4){
    var melding;
    melding = "<span style='color:red'>Klassekoden består ikke av 4 tegn<span>";
    document.getElementById("melding").innerHTML = melding;
    return false;
  }
  var klassenavn = document.forms["klasseForm"]["klassenavn"].value;
  if (klassenavn == "") {
    var melding;
    melding = "<span style='color:red'>Klassenavn mangler<span>";
    document.getElementById("melding").innerHTML = melding;
      return false;
    }
}
