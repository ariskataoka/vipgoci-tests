<?php


class MyProblematicClass
{
    protected string $test;

    public function test(): string
    {
        foreach ($_POST['menu-locations'] as $menu_id) {
            echo 'ADD warning severity 10 - non-sanitized input variable';
        }
        $functionsCookies = $_COOKIE;

        $functionsPost = $_POST;

        var_dump($functionsPost );

        session_write_close();
    }
}

