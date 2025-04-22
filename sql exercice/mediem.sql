-- 20

-- SELECT COUNT(*)AS totalproduct,c.CategoryName
-- FROM `products`  p 
-- JOIN categories c ON c.CategoryID=p.CategoryID
-- GROUP BY c.CategoryName
-- ORDER by totalproduct desc;

-- 21

-- SELECT COUNT(*) AS totalcustomers,c.Country,c.City
-- FROM customers c
-- GROUP BY c.Country,c.City;

-- 22

-- SELECT p.ProductID,p.ProductName,p.UnitsInStock,p.ReorderLevel 
-- FROM `products` p
--  WHERE p.UnitsInStock<p.ReorderLevel;


-- 23

-- SELECT p.ProductID,p.ProductName,p.UnitsInStock,p.UnitsOnOrder,p.ReorderLevel ,p.Discontinued
-- FROM `products` p 
-- WHERE p.UnitsInStock+p.UnitsOnOrder<p.ReorderLevel AND p.Discontinued=0;

-- 25

-- SELECT AVG(o.OrderID) AS average, o.ShipCountry
-- FROM `orders` o
-- GROUP BY o.ShipCountry
-- ORDER BY average desc
-- LIMIT 3;


-- 26








