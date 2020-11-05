# BerlinClockKata
Kata développé en pair programming (méthode TDD)

En raison d'un problème de pull du coté de mon binôme (Bastien V.), nous avons du faire appel à Mr Choquet.
En attendant qu'il trouve une solution, nous avons travaillé en pair programming via l'outils Teams permettant de prendre le contrôle de la fenêtre partagée.
Mr Choquet a trouvé une solution, malheureusement nous avons rencontré un autre soucis majeur : nous n'arrivions plus à tester nos classe via PHPUnit.
Finalement, nous avons réussi à trouver une solution avec Mr Choquet et avons finalisé ce projet !

Nous avons conçu notre Berlin clock de cette façon :

L'horloge est un objet qui contient 3 paramètres dans son constructeur.
ces paramètres sont des Integer représentant les heures, les minutes et les secondes.
Exemple : clock = new BerlinClock( nombreDHeures, nombreDeMinutes, nombreDeSecondes).

Lors de la création d'une Berlin clock, 5 attributs privés accessibles via getter seront initialisés.
Chacun contient un String représentant une des lignes de l'horloge de Berlin dans cet ordre :
Secondes - Heures par 5 - Heures - Minutes par 5 - Minutes.
Chaque Character de chacun de ces String représente l'état d'une ampoule, 3 états sont possibles :
R = lampe rouge allumée
Y = lampe jeune allumée
N = Aucune lampe allumée

Dans BerlinClockTest, nous avons décidé de tester chaque fonction de façon unitaire avant de toutes les tester via leur appel dans le constructeur.
Si vous avez la moindre question sur ces classes, contactez Bastien VERSTAPPEN ou Boris FISCHER.
