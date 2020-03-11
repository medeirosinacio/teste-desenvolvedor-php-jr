CREATE TABLE `client`  (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `full_name` varchar(100) NOT NULL COMMENT 'Nome completo',
  `email` varchar(100) NOT NULL COMMENT 'Email',
  `registration_number` char(11) NULL COMMENT 'CPF',
  `created_at ` datetime NULL COMMENT 'Data de criação',
  `updated_at ` datetime NULL ON UPDATE CURRENT_TIMESTAMP(-2147483648) COMMENT 'Data de modificação',
  PRIMARY KEY (`id`)
);

CREATE TABLE `product`  (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(255) NOT NULL COMMENT 'Produto',
  `barcode` longtext NULL COMMENT 'Codigo de barras',
  `price` decimal(10, 2) NULL COMMENT 'Valor unitário',
  `amount` int NOT NULL DEFAULT 0 AUTO_INCREMENT COMMENT 'Quantidade',
  `created_at ` datetime NULL COMMENT 'Data de criação',
  `updated_at ` datetime NULL ON UPDATE CURRENT_TIMESTAMP(-2147483648) COMMENT 'Data de modificação',
  PRIMARY KEY (`id`)
);

CREATE TABLE `purchase_order`  (
  `id` int NOT NULL,
  `client_id` int NOT NULL COMMENT 'Cliente',
  `status` 20 NULL COMMENT 'Status',
  `created_at ` datetime NULL COMMENT 'Data do pedido',
  `updated_at ` datetime NULL ON UPDATE CURRENT_TIMESTAMP(-2147483648) COMMENT 'Data de modificação',
  PRIMARY KEY (`id`)
);

CREATE TABLE `purchase_order_itens`  (
  `id` int NOT NULL,
  `product_id` int NOT NULL COMMENT 'Produto',
  `amont` int NOT NULL COMMENT 'Quantidade',
  `purcharse_order_id` int NOT NULL COMMENT 'Numero do pedido',
  `created_at ` datetime NULL COMMENT 'Data do pedido',
  `updated_at ` datetime NULL ON UPDATE CURRENT_TIMESTAMP(-2147483648) COMMENT 'Data de modificação',
  PRIMARY KEY (`id`)
);

ALTER TABLE `purchase_order` ADD CONSTRAINT `client_id` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `purchase_order_itens` ADD CONSTRAINT `procuct_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `purchase_order_itens` ADD CONSTRAINT `purcharse_order_id` FOREIGN KEY (`purcharse_order_id`) REFERENCES `purchase_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

