<?php 
$paragrafo = 'Nella tranquilla campagna toscana, tra colline verdi e vigneti ordinati, si nasconde un piccolo villaggio medievale chiamato Montefiorello. Questo borgo, con le sue stradine strette e le case in pietra dal fascino antico, sembra essersi fermato nel tempo, offrendo ai visitatori una finestra sul passato. Le vie acciottolate, su cui risuonano ancora i passi di generazioni di contadini e artigiani, conducono alla piazza principale, dove si erge maestosa la chiesa di San Lorenzo. Costruita nel XIII secolo, la chiesa è un esempio perfetto di architettura romanica, con la sua facciata semplice e interno ricco di affreschi secolari che narrano storie di santi e diavoli. Di fronte alla chiesa, un antica fontana in pietra zampilla incessantemente, offrendo ristoro ai viandanti e agli abitanti del villaggio, che spesso si ritrovano lì per scambiarsi notizie e racconti. Attorno alla piazza, piccoli caffè e botteghe artigiane vendono prodotti locali, come olio di oliva, il vino Chianti e ceramiche decorate a mano, che attirano turisti da ogni parte del mondo. La bellezza di Montefiorello non risiede solo nella sua architettura o nei suoi paesaggi mozzafiato, ma anche nella sua capacità di conservare tradizioni e usanze che altrove si sono perse. Qui, ogni estate, si celebra la festa del raccolto con sfilate in costume, musica folcloristica e banchetti aperto, dove si possono gustare piatti tipici preparati secondo ricette antiche tramandate di generazione in generazione. Montefiorello, con il suo ritmo lento e la sua atmosfera serena, rappresenta un oasi di pace in un mondo sempre più frenetico, un luogo dove il tempo sembra scorrere con una dolcezza dimenticata, invitando chiunque vi metta piede a rallentare, respirare profondamente e godere delle piccole gioie della vita.';


$frasi = explode('.', $paragrafo); 

$nuovoParagrafo = '';

foreach ($frasi as $frase) {
    $nuovoParagrafo .= '<p>' . $frase . '.</p>';
}

echo $nuovoParagrafo;

?>