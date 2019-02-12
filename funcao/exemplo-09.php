<?php
$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        // Início subordinados CEO
        'subordinado' => array(
            array(
                'nome_cargo'=>'Diretor Comercial',
                "subordinado"=> array(
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                )
            ),
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinado'=> array(
                    array(
                        'nome_cargo'=>'Supervisor de Pagamentos'
                    ),
                    array(
                        'nome_cargo'=>'Gerente de compras',
                        'subordinado'=> array(
                            array(
                                'nome_cargo'=>'Supervisor de Suprimentos'
                            )
                        )
                    )
                )
            )
        )
    )
    // Fim subordinados CEO
);

function exibe($cargos){
    $html = '<ul>';
    
    foreach($cargos as $cargo){
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
        $html .= "</li>";
        
        if(isset($cargo['subordinado'])){
            $html .= exibe($cargo['subordinado']);
        }
    }
    $html .= '</ul>';
    
    return $html;
}

echo exibe($hierarquia);
?>