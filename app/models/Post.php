<?php

class Post extends Eloquent
{
  protected $fillable = ['title', 'body'];
  protected $errors;

  public function validate(array $params)
  {
    $validator = Validator::make($params, [
      'title' => 'required',
      'body'  => 'required',
    ]);

    if ($validator->passes()) {
      return true;
    } else {
      $this->errors = $validator->messages();
      return false;
    }
  }

  public function errors()
  {
    return $this->errors;
  }
}
