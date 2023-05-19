<?php

function get_var($key)
{

    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return "";
}

function get_select($key, $val)
{

    if (isset($_POST[$key])) {
        if ($_POST[$key] == $val) {
            return "selected";
        }
    }

    return "";
}

function esc($var)
{
    return htmlspecialchars($var);
}

function get_var_post($form_name, $key)
{
    if (isset($_POST['form_name'])) {
        if ($_POST['form_name'] == $form_name) {
            if (isset($_POST[$key])) {
                return $_POST[$key];
            }
        }
    }

    return "";
}
