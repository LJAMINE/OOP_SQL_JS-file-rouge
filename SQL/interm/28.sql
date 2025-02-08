-- SELECT ShipCountry, AVG(freight) AverageFreight FROM Orders WHERE OrderDate BETWEEN NOW() AND TIMESTAMPADD(YEAR,-1,NOW()) GROUP BY ShipCountry ORDER BY AverageFreight DESC LIMIT 3;
²