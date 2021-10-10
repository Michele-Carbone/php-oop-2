<?php


class User
{
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $age;

    public function __construct($first_name, $last_name, $_email, $_age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $_email;
        $this->age = $_age;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getAge()
    {
        return $this->age;
    }
}



class PremiumUser extends User
{

    protected $premium_level;
    protected $discount;
    protected $discountAge;

    public function __construct($first_name, $last_name, $_email, $_age, $premium_level)
    {
        $this->premium_level = $premium_level;
        parent::__construct($first_name, $last_name, $_email, $_age);
    }

    public function getPremiumLevel()
    {
        return $this->premium_level;
    }

    //capire come inserire questa funzione per aumentare lo sconto
    public function setDiscountAge()
    {
        if ($this->age >= 65) {
            return $this->discountAge = 25;
        } elseif ($this->age > 25) {
            return $this->discountAge = 15;
        } else {
            return $this->discountAge = 0;
        }
    }

    public function getDiscount()
    {
        if ($this->premium_level > 0 && $this->premium_level <= 3) {
            switch ($this->premium_level) {
                case 1:
                    return $this->discount = 10;
                case 2:
                    return $this->discount = 25;
                case 3:
                    return $this->discount = 50;
            }
        } else if (!is_numeric($this->premium_level)) {
            throw new Exception('Valore premium non corretto');
        } else {
            throw new Exception('Non sei utente premium');
        }
    }
}
