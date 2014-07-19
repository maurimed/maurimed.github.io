<?php namespace Epro360\Admin\Controllers;

use Auth;
use DateTime;
use Epro360\Repos\Posts\PostRepository;
use Input;
use Post;
use Redirect;
use View;

class PostsController extends \BaseController {

    private $postsRepo;

    function __construct(PostRepository $postsRepo)
    {
        $this->postsRepo = $postsRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = Post::with('owner')->get();
        return View::make('admin.posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->postsRepo->create( Input::all() );

        return Redirect::back()->withSuccessMessage('Post was created');
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = $this->postsRepo->findById($id);

        return View::make('admin.posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = $this->postsRepo->findById($id);

        return View::make('admin.posts.edit', compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $this->postsRepo->update( Input::all(), $id );

        return Redirect::to('dashboard/posts')->withSuccessMessage('Post was modified');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->postsRepo->destroy( $id );

        return Redirect::to('dashboard/posts')->withSuccessMessage('Post was deleted');
	}

}