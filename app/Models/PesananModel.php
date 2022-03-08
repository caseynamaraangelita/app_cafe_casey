<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class PesananModel extends Model{
        protected $table = 'tb_pesanan';

        protected $primary = 'id';
        protected $allowedFields = ['no','menu','harga','jumlah'];
    }