<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Model\Media;
/**
 * 
 */
class Part extends Model
{
	
	public static function mediaUpload(Request $request)
	{
		$media = new Media();
    	$media->fill($request->all());

    	// save media
        if($request->hasFile('mediaFile')){
            // name media
            $filename = uniqid(). "." . $request->mediaFile->extension();
            // save media
            $path = $request->mediaFile->storeAs('medias/part', $filename);
            $media->mediaFile = $path;
        }
        $media->save();

        return $media;
	}
}
?>