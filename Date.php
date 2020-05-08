<?php

	class Date
    {
        private $yaear;
        private $month;
        private $day;
        private $date;
        private $monthRu = [1=>'январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь' ];
        private $weekRu = [1 => 'Понедельник' , 'Вторник' , 'Среда' , 'Четверг' , 'Пятница' , 'Суббота' , 'Воскресенье' ];

        public function __construct($date = null)
        {
            // если дата не передана - пусть берется текущая
            if ($date == null){
                $this->yaear = date('Y');
                $this->month = date('m');
                $this->day = date('d');
                $this->date = date('Y-m-d');
            }
            else{
                $this->date = $date;
                $date = explode('-',$date);

                $this->yaear = $date['0'];
                $this->month = $date['1'];
                $this->day = $date['2'];
            }
        }

        public function getDay()
        {
            return $this->day;
        }

        public function getMonth($lang = null)
        {
            // возвращает месяц

            // переменная $lang может принимать значение ru или en
            // если эта не пуста - пусть месяц будет словом на заданном языке
            if ($lang == 'ru') {
                return $this->monthRu[$this->month] ;
            }
            elseif ($lang == 'en'){

                return date('F',mktime(0,0,0,$this->month));

            }
            elseif ($lang == null){
                return $this->month;
            }
        }

        public function getYear()
        {
            // возвращает год
            return $this->yaear;
        }

        public function getWeekDay($lang = null)
        {
            // возвращает день недели

            // переменная $lang может принимать значение ru или en
            // если эта не пуста - пусть месяц будет словом на заданном языке
            if ($lang == 'ru') {

                return $this->weekRu[$this->day] ;
            }
            elseif ($lang == 'en'){

                return date('L',mktime(0,0,0,$this->month,$this->day,$this->yaear));

            }
            elseif ($lang == null){
                return $this->day;
            }
        }

        public function addDay($value)
        {
            // добавляет значение $value к дню
            $this->date = date('Y-m-d',strtotime($this->date."+ $value day"));
            $this->day = date('d',strtotime("$this->date"));
            return $this;
        }

        public function subDay($value)
        {
            // отнимает значение $value от дня
            $date = date_create($this->date);
            date_modify($date, "- $value day");
            $this->date = date_format($date,'Y-m-d');
            $this->day = date_format($date,'d');
            return $this;
        }

        public function addMonth($value)
        {
            // добавляет значение $value к месяцу
            $date = new DateTime($this->date);
            $date->modify("+ $value month");
            $this->date = $date->format('Y-m-d');
            $this->month = $date->format('m');
            return $this;
        }

        public function subMonth($value)
        {
            // отнимает значение $value от месяца
            $date = new DateTime($this->date);
            $interval = new DateInterval('P'.$value.'M');
            $date->sub($interval);
            $this->month = $date->format('m');
            $this->date = $date->format('Y-m-d');
            return $this;
        }

        public function addYear($value)
        {
            // добавляет значение $value к году
            $date = DateTime::createFromFormat('Y-m-d',$this->date);
            $date->add(DateInterval::createFromDateString("$value years"));
            $this->yaear = $date->format('Y');
            $this->date = $date->format('Y-m-d');
            return $this;
        }

        public function subYear($value)
        {
            // отнимает значение $value от года
            $date = date_create_from_format('Y-m-d',$this->date);
            date_sub($date, date_interval_create_from_date_string("$value years"));
            $this->date = date_format($date,'Y-m-d');
            $this->yaear = date_format($date,'Y');
            return $this;
        }

        public function format($format)
        {
            // выведет дату в указанном формате
            // формат пусть будет такой же, как в функции date
            $date = DateTime::createFromFormat('Y-m-d',$this->date);
            return $date->format($format);
        }

        public function __toString()
        {
            // выведет дату в формате 'год-месяц-день'
            return "$this->date";
        }
    }