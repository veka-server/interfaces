<?php

namespace VekaServer\Interfaces;

interface MigrationInterface
{

    public function upgrade();
    public function downgrade();

}
