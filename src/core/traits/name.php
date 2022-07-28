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
        "مهدی"
    ];

    protected $last_name = [
        "محمدی",
        "موسوی",
        "توحیدی",
        "مصباحی",
        "موسوی",
        "احمدی",
        "شهبازپور"
    ];

    protected $nick_name = [
        "علی",
        "علی",
        "ممل",
        "جوجاد",
        "سدامد",
        "ممد",
        "مِهدی"
    ];

    public function addPeople(string $first_name, string $last_name, string $nick_name): bool
    {
        $this->first_names[] = $first_name;
        $this->last_name[] = $last_name;
        $this->nick_name[] = $nick_name;
        return true;
    }

    public function CountUser(): int
    {
        return count($this->first_names);
    }

    public function firstName(): string
    {
        $user = rand(0, $this->CountUser());
        return $this->first_names[$user];
    }

    public function lastName(): string
    {
        $user = rand(0, $this->CountUser());
        return $this->last_name[$user];
    }

    public function nickName(): string
    {
        $user = rand(0, $this->CountUser());
        return $this->nick_name[$user];
    }

    public function fullName(): string
    {
        $user = rand(0, $this->CountUser());
        return $this->first_names[$user] . ' ' . $this->last_name[$user];
    }

    public function meliCode(): int
    {
        return rand(1234567890,9999999999);
    }

}
