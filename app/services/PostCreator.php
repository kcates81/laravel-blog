<?php 

class PostCreator {
    public function createPost(Illuminate\Http\Request $request, User $user) {
        $post = new Post;

        $post->title = $request->input('title');
        $post->user_id = $user->id;
        $post->description = $request->input('description');
        $post->body = $request->input('body');

        if ($post->save() === false) {
            throw new RecordNotSavedException("Post failed to save, this should never happen. Investigate!");
        } 

        return $post;
    }
}
