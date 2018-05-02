<?php
class Nosotros_model extends CI_Model {

	protected $_tabla = 'us';

	public function getAll()
    {
        $this->db->select();
        $query = $this->db->get($this->_tabla);
        return $query->result();
    }

    public function find($id)
    {
		$this->db->select();
		$this->db->where('id_nosotros', $id);
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
		$this->db->where('id_nosotros', $id);
        $this->db->update($this->_tabla, $data);
	}

	function delete($id)
	{
		$this->db->where('id_nosotros', $id);
		$this->db->delete($this->_tabla); 
	}
}