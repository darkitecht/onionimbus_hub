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
        $user = $this->db->single("SELECT * FROM users WHERE username = ?", [$_POST['username']]);
        if (empty($user)) {
            $this->view->render(null, ['error' => 'Invalid username or password']);
            exit;
        } elseif (!\password_verify($_POST['password'], $user['passwordhash'])) {
            $this->view->render(null, ['error' => 'Invalid username or password']);
        } else {
            // Password accepted!
            $_SESSION['userid'] = $user['userid'];
            header("Location: /");
        }
    }
}
