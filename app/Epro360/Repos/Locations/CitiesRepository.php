<?php  namespace Epro360\Repos\Locations;


use City;
use Epro360\Admin\Datatables\SSP;
use Config;
use Epro360\Forms\Locations\CitiesForm;

class CitiesRepository {

    protected $citiesRepo;

    function __construct(CitiesForm $citiesRepo)
    {
        $this->citiesRepo = $citiesRepo;
    }

    public function getAll()
    {
        return City::paginate(3);

    }


    public function create($input)
    {
        $this->citiesRepo->validate($input);

        $city = new City;
        $city->name = $input['name'];
        $city->zip = $input['zip'];
        $city->state_id = $input['state'];
        $city->lat = $input['lat'];
        $city->lng = $input['lng'];
        return $city->save();

    }

    public function findById($id)
    {
//        return  Administrator::with('profile')->findOrFail($id);
    }

    public function getListByStateId($state_id)
    {
        return City::groupBy('name')->where('state_id', $state_id)->lists('name', 'id');

    }


    public function getZipListByCity($cityId)
    {
        $city = City::findOrFail($cityId);

        return City::where('name', 'like', $city->name.'%')->lists('zip', 'id');

    }

//    $this->citiesRepo->makeDatatable('cities', 'id', ['id', 'name', 'zip']);

    public  function makeDatatable($table, $primaryKey, $get)
    {


        $columns = [
            [ 'db' => 'id', 'dt' => 0 ],
            [ 'db' => 'state_ab', 'dt' => 1 ],
            [ 'db' => 'name', 'dt' => 2 ],
            [ 'db' => 'zip',  'dt' => 3 ],

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