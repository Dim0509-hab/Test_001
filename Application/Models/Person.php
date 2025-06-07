class Person {
    public $name;
    public $surname;
    public $position;
    public $contacts;
    public $profileImage;

    public function __construct($name, $surname, $position, array $contacts) {
        $this->name = $name;
        $this->surname = $surname;
        $this->position = $position;
        $this->contacts = $contacts;
    }
}
