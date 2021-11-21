<?php

use Illuminate\Database\Seeder;

class EmailLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_languages')->insert([
            [
                'code' => 'EVER',
                'name' => 'Email Verification',
                'lang' => 'jp',
            ],
            [
                'code' => 'EVER',
                'name' => 'Email Verification',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'FPASS',
                'name' => 'Forgot Password',
                'lang' => 'jp',
            ],
            [
                'code' => 'FPASS',
                'name' => 'Forgot Password',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'RPASS',
                'name' => 'Reset Password',
                'lang' => 'jp',
            ],
            [
                'code' => 'RPASS',
                'name' => 'Reset Password',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'BADD',
                'name' => 'Balance Add',
                'lang' => 'jp',
            ],
            [
                'code' => 'BADD',
                'name' => 'Balance Add',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'BSUB',
                'name' => 'Balance Subsctract',
                'lang' => 'jp',
            ],
            [
                'code' => 'BSUB',
                'name' => 'Balance Subsctract',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'SMAIL',
                'name' => 'Send Mail To User',
                'lang' => 'jp',
            ],
            [
                'code' => 'SMAIL',
                'name' => 'Send Mail To User',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'DSUCCESS',
                'name' => 'Deposit Success',
                'lang' => 'jp',
            ],
            [
                'code' => 'DSUCCESS',
                'name' => 'Deposit Success',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'DREFUND',
                'name' => 'Deposit Refund',
                'lang' => 'jp',
            ],
            [
                'code' => 'DREFUND',
                'name' => 'Deposit Refund',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'DAPPROVE',
                'name' => 'Deposit Approve',
                'lang' => 'jp',
            ],
            [
                'code' => 'DAPPROVE',
                'name' => 'Deposit Approve',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'SCONFIRM',
                'name' => 'Schedule Confirmation',
                'lang' => 'jp',
            ],
            [
                'code' => 'SCONFIRM',
                'name' => 'Schedule Confirmation',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'SREMINDER',
                'name' => 'Schedule Reminder',
                'lang' => 'jp',
            ],
            [
                'code' => 'SREMINDER',
                'name' => 'Schedule Reminder',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'SCANCEL',
                'name' => 'Schedule Cancel',
                'lang' => 'jp',
            ],
            [
                'code' => 'SCANCEL',
                'name' => 'Schedule Cancel',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'SCHANGE',
                'name' => 'Schedule Change',
                'lang' => 'jp',
            ],
            [
                'code' => 'SCHANGE',
                'name' => 'Schedule Change',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'SCONFIRMADMIN',
                'name' => 'Schedule Confirmation ADMIN',
                'lang' => 'jp',
            ],
            [
                'code' => 'SCONFIRMADMIN',
                'name' => 'Schedule Confirmation ADMIN',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'SCANCELADMIN',
                'name' => 'Schedule Cancel ADMIN',
                'lang' => 'jp',
            ],
            [
                'code' => 'SCANCELADMIN',
                'name' => 'Schedule Cancel ADMIN',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'SCHANGEADMIN',
                'name' => 'Schedule Change ADMIN',
                'lang' => 'jp',
            ],
            [
                'code' => 'SCHANGEADMIN',
                'name' => 'Schedule Change ADMIN',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'CMAIL',
                'name' => 'Contact Us Mail',
                'lang' => 'jp',
            ],
            [
                'code' => 'CMAIL',
                'name' => 'Contact Us Mail',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'PCHANGE',
                'name' => 'Password Change',
                'lang' => 'jp',
            ],
            [
                'code' => 'PCHANGE',
                'name' => 'Password Change',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'PCHANGESUCCESS',
                'name' => 'Password Change Successfully',
                'lang' => 'jp',
            ],
            [
                'code' => 'PCHANGESUCCESS',
                'name' => 'Password Change Successfully',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'WSUCCESS',
                'name' => 'Withdraw Success',
                'lang' => 'jp',
            ],
            [
                'code' => 'WSUCCESS',
                'name' => 'Withdraw Success',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'ICOMPETE',
                'name' => 'Invest Complete',
                'lang' => 'jp',
            ],
            [
                'code' => 'ICOMPETE',
                'name' => 'Invest Complete',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'BTRANSFER',
                'name' => 'Balance Transfer',
                'lang' => 'jp',
            ],
            [
                'code' => 'BTRANSFER',
                'name' => 'Balance Transfer',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'BRECEIVE',
                'name' => 'Balance Receive',
                'lang' => 'jp',
            ],
            [
                'code' => 'BRECEIVE',
                'name' => 'Balance Receive',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'GAUTHENABLE',
                'name' => 'Google Authentication Enable',
                'lang' => 'jp',
            ],
            [
                'code' => 'GAUTHENABLE',
                'name' => 'Google Authentication Enable',
                'lang' => 'pt-br',
            ],

            [
                'code' => 'GAUTHDISABLE',
                'name' => 'Google Authentication Disable',
                'lang' => 'jp',
            ],
            [
                'code' => 'GAUTHDISABLE',
                'name' => 'Google Authentication Disable',
                'lang' => 'pt-br',
            ],
        ]);
    }
}
