<?php
class Users_model extends CI_Model {

	protected $_tabla = 'tb_usuario';

	public function getAll()
    {
        $this->db->select();
        $query = $this->db->get($this->_tabla);
        return $query->result();
    }

    public function find($id)
    {
		$this->db->select();
		$this->db->where('id', $id);
        $query = $this->db->get($this->_tabla);
		$result = $query->result();
		return $result[0];
	}

	public function insert($data)
    {
		$this->db->insert(
			$this->_tabla, 
			array(
				'campo_1' => $data['campo_1'],
				'campo_2' => $data['campo_2'],
				'campo_3' => $data['campo_3'],
				'campo_4' => $data['campo_4'],
				'campo_5' => $data['campo_5']
			)
		);
	}

	public function update($data, $id)
	{
		$this->db->where('id', $id);
        $this->db->update(
			$this->_tabla, 
			array(
				'campo_1' => $data['campo_1'],
				'campo_2' => $data['campo_2'],
				'campo_3' => $data['campo_3'],
				'campo_4' => $data['campo_4'],
				'campo_5' => $data['campo_5']
			)
		);
	}
}