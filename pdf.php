<?php
session_start();
use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

#if(isset($_POST['name'])) {$name = $_POST['name'];}
if(isset($_POST['name'])) {$_SESSION['name'] = $_POST['name'];}
if(isset($_POST['tel'])) {$tel = $_POST['tel'];}
if(isset($_POST['email'])) {$email = $_POST['email'];}
if(isset($_POST['cnp'])) {$cnp = $_POST['cnp'];}
if(isset($_POST['group1'])) {$group1 = $_POST['group1'];}
if(isset($_POST['group2'])) {$group2 = $_POST['group2'];}
if(isset($_POST['group3'])) {$group3 = $_POST['group3'];}
if(isset($_POST['group3'])) {$group4 = $_POST['group4'];}


if(isset($_POST['imgOutput'])){$img_output = $_POST['imgOutput'];}

$bse = preg_replace('#^data:image/[^;]+;base64,#', '', $img_output );

if ( base64_encode( base64_decode($bse) ) === $bse ) {

require_once 'dompdf/autoload.inc.php';


  $html = '<!DOCTYPE html><html><head><style type="text/css">
	h1 {
		text-align: center;
		font-size: 18px;
	}
	h2 {
	  font-size: 16px;
	  margin-top: 30px;
}
	p {
		text-align: justify;
	}

	.li-text{
	  margin:20px;
	  text-align: justify;
	  line-height: 20px;
}
	.spacer{
		height:70px;
	}
</style></head><body>

<h1>INFORMARE/DECLARATIE CONSIMTAMANT PENTRU REZERVAREA/CUMPARAREA SERVICIILOR SI/SAU PACHETELOR DE SERVICII DE CALATORIE IN CONTEXTUL PRELUCRARII DATELOR CU CARACTER PERSONAL</h1>
<br>
<h2>Aspecte importante</h2>
   <p>S.C. LUXETRAVELDEAL S.R.L. este o persoana juridica romana, care are ca obiect principal de activitate – organizarea pachetelor de servicii de calatorie, excursiilor, evenimentelor etc. care sunt ofertate si comercializate prin intermediul agentiilor de turism sau direct de catre tur-operatori, respectiv rezervarea, intermedierea si vanzarea serviciilor de calatorie, excursii, transport si cazare, cu ridicata sau cu amanuntul, catre publicul larg si/sau clientilor comerciali.</p>
   <p>S.C. LUXETRAVELDEAL S.R.L. are sediul social  in Calea Plevnei, nr.10, ap.1, Bucuresti, Sector 5, cod postal 050052, telefon 021 230 13 60, fax 021 236 98 97, este inregistrata la Oficiul Registrului Comertului din Bucuresti, sub nr. J40/3298/21.03.2011, avand cod fiscal RO28213416 si cont IBAN: RO15BTRLRONCRT0353958401 deschis la BANCA TRANSILVANIA, reprezentata legal de dna. Laura Langhe  in calitate de Administrator.</p>

   <p>S.C. LUXETRAVELDEAL S.R.L. respecta confidentialitatea tuturor clientilor sai si va trata/prelucra datele personale cu mare atentie, in conditii tehnice si organizatorice de securitate adecvata.</p>

   <p>S.C. LUXETRAVELDEAL S.R.L. prelucreaza datele cu caracter personal primite direct de la dumneavoastra, in functie de optiunea exprimata prin prezentul document.</p>

   <p>S.C. LUXETRAVELDEAL S.R.L. nu va prelucra datele dumneavoastra personale decat in masura in care acest demers este necesar in vederea indeplinirii scopului mai jos mentionat.</p>

      Va rugam sa va identificati si sa completati, dupa caz, urmatoarele informatii:
</p>
<br>
<p>Nume: '. $_SESSION['name'] .'<br>Telefon: ' . $tel .'<br>E-mail: ' . $email .'<br>CNP/CUI: ' . $cnp .'</p>

<h2>Ce date cu caracter personal prelucreaza S.C. LUXETRAVELDEAL S.R.L.?</h2>
   <p>Prelucrarea datelor cu caracter personal reprezinta orice operatiune sau set de operatiuni, care se efectueaza asupra datelor dumneavoastra cu caracter personal, prin mijloace automate sau neautomate, cum ar fi: colectarea, inregistrarea, organizarea, structurarea, stocarea, adaptarea sau modificarea, extragerea, consultarea, utilizarea, divulgarea prin transmitere, diseminarea sau punerea la dispozitie in orice alt mod, alinierea sau combinarea,  restrictionarea, blocarea, arhivarea, stergerea sau distrugerea datelor.</p>
   <p>In contextul promovarii, rezervarii, intermedierii, ofertarii si comercializarii serviciilor si/sau pachetelor de servicii de calatorie, altor servicii turistice, evenimente culturale/sportive sau de alta natura, servicii de agrement sau calatorii de afaceri de catre S.C. LUXETRAVELDEAL S.R.L., si al mentinerii/dezvoltarii raporturilor comerciale/contractuale cu dumneavoastra, va putem solicita anumite date cu caracter personal.</p>
   <p>In acest sens, S.C. LUXETRAVELDEAL S.R.L. poate prelucra, printre altele, urmatoarele date cu caracter personal: numele si prenumele, companie/autoritate/institutie, CNP, varsta minori, adresa de corespondenta, telefon/fax, e-mail, pagina web/cont social media.</p>

<h2>Cine sunt persoanele vizate?</h2>
   <p>Persoanele vizate, ale caror date pot fi prelucrate de catre S.C. LUXETRAVELDEAL S.R.L., exclusiv in scopul mai jos mentionat sunteti dumneavoastra, in calitate de calatori/turisti/beneficiari ai serviciilor de calatorie sau turistice, reprezentanti/imputerniciti/persoane de contact de afaceri (parteneri de afaceri sau contractuali, etc.) din cadrul companiilor sau institutiilor/autoritatilor publice.</p>

<h2>Care sunt scopurile colectarii datelor cu caracter personal?</h2>
 <p>Utilizam datele dumneavoastra cu caracter personal doar in urmatorul scop:</p>
 <li class="li-text">Rezervarea, intermedierea, ofertarea si/sau comercializarea serviciilor si/sau pachetelor de servicii de calatorie, altor servicii turistice, evenimente culturale/sportive sau de alta natura, servicii de agrement sau calatorii de afaceri;</li>
 <li class="li-text">Reclama, marketing (marketing direct), publicitate, promovare/evaluare servicii, promovare evenimente si manifestari culturale/sportive sau de alta natura, desfasurare campanii promotionale, concursuri, loterii publicitare, fidelizare, transmitere newsletter (buletine informative), efectuarea de comunicari comerciale pentru serviciile S.C. LUXETRAVELDEAL S.R.L., inclusiv cele dezvoltate impreuna cu un partener S.C. LUXETRAVELDEAL S.R.L., prin orice mijloc de comunicare, inclusiv prin intermediul serviciilor de comunicatii electronice;</li>

<h2>Prelucrarea datelor cu caracter personal in scop promotional (marketing)</h2>
   <li class="li-text">Prelucrarea datelor personale furnizate de dumneavoastra (cum ar fi: nume si prenume, CNP, adresa de e-mail, nr. fax, nr. telefon mobil/fix, etc.) se va efectua de S.C. LUXETRAVELDEAL S.R.L., in scopul mentionat anterior, doar cu consimtamantul dvs. expres, neechivoc, liber, informat si anterior exprimat, cu respectarea drepturilor dvs. stabilite prin lege si specificate in prezentul document.</li>
    <li class="li-text">Datele cu caracter personal furnizate de dumneavoastra vor putea fi folosite in scop promotional (marketing) si pentru produsele sau serviciile altor parteneri ai S.C. LUXETRAVELDEAL S.R.L., cu respectarea drepturilor dumneavoastra.</li>
    <li class="li-text">Dumneavoastra va puteti exercita optiunea in privinta unei asemenea prelucrari prin selectarea/bifarea casetelor adecvate din formularele/documentele utilizate pentru colectarea datelor cu caracter personal.</li><br><br>
    <li class="li-text">Indiferent de situatie, in cazul in care veti dori la un moment dat, incetarea prelucrarii de catre S.C. LUXETRAVELDEAL S.R.L. a datelor dumneavoastra cu caracter personal, puteti solicita oricand incetarea oricarei prelucrari de date din partea noastra.</li>
    <li class="li-text">Totodata, va puteti dezabona oricand, folosind link-ul "Dezabonare" sau "Unsubscribe", daca veti dori sa nu mai primiti newslettere sau materiale informative din partea S.C. LUXETRAVELDEAL S.R.L.</li>

   <p>S.C. LUXETRAVELDEAL S.R.L. va considera toate informatiile colectate de la dumneavoastra ca fiind confidentiale si nu le va partaja cu terti (cu exceptia tur-operatorilor, unitatilor de cazare, transportatorilor, altor persoane fizice si/sau juridice implicate in prestarea serviciilor si/sau pachetelor de servicii de calatorie, altor servicii turistice, evenimentelor culturale/sportive sau de alta natura, serviciilor de agrement sau calatorii de afaceri rezervate sau achizitionate de dumneavoastra, respectiv partenerilor S.C. LUXETRAVELDEAL S.R.L. de afaceri, in cazul in care fara partajarea datelor, dumneavoastra nu ati putea beneficia de toate aceste servicii mentionate mai sus) fara consimtamantul dumneavoastra expres si anterior.</p>

<h2>Cine sunt destinatarii datelor dumneavoastra cu caracter personal?</h2>
   <p>Destinatarii datelor inseamna orice persoana fizica sau juridica, autoritatea publica, agentie sau alt organism careia (caruia) ii sunt divulgate datele dvs. cu caracter personal, precum cele precizate mai jos, dar fara a se limita la: tur-operatori, unitati de cazare, transportatori, alte persoane fizice si/sau juridice implicate in prestarea serviciilor si/sau pachetelor de servicii de calatorie, a altor servicii turistice, desfasurarea evenimentelor culturale/sportive sau de alta natura, serviciilor de agrement sau calatoriilor de afaceri, autoritati publice centrale si locale, autoritati judecatoresti, politie, parchet (in limitele prevederilor legale si/sau ca urmare a unor cereri intemeiate si expres formulate), etc.<br>
   Confidentialitatea datelor cu caracter personal va fi asigurata de catre S.C. LUXETRAVELDEAL S.R.L. si nu vor fi furnizate catre alti terti in afara celor mentionati in prezentul document.</p>

<h2>Durata prelucrarii datelor cu caracter personal</h2>
   <p>In vederea realizarii scopului mentionat, S.C. LUXETRAVELDEAL S.R.L. va prelucra datele dumneavoastra cu caracter personal pe toata perioada de desfasurare a activitatilor S.C. LUXETRAVELDEAL S.R.L., pana in momentul in care dumneavoastra sau reprezentantul legal/imputernicit al dvs., va exercita dreptul de opozitie/ de stergere (cu exceptia situatiei in care S.C. LUXETRAVELDEAL S.R.L. prelucreaza datele in baza unei obligatii legale sau justifica un interes legitim). Ulterior incheierii operatiunilor de prelucrare a datelor cu caracter personal, in scopul pentru care au fost colectate, daca dumneavoastra sau reprezentantul legal/imputernicit nu va exercita dreptul de opozitie/de stergere, conform legii, aceste date vor fi arhivate de catre S.C. LUXETRAVELDEAL S.R.L. pe durata de timp prevazuta in procedurile interne S.C. LUXETRAVELDEAL S.R.L. si/sau vor fi distruse.</p> 

<h2>Care sunt drepturile dumneavoastra?</h2>
   <p>In relatia cu S.C. LUXETRAVELDEAL S.R.L., dumneavoastra beneficiati conform prevederilor legale aplicabile de urmatoarele drepturi: dreptul de a fi informat, dreptul de acces, dreptul la rectificare, dreptul de stergere a datelor, dreptul la restrictionarea prelucrarii, dreptul la portabilitatea datelor, dreptul la opozitie si procesul decizional individual automatizat, inclusiv crearea de profiluri.</p>

<p>Iata pe scurt care sunt drepturile pe care le aveti:</p>
<li class="li-text">Dreptul de a fi informat inseamna ca aveti dreptul de a fi informat cu privire la modul in care datele dvs. sunt prelucrate si motivul prelucrarii.</li> 
<li class="li-text">Dreptul de acces inseamna ca aveti dreptul de a obtine o confirmare din partea noastra ca prelucram sau nu datele cu caracter personal care va privesc si, in caz afirmativ, acces la datele respective si la informatii privind modalitatea in care sunt prelucrate datele.</li>
<li class="li-text">Dreptul la portabilitatea datelor se refera la dreptul de a primi datele personale intr-un format structurat, utilizat in mod curent si care poate fi citit automat si la dreptul ca aceste date sa fie transmise direct altui operator, daca acest lucru este posibil din punct de vedere tehnic.</li>
<li class="li-text">Dreptul la opozitie vizeaza dreptul de a va opune prelucrarii datelor personale atunci cand prelucrarea este necesara pentru indeplinirea unei sarcini care serveste unui interes public sau cand are in vedere un interes legitim al operatorului. Atunci cand prelucrarea datelor cu caracter personal are drept scop marketingul direct, aveti dreptul de a va opune prelucrarii in orice moment, in mod gratuit si fara nicio justificare, utilizand, daca este cazul, functia de dezabonare inclusa in materialele de marketing.</li>
<li class="li-text">Dreptul la rectificare se refera la corectarea, fara intarzieri nejustificate, a datelor cu caracter personal inexacte. Rectificarea va fi comunicata fiecarui destinatar la care au fost transmise datele, cu exceptia cazului in care acest lucru se dovedeste imposibil sau presupune eforturi disproportionate.</li>
<li class="li-text">Dreptul la stergerea datelor ("dreptul de a fi uitat") inseamna ca aveti dreptul de a solicita sa va   stergem datele cu caracter personal, fara intarzieri nejustificate, in cazul in care se aplica unul dintre urmatoarele motive: acestea nu mai sunt necesare pentru indeplinirea scopurilor pentru care au fost colectate sau prelucrate; va retrageti consimtamantul si nu exista niciun alt temei juridic pentru prelucrare; va opuneti prelucrarii si nu exista motive legitime care sa prevaleze; datele cu caracter personal au fost prelucrate ilegal; datele cu caracter personal trebuie sterse pentru respectarea unei obligatii legale; datele cu caracter personal au fost colectate in legatura cu oferirea de servicii ale societatii informationale.</li>
<li class="li-text">Dreptul la restrictionarea prelucrarii poate fi exercitat in cazul in care persoana contesta exactitatea datelor, pe o perioada care ne permite verificarea corectitudinii datelor; prelucrarea este ilegala, iar persoana se opune stergerii datelor cu caracter personal, solicitand in schimb restrictionarea; in cazul in care S.C. LUXETRAVELDEAL S.R.L. nu mai are nevoie de datele cu caracter personal in scopul prelucrarii, dar persoana i le solicita pentru constatarea, exercitarea sau apararea unui drept in instanta; in cazul in care persoana s-a opus prelucrarii pentru intervalul de timp in care se verifica daca drepturile legitime ale operatorului prevaleaza asupra celor ale persoanei respective.</li>
<li class="li-text">Drepturi legate de procesul decizional individual automatizat, inclusiv crearea de profiluri. Persoana vizata are dreptul de a nu face obiectul unei decizii bazate exclusiv pe prelucrarea automata, inclusiv crearea de profiluri, care produce efecte juridice care privesc persoana vizata sau o afecteaza in mod similar intr-o masura semnificativa.</li>

<p>Prevederile mentionate nu se aplica in cazul in care decizia:</p>
a)  este necesara pentru incheierea sau executarea unui contract intre persoana vizata si un operator de date;<br>
b)  este autorizata prin dreptul Uniunii sau dreptul intern care se aplica operatorului si care prevede, de asemenea, masuri corespunzatoare pentru protejarea drepturilor, libertatilor si intereselor legitime ale persoanei vizate; sau<br>
c)  are la baza consimtamantul explicit al persoanei vizate.</p>

