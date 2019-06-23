<?php


namespace app3\Models;

include __DIR__ . "/../Database/DB.php";

use app3\Database\DB;
use PDO;

abstract class Model
{
    protected $table;
    protected $connection;
    protected $fillable;
    protected $fields = [];
    protected $questions = [];
    protected $values = [];
    protected $db;

    public function __construct()
    {
        $database = new DB();
        $this->db = $database->getConnection();
    }

    public function index()
    {
        try{

            $sql = 'SELECT * FROM ' . $this->connection . '.' . $this->table . ';';

            $prep = $this->db->prepare($sql);
            $prep->execute();
            $data = $prep->fetchAll(PDO::FETCH_OBJ);

            return $data;

        }catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function create()
    {

    }

    public function store(array $data)
    {

        try{

            $this->arrayKeys($data);

            $sql = 'INSERT INTO ' . $this->connection . '.' . $this->table . ' (' . implode(',', $this->fields) . ') VALUES ('. implode(',', $this->questions) .');';

            $prep = $this->db->prepare($sql);
            $store = $prep->execute($this->values);

            if (!$store) {
                return $this->db->errorInfo();
            }
            return $data;

        }catch (\Exception $e) {

            echo $e->getMessage();
        }
    }

    public function show()
    {

//        try{
//
//        }catch ()
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function arrayKeys($data)
    {
        foreach ($this->fillable as $fill)
        {
            if(array_key_exists($fill, $data)){
                array_push( $this->fields, $fill);
                array_push($this->questions, '?');
                array_push( $this->values, $data[$fill]);
            }
        }
    }
}
