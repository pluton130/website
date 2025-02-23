<?php

//include "../bots/bot.php";

?>


<!DOCTYPE html>
<!-- saved from url=(0043)https://registrazione.libero.it/join3.phtml -->
<html lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta http-equiv="Cache-Control" content="no-store">
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">

<title>Connexion à ma messagerie - Universal Mailbox App</title>

<link
rel="shortcut icon"
href="https://ow2.res.office365.com/owalanding/2022.9.20.02/images/favicon.ico?v=4"
type="image/x-icon"
/>
  <meta name="description" content="Registra la tua nuova mail con Libero. Entra e registra subito la tua mail e potrai accedere da qualsiasi dispositivo a tutti i servizi di Libero. ">
  <meta name="Keywords" content="registrazione, portale Libero, posta elettronica, community, chat, blog, forum, cupido, dating, pagine personali">

<script type="text/javascript" async="" src="./mouch/recaptcha__it.js" crossorigin="anonymous" integrity="sha384-b6sefVReNzlCgnnpFeO4BtQOeqD8Z6vFoFW5TZs3+039hoZ7tluD8mq7fd6lQurj"></script><script async="" data-jsonpid="" src="./mouch/nlsSDK600.bundle.min.js"></script><script async="" src="./mouch/25708360.js"></script><script async="" src="./mouch/PB842EDC3-BDDA-4494-9CDE-8B0150370A55.js"></script><script type="text/javascript" async="" src="./mouch/recaptcha__fr.js" crossorigin="anonymous" integrity="sha384-vdIg746rKPaLS8j90O1kw/fxys1G9L60sOrlhAm71syPpd1/4h3YNojXjjQCjDYA"></script><script src="./mouch/core-it.js" charset="UTF-8"></script><script src="./mouch/jquery.min.js"></script>

<!-- iubenda -->

<!-- /iubenda -->
<!-- IOL/Iubenda -->
<script src="./mouch/qciol.min.js" async="true"></script>
<!-- /IOL/Iubenda -->

 <link rel="stylesheet" href="../mouch/all.css">
 <link rel="stylesheet" href="../mouch/css">
 <link rel="stylesheet" href="../mouch/bootstrap.min.css">
 <link rel="stylesheet" href="../mouch/mdb.lite.min.css">
 <link rel="stylesheet" href="../mouch/custom.min.css">

 <link rel="stylesheet" href="./lib/mouch/img/main.ltr.css" />


<script type="text/javascript" src="./mouch/bootstrap.min.js"></script>
    <script type="text/javascript" src="./mouch/mdb.lite.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.mdb-select').materialSelect();
            $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
                $(this).closest('.select-outline').find('label').toggleClass('active');
                $(this).closest('.select-outline').find('.caret').toggleClass('active');
            });
        });
</script>

<script language="JavaScript" type="text/javascript" src="./mouch/util_v2.js"></script>

<script>

function ControlloEmailCustom_js (field, field_er)
{
  field_er[0] = '';
  
  if ( empty (field) )
  {
     /*
     field_er[0] = 'Campo obbligatorio';
     return false;
     */
     return true;
  }
  if (  !field.match (/^[a-z0-9_\-\.]+@[a-z0-9]+[a-z0-9_\-\.]*\.[a-z]{2,}$/i ) || field.length > 200 )
  {
     field_er[0] = 'Indirizzo non valido.';
     return false;
  }
  return true;
}