<p>In cazul in care, dumneavoastra, direct sau prin reprezentant, va exercitati drepturile mentionate mai sus, in mod vadit nefondat, nejustificat sau excesiv, in special din cauza caracterului repetitiv, S.C. LUXETRAVELDEAL S.R.L. poate: fie sa perceapa o taxa rezonabila, tinand cont de costurile administrative pentru furnizarea informatiilor sau a comunicarii, sau pentru luarea masurilor solicitate; fie sa refuze sa dea curs cererii.</p>

<p>De asemenea, dumneavoastra va este recunoscut dreptul de a depune o plangere in fata unei autoritati de supraveghere si de a introduce o cale de atac judiciara.</p>

<h2>Cum va puteti exercita drepturile dumneavoastra?</h2>
   <p>Pentru exercitarea acestor drepturi, dumneavoastra va puteti adresa Specialistului in protectia datelor cu caracter personal din cadrul S.C. LUXETRAVELDEAL S.R.L. cu o cerere scrisa, datata si semnata, la adresa de e-mail: dpo@triptailor.ro sau la urmatoarea adresa de corespondenta: S.C. LUXETRAVELDEAL S.R.L., Calea Plevnei, nr.10, ap.1, Bucuresti, Sector 5, cod postal 050052.</p>

   <p>Prin completarea si semnarea prezentului document, dumneavoastra confirmati ca ati citit, ati fost informat/a corect, complet, precis, ati luat la cunostinta, intelegeti pe deplin si sunteti de acord cu:</p>

