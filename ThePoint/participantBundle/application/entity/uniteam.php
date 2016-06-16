<?php

/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 5/1/2016
 * Time: 7:51 AM
 */
class uniteam {
    private $university;
    private $team_id;
    private $gender;
    private $country;
    private $team_members = array();
    private $player1;
    private $player2;
    private $player3;
    private $player4;
    private $player5;
    private $player6;
    private $player7;
    private $player8;
    private $tournament;

    /**
     * @return mixed
     */
    public function getTournament()
    {
        return $this->tournament;
    }

    /**
     * @param mixed $tournament
     */
    public function setTournament($tournament)
    {
        $this->tournament = $tournament;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }
    private $year;
    private $place;
    

    /**
     * @return mixed
     */
    public function getPlayer3()
    {
        return $this->player3;
    }

    /**
     * @param mixed $player3
     */
    public function setPlayer3($player3)
    {
        $this->player3 = $player3;
    }

    /**
     * @return mixed
     */
    public function getPlayer4()
    {
        return $this->player4;
    }

    /**
     * @param mixed $player4
     */
    public function setPlayer4($player4)
    {
        $this->player4 = $player4;
    }

    /**
     * @return mixed
     */
    public function getPlayer5()
    {
        return $this->player5;
    }

    /**
     * @param mixed $player5
     */
    public function setPlayer5($player5)
    {
        $this->player5 = $player5;
    }

    /**
     * @return mixed
     */
    public function getPlayer6()
    {
        return $this->player6;
    }

    /**
     * @param mixed $player6
     */
    public function setPlayer6($player6)
    {
        $this->player6 = $player6;
    }

    /**
     * @return mixed
     */
    public function getPlayer7()
    {
        return $this->player7;
    }

    /**
     * @param mixed $player7
     */
    public function setPlayer7($player7)
    {
        $this->player7 = $player7;
    }

    /**
     * @return mixed
     */
    public function getPlayer8()
    {
        return $this->player8;
    }

    /**
     * @param mixed $player8
     */
    public function setPlayer8($player8)
    {
        $this->player8 = $player8;
    }

    /**
     * @return mixed
     */
    public function getPlayer1()
    {
        return $this->player1;
    }

    /**
     * @param mixed $player1
     */
    public function setPlayer1($player1)
    {
        $this->player1 = $player1;
    }

    /**
     * @return mixed
     */
    public function getPlayer2()
    {
        return $this->player2;
    }

    /**
     * @param mixed $player2
     */
    public function setPlayer2($player2)
    {
        $this->player2 = $player2;
    }


    /**
     * @return array
     */
    public function getTeamMembers()
    {
        return $this->team_members;
    }

    /**
     * @param array $team_members
     */
    public function setTeamMembers($team_members)
    {
        $this->team_members = $team_members;
    }

    /**
     * @return mixed
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * @param mixed $university
     */
    public function setUniversity($university)
    {
        $this->university = $university;
    }

    /**
     * @return mixed
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * @param mixed $team_id
     */
    public function setTeamId($team_id)
    {
        $this->team_id = $team_id;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }


}
