-- 9
-- SELECT OrderID, CustomerID, ShipCountry
-- FROM `orders` WHERE ShipCountry in
-- ('Brazil','Mexico','Argentina','Venezuela') ORDER BY ShipCountry asc;


-- 12
-- SELECT FirstName,LastName, CONCAT(FirstName,' ',LastName) as names FROM `employees`;


-- 13
-- SELECT OrderID,UnitPrice,Quantity ,(Quantity*UnitPrice)as TotalPrice FROM `orderdetails` ORDER BY OrderID AND ProductID;

-- 17 
-- SELECT ContactTitle,COUNT(*)AS Countss FROM `customers` GROUP BY ContactTitle;


-- 18
-- SELECT p.ProductID,p.ProductName,s.CompanyName as supplierss FROM `products` p JOIN suppliers s ON s.SupplierID=p.SupplierID;
