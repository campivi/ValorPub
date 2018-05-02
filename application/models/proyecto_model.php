<?php
class Proyecto_model extends CI_Model {

	protected $_tabla = 'project';

	public function getAll()
    {
        $this->db->select();
        $query = $this->db->get($this->_tabla);
        return $query->result();
    }

    public function find($id)
    {
		$this->db->select();
		$this->db->where('id_proyecto', $id);
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result[0];
	}

    public function getbyPage($id)
    {
		$this->db->select();
		$this->db->where('id_page', $id);
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result;
	}

    public function getbyPageandType($id, $type)
    {
		$this->db->select();
		$this->db->where('id_page', $id);
		$this->db->where('tipo_proyecto', $type);
		$this->db->order_by("id_proyecto", "desc"); 
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
		$this->db->where('id_proyecto', $id);
        $this->db->update($this->_tabla, $data);
	}

	function delete($id)
	{
		$this->db->where('id_proyecto', $id);
		$this->db->delete($this->_tabla); 
	}

	public function LimitOrderByType($limit, $id_page){
		$this->db->select();
		$this->db->where('id_page', $id_page);
		$this->db->limit($limit);
		$this->db->order_by("id_proyecto", "desc"); 
        $query = $this->db->get($this->_tabla);
		return $query->result();
	}
}