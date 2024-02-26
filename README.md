🛒


<b>BoodschApp</b>

Deze app is bedoeld als project om zelf te oefenen tijdens blok B, WEB. Het sluit naadloos aan bij de module WDV-III & DBS-I.
De basis van de pagina is al gelegd. Aan jou om de volgende dingen toe te voegen. Doe dat wanneer je er aan toe bent of wanneer je een les gevolgd hebt over dit onderwerp en je extra wilt oefenen.

<b>Getting started</b>
- Fork deze repository en clone hem naar je eigen Github account. Zorg dat hij in je Laragon folder komt te staan, zodat je het project kunt openen vanuit je editor.
- Open je database (PhpMyAdmin of HeidiSQL) en importeer op de aangeleerde manier de database 'boodschappen.sql' vanuit de map 'database'.
- Hernoem de config.example.php naar config.php
- Check of de base-url in je bestand 'config.php' klopt met de naam van je applicatie in de www-map.
- Bestudeer de mappen en bestanden in je project om te zien hoe het project is opgebouwd.

<b>De BoodschApp</b><br>
De app is bedoeld voor gebruikers die graag een lijst willen bij houden van welke boodschappen zij in de supermarkt willen halen. Gebruikers kunnen boodschappen toevoegen, wijzigen en verwijderen.
Boodschappen hebben een naam en een categorie (bijv. fruit, toiletartikelen, snoep, beleg etc...) en daarnaast is er een kolom 'afvinken', waarmee gebruikers het product van hun lijstje kunnen afstrepen.
Later kunnen gebruikers een eigen account aanmaken en bekijken. Zij kunnen dan alleen de boodschappenlijstjes van hun eigen account bekijken. De database is op deze laatste stap nog niet voorbereid.

<b>Volgorde</b><br>
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
- Als gebruiker kan ik alleen de boodschappen zien die horen bij mijn account (let op: voeg hiervoor een kolom toe aan de tabel boodschappen, waar je verwijst naar een specifieke user / user id).
- Als gebruiker kan ik mijn accountgegevens inzien (gebruikersnaam, emailadres). 
