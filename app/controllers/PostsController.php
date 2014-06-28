<?php


use Epro360\Repos\Posts\PostRepository;

/**
 * Class PostsController
 */
class PostsController extends \BaseController {

    /**
     * @var Epro360\Repos\Posts\PostRepository
     */
    private $postsRepo;

    /**
     * @param PostRepository $postsRepo
     */
    function __construct(PostRepository $postsRepo)
    {
        $this->postsRepo = $postsRepo;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
	{
        $posts = $this->postsRepo->getPaginated(5);

		return View::make('site.posts.index', compact('posts'));
	}


    /**
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
	{
        $post = $this->postsRepo->findBySlug($slug);

        return View::make('site.posts.show', compact('post'));
	}



}
