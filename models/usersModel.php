<?php

class UsersModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function insert($datos){
        // Insertar datos en la BD
        try{
            $query= $this->db -> connect() -> prepare("INSERT INTO alumnos(matricula, nombre, apellido) VALUES (:matricula, :nombre, :apellido)");
            $query ->execute(["matricula" => $datos["matricula"],"nombre" => $datos["nombre"], "apellido" => $datos["apellido"]]);
            // echo "Insertar datos";
            return true;
        }
        catch(PDOException $e){
            // echo $e->getMessage();
            // echo "Ya existe esa matricula";
            return false;
        }

    }

    public function getById($id)
    {
        $item = new Employees();

        $query = $this->db->connect()->prepare("SELECT * FROM users WHERE id = :id");

        try {
            $query->execute(['id' => $id]);

            while ($row = $query->fetch()) {

                $item = new Employees();
                $item->id = $row['id'];
                $item->name = $row['name'];
                $item->lastName = $row['lastName'];
            }

            return $item;

        } catch (PDOException $e) {
            return null;
        }
    }

    public function getFirstByEmail(string $email)
    {
        $query = $this->db->connect()->prepare("SELECT * FROM users WHERE email = :email");

        try {
            $query->execute(['email' => $email]);
            return $query->fetch();

        } catch (PDOException $e) {
            return null;
        }
    }

}