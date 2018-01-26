<?php

namespace Structural\DependencyInjection\example;

class OtherDatabaseConfiguration implements IDatabaseConf {

    public function getHost(): string {
        return 'localhost';
    }

    public function getPort(): int {
        return '3303';
    }

    public function getUsername(): string {
        return 'root';
    }

    public function getPassword(): string {
        return '******';
    }

}
