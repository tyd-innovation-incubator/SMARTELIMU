<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class PermissionsTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("permissions");
        $this->delete('permissions');

        \DB::table('permissions')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'all_functions',
                    'display_name' => 'All Functions',
                    'description' => NULL,
                    'permission_group_id' =>1,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'manage_faqs',
                    'display_name' => 'Manage FAQs',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'manage_code_values',
                    'display_name' => 'Manage Code Values i.e Dictionaries',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'manage_system_definitions',
                    'display_name' => 'Manage System Definitions',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'manage_role_permissions',
                    'display_name' => 'Manage Role and Permissions',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'manage_report_issues',
                    'display_name' => 'Manage Reported Issues',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'approve_payments',
                    'display_name' => 'Approve Payments',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'approve_advert_request',
                    'display_name' => 'Approve Advert Requests',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'approve_account_subscription',
                    'display_name' => 'Approve Account Subscription Requests',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'add_tender',
                    'display_name' => 'Add Tender/Cargo',
                    'description' => NULL,
                    'permission_group_id' =>2,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'add_service_offer',
                    'display_name' => 'Add Service Offer',
                    'description' => NULL,
                    'permission_group_id' =>2,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'add_commodity',
                    'display_name' => 'Add Commodity',
                    'description' => NULL,
                    'permission_group_id' =>2,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'search_tender',
                    'display_name' => 'Search Available Tenders/Cargoes',
                    'description' => NULL,
                    'permission_group_id' =>2,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'search_service_offer',
                    'display_name' => 'Search Available Service Offers',
                    'description' => NULL,
                    'permission_group_id' =>2,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'access_news',
                    'display_name' => 'Access News',
                    'description' => NULL,
                    'permission_group_id' =>3,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'access_events',
                    'display_name' => 'Access Events',
                    'description' => NULL,
                    'permission_group_id' =>3,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),

            16 =>
                array (
                    'id' => 17,
                    'name' => 'access_announcements',
                    'display_name' => 'Access Announcements',
                    'description' => NULL,
                    'permission_group_id' =>3,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),

            17 =>
                array (
                    'id' => 18,
                    'name' => 'access_forums',
                    'display_name' => 'Access Forums',
                    'description' => NULL,
                    'permission_group_id' =>3,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),

            18 =>
                array (
                    'id' => 19,
                    'name' => 'access_regulations',
                    'display_name' => 'Access Regulation Frameworks',
                    'description' => NULL,
                    'permission_group_id' =>3,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),
            19 =>
                array (
                    'id' => 20,
                    'name' => 'manage_announcement',
                    'display_name' => 'Manage Announcement',
                    'description' => NULL,
                    'permission_group_id' =>3,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),

            20 =>
                array (
                    'id' => 21,
                    'name' => 'manage_events',
                    'display_name' => 'Manage Events',
                    'description' => NULL,
                    'permission_group_id' =>3,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),

            21 =>
                array (
                    'id' => 22,
                    'name' => 'manage_news',
                    'display_name' => 'Manage News',
                    'description' => NULL,
                    'permission_group_id' =>3,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),

            22 =>
                array (
                    'id' => 23,
                    'name' => 'manage_regulation',
                    'display_name' => 'Manage Regulation Frameworks',
                    'description' => NULL,
                    'permission_group_id' =>3,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),

            23 =>
                array (
                    'id' => 24,
                    'name' => 'approve_user_registration',
                    'display_name' => 'Approve User Registration',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),

            24 =>
                array (
                    'id' => 25,
                    'name' => 'approve_company_registration',
                    'display_name' => 'Approve Company Registration',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),

            25 =>
                array (
                    'id' => 26,
                    'name' => 'manage_system_user',
                    'display_name' => 'Manage System User',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),

            26 =>
                array (
                    'id' => 27,
                    'name' => 'deactivate_user',
                    'display_name' => 'Deactivate User',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),

            27 =>
                array (
                    'id' => 28,
                    'name' => 'search_companies',
                    'display_name' => 'Browse directory of companies',
                    'description' => NULL,
                    'permission_group_id' =>4,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),

            28 =>
                array (
                    'id' => 29,
                    'name' => 'search_associations',
                    'display_name' => 'Browse directory of associations',
                    'description' => NULL,
                    'permission_group_id' =>4,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),

            29 =>
                array (
                    'id' => 30,
                    'name' => 'search_commodities',
                    'display_name' => 'Search Commodities',
                    'description' => NULL,
                    'permission_group_id' =>2,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),

            30 =>
                array (
                    'id' => 31,
                    'name' => 'manage_forums',
                    'display_name' => 'Manage Forums',
                    'description' => NULL,
                    'permission_group_id' =>3,
                    'ischecker' => 0,
                    'isadmin'=> 0,
                ),

            31 =>
                array (
                    'id' => 32,
                    'name' => 'access_admin_portal',
                    'display_name' => 'Access Admin Portal',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),

            32 =>
                array (
                    'id' => 33,
                    'name' => 'manage_services',
                    'display_name' => 'Manage Services',
                    'description' => 'Manage services i.e. user account subsrciption and advertisements',
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),

            33 =>
                array (
                    'id' => 34,
                    'name' => 'manage_user_invitations',
                    'display_name' => 'Manage User Invitations',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),
            34 =>
                array (
                    'id' => 35,
                    'name' => 'manage_help',
                    'display_name' => 'Manage Help Contents',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),

            35 =>
                array (
                    'id' => 36,
                    'name' => 'manage_polls',
                    'display_name' => 'Manage Polls',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),

            36 =>
                array (
                    'id' => 37,
                    'name' => 'manage_surveys',
                    'display_name' => 'Manage Surveys',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                    'isadmin'=> 1,
                ),
        ));
        $this->enableForeignKeys("permissions");

    }
}