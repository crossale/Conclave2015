<?php

class access {

    private $database;

    private function __construct($database_instance) {

        $this->database = $database_instance;

    }

    public function login($given_username, $given_password) {

        $user_info = $this->database->select("access_users", "user, pass, salt", array("user" => $given_username));

        $error_count = 0;

        foreach($user_info) {
            $db_username = $user_info['user'];
            $db_password = $user_info['pass'];
            $db_salt = $user_info['salt'];
            $errorcount++;
        }

        if($error_count > 1) {
            return "die('Location: error?error_text=More than one user returned for given username when authenticating')";
        }

        if($error_count == 0) {
            return "die('Location: login?login')";
        }

        if($this->hash_password($given_password, $db_salt) != $db_password) {
            return "die('Location: login?password')";
        }

        $session_info = $this->database->select("access_users", "user, fname, lname,", array("user" => $db_username));

        $error_count = 0;

        foreach($session_info) {
            $session_user = $session_info['user'];
            $session_fname = $session_info['fname'];
            $session_lname = $session_info['lname'];
            $errorcount++;
        }

        if($error_count > 1) {
            return "die('Location: error?error_text=More than one user returned for authenticated username when starting session')";
        }

        if($error_count == 0) {
            return "die('Location: error?error_text=No user returned for authenticated username when starting session')";
        }

        $_SESSION['session_user'] = $session_user;
        $_SESSION['session_fname'] = $session_fname;
        $_SESSION['session_lname'] = $session_lname;

        $UserAgent = $_SERVER["HTTP_USER_AGENT"];
        $RemoteIP = $_SERVER["REMOTE_ADDR"];
        $TimeStamp = date('Y-m-d h:i:s');

        $log_info = array("time" => $TimeStamp,"agent" => $UserAgent,"ip" => $RemoteIP,"user" => $session_user)
        $log_auth = $this->database->insert("arc_log_auth", $log_info);

        return "die('Location: access_hud')";

    }

    public function logout() {

        session_unset();

        return "die('Location: login?logout')";

    }

    public function check_permission() {


    }

    public function add_user($given_username, $given_password, $given_fname, $given_lname) {

        $count = $this->database->count("account", array('user' => $given_username));

        if($count > 0){
            return "die('Location: access_account-update?error=username')";
        }

        $salt = mcrypt_create_iv(28, MCRYPT_DEV_URANDOM);

        $hashed_password = $this->hash_password($given_password, $salt);

    }

    private function hash_password($password, $salt) {

    }

}

class database
{

    private $dbhost = "db147b.pair.com";        // database host
    private $dbuser = "unami_9_w";              // database user name (should have read and write privileges)
    private $dbpass = "PUAYZd9c";               // database password for accompanying user
    private $database = "unami_DevilsTeatable"; // name of database
    
    private function connectDB()
    {
        $link = mysqli_connect("db147b.pair.com", "unami_9_w", "PUAYZd9c", "unami_DevilsTeatable");
    }
    
    public function queryDB($link, $log)
    {
        if (!($this->link))
        {
            connectDB();
        }
        $result = mysqli_query($link,$query);
        return $result;
        if ($log == 1)
        {
            /*** Log Authentication Attempt ***/
            // Generate Script Start Timestamp
            date_default_timezone_set('America/New_York');
            $TimeStamp = date('Y-m-d h:i:s', time());
    
            // Identify user
            $user_session = $_SESSION['user'];
    
            // Set log query up and escape special characters
            $query_esc = mysqli_real_escape_string($this->link, $query);
            $query = "INSERT INTO admin_log_activity (time, user, query) VALUES('$TimeStamp','$user_session','$query_esc')";
    
            // Execute query
            $result = mysqli_query($this->link, $query);
        }
    }
    
    public function escapeDB($escape)
    {
        if (!$this->link)
        {
            connectDB();
        }
        $this->escape = mysqli_real_escape_string($this->link, Trim(stripslashes($escape)));
        return $this->escape;
    }
    
    public function closeDB()
    {
        if ($this->link)
        {
            mysqli_close($this->link);
        }
    }   

}


function connectDB(){
	$link = mysqli_connect('db147b.pair.com', 'unami_9_w', 'PUAYZd9c', 'unami_DevilsTeatable');

	if (!$link) {
	    die('Connect Error (' . mysqli_connect_errno() . ') '
	            . mysqli_connect_error());
	}

	return $link;
}

function checkLogin() {
	if (!(isset($_SESSION['user'])))   //Check if session exists
	{
		die(header("Location: login.php?" . $_SERVER['PHP_SELF']));  //If not forward to login page
	}
}

function checkLoginPos() {
	if (isset($_SESSION['user']))   //Check if session exists
	{
		die(header('Location: template.php'));  //If not forward to login page
	}
}

function hashText($text){
	return crypt($text, '$U^L0DGE1915!$');
}

?>
