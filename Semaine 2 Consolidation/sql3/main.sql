-- Exercices (table employes : id, nom, salaire, departement)




-- facile

INSERT INTO employes
    (nom,salaire,departement)
VALUES("Alice", 8000, 'IT' )


UPDATE employes
SET salaire=8500
WHERE id=1

DELETE FROM employes 
WHERE id=2

-- moyenne

INSERT INTO employes (nom,salaire,departement)
VALUES
("Alice", 8000, 'IT' ),
("saanaa", 9000, 'FR' )


UPDATE employes
SET departement="Ressources Humaines"
WHERE departement="RH"



DELETE from employes
WHERE salaire<2000

INSERT INTO employes (nom,salaire,departement)
VALUES ("Alice", 8000, 'IT' )


-- //difficie

UPDATE employes
SET salaire=salire*10
WHERE departement="IT"

DELETE FROM employes
WHERE nom LIKE"A%"

INSERT into employe (nom,salire, departement)
VALUES ("amine",12,"IT")

UPDATE employe
SET nom="AZE" ,salaire=11
WHERE id=1

DELETE FROM employes 
WHERE id=1