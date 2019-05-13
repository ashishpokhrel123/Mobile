<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Producttypes;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

     use DatabaseTransactions;
    public function testLogin(){

        $response = $this->call('get', '/login', [
            'email' => 'admin@123omss.com',
            'password' => '12345678',
            '_token' => csrf_token()
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('auth.login', $response->original->name());
    }




    public function testLoginPage()
     {
        $response=$this->call('GET','/login');
        $this->assertEquals(200,$response->status());
    }






    public function testWelcomePage()
    {
        $response=$this->call('GET','/welcome');
        $this->assertEquals(200,$response->status());
    }




    public function testRegister(){

        $response = $this->call('POST', '/register', [
            'name'=>'Samar Thapa ',
            'email' => 'samarT@gmail.com',
            'password' => 'samar1234',
            'usertypeid'=>'2',
           
        ]);
        $this->assertEquals(302, $response->getStatusCode());
      
    }

    
public function testDeleteProducttype()
{
    $response=$this->call('delete', 'pages/producttype/{producttypeid}');
    $this->assertEquals(500,$response->status());
}

    



      public function testProducttype(){
     $producttype=Producttypes::create([
       
            'producttypename' => 'Real me',
          
        ]);
        $this->assertEquals('Real me',$producttype->producttypename);
      
    }














}
