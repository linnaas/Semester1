<?php
function validerPostNr($postnr){
  global $error;
  if(!$postnr){
     $error[] = "Postnr ikke fylt ut.";
  }
   if (strlen($postnr) != 4){
     $error[] = "Postnr er ikke 4 tegn.";
  }
   if (!is_numeric(substr($postnr,0,4))){
      $error[] = "Postnummeret består ikke av kun siffer";
   }
}
function validerKlasseKode($klassekode){
  global $error;
  if(!$klassekode){
     $error[] = "Klassekode ikke fylt ut.";
  }
   if (strlen($klassekode) != 3){
     $error[] = "Klassekoden består ikke av 3 tegn.";
  }
   if(!ctype_upper(substr($klassekode,0,2))){
     $error[] = "Klassekodens 2 første tegn er ikke store bokstaver";
   }
   if (!is_numeric(substr($klassekode,-1))){
      $error[] = "Klassekodens siste tegn er ikke et siffer";
   }
}
function validerFagKode($fagkode){
  global $error;
  if(!$fagkode){
     $error[] = "Fagkoden ikke fylt ut.";
  }
   if (strlen($fagkode) != 7){
     $error[] = "Fagkoden består ikke av 7 tegn.";
  }
   if(!ctype_upper(substr($fagkode,0,3))){
     $error[] = "Fagkoden 3 første tegn er ikke store bokstaver";
   }
   if (!is_numeric(substr($fagkode,-4))){
      $error[] = "Fagkoden 4 siste tegn er ikke siffer";
   }
}
function validerOppgavenr($oppgavenr){
  global $error;
  if(!$oppgavenr){
      $error[] = "Oppgavenr er ikke fylt ut";
  }
  if(strlen($oppgavenr) != 1){
      $error[] = "Oppgavenr er består ikke av et tegn";
  }
  if(!is_numeric(substr($oppgavenr,0,1))){
     $error[] = "Oppgavenr er ikke et siffer";
  }
}


?>
