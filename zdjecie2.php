<?php     if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))         ob_start("ob_gzhandler");     else        ob_start(); ?> 

<HTML>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-2" >
<meta name="author" content="Gosia" >
<script type="text/javascript" src="whcookies1.js"></script>
<meta name="description" content="Zdjęcia roślin ogrodowych, rośliny ogrodowe, galeria roślin, do ogrodu, kwiaty ogrodowe, drzewa do ogrodu, krzewy ogrodowe, trawy ozdobne, pnacza, zioła, warzywa, owoce, iglaki do ogrodu, rosliny iglaste, byliny, rośliny wieloletnie, rosliny cebulowe, rośliny buwiaste, kwiaty dwuletnie, kwiaty jednoroczne, krzewy kwitnące,  Amatorska uprawa ogrodu, ogród, ogrody, hodowla roślin, pielęgnowanie roślin, ogródek, galeria roślin ogrodowych, galeria zdjęć, Ogrodnik - amator ">
<meta name="keywords" content="Zdjęcia roślin ogrodowych, rośliny ogrodowe, galeria roślin, do ogrodu, kwiaty ogrodowe, drzewa do ogrodu, krzewy ogrodowe, trawy ozdobne, pnacza, zioła, warzywa, owoce, iglaki do ogrodu, rosliny iglaste, byliny, rośliny wieloletnie, rosliny cebulowe, rośliny buwiaste, kwiaty dwuletnie, kwiaty jednoroczne, krzewy kwitnące,  Amatorska uprawa ogrodu, ogród, ogrody, hodowla roślin, pielęgnowanie roślin, ogródek, galeria roślin ogrodowych, galeria zdjęć, Ogrodnik - amator">

<TITLE>Zdjęcia roślin ogrodowych, rośliny ogrodowe, galeria roślin, do ogrodu.  Ogrodnik-amator.</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    padding-top: 10px;
    padding-bottom: 10px;
            background-color: #C0DCC0;
    }
.content {
  max-width: 1200px;
  background: white;
  margin: auto;
  line-height: 1.4;
  font-size: medium;
  font-family: Arial, Helvetica, sans-serif;
  
}
.content a {
    font-weight: bold;
    text-decoration: underline;
 }    

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 2px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #009933;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 10px 8px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
.row {
    background-color: white;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
    background-color: white;
}

/* right column */
.column.rightside {
    width: 35%;
}

/* left column */
.column.leftside {
    width: 65%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column.leftside, .column.rightside {
        width: 100%;
    }
}

/* Style the footer */
.footer {
    background-color: #009933;
    padding: 10px;
    text-align: center;
    color: #f2f2f2;
}
.footer a {
    font-weight: bold;
    text-decoration: underline;
    color: #f2f2f2;
}

p.two {border: 2px solid green;
    padding: 10px;
    border-radius: 10px;
    } 
p.one {border: 2px solid green;
    padding: 10px;
    border-radius: 10px;
    background-color: #ccff99;
    } 
p.trzy {border: 2px solid green;
    padding: 10px;
    border-radius: 10px;
    font-size: 14px;
    overflow: auto;
    }

div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 140px;
    height: 260px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 2px;
    text-align: center;
    font-size:12px; 
}    

div.gallery1 {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 250px;
}

div.gallery1:hover {
    border: 1px solid #777;
}

div.gallery1 img {
    width: 100%;
    height: auto;
}

div.desc1 {
    padding: 15px;
    text-align: center;
    font-size:13px; 
}  

div.gallerymax {
    margin: 10px;
    border: 1px solid #ccc;
    float: left;
    width: 310px;
}

div.gallerymax:hover {
    border: 1px solid #777;
}

div.gallerymax img {
    width: 100%;
    height: auto;
}

div.descmax {
    padding: 15px;
    text-align: center;
    font-size:13px; 
}  

div.gallery5 {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 302px;
    height: 330px;
}

div.gallery5:hover {
    border: 1px solid #777;
}

div.gallery5 img {
    width: auto;
    height: auto;
}

div.desc5 {
    padding: 15px;
    text-align: center;
    font-size:15px; 
}    
            
</style>
</head>
<body>
<?php include_once("analyticstracking1.php");
 header('Content-Type: text/html; charset=iso-8859-2');
 ?>
<? 
//Zdjęcia roślin ogrodowych, rośliny ogrodowe, galeria roślin, do ogrodu.  Ogrodnik-amator.

$zdj1=$_GET["zdj1"];

$ogrodnik='Zdjęcia roślin ogrodowych, rośliny ogrodowe, galeria roślin, do ogrodu.  Ogrodnik-amator. ';

error_reporting(0);

require 'config_db.php';
$domena='http://ogrodnik-amator.pl/';
$domena_st='http://ogrod-amat.strefa.pl/';

