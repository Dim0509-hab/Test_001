class Image {
    private $image;
    private $width;
    private $height;

    public function __construct($imagePath) {
        if (file_exists($imagePath)) {
            $this->image = imagecreatefromjpeg($imagePath);
            $this->width = imagesx($this->image);
            $this->height = imagesy($this->image);
        } else {
            throw new Exception('Файл не найден');
        }
    }

    public function getThumbnail($width = 100, $height = 100) {
        $thumb = imagecreatetruecolor($width, $height);
        imagecopyresampled($thumb, $this->image, 0, 0, 0, 0, $width, $height, $this->width, $this->height);
        return $thumb;
    }

    public function outputImage($image) {
        header('Content-Type: image/jpeg');
        imagejpeg($image);
        imagedestroy($image);
    }
}
