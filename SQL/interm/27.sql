-- SELECT ShipCountry, AVG(freight) AverageFreight FROM Orders WHERE YEAR(OrderDate) = 2015 GROUP BY ShipCountry ORDER BY AverageFreight DESC LIMIT 3;
