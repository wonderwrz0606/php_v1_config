<?php 
/*This is a reminder for defination, but now not included in our system. 
 * And also,this is for database check*/

#Admin permission level
define("SUPER_ADMIN",100);
define("SUB_SUPER_ADMIN",80);
define("COMPANY_ADMIN",60);
define("SUB_COMPANY_ADMIN",40);
define("BASE_ADMIN",20);
define("SUB_BASE_ADMIN",1);

#Trip type defination
define("NORMAL_TRIP",0);
define("INSURANCE_TRIP",1);

#User type defination
define("NORMAL_USER",0);
define("INSURANCE_USER",1);

#User status
define("USER_INACTIVE",0);
define("USER_ACTIVED",1);

#Driver status
//driver status: inactive->verified->active
define("DRIVER_INACTIVE",0);
define("DRIVER_VERIFIED",2); // only have 0 and 1 before
define("DRIVER_ACTIVE",1);

#Admin user defination
// define("SUPER_ADMIN_ID",4); //already define in server_config.php

#Payment Status
define("UNPAID",0);
define("PAID",1);

#Server STATUS
define("SERVER_GOOD","OK");
define("SERVER_BAD","MAINTENANCE");

#Driver Type
define("OWNER_OPERATOR",0);
define("COMPANY_OPERATOR",1);

#Base Type
define("LIVERY",1);
define("BLACK_CAR",2);
define("LUXURY_LIMOUSINES",3);
define("PARATRANSIT",4);
define("COMMUTER_VAN",5);

#Trip Status
define("BOOKED",1);
define("ACCEPTED",2);
define("ARRIVED",3);
define("RUNNING",4);
define("PENDING",5);
define("COMPLETED",6);
define("CANCELLED",7);
define("REFUND",8);
define("EXCEPTION",9);

#Driver Duty Status
define("OFF_DUTY",0);
define("ON_DUTY",1);
define("ON_JOB",2);

#Trip Type
define("POINT_TO_POINT_TRIP",0);
define("BROKER_TRIP",1);
define("NEGOTIATED_TRIP",2);
define("NEGOTIATION_TRIP",3);
define("HOURLY_TRIP",5);
define("AIRPORT_DROPOFF_TRIP",6);
define("AIRPORT_PICKUP_TRIP",7);
define("SENIOR_CENTER_TRIP",8);

#Ratebook Type
define("ON_DEMAND",1);
define("BROKER",2);
define("SENIOR_CENTER",3);
define("CORPORATION",4);
define("PRIVATE_GROUP",5);
?>