<?php 

    namespace Cafetaria\Controller;

    class HomeController
    {
        function index(): void 
        {
            echo "HomeController.index()";
        }

        function hello(): void 
        {
            echo "HelloController.hello()";
        }

        function world(): void 
        {
            echo "HelloController.world()";
        }

        function about(): void 
        {
            echo "Author, Eko Kurniawan Khannedy";
        }
    }