<?php

namespace App\Models;

class Product
{
    /**
     * @return array
     */
    public static function semua(): array
    {
        return [
            [
                'id'        => 1,
                'nama'      => 'Dumbbell 5 KG (Sepasang)',
                'kategori'  => 'Fitness',
                'harga'     => 150000,
                'deskripsi' => 'Peralatan beban untuk latihan kekuatan otot.',
                'gambar'    => 'dumbbell.jpg',
            ],
            [
                'id'        => 2,
                'nama'      => 'Resistance Band Set',
                'kategori'  => 'Fitness',
                'harga'     => 65000,
                'deskripsi' => 'Karet elastis untuk latihan kekuatan dan fleksibilitas.',
                'gambar'    => 'resistance-band.jpg',
            ],
            [
                'id'        => 3,
                'nama'      => 'Yoga Mat',
                'kategori'  => 'Yoga',
                'harga'     => 85000,
                'deskripsi' => 'Alas untuk yoga dan berbagai latihan di lantai.',
                'gambar'    => 'yoga-mat.jpg',
            ],
            [
                'id'        => 4,
                'nama'      => 'Raket Badminton',
                'kategori'  => 'Badminton',
                'harga'     => 120000,
                'deskripsi' => 'Raket untuk latihan dan permainan bulu tangkis.',
                'gambar'    => 'raket-badminton.jpg',
            ],
            [
                'id'        => 5,
                'nama'      => 'Bola Sepak',
                'kategori'  => 'Sepak Bola',
                'harga'     => 110000,
                'deskripsi' => 'Bola untuk latihan dan permainan sepak bola.',
                'gambar'    => 'bola-sepak.jpg',
            ],
            [
                'id'        => 6,
                'nama'      => 'Bola Basket',
                'kategori'  => 'Basket',
                'harga'     => 130000,
                'deskripsi' => 'Bola untuk latihan dan permainan basket.',
                'gambar'    => 'bola-basket.jpg',
            ],
        ];
    }
}
