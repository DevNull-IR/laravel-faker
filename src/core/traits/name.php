<?php

namespace DevNullIr\LaravelFaker\core\traits;

trait name
{
    protected $first_names = [
        "علی",
        "علیرضا",
        "محمد علی",
        "محمد جواد",
        "سید احمد",
        "محمد",
        "مهدی",
        "زینب",
        "فاطمه"
    ];

    protected $last_name = [
        "محمدی",
        "موسوی",
        "توحیدی",
        "مصباحی",
        "موسوی",
        "احمدی",
        "شهبازپور",
        "شکوری",
        "آرایش"
    ];

    protected $nick_name = [
        "علی",
        "علی",
        "ممل",
        "جوجاد",
        "سدامد",
        "ممد",
        "مِهدی",
        "زینب",
        "فاطی"
    ];
    public function addPeople(string $first_name, string $last_name, string $nick_name): bool
    {
        $this->first_names[] = $first_name;
        $this->last_name[] = $last_name;
        $this->nick_name[] = $nick_name;
        return true;
    }
    private $CountUser;
    public function CountUser(): int
    {
        return count($this->first_names);
    }
    private $firstName;
    public function firstName(): string
    {
        $user = rand(0, $this->CountUser()-1);
        return $this->first_names[$user];
    }
    private $lastName;
    public function lastName(): string
    {
        $user = rand(0, $this->CountUser());
        return $this->last_name[$user];
    }
    private $nickName;
    public function nickName(): string
    {
        $user = rand(0, $this->CountUser());
        return $this->nick_name[$user];
    }
    private $fullName;
    public function fullName(): string
    {
        $user = rand(0, $this->CountUser());
        return $this->first_names[$user] . ' ' . $this->last_name[$user];
    }
    private $meliCode;
    public function meliCode(): int
    {
        return rand(1234567890,9999999999);
    }

}
