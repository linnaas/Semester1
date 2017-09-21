function fokus(element)
{
element.style.background="yellow";
}


function mistetFokus(element)
{
element.style.background="white";

}


function musInn(element)
{
document.getElementById("melding").style.color="blue";
if (element==document.getElementById("brukernavn"))
  {
    document.getElementById("melding").innerHTML="Brukernavn skal bestå av dine 2 initialer";
  }
if (element==document.getElementById("fornavn"))
  {
    document.getElementById("melding").innerHTML="Fornavnet ditt";
  }
if (element==document.getElementById("etternavn"))
    {
      document.getElementById("melding").innerHTML="Etternavnet ditt";
    }
if (element==document.getElementById("klassekode"))
      {
        document.getElementById("melding").innerHTML="Klassekode";
      }
if (element==document.getElementById("klassenavn"))
        {
          document.getElementById("melding").innerHTML="Klassenavn";
        }
}


function musUt()
{
document.getElementById("melding").innerHTML="";
}


function endreTilStoreBokstaver(element)
{
element.value=element.value.toUpperCase();
}


function settFokus(element)
{
element.focus();
}
