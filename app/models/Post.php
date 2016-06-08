<?php  

class Post extends BaseModel
{
    
    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public static function validateAndCreate(Illuminate\Http\Request $request, User $user)
    {
        $validator = new PostValidator();
        $postCreator = new PostCreator();
        $imageAttacher = new AttachImageToPost();

        $validator->validate($request);
        $post = $postCreator->createPost($request, $user);
        $imageAttacher->attachImageFromRequest($request, $post);
        
        return $post;
    }

    public static function validateAndUpdate(Post $post, Illuminate\Http\Request $request, User $user)
    {
        $validator = new PostValidator();
        $postCreator = new PostUpdator();
        $imageAttacher = new AttachImageToPost();

        $validator->validate($request);
        $post = $postCreator->updatePost($post, $request, $user);
        $imageAttacher->attachImageFromRequest($request, $post);
        
        return $post;
    }
}
