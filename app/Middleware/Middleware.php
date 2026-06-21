<?php 

    namespace Cafetaria\Middleware;

    interface Middleware
    {
        public function before(): void;
    }