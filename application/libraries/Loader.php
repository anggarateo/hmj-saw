<?php
/**
  * A simple class which handles loading multiple-databases in codeigniter
  */

class Loader {
  public function __construct(){
    $this->load();
  }

  /**
  * Load the databases and ignore the old ordinary CI loader which only allows one
  */
  public function load(){
    $CI = & get_instance();

    $CI->db = $CI->load->database('default', TRUE);
    $CI->db_master = $CI->load->database('master', TRUE);
  }
}
