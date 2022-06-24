<?php
if (!defined('_INCODE')) die('Access deined...');

//* Khởi tạo khung 
function query($sql, $data = [], $statementStatus = false)
{
    global $conn;
    $query = false;
    try {
        $statement = $conn->prepare($sql);
        if (empty($data)) {
            $query = $statement->execute();
        } else {
            $query = $statement->execute($data);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    if ($statementStatus && $query) {
        return $statement;
    }
    return $query;
}

//* Thực hiện insert dữ liệu
function insert($table, $dataInsert)
{
    $keyArray = array_keys($dataInsert);
    $fieldString = implode(', ', $keyArray);
    $valueString = ':' . implode(', :', $keyArray);
    $sql = 'INSERT INTO' . $table . '(' . $fieldString . ') VALUES (' . $valueString . ')';
    return query($sql, $dataInsert);
}

//* Thực hiện update dữ liệu
function update($table, $dataUpdate, $conditions)
{
    $updateString = '';
    foreach ($dataUpdate as $key => $value) {
        $updateString .= $key . '=:' . $key . ', ';
    }
    $updateString = rtrim($updateString, ',');
    if (!empty($conditions)) {
        $sql = 'UPDATE' . $table . 'SET' . $updateString . 'WHERE' . $conditions;
    } else {
        $sql = 'UPDATE' . $table . 'SET' . $updateString;
    }
    return query($sql, $dataUpdate);
}

//*Thực hiện delete dữ liệu
function delete($table, $conditions)
{
    if (!empty($conditions)) {
        $sql = "DELETE FROM $table WHERE $conditions";
    } else {
        $sql = "DELETE FROM $table";
    }
    return query($sql);
}

//*Thực hiện read dữ liệu 
function getRaw($sql)
{
    $statement = query($sql, [], true);
    if (is_object($statement)) {
        $dataFetch = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $dataFetch;
    }
    return false;
}

//*Thực hiện trả về bản ghi đầu tiên
function getFirstRaw($sql)
{
    $statement = query($sql, [], true);
    if (is_object($statement)) {
        $dataFetch = $statement->fetch(PDO::FETCH_ASSOC);
        return $dataFetch;
    }
    return false;
}

//* Lấy dữ liệu theo field,condition
function getField($table, $field = '*', $conditions = '')
{
    $sql = 'SELECT' . $field . 'FROM' . $table;
    if (!empty($conditions)) {
        $sql .= 'WHERE' . $conditions;
    }

    return getRaw($sql);
}

function first($table, $field = '*', $conditions = '')
{
    $sql = 'SELECT' . $field . 'FROM' . $table;
    if (!empty($conditions)) {
        $sql .= 'WHERE' . $conditions;
    }

    return getFirstRaw($sql);
}
