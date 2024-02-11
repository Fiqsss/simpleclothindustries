<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CatalogSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'img_name' => '1.jpg'],
            [
                'img_name' => '2.jpg'],
            [
                'img_name' => '3.jpg'],
            [
                'img_name' => '4.jpg'],
            [
                'img_name' => '5.jpg'],
            [
                'img_name' => '6.jpg'],
            [
                'img_name' => '7.jpg'],
            [
                'img_name' => '8.jpg'],

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO catalog (img_catalog) VALUES(:img_catalog)', $data);

        // Using Query Builder
        $this->db->table('catalog')->insertBatch($data);
    }
}
