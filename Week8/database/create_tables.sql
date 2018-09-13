DROP TABLE IF EXISTS manufacturers;
CREATE TABLE manufacturers (
    id      INTEGER     NOT NULL    PRIMARY KEY AUTOINCREMENT,
    name    VARCHAR(80) NOT NULL
);

DROP TABLE IF EXISTS products;
CREATE TABLE products (
    id      INTEGER      NOT NULL    PRIMARY KEY AUTOINCREMENT,
    name    VARCHAR(80)  NOT NULL,
    price   DECIMAL(5,2) NOT NULL,
    manufacturer_id      INTEGER  REFERENCES manufacturers(id)
);
