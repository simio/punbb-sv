<?php

$lang_admin_settings = array(

'Settings updated'				=>	'Inställningarna uppdaterades',

// Setup section
'Setup personal'				=>	'Anpassa din PunBB-installation',
'Setup personal legend'			=>	'PunBB-installation',
'Board description label'		=>	'Beskrivning av brädan',
'Board title label'				=>	'Brädans titel',
'Default style label'			=>	'Förvald stilmall',
'Setup local'					=>	'Anpassa PunBB till din plats',
'Setup local legend'			=>	'Platsinställningar',
'Default timezone label'		=>	'Förvald tidszon',
'DST label'						=>	'Sommartid (flytta fram klockan en timme).',
'Default language label'		=>	'Förvalt språk',
'Default language help'			=>	'(Om du tar bort ett språkpaket måste du uppdatera den här inställningen)',
'Time format label'				=>	'Tidsformat',
'Date format label'				=>	'Datumformat',
'Current format'				=>	'[ Nuvarande format: %s ] %s',
'External format help'			=>	'Läs <a class="exthelp" href="http://www.php.net/manual/en/function.date.php">här</a> för formateringsinstruktioner.',
'Setup timeouts'				=>	'Förvald fördröjning för timeout och omdirigering',
'Setup timeouts legend'			=>	'Förval för timeout',
'Visit timeout label'			=>	'Timeout för besök',
'Visit timeout help'			=>	'Antal sekunder en användare kan vara overksam utan att loggas ut',
'Online timeout label'			=>	'Timeout för inloggning',
'Online timeout help'			=>	'Antal sekunder en användare kan vara overksam utan att försvinna från online-listan',
'Redirect time label'			=>	'Väntetid vid omdirigering',
'Redirect time help'			=>	'Om antalet sekunder är 0, så kommer ingen omdirigeringssida att visas',
'Setup pagination'				=>	'Förvald paginering för trådar, inlägg och inläggsgranskning',
'Setup pagination legend'		=>	'Förval för paginering',
'Topics per page label'			=>	'Trådar per sida',
'Posts per page label'			=>	'Inlägg per sida',
'Topic review label'			=>	'Trådgranskning',
'Topic review help'				=>	'Sortera så senast visas överst. Ange 0 för att stänga av',
'Setup reports'					=>	'Leveransmetod för tråd- och inläggsrapporter',
'Setup reports legend'			=>	'Ta emot rapporter',
'Reporting method'				=>	'Rapportmetod',
'Report internal label'			=>	'Av det interna rapportsystemet',
'Report both label'				=>	'Via både det interna rapportsystemet och epostlistan',
'Report email label'			=>	'Via epostlistan.',
'Setup URL'						=>	'URL-form (<abbr title ="Sökmotorvänliga">SEF</abbr>-URL:er) för brädans sidor',
'Setup URL legend'				=>	'Välj form',
'URL scheme info'				=>	'<strong>Varning!</strong> Om du väljer någon annat form än det förvalda, så måste du kopiera eller byta namn på filen <em>.htaccess.dist</em> till <em>.htaccess</em> i forumets rotkatalog. Servern som brädan bor på måste vidare ha mod_rewrite aktiverat och tillåta användning av filen <em>.htaccess.</em> Om din webbserver inte är Apache är det bäst att du läser i manualen för att lista ut hur du ska ordna det.',
'URL scheme label'				=>	'URL-form',
'URL scheme help'				=>	'Kontrollera att du läst och förstått all information ovan.',
'Setup links'					=>	'Skapa egna länkar i navigationsmenyn',
'Setup links info'				=>	'Genom att ange HTML-formaterade hyperlänkar i den här textrutan kan ett valfritt antal alternativ fogas till den navigationsmeny som visas överst på varje sida. Formatet för nya länkar är X = &lt;a href="ADRESS"&gt;LÄNK&lt;/a&gt; där X är den position vid vilken länken ska infogas (t.ex. 0 för först i menyn eller 2 för platsen efter "Användarlista"). Åtskilj menyalternativ med en radbrytning.',
'Setup links legend'			=>	'Menyalternativ',
'Enter links label'				=>	'Ange dina länkar',
'Error no board title'			=>	'Du måste ge brädan ett namn',
'Error timeout value'			=>	'Värdet "Timeout för inloggning" måste vara lägre än värdet "Timeout för besök".',


// Features section
'Features general'				=>	'Generella PunBB-funktioner som är valfria',
'Features general legend'		=>	'Generella funktioner',
'Searching'						=>	'Sökning',
'Search all label'				=>	'Tillåter att användare söker i alla forum samtidigt i stället för ett åt gången. Stäng av funktionen om serverbelastningen blir för hög på grund av omfattande sökningar.',
'User ranks'					=>	'Användargrader',
'User ranks label'				=>	'Använder användargrader baserade på antal inlägg.',
'Censor words'					=>	'Censurering',
'Censor words label'			=>	'Genomför censurering av specifika ord.',
'Quick jump'					=>	'Snabbmeny',
'Quick jump label'				=>	'Visar rullgardinsmeny med genvägar till olika forum.',
'Show version'					=>	'Visa version',
'Show version label'			=>	'Visar PunBB-version i sidfoten.',
'Show moderators'				=>	'Visa moderatorlista',
'Show moderators label'			=>	'Visar en lista med moderatorer på index-sidan.',
'Online list'					=>	'Online-lista',
'Users online label'			=>	'Visar en lista med de gäster och registrerade användare som är online.',
'Features posting'				=>	'Funktioner och information för trådar och inlägg',
'Features posting legend'		=>	'Inläggsfunktioner',
'Quick post'					=>	'Snabbsvar',
'Quick post label'				=>	'Visar ett snabbsvarsforumlär nederst i varje tråd',
'Subscriptions'					=>	'Prenumerationer',
'Subscriptions label'			=>	'Ger användare möjlighet att prenumerera på trådar (via epost)',
'Guest posting'					=>	'Gästpublicering',
'Guest posting label'			=>	'Tillåter att gäster publicerar inlägg. De måste då ange epostadress.',
'User has posted'				=>	'Användare har skrivit',
'User has posted label'			=>	'Visar en punkt framför trådnamn för att indikera för en användare att han eller hon tidigare har publicerat ett inlägg i tråden. Stäng av funktionen om serverbelastningen blir för hög.',
'Topic views'					=>	'Trådvisningar',
'Topic views label'				=>	'För statistik över antalet gånger en tråd öppnats av någon. Stäng av funktionen om serverbelastningen blir för hög.',
'User post count'				=>	'Användares antal inlägg',
'User post count label'			=>	'Visar antalet inlägg en användare publicerat i deras inlägg, på deras profiler och i användarlistan.',
'User info'						=>	'Användarinfo i inlägg',
'User info label'				=>	'Visar skribentens plats, registreringsdatum, antal publicerade inlägg, epostadress och webbplats i inlägg',
'Features posts'				=>	'Innehåll i trådar och inlägg',
'Features posts legend'			=>	'Inställningar för innehåll i trådar och inlägg',
'Post content group'			=>	'Meddelande-alternativ',
'Allow BBCode label'			=>	'Tillåt BBCode i inlägg (rekommenderas).',
'Allow img label'				=>	'Tillåt BBCode-taggen [img] i inlägg.',
'Smilies in posts label'		=>	'Byt onödiga teckenkombinationer mot emojis. (Inte lika kul som det låter.)',
'Make clickable links label'	=>	'Tillåt att BBCode-tolken automatiskt känner igen webbadresser och paketerar dem med [url]-taggar.',
'Allow capitals group'			=>	'Ljudnivå',
'All caps message label'		=>	'Acceptera inlägg som enbart innehåller versaler',
'All caps subject label'		=>	'Acceptera trådtitlar som enbart innehåller versaler',
'Indent size label'				=>	'[code]-taggens TAB-bredd',
'Indent size help'				=>	'Antalet mellanslag att göra indrag med. Om antalet är 8 kommer tabulator-tecken användas i stället för mellanslag.',
'Quote depth label'				=>	'Maximalt djup för [quote]-taggar',
'Quote depth help'				=>	'Det maximala antalet nivåer för [quote]-taggar inuti andra [quote]-taggar. Djupare liggande [quote]-taggar än det här antalet kommer att ignoreras.',
'Features sigs'					=>	'Signaturer och deras innehåll',
'Features sigs legend'			=>	'Inställningar för signaturer',
'Allow signatures'				=>	'Tillåt signaturer',
'Allow signatures label'		=>	'Tillåter att användare anger en signatur att automatiskt avsluta alla sina inlägg med',
'Signature content group'		=>	'Signaturers innehåll',
'BBCode in sigs label'			=>	'Tillåt BBCode i signaturer.',
'Img in sigs label'				=>	'Tillåt BBCode-taggen [img] i signaturer (rekommenderas inte).',
'All caps sigs label'			=>	'Tillåt signaturer som enbart innehåller versaler.',
'Smilies in sigs label'			=>	'Byt ökända teckenkombinationer mot små sprudlande ikoner i användarsignaturer.',
'Max sig length label'			=>	'Maximalt antal tecken',
'Max sig lines label'			=>	'Maximalt antal rader',
'Features Avatars'				=>	'Profilbilder (inställningar för uppladdning och storlek)',
'Features Avatars legend'		=>	'Inställningar för profilbilder',
'Allow avatars'					=>	'Tillåt profilbilder',
'Allow avatars label'			=>	'Tillåter att användare laddar upp profilbilder som visas i deras inlägg',
'Avatar directory label'		=>	'Sökväg för uppladdning av profilbilder',
'Avatar directory help'			=>	'Sökvägen ska anges relativt PunBB:s rotkatalog. PHP måste ha skrivåtkomst till den här sökvägen.',
'Avatar Max width label'		=>	'Maximal bredd på profilbild',
'Avatar Max width help'			=>	'Pixlar (60 rekommenderas).',
'Avatar Max height label'		=>	'Maximal höjd på profilbild',
'Avatar Max height help'		=>	'Pixlar (60 rekommenderas).',
'Avatar Max size label'			=>	'Maximal filstorlek på profilbild',
'Avatar Max size help'			=>	'Byte (15,360 rekommenderas).',
'Features update'				=>	'Sök automatiskt efter uppdateringar',
'Features update info'			=>	'PunBB kan automatiskt söka efter viktiga uppdateringar med jämna mellanrum. Uppdateringarna kan vara nya versioner av PunBB eller snabbfixar. När uppdateringar är tillgängliga kommer administratörer att meddelas detta.',
'Features update disabled info'	=>	'Funktionen att automatiskt söka efter uppdateringar är inte tillgänglig. För att den ska vara tillgänglig måste den PHP-installation som PunBB körs på ha stöd för <a href="http://www.php.net/manual/en/ref.curl.php">cURL extension</a>, <a href="http://www.php.net/manual/en/function.fsockopen.php">fsockopen() function</a> eller konfigureras med <a href="http://www.php.net/manual/en/ref.filesystem.php#ini.allow-url-fopen">allow_url_fopen</a> påslaget.',
'Features update legend'		=>	'Automatiska uppdateringar',
'Update check'					=>	'Sök efter uppdateringar',
'Update check label'			=>	'Slår på automatisk sökning efter uppdateringar',
'Check for versions'			=>	'Sök efter nya versioner',
'Auto check for versions'		=>	'Slår på automatisk sökning efter uppdateringar av tillägg',

'Features mask passwords'			=>	'Dölj lösenord i förmulär',
'Features mask passwords legend'	=>	'Dölj lösenord',
'Features mask passwords info'		=>	' Om den här funktionen är påslagen kommer PunBB att dölja innehållet i alla lösenordsfält och visa ett fält för lösenordsbekräftelse när det är nödvändigt. Om funktionen i stället är avstängd kommer lösenordfälts innehåll att visas, och användare kommer att behöva ange vilket lösenord de önskar endast en gång när de registrerar nya konton eller byter lösenord.',
'Enable mask passwords'				=>	'Dölj lösenord',
'Enable mask passwords label'		=>	'Döljer lösenord i formulär.',

'Features gzip'					=>	'Komprimera utdata med gzip',
'Features gzip legend'			=>	'Komprimering av utdata',
'Features gzip info'			=>	'Om komprimering är påslagen kommer PunBB att gzip-komprimera all data som skickas till besökares webbläsare. Detta minimerar användningen av bandbredd men belastar processorn mera. Funktionen kräver att PHP konfigurerats med zlip (--with-zlib). Obs: Om någon av Apache-modulerna mod_gzip eller mod_deflate är installerad bör du stänga av den här funktionen.',
'Enable gzip'					=>	'Slå på gzip',
'Enable gzip label'				=>	'Använder gzip för komprimering av utdata',

// Announcements section
'Announcements head'			=>	'Visa en blänkare överst på varje sida på brädan',
'Announcements legend'			=>	'Blänkare',
'Enable announcement'			=>	'Aktivera blänkare',
'Enable announcement label'		=>	'Aktiverar en blänkare som visas överst på alla sidor.',
'Announcement heading label'	=>	'Blänkarens rubrik',
'Announcement message label'	=>	'Blänkarens innehåll',
'Announcement message help'		=>	'Du kan använda HTML i texten. Blänkare kan inte formateras med BBCode.',
'Announcement message default'	=>	'<p>Skriv ditt meddelande här.</p>',

// Registration section
'Registration new'				=>	'Nya registreringar',
'New reg info'					=>	'Du kan välja att kräva att alla nya registreringar bekräftas. När sådan bekräftelse krävs skickas ett epost-meddelande till nyregistrerade användare. I meddelandet finns en länk de klickar på för att komma till en sida där de kan völja lösenord och logga in. Om funktionen är påslagen krävs även att epost-adresser som registrerade användare byter till måste bekräftas. En mycket behändig funktion, som säkerställer att alla angivna epostadresser fungerar och dessutom ofta motar både spam-Robert och diverse ilska typer i grind.',
'Registration new legend'		=>	'Inställningar för nya registreringar',
'Allow new reg'					=>	'Tillåt nya registreringar',
'Allow new reg label'			=>	'Tillåter att nya användarkonton registreras. Stäng av under särskilda omständigheter.',
'Verify reg'					=>	'Bekräfta nya konton',
'Verify reg label'				=>	'Kräver att alla nya konton bekräftas via epost.',
'Reg e-mail group'				=>	'Epost-inställningar för nya konton',
'Allow banned label'			=>	'Tillåt registrering med bannlysta epostadresser.',
'Allow dupe label'				=>	'Tillåt registrering med epostadresser som andra registrerade användare redan använder',
'Report new reg'				=>	'Meddela om nya konton',
'Report new reg label'			=>	'Meddela användare på epostlistan när nya användarkonton registreras.',
'E-mail setting group'			=>	'Förvalda epost-inställningar',
'Display e-mail label'			=>	'Visa användares epostadresser för alla användare',
'Allow form e-mail label'		=>	'Dölj användares epostadresser men ge användare möjlighet att skicka epost via forumet',
'Disallow form e-mail label'	=>	'Dölj användares epostadresser och ge inte användare möjlighet att skicka epost via forumet',
'Registration rules'			=>	'Regler (slå på och ange regler)',
'Registration rules info'		=>	'Du kan kräva att nya användare accepterar brädans regler som ett led i registreringsprocessen. Reglerna kommer alltid finnas tillgängliga genom navigationsmenyn överst på varje sida. Du kan slå på och ange regler nedan.',
'Registration rules legend'		=>	'Regler',
'Require rules'					=>	'Använd regler',
'Require rules label'			=>	'Användare måste acceptera reglerna för att tillåtas registrera ett konto.',
'Compose rules label'			=>	'Ange regler',
'Compose rules help'			=>	'Du kan använda HTML för att formatera reglerna.',
'Rules default'					=>	'Skriv reglerna här',

// Email section
'E-mail addresses'				=>	'Epostadressering och epostlista',
'E-mail addresses legend'		=>	'Epostadresser',
'Admin e-mail'					=>	'Administratörens epost',
'Webmaster e-mail label'		=>	'Webbmastern epost',
'Webmaster e-mail help'			=>	'Från-fältets innehåll i epost skickad automatiskt avforumet',
'Mailing list label'			=>	'Skapa epostlista',
'Mailing list help'				=>	'Ange en komma-separerad lista med epostadresser som ska ta emot rapporter och meddelanden om nyregistrerade användarkonton.',
'E-mail server'					=>	'Inställningar för utgående epost',
'E-mail server legend'			=>	'Epost-server',
'E-mail server info'			=>	'I de flesta fall kan PunBB skicka epost via ett lokalt epostprogram, och då behöver du inte ange någonting här. Annars kan PunBB använda en extern epost-server. Ange i så fall adressen till epost-servern. Om port-numret för SMTP-servern inte är det normal 25 måste även det korrekta numret anges. (Exempel: mail.example.com:3580)',
'SMTP address label'			=>	'Adress till SMTP-server',
'SMTP address help'				=>	'För extern epost-server. Lämna fältet tomt för att använda lokalt mejlprogram.',
'SMTP username label'			=>	'Användarnamn på SMTP-server',
'SMTP username help'			=>	'Krävs i normala fall inte',
'SMTP password label'			=>	'Lösenord på SMTPserver',
'SMTP password help'			=>	'Krävs i normala fall inte',
'SMTP SSL'						=>	'Kryptera SMTP med SSL',
'SMTP SSL label'				=>	'Använd om din PHP-version är byggd med stöd för SSL och din SMTP tillåter det.',
'Error invalid admin e-mail'	=>	'Angiven epostadress för administratör är ogiltig.',
'Error invalid web e-mail'		=>	'Angiven epostadress för webbmaster är ogiltig.',

// Maintenance section
'Maintenance head'				=>	'Skriv ett meddelande och aktivera underhållsläge',
'Maintenance mode info'			=>	'<strong>Viktigt!</strong> När brädan försätts i underhållsläge är den bara tillgänglig för administratörer. Använd funktion om brädan tillfälligt behöver stängas för underhåll',
'Maintenance mode warn'			=>	'<strong>VARNING!</strong> LOGGA INTE UT under tiden brädan är försatt i underhållsläge. Det går inte att logga in igen.',
'Maintenance legend'			=>	'Underhåll',
'Maintenance mode'				=>	'Underhållsläge',
'Maintenance mode label'		=>	'Försätt brädan i underhållsläge.',
'Maintenance message label'		=>	'Meddelande',
'Maintenance message help'		=>	'Meddelandet kommer visas för andra användare än inloggade administratörer medan brädan är försatt i underhållsläge. Du kan använda det redan ifyllda meddelandet eller ange ett eget. Meddelandet kan formateras med HTML.',
'Maintenance message default'	=>	'Brädan är tillfälligt stängd för underhåll. Försök igen om en liten stund!<br /><br />/Admin',

);
