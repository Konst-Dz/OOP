<?php
class Interval
{
    private $date = [];
    private $date1;
    private $date2;

    public function __construct(Date $date1, Date $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
        $this->date['days'] = $this->toDays();
        $this->date['years'] = $this->toYears();
        $this->date['months'] = $this->toMonths();
    }

    public function toDays()
    {

        // вернет разницу в днях
        $date1 = $this->date1;
        $date2 = $this->date2;
        $diff1 = strtotime($date1);
        $diff2 = strtotime($date2);
        $diff = ($diff1 - $diff2)/(60*60*24);
        return abs(floor($diff));
    }

    public function toMonths()
    {
        $date1 = new DateTime($this->date1->format('Y-m-d'));
        $date2 = new DateTime($this->date2->format('Y-m-d'));
        $interval = $date1->diff($date2);
        return $interval->format('%m%');
        // вернет разницу в месяцах
    }

    public function toYears()
    {
        // вернет разницу в годах
        $date1 = $this->date1->getYear();
        $date2 = $this->date2->getYear();
        return abs($date1-$date2);
    }

    public function __toString()
    {
        // выведет результат в виде массива
        // ['years' => '', 'months' => '', 'days' => '']
        return (string) var_dump($this->date);
    }
}
