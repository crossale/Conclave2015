<?php

class access {

    private $database;

    // Sets up Medoo to be used internally
    private function __construct($database_instance) {

        $this->database = $database_instance;

    }

    // Called to chack login credentials and set session variable values
    public function login($given_username, $given_password) {

        // Query database for information about the user
        $user_info = $this->database->select("access_users", "user, pass, salt", array("user" => $given_username));

        // Initialize counter to check for unexpected number of rows returned
        $error_count = 0;

        // Set array values as variables    
        foreach($user_info) {
            $db_username = $user_info['user'];
            $db_password = $user_info['pass'];
            $db_salt = $user_info['salt'];
            $errorcount++;
        }

        // Stop script if the counter returns an unexpected value
        if($error_count > 1) {
            return "die('Location: error?error_text=More than one user returned for given username when authenticating')";
        }
        if($error_count == 0) {
            return "die('Location: login?login')";
        }

        // Stop script if the given password is incorrect
        if($this->hash_password($given_password, $db_salt) != $db_password) {
            return "die('Location: login?password')";
        }

        // Retrieve information about the user from the database to include in the session variables
        $session_info = $this->database->select("access_users", "user, fname, lname,", array("user" => $db_username));

        // Initialize counter to check for unexpected number of rows returned
        $error_count = 0;

        // Set array values as variables
        foreach($session_info) {
            $session_user = $session_info['user'];
            $session_fname = $session_info['fname'];
            $session_lname = $session_info['lname'];
            $errorcount++;
        }

        // Stop script if the counter returns an unexpected value
        if($error_count > 1) {
            return "die('Location: error?error_text=More than one user returned for authenticated username when starting session')";
        }
        if($error_count == 0) {
            return "die('Location: error?error_text=No user returned for authenticated username when starting session')";
        }

        // Set session values
        $_SESSION['session_user'] = $session_user;
        $_SESSION['session_fname'] = $session_fname;
        $_SESSION['session_lname'] = $session_lname;

        // Retrieve information for log
        $UserAgent = $_SERVER["HTTP_USER_AGENT"];
        $RemoteIP = $_SERVER["REMOTE_ADDR"];
        $TimeStamp = date('Y-m-d h:i:s');

        // Log user's login
        $log_info = array("time" => $TimeStamp,"agent" => $UserAgent,"ip" => $RemoteIP,"user" => $session_user);
        $log_auth = $this->database->insert("arc_log_auth", $log_info);

        // Redirect user to HUD
        return "die('Location: access_hud')";

    }

    public function logout() {

        // Unset all session variables
        session_unset();

        // Redirect user to login page
        return "die('Location: login?logout')";

    }

    public function check_permission() {


    }

    public function add_user($given_username, $given_password, $given_fname, $given_lname, $given_permissions) {

        $count = $this->database->count("access_users", array('user' => $given_username));

        if($count > 0){
            return "die('Location: access_account-update?error=username')";
        }

        $salt = mcrypt_create_iv(28, MCRYPT_DEV_URANDOM);

        $hashed_password = $this->hash_password($given_password, $salt);

        $add_user = $this->database->insert();

    }

    private function change_password($original_password, $new_password) {

        // Determine username
        $username = $_SESSION['session_user'];

        // Query user login information
        $user_info = $this->database->select("access_users", "user, salt", array("user" => $username));

        // Initialize counter to check for unexpected number of rows returned
        $error_count = 0;

        // Set array values as variables
        foreach($user_info) {
            $db_password = $user_info['pass'];
            $db_salt = $user_info['salt'];
            $errorcount++;
        }

        // Stop script if the counter returns an unexpected value
        if($error_count != 1) {
            return "die('Location: error?error_text=Incorrect number of users returned to change password')";
        }

        // If the original password is not correct, return user to the login page
        if($this->hash_password($original_password, $db_salt) != $db_password) {
            return "die('Location: access_change-password?Original Password')";
        }

        // Create a new salt for the new password
        $new_salt = mcrypt_create_iv(28, MCRYPT_DEV_URANDOM);

        // Hash the new password
        $hashed_password = $this->hash_password($new_password, $new_salt);

        // Set new password
        $update_info = array("pass" => $hashed_password, "salt" => $new_salt);
        $where_clause = array("user" => $username);
        $update_query = $this->database->update("access_users", $update_info, $where_clause);

    }

    private function hash_password($password, $salt) {

    }

}

?>