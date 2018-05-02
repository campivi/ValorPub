<?php
class Comentarioc_model extends CI_Model {

	protected $_tabla = 'comments_training';

	public function getAll()
    {
        $this->db->select();
        $query = $this->db->get($this->_tabla);
        return $query->result();
    }

    public function find($id)
    {
		$this->db->select();
		$this->db->where('id_comentario', $id);
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
		$this->db->where('id_comentario', $id);
        $this->db->update($this->_tabla, $data);
	}

	function delete($id)
	{
		$this->db->where('id_comentario', $id);
		$this->db->delete($this->_tabla); 
	}

    public function masComentados()
    {
		$this->db->select("id_capacitacion , COUNT(*) AS 'grupo'");
		$this->db->limit(5);
		$this->db->where('estado', "2");
		$this->db->group_by("id_capacitacion"); 
		$this->db->order_by("grupo", "desc"); 
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result;
	}
}