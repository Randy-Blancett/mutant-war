<?php
define ( 'BASE_PATH', dirname ( dirname ( __FILE__ ) ) . "/main/php/" );
define ( 'TEST_PATH', dirname ( __FILE__ ) );

// Include path
set_include_path ( '.' . PATH_SEPARATOR . BASE_PATH . PATH_SEPARATOR . get_include_path () );