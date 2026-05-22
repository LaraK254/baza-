CREATE TABLE restavracije(
  id INT NOT NULL,
  ime VARCHAR(100) NOT NULL,
  uporabniki_id INT NOT NULL,
  opis VARCHAR(200) NOT NULL,
  slika VARCHAR(200),
  cena_dostave DECIMAL NOT NULL,
  odprta BOOLEAN NOT NULL,
  plačilo_id INT NOT NULL,
  PRIMARY KEY(id)
);


CREATE TABLE menu_živil(
  id INT NOT NULL,
  restavracije_id INT NOT NULL,
  naziv VARCHAR NOT NULL,
  menu_kategorije_id INT NOT NULL,
  opis VARCHAR(200) NOT NULL,
  ocena DECIMAL NOT NULL,
  na_voljo BOOLEAN NOT NULL,
  PRIMARY KEY(id)
);


CREATE TABLE uporabniki(
  id INT NOT NULL,
  restavracije_id INT NOT NULL,
  uporabniki_id INT NOT NULL,
  uporabniško_ime VARCHAR(200) NOT NULL,
  geslo VARCHAR(200) NOT NULL,
  mail VARCHAR(200) NOT NULL,
  profilna_slika VARCHAR(200),
  kraji_id INT NOT NULL,
  PRIMARY KEY(id)
);


CREATE TABLE košarica(
  id INT NOT NULL,
  uporabniki_id INT NOT NULL,
  restavracije_id INT NOT NULL,
  `status` VARCHAR,
  PRIMARY KEY(id)
);


CREATE TABLE vsebina_košarice(
  id INT NOT NULL,
  košarica_id INT NOT NULL,
  količina VARCHAR(200),
  opombe VARCHAR(200),
  vsebina VARCHAR(200),
  PRIMARY KEY(id)
);


CREATE TABLE menu_kategorije(
  id INT NOT NULL,
  menu_živil_id INT NOT NULL,
  naziv VARCHAR(200) NOT NULL,
  restavracije_id INT NOT NULL,
  PRIMARY KEY(id)
);


CREATE TABLE naročila(
  id INT NOT NULL,
  uporabniki_id INT NOT NULL,
  restavracije_id INT NOT NULL,
  naslovi_id INT NOT NULL,
  `status` VARCHAR(200) NOT NULL,
  vse_skupaj DECIMAL NOT NULL,
  cena_dostave DECIMAL NOT NULL,
  skupna_cena DECIMAL NOT NULL,
  košarica_id INT NOT NULL,
  PRIMARY KEY(id)
);


CREATE TABLE naslovi(
  id INT NOT NULL,
  ulica VARCHAR(200) NOT NULL,
  hisna_stevilka VARCHAR(200) NOT NULL,
  ime_kraja VARCHAR(200) NOT NULL,
  postna_st VARCHAR(10) NOT NULL,
  PRIMARY KEY(id)
);


CREATE TABLE kategorije_restavracij(
  id INT NOT NULL,
  restavracije_id INT NOT NULL,
  ime VARCHAR(200),
  PRIMARY KEY(id)
);


CREATE TABLE plačilo(
  id INT NOT NULL,
  vrsta VARCHAR(200) NOT NULL,
  `status` VARCHAR(200) NOT NULL,
  znesek DECIMAL NOT NULL,
  uporabniki_id INT NOT NULL,
  restavracije_id INT NOT NULL,
  naročila_id INT NOT NULL,
  PRIMARY KEY(id)
);


ALTER TABLE naročila
  ADD CONSTRAINT naročila_fkey_1
    FOREIGN KEY (uporabniki_id) REFERENCES uporabniki (id)
;


ALTER TABLE naročila
  ADD CONSTRAINT naročila_fkey_2
    FOREIGN KEY (restavracije_id) REFERENCES restavracije (id)
;


ALTER TABLE vsebina_košarice
  ADD CONSTRAINT vsebina_košarice_fkey_1
    FOREIGN KEY (košarica_id) REFERENCES košarica (id)
;


ALTER TABLE košarica
  ADD CONSTRAINT košarica_fkey_1
    FOREIGN KEY (uporabniki_id) REFERENCES uporabniki (id)
;


ALTER TABLE menu_kategorije
  ADD CONSTRAINT menu_kategorij_fkey_1
    FOREIGN KEY (restavracije_id) REFERENCES restavracije (id)
;


ALTER TABLE menu_živil
  ADD CONSTRAINT menu_živil_fkey_1
    FOREIGN KEY (menu_kategorije_id) REFERENCES menu_kategorije (id)
;


ALTER TABLE košarica
  ADD CONSTRAINT košarica_fkey_2
    FOREIGN KEY (restavracije_id) REFERENCES restavracije (id)
;


ALTER TABLE naročila
  ADD CONSTRAINT naročila_fkey_3 FOREIGN KEY (naslovi_id) REFERENCES naslovi (id)
;


ALTER TABLE plačilo
  ADD CONSTRAINT plačilo_fkey_1
    FOREIGN KEY (uporabniki_id) REFERENCES uporabniki (id)
;


ALTER TABLE kategorije_restavracij
  ADD CONSTRAINT kategorije_restavracij_fkey_2
    FOREIGN KEY (restavracije_id) REFERENCES restavracije (id)
;


ALTER TABLE plačilo
  ADD CONSTRAINT plačilo_fkey_2
    FOREIGN KEY (restavracije_id) REFERENCES restavracije (id)
;


ALTER TABLE plačilo
  ADD CONSTRAINT plačilo_fkey_3 FOREIGN KEY (naročila_id) REFERENCES naročila (id)
;


ALTER TABLE naročila
  ADD CONSTRAINT naročila_fkey_4
    FOREIGN KEY (košarica_id) REFERENCES košarica (id)
;


ALTER TABLE restavracije
  ADD CONSTRAINT restavracije_fkey_2
    FOREIGN KEY (plačilo_id) REFERENCES plačilo (id)
;

