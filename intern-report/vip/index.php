

include_once("/vip/sessionguard.php");
include_once("/vip/handwash.class.php");
$sop = new HandWash();
if(isset($_REQUEST['id']) && $_REQUEST['id']!=''){
	$_REQUEST['id']  = $sop->handwashString($_REQUEST['id'] );
	$_GET['id'] = $_REQUEST['id'] ;
}