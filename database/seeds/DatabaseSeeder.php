<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $maps = [
            [ "name" => "surf_xiv_v3b" ],
            [ "name" => "surf_vindictive" ],
            [ "name" => "surf_vegetables" ],
            [ "name" => "surf_torque" ],
            [ "name" => "surf_thrill3r_final" ],
            [ "name" => "surf_thembrium" ],
            [ "name" => "surf_the_gloaming" ],
            [ "name" => "surf_the_distance" ],
            [ "name" => "surf_superk" ],
            [ "name" => "surf_spongebob" ],
            [ "name" => "surf_space" ],
            [ "name" => "surf_skyworld" ],
            [ "name" => "surf_ski_2" ],
            [ "name" => "surf_skate_park_skill" ],
            [ "name" => "surf_rubiks" ],
            [ "name" => "surf_rocketman_v2" ],
            [ "name" => "surf_retroartz" ],
            [ "name" => "surf_rebel_resistance_final3" ],
            [ "name" => "surf_rebel_resistance_final2" ],
            [ "name" => "surf_pyramidduel_ice" ],
            [ "name" => "surf_poolday" ],
            [ "name" => "surf_pleb" ],
            [ "name" => "surf_piratebay_v8" ],
            [ "name" => "surf_phenomenon" ],
            [ "name" => "surf_pauze" ],
            [ "name" => "surf_omnibus" ],
            [ "name" => "surf_oldskool" ],
            [ "name" => "surf_ny_platinum" ],
            [ "name" => "surf_ny_exploder_prime" ],
            [ "name" => "surf_ny_bigloop_2008a" ],
            [ "name" => "surf_ny_advance" ],
            [ "name" => "surf_ny__resist" ],
            [ "name" => "surf_nemesis" ],
            [ "name" => "surf_mesa_aether" ],
            [ "name" => "surf_meister_v3_final2" ],
            [ "name" => "surf_megamachine" ],
            [ "name" => "surf_funpark_reloaded_v1" ],
            [ "name" => "surf_fruits2_final" ],
            [ "name" => "surf_fruits" ],
            [ "name" => "surf_frequency_no_jail" ],
            [ "name" => "surf_frequency" ],
            [ "name" => "surf_freedom" ],
            [ "name" => "surf_forbidden_ways_reloaded" ],
            [ "name" => "surf_forbidden_tomb" ],
            [ "name" => "surf_fastspiral_retro" ],
            [ "name" => "surf_exocube" ],
            [ "name" => "surf_empyrean" ],
            [ "name" => "surf_elk_clover_zeta" ],
            [ "name" => "surf_elites" ],
            [ "name" => "surf_elements_beta3" ],
            [ "name" => "surf_eclipse" ],
            [ "name" => "surf_dust_fury_V1_beta7" ],
            [ "name" => "surf_dust2_2008_final" ],
            [ "name" => "surf_dusk" ],
            [ "name" => "surf_discovery" ],
            [ "name" => "surf_crzyfrog_reloaded" ],
            [ "name" => "surf_cram" ],
            [ "name" => "surf_cp_desolation_v2" ],
        ];

        DB::table('maps')->insert($maps);
    }
}
