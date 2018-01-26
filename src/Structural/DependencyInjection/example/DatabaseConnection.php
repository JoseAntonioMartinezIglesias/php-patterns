<?php

namespace Structural\DependencyInjection\example;

class DatabaseConnection {

    private $configuration;

    public function connection(IDatabaseConf $config) {
        $this->configuration = $config;
    }

    public function getDsn(): string {
        return sprintf(
                '%s:%s@%s:%d', $this->configuration->getUsername(), $this->configuration->getPassword(), $this->configuration->getHost(), $this->configuration->getPort()
        );
    }

}
