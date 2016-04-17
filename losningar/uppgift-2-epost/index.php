<?php
//Hämta in den kommaseparerade listan emails.txt med file_get_contents
$emails = file_get_contents('emails.txt');

//Konvertera den kommaseparerade listan till en array
$emails_array = explode(",", $emails);

//Skapa en tom array som ska lagra alla gmail.com-adresser
$gmail_emails = array();

//Loopa över listan av alla e-postadresser
foreach($emails_array as $email) {

  //För varje adress, kolla om den innehåller gmail.com
  if(strpos($email, "gmail.com")) {
    //Lägg till den i listan över gmail-adresser
    $gmail_domains[] = $email;
  }
}

//Skriv ut alla domäner i arrayen med implode()
echo implode(',', $gmail_domains);