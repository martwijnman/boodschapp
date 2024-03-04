<img src="https://github.com/Inetjuhhh/boodschapp/assets/35923627/cc593f33-371b-4558-a040-e9891825fbb5" width="100">



<b>BoodschApp</b>

Deze app is bedoeld als project om zelf te oefenen tijdens blok B, WEB. Het sluit naadloos aan bij de module WDV-III & DBS-I.
De basis van de pagina is al gelegd. Aan jou om de volgende dingen toe te voegen. Doe dat wanneer je er aan toe bent of wanneer je een les gevolgd hebt over dit onderwerp en je extra wilt oefenen.

<b>Getting started</b>
1. Fork deze repository en clone hem naar je eigen Github account. Zorg dat hij in je Laragon folder komt te staan, zodat je het project kunt openen vanuit je editor. Lukt dit niet met Github Desktop, dan kun je ook de zip openen, uitpakken en in je www-folder zetten.
2. Open je database (PhpMyAdmin of HeidiSQL) en importeer op de aangeleerde manier de database 'boodschappen.sql' vanuit de map 'database'.
3. Hernoem de config.example.php naar config.php
4. Check of de base-url in je bestand 'config.php' klopt met de naam van je applicatie in de www-map.
5. Bestudeer de mappen en bestanden in je project om te zien hoe het project is opgebouwd.
6. Navigeer in de browser naar localhost/boodschapp en klik door naar resources/views/index.php om de applicatie te bekijken. 

<b>De BoodschApp</b><br>
De app is bedoeld voor gebruikers die graag een lijst willen bij houden van welke boodschappen zij in de supermarkt willen halen. Gebruikers kunnen boodschappen toevoegen, wijzigen en verwijderen.
Boodschappen hebben een naam en een categorie (bijv. fruit, toiletartikelen, snoep, beleg etc...) en daarnaast is er een kolom 'afvinken', waarmee gebruikers het product van hun lijstje kunnen afstrepen.
Later kunnen gebruikers een eigen account aanmaken en bekijken. Zij kunnen dan alleen de boodschappenlijstjes van hun eigen account bekijken. De database is op deze laatste stap nog niet voorbereid.

<b>Taken en volgorde boodschappen-app</b><br>
In principe kun je deze applicatie maken in een door jou gewenste volgorde. Wil je dezelfde volgorde als in de lessen WEB aanhouden, dan zijn de volgende stappen een logische volgorde (met mogelijkheid tot afvinken):
- De database-connectie opbouwen in 'conn.php'.

<i>Boodschappen resource </i>
- Als gebruiker kan ik een nieuwe boodschap toevoegen, zodat ik mijn boodschappenlijst kan aanvullen.
- Als gebruiker kan ik een lijst of tabel zien met al mijn boodschappen en de bijbehorende categorieën en of een boodschap is afgevinkt of niet, zodat ik overzicht houd over mijn boodschappenlijst.
- Als gebruiker kan ik een boodschap aanpassen als ik dit wil, zodat mijn boodschappenlijst kloppend blijft.
- Als gebruiker kan ik een boodschap verwijderen als ik dit wil, zodat mijn boodschappenlijst kloppend blijft.

<i>Gebruikers resource </i>
- Als gebruiker kan ik inloggen in mijn account 'user' en wachtwoord 'password', zodat ik mijn account kan gebruiken.
- Als gebruiker kan ik mezelf registreren in de applicatie, zodat ik als nieuwe gebruiker gebruik kan maken van de applicatie.
- Als gebruiker kan ik alleen de boodschappen zien die horen bij mijn account (let op: voeg hiervoor een kolom toe aan de tabel boodschappen, waar je verwijst naar een specifieke user / user id), zodat ik mijn gegevens privé blijven.
- Als gebruiker kan ik mijn accountgegevens inzien (gebruikersnaam, emailadres), zodat ik in beeld heb welke gegevens er van mij zijn opgeslagen.
- Als gebruiker kan ik mijn accountgegevens wijzigen en verwijderen, zodat ik zelf het beheer houdt over mijn gegevens.


<b>Mappenopbouw</b><br>
<i>app/Http/Controllers</i> : <br>Hierin schrijven we de php logica en voeren de we queries uit op de database om gegevens toe te voegen, te wijzigen of te verwijderen. Elke resource heeft een eigen controller. Zowel login als registreren heeft een eigen controller. <br><br>
<i>config</i> : <br>In deze map staan de databaseverbinding ('conn.php') en de databasegegevens ('config.php')<br><br>
<i>database</i> : <br>In deze map vinden we de eventueel beschikbare database file die we kunnen importeren (.sql aan het eind)<br><br>
<i>public_html</i> : <br>In deze map staan de map css met 'style.css' en de eventuele afbeeldingen in de map img.<br><br>
<i>resources/views</i> : 
- In deze map staan alle html-files (wel met php-extensie). Elke resource heeft een eigen map met daarin een index.php (voor de totale lijst/tabel), create.php (voor nieuw toevoegen), edit.php (voor bestaand wijzigen). 
- Daarnaast zie je er een map 'Componenten', waarin we files vinden die op elke pagina herbruikt wordt, en bijv. steeds ingeladen (head.php, header.php, footer.php).
- In de hoofdmap van resources/views zie je daarnaast html-pagina's die niet bij een specifieke resource horen, zoals de algemene index.php, login.php, registreer.php etc.

