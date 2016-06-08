<?php

class PostValidator {
    public $rules = [
        'title' => 'required|max:100',
        'body' => 'required|max:10000'
    ];

    public function validate(Illuminate\Http\Request $request) {
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            throw new ValidationException($validator, "The post input is invalid");
        }
    }
}