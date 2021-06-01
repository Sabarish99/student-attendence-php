

<?php header("Location: http://127.0.0.1:5000/upload"); 

/*require 'vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

// Set Amazon s3 credentials
$client = S3Client::factory([
    'version' => 'latest',
    'region'  => 'us-east-1',
    'credentials' => [
        'key'    => "ASIA3SKLCB3XVTEKCZAU",
        'secret' => "yrI7lokhPEJxTVKLd8+IdidFZZ9Bj+3rkf2aSp0+"
    ]
 ]);


/*$client = S3Client::factory(
  array(
    'key'    => "ASIA3SKLCB3XVTEKCZAU",
    'secret' => "yrI7lokhPEJxTVKLd8+IdidFZZ9Bj+3rkf2aSp0+"
  )
);

$name = $_FILES['fileToUpload']['name'];
$size = $_FILES['fileToUpload']['size'];
$tmp = $_FILES['fileToUpload']['tmp_name'];
$bucket = 'student-attendance-system-cld';
$key_name_actual = time().".csv";

try {
  $client->putObject(array(
    'Bucket'=>$bucket,
    'Key' =>  $key_name_actual,
    'SourceFile' => $tmp,
    'StorageClass' => 'REDUCED_REDUNDANCY'
  ));
  $message = "S3 Upload Successful.";
  $s3file='http://'.$bucket.'.s3.amazonaws.com/'.$key_name_actual;
echo 'S3 File URL:'.$s3file;

} catch (S3Exception $e) {
  // Catch an S3 specific exception.
  echo $e->getMessage();
}
*/
?>