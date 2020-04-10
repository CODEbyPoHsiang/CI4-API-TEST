<?php namespace App\Database\Seeds;
 
class MemberSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data1 = [
            'name'     => '櫻木花道',
        ];
        $data2 = [
            'name'     => '宮程良田',
        ];
        $this->db->table('member')->insert($data1);
        $this->db->table('member')->insert($data2);
    }
} 