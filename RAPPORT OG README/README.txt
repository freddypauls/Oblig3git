For � starte m� filer legges der du har lastet ned laravel (eller om du har det laravel i cmd m� du bare vite hele linken/url'en/breadcrumen til hvor filen ligger)
her m� du bruke koden (!!I terminalen du bruker): cd <filepath> for � komme inn i prosjektet (hvor da filepath er hvor du har lagt filen ex: C:/XAMPP/oblig3)
N�r du er inne i prosjektet m� du bruke koden (!!I terminalen du bruker): php artisan migrate for � migrere databasen (legge til databasen) om det kommer noen errormeldinger her s� sjekk i databasen (phpMyAdmin eller hva enn du bruker og databasen oblig3)
og sjekk hvilke tables som er kommet inn, er noen inne men ikke alle 6 s� tar du de filene med navnet til de tablene som er inn og legger dem i mappen migrate_brukt. S� kan du kj�re migreringen igjen (repeat om flere error)

Etter det skal alt v�re migrert og du kan kj�re php artisan serve i terminalen for � �pne en websever som kj�rer prosjektet (viktig at du her fortsatt er inne i prosjektmappa). linken vil bli http://127.0.0.1:8000 om du ikke endrer noe.

Da skal alt fungere, og du kan begynne med � lage en bruker, og lage noen listings. ellers leke deg som du vil.

NB: Om du vil lage adminbruker kan du endre admin_id p� en bruker via phpMyAdmin (eller om du bruker et annet programm) til 1, s� vil du f� tilgang til admin siden.  