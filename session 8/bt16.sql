-- cau 1
SELECT productName FROM products 
INNER JOIN categories ON products.categoryID = categories.categoryID 
WHERE categoryName = 'Guitars'
-- cau 2
SELECT productName, dateAdded, listPrice
FROM products
WHERE (dateAdded LIKE '2014-07_%' AND listPrice > 300)
ORDER BY listPrice DESC

-- cau 3
SELECT productName FROM products
INNER JOIN categories
ON categories.categoryID = products.categoryID
WHERE  productName LIKE '%o%' AND categoryName = 'Basses'
ORDER BY productName DESC

-- cau 4
SELECT productName FROM products
INNER JOIN orderitems
ON products.productID = orderitems.productID
INNER JOIN orders 
ON orders.orderID = orderitems.orderID
INNER JOIN customers
ON customers.customerID = orders.customerID
WHERE emailAddress LIKE '%@gmail.com'

-- cau 5
SELECT productName, listPrice, dateAdded
FROM products
WHERE listPrice > 300 AND dateAdded LIKE '2014%'
ORDER BY listPrice DESC
LIMIT 4

-- cau 6
SELECT city 
FROM products
INNER JOIN orderitems
ON products.productID = orderitems.productID
INNER JOIN orders 
ON orders.orderID = orderitems.orderID
INNER JOIN customers
ON customers.customerID = orders.customerID
INNER JOIN addresses
ON customers.customerID = addresses.customerID
WHERE productName = 'Yamaha FG700S'