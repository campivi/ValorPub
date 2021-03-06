<?php
class Punto_model extends CI_Model {

	protected $_tabla = 'point';

	public function getAll()
    {
        $this->db->select();
        $query = $this->db->get($this->_tabla);
        return $query->result();
    }

    public function find($id)
    {
		$this->db->select();
		$this->db->where('id_punto', $id);
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result[0];
	}

    public function findByCategoria($category)
    {
		$this->db->select();
		$this->db->where('categoria', $category);
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result;
	}

	public function insert($data)
    {
		$this->db->insert($this->_tabla, $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id_punto', $id);
        $this->db->update($this->_tabla, $data);
	}

	function delete($id)
	{
		$this->db->where('id_punto', $id);
		$this->db->delete($this->_tabla); 
	}
}