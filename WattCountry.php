<!DOCTYPE html>
<html>

<head>
	<title>WattRegion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="icon" type="image/png" sizes="16x16" href="logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<style type="text/css">
		#footer {
			background-color: black;
			width: 1200px;
			height: 100px;
			margin: 0 auto 0 auto;
			position: absolute;
			font-size: .90em;
			font-style: italic;
			color: white;
			text-align: center;
		}
	</style>
</head>

<body>
	<div id="wrapper">
		<div id="header">
			
			<h1 style="text-align:center">WattRegion</h1>
			<img src="logo.png" height="50px" width="50px">
			
		</div>
		<div id="navigation">
			<ul>
				<li><button class="boutonnav" onclick="changetab(0)"><a href="WattCountry.php">Accueil</a></button></li>
				<li><button class="boutonnav" onclick="changetab(4)"><a href="connexion.php">Votre compte</a></button></li>
			</ul>
		</div>
		<div class="section" id="accueil">
			<br>
			<p>Bienvenue sur notre plateforme interactive en ligne WattRegion. <br>
				Sur WattRegion vous pourrez vous informez sur la consommation en électricté de chaque région de France en temps et en heure.
				Les détails du fonctionnement de la plateforme est disponible dans les mentions légales.</p><br>
				<h3>La carte interactive</h3>
			<p id="selection">Les Régions de France</p>

			

			<div id="region">
				<img src="carte-france-regions.png" usemap="#image-map">

				<map name="image-map">


<style type="text/css">
.pop { POSITION: absolute;
	top: 20px;
	left: 0px;
 	VISIBILITY: hidden }
</style>



<DIV class=pop id=img></DIV>
<SCRIPT type="text/javascript">
if (document.getElementById){
box = document.getElementById("img").style;
if(navigator.appName.substring(0,3) == "Net")
document.captureEvents(Event.MOUSEMOVE);
document.onmousemove = pointer;
}
function poplink(contenu){
var content ="<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR=#000000><TR><TD> <TABLE WIDTH=1 CELLPADDING=3 CELLSPACING=1><TR><TD BGCOLOR=#FFFFFF><CENTER>"+contenu+"</CENTER></TD></TR></TABLE></TD></TR></TABLE>";
if (document.getElementById)
{
document.getElementById("img").innerHTML =
content;
box.visibility = "visible";
}
}
function pointer(e)
{
var x = (navigator.appName.substring(0,3) == "Net") ? e.pageX : event.x+document.body.scrollLeft;
var y = (navigator.appName.substring(0,3) == "Net") ? e.pageY : event.y+document.body.scrollTop;
box.left = x+100;
box.top = y-100;
}
function closepopup()
{
if (document.getElementById)
box.visibility = "hidden";
}
 	
