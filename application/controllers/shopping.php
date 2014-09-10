<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends CI_Controller {
    
    function index(){
		$this->load->model('shopping_model');
		$data['products'] = $this->shopping_model->get_all();
		$this->load->view('header');
        $this->load->view('products',$data);
    }
    function add(){
        $data = array(
            'id'=>'42',
            'name'=>'singal',
            'qty'=>1,
            'price'=>20.00,
            'options' =>array(
                'Size'=>'medium'
            )
        );
        //$this->cart->insert($data);
        echo "add to cart() ";
    }
    function show(){
            $cart = $this->cart->contents();
            echo "<pre>";
            print_r($cart);
            echo "</pre>";
    }
    function update(){
         $data = array(
             'rowid'=> 'f48cfa464b26989c5c9e0e881cd95da5',
             'qty'=>3
         );
        $this->cart->update($data);
    }
    function total(){
        $this->cart->total();
    }
   function remove(){
       $data = array(
             'rowid'=> 'f48cfa464b26989c5c9e0e881cd95da5',
             'qty'=>0
         );
        $this->cart->update($data);
   }   
   function destroy(){
       $this->cart->destroy();
   }
}
?>
