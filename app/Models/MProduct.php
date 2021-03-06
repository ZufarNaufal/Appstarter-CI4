<?php

namespace App\Models;

use CodeIgniter\Model;

class MProduct extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'mproducts';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function get_product()
	{
		return $this->db->table('product')->get()->getResultArray();
	}

	public function insert_product($data)
	{
		return $this->db->table('product')->insert($data);
	}

	public function delete_product($id, $data)
	{
		return $this->db->table('product')->delete($id);
	}
}
