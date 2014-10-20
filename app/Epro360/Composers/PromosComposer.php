<?php  namespace Epro360\Composers;


use Epro360\Repos\Promos\PromoRepository;

class PromosComposer {

    /**
     * @var PromoRepository
     */
    protected $promoRepo;

    /**
     * @param PromoRepository $promoRepo
     */
    function __construct(PromoRepository $promoRepo)
    {
        $this->promoRepo = $promoRepo;
    }


    public function compose($view)
    {
        $promo = $this->promoRepo->findPublished();

        $view->with('promo', $promo);
    }


} 