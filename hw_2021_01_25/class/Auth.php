<?php


class Auth
{
    private static $userIdKey='user_id';
    private static $userFullNameKey='user_full_name';
    private static $userAgeKey='user_age';

    public static function isAuth(){
        return isset($_SESSION[self::$userIdKey]);
    }
    public static function authLogin($mysqli, $login, $password)
    {
        $auth_result = null;
        self::authLogout();
        if (!($mysqli->connect_error)) {
            $escaped_login = $mysqli->real_escape_string($login);
            $escaped_password = $mysqli->real_escape_string($password);
            $query = "SELECT id, CONCAT(name,' ',surname), age FROM user WHERE LOWER(login)=LOWER('{$escaped_login}') and LOWER(password_hash) = LOWER('$escaped_password')";

            if ($result = $mysqli->query($query)) {
                if ($row = $result->fetch_row()) {
                    $_SESSION[self::$userIdKey] = $row[0];
                    $_SESSION[self::$userFullNameKey] = $row[1];
                    $_SESSION[self::$userAgeKey] = $row[2];
                } else {
                    $auth_result = "не корректные данные";
                }
                $result->close();
            } else {
                $auth_result = "ошибка подключения к серверу";
            }
        } else {
            $auth_result = "ошибка подключения к серверу";
        }
        return $auth_result;
    }
    public static function authLogout()
    {
        unset($_SESSION[self::$userIdKey]);
        unset($_SESSION[self::$userFullNameKey]);
        unset($_SESSION[self::$userAgeKey]);
    }

    public static function getUserFullName()
    {
        return $_SESSION[self::$userFullNameKey];
    }

    public static function getUserAge()
    {
        switch (substr($_SESSION[self::$userAgeKey], -1)) {
            case 1 :
            {
                $age_suffix = 'год';
                break;
            }
            case 2 :
            case 3 :
            case 4 :
            {
                $age_suffix = 'года';
                break;
            }
            default :
            {
                $age_suffix = 'лет';
                break;
            }
        }

        return $_SESSION[self::$userAgeKey] . ' ' . $age_suffix;
    }
}