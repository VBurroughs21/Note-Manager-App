<?php

class Note extends CI_Model {
	function create_note($new_note) {
		$query = "INSERT INTO notes(title, content, created_at, updated_at)
					VALUES(?,?, NOW(),NOW())";
		$this->db->query($query, array($new_note['title'], $new_note['content'])); 

	}
	function all_notes() {
		return $this->db->query("SELECT * FROM notes")->result_array();
	}
	function update($note, $id) {
		$query = "UPDATE notes
					SET content=?
					WHERE id=?";
		$values = array($note, $id);

		return $this->db->query($query, $values);
	}
	function remove($id)
	{
		$query = "DELETE FROM notes
					WHERE id = ?";
		return $this->db->query($query, array($id));
	}


}