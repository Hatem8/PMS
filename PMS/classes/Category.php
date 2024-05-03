<?php

require_once __DIR__ . '/Database.php';


class Category
{
    public static function createCategory($name)
    {
        $db = new Database;

        $sql = "INSERT INTO `categories` (`name`) VALUES ('$name')";

        $db->makeQuery($sql);
    }
    public static function getAllCategories()
    {
        $db = new Database;

        $sql = "SELECT * FROM categories";

        $data = $db->makeQuery($sql);

        $categories = $data->fetch_all(MYSQLI_ASSOC);
        return $categories;
    }
}
