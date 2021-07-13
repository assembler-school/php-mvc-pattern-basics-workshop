<?php

require_once MODELS . "employeeModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION


//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    try {
        $employees = get();
        require_once VIEWS . "/employee/employee.php";
    } catch (exception $e) {
        error($e->getMessage());
    }
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
    //
    if ($_REQUEST['id'] !== null && $_REQUEST['id'] !== "") {
        error('ERROR - El id de la query no puede estar vacio.');
    }

    try {
        $employe = getEmployeeById($_REQUEST['id']);
        require_once VIEWS . "/employee/employeeDashboard.php";
    } catch (exception $e) {
        error($e->getMessage());
    }
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
