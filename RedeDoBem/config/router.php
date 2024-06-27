<?php

if (!function_exists('router')) {
    function router() {
        $pagina = filter_input(INPUT_GET, "q", FILTER_SANITIZE_STRING);

        if (empty(trim($pagina))) {
            return "/paginas/home.php";
        }

        if (empty(trim($pagina))) {
            return "/paginas/blog.php";
        }

        if (empty(trim($pagina))) {
            return "/paginas/adotar.php";
        }

        if (empty(trim($pagina))) {
            return "/paginas/animal.php";
        }

        if (empty(trim($pagina))) {
            return "/paginas/ajudar.php";
        }

        if (empty(trim($pagina))) {
            return "/paginas/sobre.php";
        }

        if (empty(trim($pagina))) {
            return "/paginas/login.php";
        }

        if (empty(trim($pagina))) {
            return "/paginas/menu.php";
        }
    
        $pagina .= ".php";
        if (!file_exists("src/paginas/{$pagina}")) {
            return "/paginas/404.php";
        }

    
        return "/paginas/$pagina";
    }
}
