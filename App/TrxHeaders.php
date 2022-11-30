<?php
//require_once '../database.php';
namespace OOP\App;

use OOP\App\Database;

class TrxHeaders extends Database
{
    public function __constructor()
    // otomatis dipanggil
    {
        //$db2 = new Database;
        // $db2->setConnection();
        $conn = Database::setConnection();
    }
    public function all()
    {
        $conn =  Database::setConnection();
        $statement = self::$conn->prepare("select * from trx_heads");
        // var_dump($conn);     
        $statement->execute();
        // print_r($statement);

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function find($id)
    {
        $conn =  Database::setConnection();
        $statement = self::$conn->prepare("select * from trx_heads where id=$id");
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public function findArray($id)
    {
        $statement = self::$conn->prepare("select * from trx_heads where id=$id");
        $statement->execute();
        return $statement->fetch();
    }
    public function insert($data)
    {
        $statement = self::$conn->prepare("insert into trx_heads
                        values (:id, :info_id, :date, :total_discount, :total_price, :payment, :change_trx,:create_ad,:update_ad)");
        return $statement->execute($data);
    }
    public function update($id, $data)
    {
        $statement = self::$conn->prepare("update trx_heads set info_id=:info_id, date=:date, total_discount = :total_discount, total_price=:total_price, payment=:payment, change_trx=:change_trx,created_ad=:created_ad,update_ad=:update_ad where id=$id");
        return $statement->execute($data);
    }
    public function delete($id)
    {
        $statement = self::$conn->prepare("delete from trx_heads where id=$id");
        return $statement->execute([]);
    }
}

// try {
//     $trxHeader = new TrxHeaders();
    // $db2 = new Database;
    // $db2 ->setConnection2();
    // echo "test";
    //print_r($trxHeader->index());
    //print_r($trxHeader->find(1));

    // $data = $trxHeader->find(1);
    // echo $data->date;


    // $data = $trxHeader->findArray(1);
    // echo $data['date'];

    // $insert = array(
    //     'id' => 5,
    //     'info_id' => 2,
    //     'date' => date('Y-m-d H:i:s'),
    //     'total_discount' => '20000',
    //     'total_price' => 200000,
    //     'payment' => 250000,
    //     'change_trx' => 50000,
    //     'create_ad' => null,
    //     'update_ad' => null
    // );
    // $trxHeader->insert($insert);

    // $update = array(
    //     // 'id' => 5,
    //     'info_id' => 2,
    //     'date' => date('Y-m-d H:i:s'),
    //     'total_discount' => '20000',
    //     'total_price' => 990000,
    //     'payment' => 1000000,
    //     'change_trx' => 50000,
    //     'created_ad' => null,
    //     'update_ad' => null
    // );
    // $trxHeader->update(1, $update);

    // $delete = array(
    //     //'id' => 4,
    // );
    // $trxHeader->delete(4);
    // $trxHeader->insert($insert);
    // $update = array(
    //     'id' => ':id',
    //     'info_id' => ':info_id',
    //     'date' =>' :date',
    //     'total_discount' => ':total_discount',
    //     'total_price' => ':total_price',
    //     'payment' => ':payment',
    //     'change_trx' => ':change_trx',
    //     'create_ad' => ':create_ad',
    //     'update_ad' =>null
    // );
// } catch (\Throwable $th) {
//     echo $th;
// }
// require_once 'Database.php';

// class header_trx extends Database
// {

//     public function __construct()
//     {
//         Database::setConnection();
//     }

//     public function index()
//     {
//         $statement = self::$conn->prepare("select * from trx_heads");
//         $statement->execute();
//         print_r($statement);
//         return $statement->fetchAll(\PDO::FETCH_OBJ);
//     }
// }

// try {
//     $headerTrx = new header_trx();
//     print_r($headerTrx->index());
// } catch (\Throwable $th) {
//     throw $th;
// }
