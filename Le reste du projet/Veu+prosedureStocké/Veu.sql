CREATE OR REPLACE VIEW Vue_Produits_Fournisseurs AS
SELECT 

    p.id AS productID,
    p.nom AS productNom,
    p.description,
    p.prix,
    p.stock,
    p.reference_fournisseur,
    p.photo,
    f.id AS fournisseurID,
    f.nom AS fournisseurNom,
    f.adresse AS fournisseurAdresse,
    f.telephone AS fournisseurTelephone
    
FROM products p
JOIN fournisseur f ON p.fournisseur_id = f.id;

SELECT * FROM Vue_Produits_Fournisseurs;


// Pour Categories

CREATE OR REPLACE VIEW Vue_Produits_Categories AS
SELECT 

    p.id AS productID,
    p.nom AS productNom,
    p.description,
    p.prix,
    p.stock,
    p.categories_id,
    p.photo,
    c.id AS categoriesID,
    c.nom AS categoriesNom,
    c.photo AS categoeisPHOTO,
    c.parent_id
    
FROM products p
JOIN categories c ON p.categories_id = c.id;


SELECT * FROM Vue_Produits_Categories;

