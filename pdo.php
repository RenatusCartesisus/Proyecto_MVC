<?php

// What is PDO?

// PHP Data Object. It is a data access abstraction layer

// ! PDO::setAttribute sets an attribute on the database handle.
// ? PDO::ATTR_ERRMODE: This attribute is used for error reporting. It can have one
// ? of the following values.
/*PDO::ERRMODE_SILENT: If the ATTR_ERRMODE is not set in the code, ERRMODE_SILENT is the default value of ATTR_ERRMODE attribute. It sets error codes. In silent mode, if there is an error in SQL, PDO will throw no exceptions; PDO will issue no warnings; it will simply return false. Value of PDO::ERRMODE_SILENT is 0. The script will run without generating any error or warning.

PDO::ERRMODE_WARNING: This value raises E_WARNING. In warning mode, if there is an error in SQL, PDO will issue warnings but script will continue running. Value of PDO::ERRMODE_WARNING is 1. The script will run with generating warning about the error.

PDO::ERRMODE_EXCEPTION: This value throws exceptions. In exception mode, if there is an error in SQL, PDO will throw exceptions and script will stop running. Value of PDO::ERRMODE_EXCEPTION is 2. The script will stop executing generating the error which throws the exception. 
*/

// TODO Recuerda que un dato es un valor asignado a las cosas.

// Para poder comunicarnos con una base de datos, necesitamos una API.

// * Una API es una interfaz de programacion de aplicaciones, que define clases, metodos, funciones y variables que el sistema necesita para llevar a cabo una tarea.