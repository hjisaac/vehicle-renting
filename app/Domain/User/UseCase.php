<?php 

namespace App\Domain\User\UserModel ;

class UseCase {

    // TODO : have to hash the password and remove space from string in setterrs

    protected $_firstname ;
    protected $_lastname ;
    protected $_password ;
    protected $_email ;
    protected $_tel ;
    protected $_pseudo ;

    function __construct() {
        //
    }

    function setFirstname($fistname) {
        $this->_firstname = $fistname ;
        return $this ;
    }

    function setLastname($lastname) {
        $this->_lastname = $lastname ;
        return $this ;
    }

    function setEmail($email) {
        $this->_email = $email ;
        return $this ;
    }

    function setPassword($_password) {
        $this->_password = $_password ;
        return $this ;
    }

    function setPseudo($pseudo) {
        $this->_pseudo = $pseudo ;
        return $this ;
    }
}