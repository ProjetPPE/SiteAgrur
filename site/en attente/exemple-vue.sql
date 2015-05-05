CREATE VIEW lesVergers
AS SELECT vergerSuperficie, vergerNbArbre, prodSociete, varLibelle, communeNom
FROM verger vergerSuperficie, verger vergerNbArbre, producteur prodID, variete varID, commune commuID
WHERE vergerSuperficie.col1 = ver

SELECT vergerSuperficie, vergerNbArbre, prodSociete, varLibelle, communeNom
FROM verger, producteur, variete, commune


CREATE VIEW Vue
(colonneA,colonneB,colonneC,colonneD)
AS SELECT colonne1,colonne2,colonneI,colonneII
FROM Nom_table1 Alias1,Nom_tableII AliasII
WHERE Alias1.colonne1 = AliasII.colonneI
AND Alias1.colonne2 = AliasII.colonneII
['vergerSuperficie']['vergerNbArbre']['prodID']['varID']['commuID']