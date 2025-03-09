SELECT count(*)as TotalProducts, c.CategoryName
FROM products p INNER JOIN categories c ON c.categoryID=p.categoryID
GROUP by c.categoryname;
