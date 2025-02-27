

DELIMITER |

CREATE PROCEDURE commandes_non_soldées()
BEGIN
    SELECT *
    FROM commande
    WHERE etat <> ('Soldée');
END |

DELIMITER ;


CALL commandes_non_soldées();


//
DELIMITER |

CREATE PROCEDURE GetAverageBillingDelay()
BEGIN
    SELECT AVG(DATEDIFF(date_facture, created_at)) AS average_delay
    FROM commande
    WHERE date_facture IS NOT NULL;
END |

DELIMITER ;

CALL GetAverageBillingDelay();

