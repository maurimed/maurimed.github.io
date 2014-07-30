<?php  namespace Epro360\Services; 

use File;
use Intervention\Image\Image;
use Str;

class ImageService {

    public function profileImage($input, $user)
    {
        if ($input['image'] != '')
        {

            $image = Image::make($input['image']->getRealPath());


             $pathToImage = public_path() . 'admin/images/profiles/'. folder_path($user).'/';

             $pathToPublicImage = public_path() . 'site/img/'. folder_path($user).'/';

            File::exists($pathToImage) or File::makeDirectory($pathToImage);
            File::exists($pathToPublicImage) or File::makeDirectory($pathToPublicImage);


             $this->deleteOldImage($user, $pathToImage);

             $imageName = Str::slug($user->email, '_') . '.' . $input['image']->getClientOriginalExtension();
             $user->image = $imageName;


            $image->save($pathToImage . $imageName)
                ->resize(700, 700)
                ->save($pathToImage .  'xl-' . $imageName)
                ->resize(500, 500)
                ->save($pathToImage .  'lg-' .$imageName)
                ->resize(300, 300)
                ->save($pathToImage .  'md-' .$imageName)
                ->resize(120, 120)
                ->save($pathToImage .  'sm-' .$imageName)
                ->resize(50, 50)
                ->save($pathToImage . 'thumb-' . $imageName);



        }

    }

    public function postImage($input, $post)
    {

        $image = Image::make($input['image']->getRealPath());


        $pathToImage = public_path(). 'site/img/posts/';

        File::exists($pathToImage) or File::makeDirectory($pathToImage);

        $imageName = Str::slug($input['image']->getClientOriginalName(), '_') . '.' . $input['image']->getClientOriginalExtension();
        $post->image = $imageName;
            $image->save($pathToImage . $imageName)
                ->crop(1140, 460)
                ->fill([255,255,255,255],0 ,255)
                ->save($pathToImage . $imageName)
                ->resize(50, 50)
                ->save($pathToImage . 'thumb-' . $imageName);

    }


    /**
     * @param $user
     * @param $pathToImage
     */
    private function deleteOldImage($user, $pathToImage)
    {
        File::delete($pathToImage . $user->image);
        File::delete($pathToImage . 'thumb-' . $user->image);
    }

} 