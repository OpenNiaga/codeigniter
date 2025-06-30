<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'harga', 'jumlah', 'foto'];
}
