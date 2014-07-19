<?php  namespace Epro360\Repos\Posts;

use Auth;
use DateTime;
use Epro360\Forms\PostForm;
use Epro360\Services\ImageService;
use Input;
use Lang;
use Laracasts\Validation\FormValidationException;
use Post;

/**
 * Class PostRepository
 * @package Epro360\Repos\Posts
 */
class PostRepository {

    protected $postForm;

    protected $imageService;

    function __construct(ImageService $imageService, PostForm $postForm)
    {
        $this->imageService = $imageService;
        $this->postForm = $postForm;
    }

    /**
     * @param $num
     * @return mixed
     */
    public function getPaginated($num)
    {
        return Post::wherePublished(1)->whereLang(Lang::getlocale())->with('owner')->orderBy('published_at', 'DESC')->paginate($num);
    }


    /**
     * @param $slug
     * @return mixed
     */
    public function findBySlug($slug)
    {
        return Post::with([
            'owner' => function($query){
                $query->get(['id', 'username', 'image', 'userable_type', 'userable_id']);
            },
            'owner.userable'
        ])->whereSlug($slug)->wherePublished(1)->firstOrFail(['id', 'image', 'title', 'body', 'user_id', 'published_at']);
    }



    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return Post::findOrFail($id);
    }



    public function create($input)
    {

        $this->postForm->validate($input);

        $post = new Post;
        $post->title = $input['title'];
        $post->body = $input['body'];
        $post->lang = $input['lang'];

        if(Input::hasFile('image'))
            $this->imageService->postImage($input, $post);

        $this->makePublished($input, $post);

        $post->user_id = Auth::user()->id;

        return $post->save();
    }



    public function update($input, $id)
    {

        $post = $this->findById($id);
        $post->title = $input['title'];
        $post->body = $input['body'];
        $post->lang = $input['lang'];

        $this->imageService->postImage($input, $post);

        $this->makePublished($input, $post);

        $post->user_id = Auth::user()->id;

        return $post->save();
    }

    public  function destroy($id)
    {
        $post = $this->findById($id);

        return $post->delete();

    }

    /**
     * @param $input
     * @param $post
     */
    private function makePublished($input, $post)
    {
        if ($input['published'] == 1)
        {
            $post->published = $input['published'];
            $post->published_at = new DateTime;
        } else
        {
           $post->published = $input['published'];
        }
    }


} 