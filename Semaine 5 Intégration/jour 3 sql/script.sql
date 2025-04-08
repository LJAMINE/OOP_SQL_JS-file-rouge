CREATE TABLE utilisateurs
(
    user_id int PRIMARY KEY ,
    nom VARCHAR(244),
    age VARCHAR(244),
)


CREATE TABLE commande
(
    commande_id int PRIMARY KEY,
    nom VARCHAR(244),
    user_id int ,
    FOREIGN KEY (user_id) REFERENCES utilisateurs(user_id)

)