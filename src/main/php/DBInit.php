<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->checkVersion('2.0.0-dev');
$serviceContainer->setAdapterClass('mutant_war', 'mysql');
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(array (
        'classname' => 'Propel\\Runtime\\Connection\\ConnectionWrapper',
        'dsn' => 'mysql:host=127.0.0.1;dbname=mutant_war',
        'user' => 'root',
        'password' => '',
));
$manager->setName('mutant_war');
$serviceContainer->setConnectionManager('mutant_war', $manager);
$serviceContainer->setDefaultDatasource('mutant_war');