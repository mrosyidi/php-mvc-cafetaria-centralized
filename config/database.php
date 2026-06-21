<?php
    function getDatabaseConfig(): array
    {
        return [
            "database" => [
                "test" => [
                    "url" => "mysql:host=localhost:3306;dbname=php_cafetaria_app_test",
                    "username" => "root",
                    "password" => "12345"
                ],
                "prod" => [
                    "url" => "mysql:host=localhost:3306;dbname=php_cafetaria_app",
                    "username" => "root",
                    "password" => "12345"
                ]
            ]
        ];
    }