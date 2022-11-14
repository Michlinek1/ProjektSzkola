SELECT id,nazwa,opis,cena FROM `podzespoly` WHERE cena < 1000;
SELECT nazwa,opis FROM `podzespoly` WHERE dostepnosc = 1
SELECT a.nazwa, ab.nazwa FROM podzespoly a JOIN producenci ab on a.producenci_id = ab.id
UPDATE `producenci` SET nazwa='PATRIOT' WHERE nazwa = 'Patriot';
