<?php
$transactions = array_map( function( $transaction ) {
    $transaction[ "amount" ] = abs( $transaction[ "debit" ] - $transaction[ "credit" ] );
    return $transaction;
}, $transactions );
?>