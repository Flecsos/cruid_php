<?php
require_once __DIR__.'/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
class monolog
{



        function cr_log()
        {
            $log = new Logger('DEBUG LOGGER');
            $log->pushHandler(new StreamHandler(__DIR__ . '/logs/log', Logger::DEBUG));
            $log->debug("Change_Info", array("Users_table_change",  "sort of change" => 'Create', "name" => ($_POST['name']), "email" => ($_POST['name']), "country_id" => ($_POST['country_id'])));
        }

        function edit_log()
        {
            $log = new Logger('DEBUG LOGGER');
            $log->pushHandler(new StreamHandler(__DIR__ . '/logs/log', Logger::DEBUG));
            $log->debug("Change_Info", array("Users_table_change",  "sort of change" => "edit", "name" => ($_POST['name']), "email" => ($_POST['name']), "country_id" => ($_POST['country_id'])));
        }

        function del_log()
        {
            $log = new Logger('DEBUG LOGGER');
            $log->pushHandler(new StreamHandler(__DIR__ . '/logs/log', Logger::DEBUG));
            $log->debug("Change_Info", array("Users_table_change", "sort of change" => "delete"));

        }

        function cr_log_c()
        {
            $log = new Logger('DEBUG LOGGER');
            $log->pushHandler(new StreamHandler(__DIR__ . '/logs/log', Logger::DEBUG));
            $log->debug("Change_Info", array("country_tables_change", "sort of change" => 'Create', "country" => ($_POST['country_s'])));
        }

        function edit_log_c()
        {
            $log = new Logger('DEBUG LOGGER');
            $log->pushHandler(new StreamHandler(__DIR__ . '/logs/log', Logger::DEBUG));
            $log->debug("Change_Info", array("country_tables_change", "sort of change" => "edit", "country" => ($_POST['country_s'])));
        }

        function del_log_c()
        {
            $log = new Logger('DEBUG LOGGER');
            $log->pushHandler(new StreamHandler(__DIR__ . '/logs/log', Logger::DEBUG));
            $log->debug("Change_Info", array("country_tables_change", "sort of change" => "delete"));

        }

}