</SCRIPT>

				    <area target="" alt="Normandie" title="Normandie" href="" onMouseOver="poplink('<img src=Heat.png> ')"; onmouseout="closepopup()" coords="211,177,200,172,197,164,187,167,179,159,165,163,150,159,141,161,137,127,131,116,128,100,144,103,150,120,164,120,179,124,189,121,197,117,190,111,197,103,215,96,224,92,232,88,244,102,242,117,244,126,238,134,235,142,229,149,215,152,216,161,216,168" shape="poly">

				    <area target="" alt="Bretagne" title="Bretagne" href="" onMouseOver="poplink('<img src=Energie.png> ')"; onmouseout="closepopup()" coords="136,155,109,153,101,158,86,142,74,141,73,147,49,147,35,153,36,161,49,157,53,166,42,164,49,171,36,175,46,185,54,181,61,186,74,190,85,199,95,201,105,206,117,204,123,197,130,197,139,192,145,195,151,185,152,160" shape="poly">
				    <area target="" alt="Pays de la Loire" title="Pays de la Loire" href="" coords="117,204,103,212,108,218,118,217,113,224,119,229,114,239,123,254,139,265,148,266,158,266,165,262,159,242,156,234,165,232,183,229,193,206,208,197,212,185,212,176,200,172,197,164,187,166,180,159,166,162,152,159,151,183,145,194,137,192,130,196,122,196" shape="poly">
				    <area target="" alt="Nouvelle Aquitaine" title="Nouvelle Aquitaine" href="" coords="166,262,157,238,163,233,169,229,180,229,188,226,194,235,205,236,214,254,223,264,260,263,270,283,263,292,267,312,252,331,242,334,231,330,215,352,217,362,203,376,172,382,169,398,179,409,166,432,152,427,133,421,132,413,121,408,135,379,140,347,147,343,141,336,145,306,156,317,160,311,142,293,148,282,145,269,157,264" shape="poly">
				    <area target="" alt="Occitane" title="Occitane" href="" coords="168,433,198,441,202,433,242,448,250,456,269,457,287,451,286,426,299,413,328,401,340,392,346,377,338,364,326,363,314,343,304,337,295,332,284,344,275,335,266,347,255,347,251,332,241,334,232,329,217,351,217,358,210,374,196,376,186,379,174,382,170,396,179,405,173,421" shape="poly">
				    <area target="" alt="Centre Val de Loire" title="Centre Val de Loire" href="" coords="215,154,230,150,234,142,238,155,242,162,247,166,250,173,258,173,264,174,265,183,282,181,287,188,282,196,277,201,282,208,279,220,284,232,284,245,270,252,270,259,260,263,223,265,214,255,205,237,194,235,187,227,193,207,210,198,213,177,217,167" shape="poly">
				    <area target="" alt="Hauts de France" title="Hauts de France" href="" onMouseOver="poplink('<img src=HautDeFrance.jpg> ')"; onmouseout="closepopup()" coords="233,86,238,78,238,49,265,40,268,49,277,58,286,55,290,65,299,69,302,76,315,77,318,90,321,96,314,109,314,120,302,122,304,129,302,136,296,145,288,140,286,131,271,136,262,130,241,129,243,116,244,100" shape="poly">
				    <area target="" alt="Ile de France" title="Ile de France" href="" coords="242,131,236,136,236,148,242,160,247,166,251,172,262,173,266,180,281,178,284,170,296,168,296,160,301,156,295,149,287,139,285,130,272,135,262,131" shape="poly">
				    <area target="" alt="Grand Est" title="Grand Est" href="" coords="320,92,333,91,337,82,340,99,360,113,368,111,376,115,388,113,393,118,400,128,406,127,419,129,430,132,445,133,435,151,429,175,429,198,425,208,416,206,413,195,399,188,392,186,385,187,380,183,370,193,369,201,357,205,346,199,346,191,335,183,312,190,304,178,296,168,297,160,302,155,296,148,305,137,305,131,302,122,315,120,314,110,321,100" shape="poly">
				    <area target="" alt="Bourgogne Franche Comté" title="Bourgogne Franche Comté" href="" coords="283,181,283,170,295,169,311,189,334,184,344,191,345,199,356,205,369,201,369,192,380,183,385,188,393,186,412,194,415,204,407,212,411,218,394,234,395,243,385,251,382,265,374,267,365,267,359,258,347,257,343,271,338,266,330,268,324,273,313,272,318,261,308,257,303,246,299,252,288,250,283,244,284,232,279,221,280,209,276,200,286,187" shape="poly">
				    <area target="" alt="Auvergne Rhône Alpe" title="Auvergne Rhône Alpe" href="" coords="271,282,260,263,270,259,270,251,283,244,289,250,299,251,303,245,308,256,316,260,312,271,324,273,337,265,344,270,347,258,359,258,364,266,381,264,380,275,395,270,393,263,405,260,408,270,416,281,408,289,416,296,422,307,421,314,400,324,393,321,398,334,381,340,379,346,369,355,376,365,370,370,358,361,348,364,337,362,326,362,314,342,294,331,284,341,276,335,265,347,255,346,252,332,267,310,263,292" shape="poly">
				    <area target="" alt="Provence Alpe Côte d'Azur" title="Provence Alpe Côte d'Azur" href="" coords="396,321,406,322,413,332,419,334,415,347,416,355,423,364,434,368,445,364,439,377,439,382,427,389,419,399,413,402,410,408,413,412,399,417,386,417,378,413,370,412,366,405,355,407,349,401,346,406,340,406,330,402,339,391,346,376,339,363,348,362,357,359,370,368,376,364,370,354,380,345,384,337,397,332" shape="poly">
				    <area target="" alt="Corse" title="Corse" href="" coords="449,415,450,402,454,417,458,438,454,448,454,464,450,475,436,469,441,463,433,462,434,452,426,443,432,436,426,431,439,418" shape="poly">
				</map>
			</div>

			
			
		</div>

		
		<div class="section" id="notifications">
			<h3>Espace notifications</h3>
			<?php
            include 'notification.php';
            ?>
		</div>

		<div class="section" id="compte">
			<h3>Votre compte</h3>
			<?php
			include 'formulaire.php' ;
			include 'dbconnexion.php' ;
			?>
		</div>
		

		
		<div id="footer">
			Copyright &copy; 2022 | WattRegion |
			<a href="mailto:wattregion@gmail.com">Email </a> |
			<a href="https://www.google.com/maps/place/ECE+Paris+Lyon/@48.8518829,2.286998,15z/data=!4m2!3m1!1s0x0:0x167f5a60fb94aa76?sa=X&ved=2ahUKEwjvqr-k9vTwAhXCyIUKHT4eCzsQ_BIwFHoECEYQBQ"> Adresse postale</a> | <a href="#"> Téléphone</a> | <a href="https://www.ece.fr/ecole-ingenieur/mentions-legales/"> Mentions légales</a>
		</div>
	</div>
</body>

</html>

