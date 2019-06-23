<?php


namespace app2\Models;

include __DIR__ . "/../Database/DB.php";

use app2\Database\DB;
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
