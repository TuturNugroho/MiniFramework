<?php
//require_once 'TrxHeaders.php';
namespace OOP\App;
class TrxHeadersController
{
    public $header;
    public function __construct()
    {
        $this->header = new TrxHeaders();
    }
    public function index()
    {
        print_r($this->header->all());
    }
    public function show($id)
    {
        print_r($this->header->find($id));
    }
    public function add($id)
    {
        $insert = array(
            'id' => 5,
            'info_id' => 2,
            'date' => date('Y-m-d H:i:s'),
            'total_discount' => '20000',
            'total_price' => 200000,
            'payment' => 250000,
            'change_trx' => 50000,
            'create_ad' => null,
            'update_ad' => null
        );
        print_r($this->header->insert($insert, $id));
    }
    public function update($id)
    {
        $update = array(
            'id' => 5,
            'info_id' => 2,
            'date' => date('Y-m-d H:i:s'),
            'total_discount' => '20000',
            'total_price' => 200000,
            'payment' => 0,
            'change_trx' => 50000,
            'create_ad' => null,
            'update_ad' => null
        );
        print_r($this->header->update($update, $id));
    }
    public function delete($id)
    {
        print_r($this->header->delete($id));
    }
}
