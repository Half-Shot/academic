<?php
App::import('Vendor', 'html2pdf/html2pdf');
$pdf = new HTML2PDF('P','A4','fr', false, 'ISO-8859-15', array(25, 12, 25, 12));
$pdf->pdf->SetDisplayMode('fullpage');

$content = utf8_decode($content_for_layout);
$pdf->writeHTML($content);

$pdf->Output('article.pdf');