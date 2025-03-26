-- tables employes et departements

-- Faciles


-- Joindre employes et departements sur departement_id.

select *
FROM employes e
    INNER JOIN departements d ON d.departement_id=e.departement_id


-- Sélectionner noms et départements des employés.
select nom , departement
FROM employes e
    INNER JOIN departements d ON d.departement_id=e.departement_id

-- Utiliser LEFT JOIN pour inclure tous les employés.
SELECT e.nom, d.departement 
FROM employes e
LEFT JOIN departements d ON e.departement_id = d.departement_id;


-- Moyens


-- Sélectionner les employés de "IT".
SELECT * 
FROM employes e
INNER JOIN departement d ON d.departement_id=e.departement_id
WHERE d.departement_name='IT'


-- Compter les employés par département.
SELECT COUNT(*),d.departement_name
FROM employes e
INNER JOIN departement d ON d.departement_id=e.departement_id
GROUP BY d.departement_name

-- Trouver les départements sans employés avec RIGHT JOIN.
SELECT d.departement_name
FROM employes e
RIGHT JOIN departement d ON d.departement_id=e.departement_id
WHERE e.employes_id=NULL



-- Joindre employes, departements, projets.SELECT * 
SELECT * 
FROM employes e
INNER JOIN departement d ON d.departement_id=e.departement_id
INNER JOIN projects p ON p.project_id=e.project_id



-- Difficiles

-- Trouver le salaire max par département.
SELECT MAX(e.salaire),d.departement_name
FROM employes e 
INNER JOIN departement d ON d.departement_id=e.departement_id
GROUP BY d.departement_name

-- Calculer la moyenne des salaires par département avec JOIN et GROUP BY.

SELECT AVG(e.salaire),d.departement_name
FROM employes e 
INNER JOIN departement d ON d.departement_id=e.departement_id
GROUP BY d.departement_name

-- Créer une vue avec une jointure
