SELECT p.ProductID, p.ProductName, p.UnitsInStock, p.ReorderLevel
FROM products p
where p.UnitsInStock+ p.UnitsOnOrder<p.ReorderLevel;
