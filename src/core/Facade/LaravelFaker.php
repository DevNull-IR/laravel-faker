<?php

namespace DevNullIr\LaravelFaker\core\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool addPeople(string $first_name, string $last_name, string $nick_name)
 *
 * @property string $firstName
 *
 * @method static string firstName()
 *
 * @method static object Create()
 * @method static string lastName()
 * @method static string userAgent()
 * @method static string nickName()
 * @method static string fullName()
 * @method static string getAddress()
 * @method static string city()
 * @method static int meliCode()
 * @method static int phoneNumber()
 * @method static int phoneHome()
 * @method static string getSiteAddress()
 * @method static int codePost()
 * @method static int age(int $min = 10, int $max = 40)
 * @method static int price(bool $toman = false)
 * @method static string birthday(string $sign = '/', int $min = 1360,  int $max = 1400)
 * @method static string paragraph(int $CountChar = null)
 * @method static string getDomain()
 * @method static string getEmail()
 * @method static array paragraphs(int $CountChars = 2)
 * @method static bool addProductCategory(string $Category)
 * @method static array getAddressArray()
 * @method static array getMultiAddress(int $range = 3)
 * @method static int CountUser()
 * @see DevNullIr\LaravelFaker\core\Facade
 * @package \DevNullIr\LaravelFaler
 */
class LaravelFaker extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return config("laravel-faker.app");
    }
}
