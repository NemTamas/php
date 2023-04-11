SELECT * FROM actor;
/*mezők felsorolása*/
SELECT first_name, last_name FROM actor;
/*műveletek mezőkkel*/
SELECT actor_id*3 AS id, first_name, last_name FROM actor;
SELECT actor_id,
CONCAT(lower(first_name),' ',last_name) AS fullname
FROM actor;
SELECT actor_id,
first_name, last_name
FROM actor WHERE actor_id = 198;
SELECT actor_id,
first_name, last_name
FROM actor WHERE SUBSTRING(first_name, 1, 1) = 'M';
SELECT actor_id,
first_name, last_name
FROM actor WHERE SOUNDEX(last_name) = SOUNDEX('HOFMAN');
SELECT SOUNDEX('TÓTH');
SELECT SOUNDEX('KOVACS');
SELECT * FROM address WHERE address2 IS NULL ;
SELECT * FROM actor WHERE last_name LIKE '%OL%';
SELECT * FROM actor WHERE last_name LIKE '%OL%' AND actor_id < 90
AND actor_id > 34;
SELECT * FROM actor WHERE actor_id BETWEEN 50 AND 90;
SELECT * FROM actor WHERE actor_id IN(14,15,18,23,45,67);
SELECT *, YEAR(last_update) AS YEAR, MONTH(last_update) AS MONTH,
DAY(last_update) AS DAY FROM actor;
SELECT COUNT(*) FROM actor;
SELECT SUM(actor_id) AS SUMID FROM actor;
SELECT MAX(last_update), MIN(last_update) FROM actor;
SELECT AVG(actor_id) AS AVGID FROM actor;
SELECT SUM(actor_id)/COUNT(*) AS AVG FROM actor;
SELECT COUNT(*) AS Darab, deptno, GROUP_CONCAT(ename)
FROM scott.emp GROUP BY deptno;
SELECT SUM(sal) AS Osszeg, deptno
FROM scott.emp GROUP BY deptno;
SELECT CONCAT('INSERT INTO ujtabla(Osszesen, reszleg) VALUES(',SUM(sal),',' ,deptno,');') AS insertstring
FROM scott.emp GROUP BY deptno;
SELECT * FROM emp AS e LEFT JOIN dept AS d ON(e.DEPTNO = d.DEPTNO);
SELECT * FROM dept AS d LEFT JOIN emp AS e ON(e.DEPTNO = d.DEPTNO);
SELECT * FROM emp AS e, dept AS d WHERE e.DEPTNO = d.DEPTNO;
SELECT * FROM dept AS d, emp AS e WHERE e.DEPTNO = d.DEPTNO;
SELECT sz.id, sz.szlaszam, sz.osszeg,
SUM(f.teljesitett_osszeg) AS befizetett_osszeg, p.nev,
sz.osszeg-SUM(f.teljesitett_osszeg) AS tartozas
FROM szamla AS sz
JOIN fizetesek AS f ON(sz.id = f.szamla_id)
JOIN partner AS p ON(sz.partner_id = p.id)
GROUP BY sz.id;
SELECT sz.id, sz.szlaszam, sz.osszeg,
IFNULL(SUM(f.teljesitett_osszeg), 0) AS befizetett_osszeg, p.nev,
sz.osszeg-(IFNULL(SUM(f.teljesitett_osszeg), 0)) AS tartozas
FROM szamla AS sz
LEFT JOIN fizetesek AS f ON(sz.id = f.szamla_id)
JOIN partner AS p ON(sz.partner_id = p.id)
GROUP BY sz.id;
SELECT SUM(osszeg)-SUM(befizetett_osszeg) AS TOTALTARTOZAS FROM (
	SELECT sz.id, sz.szlaszam, sz.osszeg,
	IFNULL(SUM(f.teljesitett_osszeg), 0) AS befizetett_osszeg, p.nev,
	sz.osszeg-(IFNULL(SUM(f.teljesitett_osszeg), 0)) AS tartozas
	FROM szamla AS sz
	LEFT JOIN fizetesek AS f ON(sz.id = f.szamla_id)
	JOIN partner AS p ON(sz.partner_id = p.id)
	GROUP BY sz.id
) AS ADATOK;
SELECT sz.id, sz.szlaszam, sz.osszeg,
IFNULL(SUM(f.teljesitett_osszeg), 0) AS befizetett_osszeg, p.nev,
sz.osszeg-(IFNULL(SUM(f.teljesitett_osszeg), 0)) AS tartozas
FROM szamla AS sz
LEFT JOIN fizetesek AS f ON(sz.id = f.szamla_id)
JOIN partner AS p ON(sz.partner_id = p.id)
GROUP BY  sz.id
UNION ALL
SELECT NULL AS id, NULL AS szlaszam, SUM(osszeg) AS osszeg,
SUM(f.teljesitett_osszeg) AS befizetett_osszeg, NULL AS nev,
SUM(sz.osszeg)-(IFNULL(SUM(f.teljesitett_osszeg), 0)) AS tartozas
FROM szamla AS sz
LEFT JOIN fizetesek AS f ON(sz.id = f.szamla_id)
JOIN partner AS p ON(sz.partner_id = p.id);
/*-----Ki kinek a főnöke-----------*/
SELECT fonok.ename, beosztott.ename FROM emp AS fonok LEFT JOIN emp AS beosztott ON(fonok.empno = beosztott.MGR);