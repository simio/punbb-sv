<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'			=>	'ltr',	// ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'			=>	'sv',

// Number formatting
'lang_decimal_point'		=>	'.',
'lang_thousands_sep'		=>	',',

// Notices
'Bad request'				=>	'Dålig förfrågan. Länken du följt är ogiltig eller föråldrad.',
'No view'					=>	'Du saknar åtkomsträttigheter till de här forumen.',
'No permission'				=>	'Du saknar åtkomsträttigheter till den här sidan.',
'CSRF token mismatch'		=>	'Kunde inte bekräfta säkerhetskod. En trolig orsak är att det förfluttit viss tid mellan att du först gick in på sidan och sedan skickade in ett formulär eller klickade på en länk. Om detta är fallet och du vill genomföra vad du nyss försökte, så kan du klicka på Bekräfta-knappen. Annars bör du klicka på Avbryt för att gå tillbaka igen.',
'No cookie'					=>	'Du loggades in i god ordning, men saknar ändå kaka. Var snäll att kontrollera att du tar emot kakor.',


// Miscellaneous
'Forum index'				=>	'Forum-index',
'Submit'					=>	'Skicka',	// "name" of submit buttons
'Cancel'					=>	'Avbryt', // "name" of cancel buttons
'Preview'					=>	'Förhandsgranska',	// submit button to preview message
'Delete'					=>	'Utradera',
'Split'						=>	'Dela',
'Ban message'				=>	'Du är bannlyst.',
'Ban message 2'				=>	'Bannbullan vittar vid slutet av %s.',
'Ban message 3'				=>	'Den administratör eller småpåve som bannlyst dig har förklarat följande:',
'Ban message 4'				=>	'Var snäll och rikta alla förfrågningar mot forumets administratör på %s.',
'Never'						=>	'Aldrig',
'Today'						=>	'I dag',
'Yesterday'					=>	'I går',
'Forum message'				=>	'Forum-meddelande',
'Maintenance warning'		=>	'<strong>VARNING! %s är aktiverad.</strong> LOGGA INTE UT NU, eftersom du inte kommer kunna logga in igen.',
'Maintenance mode'			=>	'Underhållsläge',
'Redirecting'				=>	' Dirigerar om…', // With space!
'Forwarding info'			=>	'Du ska strax skickas vidare till en ny sida i %s %s.',
'second'					=>	'sekund',	// singular
'seconds'					=>	'sekunder',	// plural
'Click redirect'			=>	'Klicka här om du saknar tålamod (eller om din webbläsare tycker automatiska omdirigeringar är kass)',
'Invalid e-mail'			=>	'Du angav en ogiltig epost-adress.',
'New posts'					=>	'Nya inlägg',	// the link that leads to the first new post
'New posts title'			=>	'Visa trådar med inlägg skrivna sedan du senast besökte forumet.',	// the popup text for new posts links
'Active topics'				=>	'Aktiva trådar',
'Active topics title'		=>	'Visa trådar med färska inlägg.',
'Unanswered topics'			=>	'Trådar utan svar',
'Unanswered topics title'	=>	'Visa trådar som ingen svarat på.',
'Username'					=>	'Användarnamn',
'Registered'				=>	'Registrerad',
'Write message'				=>	'Skriv meddelande',
'Forum'						=>	'Fora',
'Posts'						=>	'Trådar',
'Pages'						=>	'Sidor',
'Page'						=>	'Sida',
'BBCode'					=>	'BBCode',	// You probably shouldn't change this
'Smilies'					=>	'Emojis',
'Images'					=>	'Bilder',
'You may use'				=>	'Du tillåts använda: %s',
'and'						=>	'och',
'Image link'				=>	'bild',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'						=>	'skrev',	// For [quote]'s (e.g., User wrote:)
'Code'						=>	'Kod',		// For [code]'s
'Forum mailer'				=>	'%s epost-robot',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Write message legend'		=>	'Författa ditt inlägg',
'Required information'		=>	'Nödvändig information',
'Reqmark'					=>	'*',
'Required warn'				=>	'Alla fält med fetstilt etikett måste fyllas i innan formuläret kan skickas in.',
'Crumb separator'			=>	' &rarr;&#160;', // The character or text that separates links in breadcrumbs
'Title separator'			=>	' — ',
'Page separator'			=>	'&#160;', //The character or text that separates page numbers
'Spacer'					=>	'…', // Ellipsis for paginate
'Paging separator'			=>	' ', //The character or text that separates page numbers for page navigation generally
'Previous'					=>	'Tillbaka',
'Next'						=>	'Vidare',
'Cancel redirect'			=>	'Åtgärden avbröts.',
'No confirm redirect'		=>	'Ingen bekräftelse gavs. Åtgärden avbröts.',
'Please confirm'			=>	'Var vänlig bekräfta:',
'Help page'					=>	'Hjälp med: %s',
'Re'						=>	'Ang:',
'Page info'					=>	'(Sida %1$s av %2$s)',
'Item info single'			=>	'%s: %s',
'Item info plural'			=>	'%s: %s till %s av %s', // e.g. Topics [ 10 to 20 of 30 ]
'Info separator'			=>	' ', // e.g. 1 Page | 10 Topics
'Powered by'				=>	'Drivs med %s från %s.',
'Maintenance'				=>	'Underhåll',
'Installed extension'		=>	'Det officiella tillägget %s är installerat. Copyright &copy; 2003&ndash;2011 <a href="http://punbb.informer.com/">PunBB</a>.',
'Installed extensions'		=>	'Installerade <span id="extensions-used" title="%s">%s officiella tillägg</span>. Copyright &copy; 2003&ndash;2011 <a href="http://punbb.informer.com/">PunBB</a>.',

