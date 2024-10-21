<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Photo;
use App\Services\AmazonRekognition;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    private $AmazonRekognition;
    public function __construct()
    {
        $this->AmazonRekognition = new AmazonRekognition();
    }

    public function index($id)
    {
        $job = Job::find($id);
        $photos = $job->photos()->paginate(60);
        $photoCount = $job->photos()->count();
        $showImage = false;
        return view("detail.detail", compact('photos', 'job', 'photoCount', 'showImage'));
    }

    public function findSimilar($id, Request $request) //
    {
        $job = Job::find($id);
        if ($request->hasFile('file')) {
            // Get the uploaded file
            $uploadedFile = $request->file('file');

            // Read the file contents
            $imageData = file_get_contents($uploadedFile->getRealPath());

            $collectionId = "job-".$id;

            $findImages = $this->AmazonRekognition->findSimilar($collectionId, $imageData);

            if ($findImages !== null)
            {
                $arrayResponse = $findImages["FaceMatches"];
                $arrayResult = [];
                foreach($arrayResponse as $res)
                {
                    $imageId = $res["Face"]["ImageId"];
                    $arrayResult[] = $imageId;
                }

                $photos = Photo::whereIn("aws_image_id", $arrayResult)->get();
                $photoCount = $photos->count();
                $usePaginate = 0;
                $success = "Có $photoCount bức ảnh được tìm thấy!";
                $showImage = true;
                return view("detail.detail", compact('job', 'photos', 'usePaginate', 'success', 'photoCount', 'showImage' ));
            }

            return redirect()->route("photos.index", $job->id)->with(["message" => "Hình ảnh phải có khuôn mặt!"]);


        }
    }
}
