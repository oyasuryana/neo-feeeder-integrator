<?php namespace App\Controllers;${"\x47\x4c\x4fB\x41LS"}["\x67\x6f\x64qb\x66"]="\x6c\x6fg\x67\x65\x72";${"\x47\x4cO\x42AL\x53"}["z\x7a\x64h\x6c\x78"]="\x72\x65spo\x6e\x73\x65";${"G\x4cO\x42\x41\x4c\x53"}["\x71\x78\x70dd\x64\x72kw\x72"]="re\x71\x75\x65\x73t";use CodeIgniter\Controller;use CodeIgniter\HTTP\CLIRequest;use CodeIgniter\HTTP\IncomingRequest;use CodeIgniter\HTTP\RequestInterface;use CodeIgniter\HTTP\ResponseInterface;use Psr\Log\LoggerInterface;use App\Libraries\Feeder;use App\Libraries\Versiapp;use App\Libraries\Cekserver;use App\Models\MBiodata;class BaseController extends Controller{protected$request;protected$feeder;protected$versiapp;protected$cekserverfeeder;protected$biodata;protected$helpers=['form','filesystem'];public function initController(RequestInterface$request,ResponseInterface$response,LoggerInterface$logger){parent::initController(${${"\x47LOBA\x4cS"}["q\x78\x70\x64\x64\x64\x72\x6b\x77r"]},${${"\x47L\x4f\x42\x41L\x53"}["z\x7ad\x68\x6c\x78"]},${${"\x47\x4cO\x42\x41LS"}["\x67\x6f\x64q\x62\x66"]});$this->feeder=New Feeder();$this->biodata=New MBiodata();$this->versiapp=New Versiapp();$this->cekserverfeeder=New Cekserver();}}
?>