<?php  namespace Epro360\Repos\Promos;

use Auth;
use DateTime;
use Epro360\Forms\PromoForm;
use Epro360\Services\ImageService;
use Input;
use Lang;
use Promo;

/**
 * Class PromoRepository
 * @package Epro360\Repos\Promos
 */
class PromoRepository {

    protected $promoForm;

    protected $imageService;

    function __construct(ImageService $imageService, PromoForm $promoForm)
    {
        $this->imageService = $imageService;
        $this->promoForm = $promoForm;
    }


    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return Promo::findOrFail($id);
    }

    public function create($input)
    {

        $this->promoForm->validate($input);

        $promo = new Promo;
        $promo->title = $input['title'];
        $promo->video = $input['video'];
        $promo->lang = $input['lang'];

        if(Input::hasFile('image'))
            $promo->image = $this->imageService->promoImage($input, $promo);

        $promo->published = array_key_exists('published', $input) ? 1 : 0;

        $promo->user_id = Auth::user()->id;

        return $promo->save();
    }



    public function update($input, $id)
    {

        $promo = $this->findById($id);
        $promo->title = $input['title'];
        $promo->video = $input['video'];
        $promo->lang = $input['lang'];

        $promo->published = array_key_exists('published', $input) ? 1 : 0;

        if(Input::hasFile('image'))
            $promo->image = $this->imageService->promoImage($input, $promo);

        $promo->user_id = Auth::user()->id;

        return $promo->save();
    }

    public  function destroy($id)
    {
        $promo = $this->findById($id);

        return $promo->delete();

    }


    public function findPublished()
    {
      return Promo::wherePublished(1)->whereLang(Lang::getlocale())->first();
    }


} 