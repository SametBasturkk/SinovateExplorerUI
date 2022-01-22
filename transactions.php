<?php  include 'header.php' ?>

<style>
    td.sinoutput.amountSIN {
        text-align: right;
    }
</style>


<div class="col-md-12 transactionTop">
    <img class="transaction" src="/assets/img/transactionsImg.svg" />
    <p class="transactionId">TRANSACTION ID</p>
    <p class="transactionHash">7ccadf3ea47a97d206c955102dd9acb31c78dfc2c744d74b88aae0bfedcab027</p>
    <?php  include 'statsTransactions.php' ?>
    <img style="display: block;margin-top: 24px; margin-bottom:45px;" src="/assets/img/hrtransactions.svg" />
</div>

<div class="col-md-12 dflex">
    <div class="col-md-5">
        <div style="margin:auto; max-width: fit-content;">
            <h1 id="latesttransactions" class="sidebarhead transactions">INPUT ADDRESS<br></h1>
            <table class=transactions style="width:650px;">
                <thead class="blockshead">
                    <tr>
                        <th class="trHead transactionTh">Address</th>
                        <th class="trHead transactionTh amountTh">Amount</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="sinoutput hashTransaction">
                            a832277dbfbf1c4a5c07f7c3bdd1788bc140677b3860bdf50b5c9e9ad514269b
                        </td>
                        <td class="sinoutput amountSIN">
                            1,000,000 SIN
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-2">
        <div class="inputrecip">
            <p class="input">Inputs</p>
            <p class="amountSIN">1,000,000 SIN</p>
            <p class="input output">RECIPIENTS</p>
            <p class="amountSIN">1,000,000 SIN</p>
        </div>
    </div>


    <div class="col-md-5">
        <div style="margin:auto; max-width: fit-content;">
            <h1 id="latesttransactions" class="sidebarhead transactions">RECIPIENTS<br></h1>
            <table class=transactions style="width:650px;">
                <thead class="blockshead">
                    <tr>
                        <th class="trHead transactionTh">Address</th>
                        <th class="trHead transactionTh amountTh">Amount</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="sinoutput hashTransaction">
                            a832277dbfbf1c4a5c07f7c3bdd1788bc140677b3860bdf50b5c9e9ad514269b
                        </td>
                        <td class="sinoutput amountSIN">
                            1,000,000 SIN
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>