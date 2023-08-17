<?php 

	require_once 'vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);

	$mpdf->setAutoBottomMargin = 'stretch';

	ob_start();

	$mpdf->SetTitle('Titulo do PDF');

?>

Apenas um teste

<?php
	$html = ob_get_contents();
	ob_end_clean();

	$mpdf->WriteHTML($html);

    //Essa opção força o download do pdf quando abre ele
    $mpdf->Output('nome_do_pdf.pdf', 'D');

    //Essa opção exibe o pdf
    //$mpdf->Output();

?>