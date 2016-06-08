<?php 

class AttachImageToPost {
    public function attachImageFromRequest(Illuminate\Http\Request $request, Post $post) {
        if ($request->hasFile('img_url') === false) {
            return;
        }

        $img = $request->file('img_url');
        // create a new name for the file based on the id of the recently saved post,
        // and the original file extension
        $imgName = $post->id . '.' . $img->getClientOriginalExtension();
        // get the absolute file path to move the file to
        $systemPath = public_path() . '/uploads/';
        // move the image and rename it
        $img->move($systemPath, $imgName);
        // set the image path property of the post object and save it to the database
        $post->img_url = '/uploads/' . $imgName;

        $post->save();
    }
}