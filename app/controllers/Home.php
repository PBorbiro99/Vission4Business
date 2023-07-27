<?php

/**
 * home class
 */
class Home
{
    use Controller;

    public function index()
    {
        $user = new User;
        $arr['username'] = $_SESSION['USER']->username;
        $details = (array) $user->first($arr);

        $id=$details['id'];
//        print_r($_POST);
//        print_r($_SESSION['USER']);
        if (!empty($_POST)){
            if ($_POST['operation'] === 'add'){
                $user->query("UPDATE users SET units_now ='{$details['units_now']}' + '{$_POST['units_now']}' WHERE id = '{$id}'");
            }else{
                $user->query("UPDATE users SET units_now ='{$details['units_now']}' - '{$_POST['units_now']}' WHERE id = '{$id}'");
            }
        }
        if (!empty($_POST)){
            redirect('home');
        }
        $this->view('home', $details);
    }
}