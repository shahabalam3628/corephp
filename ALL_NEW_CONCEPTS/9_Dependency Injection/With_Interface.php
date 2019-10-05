<?php
interface Gmaps
{
    public function getCoordinateInfo ($address);
}
 
class GoogleMaps implements Gmaps
{
    public function getCoordinateInfo($address) 
	{
        return $address;
    }
} 
 
class OpenStreetMaps implements Gmaps
{
    public function getCoordinateInfo($address) 
	{
        $obj=new GoogleMaps();
		$obj->$address;
    }
}

$GoogleMap=new GoogleMaps();
$OpenStreetMaps=new OpenStreetMaps($GoogleMap);


echo $OpenStreetMaps->getCoordinateInfo('cc');


?>