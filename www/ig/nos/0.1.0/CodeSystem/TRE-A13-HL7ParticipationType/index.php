<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/0.1.0/CodeSystem-TRE-A13-HL7ParticipationType.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/0.1.0/CodeSystem-TRE-A13-HL7ParticipationType.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/0.1.0/CodeSystem-TRE-A13-HL7ParticipationType.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/0.1.0/CodeSystem-TRE-A13-HL7ParticipationType.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/0.1.0/CodeSystem-TRE-A13-HL7ParticipationType.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/0.1.0/CodeSystem-TRE-A13-HL7ParticipationType.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/nos/0.1.0/CodeSystem-TRE-A13-HL7ParticipationType.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
