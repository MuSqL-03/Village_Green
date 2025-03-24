
--- Chiffre d'affaires mois par mois pour une année sélectionnée

SELECT 
   MONTH(c.created_at) AS mois,
   SUM(c.created_at) AS Chiffre_affaires
FROM 
   commande c
WHERE 
   YEAR(c.created_at) = :annee
GROUP BY 
   mois
ORDER BY 
   mois;


-- Chiffre d'affaires généré pour un fournisseur

SELECT 
   f.id AS fournisseur_id,
   f.nom AS fournisseur_nom,
   SUM(c.total) AS Chiffre_affaires
FROM
   commande c
JOIN 
   commande_details cd ON c.id = cd.commande_id
JOIN 
	products p ON cd.products_id = p.id
JOIN 
	fournisseur f ON p.fournisseur_id = f.id
GROUP BY 
	f.id, f.nom 
ORDER BY 	
	Chiffre_affaires DESC; 


 -- TOP 10 des produits les plus commandés pour une année sélectionnée (référence et nom du produit, quantité commandée, fournisseur)
SELECT 
    p.reference_fournisseur  AS reference,
    p.nom AS product_name,
    SUM(cd.quantite) AS total_quantity,
    f.nom AS fournisseur
FROM 
    commande_details cd
JOIN 
    products p ON cd.products_id = p.id
JOIN 
    fournisseur f ON p.fournisseur_id = f.id
JOIN 
    commande c ON cd.commande_id = c.id
WHERE 
	 YEAR(c.date_facture) = :year  -- Filtre pour l'année spécifiée
GROUP BY 
    p.id, f.id
ORDER BY 
    total_quantity DESC
LIMIT 10;

-- TOP 10 des produits les plus rémunérateurs pour une année sélectionnée (référence et nom du produit, marge, fournisseur)

SELECT 
    p.reference_fournisseur AS reference,
    p.nom AS product_name,
    SUM((p.prix ) * cd.quantite) AS total_margin,  -- Calcul de la marge totale
    f.nom AS fournisseur
FROM 
    commande_details cd
JOIN 
    products p ON cd.products_id = p.id
JOIN 
    fournisseur f ON p.fournisseur_id = f.id
JOIN 
    commande c ON cd.commande_id = c.id
WHERE 
    YEAR(c.date_facture) = :year  -- Filtre pour l'année spécifiée
GROUP BY 
    p.id, f.id
ORDER BY 
    total_margin DESC
LIMIT 10;


-- Top 10 des clients en nombre de commandes ou chiffre d'affaires

SELECT
	 c.id AS Users_id,	
	 c.reference  AS Users_Reference,
	 COUNT(c.id) AS Total_Orders
FROM 
	commande c
JOIN 
	users cl ON c.users_id = cl.id
WHERE
	YEAR(c.date_facture) = :year
GROUP BY
	c.users_id
ORDER BY 
	Total_Orders DESC
	LIMIT 10;
	




--	Répartition du chiffre d'affaires par type de client 

SELECT
    ut.nom AS user_type,  -- Afficher le type d'utilisateur (Professionnel ou Particulier)
    SUM(cd.quantite * p.prix) AS total_revenue  -- Calcul du chiffre d'affaires total par type d'utilisateur
FROM
    commande c
JOIN
    commande_details cd ON c.id = cd.commande_id  -- Rejoindre les détails des commandes
JOIN
    products p ON cd.products_id = p.id  -- Rejoindre les produits pour obtenir leur prix
JOIN
    users u ON c.users_id = u.id  -- Rejoindre les utilisateurs (clients)
JOIN
    user_type ut ON u.usertype_id = ut.id  -- Rejoindre la table des types d'utilisateurs
WHERE
    YEAR(c.date_facture) = :year  -- Filtrer par année (à remplacer par l'année souhaitée)
GROUP BY
    ut.id  -- Grouper les résultats par type d'utilisateur (Professionnel / Particulier)
ORDER BY
    total_revenue DESC;  -- Trier par chiffre d'affaires total (optionnel)


	 
	 
-- Nombre de commandes en cours de livraison.	 
	
SELECT COUNT(*) AS nombre_commandes_en_cours
FROM commande c
WHERE c.etat = 'En cours';

SELECT COUNT(*) AS nombre_commandes_en_cours
FROM commande c
WHERE c.etat = 'Soldée'; -- Utilisez le bon état ici, par exemple "En livraison", "En cours", etc.


   
   
	
   
   
   