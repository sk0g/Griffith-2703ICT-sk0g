SELECT title
FROM Blog
WHERE title LIKE '%Japan%';

SELECT title
FROM Blog, Article
WHERE Blog.id = Article.blog_id
AND Article.headline LIKE '%Japan%';

SELECT title
FROM Blog, Article
WHERE Blog.id = Article.blog_id
AND Blog.creator = Article.author;

/* Name of customers in Nathan */
SELECT Name
FROM Customers
WHERE Customers.Address LIKE '%Nathan%';

/* Name of customer that bought Fred's Fries */
SELECT Customers.Name
FROM Customers, Orders, Stock
WHERE Customers.Id = Orders.CustId
AND Stock.Id = Orders.ItemId
AND Stock.Name = 'Fred''s Fries;