<li li class="li-text">faptul ca prelucrarea de date cu caracter personal, astfel cum este specificata in legislatia in vigoare si  in prezentul document va fi efectuata in scopul rezervarii, intermedierii, ofertarii si/sau comercializarii serviciilor si/sau pachetelor de servicii de calatorie, altor servicii turistice, desfasurarii evenimentelor culturale/sportive sau de alta natura, serviciilor de agrement sau calatoriilor de afaceri; reclama, marketing (marketing direct), publicitate, promovare/evaluare servicii, promovare evenimente si  manifestari culturale/sportive sau de alta natura, desfasurare campanii promotionale, concursuri, loterii publicitare, fidelizare, transmitere newsletter (buletine informative), efectuarea de comunicari comerciale pentru serviciile  S.C. LUXETRAVELDEAL S.R.L., inclusiv cele dezvoltate impreuna cu un partener S.C. LUXETRAVELDEAL S.R.L., prin orice mijloc de comunicare, inclusiv prin intermediul serviciilor de comunicatii electronice, in baza consimtamantului manifestat de dumneavoastra, in mod expres, neechivoc, liber si informat;</li>
<li li class="li-text">faptul ca S.C. LUXETRAVELDEAL S.R.L. nu va prelucra datele dumneavoastra personale decat in masura in care acest demers este necesar scopului mentionat in prezentul document, cu respectarea masurilor legale de securitate si confidentialitate a datelor.</li>

