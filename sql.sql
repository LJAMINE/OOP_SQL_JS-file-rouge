-- 1-Afficher la liste des livres jamais empruntés.
 
SELECT * FROM livres l LEFT JOIN emprunts e ON e.livre_id=l.id WHERE e.id IS null;

-- 2-Afficher les livres qui ont été empruntés plus de 2 fois.

SELECT COUNT(*) AS emprunttotal,l.titre
FROM livres l 
JOIN emprunts e ON e.livre_id=l.id
GROUP BY l.titre 
HAVING emprunttotal>=2;

-- 3-Afficher les livres qui ont été empruntés mais jamais retournés (date_retour IS NULL).

SELECT *
FROM livres l 
 JOIN emprunts e ON e.livre_id=l.id
WHERE e.date_retour IS NULL;


-- 4-Bonus sadique : Afficher les livres les plus anciens empruntés au moins une fois, classés par nombre d’emprunts décroissant.

SELECT COUNT(e.id) AS nbr , l.titre,l.annee_publication
FROM livres l 
INNER JOIN emprunts e ON e.livre_id=l.id
GROUP BY l.titre,l.annee_publication
ORDER BY l.annee_publication ASC,nbr DESC;