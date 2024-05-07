
                            
Realizzare, utilizzando le nozioni apprese durante le prime 2 lezioni, un sito portfolio.
Dovrete creare 4 rotte cosi divise:

Homepage: pagina statica con elementi grafici a piacere
Chi Sono: pagina statica con una breve introduzione testuale del cliente(Lorem Ipsum ecc)
Servizi Offerti: un array contente dei servizi da stampare come semplice lista ordinata;
    $servizi = [
        ['name' => 'Siti Web', 'uri' => 'siti-web'],
        ['name' => 'Negozi Digitali', 'uri' => 'ecommerce'],
        ['name' => 'Gestionali in Cloud', 'uri' => 'gestionali-cloud'],
        ['name' => 'Marketing Digitale', 'uri' => 'marketing-digitale'],
    ];


Pagina dettaglio Servizio: Visualizzeremo una lista di Servizi (quelli dell'array) e al click  si accederà al dettaglio del servizio scelto;


-------------------------------------

Suggerimenti step by step


Ricordate di implementare:

Tutte le Rotte dentro routes/web.php
﻿Rotte statiche: senza {parametro} nell'uri
Rotte parametriche: con {parametro} nell'uri
OVUNQUE passare i dati con il concetto di [CHIAVE => VALORE]
-------------------------------------

Create una nuova repository su GitHub con laravel_portfolio_nome_cognome, e sul vostro pc un nuovo progetto con laravel new;
Aprite il progetto con VSCode e lanciate il server con php artisan serve
Definite le rotte dentro routes/web.php
Create le viste (le view) relative alle rotte;
Soffermatevi molto sulla cura del design del progetto;
Inserite una navbar, footer e elementi web;