<p>Prin completarea si semnarea prezentului document, dumneavoastra confirmati ca ati citit, ati fost informat/a corect, complet, precis, ati luat la cunostinta si intelegeti pe deplin drepturile de care beneficiati, conform prevederilor legale aplicabile, respectiv: dreptul de a fi informat, dreptul de acces, dreptul la rectificare, dreptul de stergere a datelor, dreptul la restrictionarea prelucrarii, dreptul la portabilitatea datelor, dreptul la opozitie si procesul decizional individual automatizat, inclusiv crearea de profiluri.</p>


<div class="spacer">&nbsp;</div>


<p>Totodata, imi exprim, pe baza optiunii de mai jos, consimtimantul in mod expres, neechivoc, liber si informat cu privire la prelucrarea datelor mele cu caracter personal, in scop de:</p>
<li>Reclama, marketing (marketing direct), publicitate:&nbsp;<strong>'. $group1 .'</strong></li><br><br>
<li>Promovare/evaluare servicii, promovare evenimente si manifestari culturale/sportive sau de alta natura, desfasurare campanii promotionale, concursuri, loterii publicitare, fidelizare:&nbsp;<strong>'. $group2 .'</strong></li><br><br>
<li>Transmitere newsletter (buletine informative):&nbsp;<strong>'. $group3 .'</strong></li><br><br>
<li>Efectuarea de comunicari comerciale pentru serviciile  S.C. LUXETRAVELDEAL S.R.L., inclusiv cele dezvoltate impreuna cu un partener S.C. LUXETRAVELDEAL S.R.L., prin orice mijloc de comunicare, inclusiv prin intermediul serviciilor de comunicatii electronice:&nbsp;<strong>'. $group4 .'</strong></li>