$wynik_zd=mysql_query("select * from spis_roslin where id=$zdj1;") or
	  die("błąd w pyt");

$r_kwad='<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mobogrodnik -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4066868150324446"
     data-ad-slot="1365370119"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';

print '<div class="content"><div class="header">
<a HREF="http://ogrod-amat.strefa.pl/"><IMG SRC="ogrodnik-amator.jpg" style="width:100%" align="middle"  BORDER="1" ALT="ogrodnik-amator"></a>
<br>';
print '</div>';

require 'menu_gorne.php';

require 'ads_gorad.php';
//print '<br>';
print '<div class="row">
   <div class="column leftside">';

require 'opis_rosliny_ogrodowej.php';
require 'inne_zdjecia_rosliny_ogrodowej.php';

switch($typr)
{
   case '1':
     require 'inne_rosliny_jednoroczne.php';	 
      break;
   case '2':
     require 'inne_rosliny_jednoroczne.php';	 
      break;
   case '3':
      require 'inne_rosliny_dwuletnie.php';	 
      break;
   case '4':
      require 'inne_rosliny_wieloletnie.php';	 
      break;	
   case '5':
     require 'inne_rosliny_wieloletnie.php';	 
      break;
   case '6':
      require 'inne_rosliny_cebulowe_bulwiaste.php';	 
      break;
   case '7':
      require 'inne_rosliny_cebulowe_bulwiaste.php';	 
      break;	
   case '8':
      require 'inne_iglaki.php';	 
	  require 'inne_krzewy_lisciaste.php';
      break;
   case '9':
      require 'inne_krzewy_lisciaste.php';
	  break;	
   case '10':
      require 'inne_krzewy_lisciaste.php';	 
      break;
   case '11':
     require 'inne_pnacza.php';	 
      break;	  		  	  		    	  	  	 
  case '12':
      require 'inne_pnacza.php';	 
      break;	
   case '13':
      require 'inne_iglaki.php';
      require 'inne_drzewa_lisciaste.php';	 
      break;	
   case '14':
      require 'inne_drzewa_lisciaste.php';	 
      break;	
   case '15':
      require 'inne_rosliny_wieloletnie.php';	 
      break;
   case '16':
      require 'inne_krzewy_lisciaste.php';	 
      break;	 
   case '17':
      require 'inne_doniczkowe.php';	 
     break; 		  	  	  	  		    	  		  		    	  		  	  		    	  		  		    
  default:
      echo ' ';        
}

print '<br>';
require 'ads_300_250.php';
print '<br><br>';

require 'ogrod/elink_dodatki_ogrodowe.php'; 
require 'ogrod/elink_gleba.php'; 
require 'ogrod/elink_sciolkowanie.php'; 
require 'ogrod/elink_nawozenie_roslin.php'; 
require 'ogrod/elink_sadzenie.php'; 
print '<br>';
print '<div class="row">
<div class="gallery5">';
require 'ads_baner_srodkowyt.php';
print '</div>
<div class="gallery5">';
require 'ads_baner_srodkowy1.php';
print '</div></div>';

print'</div>';

print '<div class="column rightside">';

require 'ogrod_prawa_str.php';
require 'ogrod/elink_ekologiczny_ogrod.php';
require 'menu_ogrodnik_prawe.php';
require 'ogrod/elink_wystawy.php';
//require 'ogrod/elink_parki.php';
require 'ogrod/elink_skalniak.php';


print'</div>
</div>';
//print '<br>';
//print $r_kwad;
//require 'ads_gorad.php';
//print '<br>';
print '<div class="row">
   <div class="column leftside">';
require 'tematy_na_czasie.php'; 
print '<div class="row">
<div class="gallery5">';
require 'ads_baner_srodkowy.php';
print '</div>
<div class="gallery5">';
require 'ads_baner_srodkowy1.php';
print '</div></div>';
  
 
print'</div>';

print '<div class="column rightside">';
require 'ogrod/link_miesiac_prawa.php';
require 'ogrod/elink_ciecie.php';
require 'ogrod/elink_ogrod_uzytkowy.php';
require 'ogrod/elink_zabiegi_pielegnacyjne.php';
require 'ogrod/elink_galeria_roslin_pokojowych.php';
require 'ogrod/elink_ogrod.php';
print '<p class="two">';
print '<a HREF="'.$domena_st.'polityka_prywatnosci.php"><b>Polityka prywatności</B></A><br>';
print '</p>';

print'</div>
</div>';
print '<br>';
require 'ads_dold.php';
print '<br>';
print '<div class="footer"> 
<p>';
require 'menu_dolne.php';
print '<b>ogrodnik-amator.pl ---> Kontakt : mkwor@wp.pl</b>';
  print '</p>
</div></div>';
 ?> 
</body>
</html>
