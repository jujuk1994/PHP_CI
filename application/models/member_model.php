<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class member_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function getAllMember()
    {
        
        include (APPPATH.'libraries/adodb/adodb-exceptions.inc.php');
		include (APPPATH.'libraries/adodb/adodb.inc.php');
		$db_host = 'DESKTOP-50BHIES\JRAHMANTO';
	    $db_user = 'sa';
	    $db_pass = 'P@ssw0rd2019';
	    $db_data = 'db_crud';
        $db = NewADOConnection('odbc_mssql');
	    $dsn = "Driver={SQL Server};Server={" . $db_host . "};Database={" . $db_data . "};";
	    $db->Connect($dsn, $db_user, $db_pass) or die($db->ErrorMsg());
	    $db->SetFetchMode(ADODB_FETCH_ASSOC);
        $query = "SELECT * FROM m_member";
        return $rcd['value'] = $db->Execute($query);
    }
}