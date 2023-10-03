<?php
namespace App\Services;

use Aws\Rekognition\RekognitionClient;

class AmazonRekognition
{
    private $client;
    public function __construct()
    {
        $this->client = new RekognitionClient([
            'version' => 'latest',
            'region' => env("AWS_REGION"),
            'credentials' => [
                'key' => env("AWS_ACCES_KEY"),
                'secret' => env("AWS_SECRET"),
            ],
        ]);
    }

    public function createCollection($collectionId): \Aws\Result
    {
        return $this->client->createCollection([
            'CollectionId' => $collectionId,
        ]);

    }

    public function indexFace($collectionId, $image)
    {
        $imageData = file_get_contents($image);

        $response = $this->client->indexFaces([
            'CollectionId' => $collectionId,
            'Image' => [
                'Bytes' => $imageData,
            ],
        ]);
        return isset($response['FaceRecords']) ? $response['FaceRecords'] : null;
    }

    public function seeCollection($collectionId)
    {
        $listFacesResponse = $this->client->listFaces([
            'CollectionId' => $collectionId,
        ]);

        return $listFacesResponse['Faces'];
    }

    public function findSimilar($collectionId, $inputImage) // $inputImage must be content
    {

        try {
            return $this->client->searchFacesByImage([
                'CollectionId' => $collectionId,
                'Image' => [
                    'Bytes' => $inputImage,
                ],
            ]);
        } catch (\Exception $e) {
            return null;
        }






    }

}

?>
