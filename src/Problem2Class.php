<?php


class Problem2Class
{

    public function test(): string
    {
        foreach ($_POST['menu-locations'] as $menu_id) {
            echo 'ADD warning severity 10 - non-sanitized input variable';
        }
    }
}

