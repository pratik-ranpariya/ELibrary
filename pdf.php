<?php
session_start();
error_reporting(0);
include('config.php');
if(empty($_SESSION['email']))
{
    header('Location:'.URL);
}

if($_GET['kk']){
  switch ($_GET['kk']) {
    case 'aa':
        aa($conn);
      break;
    case 'ab':
        ab($conn);
      break;
    case 'ac':
        ac($conn);
      break;
    case 'ad':
        ad($conn);
      break;
    case 'ae':
        ae($conn);
      break;
    case 'af':
        af($conn);
      break;
    case 'ag':
        ag($conn);
      break;
    case 'ah':
        ah($conn);
      break; 
    case 'ai':
        ai($conn);
      break;
    case 'aj':
        aj($conn);
      break;
    case 'ak':
        ak($conn);
      break;
    case 'al':
        al($conn);
      break;
    case 'am':
        am($conn);
      break;
    case 'an':
        an($conn);
      break;
    case 'ao':
        ao($conn);
      break;
    case 'ap':
        ap($conn);
      break;
    case 'aq':
        aq($conn);
      break;
    case 'ar':
        ar($conn);
      break;
    case 'as1':
        as1($conn);
      break;
    case 'at':
        at($conn);
      break;
    case 'au':
        au($conn);
      break;
    case 'av':
        av($conn);
      break;
    case 'aw':
        aw($conn);
      break;
    case 'ax':
        ax($conn);
      break;
    case 'ay':
        ay($conn);
      break;
    case 'az':
        az($conn);
      break;
    case 'ba':
        ba($conn);
      break;
    case 'bb':
        bb($conn);
      break;
    case 'bc':
        bc($conn);
      break;
    case 'bd':
        bd($conn);
      break;
    case 'be':
        be($conn);
      break;
    case 'bf':
        bf($conn);
      break;
    case 'bg':
        bg($conn);
      break;
    case 'bh':
        bh($conn);
      break;
    case 'bi':
        bi($conn);
      break;
    case 'bj':
        bj($conn);
      break;
    case 'bk':
        bk($conn);
      break;
    case 'bl':
        bl($conn);
      break;
    case 'bm':
        bm($conn);
      break;
    case 'bn':
        bn($conn);
      break;
    case 'bo':
        bo($conn);
      break;
    case 'bp':
        bp($conn);
      break;
    case 'bq':
        bq($conn);
      break;
    case 'br':
        br($conn);
      break;
    case 'bs':
        bs($conn);
      break;
    case 'bt':
        bt($conn);
      break;
    case 'bu':
        bu($conn);
      break;
    case 'bv':
        bv($conn);
      break;
    case 'bw':
        bw($conn);
      break;
    case 'bx':
        bx($conn);
      break;
    case 'by':
        by($conn);
      break;
    case 'bz':
        bz($conn);
      break;
    case 'ca':
        ca($conn);
      break;
    case 'cb':
        cb($conn);
      break;
    case 'cc':
        cc($conn);
      break;
    default:
      // code...
      break;
  }
}else{
  echo json_encode(array(), true);
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function aa($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA A+ 220-801 and 220-802 Cert Guide, 3rd Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ab($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA A Complete Study Guide.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ac($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA A Complete Practice Tests, 2nd Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ad($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/Cloud Essentials#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ae($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/A+, Network+, Security+ Exams in a Nutshell.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function af($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA A+ Certification All-in-One Exam Guide, 8th Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ag($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA A+ Certification All-in-One For Dummies#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ah($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA A+ Complete Deluxe Study Guide, 2nd Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ai($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA A+ Complete Study Guide, 4th Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function aj($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA A+ Training Kit.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ak($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Aplus Complete Review Guide, 4th Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function al($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Cloud Study Guide Exam CV0-002, 2nd Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function am($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA CSA Study Guide.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function an($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA CySA+ Practice Tests.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ao($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA IT Fundamentals Study Guide.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ap($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Linux Practice Tests, 2nd Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function aq($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Linux Study Guide, 4th Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ar($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Linux+ Study Guide, 2nd Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function as1($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Network+ Study Guide, 3rd Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function at($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Network+ Training Kit.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function au($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA PenTest Practice Tests.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function av($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Project+ Study Guide, 2nd Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function aw($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Security Get Certified Get Ahead SY0-401 Study Guide.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ax($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Security Practice Tests.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ay($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Security+ Review Guide, 4th Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function az($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Security+ Study Guide, 7th Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ba($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Security+ Training Kit.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bb($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/CompTIA Server+ Study Guide.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bc($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/Data Storage Networking Real World Skills for the CompTIA Storage+ Certification and Beyond.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bd($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/Linux All-In-One For Dummies, 6th Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function be($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/Networking Essentials, 3rd Edition.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bf($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/Windows 10 Absolute Beginner's Guide.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bg($conn){
include('pdfs.php');
?>
<iframe src="pdf/microsoft/MCSE LAB MANUAL1.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bh($conn){
include('pdfs.php');
?>
<iframe src="pdf/microsoft/MCSE LAB MANUAL2.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bi($conn){
include('pdfs.php');
?>
<iframe src="pdf/microsoft/MCSE Presentation.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bj($conn){
include('pdfs.php');
?>
<iframe src="pdf/comptia/Windows 10 Absolute Beginner's Guide.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bk($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/comptiasecuritypluscertificationguide_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bl($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/cybersecurity_attackanddefensestrategies_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bm($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/digitalforensicsandincidentresponse_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bn($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/HACKING FOR BEGINNERS.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bo($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/hands-oncybersecurityforarchitects_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bp($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/hands-oncybersecuritywithblockchain_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bq($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/hands-onpenetrationtestingonwindows_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function br($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/industrialcybersecurity_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bs($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/kalilinux_anethicalhackerscookbook_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bt($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/learningmalwareanalysis_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bu($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/masteringkalilinuxforadvancedpenetrationtesting_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bv($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/masteringpfsense_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bw($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/metasploitforbeginners_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bx($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/metasploitpenetrationtestingcookbook_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function by($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/networkanalysisusingwireshark2cookbook_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function bz($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/nmap_networkexplorationandsecurityauditingcookbook_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function ca($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/practicalcyberintelligence_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function cb($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/practicalmobileforensics_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      function cc($conn){
include('pdfs.php');
?>
<iframe src="pdf/ethicalhacking/webpenetrationtestingwithkalilinux_ebook.pdf#toolbar=0" id="contextmenu"   width= '1530' height= '750' />
<?php
}
?>

