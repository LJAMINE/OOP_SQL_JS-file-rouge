-- facile

-- 8
SELECT *
FROM employes


-- 9
SELECT nom
FROM employes

-- 10
SELECT *
FROM employes
WHERE departement="IT"


-- moyen

-- 8

SELECT *
FROM employes
WHERE salaire>3000

-- 9

SELECT nom, salaire
FROM employes
WHERE departement = "RH"

-- 10

SELECT *
FROM employes
WHERE nom LIKE "A%"

-- 11
SELECT *
FROM employes
WHERE salaire BETWEEN 2000 and 4000

-- difficiles

-- 8
SELECT *
FROM employes
ORDER BY salaires DESC

-- 9
SELECT nom , departement
FROM employes
WHERE salaire>2500 AND departement="IT"


-- 10

SELECT * 
FROM employes 
WHERE nom LIKE "%e%" and departement="Finance"
