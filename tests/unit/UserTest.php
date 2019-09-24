<?php

class USERTest extends \PHPUnit_Framework_TestCase{

    /** @test */

        public function test_we_can_get_the_first_name()
        {
          $user = new \App\Models\User;
          
          $user->setFirstName('Billy');

          $this->assertEquals($user->getFirstName(),'Billy');

        }


public function testThatWeCanGetTheLastName()
{
  $user = new \App\Models\User;
  
  $user->setLastName('Fernando');

  $this->assertEquals($user->getLastName(),'Fernando');

}

public function testFullNameIsReturned()
{
  $user = new \App\Models\User;
  
  $user->setFirstName('Billy');
  $user->setLastName('Fernando');

  $this->assertEquals($user->getFullName(),'Billy Fernando');

}

 public function testFirstAndLastNameAreTrimmed(){
     $user = new \App\Models\User;
     $user->setFirstName(' Billy   ');
     $user->setLastName('        Fernando');

     $this->assertEquals($user->getFirstName(),'Billy');
     $this->assertEquals($user->getLastName(),'Fernando');

 }

 public function testEmailAddressCanbeSet(){
     $user = new \App\Models\User;
     $user->setEmail('wp@b.com');

     $this->assertEquals($user->getEmail(),'wp@b.com');
 }


 public function testEmailVariablesContainCorrectValues(){
      
        $user = new \App\Models\User;
        $user->setFirstName('Billy');
        $user->setLastName('Fernando');
        $user->setEmail('wp@b.com');

        $emailVariable = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name',$emailVariable);
        $this->assertArrayHasKey('email',$emailVariable);

        $this->assertEquals($emailVariable['full_name'],'Billy Fernando');
        $this->assertEquals($emailVariable['email'],'wp@b.com');
  }

}

