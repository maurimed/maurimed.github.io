<?php  namespace Epro360\Repos\Locations;


use City;
use Epro360\Admin\Datatables\SSP;
use Config;

class CitiesRepository {


    public function getAll()
    {
        return City::with(['state', 'country'])->get();

    }


    public function getListByStateId($state_id)
    {
        return City::rememberForever()->orderBy('city_name','ASC')->where('state_id', $state_id)->lists('city_name', 'id');

    }



    public  function makeDatatable($table, $primaryKey, $get)
    {


        $columns = [
            [ 'db' => 'id', 'dt' => 0 ],
            [ 'db' => 'state_ab', 'dt' => 1 ],
            [ 'db' => 'state_id', 'dt' => 2 ],
            [ 'db' => 'name', 'dt' => 3 ],
            [ 'db' => 'zip',  'dt' => 4 ],

        ];

        $sql_details = [
            'user' => Config::get('database.connections.mysql.username'),
            'pass' => Config::get('database.connections.mysql.password'),
            'db'   => Config::get('database.connections.mysql.database'),
            'host' => Config::get('database.connections.mysql.host'),
        ];

        return json_encode(
            SSP::simple( $get, (array) $sql_details, $table, $primaryKey, $columns )
        );

    }
























}