// CSRF confirmation form
'Confirm'					=>	'Bekräfta',	// Button
'Confirm action'			=>	'Bekräfta åtgärd',
'Confirm action head'		=>	'Var snäll och bekräfta eller avbryt vad du nyss försökte göra',

// Title
'Title'						=>	'Titel',
'Member'					=>	'Medlem',	// Default title
'Moderator'					=>	'Småpåve',
'Administrator'				=>	'Administratör',
'Banned'					=>	'Bannlyst',
'Guest'						=>	'Gäst',

// Stuff for include/parser.php
'BBCode error 1'			=>	'[/%1$s] befanns sakna passande [%1$s]',
'BBCode error 2'			=>	'Taggen [%s] är tom',
'BBCode error 3'			=>	'[%1$s] öppnades i [%2$s], vilket inte är tillåtet',
'BBCode error 4'			=>	'[%s] öppnades inuti sig självt, vilket verkligen inte är tillåtet (se Kleins flaska)',
'BBCode error 5'			=>	'[%1$s] befanns sakna passande [/%1$s]',
'BBCode error 6'			=>	'[%s] hade en tom attribut-sektion',
'BBCode nested list'		=>	'[list]-taggar kan inte nästlas',
'BBCode code problem'		=>	'Du har problem med dina [code]-taggar',

// Stuff for the navigator (top of every page)
'Index'						=>	'Index',
'User list'					=>	'Användarlista',
'Rules'						=>  'Regler',
'Search'					=>  'Sök',
'Register'					=>  'Registrera ett konto',
'register'					=>	'registrera ett konto',
'Login'						=>  'Logga in',
'login'						=>	'logga in',
'Not logged in'				=>  'Du är inte inloggad.',
'Profile'					=>	'Profil',
'Logout'					=>	'Logga ut',
'Logged in as'				=>	'Du är %s.',
'Admin'						=>	'Administration',
'Last visit'				=>	'Senaste besök vid %s',
'Mark all as read'			=>	'Märk alla trådar som lästa',
'Login nag'					=>	'För att använda forumet fullt ut bör du logga in eller registrera ett användarkonto.',
'New reports'				=>	'Nya rapporter',

// Alerts
'New alerts'				=>	'Nya alarm',
'Maintenance alert'			=>	'<strong>Underhålls-läge aktiverat.</strong> <em>LOGGA INTE UT,</em> då du inte kommer kunna logga in igen.',
'Updates'					=>	'Uppdateringar för PunBB:',
'Updates failed'			=>	'Det senaste försöket att söka efter uppdateringar på punbb.informer.com misslyckades. Det här beror antagligen på att tjänsten tillfälligt överlastats eller varit frånkopplad. Skulle det här meddelandet bli kvar under någon längre tidsperiod kan det dock vara lämpligt att stänga av automatiska sökningar efter uppdateringar och sköta saken manuellt i stället.',
'Updates version n hf'		=>	'En senasre version av PunBB, version %s, finns tillgänglig för avhämtning på <a href="http://punbb.informer.com/">punbb.informer.com</a>. Dessutom finns en eller flera snabbfixar tillgängliga på sidan <a href="%s">Hantera snabbfixar</a> i administrations-gränssnittet.',
'Updates version'			=>	'En senare version av PunBB, version %s, finns tillgänglig för avhämtning på <a href="http://punbb.informer.com/">punbb.informer.com</a>.',
'Updates hf'				=>	'En eller flera snabbfixar finns tillgängliga på sidan <a href="%s">Hantera snabbfixar</a> i administrations-gränssnittet.',
'Database mismatch'			=>	'Databas-versionen passar inte. Mycket illa.',
'Database mismatch alert'	=>	'Din PunBB-databas är tänkt att användas med en senare version av PunBB. Att de inte passar samman kan orsaka rejäla problem. Du bör uppgradera PunBB.',

// Stuff for Jump Menu
'Go'						=>	'Hoppa',		// submit button in forum jump
'Jump to'					=>	'Hoppa till forum:',

// For extern.php RSS feed
'RSS description'			=>	'De senaste trådarna i %s.',
'RSS description topic'		=>	'De senaste inläggen i %s.',
'RSS reply'					=>	'Sv: ',	// The topic subject will be appended to this string (to signify a reply)

// Accessibility
'Skip to content'			=>	'Hoppa till forum-innhåll',

// Debug information
'Querytime'					=>	'Genererad på %1$s kunder, %2$s besvärjelser uttalade',
'Debug table'				=>	'Debug-information',
'Debug summary'				=>	'Information om databas-besvärjelsers effektivitet',
'Query times'				=>	'Tid (s)',
'Query'						=>	'Besvärjelse',
'Total query time'			=>	'Tital tid för besvärjelser',

);
