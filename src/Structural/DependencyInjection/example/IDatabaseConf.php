<?php

namespace Structural\DependencyInjection\example;

interface IDatabaseConf {
    public function getHost(): string ;
    public function getPort(): int ;
    public function getUsername(): string ;
    public function getPassword(): string ;
}
