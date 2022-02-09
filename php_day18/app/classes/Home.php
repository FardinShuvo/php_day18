<?php


namespace App\classes;


class Home
{
    protected $number;
    protected $i;
    protected $result;
    protected $check;

    public function __construct($post = null)
    {
        $this->number = $post['given_number'];
        $this->check = 'Prime';
    }

    public function index()
    {
        header('Location:action.php?pages=home');
    }
    public function primeNumber()
    {
        if ($this->number == 1 || $this->number==2)
        {
            return"your number $this->number is prime";
        }
        else
        {
            for ($this->i =2; $this->i < $this->number; $this->i++)
            {
                if ($this->number % $this->i == 0)
                {
                    return"your number $this->number is not prime";
                }
            }
            return"your number $this->number is prime";
        }
    }
}