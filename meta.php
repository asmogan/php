<?PHP
    
    $keywords = Array(
                    'u',
                    'can',
                    'insert',
                    'a',
                    'lot',
                    'of',
                    'keywords',
                    'here',
                );
    
    $space = ''; $AllKeywords = '';
    for($i=0;$i<count($keywords);$i++){
        $AllKeywords .= $space.$keywords[$i];
        $space = ', ';
    }
    
    $charset     = 'utf-8';
    $description = 'thats a sick description';
    $author      = 'Sebastian Jenke';
    $copyright   = 'Sebastian Jenke';
    $designer    = 'Sebastian Jenke';
    $adress      = 'Fakestreet 123, 00000 Town, Deutschland';
    $geoposition = '52.518937;13.375511';
    $georegion   = 'DE-SN';
    
    function getMetaContent($currentLangue){
    $metainfo = '<meta name="language" content="'.strtolower($currentLangue).'">
        <meta http-equiv="content-type" content="text/html; charset='.$charset.'">
        <meta http-equiv="Content-Language" content="'.strtolower($currentLangue).'">
        <meta http-equiv="Content-Script-Type" content="text/javascript">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta name="description" content="'.$description.'">
        <meta name="author" content="'.$author.'">
        <meta name="copyright" content="'.$copyright.'">
        <meta name="designer" content="'.$designer.'">
        <meta name="keywords" content="'.$AllKeywords.'">
        <meta name="robots" content="all">
        <meta name="revisit-after" content="20 days">
        <meta name="geo.placename" content="'.$adress.'">
        <meta name="geo.position" content="'.$geoposition.'">
        <meta name="geo.region" content="'.$georegion.'">
        <meta name="ICBM" content="'.$geoposition.'">
    ';
        return $metainfo;
    }
?>