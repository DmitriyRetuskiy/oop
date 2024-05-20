<?php

$userDefinedClasses = array_filter(
    get_declared_classes(),
    function($className) {
        return !call_user_func(
            array(new ReflectionClass($className), 'isInternal')
        );
    }
);

var_dump($userDefinedClasses);