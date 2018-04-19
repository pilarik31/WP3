<?php
require 'functions.php';
echo "Zadejte stáří budovy: ";
$buildingAge = readline();
if (IsBuildingToBeDestroyed($buildingAge))
{
  echo "Budova může být zničena.";
}
else
{
  echo "Budova nemůže být zničena";
}
