<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\Bank;
use App\Model\Payments;
use App\Model\Transaction;
use App\Model\Transfer;
use App\Model\User;
use App\Model\Withdraw;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'usersatu',
            'password' => '232323',
            'rekening' => '1234567890'
        ]);

        User::create([
            'username' => 'userdua',
            'password' => '232321',
            'rekening' => '7314681930'
        ]);

        User::create([
            'username' => 'usertiga',
            'password' => '232321',
            'rekening' => '7184851937'
        ]);

        Bank::create([
            'user_id' => 1,
            'saldo' => 20000000
        ]);

        Bank::create([
            'user_id' => 2,
            'saldo' => 10000000
        ]);

        Bank::create([
            'user_id' => 3,
            'saldo' => 4000000
        ]);

        Transaksi::create([ 'jenis_transaksi' => 'tarik tunai', 'cek saldo','transfer' ]);

        Transfer::create([ 
            'user_id' => 1,
            'rekening_tujuan' => 9836591794,
            'nominal' => 2700000,
        ]);

        Transfer::create([ 
            'user_id' => 1,
            'rekening_tujuan' => 1746189012,
            'nominal' => 150000,
        ]);

        Transfer::create([ 
            'user_id' => 12,
            'rekening_tujuan' => 9836591794,
            'nominal' => 1000000,
        ]);
        
        Withdraw::create([
            'user_id' => 2,
            'nominal' => 1000000,
            'token' => 813546
        ]);

        Withdraw::create([
            'user_id' => 1,
            'nominal' => 1500000,
            'token' => 527193
        ]);

        Withdraw::create([
            'user_id' => 3,
            'nominal' => 120000,
            'token' => null
        ]);

        Payments::create([
            'user_id' => 1,
            'no_payment' => 7428698194,
            'nominal' => 100000
        ]);

        Payments::create([
            'user_id' => 2,
            'no_payment' => 62819384719,
            'nominal' => 100000
        ]);

        Payments::create([
            'user_id' => 3,
            'no_payment' => 901381048,
            'nominal' => 100000
        ]);
    }
}
