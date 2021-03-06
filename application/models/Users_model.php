<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
{

    public $table = 'users';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->result();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('email', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('email', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    public function login($username,$password){

        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('users');
        if($result->num_rows()==1){
            return $result->row(0)->id;
        } else{
            return false;
        }
    }


    // If user exist

/*    public function user_check($username){

        $this->db->from('user');
        $this->db->where('username',$username){

            if($query->num_rows()>0){
                return false
            }else{

                return true;
            }
        }
    }*/

// Second login model. sessions not working properly with first

 public function login_user($username,$password){

      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('username',$username);
      $this->db->where('password',$password);

      if($query=$this->db->get())
      {
          return $query->row_array();
      }
      else{
        return false;
      }

}




}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-14 14:03:25 */
/* http://harviacode.com */