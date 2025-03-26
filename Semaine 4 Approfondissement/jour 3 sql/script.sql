-- -- Exercices  (table employes : id, nom, salaire, departement)

-- -- Faciles

-- -- Compter le nombre des employés.

-- SELECT COUNT(*)
-- FROM employes

-- -- Sommer les salariés des employés.
-- SELECT SUM(salaire)
-- FROM employes

-- -- Moyenne des salaires des employés.

-- SELECT AVG(salaire)
-- FROM employes

-- -- Moyens

-- -- Sélectionner les salaires > moyenne avec une sous-requête.

-- SELECT salaire
-- FROM employer
-- where salire > (SELECT AVG(salaire)
-- FROM employes)


-- -- Trouver le département avec le plus d’employés.
-- SELECT departement , COUNT(*)as nbr_employes
-- FROM employes
-- GROUP BY departement
-- ORDER BY nbr_employes DESC
-- LIMIT 1;

-- -- Calculer le salaire total par département.

-- SELECT SUM
-- (salaire),departement
-- FROM employes
-- GROUP BY departements

-- -- Trouver les employés sans manager.
-- SELECT *
-- FROM employes
-- WHERE manager_id
-- ISNULL



-- -- Difficiles

-- -- Trouver le 2e salaire le plus élevé.
-- SELECT salaire
-- FROM employes
-- ORDER BY salaire DESC
-- LIMIT 1 OFFSET 1;

-- -- Supprimer les doublons avec une sous-requête.


-- -- Filtrer les groupes avec GROUP BY et HAVING.
-- SELECT AVG(salaire)AS average, nom FROM employes 
-- GROUP BY nom HAVING average>20