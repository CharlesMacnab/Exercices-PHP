<?php

class FootBallTeam{

    private $nameTeam;
    private $numberoftitle;
    const MESSAGE = "Nombre d'equipe:";
    public static $numberofteams = 0;

    static function nbteams($variable){
        echo self::MESSAGE.self::$numberofteams.".";
    }

    public function getnameTeam(){
        return $this->nameTeam;
    }

    public function getnumberoftitle(){
        return $this->numberoftitle;
    }

    public function setnameTeam($name){
        $this->nameTeam = $name;
    }

    public function setnumberoftitle($number){
        $this->numberoftitle = $number;
    }

    public function __construct($nameTeam, $numberoftitle)
    {
        $this->nameTeam = $nameTeam;
        $this->numberoftitle = $numberoftitle;
        self::$numberofteams++;
    }

    public function __destruct()
    {
        echo "Destuctor\n";
    }

    function display(){
        echo " L'équipe ".$this->nameTeam." a ".$this->numberoftitle." titres."."Nombres d'équipes : ".self::$numberofteams."\n";
    }

}
//Etape 1
/*$objet = new FootBallTeam();
$objet->nameTeam="FCNantes";
$objet->numberoftitle=21;
$objet->display();*/

//Etape 2
/*$objet1 = new FootBallTeam();
$objet1->setnameTeam("FCNantes");
$objet1->setnumberoftitle(20);
$objet1->display();*/

//Etape 3
/*$objet1 = new FootBallTeam("FCNantes",19);
$objet1->display();*/

//Etape 4
$objet1 = new FootBallTeam("FCNantes",19);
$objet2 = new FootBallTeam("PSG",19);
$objet3 = new FootBallTeam("OM",19);
$objet4 = new FootBallTeam("FCDijon",19);
$objet4->display();
?>