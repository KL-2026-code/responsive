<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenannte Seite</title>
<meta name="generator" content="WYSIWYG Web Builder 20 - https://www.wysiwygwebbuilder.com">
<link href="fontawesome6.min.css" rel="stylesheet">
<link href="Test_8.css" rel="stylesheet">
<link href="Kontakt.css" rel="stylesheet">
<script>
function submitForm1()
{
   var regexp;
   var Editbox1 = document.getElementById('Editbox1');
   if (!(Editbox1.disabled || Editbox1.style.display === 'none' || Editbox1.style.visibility === 'hidden'))
   {
      regexp = /^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i;
      if (Editbox1.value.length != 0 && !regexp.test(Editbox1.value))
      {
         alert("Keine gültige Emailadresse");
         Editbox1.focus();
         return false;
      }
   }
   var TextArea1 = document.getElementById('TextArea1');
   if (!(TextArea1.disabled || TextArea1.style.display === 'none' || TextArea1.style.visibility === 'hidden'))
   {
      regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
      if (TextArea1.value.length != 0 && !regexp.test(TextArea1.value))
      {
         alert("Please enter only letter characters in the \"TextArea1\" field.");
         TextArea1.focus();
         return false;
      }
   }
   var Editbox2 = document.getElementById('Editbox2');
   if (!(Editbox2.disabled || Editbox2.style.display === 'none' || Editbox2.style.visibility === 'hidden'))
   {
      regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
      if (Editbox2.value.length != 0 && !regexp.test(Editbox2.value))
      {
         alert("Bitte nur Text eingeben");
         Editbox2.focus();
         return false;
      }
   }
   var Editbox3 = document.getElementById('Editbox3');
   if (!(Editbox3.disabled || Editbox3.style.display === 'none' || Editbox3.style.visibility === 'hidden'))
   {
      regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
      if (Editbox3.value.length != 0 && !regexp.test(Editbox3.value))
      {
         alert("Bitte nur Text eingeben");
         Editbox3.focus();
         return false;
      }
   }
   return true;
}
</script>
</head>
<body>
<div id="PageHeader1" style="position:absolute;text-align:left;left:0px;top:0px;width:100%;height:88px;z-index:7777;">
</div>
<div id="wb_ResponsiveMenu1" style="position:absolute;left:436px;top:112px;width:1048px;height:79px;z-index:18;">
<label class="toggle" for="ResponsiveMenu1-submenu" id="ResponsiveMenu1-title">Menu<span id="ResponsiveMenu1-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
<input type="checkbox" id="ResponsiveMenu1-submenu">
<ul class="ResponsiveMenu1" id="ResponsiveMenu1" role="menu">
<li role="menuitem"><a href="" class="nav-link"><i class="fa fa-home"></i><br>Home</a></li>
<li role="menuitem"><a href="" class="nav-link"><i class="fa fa-users"></i><br>Über&nbsp;uns</a></li>
<li role="menuitem"><a href="" class="nav-link"><i class="fa fa-graduation-cap"></i><br>Über&nbsp;Aikido</a></li>
<li role="menuitem"><a href="" class="nav-link"><i class="fa fa-photo-film"></i><br>Galerie</a></li>
<li role="menuitem"><a href="" class="nav-link"><i class="fa fa-square-up-right"></i><br>Links</a></li>
<li role="menuitem"><a href="" class="nav-link"><i class="fa fa-map-location-dot"></i><br>Anfahrt</a></li>
<li role="menuitem"><a href="" class="nav-link"><i class="fa fa-regular fa-calendar-days"></i><br>Training</a></li>
<li role="menuitem"><a href="" class="nav-link"><i class="fa fa-envelope"></i><br>Kontakt</a></li>
</ul>
</div>
<div id="wb_Image2" style="position:absolute;left:312px;top:267px;width:156px;height:467px;opacity:0.30;z-index:19;">
<img src="images/schg.png" id="Image2" alt="" width="156" height="467"></div>
<div id="wb_Form1" style="position:absolute;left:600px;top:231px;width:721px;height:479px;z-index:20;">
<form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="multipart/form-data" id="Form1" onsubmit="return submitForm1()">
<input type="text" id="Editbox1" style="position:absolute;left:50px;top:157px;width:271px;height:18px;z-index:0;" name="Editbox1" value="" spellcheck="false">
<textarea name="TextArea1" id="TextArea1" style="position:absolute;left:49px;top:214px;width:326px;height:118px;z-index:1;" rows="5" cols="30" spellcheck="false"></textarea>
<div id="wb_Text1" style="position:absolute;left:49px;top:139px;width:189px;height:18px;z-index:2;">
<span style="color:#000000;font-family:Arial;font-size:16px;">Deine Emailadresse:</span></div>
<div id="wb_Text2" style="position:absolute;left:50px;top:196px;width:202px;height:18px;z-index:3;">
<span style="color:#000000;font-family:Arial;font-size:16px;">Deine Nachricht an uns:</span></div>
<input type="text" id="Editbox2" style="position:absolute;left:50px;top:66px;width:148px;height:18px;z-index:4;" name="Editbox2" value="" spellcheck="false">
<input type="text" id="Editbox3" style="position:absolute;left:227px;top:66px;width:148px;height:18px;z-index:5;" name="Editbox2" value="" spellcheck="false">
<input type="text" id="Editbox4" style="position:absolute;left:401px;top:66px;width:148px;height:18px;z-index:6;" name="Editbox2" value="" spellcheck="false">
<div id="wb_Text3" style="position:absolute;left:50px;top:41px;width:79px;height:18px;z-index:7;">
<span style="color:#000000;font-family:Arial;font-size:16px;">Vorname:</span></div>
<div id="wb_Text4" style="position:absolute;left:227px;top:41px;width:93px;height:18px;z-index:8;">
<span style="color:#000000;font-family:Arial;font-size:16px;">Nachname:</span></div>
<div id="wb_Text5" style="position:absolute;left:401px;top:41px;width:153px;height:18px;z-index:9;">
<span style="color:#000000;font-family:Arial;font-size:16px;">Tel.-Nr. (optional):</span></div>
<a id="Button3" href="mailto:boehnisch@aikido-hamm.de" style="position:absolute;left:85px;top:379px;width:264px;height:52px;z-index:10;">Senden</a>
</form>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:910px;width:100%;height:90px;z-index:21;">
<div id="wb_Icon1" style="position:absolute;left:106px;top:22px;width:40px;height:40px;text-align:center;z-index:11;">
<div id="Icon1"><i class="fa fa-brands fa-facebook-square"></i></div></div>
<div id="wb_Icon2" style="position:absolute;left:996px;top:27px;width:38px;height:37px;text-align:center;z-index:12;">
<div id="Icon2"><i class="fa fa-copyright"></i></div></div>
<div id="wb_Text7" style="position:absolute;left:1034px;top:35px;width:61px;height:21px;z-index:13;">
<span style="color:#FFFFFF;font-family:Arial;font-size:19px;">2026</span></div>
<a id="Button1" href="" style="position:absolute;left:179px;top:29px;width:95px;height:27px;z-index:14;">Impressum</a>
<a id="Button2" href="" style="position:absolute;left:297px;top:29px;width:171px;height:27px;z-index:15;">Datenschutzerklärung</a>
<div id="wb_Text6" style="position:absolute;left:26px;top:33px;width:120px;height:18px;z-index:16;">
<span style="color:#FFFFFF;font-family:Arial;font-size:16px;">Like us on </span></div>
</div>
</body>
</html>