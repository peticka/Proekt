<?php
function products_get($id) {
	global $db_connection;
    $sql = '
        SELECT id, title, price, content
        FROM products
        WHERE id = '.$id;

    $res = mysqli_query($db_connection, $sql);
    return mysqli_fetch_assoc($res);
}

function products_images_get($id, $products_id) {
	global $db_connection;
    $sql = '
        SELECT id, title
        FROM products_images
        WHERE id = '.$id.' AND products_id ='.$products_id;

    $res = mysqli_query($db_connection, $sql);
    return mysqli_fetch_assoc($res);
}

function products_orders_get($product_title, $product_price) {
	global $db_connection;
	$sql = '
		SELECT id, product_title, product_price
		FROM orders
		WHERE product_title = '.$product_title.' AND product_price = '.$product_price;
	$res = mysqli_query(db_connection, $sql);
	return mysqli_fetch_assoc($res);
}
function products_get_all_count() {

    $sql ='
        SELECT products.id, products.title, products.price, COUNT(products_images.id) as cnt
        FROM products
        LEFT JOIN products_images ON products.id = products_images.products_id
        GROUP BY products.id
    ';
    $results = db_select($sql);

    return $results;
}

function products_images_get_all($products_id) {
    $sql = '
        SELECT id, title, products_id
        FROM products_images
        WHERE products_id = '.$products_id;

    $result = db_select($sql);

    return $result;
}
?>