<?php  namespace Epro360\Repos\Locations;


use Continent;

class ContinentsRepository {


    public function continentsList()
    {
        return Continent::lists('name', 'id');
    }

    public function create($input)
    {
        $country = new Continent;
        $country->name = $input['name'];
        return $country->save();

    }

    public function update($input,$id)
    {

        $country =$this->findById($id);
        $country->name = $input['name'];
        return $country->save();

    }

    public function findById($id)
    {
        return  Continent::findOrFail($id);
    }

    public function destroy($id)
    {
        return Continent::destroy($id);
    }


} 