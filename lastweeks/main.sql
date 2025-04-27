-- https://docs.google.com/document/d/1CZWMUZE97jDF-mp1k5pvozgdC_Z8vz4LmG6KkD9MAe4/edit?tab=t.0



-- 🔹 Utilisateurs & Profils
-- Afficher les freelances qui parlent l’anglais (langues.nom = 'Anglais') avec un niveau avancé.
SELECT * FROM `utilisateurs` u INNER JOIN profils p ON p.utilisateur_id=u.id INNER JOIN profil_langue pl ON pl.profil_id=p.id INNER JOIN langues l ON l.id=pl.langue_id WHERE l.nom='Anglais' AND pl.niveau='avancé' AND role='freelance';


-- Lister les freelances ayant plus de 3 compétences.

SELECT COUNT(pc.competence_id) AS nbcompetence, u.nom FROM `utilisateurs` u 
INNER JOIN profils p ON p.utilisateur_id=u.id
INNER JOIN profil_competence pc ON pc.profil_id=p.id
INNER JOIN competences c ON c.id=pc.competence_id
WHERE role='freelance'
GROUP by u.id 
HAVING nbcompetence>3;

-- Afficher les freelances disponibles, leur tarif horaire et leur ville.

SELECT u.nom,p.tarif_horaire,p.disponible,a.ville FROM `utilisateurs` u 
INNER JOIN profils p ON p.utilisateur_id=u.id
INNER JOIN adresses a ON a.utilisateur_id=u.id
WHERE p.disponible=1 AND u.role='freelance';

-- Lister tous les utilisateurs qui ne possèdent pas encore de profil.

SELECT * FROM utilisateurs u LEFT JOIN profils p ON p.utilisateur_id=u.id WHERE p.utilisateur_id is null;

-- Afficher les clients qui n'ont jamais publié de projet.

SELECT * FROM `utilisateurs` u 
LEFT JOIN projets p ON p.client_id=u.id
WHERE p.client_id IS null;




--  Projets & Offres
-- Afficher les projets ouverts avec leur budget et leur nombre total d’offres reçues.
SELECT p.budget,COUNT(o.id) FROM `projets` p JOIN offres o ON o.projet_id=p.id WHERE p.statut='ouvert' GROUP BY p.id, p.titre, p.budget;


-- Lister les offres envoyées par des freelances dont le tarif horaire est inférieur à 100 MAD.
SELECT * FROM `utilisateurs` u 
INNER JOIN profils p ON p.utilisateur_id=u.id 
JOIN offres o ON o.freelance_id=u.id
WHERE p.tarif_horaire<100;

-- Afficher les projets qui ont reçu au moins 3 offres.
SELECT p.titre,COUNT(o.projet_id)AS numberoffre FROM `projets` p 
JOIN offres o ON o.projet_id=p.id
GROUP BY p.titre
HAVING numberoffre>=3;

-- Afficher les freelances qui ont postulé sur plus de 5 projets différents.
SELECT COUNT(o.projet_id)as numberproject,u.nom FROM `projets` p 
JOIN offres o ON o.projet_id=p.id
JOIN utilisateurs u ON u.id=o.freelance_id
WHERE u.role='freelance'
GROUP BY u.nom HAVING numberproject>5;

-- Afficher les projets terminés avec les dates de début et de fin des missions associées.
SELECT * FROM `projets`p 
INNER JOIN offres o ON o.projet_id=p.id 
INNER JOIN missions m on m.offre_id=o.id
WHERE p.statut='terminé';


-- 🔹 Facturation & Transactions
-- Lister les factures payées avec le nom du freelance, le montant, et le moyen de paiement.
SELECT u.nom ,t.moyen_paiement,f.montant FROM `transactions` t 
JOIN factures f ON f.id=t.facture_id
JOIN missions m ON m.id=f.mission_id
JOIN offres o ON o.id=m.offre_id
JOIN utilisateurs u ON u.id=o.freelance_id
WHERE f.paye = 1;

-- Afficher le total des gains par freelance (somme des factures payées).

SELECT u.nom ,SUM(f.montant) FROM `transactions` t 
JOIN factures f ON f.id=t.facture_id
JOIN missions m ON m.id=f.mission_id
JOIN offres o ON o.id=m.offre_id
JOIN utilisateurs u ON u.id=o.freelance_id
WHERE f.paye = 1
GROUP BY u.nom;

-- Lister les missions validées dont le paiement n’a pas encore été effectué.

SELECT * FROM `missions`m 
INNER JOIN factures f ON f.mission_id=m.id
WHERE m.statut='validé' AND f.paye=0;
-- Afficher les freelances qui ont généré plus de 20 000 MAD de chiffre d’affaires.

SELECT u.nom, SUM(f.montant) AS chiffre_affaires
FROM transactions t
JOIN factures f ON f.id = t.facture_id
JOIN missions m ON m.id = f.mission_id
JOIN offres o ON o.id = m.offre_id
JOIN utilisateurs u ON u.id = o.freelance_id
WHERE f.paye = 1
GROUP BY u.nom
HAVING chiffre_affaires > 20000;

-- Afficher les clients dont les projets ont généré plus de 10 000 MAD de dépenses.
SELECT u.nom, SUM(f.montant) AS depenses_totales
FROM projets p
JOIN offres o ON o.projet_id = p.id
JOIN missions m ON m.offre_id = o.id
JOIN factures f ON f.mission_id = m.id
JOIN utilisateurs u ON u.id = p.client_id
WHERE f.paye = 1
GROUP BY u.nom
HAVING depenses_totales > 10000;



-- 🔹 Évaluations & Qualité
-- Afficher la note moyenne obtenue par chaque freelance.
SELECT AVG(e.note),u.nom
FROM `evaluations` e 
JOIN missions m ON m.id=e.mission_id
JOIN offres o ON o.id=m.offre_id
JOIN utilisateurs u ON u.id=o.freelance_id
GROUP BY u.nom;

-- Lister les missions ayant une évaluation inférieure à 3 avec le commentaire associé.
SELECT m.id AS mission_id, e.note, e.commentaire
FROM missions m 
INNER JOIN evaluations e ON e.mission_id=m.id
WHERE e.note<=3;

-- Afficher le top 5 des freelances les mieux notés (note moyenne).

SELECT AVG(e.note),u.nom FROM `evaluations` e JOIN missions m ON m.id=e.mission_id JOIN offres o ON o.id=m.offre_id JOIN utilisateurs u ON u.id=o.freelance_id GROUP BY u.nom LIMIT 5;



-- 🔹 Analyse avancée
-- Afficher les projets sans offres reçues.
SELECT * FROM `projets` LEFT JOIN offres ON offres.projet_id=projets.id WHERE offres.projet_id is null;


-- Afficher les freelances ayant travaillé sur des projets dans au moins 2 catégories différentes.
SELECT u.nom, COUNT(DISTINCT c.id) AS nbcategories
FROM utilisateurs u
INNER JOIN offres o ON o.freelance_id = u.id
INNER JOIN projets p ON p.id = o.projet_id
INNER JOIN projet_categorie pc ON pc.projet_id = p.id
INNER JOIN categories c ON c.id = pc.categorie_id
GROUP BY u.nom
HAVING nbcategories >= 2;
