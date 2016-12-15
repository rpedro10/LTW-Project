<?php
  function createRestaurant($name, $description, $image_dir, $address, $ownerId) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO restaurants (name, description, image_dir, address, ownerId) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute(array($name, $description, $image_dir, $address, $ownerId));
  }

  function getRestaurantId($name, $description, $image_dir, $address, $ownerId) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT restaurantId FROM restaurants WHERE name = ? AND description = ? AND image_dir = ? AND address = ? AND ownerId = ?');
    $stmt->execute(array($name, $description, $image_dir, $address, $ownerId));
    return $stmt->fetch();	// what if there are more than one restaurant with this values?
  }

  function getRestaurantsByOwner($ownerId) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM restaurants WHERE ownerId = ?');
    $stmt->execute(array($ownerId));
    return $stmt->fetchAll();
  }

  function updateRestaurant($restaurantId, $name, $description, $image_dir, $address, $ownerId) {
    global $dbh;
    $stmt = $dbh->prepare('UPDATE restaurants SET name = ?, description = ?, image_dir = ?, address = ?, ownerId = ? WHERE restaurantId = ?');
    $stmt->execute(array($name, $description, $image_dir, $address, $ownerId, $restaurantId));
  }

  function searchRestaurants($partialName) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM restaurants WHERE name LIKE ?');
    $stmt->execute($partialName);
    return $stmt->fetchAll();
  }

  function getRestaurantById($restaurantId) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM restaurants WHERE restaurantId = ?');
    $stmt->execute(array($restaurantId));
    return $stmt->fetch();
  }
?>
