<?php

require_once("class.Exceptions.php");

class SQL
{
	public $connection;

	private $db_server  = "";
	private $db_user    = "";
	private $db_passw   = "";
	private $db_name	= "";

	function __construct()
	{
		$core_settings = parse_ini_file("config.ini", true);
		$localConnection = $core_settings[$_SERVER[REMOTE_ADDR]];

		//if ($_SERVER['SERVER_ADDR'] == '127.0.0.1')
        //{
            $this->db_user   = $localConnection["DB_User"];
            $this->db_passw  = $localConnection["DB_Pass"];
            $this->db_server = $localConnection["DB_Host"];
            $this->db_name   = $localConnection["DB_Name"];
        //}
        $this->_connectToDB();
	}

	function _connectToDB()
	{
		if (!is_resource($this->connection))
		{
			$this->connection = mysql_connect($this->db_server, $this->db_user, $this->db_passw) or $this->_throwSQLException('Could not connect to the database.');
			@mysql_select_db($this->db_name, $this->connection) or $this->_throwSQLException('Could not select the database.');
		}
	}
	function _connection()
	{
		$this->_connectToDB();
		return $this->connection;
	}
	function _select($query)
	{
		if (strlen($query) > 0)
		{
			$this->_connectToDB();
			$result = mysql_query($query, $this->connection) or $this->_throwSQLException('Problem occured running select query : '.$query.' : error : '.mysql_error());
			if (@mysql_num_rows($result) > 0)
			{
				return $result;
			}
		}

		return FALSE;
	}

	function _selectSingle($query)
	{
		if (strlen($query) > 0)
		{
			$result = $this->_select($query);
			if ($result !== false)
			{
				return mysql_fetch_assoc($result);
			}
		}
		return false;
	}

	function _update($query)
	{
		if (strlen($query) > 0)
		{
			$this->_connectToDB();
			mysql_query($query, $this->connection) or $this->_throwSQLException('Problem occured running update query : '.$query.' : error : '.mysql_error());
			return TRUE;
		}
		return FALSE;
	}

	function _insert($query)
	{
		if (strlen($query) > 0)
		{
			$this->_connectToDB();
			mysql_query($query, $this->connection) or $this->_throwSQLException('Problem occured running insert query : '.$query.' : error : '.mysql_error());
			if ( ( $id = mysql_insert_id($this->connection) ) != 0)
			{
                            return $id;
			}
		}
		return FALSE;
	}

	function _delete($query)
	{
		if (strlen($query) > 0)
		{
			$this->_connectToDB();
			$result = mysql_query($query, $this->connection) or $this->_throwSQLException('Problem occured running delete query : '.$query.' : error : '.mysql_error());
			return $result;
		}
		return FALSE;
	}

	function _throwSQLException($message)
	{
		throw new SQLException($message);
	}

	function __destruct()
	{
		if (is_resource($this->connection))
		{
			mysql_close($this->connection);
		}
	}
}

?>
