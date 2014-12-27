<?php
namespace Onionimbus\Hub\Website;

class Login extends \Onionimbus\System\Controller
{
    public function index()
    {
        if (!empty($_SESSION['userid'])) {
            header("Location: /");
            exit;
        }
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            return $this->_process();
        }
        $this->view->render();
    }

    protected function _process()
    {
        // You will notice that we do not allow SQLi here. Unless you have PDO 0day
        $user = $this->db->col("SELECT * FROM users WHERE username = ?", $_POST['username']);
        
        // Many people would call this a "user enumeration" vulnerability. So is
        // our registration form. Use a strong password and quit whining.
        if (empty($user)) {
            $this->view->render(null, ['error' => 'Invalid username']);
            exit;
        } elseif (!\password_verify($_POST['password'], $user['passwordhash'])) {
            $this->view->render(null, ['error' => 'Invalid password']);
        } else {
            // Password accepted!
            $_SESSION['userid'] = $user['userid'];
            header("Location: /");
        }
    }
}
