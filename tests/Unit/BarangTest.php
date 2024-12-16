<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Barang;

class BarangTest extends TestCase
{
    /** @test */
    public function it_checks_barang_creation()
    {
        $barang = Barang::create([
            'nama' => 'Produk Test',
            'stok' => 100,
            'harga' => 50000,
        ]);

        $this->assertEquals('Produk Test', $barang->nama);
        $this->assertEquals(100, $barang->stok);
        $this->assertEquals(50000, $barang->harga);
    }
}
