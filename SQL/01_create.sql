CREATE TABLE kocky (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Jmeno VARCHAR(50),
    Pohlavi INT,
    Kastrace BOOL,
    Ockovani BOOL,
    Povaha VARCHAR(75),
    Zvlastni_znaky VARCHAR(75),
    Datum_prijmu DATE,
    Datum_odchodu DATE,
    Misto_nalezu VARCHAR(30),
    V_kavarne BOOL
);
CREATE TABLE Pohlavi (
    ID_pohlavi INT PRIMARY KEY AUTO_INCREMENT,
    Nazev VARCHAR(10)
);