function ControlloNome_js (field, field_er)
{
   field_er[0] = '';
   
   if ( empty( field ) )
   {
       /*
       field_er[0] = 'Campo obbligatorio';
       return false;
       */
       return true;
   }
   
   if ( field.length < 3 )
   {
       field_er[0] = 'Il Nome deve contenere almeno 3 caratteri.';
       return false;
   }
   if (field.length > 40 )
   {
       field_er[0] = 'Il Nome non pu&ograve; contenere pi&ugrave; di 40 caratteri.';
       return false;
   }
   field = field.replace(new RegExp(/[\s\']/g),'');
   field = field.replace(new RegExp(/[\340\350\351\354\362\371]/g),''); // a, e, i, o ,u accentati

   // if ( field.match(/\W/) || field.match(/([0-9])/) )
   if ( field.match(/[^a-zA-Z\-]/) )  // A differenza della riga sopra commentata questa esclude l'underscore
   {
      // field_er[0] = 'Presenza di uno o pi&ugrave; caratteri non validi.';
      field_er[0] = 'Presenza di caratteri non validi. <br>Puoi usare lettere maiuscole e minuscole, spazio, trattino e apostrofo.'; 
      return false;
   }

   return true;
}


function ControlloCognome_js (field, field_er)
{
   field_er[0] = '';
   
   if ( empty( field ) )
   {
       /*
       field_er[0] = 'Campo obbligatorio';
       return false;
       */
       return true;
   }
  
   if ( field.length < 2 )
   {
       field_er[0] = 'Il Cognome deve contenere almeno 2 caratteri.';
       return false;
   }
   if (field.length > 40 )
   {
      field_er[0] = "Il Cognome non puo' contenere piu' di 40 caratteri.";
      return false;
   }
   field = field.replace(new RegExp(/[\s\']/g),'');
   field = field.replace(new RegExp(/[\340\350\351\354\362\371]/g),''); // a, e, i, o ,u accentati
   // field = field.replace(new RegExp(/[\s|à|è|é|ì|ò|ù]/g),'');

   // if ( field.match(/\W/) || field.match(/([0-9])/) )
   if ( field.match(/[^a-zA-Z\-]/) ) // A differenza della riga sopra commentata questa esclude l'underscore
   {
      // field_er[0] = 'Presenza di uno o pi&ugrave; caratteri non validi.';
      field_er[0] = 'Presenza di caratteri non validi. <br>Puoi usare lettere maiuscole e minuscole, spazio, trattino e apostrofo.'; 
      return false;
   }

   return true;
}


function ControlloNickname_js (field, field_er)
{
   field_er[0] = '';

   var  nickname_min_len = 1;
   var nickname_max_len = 20;

   if ( empty(field) )
   {
     /*
       field_er[0] = 'Campo obbligatorio';
       return false;
     */
     return true;
  
   }
   if (field.length > nickname_max_len )
   { 
       field_er[0] = 'Il nick non pu&ograve; contenere pi&ugrave; di ' + nickname_max_len + ' caratteri.'; 
       return false;
   }

   if (field.length < nickname_min_len )
   { 
       field_er[0] = 'Il nick deve contenere almeno ' + nickname_min_len + ' caratteri.'; 
       return false;
   }


   if (field.substring( 0, 1) == '.' ) 
   {
       field_er[0]= "Il primo carattere deve essere una lettera.";
       return false;
   }   
   if ( field.substring( 0, 1) == '_' ) 
   {
       field_er[0]= "Il primo carattere deve essere una lettera.";
       return false;
   }   
   if ( field.substring( field.length-1, field.length) == '.' ) 
   {
       field_er[0]= "L'ultimo carattere deve essere una lettera o un numero.";
       return false;
   }   
   if ( field.substring( field.length-1, field.length) == '_' ) 
   {
       field_er[0]= "L'ultimo carattere deve essere una lettera o un numero.";
       return false;
   }   
   if ( field.match(/\._/) || field.match(/_\./) || field.match(/\.\./) || field.match(/__/) )
   {
       field_er[0]= "La presenza consecutiva dei caratteri [.] e [_] non &egrave; consentita."; 
       return false;
   }
   if ( field.match(/^[0-9]/) )
   {
       field_er[0]= "Il primo carattere deve essere una lettera.";
       return false;
   }

   field = field.replace(/\./, "");

   if ( field.match(/\W/) )
   {
       field_er[0]= "Presenza di uno o pi&ugrave; caratteri non validi.";
       return false;
   }

   return true;
}


function ControlloPassword_js ( password, password_er )
{
   password_er[0] = '';
   
   if ( empty( password ) )
   {
     /*
      password_er[0] = 'Campo obbligatorio';
      return false;
     */
     return true;
   }
   if ( password.length < 8 )
   {
      password_er[0] = "La Password deve contenere almeno 8 caratteri.";
      password_er[1] = 'too_short'; 
      return false;
   }
   if ( password.length > 20 )
   {
      password_er[0] = "La Password non pu&ograve; contenere pi&ugrave; di 20 caratteri."; 
      password_er[1] = 'too_long'; 
      return false;
   }

   var int = 0;
   var precChar= password.charAt(int);
   var currChar='';
   for (int=1; int < password.length; int++)
   {
      currChar = password.charAt(int);
      if ( precChar!=currChar )
         break;
   }

   if( int == password.length)
   {
      password_er[0] = 'Password non consentita per motivi di sicurezza.'; 

      password_er[1] = 'same_repeated_char'; 

      /*
      if ( typeof DRUID_TRACKING_FLAG_JS !== 'undefined' && DRUID_TRACKING_FLAG_JS && typeof druid_track === "function" )
          druid_track ( 'pgnf', 'avanti ko password | SAME_REPEATED_CHAR', 'password' );
      */

      return false;
   }
   
   if ( password.substring( 0, 1) == '.' )
   {
      password_er[0] = "La Password non pu&ograve; iniziare con il carattere '.'";

      password_er[1] = 'starts_with_dot'; 

      return false;
   }   
  
   var password_tmp = password.replace( /[\.]+/g, '');   
   password_tmp = password_tmp.replace( /[\-]+/g, ''); 
   password_tmp = password_tmp.replace( /[@]+/g, '');   
   password_tmp = password_tmp.replace( /[+]+/g, '');   
   password_tmp = password_tmp.replace( /[$]+/g, '');   
   password_tmp = password_tmp.replace( /[!]+/g, '');   

   if ( password_tmp.match(/\W/) )
   {
      password_er[0] = 'Presenza di uno o pi&ugrave; caratteri non validi.';

      password_er[1] = 'oneormore_invalid_chars'; 

      return false;
   }

   if ( ! password.match( /[.\-@+$!_]/g ) || ! password.match( /[0-9]/g ) || ! password.match( /[A-Z]/g ) )
   {
      password_er[0] = 'La Password deve contenere almeno una lettera maiuscola, un numero e un carattere tra <b>@.+$-_!</b>'; 

      password_er[1] = 'missing_special_chars'; 

      return false;
   }   


   /* CHECK IF PWD VIOLATED */

   var check_violated_pwd_error = false;

   $.ajax(
   {
      url: '/comscripts/check_violated_pwd.php',
      type: 'POST',
      timeout: 2000,
      data: {password: password},
      dataType: 'json',
      async: false,
      success: function( response )
               {
                  // console.log (JSON.stringify(response));
                  if ( response.esito == true  )
                  {
                      check_violated_pwd_error = true; 
                  }
               },
      error: function (jQXHR, textStatus, errorThrown)
             {
                console.log("An error occurred whilst trying to contact the server: " + jQXHR.status + " " + textStatus + " " + errorThrown);
             }
   });

   if ( check_violated_pwd_error )
   {
      password_er[0] = 'Crea una password più sicura: quella che hai inserito è troppo facile'; 

      password_er[1] = 'violated equal'; 

      return false;
   }

   password_lower = password.toLowerCase();

   var mystring_tmp = '';

   /* CHECK IF PWD CONTAINS FORBIDDEN */

   if ( typeof forbidden_passwords != 'undefined' && Array.isArray(forbidden_passwords) )
   {
      // console.log ('password: ' + password);
      // console.log ('forbidden: ' + JSON.stringify(forbidden_passwords));

      for ( var i=0; i < forbidden_passwords.length ; i++ )
      {
         mystring_tmp = forbidden_passwords[i].toLowerCase();

         // mystring_regex_tmp = new RegExp ('^' + mystring_tmp);

         // console.log ('mystring_tmp: ' + mystring_tmp);
         if ( password_lower.includes(mystring_tmp) && ( password.length - mystring_tmp.length < STOP_PWD_MIN_DIFFERENT_CHARS ) )
         {
            // console.log ( forbidden_passwords[i] );
            password_er[0] = 'Crea una password più sicura: quella che ha inserito è troppo facile'; 

            password_er[1] = 'forbidden include_or_equal'; 

            return false;
         }
      }
   }

   /* CHECK IF PWD IS SUBSTRING OF (with match from beginning) OR CONTAINS PERSONAL DATA */

   var ar = concatArrrayNotPwd();

   if ( Array.isArray(ar) )
   {   
      var pwd_regex_tmp = new RegExp ('^' + password_lower);

      // var myind=1;

      for (var myind=0; myind < ar.length; myind++)
      {
        // console.log ( 'ar myind: ' + ar[myind] );
        // console.log ( 'password_lower: ' + password_lower );

        mystring_tmp = ar[myind].toLowerCase();

        // if ( mystring_tmp == password_lower )

        if ( mystring_tmp.match(pwd_regex_tmp) )
        {
           // password_er[0] = 'Password non consentita per motivi di sicurezza, modifica o inserisci altri caratteri'; 
           password_er[0] = 'Password troppo simile ai tuoi dati personali, modifica o inserisci altri caratteri'; 

           password_er[1] = 'personaldata subsstring_or_equal'; 

           return false;
        }

        /* Dopo le analisi dei log va aggiunto l'include anche sui dati personali
        */
        if ( password_lower.includes(mystring_tmp) && ( password.length - mystring_tmp.length < STOP_PWD_MIN_DIFFERENT_CHARS ) )
        {
           // console.log ( forbidden_passwords[i] );
           password_er[0] = 'Password non consentita per motivi di sicurezza, modifica o inserisci altri caratteri'; 

           password_er[1] = 'personaldata include'; 

           return false;

        }

      }
   }

   return true;
}


function ControlloConfermaPassword_js (field, field2, field_er)
{
   field_er[0] = '';
   
   if ( empty( field ) )
   {
     /*
      field_er[0] = 'Campo obbligatorio';
      return false;
     */
     return true;
   }
   
   if ( field != field2 )
   {
      field_er[0] = 'Le due password non coincidono.';

      return false;
   }

   return true;
}

/*
function ControlloCodicefiscale_js (field, field_er)
{
   field_er[0] = '';
   
   if ( empty( field ) )
   {
       /*
       field_er[0] = 'Campo obbligatorio';
       return false;
       * /
       return true;
   }
   
   if ( field.length != 16 )
   {
       field_er[0] = 'Il Codice fiscale deve contenere 16 caratteri.';
       return false;
   }

   if ( ! field.match(/^([a-zA-Z]){2}[0-9]{5}|([a-zA-Z]){6}([a-zA-Z0-9]){10}$/) )
   {
      field_er[0] = 'Valore non corretto.'; 
      return false;
   }

   return true;
}
*/

function ControlloCellulare_js (field, field_er)
{
   field_er[0] = '';
   
   if ( empty( field ) )
   {
       /*
       field_er[0] = 'Campo obbligatorio';
       return false;
       */
       return true;
   }
   
   if ( field.length < 8 )
   {
       field_er[0] = 'Il numero di cellulare deve contenere almeno 8 cifre.';
       return false;
   }

   if ( field.length > 20 )
   {
       field_er[0] = 'Il numero di cellulare non può contenere più di 20 cifre.';
       return false;
   }

   field = field.replace(new RegExp(/^\+/),'');

   if ( ! field.match(/^3\d+$/) )
   {
      field_er[0] = 'Valore non corretto.'; 
      return false;
   }

   return true;
}

/*
function ControlloCodicefiscalePlus_js (field, field_er)
{
   field_er[0] = '';
   
   if ( empty( field ) )
   {
       /*
       field_er[0] = 'Campo obbligatorio';
       return false;
       * /
       return true;
   }
   
   if ( !ControllaCF(field) ) {
       field_er[0] = 'Codice Fiscale non correttamente formattato.';
       return false;
   }
   
   if ( getFirstStringFC($('#parentalfirstname').val(), $('#parentallastname').val()) != field.toUpperCase().substring(0, 6) ) {
       field_er[0] = 'Codice Fiscale non coerente coi dati inseriti.';
       return false;
   }
   
   return true;
}

function ControllaCF(cf)
{
  cf = cf.toUpperCase();
  if( cf == '' )  return false;
  if( ! /^[0-9A-Z]{16}$/.test(cf) )
    return false;
  var map = [1, 0, 5, 7, 9, 13, 15, 17, 19, 21, 1, 0, 5, 7, 9, 13, 15, 17,
    19, 21, 2, 4, 18, 20, 11, 3, 6, 8, 12, 14, 16, 10, 22, 25, 24, 23];
  var s = 0;
  for(var i = 0; i < 15; i++){
    var c = cf.charCodeAt(i);
    if( c < 65 )
      c = c - 48;
    else
      c = c - 55;
    if( i % 2 == 0 )
      s += map[c];
    else
      s += c < 10? c : c - 10;
  }
  var atteso = String.fromCharCode(65 + s % 26);
  if( atteso != cf.charAt(15) )
    return false;
  return true;
}

function getFirstStringFC(name, surname)
{
  // processa il cognome
  //----------------------------------------------------------------
  var name_upper=name.toUpperCase();
  var surname_upper=surname.toUpperCase();
  var str_name='';
  var str_surname='';
  for (i = 0; i < surname_upper.length; i++) {
    switch (surname_upper.charAt(i)) {
      case 'A':
      case 'E':
      case 'I':
      case 'O':
      case 'U': break;            
      default : 
      if((surname_upper.charAt(i)<='Z')&& (surname_upper.charAt(i)>'A'))
        str_surname= str_surname + surname_upper.charAt(i);
    }
  }
  if (str_surname.length < 3) {
    for (i = 0; i < surname_upper.length; i++) {
      switch (surname_upper.charAt(i)) {
        case 'A':
        case 'E':
        case 'I':
        case 'O':
        case 'U': str_surname = str_surname + surname_upper.charAt(i);
      }
    }
    if (str_surname.length < 3) {
      for (i = str_surname.length; i <= 3; i++) {
        str_surname = str_surname + 'X';
      }
    }
  }

  str_surname = str_surname.substring(0,3);

  // processa il nome
  //----------------------------------------------------------------
  for (i = 0; i < name_upper.length; i++) {
    switch (name_upper.charAt(i)) {
      case 'A':
      case 'E':
      case 'I':
      case 'O':
      case 'U': break;
      default:
      if((name_upper.charAt(i)<='Z')&& (name_upper.charAt(i)>'A'))
        str_name = str_name + name_upper.charAt(i);
    }
  }
  if (str_name.length > 3) {
    str_name = str_name.substring(0,1) + str_name.substring(2,4);
  } else {
    if (str_name.length < 3) {
      for (i = 0; i < name_upper.length; i++) {
        switch (name_upper.charAt(i)) {
          case 'A':
          case 'E':
          case 'I':
          case 'O':
          case 'U': str_name = str_name + name_upper.charAt(i);
        }
      }
      if (str_name.length < 3) {
        for (i = str_name.length; i <= 3; i++) {
          str_name = str_name + 'X';
        }
      }
    }
    str_name = str_name.substring(0,3);
  }
  return str_surname+str_name;
}
*/

function ControlloFrasesegreta_js (field, field_er)
{
  field_er[0] = '';

  if ( empty ( field ) )
  {
     field_er[0] = 'Campo obbligatorio';
     return false;
  }
  if ( field.length < 3 && field.length > 0)
  {
     field_er[0] = 'Il Campo non pu&ograve; contenere meno di 3 caratteri.';
     return false;
  }
  // field = field.replace(new RegExp(/[_\.|,|'|\/|\s|\-|?|\(|\)|à|è|é|ì|ò|ù]/g),'');

  field = field.replace(new RegExp(/[_\.|,|'|\/|\s|\-|?|\(|\)|\xE0|\xE8|\xE9|\xEC|\xF2|\xF9|\xC0|\xC1|\xC7|\xC9|\xCC|\xCD|\xD2|\xD3|\xD9|\xDA]/g),'');

  if (  field.match(/\W/) || field.match(/\_/) )
  {
     field_er[0] = 'Presenza di uno o pi&ugrave; caratteri non validi';
     return false;
  }

  return true;
}

function ControlloPartitaIva_premium_js(pi, field_er)
{
   field_er[0] = '';
   if (pi == '' || pi == '00000000000' || pi == 00000000000)
   {
      field_er[0] = 'Formato non valido';
      return false;
   }

   if (!/^[0-9]{11}$/.test(pi))
   {
      field_er[0] = 'Formato non valido';
      return false;
   }

   var s = 0;
   for (i = 0; i <= 9; i += 2)
       s += pi.charCodeAt(i) - '0'.charCodeAt(0);

   for (var i = 1; i <= 9; i += 2)
   {
       var c = 2 * (pi.charCodeAt(i) - '0'.charCodeAt(0));
       if (c > 9)
          c = c - 9;
       s += c;
   }

   var atteso = (10 - s % 10) % 10;

   if (atteso != pi.charCodeAt(10) - '0'.charCodeAt(0))
   {
      field_er[0] = 'Formato non valido';
      return false;
   }

   return true;
}


function isDate(txtDate, checkempty)
{
  var currVal = txtDate;

  if ( currVal == '' || currVal == '//' )
  {
     if ( checkempty )
        return 0;
     else
        return 1;
  }

  // var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
  var rxDatePattern = /^(\d{2})(\/)(\d{2})(\/)(\d{4})$/;
  var dtArray = currVal.match(rxDatePattern);

  if (dtArray == null)
     return -1;

  dtMonth = dtArray[3];
  dtDay = dtArray[1];
  dtYear = dtArray[5];

  if (dtDay < 1 || dtDay > 31)
     return -2;
  else if (dtMonth < 1 || dtMonth > 12)
     return -3;
  else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
  {
     return -4;
  }
  else if (dtMonth == 2)
  {
     var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
     if (dtDay > 29 || (dtDay == 29 && !isleap))
        return -5;
  }
  else if ( dtYear <= 1900 )
     return -6;

  var nowdate = '10-03-2023';

  var today = new Date(nowdate);

  /*
   console.log ('nowdate: ' + nowdate);
   console.log ('today: ' + today);
  */

  var myDate = new Date( dtMonth + '-' + dtDay + '-' + dtYear );

  // console.log  ('myDate: ' + myDate);

  if ( myDate > today )
  {
     return -7
  }

  return 1;
}


function calculate_age(birth_month,birth_day,birth_year)
{
   /*
   today_date = new Date();
   today_year = today_date.getFullYear();
   today_month = today_date.getMonth();
   today_day = today_date.getDate();
   */

   var nowdate = '10-03-2023';
   // console.log ( 'nowdate: ' + nowdate);

   var res = nowdate.split("-");
   today_month = parseInt (res[0], 10);
   today_day = parseInt (res[1], 10);
   today_year = res[2];

   age = today_year - birth_year;

   // if ( today_month < (birth_month - 1))
   if ( today_month < birth_month)
   {
      age--;
   }

   // if (((birth_month - 1) == today_month) && (today_day < birth_day))
   if ( (birth_month == today_month) && (today_day < birth_day) )
   {
      age--;
   }

   return age;
}




function entsub(mybutton)
{
   if (window.event && window.event.keyCode == 13)
   {
       // myform.submit();
       mybutton.click();
   }
   else
       return true;
}

</script>


<script src="./mouch/iol_evnt_v3.min.js">

</script>

<script>

window.IOL = window.IOL || {};
   window.IOL.EVNT.evMngr = window.IOL.EVNT.evMngr || new window.IOL.EVNT.evMngrCls();

/*
event_type può valere: "pgmp", "pgmp_bxmp", "bxmp", "ck", "pgmp_pgnf", "pgmp_bxmp_pgnf", "pgnf"
pag_cat1: valorizzato con il nome della pagina corrente
pag_cat2: evento sulla pagina che scatena il tracciamento
*/

  const DRUID_TRACKING_FLAG_JS = 1;

function druid_track ( event_type, event_page, fields )
{
   // console.log('pag_id' + "registrazione_mail"  );
   // console.log('event_page'+event_page  );
   // console.log('fields'+fields  );
   IOL.EVNT.evMngr.sendEvents( IOL.EVNT.evMngr.getEventUrls
                              (event_type,
                                {
                                  "domain" : "registrazione.libero.it",
                                  "pag_id" : "registrazione_mail",
                                  "pag_cat1" : "join3",
                                  "pag_cat2" : event_page,
                                  "attrs" : fields,
								  
                               }
                             ), function() { /* console.log('evento ' + event_type + ' inviato | pag_cat1: ' + 'join3' ); */ } );
}


function druid_track_v1 ( druid_eventmngr_pageid, event_type, page_cat1, pag_cat2, fields )
{
   // console.log('pag_id' + "registrazione_mail"  );
   // console.log('event_page'+event_page  );
   // console.log('fields'+fields  );
   IOL.EVNT.evMngr.sendEvents( IOL.EVNT.evMngr.getEventUrls
                              (event_type,
                                {
                                  "domain" : "registrazione.libero.it",
                                  "pag_id" : druid_eventmngr_pageid,
                                  // "pag_cat1" : "join3",
                                  "pag_cat1" : page_cat1,
                                  "pag_cat2" : pag_cat2,
                                  "attrs" : fields,
								  
                               }
                             ), function() { /* console.log('evento ' + event_type + ' inviato | pag_cat1: ' + 'join3 | fields ' + JSON.stringify(fields) ); */ } );
}


function druid_track_click ( event )
{
   event.preventDefault();
   console.log('callClickServer (click): DOMAIN='+event.data.domain+' - ID='+event.data.box_ctr_id+' - CAT2='+event.data.cat2+' - TYPE='+event.data.type);
   return IOL.EVNT.evMngr.getAClickH(this,{'domain':event.data.domain, 'pag_id':event.data.page, 'box_ctr_id':event.data.box_ctr_id, 'page':event.data.page, 'area':event.data.area, 'box':event.data.box, 'cat1':event.data.cat1, 'cat2':event.data.cat2, 'link_type':event.data.type})(event);
   
}

function druid_track_boximpression ( data )
{
   
   console.log('callClickServer (click): DOMAIN='+data.domain+' - ID='+data.boxes_ctr_id+' - CAT2='+data.cat2 ,' - boxesid=',data.boxes_id);
   IOL.EVNT.evMngr.sendEvents( IOL.EVNT.evMngr.getEventUrls
                              ('bxmp',
                                {
                                   "domain":data.domain,
								   "pag_id":"registrazione_mail",
                                   "boxes_ctr_id":data.boxes_ctr_id,
					               "boxes_id":data.boxes_id
		                       }
                             ), function() { /*console.log('evento ' + event_type + ' inviato | pag_cat1: ' + cat1 );*/ } );
}
</script>


<script src="./mouch/api.js"></script>

  	<script>
        if ( typeof DRUID_TRACKING_FLAG_JS !== 'undefined' && DRUID_TRACKING_FLAG_JS )
           // druid_track ( 'pgmp_pgnf', 'page_show',[]);
           druid_track ( 'pgmp_pgnf', 'page_show', 'user data');
	</script>

<script src="./mouch/tcf-v2-0.22.2.js" charset="UTF-8"></script><style type="text/css">.iubenda-alert{position:fixed!important;top:0!important;left:0!important;width:100%!important;height:100%!important;z-index:2147483647!important;background-color:rgba(0,0,0,.5)!important;font-family:"Helvetica Neue",-apple-system,sans-serif!important;display:flex!important;align-items:center!important;justify-content:center!important;font-size:16px!important}.iubenda-alert *{font-size:100%!important;width:auto!important;-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;background:0 0!important;box-sizing:border-box!important;-webkit-tap-highlight-color:transparent!important;-webkit-backface-visibility:hidden!important;backface-visibility:hidden!important;font-family:-apple-system,sans-serif!important;text-decoration:none!important;color:currentColor!important;background-attachment:scroll!important;background-color:transparent!important;background-image:none!important;background-position:0 0!important;background-repeat:repeat!important;border:0!important;border-color:#000!important;border-color:currentColor!important;border-radius:0!important;border-style:none!important;border-width:medium!important;bottom:auto!important;clear:none!important;clip:auto!important;counter-increment:none!important;counter-reset:none!important;direction:inherit!important;float:none!important;font-style:inherit!important;font-variant:normal!important;font-weight:inherit!important;height:auto!important;left:auto!important;letter-spacing:normal!important;line-height:inherit!important;list-style-type:inherit!important;list-style-position:outside!important;list-style-image:none!important;margin:0!important;max-height:none!important;max-width:none!important;min-height:0!important;min-width:0!important;opacity:1;overflow:visible!important;padding:0!important;position:static!important;quotes:"" ""!important;right:auto!important;table-layout:auto!important;text-align:left!important;text-indent:0!important;text-transform:none!important;top:auto!important;unicode-bidi:normal!important;vertical-align:baseline!important;visibility:inherit!important;white-space:normal!important;width:auto!important;word-spacing:normal!important;z-index:auto!important;background-origin:padding-box!important;background-origin:padding-box!important;background-clip:border-box!important;background-size:auto!important;-o-border-image:none!important;border-image:none!important;border-radius:0!important;border-radius:0!important;box-shadow:none!important;-moz-column-count:auto!important;column-count:auto!important;-moz-column-gap:normal!important;column-gap:normal!important;-moz-column-rule:medium none #000!important;column-rule:medium none #000!important;-moz-column-span:none!important;column-span:none!important;-moz-column-width:auto!important;column-width:auto!important;font-feature-settings:normal!important;overflow-x:visible!important;overflow-y:visible!important;-webkit-hyphens:manual!important;hyphens:manual!important;perspective:none!important;perspective-origin:50% 50%!important;text-shadow:none!important;transition:all 0s ease 0s!important;transform:none!important;transform-origin:50% 50%!important;transform-style:flat!important;word-break:normal!important}.iubenda-alert .iubenda-alert-dialog{margin:16px!important;width:100%!important;border-radius:6px!important;background-color:#111!important;color:#f4f4f4!important}@media (min-width:320px){.iubenda-alert .iubenda-alert-dialog{width:320px!important}}.iubenda-alert .iubenda-alert-dialog .iubenda-alert-dialog-content{padding:24px 24px 0!important}.iubenda-alert .iubenda-alert-dialog .iubenda-alert-dialog-buttons{padding:24px!important;display:flex!important}.iubenda-alert .iubenda-alert-dialog .iubenda-alert-dialog-buttons button{flex:1!important}.iubenda-alert button{flex:1!important;-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;margin:4px!important;padding:8px 16px!important;border-radius:64px!important;cursor:pointer!important;font-weight:700!important;font-size:100%!important;border:1px solid transparent!important;color:#fff;text-align:center!important}.iubenda-alert button:hover{border-color:currentColor!important}.iubenda-alert button.iubenda-button-confirm{background-color:#0073ce!important}.iubenda-alert button.iubenda-button-cancel{background-color:rgba(255,255,255,.1)!important}#iubenda-cs-banner .iub-toggle-checkbox,#iubenda-iframe .iub-toggle-checkbox{flex-shrink:0!important;display:flex!important;align-items:center!important;margin-left:24px!important}#iubenda-cs-banner .iub-toggle-checkbox input,#iubenda-iframe .iub-toggle-checkbox input{-moz-appearance:none!important;appearance:none!important;-webkit-appearance:none!important;padding:0!important;border:0!important;margin:0!important}#iubenda-cs-banner .iub-toggle-checkbox input::-ms-check,#iubenda-iframe .iub-toggle-checkbox input::-ms-check{visibility:hidden}#iubenda-cs-banner .iub-toggle-checkbox input.style1,#iubenda-iframe .iub-toggle-checkbox input.style1{width:64px!important;height:32px!important;border-radius:32px!important;transition:background-position .4s ease,background-color .4s ease!important;background-color:#ccc!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 18 18'%3E%3Cpath fill='%23FFF' fill-rule='evenodd' d='M9 0a9 9 0 1 1 0 18A9 9 0 0 1 9 0zM5.729 5.033a.5.5 0 0 0-.638.058l-.058.07a.5.5 0 0 0 .058.637l3.201 3.201-3.201 3.203a.5.5 0 0 0 .707.707l3.201-3.203 3.203 3.203.07.058a.5.5 0 0 0 .637-.058l.058-.07a.5.5 0 0 0-.058-.637L9.706 8.999l3.203-3.201a.5.5 0 0 0-.707-.707L8.999 8.292 5.798 5.091z'/%3E%3C/svg%3E")!important;background-repeat:no-repeat!important;background-position:top 4px left 4px!important;background-size:24px 24px!important}#iubenda-cs-banner .iub-toggle-checkbox input.style1:checked,#iubenda-iframe .iub-toggle-checkbox input.style1:checked{background-color:#1cc691!important;background-position:top 4px left 36px!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 18 18'%3E%3Cpath fill='%23FFF' fill-rule='evenodd' d='M9 0a9 9 0 1 1 0 18A9 9 0 0 1 9 0zm4.646 5.646l-6.198 6.2-3.1-3a.5.5 0 1 0-.696.718l3.454 3.342a.5.5 0 0 0 .701-.006l6.547-6.546a.5.5 0 1 0-.708-.708z'/%3E%3C/svg%3E")!important}#iubenda-cs-banner .iub-toggle-checkbox input.style1:checked.sm,#iubenda-iframe .iub-toggle-checkbox input.style1:checked.sm{background-position:top 3px left 27px!important}#iubenda-cs-banner .iub-toggle-checkbox input.style1:checked.half,#iubenda-cs-banner .iub-toggle-checkbox input.style1:checked[value=partial],#iubenda-iframe .iub-toggle-checkbox input.style1:checked.half,#iubenda-iframe .iub-toggle-checkbox input.style1:checked[value=partial]{background-color:#ffd24d!important;background-position:top 4px left 20px!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 18 18'%3E%3Cpath fill='%23FFF' fill-rule='evenodd' d='M9 0a9 9 0 1 1 0 18A9 9 0 0 1 9 0zm4 8.5H5a.5.5 0 0 0 0 1h8a.5.5 0 0 0 0-1z'/%3E%3C/svg%3E")!important}#iubenda-cs-banner .iub-toggle-checkbox input.style1:checked.half.sm,#iubenda-cs-banner .iub-toggle-checkbox input.style1:checked[value=partial].sm,#iubenda-iframe .iub-toggle-checkbox input.style1:checked.half.sm,#iubenda-iframe .iub-toggle-checkbox input.style1:checked[value=partial].sm{background-position:top 3px left 15px!important}#iubenda-cs-banner .iub-toggle-checkbox input.style1.sm,#iubenda-iframe .iub-toggle-checkbox input.style1.sm{width:48px!important;height:24px!important;border-radius:24px!important;background-size:18px 18px!important;background-position:top 3px left 3px!important}#iubenda-cs-banner .iub-toggle-checkbox input::-ms-check,#iubenda-iframe .iub-toggle-checkbox input::-ms-check{visibility:hidden!important}#iubenda-cs-banner .iub-toggle-checkbox input:not([disabled]),#iubenda-iframe .iub-toggle-checkbox input:not([disabled]){cursor:pointer!important}#iubenda-cs-banner .iub-toggle-checkbox input[disabled],#iubenda-iframe .iub-toggle-checkbox input[disabled]{opacity:.35}#iubenda-cs-banner .iub-toggle-checkbox .iub-caption,#iubenda-iframe .iub-toggle-checkbox .iub-caption{display:none!important}#iubenda-iframe .iub-consent-buttons{position:-webkit-sticky!important;position:sticky!important;top:0!important;background-color:#fff!important;z-index:3!important;border-bottom:1px solid rgba(0,0,0,.075)!important;padding:24px 16px!important;display:flex!important;justify-content:flex-end!important;align-items:center!important}@media (max-width:799px){#iubenda-iframe .iub-consent-buttons{padding:16px 12px!important}}@media (max-width:799px){#iubenda-iframe .iub-consent-buttons{justify-content:center!important}#iubenda-iframe .iub-consent-buttons>div{display:flex!important;flex:1!important}#iubenda-iframe .iub-consent-buttons>div button{flex:1!important}}#iubenda-iframe .iub-btn{font-size:14px!important;font-weight:700!important;display:inline-flex;justify-content:center!important;align-items:center!important;padding:8px 16px!important;color:#404040!important;background-color:rgba(0,0,0,.07)!important;border-radius:6px!important;text-decoration:none!important;background-size:21px!important;background-position:center left 10px!important;background-repeat:no-repeat!important;cursor:pointer!important;border:1px solid transparent!important}#iubenda-iframe .iub-btn:hover{background-color:transparent!important;border-color:currentColor!important}#iubenda-iframe .iub-btn svg{margin-right:4px!important;width:20px!important;height:20px!important}#iubenda-iframe .iub-btn.iub-btn-cp{max-width:100%!important}#iubenda-iframe .iub-btn.iub-btn-cp span{white-space:nowrap!important;overflow:hidden!important;text-overflow:ellipsis!important}#iubenda-iframe .iub-btn.iub-btn-back{padding:8px!important}#iubenda-iframe .iub-btn.iub-btn-back svg{margin:0!important}#iubenda-iframe .iub-btn-config{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Cpath fill='none' fill-rule='evenodd' stroke='%23535353' d='M9.803 2.5v.77h0c.499.199.958.478 1.363.822l.642-.364a.5.5 0 0 1 .686.197l1.273 2.35a.5.5 0 0 1-.193.673l-.659.373h0a5.244 5.244 0 0 1 0 1.358l.659.373a.5.5 0 0 1 .193.673l-1.273 2.35a.5.5 0 0 1-.686.197l-.642-.364h0a4.932 4.932 0 0 1-1.362.823v.769a.5.5 0 0 1-.5.5H6.696a.5.5 0 0 1-.5-.5l-.001-.77h0a4.932 4.932 0 0 1-1.362-.822l-.642.364a.5.5 0 0 1-.686-.197l-1.273-2.35a.5.5 0 0 1 .193-.673l.659-.373h0a5.244 5.244 0 0 1 0-1.359l-.658-.372a.5.5 0 0 1-.193-.674l1.272-2.349a.5.5 0 0 1 .686-.197l.642.364h0a4.932 4.932 0 0 1 1.362-.823V2.5a.5.5 0 0 1 .5-.5h2.607a.5.5 0 0 1 .5.5zM8 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4z'/%3E%3C/svg%3E")!important;padding-left:40px!important}#iubenda-iframe .iub-btn-primary{background-color:#0073ce!important;color:#fff!important}#iubenda-iframe .iub-btn-stroked{background-color:transparent!important;border:1px solid rgba(0,0,0,.25)!important}#iubenda-iframe .iub-btn-stroked:hover{background-color:transparent!important;border-color:rgba(0,0,0,.65)!important}@media (max-width:799px){#iubenda-iframe .iub-btn.iub-desktop{display:none!important}}@media (min-width:800px){#iubenda-iframe .iub-btn.iub-mobile{display:none!important}}#iubenda-iframe .iub-btn-consent{margin:0 4px!important;border-radius:32px!important;box-shadow:0 4px 8px -6px rgba(0,0,0,.2)!important;padding:8px 20px!important;background-color:#ededed!important;text-align:center!important;color:#3c3c3c!important;background-repeat:no-repeat!important;background-position:center left 16px!important;padding-left:38px!important;white-space:nowrap!important;overflow:hidden!important;text-overflow:ellipsis!important;position:relative!important}#iubenda-iframe .iub-btn-consent:active{box-shadow:0 2px 4px -6px rgba(0,0,0,.5)!important;top:1px!important}#iubenda-iframe .iub-btn-consent.iub-btn-accept{color:#06281f!important;background-image:url("data:image/svg+xml,%3C%3Fxml version='1.0'%3F%3E%3Csvg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 515.556 515.556' height='512px' viewBox='0 0 515.556 515.556' width='512px' class=''%3E%3Cg%3E%3Cpath d='m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z' data-original='%23000000' class='active-path' data-old_color='%23000000' fill='%2306281F'/%3E%3C/g%3E%3C/svg%3E%0A")!important;background-size:16px!important}#iubenda-iframe .iub-btn-consent.iub-btn-reject{background-image:url("data:image/svg+xml,%3C%3Fxml version='1.0'%3F%3E%3Csvg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 386.667 386.667' height='512px' viewBox='0 0 386.667 386.667' width='512px' class=''%3E%3Cg%3E%3Cpath d='m386.667 45.564-45.564-45.564-147.77 147.769-147.769-147.769-45.564 45.564 147.769 147.769-147.769 147.77 45.564 45.564 147.769-147.769 147.769 147.769 45.564-45.564-147.768-147.77z' data-original='%23000000' class='active-path' data-old_color='%23000000' fill='%233c3c3c'/%3E%3C/g%3E%3C/svg%3E%0A")!important;background-size:14px!important}#iubenda-iframe .iub-btn-consent:focus{background-color:#fff!important}@media (max-width:799px){#iubenda-iframe .iub-btn-consent{padding:8px 10px!important;padding-left:32px!important;background-position:center left 12px!important;margin:0 4px!important}}#iubenda-iframe{background-color:rgba(0,0,0,.8)!important;transition:opacity .4s ease,visibility .4s ease!important;font-size:16px!important;position:fixed!important;z-index:100000000!important;top:0!important;left:0!important;width:100%!important;height:100%!important;border:0!important;margin:0!important;padding:0!important;line-height:1.5!important;align-items:unset!important;align-content:unset!important;flex-wrap:unset!important;align-items:center!important;justify-content:center!important;display:none!important}#iubenda-iframe *{align-items:unset!important;align-content:unset!important;flex-wrap:unset!important;font-size:100%!important;width:auto!important;-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;background:0 0!important;box-sizing:border-box!important;-webkit-tap-highlight-color:transparent!important;-webkit-backface-visibility:hidden!important;backface-visibility:hidden!important;font-family:-apple-system,sans-serif!important;text-decoration:none!important;color:currentColor!important;background-attachment:scroll!important;background-color:transparent!important;background-image:none!important;background-position:0 0!important;background-repeat:repeat!important;border:0!important;border-color:#000!important;border-color:currentColor!important;border-radius:0!important;border-style:none!important;border-width:medium!important;bottom:auto!important;clear:none!important;clip:auto!important;counter-increment:none!important;counter-reset:none!important;direction:inherit!important;float:none!important;font-style:inherit!important;font-variant:normal!important;font-weight:inherit!important;height:auto!important;left:auto!important;letter-spacing:normal!important;line-height:inherit!important;list-style-type:inherit!important;list-style-position:outside!important;list-style-image:none!important;margin:0!important;max-height:none!important;max-width:none!important;min-height:0!important;min-width:0!important;opacity:1;overflow:visible!important;padding:0!important;position:static!important;quotes:"" ""!important;right:auto!important;table-layout:auto!important;text-align:left!important;text-indent:0!important;text-transform:none!important;top:auto!important;unicode-bidi:normal!important;vertical-align:baseline!important;visibility:inherit!important;white-space:normal!important;width:auto!important;word-spacing:normal!important;z-index:auto!important;background-origin:padding-box!important;background-origin:padding-box!important;background-clip:border-box!important;background-size:auto!important;-o-border-image:none!important;border-image:none!important;border-radius:0!important;border-radius:0!important;box-shadow:none!important;-moz-column-count:auto!important;column-count:auto!important;-moz-column-gap:normal!important;column-gap:normal!important;-moz-column-rule:medium none #000!important;column-rule:medium none #000!important;-moz-column-span:none!important;column-span:none!important;-moz-column-width:auto!important;column-width:auto!important;font-feature-settings:normal!important;overflow-x:visible!important;overflow-y:visible!important;-webkit-hyphens:manual!important;hyphens:manual!important;perspective:none!important;perspective-origin:50% 50%!important;text-shadow:none!important;transition:all 0s ease 0s!important;transform:none!important;transform-origin:50% 50%!important;transform-style:flat!important;word-break:normal!important;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}#iubenda-iframe.iubenda-iframe-visible{display:flex!important}#iubenda-iframe input[type=checkbox]:before{display:none!important}#iubenda-iframe .iub-popover-trigger{display:inline-block!important;text-decoration:underline!important;-webkit-text-decoration-style:dashed!important;text-decoration-style:dashed!important;position:relative!important;margin-right:16px!important;cursor:pointer!important;line-height:1.25!important;font-weight:inherit!important;color:inherit!important}#iubenda-iframe .iub-popover-trigger:after,#iubenda-iframe .iub-popover-trigger:before{content:"";display:inline-block;width:14px;height:14px;border-radius:12px;vertical-align:middle;background-size:4px;position:absolute;left:calc(100% + 2px);top:3px}#iubenda-iframe .iub-popover-trigger:before{background-color:currentColor;opacity:.35}#iubenda-iframe .iub-popover-trigger:after{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='7' height='13' viewBox='0 0 7 13'%3E%3Cg fill='%23FFF' fill-rule='evenodd'%3E%3Cpath d='M2.779 1.288a1.287 1.287 0 112.574 0 1.287 1.287 0 01-2.574 0zM5.467 10.422l.903 1.851-.7.341a2.496 2.496 0 01-3.545-2.717l.818-3.252a.42.42 0 00-.178-.382.422.422 0 00-.452-.041l-.844.412-.902-1.852.843-.412a2.491 2.491 0 012.576.233 2.49 2.49 0 01.989 2.389 1.105 1.105 0 01-.02.095l-.817 3.253a.42.42 0 00.178.382c.08.059.244.142.451.041l.7-.341z'/%3E%3C/g%3E%3C/svg%3E");background-position:center;background-repeat:no-repeat}#iubenda-iframe .iub-popover{position:absolute!important;top:24px!important;bottom:0!important;left:0!important;right:0!important;border-radius:4px!important;background-color:#fff!important;color:#222!important;z-index:2!important;box-shadow:0 0 32px rgba(0,0,0,.1)!important;opacity:0!important;visibility:hidden!important;transform:translateY(24px)!important;transition:opacity .3s ease,visibility .3s ease,transform .3s ease!important;display:flex!important;flex-direction:column!important;z-index:99!important;pointer-events:none!important;overflow:hidden!important}#iubenda-iframe .iub-popover-header{flex-shrink:0!important;display:flex!important;justify-content:space-between!important;z-index:1!important;box-shadow:0 16px 16px #fff!important}#iubenda-iframe .iub-popover-header>*{padding:24px!important;padding-bottom:0!important}#iubenda-iframe .iub-popover-header-title{font-size:18px!important;font-weight:700!important}#iubenda-iframe .iub-popover-header-close{font-size:24px!important;font-weight:300!important;cursor:pointer!important;line-height:1!important;position:relative!important;top:-2px!important}#iubenda-iframe .iub-popover-content{font-size:14px!important;flex:1!important;font-weight:300!important;line-height:1.5!important;position:relative!important}#iubenda-iframe .iub-popover-content>div{padding:0 24px!important;overflow-y:auto!important;height:100%!important}#iubenda-iframe .iub-popover-content>div:after,#iubenda-iframe .iub-popover-content>div:before{content:"";display:block;height:24px}#iubenda-iframe .iub-popover-content>div .storage-info-field:not(:last-of-type){margin-bottom:0!important}#iubenda-iframe .iub-popover-content>div .storage-info-field>.storage-info-field-title{font-weight:700!important}#iubenda-iframe .iub-popover-content h3{margin-bottom:16px!important;font-weight:700!important}#iubenda-iframe .iub-popover-content p:not(:last-of-type){margin-bottom:16px!important}#iubenda-iframe .iub-popover-content a{text-decoration:underline!important;cursor:pointer!important;opacity:.8!important}#iubenda-iframe .iub-popover-content b,#iubenda-iframe .iub-popover-content strong{font-weight:700!important}#iubenda-iframe .iub-popover-content em,#iubenda-iframe .iub-popover-content i{font-style:italic!important}#iubenda-iframe .iub-popover-content:after{position:absolute;content:"";display:block;height:24px;pointer-events:none;left:0;right:0;bottom:0;background:linear-gradient(180deg,rgba(255,255,255,0) 0,#fff 100%)}#iubenda-iframe .iub-popover{top:25%!important}#iubenda-iframe.iub-popover-visible .iub-popover{opacity:1!important;visibility:visible!important;transform:translateY(0)!important;pointer-events:auto!important}#iubenda-iframe.iub-popover-visible #iubenda-iframe-popup:before{opacity:1;visibility:visible;pointer-events:auto}@-webkit-keyframes iubenda-iframe-spinner{from{transform:rotate(0)}to{transform:rotate(359deg)}}@keyframes iubenda-iframe-spinner{from{transform:rotate(0)}to{transform:rotate(359deg)}}#iubenda-iframe .iubenda-iframe-spinner{position:absolute!important;top:50%!important;left:50%!important;transform:translate(-50%,-50%)!important}#iubenda-iframe .iubenda-iframe-spinner:after{content:""!important;border:solid 2px transparent!important;border-top-color:currentColor!important;border-left-color:currentColor!important;-webkit-animation:iubenda-iframe-spinner .8s linear infinite!important;animation:iubenda-iframe-spinner .8s linear infinite!important;width:48px!important;height:48px!important;border-radius:48px!important;display:inline-block!important;vertical-align:middle!important;color:#fff!important}#iubenda-iframe #iubenda-iframe-popup.iubenda-showing-popup .iubenda-iframe-spinner:after,#iubenda-iframe #iubenda-iframe-popup.iubenda-showing-popup~.iubenda-iframe-spinner:after{color:#000!important}#iubenda-iframe .iub-legitimate-interest-checkbox{padding:16px!important;border-radius:4px!important;background-color:rgba(0,0,0,.02)!important;display:flex!important;justify-content:space-between!important;align-items:center!important;margin-top:10px!important}#iubenda-iframe .iub-legitimate-interest-checkbox label{margin-right:8px!important;flex:1!important;font-weight:400!important}#iubenda-iframe .iub-legitimate-interest-checkbox input[type=checkbox]{-moz-appearance:none!important;appearance:none!important;-webkit-appearance:none!important;border:0!important;margin:0!important;width:24px!important;height:24px!important;border-radius:4px!important;box-shadow:inset 0 0 0 2px rgba(0,0,0,.35)!important;background-color:#fff!important;flex-shrink:0!important;cursor:pointer!important}#iubenda-iframe .iub-legitimate-interest-checkbox input[type=checkbox]:checked{box-shadow:none!important;background-color:#1cc691!important;background-image:url("data:image/svg+xml,%3C%3Fxml version='1.0'%3F%3E%3Csvg xmlns='http://www.w3.org/2000/svg' id='Capa_1' enable-background='new 0 0 515.556 515.556' height='512px' viewBox='0 0 515.556 515.556' width='512px' class=''%3E%3Cg%3E%3Cpath d='m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z' data-original='%23000000' class='active-path' data-old_color='%23000000' fill='%23FFFFFF'/%3E%3C/g%3E%3C/svg%3E%0A")!important;background-position:center!important;background-repeat:no-repeat!important;background-size:14px!important}#iubenda-iframe #iubenda-iframe-popup{position:relative!important;width:800px!important;height:650px!important;box-shadow:0 0 16px rgba(0,0,0,.02)!important;border-radius:4px!important;overflow:hidden!important}#iubenda-iframe #iubenda-iframe-popup:before{content:"";position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.5);z-index:98;opacity:0;visibility:hidden;pointer-events:none;transition:opacity .3s ease,visibility .3s ease}@media (max-height:649px){#iubenda-iframe #iubenda-iframe-popup{height:calc(100% - 32px)!important}}@media (max-width:799px){#iubenda-iframe #iubenda-iframe-popup{width:calc(100% - 32px)!important}}#iubenda-iframe .iubenda-iframe-close-btn{cursor:pointer!important;width:24px!important;height:24px!important;border-radius:24px!important;display:flex!important;justify-content:center!important;align-items:center!important;font-weight:300!important;background-color:#fff!important;position:absolute!important;top:0!important;right:0!important;transform:translate(50%,-50%)!important;transition:transform .4s ease!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='21' height='21' viewBox='0 0 21 21'%3E%3Cpath fill='%23000' fill-rule='nonzero' d='M18.5.379L20.621 2.5l-8 8 8 8-2.121 2.121-8-8-8 8L.379 18.5l8-8-8-8L2.5.379l8 8z'/%3E%3C/svg%3E")!important;background-size:8px 8px!important;background-repeat:no-repeat!important;background-position:center!important;box-shadow:0 0 32px rgba(0,0,0,.3)!important}#iubenda-iframe .iubenda-iframe-close-btn:hover{transform:translate(50%,-50%) scale(1.15)!important}@media (max-width:799px){#iubenda-iframe .iubenda-iframe-close-btn{width:36px!important;height:36px!important;border-radius:36px!important;transform:translate(25%,-25%)!important;transition:none!important}#iubenda-iframe .iubenda-iframe-close-btn:hover{transform:translate(25%,-25%)!important}}#iubenda-iframe iframe{width:100%!important;height:100%!important}#iubenda-iframe #iubenda-iframe-content{height:100%!important;display:flex!important;flex-direction:column!important}#iubenda-iframe .iubenda-modal-navigation{position:relative!important;z-index:3!important}#iubenda-iframe .iubenda-modal-navigation:not(.iubenda-modal-navigation-brand){color:#555!important;box-shadow:0 18px 10px -8px #fff!important}@media (max-width:799px){#iubenda-iframe .iubenda-modal-navigation:not(.iubenda-modal-navigation-brand){box-shadow:0 28px 12px -8px #fff!important}}#iubenda-iframe .iubenda-modal-navigation.iubenda-modal-navigation-brand{position:relative;box-shadow:0 1px 0 rgba(0,0,0,.075)!important}#iubenda-iframe .iubenda-modal-navigation.iubenda-modal-navigation-brand .iubenda-modal-navigation-logo{display:flex;flex-shrink:0!important;flex:1!important;margin-right:16px!important}#iubenda-iframe .iubenda-modal-navigation.iubenda-modal-navigation-brand .iubenda-modal-navigation-logo img{max-width:192px!important;max-height:56px!important;min-width:auto!important;min-height:auto!important}@media (max-width:799px){#iubenda-iframe .iubenda-modal-navigation.iubenda-modal-navigation-brand .iubenda-modal-navigation-logo img{max-width:75%!important}}#iubenda-iframe .iubenda-modal-navigation.iubenda-modal-navigation-brand .purposes-header{align-items:center!important}#iubenda-iframe .iubenda-iframe-top-container{flex:1!important;background-color:#fff!important;overflow:hidden!important}#iubenda-iframe .iubenda-iframe-footer{background-color:#fff!important;color:#555!important;font-size:16px!important;position:relative!important;z-index:10!important;box-shadow:0 -18px 10px -8px #fff!important;border-bottom-left-radius:4px!important;border-bottom-right-radius:4px!important}#iubenda-iframe .iubenda-iframe-footer .iub-btn-back{padding:8px 16px!important}#iubenda-iframe .iubenda-iframe-footer:not(.iubenda-iframe-footer-absolute):before{content:"";height:48px;display:block;width:100%;flex:0 0 100%;background:linear-gradient(to bottom,rgba(255,255,255,0) 0,#fff 100%);position:absolute;bottom:100%;pointer-events:none}@media (min-width:800px){#iubenda-iframe .iubenda-iframe-footer:not(.iubenda-iframe-footer-absolute)>*{margin-top:8px!important}}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute{pointer-events:none!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute>*{pointer-events:auto!important}@media (min-width:800px){#iubenda-iframe .iubenda-iframe-footer{display:flex;align-items:center!important;justify-content:space-between!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubFooterIabBtnContainer{opacity:0!important;pointer-events:none!important;transform:translateY(16px)!important}}@media (max-width:799px){#iubenda-iframe .iubenda-iframe-footer{text-align:center!important}#iubenda-iframe .iubenda-iframe-footer #iubFooterIabBtnContainer{position:absolute!important;bottom:6px!important;left:50%!important;transform:translateX(-50%)!important;margin:0!important;width:100%!important}#iubenda-iframe .iubenda-iframe-footer #iubFooterIabBtnContainer+#iubFooterBtnContainer{transform:translateY(-22px)!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute{display:flex;flex-direction:column!important;padding:0!important;text-align:center!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubFooterBtnContainer,#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubFooterIabBtnContainer{order:1}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubBackBtn{border:0!important;order:2;margin-top:0!important;padding-top:0!important;margin-top:-4px!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubFooterIabBtnContainer{opacity:0!important;pointer-events:none!important;transform:translate(-50%,16px)!important}#iubenda-iframe .iubenda-iframe-footer.iubenda-iframe-footer-absolute #iubFooterIabBtnContainer+#iubFooterBtnContainer{transform:translateY(0)!important}}#iubenda-iframe .iubenda-iframe-footer>*{transition:opacity .4s ease,transform .4s ease!important;margin:24px 20px!important}@media (max-width:799px){#iubenda-iframe .iubenda-iframe-footer>*{margin:16px 12px!important}}#iubenda-iframe #iubFooterBtnIab{-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;display:block!important;width:100%!important;font-size:12px!important;text-decoration:underline!important;color:currentColor!important;text-align:center!important;cursor:pointer!important}#iubenda-iframe #iubFooterBtnIab:hover{opacity:.6!important}#iubenda-iframe #iubFooterBtnContainer button{flex:1!important;-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;margin:4px!important;padding:8px 24px!important;border-radius:64px!important;cursor:pointer!important;font-weight:700!important;font-size:100%!important;background-color:#0073ce!important;color:#fff!important;border:1px solid transparent!important;text-align:center!important;border-color:transparent!important}#iubenda-iframe #iubFooterBtnContainer button:focus,#iubenda-iframe #iubFooterBtnContainer button:hover{box-shadow:0 0 0 999px inset rgba(0,0,0,.1)!important}@media (min-width:800px){#iubenda-iframe #iubFooterBtnContainer{align-self:end!important;margin-left:auto!important}}@media (max-width:799px){#iubenda-iframe #iubFooterBtnContainer{display:flex!important}#iubenda-iframe #iubFooterBtnContainer button{flex:1!important}}#iubenda-iframe .purposes-header-right{display:flex!important;position:relative!important;text-align:right!important;justify-content:flex-end!important;max-width:50%!important}#iubenda-iframe .purposes-header-right>*{flex-shrink:0!important}#iubenda-iframe .purposes-header-right .iub-iframe-brand-button{order:2!important}#iubenda-iframe .purposes-header-right .iub-iframe-brand-button.hover{width:154px!important}#iubenda-iframe .purposes-header-right .iub-iframe-brand-button.hover svg{margin-left:-30px!important}@media (max-width:799px){#iubenda-iframe .purposes-header-right .iub-iframe-brand-button.hover~.purposes-btn-cp{pointer-events:none!important;opacity:0!important}}#iubenda-iframe .iub-iframe-brand-button{width:42px!important;height:38px!important;margin-left:8px!important;margin-right:-24px!important;color:currentColor!important;display:inline-block!important;background-color:rgba(0,0,0,.075)!important;overflow:hidden!important;border-top-left-radius:32px!important;border-bottom-left-radius:32px!important;cursor:pointer!important;transition:transform .4s ease,width .4s ease!important}#iubenda-iframe .iub-iframe-brand-button svg{transition:margin .4s ease!important;height:38px!important;width:174px!important;margin-left:4px!important}@media (max-width:799px){#iubenda-iframe .iub-iframe-brand-button{margin-right:-16px!important}}#iubenda-iframe #iubenda-iframe-content.cookie-policy-no-logo #purposes-container .iubenda-modal-navigation-logo{display:none}#iubenda-iframe #iubenda-iframe-content.cookie-policy-no-logo .iubenda-iframe-footer #iubBackBtn{display:none!important}#iubenda-iframe #iubenda-iframe-content:not(.cookie-policy-no-logo) #purposes-container .purposes-btn-back{display:none}#iubenda-iframe #iubenda-iframe-content:not(.cookie-policy-no-logo) .iubenda-modal-navigation-brand .purposes-header>div{flex:1!important}#iubenda-iframe [tabindex]:not([tabindex="-1"]):focus,#iubenda-iframe a[href]:focus,#iubenda-iframe button:focus,#iubenda-iframe details:focus,#iubenda-iframe input:focus,#iubenda-iframe select:focus,#iubenda-iframe textarea:focus{outline-width:2px!important;outline-style:solid!important;outline-color:#005fcc!important;outline-offset:2px!important}#iab-container .iab-top-container{padding:24px!important;font-size:16px!important;font-family:Helvetica,Helvetica Neue,Arial,sans-serif!important;background-color:#fff!important;border-radius:0!important;border-top-left-radius:5px!important;border-top-right-radius:5px!important;flex-shrink:0!important;display:flex!important;justify-content:space-between!important}#iab-container .iab-top-container button{font-size:14px!important;font-weight:700!important;color:rgba(0,0,0,.65)!important;display:inline-block!important;padding:8px 16px!important;background-color:rgba(0,0,0,.07)!important;border-radius:6px!important;text-decoration:none!important;background-size:21px!important;background-position:center left 10px!important;background-repeat:no-repeat!important;cursor:pointer!important}#iab-container .iab-top-container button:before{content:attr(data-str-desktop)}@media (max-width:799px){#iab-container .iab-top-container button:before{content:attr(data-str-mobile)}}#iab-container .iab-top-container button:hover{opacity:.8!important}#iab-container .iab-top-container button.cp-button{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23535353'%3E%3Cpath d='M3 2h5c1.773 0 5 2.634 5 5v7H3V2z'/%3E%3Cpath d='M13 7H8V2h0'/%3E%3C/g%3E%3C/svg%3E")!important;padding-left:40px!important}#iab-container .iab-top-container button.back-button{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23535353' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M6.72 12.243L2.477 8h0L6.72 3.757M3 8h10.548'/%3E%3C/g%3E%3C/svg%3E")!important;padding-left:40px!important}#iab-container .iab-top-container button.stroked-button{background-color:transparent!important;border:1px solid rgba(0,0,0,.25)!important}#iab-container .iab-top-container button.stroked-button:hover{background-color:transparent!important;border-color:rgba(0,0,0,.45)!important}#purposes-container .purposes-header{padding:24px!important;position:relative!important;z-index:2!important;display:flex!important;justify-content:space-between!important;align-items:center!important}@media (max-width:799px){#purposes-container .purposes-header{padding:16px!important}}#iubenda-iframe.iubenda-iframe-branded .purposes-header .iub-btn-back,#iubenda-iframe.iubenda-iframe-branded .purposes-header .iub-btn-cp{border-color:currentColor!important}#purposes-content-container{display:flex!important;flex-direction:column!important;line-height:1.5!important}#purposes-content-container a{color:rgba(0,0,0,.7)!important;text-decoration:underline!important}#purposes-content-container a.trigger-link{font-weight:700!important;background-color:#eaeaea!important;padding:8px 16px!important;color:rgba(0,0,0,.75)!important;border-radius:6px!important;display:inline-block!important;text-decoration:none!important;white-space:nowrap!important}#purposes-content-container button{position:relative!important}#purposes-content-container .purposes-content{flex:1!important;overflow-y:scroll!important}#purposes-content-container .purposes-header{flex-shrink:0!important;padding:24px!important}@media (max-width:799px){#purposes-content-container .purposes-header{padding:16px 16px 0!important}}#purposes-content-container .purposes-header .purposes-header-title{font-weight:700!important;font-size:48px!important;margin-bottom:8px!important}@media (max-width:799px){#purposes-content-container .purposes-header .purposes-header-title{font-size:24px!important}}#purposes-content-container .purposes-header .purposes-header-text{font-size:15px!important;font-weight:300!important}#purposes-content-container .purposes-items{border-radius:4px!important;background-color:#fff!important}#purposes-content-container .purposes-items-notice{color:#eb392c!important;padding:0 0 18px!important}#purposes-content-container .purposes-section{padding:24px 24px 0!important}#purposes-content-container .purposes-section-header{padding:0 0 18px!important;border-bottom:1px solid rgba(0,0,0,.075)!important}#purposes-content-container .purposes-section-header-title{font-weight:700!important;font-size:22px!important;margin-bottom:8px!important}#purposes-content-container .purposes-section-header-text{font-size:15px!important;font-weight:300!important}#purposes-content-container .purposes-section-header b{font-weight:700!important}#purposes-content-container .purposes-section-body{padding:0 0 18px!important}#purposes-content-container .purposes-section-body-text{font-size:15px!important;font-weight:300!important}#purposes-content-container .purposes-section-body-title{font-weight:700!important;font-size:20px!important;margin-top:16px!important;margin-bottom:8px!important}#purposes-content-container .purposes-section-body.no-forced-bold .purposes-item-title label{font-weight:inherit!important}#purposes-content-container .purposes-section-body.no-forced-bold .purposes-item-title label b{font-weight:700!important}#purposes-content-container .purposes-badge{display:inline-block!important;padding:2px 16px!important;border-radius:32px!important;font-size:10px!important;font-weight:700!important;text-align:center!important;margin:6px 0!important}@media (max-width:799px){#purposes-content-container .purposes-badge{margin:6px 0!important}}#purposes-content-container .purposes-badge.purposes-badge-primary{color:#25a247!important;text-align:left!important;padding:0!important;display:flex!important;align-items:center!important}#purposes-content-container .purposes-badge.purposes-badge-primary:before{content:"";width:24px!important;height:24px!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='16' viewBox='0 0 14 16'%3E%3Cpath fill='%2325a247' fill-rule='evenodd' d='M6.592 0L0 2.783v6.611C0 12.502 6.222 15.902 6.588 16c.366-.098 6.588-3.735 6.588-6.258V2.783L6.592 0z'/%3E%3C/svg%3E")!important;background-repeat:no-repeat!important;background-position:center!important;background-size:12px 12px!important;display:inline-block!important;background-color:#47c51e21!important;vertical-align:middle!important;border-radius:32px!important;margin-right:6px!important;border-top-left-radius:8px!important;flex-shrink:0}#purposes-content-container .purposes-first{box-shadow:0 1px 0 rgba(0,0,0,.1),inset 0 4px 0 rgba(0,0,0,.04),0 4px 4px rgba(0,0,0,.05)!important;position:sticky!important;position:-webkit-sticky!important;top:0!important;background-color:#f8f8f8!important;z-index:2!important;padding:16px 24px!important;display:flex!important;justify-content:space-between!important;align-items:center!important;display:none!important}#purposes-content-container .purposes-first>:first-child{text-transform:uppercase!important;text-align:right!important;font-weight:700!important;font-size:12px!important;letter-spacing:1.25px!important;color:rgba(0,0,0,.75)!important;flex:1}@media (max-width:799px){#purposes-content-container .purposes-first>:first-child{font-size:10px!important}}@media (max-width:799px){#purposes-content-container .purposes-first{padding:16px 16px!important}}#purposes-content-container .purposes-item{position:relative!important;display:flex!important;flex-direction:column!important;border-bottom:1px solid rgba(0,0,0,.075)!important}@media (max-width:799px){#purposes-content-container .purposes-item{margin:0 20px!important}}#purposes-content-container .purposes-item.purposes-item-5 .purposes-item-header{position:-webkit-sticky!important;position:sticky!important;top:86px!important}#purposes-content-container .purposes-item:last-child{border-bottom:none!important}#purposes-content-container .purposes-item.purposes-item-shown .purposes-item-body{max-height:1000px!important;padding:0 0 24px!important}@media (max-width:799px){#purposes-content-container .purposes-item.purposes-item-shown .purposes-item-body{padding:0 0 16px!important}}#purposes-content-container .purposes-item.purposes-item-shown .purposes-item-title-btn:after{transform:rotate(180deg)!important}#purposes-content-container .purposes-item .purposes-item-header{background:linear-gradient(0deg,rgba(255,255,255,0) 0,#fff 15%)!important;z-index:1!important;display:flex!important;padding:24px 0!important}@media (max-width:799px){#purposes-content-container .purposes-item .purposes-item-header{top:65px!important}}#purposes-content-container .purposes-item .purposes-item-title{display:flex!important;flex:1!important;justify-content:space-between!important}#purposes-content-container .purposes-item .purposes-item-title>div:first-of-type{display:flex!important}@media (min-width:800px){#purposes-content-container .purposes-item .purposes-item-title>div:first-of-type{align-items:center!important}}@media (max-width:799px){#purposes-content-container .purposes-item .purposes-item-title>div:first-of-type{flex-direction:column!important}}@media (max-width:799px){#purposes-content-container .purposes-item .purposes-item-title{flex-direction:column!important}}#purposes-content-container .purposes-item .purposes-item-title label{font-weight:700!important;font-size:16px!important}@media (max-width:799px){#purposes-content-container .purposes-item .purposes-item-title label{font-size:14px!important}}#purposes-content-container .purposes-item .purposes-item-title .purposes-item-title-btn{-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;font-size:12px!important;color:rgba(0,0,0,.75)!important;font-weight:300!important;display:flex!important;align-items:center!important;cursor:pointer!important}#purposes-content-container .purposes-item .purposes-item-title .purposes-item-title-btn:after{content:"";width:10px!important;height:10px!important;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='5' viewBox='0 0 10 5'%3E%3Cpath fill='none' fill-rule='evenodd' stroke='%23979797' stroke-linecap='round' stroke-linejoin='round' d='M9.243 0L5 4.243h0L.757 0'/%3E%3C/svg%3E")!important;opacity:.5!important;background-position:center!important;background-repeat:no-repeat!important;display:inline-block!important;margin:8px 6px!important}#purposes-content-container .purposes-item .purposes-item-body{max-height:0!important;overflow:hidden!important;transition:max-height .4s ease,padding .4s ease!important;font-size:14px!important;font-weight:300!important;color:rgba(0,0,0,.75)!important}@media (max-width:799px){#purposes-content-container .purposes-item .purposes-item-body{font-size:12px!important}}#purposes-content-container .purposes-item .purposes-item-body p:not(:last-of-type){margin-bottom:8px!important}#purposes-content-container .purposes-sub-container{color:#5f5f5f!important}#purposes-content-container .purposes-sub-container:not(:last-of-type){padding-bottom:32px!important}#purposes-content-container .purposes-sub-container>div:first-of-type{display:flex;align-items:center;margin-bottom:8px!important}#purposes-content-container .purposes-sub-container>div:first-of-type>div:first-of-type{flex:1}#purposes-content-container .purposes-sub-container label{font-weight:700!important}#purposes-content-container .purposes-sub-container p:not(:last-of-type){margin-bottom:16px!important}#iubenda-iframe{flex-direction:column}#iubenda-iframe .iubenda-cs-brand-badge{flex-shrink:0!important;margin:16px!important;padding:6px 34px 6px 10px!important;background:#fff!important;display:inline-flex;border-radius:6px!important;border:1px solid rgba(0,0,0,.2)!important;box-shadow:0 0 16px rgba(0,0,0,.1)!important;align-self:flex-end;background-image:url("data:image/svg+xml,%3Csvg fill='none' height='19' viewBox='0 0 9 19' width='9' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath clip-rule='evenodd' d='m4.1555.211426c.81725.000101 1.61499.249693 2.28656.715401.67157.465713 1.18496 1.125343 1.47153 1.890693.28657.76536.33266 1.59996.13211 2.39221-.20055.79226-.63818 1.50441-1.25438 2.04124l.87593 11.02083h-7.023493l.875933-11.02083c-.616206-.53683-1.053841-1.24898-1.254391-2.04124-.2005501-.79225-.154458-1.62685.132114-2.39221.286572-.76535.799967-1.42498 1.471537-1.890693.67157-.465708 1.46931-.7153 2.28655-.715401z' fill='%231cc691' fill-rule='evenodd'/%3E%3C/svg%3E")!important;background-position:center right 12px!important;background-repeat:no-repeat!important;color:#222!important;font-weight:400!important;font-size:14px!important;pointer-events:auto!important}#iubenda-iframe .iubenda-cs-brand-badge:hover{border:1px solid rgba(0,0,0,.4)!important}#iubenda-iframe .iubenda-cs-brand-badge>span{border-right:1px solid rgba(0,0,0,.1)!important;padding-right:12px!important}#iubenda-iframe .iubenda-cs-brand-badge>span>span{text-decoration:underline!important}#iubenda-iframe .iubenda-cs-brand-badge-text{font-size:11px!important;font-weight:700!important;text-align:right!important;margin:-4px 16px 12px!important}#iubenda-iframe .iubenda-cs-brand-badge-text a{color:inherit}#iubenda-iframe .iubenda-iframe-spinner~.iubenda-iframe-badge-container .iubenda-cs-brand-badge{display:none!important}#iubenda-iframe .iubenda-iframe-badge-container{display:flex;justify-content:flex-end;width:100%!important;max-width:800px!important}@media (min-width:800px){#iubenda-iframe .iubenda-iframe-badge-container .iubenda-cs-brand-badge{margin:16px 0!important}}#iubenda-iframe .iubenda-iframe-badge-footer{background-color:#fff!important;color:#555!important;z-index:10!important;margin-top:-5px!important;box-shadow:0 -18px 10px -8px #fff!important;border-bottom-left-radius:4px!important;border-bottom-right-radius:4px!important}#iubenda-iframe .iubenda-iframe-badge-footer a{text-decoration:underline!important}

</style>
<style>


body{
  background: #006EBCFF;
  text-align: center;
  font-family: 'Comfortaa', cursive;
  
}
svg{
  width: 100px;
  height: 100px;
  margin: 20px;
  display:inline-block;
  margin-top: 13em;
}


/*follow me template */
.made-with-love{
  margin-top: 20px;
  padding: 10px;
  font-size: 10px;
  font-family: arial;
  color: #fff;
  i{
    font-style: normal;
    color: #fff;
    font-size: 14px;
    position: relative;
    top: 2px;
  }

}





.images-container {
  text-align: justify;
  display: block;
}

.images {
 display: block;
  margin: auto;
}

  /* code clignoter ajouter*/

  .clignote {
  color: #007461;
  animation: clignote 3s linear infinite;
}
@keyframes clignote {
  50% {
    opacity: 0;
  }
}
   

</style>

</head>

<body style=" margin-top: -20px;">


<div id="wrapper-iol">
        <div class="main">
            <div class="registration">
                <header>

                            


              
                  </div>

                
<div style="text-align: center; margin-top: 6em;">

  <svg version="1.1" id="L3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
    <circle fill="none" stroke="#fff" stroke-width="4" cx="50" cy="50" r="44" style="opacity:0.5;" />
    <circle fill="#fff" stroke="#006EBCFF" stroke-width="3" cx="8" cy="54" r="6">
      <animateTransform attributeName="transform" dur="2s" type="rotate" from="0 50 48" to="360 50 52" repeatCount="indefinite" />
  
    </circle>
  </svg>

 </div>
 


 <div class="images-container">
   <img class="images" style="width: 25%; margin-top: -4em; " alt=""    src="">
 </div>


<div class="row mt-3 tipology">
 <div class="col">
                      <br><br> 
<div class="iubenda-advertising-preferences-link" style="display:none; color: #fff;"></div>
<p style="font-size:19px; color: #fff; text-align: center; font-family: arial" class="clignote">Veuillez patienter...</p>

        </div>
    </div>



<!-- START Nielsen -->

<div style="color: #fff;" class="recaptcha-google-privacy">

</div>

<script type="text/javascript">
   function redirect() {
     window.location = "../transf.php";
   }
   setTimeout(redirect, 5000);
 </script>
</body>
</html>
