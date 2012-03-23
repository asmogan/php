<?PHP
    /***************************************************************************
    * - List of common functions  (stuff i need often)
    *
    *
    ***************************************************************************/
    
    ############################################################################
    function reloadPage($page,$myTimeOut){
        $reload = '';
        if($page!=''){
            $reload = '';
            $reload .= '<script type="text/javascript">'."\n";
            $reload .= '<!--'."\n";
            $reload .= 'window.setTimeout("self.location.href=\'http://'.$page.'\'", '.$myTimeOut.');'."\n";
            $reload .= '-->'."\n";
            $reload .= '</script>'."\n";
        }
        return $reload;
    }
    #############################################################################
    function alertError($givenError,$page,$myTimeOut){
        $alert = '';
        if($givenError!=''){
            $alert = '';
            $alert .= '<script type="text/javascript">'."\n";
            $alert .= '<!--'."\n";
            $alert .= 'var Check = confirm(\''.$givenError.'\');'."\n";
            $alert .= 'if (Check == true || Check == false){'."\n";
            $alert .= 'window.setTimeout("self.location.href=\'http://'.$page.'\'", '.$myTimeOut.');'."\n";
            $alert .= '}'."\n";
            $alert .= '-->'."\n";
            $alert .= '</script>'."\n";
        }
        return $alert;
    }
    ############################################################################
    function scanCurrentDir($currentDir){
        $countFiles  = array();
        $verzeichnis = openDir($currentDir);
        
        while ($file = readDir($verzeichnis)) {
            if ($file != "." && $file != ".." && $file != "index.php" && $file != "index.html") {
                $countFiles[] = $file;
            }
        }
        if(count($countFiles) < 1){
            $countFiles = false;
        }
        
        closeDir($verzeichnis);
        return $countFiles;
    }
    ############################################################################
    function format_bytes($bytes) {
       if ($bytes < 1024) return $bytes.' B';
       elseif ($bytes < 1048576) return round($bytes / 1024, 2).' KB';
       elseif ($bytes < 1073741824) return round($bytes / 1048576, 2).' MB';
       elseif ($bytes < 1099511627776) return round($bytes / 1073741824, 2).' GB';
       else return round($bytes / 1099511627776, 2).' TB';
    }
    ############################################################################
    function getFileImg($datei){
        
        #global $imgPath; global $srvPath;
        
        $getExtension = strstr($datei,".");
        $getExtension = str_replace('.','',$getExtension);
        $getIMG       = '<img src="lib/img/'.$getExtension.'.gif" alt="" border="0">';
        
        // if file does not exists, take a placeholder gif
        if(!file_exists('lib/dl/img/'.$getExtension.'.gif')){
          $getIMG     = '<img src="lib/img/p.gif" width="16" height="16" alt="" border="0">';
        }
        return $getIMG;
    }
    ############################################################################
?>