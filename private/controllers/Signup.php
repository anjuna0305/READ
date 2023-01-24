<?php


class Signup extends Controller
{
    function index()
    {
        echo "<pre>";
        print_r($_POST);

        if ($_POST > 0) {
            $user = new user();
            echo "new user created";

            if ($user->validate($_POST)) {

                $user->insert($_POST);
                $this->redirect('login');
            } else {
                //errors
                $user->errors = $user->errors;
            }
        }
        echo "<br>errors</br>";
        print_r($user->errors);
        $this->view('Signup');
    }
}
