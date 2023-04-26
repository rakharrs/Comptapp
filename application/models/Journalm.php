<?php
class Journalm extends CI_Model
{
    public $month_duration;
    public function __construct()
    {
        parent::__construct();
        $this->set_month_duration();
    }

    public function getJournal($year,$month_id){
        $month =sprintf('%s-%s',$year,$this->month_duration[$month_id]['format']); 
        $this->db->where("year_month >=",$month);
        $this->db->where("year_month <=",$month);
        return $this->db->get('v_journal_monthly')->result_array();
    }

    public function set_month_duration(){
        $this->month_duration = array(
            array("format"=>"01"),
            array("format"=>"02"),
            array("format"=>"03"),
            array("format"=>"04"),
            array("format"=>"05"),
            array("format"=>"06"),
            array("format"=>"07"),
            array("format"=>"08"),
            array("format"=>"09"),
            array("format"=>"10"),
            array("format"=>"11"),
            array("format"=>"12"),
        );
    }
    
}