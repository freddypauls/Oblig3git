For å starte må filer legges der du har lastet ned laravel (eller om du har det laravel i cmd må du bare vite hele linken/url'en/breadcrumen til hvor filen ligger)
her må du bruke koden (!!I terminalen du bruker): cd <filepath> for å komme inn i prosjektet (hvor da filepath er hvor du har lagt filen ex: C:/XAMPP/oblig3)
Når du er inne i prosjektet må du bruke koden (!!I terminalen du bruker): php artisan migrate for å migrere databasen (legge til databasen) om det kommer noen errormeldinger her så sjekk i databasen (phpMyAdmin eller hva enn du bruker og databasen oblig3)
og sjekk hvilke tables som er kommet inn, er noen inne men ikke alle 6 så tar du de filene med navnet til de tablene som er inn og legger dem i mappen migrate_brukt. Så kan du kjøre migreringen igjen (repeat om flere error)

Etter det skal alt være migrert og du kan kjøre php artisan serve i terminalen for å åpne en websever som kjører prosjektet (viktig at du her fortsatt er inne i prosjektmappa). linken vil bli http://127.0.0.1:8000 om du ikke endrer noe.

Da skal alt fungere, og du kan begynne med å lage en bruker, og lage noen listings. ellers leke deg som du vil.

NB: Om du vil lage adminbruker kan du endre admin_id på en bruker via phpMyAdmin (eller om du bruker et annet programm) til 1, så vil du få tilgang til admin siden.  