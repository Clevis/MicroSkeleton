<?php

$config = array();

$config['common'] = array();

$config['development'] = array() + $config['common'];

$config['production'] = array() + $config['common'];

return $config;
