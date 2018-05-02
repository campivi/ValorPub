<?php
class Investigacionuser_model extends CI_Model {

	protected $_tabla = 'investigacion_user';

	public function getAll()
    {
        $this->db->select();
        $query = $this->db->get($this->_tabla);
        return $query->result();
    }

    public function find($id)
    {
		$this->db->select();
		$this->db->where('id_iu', $id);
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result[0];
	}

    public function find_by($id, $user)
    {
		$this->db->select();
		$this->db->where('id_investigacion', $id);
		$this->db->where('id_user', $user);
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
		$this->db->where('id_iu', $id);
        $this->db->update($this->_tabla, $data);
	}

	public function masValorados()
	{
		$this->db->select("id_investigacion, SUM(valoracion) AS suma, COUNT(*) AS contador");
		$this->db->limit(5);
		$this->db->group_by("id_investigacion"); 
		$this->db->order_by("suma", "desc"); 
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result;
	}

	function delete($id)
	{
		$this->db->where('id_iu', $id);
		$this->db->delete($this->_tabla); 
	}
}