<p style="margin-left:550px;">Data: '. date("d.m.Y") .'</p>
<p style="margin-left:550px;">Semnatura:</p>
  <br />
  <img style="margin-left:470px;" src="'. $img_output .'">

 &nbsp;<br> </body></html>';


  $dompdf = new DOMPDF;
  $dompdf->load_html($html);
  $dompdf->render();
  $dompdf->setPaper('A4', 'landscape');
 file_put_contents('assets/'. $_SESSION['name'] .'.pdf', $dompdf->output());
 readfile("download.html");
 $file = 'assets/'. $_SESSION['name'] .'.pdf';
 $hash = hash_file('md5', $file);
}

else {
    echo ("EROARE");
}

?>

<?php
/* Email Detials */
  $mail_to = "andrei.stoiculescu@triptailor.ro";
  $from_mail = "andrei.stoiculescu@triptailor.ro";
  $from_name = "andrei.stoiculescu@triptailor.ro";
  $reply_to = "andrei.stoiculescu@triptailor.ro";
  $subject = "Acord GDPR";
  $message_body = "Salut,\r\n" . $_SESSION['name'] . " a semnat acordul GDPR \r\n Hash: " . $hash ."";
 
/* Set the email header */
    // Generate a boundary
    $boundary = md5(uniqid(time()));
     
    // Email header
   /* $header = "From: ".$from_name." \r\n";*/
   /* $header .= "Reply-To: ".$reply_to."\r\n";*/
    $header .= "MIME-Version: 1.0\r\n";
     
    // Multipart wraps the Email Content and Attachment
    $header .= "Content-Type: multipart/mixed;\r\n";
    $header .= " boundary=\"".$boundary."\"";
 
    /* $message .= "This is a multi-part message in MIME format.\r\n\r\n"; */
    $message .= "--".$boundary."\r\n";
     
    // Email content
    // Content-type can be text/plain or text/html
    $message .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
    $message .= "Content-Transfer-Encoding: 7bit\r\n";
    $message .= "\r\n";
    $message .= "$message_body\r\n";
    $message .= "--".$boundary."\r\n";
     
    // Attachment
    // Edit content type for different file extensions
    $message .= "Content-Type: application/xml;\r\n";
    $message .= " name=\"".$file_name."\"\r\n";
    $message .= "Content-Transfer-Encoding: base64\r\n";
    $message .= "Content-Disposition: attachment;\r\n";
    $message .= " filename=\"".$file_name."\"\r\n";
    $message .= "\r\n".$content."\r\n";
    $message .= "--".$boundary."--\r\n";
     
    // Send email
    if (mail($mail_to, $subject, $message, $header)) {
    #    echo "Multumim";
    } else {
        echo "Error";
    }
    exit()
?>