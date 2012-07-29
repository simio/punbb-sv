<?php

// Language definitions used in all admin files
$lang_admin_reindex = array(

'Reindex heading'			=>	'Bygg om index för att förbättra sökprestandan',
'Rebuild index legend'		=>	'Bygg om sökindex',
'Reindex info'				=>	'Om du lagt till, ändrat eller tagit bort inlägg manuellt i databasen, eller om du har problem med sökfunktionen, så bör du bygga om sökindex. För bäst prestanda bör du försätta brädan i underhållsläge under tiden sökindex byggs om. När processen är färdig kommer du omdirigeras tillbaka till den här sidan. Du rekommenderas starkt att ha JavaScript aktiverat i webbläsaren under tiden sökindex byggs om (för att automatisk omdirigering ska fungera).',
'Reindex warning'			=>	'<strong>Viktigt!</strong> Att bygga om sökindex kan ta mycket lång tid och belasta din server hårt. Om du tvingas avbryta processen innan den är färdig kan du notera vilket inläggsnummer den stannar på, och sedan ange detta nummer plus ett i fältet "Börja från inlägg #" när du vill fortsätta..',
'Empty index warning'		=>	'<strong>Varning!</strong> Om du vill fortsätta en avbruten ombyggnation av sökindex, välj inte "Töm index".',
'Posts per cycle'			=>	'Inlägg per cykel',
'Posts per cycle info'		=>	'Antalet inlägg att behandla per sidvisning. Om du exempelvis anger 100, så kommer så många inlägg att behandlas, och sedan laddas sidan om. På så vis förebyggs att skriptet drabbas av timeout mitt i ombyggnationen.',
'Starting post'				=>	'Börja från inlägg #',
'Starting post info'		=>	'Inläggsnummer att börja bygga om från. Defaultvärde är numret på det första tillgängliga inlägget i databasen. I normala fall har du ingen anledning att ändra detta.',
'Empty index'				=>	'Töm index',
'Empty index info'			=>	'Töm sökindex innan ombyggnation (se nedan).',
'Rebuilding index title'	=>	'Bygger om sökindex…',
'Rebuilding index'			=>	'Bygger om sökindex… Nu är rätt tillfälle att fylla på koffeinomloppet. :-)',
'Processing post'			=>	'Behandlar inlägg <strong>%s</strong> i tråden <strong>%s</strong>.',
'Javascript redirect'		=>	'Omdirigering med hjälp av JavaScript gick inte så bra.',
'Click to continue'			=>	'Klicka här för att omdirigera dig manuellt',
'Rebuild index'				=>	'Bygg om index',

);