<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Barang;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TransaksiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_allows_user_to_create_a_transaction()
    {
        // Buat user dan login
        $user = User::factory()->create();
        $this->actingAs($user);

        // Buat barang
        $barang = Barang::factory()->create(['stok' => 10]);

        // Lakukan transaksi
        $response = $this->post('/transaksi', [
            'barang_id' => $barang->id,
            'jumlah' => 5,
            'total_harga' => 250000,
        ]);

        $response->assertStatus(302); // Redirect setelah transaksi berhasil
        $this->assertDatabaseHas('transaksis', [
            'barang_id' => $barang->id,
            'jumlah' => 5,
            'total_harga' => 250000,
        ]);

        $this->assertDatabaseHas('barangs', [
            'id' => $barang->id,
            'stok' => 5, // Stok berkurang setelah transaksi
        ]);
    }
}
