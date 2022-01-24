<?php

namespace OOP\Traits;

trait Foo {
    protected $name;

    public function get_name() {
        echo "User name is $this->name";
    }

    public function set_name($name){
        $this->name = $name;
    }
}

class Member {
    use Foo;
}

$obj = new Member;
$obj->set_name('Abdalla Maher');
$obj->get_name();
