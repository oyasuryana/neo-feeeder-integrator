<?php namespace App\Controllers;${"\x47\x4cO\x42A\x4c\x53"}["b\x72\x77d\x7a\x6a\x72i\x68\x64\x76"]="\x6e\x69\x6ca\x69\x4d\x68\x73";${"G\x4c\x4fB\x41\x4cS"}["\x70\x6e\x79\x6f\x70\x6d\x66gqep"]="A\x6bti\x66ita\x73\x4dh\x73";${"\x47L\x4f\x42A\x4cS"}["py\x64k\x66\x70m\x72\x77\x65e"]="\x72\x69\x77\x61\x79\x61\x74\x53\x74\x75\x64i";${"\x47\x4cOB\x41\x4cS"}["\x76q\x70d\x7ad\x72\x73"]="d\x61\x74a";${"\x47\x4c\x4fB\x41LS"}["k\x6b\x6b\x68\x6b\x64\x6c"]="\x42\x69od\x61ta\x4dh\x73";${"GLO\x42ALS"}["g\x6e\x74\x63\x69\x6c\x67\x72n"]="\x66i\x6c\x74\x65\x72\x5f\x6d\x68\x73";use App\Controllers\BaseController;class Akademik extends BaseController{public function index(){}public function daftarWisuda(){$ijjnkgcttb="f\x69\x6c\x74\x65r\x5f\x6dh\x73";${${"GLO\x42ALS"}["\x67\x6e\x74\x63il\x67\x72\x6e"]}="\x69d\x5f\x6da\x68as\x69\x73wa\x3d'".session()->get("\x69d\x5fm\x61ha\x73iswa")."\x27";${${"\x47L\x4f\x42AL\x53"}["\x6b\x6bkh\x6bdl"]}=array("\x74ok\x65\x6e"=>$this->getToken(),"\x61ct"=>"Get\x42i\x6fd\x61\x74aM\x61h\x61\x73\x69\x73\x77a","filt\x65\x72"=>${$ijjnkgcttb});${${"\x47\x4c\x4fBA\x4c\x53"}["\x76\x71\x70\x64\x7a\x64\x72\x73"]}["\x64e\x74a\x69\x6cMaha\x73is\x77\x61"]=json_decode($this->feeder->runWS(${${"\x47L\x4f\x42\x41LS"}["\x6bk\x6b\x68k\x64l"]}),true);${${"\x47\x4cOB\x41\x4cS"}["\x76\x71\x70\x64z\x64r\x73"]}["\x6audu\x6c"]="Penda\x66\x74a\x72\x61\x6e\x20W\x69\x73\x75da";return view("\x61ka\x64\x65mi\x6b/\x64aft\x61\x72\x5f\x77\x69su\x64\x61",${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x76q\x70dz\x64r\x73"]});}public function riwayatStudi(){$giedbxiwvsu="\x72\x69\x77\x61\x79\x61\x74\x53tu\x64\x69";${"G\x4c\x4fB\x41\x4c\x53"}["\x75vok\x72\x78ik\x63\x68"]="\x66\x69lt\x65r_m\x68\x73";$dycntskkux="\x64\x61\x74\x61";${${"\x47\x4c\x4f\x42\x41L\x53"}["u\x76\x6fkr\x78ik\x63h"]}="\x69\x64_m\x61\x68a\x73isw\x61='".session()->get("id_m\x61hasi\x73w\x61")."\x27 ";${$giedbxiwvsu}=array("\x74\x6f\x6ben"=>$this->getToken(),"act"=>"G\x65tLi\x73\x74Ri\x77a\x79atP\x65nd\x69d\x69\x6ba\x6eM\x61\x68a\x73i\x73wa","fil\x74\x65r"=>${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x67\x6et\x63\x69\x6c\x67\x72\x6e"]});${${"G\x4cO\x42A\x4c\x53"}["\x76q\x70d\x7ad\x72\x73"]}["l\x69s\x74R\x69way\x61t\x53\x74\x75di"]=json_decode($this->feeder->runWS(${${"\x47L\x4f\x42\x41\x4c\x53"}["p\x79\x64\x6b\x66\x70m\x72\x77\x65e"]}),true);${${"\x47\x4c\x4fB\x41\x4c\x53"}["v\x71p\x64z\x64r\x73"]}["j\x75d\x75\x6c"]="\x44a\x66\x74\x61\x72\x20Ri\x77\x61\x79\x61\x74\x20S\x74u\x64i M\x61h\x61s\x69s\x77\x61";return view("\x61k\x61d\x65m\x69\x6b/riway\x61\x74\x5fstu\x64i",${$dycntskkux});}public function daftarNilai(){${"G\x4cO\x42A\x4cS"}["\x6bhw\x77n\x67\x63\x6d\x75\x6e\x75\x6a"]="\x6e\x69l\x61\x69\x4d\x68\x73";$rjngsxtb="\x64\x61\x74\x61";$pbjhsinuo="ni\x6c\x61\x69\x4d\x68\x73";${${"\x47\x4cO\x42\x41\x4c\x53"}["\x67\x6e\x74\x63i\x6cg\x72\x6e"]}="i\x64_regi\x73\x74\x72\x61\x73\x69_m\x61h\x61sis\x77\x61='".session()->get("i\x64\x5f\x72\x65g\x69s\x74r\x61si\x5fm\x61h\x61\x73\x69sw\x61")."\x27\x20";${$pbjhsinuo}=array("to\x6be\x6e"=>$this->getToken(),"\x61ct"=>"\x47e\x74\x52i\x77\x61ya\x74\x4e\x69\x6cai\x4dah\x61s\x69\x73\x77a","fi\x6cte\x72"=>${${"\x47\x4c\x4fBAL\x53"}["gn\x74\x63\x69lg\x72\x6e"]});${$rjngsxtb}["\x6ci\x73\x74NilaiM\x68s"]=json_decode($this->feeder->runWS(${${"\x47\x4c\x4f\x42\x41\x4cS"}["k\x68\x77\x77\x6e\x67\x63munuj"]}),true);${${"\x47\x4cO\x42A\x4c\x53"}["\x76\x71\x70\x64\x7a\x64\x72\x73"]}["\x6audul"]="\x44\x61fta\x72 R\x69\x77\x61y\x61t\x20Nilai\x20\x4da\x68a\x73\x69\x73\x77\x61";return view("a\x6b\x61demi\x6b/\x64\x61\x66t\x61\x72_\x6e\x69la\x69",${${"\x47L\x4f\x42A\x4c\x53"}["\x76\x71\x70d\x7a\x64r\x73"]});}public function aktifitaskuliah(){$yxfyppwmas="\x66i\x6cter_\x6d\x68s";$qqulwpqrr="d\x61\x74\x61";${$yxfyppwmas}="\x69d_r\x65g\x69\x73\x74\x72\x61si\x5fmah\x61\x73\x69\x73\x77\x61\x3d'".session()->get("\x69\x64\x5f\x72egi\x73\x74\x72\x61\x73i\x5fma\x68a\x73\x69s\x77a")."\x27";${${"G\x4cO\x42A\x4c\x53"}["\x70\x6e\x79o\x70\x6df\x67\x71\x65\x70"]}=array("\x74o\x6b\x65\x6e"=>$this->getToken(),"act"=>"\x47e\x74A\x6b\x74i\x76ita\x73\x4bul\x69a\x68\x4d\x61hasi\x73\x77a","f\x69l\x74\x65\x72"=>${${"GL\x4fB\x41\x4c\x53"}["\x67n\x74\x63\x69\x6c\x67r\x6e"]},"\x6frder"=>"\x69\x64\x5f\x73\x65me\x73ter");${$qqulwpqrr}["l\x69\x73\x74A\x6b\x74if\x69ta\x73\x4d\x68\x73"]=json_decode($this->feeder->runWS(${${"GL\x4f\x42A\x4c\x53"}["\x70\x6e\x79o\x70\x6d\x66\x67\x71\x65p"]}),true);${${"\x47L\x4f\x42A\x4cS"}["\x76\x71\x70d\x7adrs"]}["j\x75d\x75l"]="Akti\x66\x69ta\x73\x20Kuliah Mah\x61\x73i\x73w\x61";return view("ak\x61d\x65m\x69\x6b/akt\x69fit\x61\x73_\x6b\x75\x6c\x69\x61h",${${"\x47LOBALS"}["\x76\x71\x70d\x7a\x64\x72\x73"]});}public function hasilStudi(){${"\x47\x4c\x4f\x42A\x4c\x53"}["g\x79\x68\x74\x69f"]="f\x6f\x72\x6d\x56alida\x73\x69";$mcfsespmi="\x41kt\x69fi\x74a\x73\x4d\x68\x73";helper(["f\x6frm"]);$eucsxi="\x64\x61\x74a";${"GL\x4fB\x41L\x53"}["wsg\x70\x64x\x6a\x6b"]="\x66or\x6dV\x61l\x69\x64\x61\x73\x69";${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x67y\x68\x74\x69\x66"]}=["\x69\x64\x5fs\x65me\x73te\x72"=>"req\x75\x69re\x64"];${${"\x47\x4cO\x42\x41LS"}["\x67\x6etcilgr\x6e"]}="\x69d_re\x67i\x73\x74\x72as\x69\x5f\x6dahasisw\x61\x3d\x27".session()->get("\x69\x64\x5fr\x65\x67\x69st\x72\x61s\x69_maha\x73i\x73wa")."\x27";${$mcfsespmi}=array("\x74o\x6ben"=>$this->getToken(),"ac\x74"=>"Ge\x74A\x6bt\x69v\x69\x74\x61\x73\x4b\x75liah\x4da\x68\x61s\x69sw\x61","\x66il\x74\x65\x72"=>${${"\x47\x4c\x4fB\x41\x4c\x53"}["g\x6e\x74ci\x6cgr\x6e"]},"\x6fr\x64er"=>"\x69\x64_\x73\x65m\x65ste\x72\x20des\x63");${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x76q\x70\x64\x7a\x64\x72s"]}["l\x69s\x74\x41ktif\x69ta\x73Mh\x73"]=json_decode($this->feeder->runWS(${${"\x47\x4cO\x42A\x4c\x53"}["p\x6ey\x6f\x70\x6dfg\x71ep"]}),true);if($this->validate(${${"\x47\x4cO\x42A\x4cS"}["ws\x67\x70d\x78j\x6b"]})){${${"\x47\x4cO\x42A\x4cS"}["\x67\x6e\x74\x63\x69\x6c\x67r\x6e"]}="\x69d\x5freg\x69s\x74ra\x73\x69\x5fmaha\x73\x69swa='".session()->get("i\x64\x5fr\x65\x67i\x73\x74ras\x69_\x6d\x61ha\x73\x69\x73\x77\x61")."\x27 AND\x20\x69\x64_periode='".$this->request->getPost("i\x64_\x73\x65\x6d\x65\x73t\x65\x72")."'";${"\x47\x4c\x4fB\x41\x4c\x53"}["\x6a\x64\x6d\x7a\x6a\x64jt\x66\x64\x77"]="n\x69\x6c\x61\x69Mh\x73";${${"G\x4c\x4fBA\x4c\x53"}["\x6ad\x6d\x7a\x6a\x64\x6a\x74\x66dw"]}=array("\x74ok\x65\x6e"=>$this->getToken(),"act"=>"\x47\x65\x74R\x69\x77ay\x61\x74\x4eil\x61\x69M\x61\x68\x61siswa","\x66\x69\x6c\x74e\x72"=>${${"\x47L\x4fB\x41\x4cS"}["\x67nt\x63\x69l\x67r\x6e"]});${${"G\x4c\x4f\x42\x41\x4cS"}["\x76\x71p\x64\x7a\x64r\x73"]}["\x6ci\x73\x74\x4eil\x61\x69\x4dh\x73"]=json_decode($this->feeder->runWS(${${"\x47L\x4f\x42A\x4cS"}["\x62\x72\x77d\x7aj\x72\x69h\x64\x76"]}),true);}${${"G\x4c\x4f\x42A\x4c\x53"}["v\x71\x70d\x7adrs"]}["ju\x64u\x6c"]="\x44\x61\x66\x74\x61\x72\x20R\x69w\x61y\x61t\x20\x4ei\x6cai\x20M\x61\x68a\x73\x69sw\x61";return view("\x61\x6ba\x64em\x69\x6b/\x68\x61sil\x5f\x73\x74udi",${$eucsxi});}public function getToken(){${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x76qp\x64z\x64r\x73"]}=array("\x61ct"=>"\x47e\x74\x54\x6f\x6b\x65n","u\x73ern\x61m\x65"=>getenv("\x6eeo\x66ee\x64\x65\x72.u\x73er\x46\x65ed\x65r"),"\x70\x61s\x73\x77\x6f\x72\x64"=>getenv("neof\x65e\x64\x65\x72\x2e\x70\x61s\x73F\x65\x65\x64er"));${"\x47\x4c\x4fBA\x4cS"}["c\x76\x65y\x65\x72gp\x78\x66"]="re\x73\x75\x6c\x74";$gvxqlb="r\x65s\x75l\x74";${"\x47\x4c\x4fBA\x4c\x53"}["ie\x6et\x72e\x7a\x63\x7a\x6cs"]="\x64\x61ta";${$gvxqlb}=json_decode($this->feeder->runWS(${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x69e\x6et\x72\x65\x7ac\x7als"]}),true);return${${"G\x4c\x4fB\x41\x4cS"}["\x63\x76e\x79e\x72\x67p\x78\x66"]}["d\x61ta"]["\x74\x6f\x6b\x65n"];}}
?>