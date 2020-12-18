<?php

spl_autoload_register(function ($fullyQualifiedClassName) {
    include(str_replace('\\', '/', $fullyQualifiedClassName) . '.php');
});
