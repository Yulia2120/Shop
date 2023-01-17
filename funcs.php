<?php

function debug(array $data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function get_products(): array
{
    global $pdo;
   $res = $pdo->query("SELECT * FROM products");
   return $res->fetchAll();
}

function get_product(int $id): array|false
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function add_to_cart($product): void
{
    if (isset($_SESSION['cart'][$product['id']])) {
        $_SESSION['cart'][$product['id']]['qty'] += 1;
    } else {
        $_SESSION['cart'][$product['id']] = [
            'title' => $product['title'],
            'price' => $product['price'],
            'qty' => 1,
            'urlimg' => $product['urlimg'],
        ];
    }

    $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
    $_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $product['price'] : $product['price'];
}
function get_count($table): int
{
    global $pdo;
    $res = $pdo->query("SELECT COUNT(*) FROM {$table}");
    return $res->fetchColumn();
}
function get_products_pag($start, $per_page): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM products LIMIT $start, $per_page");
    return $res->fetchAll();
}