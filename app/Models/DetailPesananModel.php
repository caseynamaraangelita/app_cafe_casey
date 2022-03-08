<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class DetailpesananModel extends Model{
        protected $table = 'tb_detail_pesanan';
        // Uncomment below if you want add primary key
        protected $primary = 'id';
        protected $allowedFields = ['id_user','tanggal','total_harga','no_meja','nama_pemesan'];
    }