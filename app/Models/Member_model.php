<?php

namespace App\Models;

use CodeIgniter\Model;

class Member_model extends Model {

    protected $table = 'member';

    public function getMember($id = false)
    {
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id])->getRowArray();
        }  
    }
    
    public function insertMember($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateMember($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteMember($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
} 