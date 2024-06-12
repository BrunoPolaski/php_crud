<?php
class User {
    public $name;
    public $surname;
    public $phoneNumber;

    public function __construct($name, $surname, $phoneNumber) {
        $this->name = $name;
        $this->surname = $surname;
        $this->phoneNumber = $phoneNumber;
    }

    public static function fromJson($json) {
        $user = new User(
            $json['name'],
            $json['surname'],
            $json['phoneNumber']
        );
        return $user;
    }
}