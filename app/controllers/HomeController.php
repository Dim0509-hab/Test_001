// app/controllers/HomeController.php
class HomeController {
    public function index() {
        $user = new UserModel();
        $data = $user->getProfileData();
        
        require_once __DIR__ . '/../views/home/index.php';
    }
}
