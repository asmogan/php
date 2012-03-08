<?PHP

/*******************************************************************************
* PHP Download-Handler Script
* - simply replace the downloadPath
* Copyright Sebastian Jenke
********************************************************************************/

$downloadPath = '../download/';

// to prevent file system access - - - - - - - - - - - - - - - - - - - - - - - -
$cFile = $_GET['file'];
$cFile = str_replace('../../','',$cFile);
$file = $downloadPath.$cFile;

if(file_exists($file)){
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}

?>