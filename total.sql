SELECT order_date, delivery_date, order_status, total
FROM tb_order, tb_orderline, tb_products
WHERE tb_order.id = tb_orderline.order_id
AND tb_products.id = tb_orderline.product_id
AND customer_id="2"
AND total = (SELECT (quantity * price) as total FROM tb_products, tb_orderline WHERE tb_products.id = tb_orderline.product_id)
GROUP BY tb_order.id