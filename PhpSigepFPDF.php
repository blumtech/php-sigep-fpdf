<?php

require_once __DIR__ . '/fpdf.php';

class PhpSigepFPDF extends FPDF
{
    function Output($name='', $dest='')
    {
        $result = parent::Output($name,$dest);
        stream_wrapper_unregister("var");//isso permite que seja gerado dois PDFs na mesma requisição, útil se você quiser gerar a PLP e as etiquetas de uma só vez.
        return $result;
    }
}