<?php
class Capacitacion_model extends CI_Model {

	protected $_tabla = 'training';

	public function getAll()
    {
        $this->db->select();
		$this->db->order_by("order_i", "asc"); 
        $query = $this->db->get($this->_tabla);
        return $query->result();
    }

    public function getAllByState($state)
    {
		$this->db->select();
		$this->db->where('estado', $state);
		$this->db->order_by("order_i", "asc"); 
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result;
	}

    public function filter($cat, $tip)
    {
		$this->db->select();
		if ($cat != 0) {
			$this->db->where('categoria', $cat);
		}
		if ($tip != 0) {
			$this->db->where('tipo', $tip);
		}
		$this->db->where('estado', "2");
        $query = $this->db->get($this->_tabla);
        return $query->result();	
	}

    public function getAllByCategory($category)
    {
		$this->db->select();
		$this->db->where('categoria', $category);
		$this->db->where('estado', "2");
		$this->db->order_by("dia_capacitacion", "desc"); 
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result;
	}

	public function search($w){
		$this->db->select();
		$this->db->like('titulo_capacitacion', $w, 'both');
		$this->db->or_like('descripcion_capacitacion', $w, 'both');
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result;
	}

    public function getIntereses($id)
    {
		$this->db->select();
		$this->db->limit(3);
		$this->db->where('id_capacitacion != ', $id);
		$this->db->where('estado', "2");
		$this->db->order_by("dia_capacitacion", "desc"); 
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result;
	}

    public function masVistos()
    {
		$this->db->select();
		$this->db->limit(5);
		$this->db->where('estado', "2");
		$this->db->order_by("contador", "desc"); 
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result;
	}

    public function getByUri($uri)
    {
		$this->db->select();
		$this->db->where('uri', $uri);
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result[0];
	}

    public function find($id)
    {
		$this->db->select();
		$this->db->where('id_capacitacion', $id);
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result[0];
	}

	public function insert($data)
    {
		$this->db->insert($this->_tabla, $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id_capacitacion', $id);
        $this->db->update($this->_tabla, $data);
	}

	function delete($id)
	{
		$this->db->where('id_capacitacion', $id);
		$this->db->delete($this->_tabla); 
	}
	
	public function LimitOrder($limit){
		$this->db->select();
		$this->db->limit($limit);
		$this->db->order_by("id_capacitacion", "desc"); 
        $query = $this->db->get($this->_tabla);
		return $query->result();
	}
}