<?php

namespace App\Models;

class User
{
    public $first_name;
    public $last_name;
    public $email;

    public function setFirstName($firstName)
    {
        //$this->first_name= $firstName;
        $this->first_name= trim($firstName);
    }

    public function getFirstName()
    {
        //return 'Billy';
        return $this->first_name;
    }

    public function setLastName($lastName)
    {
        //$this->last_name= $lastName;
        $this->last_name= trim($lastName);
    }

    public function getLastName()
    {
        //return 'Fernando';
        return $this->last_name;
    }

    public function getFullName()
    {
        //return 'Fernando';
        //return $this->last_name;
        return 'Billy Fernando';
        //return getFirstName().' '.getLastName();
        return $this->first_name.' '.$this->last_name;
    }

    public function setEmail($email)
    {
     
        $this->email = $email;
    }


    public function getEmail()
    {
        
        return $this->email;
    }

    public function getEmailVariables(){
        return[
            //'full_name'=>$this->getFullName(),
            'full_name'=>$this->first_name.' '.$this->last_name,
            'email'=>$this->getEmail(),
        ];
    }

}