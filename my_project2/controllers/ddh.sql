SELECT l.nom, COUNT(*) AS nombre_emprunts
FROM livre l
JOIN emprunt e ON l.numliv = e.numliv
GROUP BY l.nom
ORDER BY nombre_em


SELECT l.nom
FROM livre l
WHERE l.numliv = (
    SELECT e.numliv
    FROM emprunt e
    GROUP BY e.numliv
    ORDER BY COUNT(e.numab) DESC
    FETCH FIRST 1 ROW ONLY
);


SELECT e.numliv, l.titre
FROM livre l
JOIN emprunt e ON l.numliv = e.numliv
GROUP BY e.numliv, l.titre
HAVING COUNT(DISTINCT e.numab) = (SELECT COUNT(DISTINCT numab) FROM abonne);
