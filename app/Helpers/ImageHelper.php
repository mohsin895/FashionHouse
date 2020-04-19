<?php
namespace App\Helpers;
/**
 *
 */
use App\Models\User;
use App\Helpers\GravatarHelper;

class ImageHelper{

public static function getUserImage($id)
{
$user = User::find($id);
$avatar_url = "";
if (!is_null($user)) {
if ($user->avatar==NULL) {

  if (GravatarHelper::validate_gravatar($user->email)) {

$avatar_url = GravatarHelper::gravatar_image($user->email,100);

  }else {
    // code...
  }
}else {
  // code...
}
}else {
//return redirect('/');
}
return $avatar_url;
}
}



 ?>
