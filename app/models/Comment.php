<?php

class Comment extends Eloquent
{
  protected $fillable = ['body'];
  protected $errors;

  public function post()
  {
    return $this->belongsTo('Post');
  }

  public function validate(array $params)
  {
    $validator = Validator::make($params, [
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
