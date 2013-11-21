<?php
    $GLOBALS['phpgw_info'] = array();
    $GLOBALS['phpgw_info']['flags']['currentapp'] = 'admin';
    include('../header.inc.php');
    require_once('classes/CertificadoB.php');
    $path1 = $GLOBALS['BASE'] . '/security/classes/Verifica_Certificado_conf.php';
    $arq = file_get_contents($path1);
    echo '<script type="text/javascript" src="certificados.js"  ></script>';
    echo '<div style="padding-left:90px" >';
    echo  '<h2  style="color: #000066">' . lang('Parameters into') . ' ' . $path1 . ':</h2>';
    echo '<table border="0" witdh="80%">';
    echo '<tr >';
    echo '<td valign="top"><b>' . lang('Path BASE') . ':</b><br/></td>';
    echo '<td valign="top">';
    echo '<input type="text" name="BASE" value="'. $GLOBALS['BASE'] . '" size="60" READONLY />';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    $aux = explode($GLOBALS['BASE'] . '/',$GLOBALS['dirtemp']);
    echo '<td valign="top"><b>' . lang('Folder to temporary files to digital certificate validation') . ':</b><br/></td>';
    echo '<td valign="top">';
    echo '<input type="text" name="dirtemp" value="'. $aux[1] . '" size="60" READONLY />';
    echo '</td>';
    echo '</tr>';
    echo '<tr >';
    $aux = explode($GLOBALS['BASE'] . '/',$GLOBALS['CAs']);
    echo '<td valign="top"><b>' . lang('File with Certificate Authority(CAs) chains') . ':</b><br/></td>';
    echo '<td valign="top">';
    echo '<input type="text" name="CAs" value="'. $aux[1] . '" size="60" READONLY />';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    $aux = explode($GLOBALS['BASE'] . '/',$GLOBALS['CRLs']);
    echo '<td valign="top"><b>' . lang('Folder with CRLs') . ':<br>
           ' . lang('Empty to disable revogation test') . '.</b></td>';
    echo '<td valign="top">';
    echo '<input type="text" name="CRLs" value="'. $aux[1]. '" size="60" READONLY />';
    echo '</td>';
    echo '</tr>';
    echo '<tr >';
    $aux = explode($GLOBALS['BASE'] . '/',$GLOBALS['arquivos_crls']);
    echo '<td valign="top"><b>' . lang('Point to file with URLs of CRLs') . ':</b></td>';
    echo '<td valign="top">';
    echo '<input type="text" name="arquivos_crls" value="'. $aux[1] . '" size="60" READONLY />';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    $aux = explode($GLOBALS['BASE'] . '/',$GLOBALS['log']);
    echo '<td valign="top"><b>' . lang('File to execution log of get CRLs') . ':</b></td>';
    echo '<td valign="top">';
    echo '<input type="text" name="log" value="'. $aux[1] . '" size="60" READONLY />';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td valign="top"><b>' . lang('Maximum length of file log(bytes)') . ':</b></td>';
    echo '<td valign="top">';
    echo '<input type="text" name="log" value="'. $GLOBALS['lenMax'] . '" size="60" READONLY />';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td valign="top"><b>' . lang('Maximum number of files log to retain') . ':</b></td>';
    echo '<td valign="top">';
    echo '<input type="text" name="log" value="'. $GLOBALS['bkpNum'] . '" size="60" READONLY />';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
    echo '<br/>';
    echo '<a href="../security/security_admin.php" style="text-decoration:none"><input type="button" value="' . lang('Back') . '"/></a>';
    echo '<div>';
?>