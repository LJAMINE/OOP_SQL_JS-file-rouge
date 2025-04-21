-- Query the list of CITY names from STATION that do not start with vowels. Your result cannot contain duplicates

SELECT DISTINCT CITY
FROM STATION
WHERE LEFT(LOWER(CITY), 1) NOT IN ('a', 'e', 'i', 'o', 'u')
ORDER BY CITY;

-- Query the list of CITY names from STATION that do not end with vowels. Your result cannot contain duplicates.

select DISTINCT CITY
from STATION 
where RIGHT(LOWER(CITY), 1) NOT IN ('a','e','i','o','u')
ORDER BY CITY

-- Query the list of CITY names from STATION that either do not start with vowels or do not end with vowels. Your result cannot contain duplicates.

select DISTINCT CITY
FROM STATION 
WHERE 
LOWER(RIGHT((CITY),1))NOT IN ('a','e','i','u','o')
OR 
LOWER(LEFT((CITY),1))NOT IN ('a','e','i','u','o')
ORDER BY CITY;


