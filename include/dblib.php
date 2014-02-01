<?php 
// Last update: 2013-12-26
require_once(DOCROOT."/include/db.php");


/** 
 * The value can be:
 * - 0 or
 * - CURRENT_TIMESTAMP 
 * Use 0 when the datatype of the primary key is "int auto_increment".
 */
function dbGenerateValueForId($type) {
    if ($type == "timestamp") {
        return "current_timestamp";
    } else if ($type == "date") {
        return "current_timestamp";
    } else { // "int auto_increment"
        return 0;
    }
}

function dbConnect($host, $user, $passwd, $database) {
    $link = mysql_connect($host, $user, $passwd) or die("ERROR, Could not connect");
    mysql_select_db($database) or die("ERROR, Could not select database");
    
    return $link;
}

function _dbResourceToResultSet($resource) {
    $resultSet = "";
    while ($row = mysql_fetch_assoc($resource)) {
        $resultSet[] = $row;
    }
    return $resultSet;
}

function dbGetAffectedRows($host, $user, $passwd, $database, $table, $wherecolvals) {
    $link = dbConnect($host, $user, $passwd, $database);
    $sql = "select * from $table where $wherecolvals";
    if (DBLIB_VERBOSE) { print("<p>DBG, SQL: $sql</p>"); }
    
    $resource = mysql_query($sql) or die("ERROR, SQL: <b>$sql</b> failed ".mysql_error());
    if (is_resource($resource)) {
        mysql_free_result($resource);
    }
    $affectedRows = mysql_affected_rows();
    mysql_close($link);
   
    return $affectedRows;
}

function _dbExecSql($host, $user, $passwd, $database, $sql, $die=0) {
    $link = dbConnect($host, $user, $passwd, $database);
    $resultSet = null;
    $resource = mysql_query($sql);
    if (mysql_errno() != 0) {
        if ($die == 1) {
            die("ERROR, SQL: <b>$sql</b> failed ".mysql_error());
        } else {
            print("WARNING, ".mysql_errno()." : ".mysql_error()."<br/>");
            return mysql_errno();
        }
    }

    if (is_resource($resource)) {
        $resultSet = _dbResourceToResultSet($resource);
        mysql_free_result($resource);
    }    

    mysql_close($link);
    return $resultSet;
}

function dbRetrieve($host, $user, $passwd, $database, $sql) {
    return _dbExecSql($host, $user, $passwd, $database, $sql, 1);
}

function dbFieldNames($host, $user, $passwd, $database, $table) {
    $link = dbConnect($host, $user, $passwd, $database);

    $sql = "describe $table";
    $resource = mysql_query($sql) or die("ERROR, SQL: <b>$sql</b> failed ".mysql_error());

    if (is_resource($resource)) {
        while ($row = mysql_fetch_assoc($resource)) {
            // Field, Type, Null, Key, Default, Extra
            $fieldNames[] = $row["Field"];
        }        
        mysql_free_result($resource);
    }    
    mysql_close($link);
    return $fieldNames;

}


/* dbXxxTab functions.
 */
function dbCrTab($host, $user, $passwd, $database, $table, $coldef) { 
    $sql = "create table $table ($coldef)";
    if (DBLIB_VERBOSE) { print("<p>DBG, SQL: $sql</p>\n"); }
    return _dbExecSql(HOST, USER, PASSWD, DATABASE, $sql);
}

function dbDelTab($host, $user, $passwd, $database, $table) { 
    return _dbExecSql(HOST, USER, PASSWD, DATABASE, "delete from $table");
}

function dbDropTab($host, $user, $passwd, $database, $table) { 
    return _dbExecSql(HOST, USER, PASSWD, DATABASE, "drop table $table");
}

/* dbXxxRow functions.
 */
function dbDelRow($host, $user, $passwd, $database, $table, $id) {
    return _dbExecSql($host, $user, $passwd, $database, "delete from $table where id='$id'");
}

function dbGetAll($host, $user, $passwd, $database, $table, $orderby) {
    return _dbExecSql($host, $user, $passwd, $database, "select * from $table $orderby", 0);
}

function dbGetRow($host, $user, $passwd, $database, $table, $id) { 
    $rows = dbRetrieve($host, $user, $passwd, $database, "select * from $table where id='$id'");
    foreach ($rows as $row) {
        return $row;
    }
    return null;
}

function dbInsRow($host, $user, $passwd, $database, $table, $colvals) { 
    $sql = "insert into $table set $colvals";
    if (DBLIB_VERBOSE) { print("<p>DBG, SQL: $sql</p>"); }
    return _dbExecSql(HOST, USER, PASSWD, DATABASE, $sql);
}

function dbUpdRow($host, $user, $passwd, $database, $table, $id, $colvals) { 
    $sql = "update $table set $colvals where id='$id'";
    if (DBLIB_VERBOSE) { print("<p>DBG, SQL: $sql</p>"); }
    return _dbExecSql(HOST, USER, PASSWD, DATABASE, $sql);
}

function dbUpdAll($host, $user, $passwd, $database, $table, $colvals, $wherecolvals) { 
    $sql = "update $table set $colvals where $wherecolvals";
    if (DBLIB_VERBOSE) { print("<p>DBG, SQL: $sql</p>"); }
    return _dbExecSql(HOST, USER, PASSWD, DATABASE, $sql);
}

/* Helper function.
 */
function dbConst($table, $orderby, $pkeytype, $coldef) { 
    /*
     * pkeytype :: "int auto_increment" of  "timestamp"
     * coldef   :: "text varchar(80), ..."
     */
    switch ($pkeytype) {
    case "autoincr" : $pkeytype = "int auto_increment"; break;
    }
    
    $table   = ($table   != null)? $table   : phpBasename();
    $orderby = ($orderby != null)? "order by $orderby" : null;
    $coldef  = ($coldef  != null)? "id $pkeytype primary key, $coldef" : null;
    
    define("TABLE",     $table);
    define("ORDERBY",   $orderby);
    define("PKEYTYPE",  $pkeytype); 
    define("COLDEF",    $coldef);
}

function dbConstPrint() {
    print("<pre>");
    print("\nTABLE   : ".TABLE);
    print("\nORDERBY : ".ORDERBY);
    print("\nPKEYTYPE: ".PKEYTYPE);
    print("\nCOLDEF  : ".COLDEF);
    print("\n</pre>\n");
}

function dbResultSetToHtmlTable($resultSet) {
	if ($resultSet == "") { return; }
    print("<table border>\n");
	foreach ($resultSet as $row) {
        print("<tr>");
        foreach ($row as $fld) {
            print("<td style='vertical-align: top;  white-space: pre; '>$fld");
        }		
        print("</tr>\n");
	}
    print("</table>\n");
}

?>