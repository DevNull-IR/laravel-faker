<?php

namespace DevNullIr\LaravelFaker\core\traits;

trait number
{
    private $phoneNumber;
    public function phoneNumber(): int
    {
        $phoneCode = '091';
        return intval($phoneCode . rand(11111111,99999999));
    }
    private $phoneHome;
    public function phoneHome(): int
    {
        $phonepass = [
            '051',
            '021',
            '026',
            '025',
            '086',
            '024',
            '023',
            '081',
            '028',
            '031',
            '044',
            '011',
            '074',
            '083',
            '045',
            '017',
            '041',
            '054',
            '087',
            '071',
            '066',
            '034',
            '056',
            '013',
            '077',
            '076',
            '061',
            '038',
            '058',
            '084',
            '035'
        ];
        return intval($phonepass[$this->rand($phonepass)] . rand(11111111,99999999));
    }
    private $codePost;
    public function codePost(): int
    {
        return rand(1111111111,9999999999);
    }
    private $age;
    public function age(int $min = 10, int $max = 40): int
    {
        return rand($min, $max);
    }
    private $birthday;
    public function birthday(string $sign = '/', int $min = 1360,  int $max = 1400): string
    {
        return rand($min, $max) . $sign . rand(1, 12) . $sign . rand(1, 29);
    }
    private $price;
    public function price(bool $toman = false): int
    {
        $price = rand(1000,1000000);
        return $toman ? $price : $price . 0;
    }
}
