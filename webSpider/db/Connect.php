<?php


class Connect {
    private $mysql_host = '';
    private $mysql_username = '';
    private $mysql_password = '';
    private $mysql_database = 'youtubeSpider';

    public function init ( $mysql_host, $mysql_username, $mysql_password, $mysql_database ) {

        $mysql_conn =  mysqli_connect( $mysql_host, $mysql_username, $mysql_password, $mysql_database );

        if ( !$mysql_conn ) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }

}