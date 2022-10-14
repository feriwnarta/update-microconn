<?php

class Email extends Controller
{
    public function sendEmail()
    {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $emailServices = $this->model('EmailModel');
            $result = $emailServices->sendEmail($email);
            $encryptValue = $emailServices->encrypt($result);
            $form = '
            <form action="' . BASE_URL . '/"method="POST" id="otw">
            <input type="text" name="status" value="' . $encryptValue . '">
            <button type="submit">
            </button>
            </form> 

            <script>
            document.getElementById("otw").submit();
            </script>
            ';
            echo $form;
        } else {
            $error = '<script>alert("gagal mengirim email")</script>';
            echo $error;
        }
    }
}
