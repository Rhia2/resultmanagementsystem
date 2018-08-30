<?php

use Illuminate\Database\Seeder;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sch_session')->insert([
            'name' => '07/08',
            'description' => 'session frm 2007 to 2008',
        ]);

        DB::table('sch_session')->insert([
            'name' => '08/09',
            'Description' => 'session frm 2008 to 2009',
        ]);

        DB::table('sch_session')->insert([
            'name' => '09/010',
            'Description' => 'session frm 2009 to 2010',
        ]);

        DB::table('sch_session')->insert([
            'name' => '010/011',
            'Description' => 'session frm 2010 to 2011',
        ]);

        DB::table('sch_session')->insert([
            'name' => '011/012',
            'Description' => 'session frm 2011 to 2012',
        ]);

        DB::table('sch_session')->insert([
            'name' => '012/013',
            'Description' => 'session frm 2012 to 2013',
        ]);

        DB::table('sch_session')->insert([
            'name' => '013/014',
            'Description' => 'session frm 2013 to 2014',
        ]);

        DB::table('sch_session')->insert([
            'name' => '014/015',
            'Description' => 'session frm 2014 to 2015',
        ]);

        DB::table('sch_session')->insert([
            'name' => '015/016',
            'Description' => 'session frm 2015 to 2016',
        ]);

        DB::table('sch_session')->insert([
            'name' => '016/017',
            'description' => 'session frm 2016 to 2017',
        ]);

        DB::table('sch_session')->insert([
            'name' => '017/018',
            'description' => 'session frm 2017 to 2018',
        ]);
    }
}
