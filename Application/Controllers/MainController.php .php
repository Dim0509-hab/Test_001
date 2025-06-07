class MainController {
    public function index() {
        $person = new Person(
            'Пётр',
            'Кузнецов',
            'Специалист по разработке',
            [
                'email' => 'petr.kuznetsov@example.com',
                'phone' => '+7 (999) 123-45-67',
                'website' => 'https://kuznetsov.com'
            ]
        );

        try {
            $image = new Image('path/to/profile.jpg');
            $thumbnail = $image->getThumbnail(150, 150);
            $person->profileImage = $thumbnail;
        } catch (Exception $e) {
            $person->profileImage = null;
        }

        require_once __DIR__. '/../views/main/index.php';
    }
}
