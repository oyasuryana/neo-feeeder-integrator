<?php namespace App\Controllers;${"G\x4c\x4f\x42\x41\x4cS"}["\x73\x62\x75\x62\x70\x6b\x6b\x61sn\x73"]="\x72\x65\x73u\x6c\x74";${"\x47L\x4f\x42\x41\x4c\x53"}["\x6f\x71s\x64\x78\x72"]="\x63\x6d\x64\x4c\x69s\x74\x4cu\x6c\x75\x73\x61\x6e";${"\x47\x4c\x4f\x42A\x4cS"}["\x6d\x6f\x75\x75m\x78qkp\x67"]="\x66i\x6c\x74e\x72\x4cul\x75s\x61\x6e";${"\x47\x4c\x4f\x42\x41L\x53"}["p\x67\x79v\x76\x73b\x62"]="d\x61\x74\x61";${"G\x4cOB\x41L\x53"}["\x61k\x75\x72\x75\x6b\x75\x63\x6b"]="\x63\x6d\x64\x4ci\x73\x74\x50r\x6f\x64i";use App\Controllers\BaseController;class Laporan extends BaseController{public function index(){}public function setDataLulusan(){$ijlyswkex="c\x6d\x64\x4c\x69s\x74\x50\x72o\x64\x69";${$ijlyswkex}=["\x74\x6f\x6ben"=>$this->getToken(),"\x61\x63t"=>"\x47etPr\x6f\x64i"];${"G\x4c\x4fB\x41\x4c\x53"}["\x6acfb\x76y\x75"]="d\x61t\x61";${${"\x47\x4cOB\x41\x4c\x53"}["j\x63f\x62\x76y\x75"]}=["\x6audu\x6c"=>"\x44at\x61\x20L\x75l\x75s\x61n","\x69\x6etro\x54\x65ks"=>"\x42e\x72\x69\x6bu\x74\x20d\x61ft\x61\x72\x20l\x75\x6cusan\x20\x79a\x6e\x67 t\x65\x72\x64\x61f\x74ar di\x20\x50\x44\x44IK\x54I \x73\x69\x6c\x61\x68ka\x6e\x20te\x6et\x75\x6ba\x6e\x20\x70\x61rame\x74\x65\x72 \x74e\x72\x6c\x65\x62ih\x20\x64\x61hu\x6cu","\x6c\x69stPr\x6fdi"=>json_decode($this->feeder->runWS(${${"G\x4cO\x42\x41\x4c\x53"}["\x61\x6b\x75r\x75\x6bu\x63\x6b"]}),true)];return view("\x61d\x6d\x69n\x50\x54/la\x70\x6f\x72a\x6e/se\x74-\x64\x61\x74\x61-l\x75l\x75sa\x6e",${${"\x47\x4c\x4f\x42\x41L\x53"}["\x70\x67y\x76\x76\x73\x62b"]});}public function dataLulusan(){$cbgncsknkuj="\x63m\x64\x4c\x69stL\x75\x6c\x75\x73an";${${"GLOB\x41L\x53"}["\x6d\x6f\x75\x75\x6d\x78\x71k\x70g"]}="i\x64\x5f\x70r\x6f\x64\x69\x3d'".$this->request->getPost("\x69\x64\x5f\x70ro\x64\x69")."' \x41\x4eD\x20i\x64_\x6a\x65\x6e\x69s\x5f\x6bel\x75ar='1'";${${"G\x4cO\x42\x41\x4c\x53"}["\x6f\x71\x73dx\x72"]}=["token"=>$this->getToken(),"a\x63\x74"=>"Ge\x74L\x69\x73t\x4d\x61ha\x73i\x73wa\x4cu\x6c\x75s\x44\x4f","\x6f\x72\x64\x65\x72"=>"\x6e\x69m","f\x69\x6c\x74\x65r"=>${${"\x47\x4c\x4fBA\x4c\x53"}["\x6d\x6f\x75\x75\x6d\x78\x71\x6b\x70g"]},];${${"\x47\x4cOBA\x4cS"}["pgy\x76\x76\x73\x62b"]}=["\x6a\x75\x64u\x6c"=>"D\x61\x74\x61\x20\x4c\x75\x6c\x75\x73\x61\x6e","int\x72oT\x65\x6bs"=>"\x42eri\x6but da\x66\x74ar\x20l\x75l\x75s\x61\x6e y\x61ng\x20terda\x66ta\x72 \x64\x69\x20P\x44D\x49K\x54I","l\x69\x73tL\x75\x6c\x75\x73an"=>json_decode($this->feeder->runWS(${$cbgncsknkuj}),true)];return view("admi\x6e\x50\x54/la\x70o\x72a\x6e/\x64at\x61-lu\x6c\x75\x73\x61n",${${"\x47\x4cOBA\x4cS"}["\x70\x67\x79\x76v\x73\x62b"]});}public function getToken(){$rnshjndxyuc="\x64ata";${$rnshjndxyuc}=["a\x63t"=>"Get\x54\x6f\x6b\x65\x6e","us\x65rna\x6de"=>getenv("ne\x6ff\x65\x65\x64e\x72\x2eu\x73erFe\x65de\x72"),"\x70a\x73s\x77\x6f\x72d"=>getenv("ne\x6f\x66e\x65\x64\x65r.pa\x73s\x46\x65\x65de\x72")];${${"\x47L\x4f\x42\x41\x4c\x53"}["\x73b\x75\x62pkk\x61\x73\x6es"]}=json_decode($this->feeder->runWS(${${"G\x4cO\x42A\x4c\x53"}["p\x67\x79\x76\x76s\x62\x62"]}),true);return${${"G\x4c\x4fB\x41LS"}["\x73\x62\x75\x62\x70\x6b\x6b\x61\x73\x6e\x73"]}["\x64\x61ta"]["\x74\x6fk\x65\x6e"];}}
?>