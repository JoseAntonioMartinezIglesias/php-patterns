<?php

namespace Structural\DependencyInjection\example;

use Structural\DependencyInjection\example\DataConfig;
/* Better example */
class OtherDatabaseConfigurationB implements IDatabaseConf {

    public function getHost(): string {
        return DataConfig::host;
    }

    public function getPort(): int {
        return DataConfig::port;
    }

    public function getUsername(): string {
        return DataConfig::user;
    }

    public function getPassword(): string {
        return DataConfig::password;
    }

}
