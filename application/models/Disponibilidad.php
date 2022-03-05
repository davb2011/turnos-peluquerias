<?php

class Disponibilidad  extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function obtenerDatos()
    {
        $query = $this->db->get('disponibilidad');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }


    public function obtenerTodosActuales()
    {
        $sql = "select * from disponibilidad where fecha_dis>=date(now());";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }


    public function insertarDisponibilidad($dataDisponibilidad)
    {
        return $this->db->insert("disponibilidad", $dataDisponibilidad);
    }
}
