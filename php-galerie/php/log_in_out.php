<?php
    include 'session_control.php';
    
    if( isset($_POST['anmelden'])) {
        
        mysql_connect( '10.10.102.145', 'www', 'linux' )
            or die( mysql_error() );
        
        mysql_select_db('db_credentials')
            or die( mysql_error() );
            
        $user = (isset($_POST['user'])) ? $_POST['user'] : "";
        $pass = (isset($_POST['pass'])) ? md5($_POST['pass']) : "";
        
        $query =    "SELECT
                        *
                     FROM 
                        accounts
                     WHERE
                            email='".$user."'
                        AND
                            pass='".$pass."'";
        echo $query;
        
        $result = mysql_query($query);

        if( mysql_num_rows( $result ) == 1 ) {
            
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            
            header('Location: ../index.php');
        }
    }
    
    if( isset($_POST['abmelden'])) {
        
        $_SESSION = array();
        
        header('Location: ../index.php');
    }